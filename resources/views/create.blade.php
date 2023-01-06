@extends("layout")

@section("content")
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h1>Create Student</h1>
                </div>
                <div class="col-md-6">
                    <a href="{{route('sinhvien.index')}}" class="btn btn-primary float-end">Danh sach sinh vien</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            <form action="{{route('sinhvien.store')}}" method="POST">
                @csrf
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <strong>Ma SV</strong>
                            <input type="text" name="MaSV" class="form-control" placeholder="Nhap ma sinh vien" />
                        </div>
                        <div class="form-group">
                            <strong>Ho ten</strong>
                            <input type="text" name="HoTen" class="form-control" placeholder="Nhap ho ten" />
                        </div>
                        <div class="form-group">
                            <strong>Ngay sinh</strong>
                            <input type="date" name="NgaySinh" class="form-control" />
                        </div>
                        <div class="form-group">
                            <strong>Gioi tinh</strong>
                            <select name="GioiTinh" class="form-select">
                                <option selected>Chon gioi tinh</option>
                                <option value="Male" selected>Nam</option>
                                <option value="Female">Nu</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <strong>Dia chi</strong>
                            <input type="text" name="DiaChi" class="form-control" placeholder="Nhap dia chi" />
                        </div>
                        <div class="form-group">
                            <strong>So dien thoai</strong>
                            <input type="text" name="SoDT" class="form-control" placeholder="Nhap so dien thoai" />
                        </div>
                        <button type="submit" class="btn btn-success mt-2">Save</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection