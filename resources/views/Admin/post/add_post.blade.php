@extends('admin.index')
@push('scripts')
    <!-- dropify js -->
    <script src="{{ asset('admin/assets/libs/dropify/dropify.min.js') }}"></script>
    <!-- form-upload init -->
    <script src="{{ asset('admin/assets/js/pages/form-fileupload.init.js') }}"></script>
    <script>
        toastr.options = {
            "closeButton": false,
            "debug": false,
            "newestOnTop": false,
            "progressBar": false,
            "positionClass": "toast-top-right",
            "preventDuplicates": false,
            "onclick": null,
            "showDuration": "300",
            "hideDuration": "1000",
            "timeOut": "5000",
            "extendedTimeOut": "1000",
            "showEasing": "swing",
            "hideEasing": "linear",
            "showMethod": "fadeIn",
            "hideMethod": "fadeOut"
        }

        $('.form-horizontal:first').submit(function(e) {
            e.preventDefault();
            $.ajax({
                url: '{{ url('api/post') }}',
                type: 'post',
                data: new FormData(this),
                processData: false,
                contentType: false,
                success: function(response) {
                    $(':reset').click();
                    $('.dropify-clear:first').click();
                    toastr.success('Thêm thành công!', 'Xem danh sách để kiểm tra')
                },
                error: function(error) {
                    toastr.error('Lỗi thêm bài viết!', 'Vui lòng kiểm tra lại thông tin')
                }
            });
        });
    </script>
@endpush
@push('styles')
    <!-- dropify -->
    <link href="{{ asset('admin/assets/libs/dropify/dropify.min.css') }}" rel="stylesheet" type="text/css" />
@endpush
@section('content')
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-12">
                                <div class="p-2">
                                    <form class="form-horizontal" role="form" enctype="multipart/form-data">
                                        @csrf
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Tiêu đề</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="Nhập tiêu đề"
                                                    name="m_title">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Slug</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="Nhập slug"
                                                    name="m_slug">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Tóm tắt bài viết</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="5" placeholder="Nhập tóm tắt bài viết" name="m_desc"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Nội dung bài viết</label>
                                            <div class="col-md-10">
                                                <textarea class="form-control" rows="5" placeholder="Nhập nội dung bài viết" name="m_content"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Meta từ khóa</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="Nhập meta từ khóa"
                                                    name="m_meta_keyword">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Meta nội dung</label>
                                            <div class="col-md-10">
                                                <input type="text" class="form-control" placeholder="Nhập meta nội dung"
                                                    name="m_meta_desc">
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Trạng thái hiển thị</label>
                                            <div class="col-md-10 row mt-1">
                                                <div class="custom-control custom-radio">
                                                    <input type="radio" id="hidden" name="m_status" value="0"
                                                        class="custom-control-input">
                                                    <label class="custom-control-label" for="hidden">Ẩn</label>
                                                </div>
                                                <div class="custom-control custom-radio ml-4">
                                                    <input type="radio" id="show" name="m_status" value="1"
                                                        class="custom-control-input" @checked(true)>
                                                    <label class="custom-control-label" for="show">Hiện</label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group row">
                                            <label class="col-md-2 col-form-label">Hình ảnh</label>
                                            <div class="col-md-4">
                                                <div class="card-box">
                                                    <input type="file" name="m_image" class="dropify"
                                                        data-default-file="" />
                                                </div>
                                            </div><!-- end col -->
                                        </div>
                                        <div class="form-group text-right mb-0">
                                            <button class="btn btn-primary waves-effect waves-light mr-1" type="submit">
                                                Thêm bài viết
                                            </button>
                                            <button type="reset" class="btn btn-secondary waves-effect waves-light">
                                                Hủy
                                            </button>
                                        </div>
                                    </form>
                                </div>
                            </div>

                        </div>
                        <!-- end row -->

                    </div> <!-- end card-box -->
                </div><!-- end col -->
            </div>
            <!-- end row -->
        </div>
    </div>
@endsection