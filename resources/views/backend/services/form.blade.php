@extends('backend.layouts.master')


@section('title', 'Form thêm và chỉnh sửa dịch vụ')
@section('content')
    <div class="container-fluid">

        <form
            action="{{ isset($services) && $services->id ? route('admin.services.update', $services->id) : route('admin.services.store') }}"
            method="POST" enctype="multipart/form-data" id="myForm">
            @csrf

            @if (isset($services) && $services->id)
                @method('PUT')
            @endif

            <div class="row">
                <!-- Cột trái: Nội dung chính -->
                <div class="col-lg-9">
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="form-group mb-3">
                                <label for="name">Tên dịch vụ <span class="text-danger">*</span></label>
                                <input type="text" id="name" name="name"
                                    class="form-control @error('name') is-invalid @enderror" placeholder="Nhập tiêu đề"
                                    value="{{ old('name', $services->name ?? '') }}">
                                @error('name')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="form-group mb-3">
                                <label for="slug">Slug</label>
                                <input type="text" id="slug" name="slug"
                                    class="form-control @error('slug') is-invalid @enderror" placeholder=""
                                    value="{{ old('slug', $services->slug ?? '') }}">
                                <small class="text-muted">Nếu không nhập sẽ tự động lấy theo tên <span
                                        class="text-danger">*</span><span
                                        id="slug-preview">{{ old('slug', $services->slug ?? '') }}</span></small>
                                @error('slug')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Giá tiền --}}
                            <div class="form-group mb-3">
                                <label for="price">Giá tiền <span class="text-danger">*</span></label>
                                <input type="text" name="price" class="form-control"
                                    value="{{ old('price', number_format($services->price ?? 0, 0, ',', '.')) }}">

                                @error('price')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Thời gian --}}
                            <div class="form-group mb-3">
                                <label for="duration">Thời gian <span class="text-danger">*</span></label>
                                <input type="text" id="duration" name="duration"
                                    class="form-control @error('duration') is-invalid @enderror" placeholder="VD: /mo, /6mo"
                                    value="{{ old('duration', $services->duration ?? '') }}">
                                @error('duration')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Mô tả --}}
                            <div class="form-group mb-3">
                                <label for="description">Mô tả</label>
                                <textarea id="description" name="description" class="form-control @error('description') is-invalid @enderror"
                                    rows="4" placeholder="Nhập mô tả">{{ old('description', $services->description ?? '') }}</textarea>
                                @error('description')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                            {{-- Tính năng (features) --}}
                            <div class="form-group mb-3">
                                <label for="features">Tính năng (mỗi dòng 1 mục)</label>
                                <textarea id="features" name="features" class="form-control @error('features') is-invalid @enderror" rows="4"
                                    placeholder="Tính năng 1&#10;Tính năng 2">{{ old('features', is_array($services->features ?? null) ? implode("\n", $services->features) : '') }}</textarea>
                                @error('features')
                                    <div class="invalid-feedback">{{ $message }}</div>
                                @enderror
                            </div>

                        </div>
                    </div>


                    <!-- Thêm vào phần đầu form, sau phần nội dung chính -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <ul class="nav nav-tabs" id="seoTabs" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="basic-tab" data-bs-toggle="tab"
                                        data-bs-target="#basic" type="button" role="tab">
                                        <i class="fas fa-info-circle"></i> SEO Cơ bản
                                    </button>
                                </li>
                            </ul>
                            <div class="tab-content mt-3" id="seoTabsContent">
                                <!-- Tab SEO Cơ bản -->
                                <div class="tab-pane fade show active" id="basic" role="tabpanel">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <!-- SEO Title -->
                                            <div class="form-group mb-3 position-relative">
                                                <label for="seo_title" class="form-label">
                                                    SEO tiêu đề </label>
                                                <input type="text" class="form-control" id="seo_title" name="seo_title"
                                                    value="{{ old('seo_title', $services->seo_title ?? '') }}"
                                                    placeholder="Nhập tiêu đề SEO">
                                            </div>

                                            <!-- SEO Description -->
                                            <div class="form-group mb-3 position-relative">
                                                <label for="seo_description" class="form-label">
                                                    SEO nội dung
                                                </label>
                                                <textarea class="form-control" id="seo_description" name="seo_description" rows="3"
                                                    placeholder="Nhập mô tả SEO">{{ old('seo_description', $services->seo_description ?? '') }}</textarea>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Cột phải: Các khối chức năng -->
                <div class="col-lg-3">
                    <!-- Publish -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <div class="d-flex justify-content-between align-items-center mb-3 pb-2 border-bottom">
                                <h5 class="mb-0" style="font-weight:600;">Đăng bài</h5>
                            </div>
                            <div class="d-flex flex-column gap-2 align-items-center">
                                <button type="submit" class="btn btn-primary btn-lg w-100 mb-2"
                                    style="font-weight:600;">
                                    <i class="fa fa-save me-1"></i> Lưu
                                </button>
                                <button type="submit" class="btn btn-outline-secondary w-100" style="font-weight:600;">
                                    <i class="fa fa-sign-out-alt me-1"></i> Lưu & Thoát
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Catalogue -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <label class="mb-2 fw-semibold">Danh mục <span class="text-danger">*</span></label>
                            <select class="form-select select2" name="category_id" required>
                                <option value="">-- Chọn danh mục --</option>
                                @foreach ($categories as $category)
                                    <option value="{{ $category->id }}" @selected(isset($services->category) && $category->id == $services->category->id)>
                                        {{ $category->name }}
                                    </option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    {{-- Trạng thái (status) --}}
                    <div class="card mb-3">
                        <div class="card-body">
                            <label for="status" class="form-label d-block mb-3">Trạng thái <span
                                    class="text-danger">*</span></label>

                            {{-- hidden input để đảm bảo gửi giá trị 0 nếu checkbox không được check --}}
                            <input type="hidden" name="status" value="0">

                            <label class="switch" data-id="status">
                                <input type="checkbox" id="status" name="status" value="1"
                                    {{ old('status', $services->status ?? 0) ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>

                    {{-- Dịch vụ nổi bật (is_featured) --}}
                    <div class="card mb-3">
                        <div class="card-body">
                            <label for="is_featured" class="form-label d-block mb-3">Dịch vụ nổi bật</label>

                            {{-- hidden input --}}
                            <input type="hidden" name="is_featured" value="0">

                            <label class="switch" data-id="is_featured">
                                <input type="checkbox" id="is_featured" name="is_featured" value="1"
                                    {{ old('is_featured', $services->is_featured ?? 0) ? 'checked' : '' }}>
                                <span class="slider round"></span>
                            </label>
                        </div>
                    </div>



                    {{-- Thứ tự --}}
                    <div class="card mb-3">
                        <div class="card-body">
                            <label for="order" class="mb-3">Thứ tự hiển thị</label>
                            <input type="number" id="order" name="order"
                                class="form-control @error('order') is-invalid @enderror"
                                value="{{ old('order', $services->order ?? 0) }}">
                            @error('order')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                        </div>
                    </div>

                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title fs-6 fw-bold required">Từ khóa seo
                            </h4>
                        </div>
                        <div class="card-body">
                            <input type="text" name="seo_keywords" id="seo_keywords"
                                value="{{ old('seo_keywords', !empty($services->seo_keywords) ? implode(',', $services->seo_keywords) : '') }}">


                        </div>
                    </div>

                    <!-- Thời gian đăng/xóa -->
                    <div class="card mb-3">
                        <div class="card-body">
                            <label for="posted_at" class="form-label">Thời gian đăng </label>
                            <input type="datetime-local" id="posted_at" name="posted_at"
                                class="form-control @error('posted_at') is-invalid @enderror"
                                value="{{ old('posted_at', isset($services->posted_at) ? date('Y-m-d\TH:i', strtotime($services->posted_at)) : '') }}">
                            @error('posted_at')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <label for="remove_at" class="form-label mt-3">Thời gian xóa </label>
                            <input type="datetime-local" id="remove_at" name="remove_at"
                                class="form-control @error('remove_at') is-invalid @enderror"
                                value="{{ old('remove_at', isset($services->remove_at) ? date('Y-m-d\TH:i', strtotime($services->remove_at)) : '') }}">
                            @error('remove_at')
                                <div class="invalid-feedback">{{ $message }}</div>
                            @enderror
                            <small class="text-muted">Để trống nếu không muốn tự động xóa </small>
                        </div>
                    </div>

                </div>
            </div>
        </form>

    </div>
@endsection

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/css/select2.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.default.min.css"
        rel="stylesheet">
    <style>
        .btn-lg {
            font-size: 1.1rem;
            padding: 12px 0;
        }

        .gap-2 {
            gap: 0.5rem;
        }

        .border-bottom {
            border-bottom: 1px solid #f0f0f0 !important;
        }

        .invalid-feedback {
            display: block;
        }

        #seo-card .form-group label {
            font-weight: 500;
        }

        #seo-card .alert-info {
            padding: 8px 12px;
        }

        #seo-card input[type="file"] {
            padding: 4px;
        }

        #edit-seo-btn {
            font-size: 1rem;
            color: #1976d2;
            text-decoration: none;
        }

        #edit-seo-btn:hover {
            text-decoration: underline;
        }

        .tag-label-icon {
            font-size: 1em;
            color: #8a99b3;
            margin-left: 6px;
            vertical-align: middle;
        }

        .catalogue-item {
            transition: all 0.3s ease;
        }

        .catalogue-item:hover {
            background-color: #f8f9fa;
        }

        #catalogue-search {
            border-right: none;
        }

        #catalogue-search:focus {
            box-shadow: none;
            border-color: #ced4da;
        }

        .input-group-text {
            border-left: none;
        }

        #catalogue-list {
            max-height: 300px;
            overflow-y: auto;
        }

        #catalogue-list::-webkit-scrollbar {
            width: 6px;
        }

        #catalogue-list::-webkit-scrollbar-track {
            background: #f1f1f1;
        }

        #catalogue-list::-webkit-scrollbar-thumb {
            background: #888;
            border-radius: 3px;
        }

        #catalogue-list::-webkit-scrollbar-thumb:hover {
            background: #555;
        }

        .switch {
            position: relative;
            display: inline-block;
            width: 46px;
            height: 24px;
        }

        .switch input {
            opacity: 0;
            width: 0;
            height: 0;
        }

        .slider {
            position: absolute;
            cursor: pointer;
            top: 0;
            left: 0;
            right: 0;
            bottom: 0;
            background-color: #ccc;
            transition: .4s;
            border-radius: 24px;
        }

        .slider:before {
            position: absolute;
            content: "";
            height: 18px;
            width: 18px;
            left: 3px;
            bottom: 3px;
            background-color: white;
            transition: .4s;
            border-radius: 50%;
        }

        input:checked+.slider {
            background-color: #28a745;
        }

        input:checked+.slider:before {
            transform: translateX(22px);
        }
    </style>
@endpush

@push('scripts')
    <!-- Thư viện -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.13/js/select2.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>
    <script src="{{ asset('library/ckeditor/ckeditor.js') }}"></script>

    <script>
        $(document).ready(function() {
            // Xử lý nút mở SEO
            $('#edit-seo-btn').on('click', function(e) {
                e.preventDefault();
                // $('#seo-form').slideToggle(200);
                // $('#seo-desc').slideToggle(200);
            });

            $('#name').on('input', function() {
                const nameValue = $(this).val();
                const slugValue = slugify(nameValue);
                $('#slug').val(slugValue);
                $('#slug-preview').text(slugValue); // cập nhật preview luôn
            });

            $('.select2').select2({
                placeholder: "-- Chọn danh mục --",
                allowClear: true
            });

            $('#edit-seo-btn-error').on('click', function(e) {
                e.preventDefault();
                $('#seo-form-error').slideToggle(200);
                $('#seo-desc-error').slideToggle(200);
            });

            // Xử lý form submit
            document.querySelector('form').addEventListener('submit', function(e) {
                const checkedRadio = document.querySelector('input[name="category_id"]:checked');
                if (!checkedRadio) {
                    e.preventDefault();
                    alert('Vui lòng chọn một danh mục');
                }
            });

            // Selectize từ khóa SEO
            $(document).ready(function() {
                $('#seo_keywords').selectize({
                    plugins: ['remove_button'],
                    delimiter: ',',
                    persist: false,
                    create: function(input) {
                        return {
                            value: input,
                            text: input
                        };
                    }
                });
            });

            function slugify(str) {
                str = str.normalize('NFD').replace(/[\u0300-\u036f]/g, ''); // Bỏ dấu
                str = str.toLowerCase()
                    .trim()
                    .replace(/[^a-z0-9\s-]/g, '') // Bỏ ký tự đặc biệt
                    .replace(/\s+/g, '-') // Thay khoảng trắng bằng -
                    .replace(/-+/g, '-'); // Loại bỏ dấu - lặp
                return str;
            }

            // Gửi form bằng AJAX
            $('#myForm').on('submit', function(e) {
                e.preventDefault();

                // Cập nhật nội dung CKEditor vào form
                for (instance in CKEDITOR.instances) {
                    CKEDITOR.instances[instance].updateElement();
                }

                // Tạo FormData
                let formData = new FormData(this);

                // Lấy id nếu có
                let id = "{{ isset($services) ? $services->id : '' }}";
                let url = id ? `/admin/services/${id}` : '/admin/services';

                if (id !== "") {
                    formData.append('_method', 'PUT');
                }

                // Gửi AJAX
                $.ajax({
                    url: url,
                    type: "POST",
                    data: formData,
                    contentType: false,
                    processData: false,
                    success: function(res) {
                        window.location.href = "/admin/services";
                    },
                    error: function(xhr) {
                        datgin.error(xhr.responseJSON?.message || 'Đã xảy ra lỗi.');
                    }
                });
            });

            // Gọi các hàm bổ trợ nếu có
            updateCharCount('#seo_title', 60);
            updateCharCount('#seo_description', 160);
            autoGenerateSlug('#title', '#slug');
        });

        $(document).on('input', 'input[name="price"]', function() {
            let val = $(this).val().replace(/\D/g, '');
            $(this).val(Number(val).toLocaleString('vi-VN'));
        });
    </script>
@endpush
