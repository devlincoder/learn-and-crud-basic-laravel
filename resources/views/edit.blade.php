@extends("layout")

@section("content")
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h1>Sửa thông tin sinh viên</h1>
                </div>
                <div class="col-md-6">
                    <a href="{{route('sinhvien.index')}}" class="btn btn-primary float-end">Danh sách sinh viên</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('sinhvien.update',$sinhvien->id)}}" method="POST">
                @csrf
                @method("PUT")
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Mã sinh viên</strong>
                            <input type="text" name="MaSV" value="{{$sinhvien->MaSV}}" class="form-control" placeholder="Nhập mã sinh viên" />
                        </div>
                        <div class="form-group">
                            <strong>Họ và tên</strong>
                            <input type="text" name="HoTen" value="{{$sinhvien->HoTen}}" class="form-control" placeholder="Nhập họ và tên" />
                        </div>
                        <div class="form-group">
                            <strong>Ngày sinh</strong>
                            <input type="date" name="NgaySinh" value="{{$sinhvien->NgaySinh}}" class="form-control" />
                        </div>
                        <div class="form-group">
                            <strong>Giới tính</strong>
                            <select name="GioiTinh" class="form-select">
                                <option selected>Chọn giới tính</option>
                                <option value="Male" {{$sinhvien->GioiTinh == "Male" ? "selected" : ""}}>Nam</option>
                                <option value="Female" {{$sinhvien->GioiTinh == "Female" ? "selected" : ""}}>Nữ</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Địa chỉ</strong>
                            <input type="text" name="DiaChi" value="{{$sinhvien->DiaChi}}" class="form-control" placeholder="Nhập địa chỉ" />
                        </div>
                        <div class="form-group">
                            <strong>Số điện thoại</strong>
                            <input type="text" name="SoDT" value="{{$sinhvien->SoDT}}" class="form-control" placeholder="Nhập số điện thoại" />
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Sửa thông tin</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection