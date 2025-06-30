@extends('backend.layouts.master')

@section('title', 'Nhân viên')

@section('content')
    <div class="page-header">
        @if (session('success'))
            <div class="alert alert-success">
                {{ session('success') }}
            </div>
        @endif
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('admin') }}" class="mb-0 d-inline-block lh-1 text-uppercase">
                        Tổng quan
                    </a>
                </li>
                <li class="breadcrumb-item active text-uppercase" aria-current="page">
                    đội ngũ nhân viên
                </li>
            </ol>
        </nav>
    </div>

    <div class="row">
        <!-- Form Thêm/Sửa Bài Viết -->
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                    <h5 class="card-title mb-0">Thêm/Sửa nhân viên</h5>
                </div>

                <div class="card-body">
                    <form id="postForm"
                        action="{{ isset($review) ? route('admin.employes.update', $review->id) : route('admin.employes.store') }}"
                        method="POST" enctype="multipart/form-data">
                        @csrf


                        <input type="hidden" name="id" id="postId">

                        <div class="mb-3">
                            <label for="name" class="form-label">Tên nhân viên <span
                                    class="text-danger">*</span></label>
                            <input id="name" name="name" class="form-control" type="text"
                                placeholder="Nhập tên nhân viên">
                            <div class="error-message text-danger"></div>
                        </div>

                        <div class="mb-3">
                            <label for="image" class="form-label">Ảnh</label>
                            <img class="img-fluid img-thumbnail w-100" id="show_image"
                                style="cursor: pointer; height: 350px !important;" src="{{ showImage($post->image ?? '') }}"
                                alt="" onclick="document.getElementById('image').click();">
                            <input type="file" name="image" id="image" class="form-control d-none" accept="image/*"
                                onchange="previewImage(event, 'show_image')">
                        </div>

                        <div class="mb-3">
                            <label for="position" class="form-label">Chức vụ <span class="text-danger">*</span></label>
                            <input id="position" name="position" class="form-control" type="text"
                                placeholder="Nhập chức vụ">
                            <div class="error-message text-danger"></div>
                        </div>



                        <div class="d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Lưu</button>
                            <button type="button" id="cancelEdit" style="display: none"
                                class="btn btn-secondary ms-2">Hủy</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- Danh sách bài viết -->
        <div class="col-lg-8">
            <div class="card">
                <div class="card-header d-flex justify-content-between align-content-center">
                    <h3 class="card-title">DANH SÁCH </h3>
                </div>

                <div class="card-body">
                    <div class="table-responsive">
                        <table id="myTable" class="display" style="width:100%">
                            <thead>
                                <tr>
                                    <th><input type="checkbox" id="selectAll" /></th>                      
                                    <th>Tên </th>
                                    <th>Chức vụ</th>

                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection

@push('scripts')
    <link href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css" rel="stylesheet">

    <!-- SweetAlert2 JS -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script src="https://cdn.jsdelivr.net/npm/jquery.scrollbar/jquery.scrollbar.min.js"></script>


    <script src="https://cdn.datatables.net/2.1.8/js/dataTables.js"></script>

    <script>
        $(document).ready(function() {
            const api = '{{ route('admin.employes.index') }}';

            const columns = [{
                    data: "checkbox",
                    name: "checkbox",
                    orderable: false,
                    searchable: false,
                    width: "5px",
                    className: "text-center"
                },
                {
                    data: 'name',
                    name: 'name',
                    orderable: false
                },
                {
                    data: 'position',
                    name: 'position',
                    searchable: false,
                    className: "text-center"
                },              

            ];


            dataTables(api, columns, 'Employe', 8)

            handleDestroy('Employe')

            initStatusToggle({
                model: 'Employe'
            });


            $('#save').click(function(event) {

                if (!validateForm()) {
                    event.preventDefault();
                    return; // Dừng nếu có lỗi
                }
                submitForm('#postForm', function(event) {
                    $('#myTable').DataTable().ajax.reload(); // Reload bảng sau khi lưu
                    reset();
                })
            })

            $(document).on('click', '.edit', function() {
                let name = $(this).data('name');
                let image = $(this).data('image');
                let position = $(this).data('position');
                let id = $(this).closest('tr').data('id');

                // Gán dữ liệu vào form
                $('#name').val(name);
                $('#position').val(position);             
                $('#postId').val(id);

                let imageUrl = "{{ asset('storage') }}/" + image;
                $('#show_image').attr('src', imageUrl);

                // Gán action và method mới
                $('#postForm').attr('action', "{{ route('admin.employes.update', ':id') }}".replace(':id',
                    id));

                // Xóa method cũ nếu có, thêm method PUT
                $('#postForm input[name="_method"]').remove();
                $('#postForm').append('<input type="hidden" name="_method" value="PUT">');

                $('#cancelEdit').show().on('click', function() {
                    reset();
                });
            });



            function validateForm() {
                let isValid = true;
                $('.error-message').text('').hide();

                let name = $('#name').val().trim();
                let position = $('#position').val().trim();

                if (!name) {
                    $('#name').next('.error-message').text('Vui lòng nhập tiêu đề').show();
                    isValid = false;
                }
                if (!position) {
                    $('#position').next('.error-message').text('Vui lòng nhập chức vụ').show();
                    isValid = false;
                }

               
                return isValid;
            }

            function reset() {
                $('#postForm').attr('action', "{{ route('admin.employes.store') }}");
                $('#postForm')[0].reset();
                $('#postId').val('');
                $('#show_image').attr('src', '{{ showImage('') }}');
                $('#postForm input[name="_method"]').remove();
                $('#cancelEdit').show();

            }

        })
    </script>
@endpush

@push('styles')
    <link rel="stylesheet" href="https://cdn.datatables.net/2.1.8/css/dataTables.dataTables.css" />

    <link rel="stylesheet" href="{{ asset('backend/assets/css/image-uploader.min.css') }}">
@endpush
