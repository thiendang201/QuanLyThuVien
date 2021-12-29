@extends('admin.home')
@section('header')
    <script src="/ckeditor/ckeditor.js"></script>
@endsection
@section('content')
    <div class="col-md-6 col-12">
        <div class="card">
            <div class="card-header">
                <h4 class="card-title">Thêm sách</h4>
            </div>
            <div class="card-content">
                <div class="card-body">
                    <form class="form form-horizontal" action="" method="POST">
                        <div class="form-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <label>Tên sách</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="tenSach" value="{{old('tenSach')}}" class="form-control" name="tenSach" placeholder="Nhập tên sách">
                                </div>
                                <div class="col-md-4">
                                    <label>Thể loại</label>
                                </div>
                                <div class="col-md-8 form-group">
{{--                                    <input type="text" id="theLoai" class="form-control" name="theLoai" placeholder="Nhập thể loại">--}}
                                    <select class="form-control" name="danhMuc_id">
                                        @foreach($danhMucs as $danhMuc)
                                            <option value="{{ $danhMuc->id }}">{{ $danhMuc->tenDanhMuc }}</option>
                                        @endforeach
                                    </select>
                                </div>
                                <div class="col-md-4">
                                    <label>Mô tả</label>
                                </div>
                                <div class="col-md-8 form-group">
{{--                                    <input type="text" id="moTa" class="form-control" name="moTa" placeholder="Nhập mô tả">--}}
                                    <textarea id="content" name="moTa" class="form-control">{{old('moTa')}}</textarea>
                                </div>
                                <div class="col-md-4">
                                    <label>Số lượng</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="soLuong" class="form-control" name="soLuong" value="{{old('soLuong')}}" placeholder="Nhập số lượng">
                                </div>
                                <div class="col-md-4">
                                    <label>Tác giả</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="tacGia" class="form-control" name="tacGia" value="{{old('tacGia')}}" placeholder="Nhập tên tác giả">
                                </div>
                                <div class="col-md-4">
                                    <label>Nhà xuất bản</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="NXB" class="form-control" name="NXB" value="{{old('NXB')}}" placeholder="Nhập nhà xuất bản">
                                </div>
                                <div class="col-md-4">
                                    <label>Giá sách</label>
                                </div>
                                <div class="col-md-8 form-group">
                                    <input type="text" id="gia" class="form-control" name="gia" value="{{old('gia')}}" placeholder="Nhập giá quyển sách">
                                </div>
                                <div class="col-md-4">
                                    <label>Ảnh bìa</label>
                                </div>
                                <div class="col-md-8 form-group">
{{--                                    <input type="text" id="anhBia" class="form-control" name="anhBia" placeholder="Chọn ảnh bìa">--}}
                                    <input  id="upload" name="file" class="form-control" type="file">
                                    <div id="image_show">

                                    </div>
                                    <input id="anhBia" type="hidden" name="anhBia">
                                </div>
                                <div class="col-sm-12 d-flex justify-content-end">
                                    <button type="submit" class="btn btn-primary me-1 mb-1">Thêm mới</button>
                                    <button type="reset" class="btn btn-light-secondary me-1 mb-1">Huỷ</button>
                                </div>
                            </div>
                        </div>
                        @csrf
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

@section('footer')
    <script>
        CKEDITOR.replace('content');
    </script>
@endsection
