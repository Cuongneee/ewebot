@extends('backend.layouts.master')
@section('title', 'Cấu hình banner')

@section('content')
    <div class="page-header">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item">
                    <a href="{{ url('admin') }}" class="mb-0 d-inline-block lh-1 text-uppercase">
                        Tổng quan
                    </a>
                </li>
                <li class="breadcrumb-item active text-uppercase" aria-current="page">
                    cấu hình chung
                </li>
            </ol>
        </nav>
    </div>

    <form action="{{ route('admin.banners.store') }}" method="post" enctype="multipart/form-data" id="myForm">
        @csrf
        <div class="row">
            <div class="col-lg-9">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Thông tin</h4>
                    </div>
                    <div class="card-body">
                        <div class="row">
                            <div class="mb-3 col-lg-12">
                                <label for="title" class="form-label fw-bold">Tiêu đề</label>
                                <input value="{{ $banner->title }}" id="title" name="title"class="form-control"
                                    type="text" placeholder="Nhập tiêu đề">
                            </div>

                            <div id="animated-texts-wrapper" class="mb-3 col-lg-12">
                                <label for="animated_texts" class="form-label">Chữ động</label>

                                @foreach ($banner->animated_texts ?? [] as $animated_text)
                                    <div class="animated-text-group d-flex gap-2 mb-2">
                                        <input type="text" name="animated_texts[]" class="form-control"
                                            placeholder="Nhập chữ động" value="{{ $animated_text }}">
                                        <button type="button" class="btn btn-danger"
                                            onclick="removeAnimatedTextInput(this)">-</button>
                                    </div>
                                @endforeach

                                <button type="button" class="btn btn-primary btn-sm mt-2"
                                    onclick="addAnimatedTextInput()">+ Thêm chữ động</button>
                            </div>

                            <div class="mb-3 mt-3 col-lg-12">
                                <label for="description" class="form-label fw-bold">Mô tả ngắn</label>
                                <input value="{{ $banner->description }}" id="description"
                                    name="description"class="form-control" type="text"
                                    placeholder="Nhập mô tả ngắn cho banner">
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            <div class="col-lg-3">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title fs-6 fw-bold">Xuất bản</h4>
                    </div>
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary btn-sm fs-6 me-2">
                            <svg class="icon icon-left svg-icon-ti-ti-device-floppy" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M6 4h10l4 4v10a2 2 0 0 1 -2 2h-12a2 2 0 0 1 -2 -2v-12a2 2 0 0 1 2 -2"></path>
                                <path d="M12 14m-2 0a2 2 0 1 0 4 0a2 2 0 1 0 -4 0"></path>
                                <path d="M14 4l0 4l-6 0l0 -4"></path>
                            </svg>
                            Lưu</button>

                        <a href="{{ route('admin.dashboard') }}" class="btn btn-sm btn-light fs-6 border">
                            <svg class="icon icon-left svg-icon-ti-ti-refresh" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                stroke-width="2" stroke-linecap="round" stroke-linejoin="round">
                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                <path d="M20 11a8.1 8.1 0 0 0 -15.5 -2m-.5 -4v4h4"></path>
                                <path d="M4 13a8.1 8.1 0 0 0 15.5 2m.5 4v-4h-4"></path>
                            </svg>
                            Quay lại</a>

                    </div>
                </div>

                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Banner</h4>
                    </div>

                    <div class="card-body">
                        <img class="img-fluid img-thumbnail w-100" id="show_logo_banner" style="cursor: pointer;"
                            src="{{ showImage($banner->image) }}" alt=""
                            onclick="document.getElementById('image').click();">
                        <input type="file" name="image" id="image" class="form-control d-none" accept="image/*"
                            onchange="previewImage(event, 'show_logo_banner')">
                    </div>
                </div>

            </div>
        </div>


    </form>
@endsection

@push('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/js/standalone/selectize.min.js"></script>

    <script>
        $(function() {
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
        })

        function addAnimatedTextInput() {
            const wrapper = document.getElementById('animated-texts-wrapper');

            const div = document.createElement('div');
            div.className = 'animated-text-group d-flex gap-2 mb-2';

            const input = document.createElement('input');
            input.type = 'text';
            input.name = 'animated_texts[]';
            input.placeholder = 'Nhập chữ động';
            input.className = 'form-control';

            const button = document.createElement('button');
            button.type = 'button';
            button.className = 'btn btn-danger';
            button.innerText = '-';
            button.onclick = function() {
                removeAnimatedTextInput(button);
            };

            div.appendChild(input);
            div.appendChild(button);

            // Chèn trước nút thêm
            const addButton = wrapper.querySelector('button.btn-primary');
            wrapper.insertBefore(div, addButton);
        }

        function removeAnimatedTextInput(button) {
            const group = button.parentElement;
            group.remove();
        }
    </script>
@endpush

@push('styles')
    <link href="https://cdnjs.cloudflare.com/ajax/libs/selectize.js/0.12.6/css/selectize.default.min.css"
        rel="stylesheet">
@endpush
