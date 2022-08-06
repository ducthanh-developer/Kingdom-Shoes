@extends('admin.index')
@section('content')
@if(Session::has('alert_success'))
    <div class="alert alert-success" style="margin-top: 10px;">
        {!! Session::get('alert_success') !!}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
    </div>
@endif
<div class="card card-info">
    <div class="card-header">
        <h3 class="card-title">Thêm sản phẩm</h3>
    </div>
    <form action="{{route('slider.update', $idslider->id)}}" class="form-horizontal" method="post" role="form" enctype="multipart/form-data">
        @csrf @method('PUT')
        <div class="card-body">
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Phụ đề ngắn</label>
                <div class="col-sm-10" style="">
                    <input type="text" class="form-control" name="m_subtitle" value="{{$idslider->m_subtitle}}" placeholder="Nhập phụ đề ngắn">
                    @error('m_subtitle')
                        <ul class="parsley-errors-list filled" id="parsley-id-11" aria-hidden="false">
                            <li class="parsley-required">{{$message}}</li>
                        </ul>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Tiêu đề</label>
                <div class="col-sm-10" style="">
                    <input type="text" class="form-control" name="m_title" value="{{$idslider->m_title}}" placeholder="Nhập tiêu đề">
                    @error('m_title')
                        <ul class="parsley-errors-list filled" id="parsley-id-11" aria-hidden="false">
                            <li class="parsley-required">{{$message}}</li>
                        </ul>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">link đường dẫn</label>
                <div class="col-sm-10" style="">
                    <input type="text" class="form-control" name="m_link" value="{{$idslider->m_link}}" placeholder="Nhập link đường dẫn">
                    @error('m_link')
                        <ul class="parsley-errors-list filled" id="parsley-id-11" aria-hidden="false">
                            <li class="parsley-required">{{$message}}</li>
                        </ul>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Hình ảnh sản phẩm</label>
                <div class="col-sm-10" style="">
                    <input type="file" name="file_upload" class="form-control" placeholder="Nhập hình ảnh sản phẩm">
                    <img src="{{asset('uploads')}}/{{$idslider->m_images}}"width="100px" height="100px" style="margin:5px">
                    @error('file_upload')
                        <ul class="parsley-errors-list filled" id="parsley-id-11" aria-hidden="false">
                            <li class="parsley-required">{{$message}}</li>
                        </ul>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Mô tả ngắn</label>
                <div class="col-sm-10">
                    <textarea class="ckeditor form-control" name="m_description" placeholder="Nhập mô tả ngắn slider">{!!$idslider->m_description!!}</textarea>
                    @error('m_description')
                        <ul class="parsley-errors-list filled" id="parsley-id-11" aria-hidden="false">
                            <li class="parsley-required">{{$message}}</li>
                        </ul>
                    @enderror
                </div>
            </div>
            <div class="form-group row">
                <label for="" class="col-sm-2 col-form-label">Ẩn / Hiện</label>
                <div class="col-sm-10" style="">
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="m_status" value="2" {{($idslider->m_status == 2) ? 'checked':''}}>
                        <label class="form-check-label" for="flexRadioDefault1">
                            Ẩn 
                        </label>
                    </div>
                    <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="m_status" value="1" {{($idslider->m_status == 1) ? 'checked':''}}>
                        <label class="form-check-label" for="flexRadioDefault2">
                            Hiện
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="card-footer text-right mb-0">
            <button type="submit" class="btn btn-info">Submit</button>
            <button type="reset" class="btn btn-secondary waves-effect waves-light">Clear</button>
        </div>
    </form>
</div>
@endsection
@push('scripts')
<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="http://cdn.ckeditor.com/4.14.0/standard/ckeditor.js"></script>
<script type="text/javascript">
    CKEDITOR.replace('noidung');
</script>
<script type="text/javascript">
    CKEDITOR.replace('motangan');
</script>
@endpush
