@extends("layout")

@section("content")
<div class="container">
    <div class="card">
        <div class="card-header">
            <div class="row">
                <div class="col-md-6">
                    <h1>CRUD Student</h1>
                </div>
                <div class="col-md-6">
                    <a href="{{route('sinhvien.create')}}" class="btn btn-primary float-end">Create</a>
                </div>
            </div>
        </div>
        <div class="card-body">
            @if(Session::has('thongbao'))
                <div class="alert alert-success">
                {{Session::get('thongbao')}}
                </div>
            @endif
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>STT</th>
                        <th>Ma SV</th>
                        <th>Ho Ten</th>
                        <th>Ngay sinh</th>
                        <th>Gioi tinh</th>
                        <th>Dia chi</th>
                        <th>So DT</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($sinhvien as $sv)
                    <tr>
                        <td>{{++$i}}</td>
                        <td>{{$sv->MaSV}}</td>
                        <td>{{$sv->HoTen}}</td>
                        <td>{{$sv->NgaySinh}}</td>
                        <td>{{$sv->GioiTinh}}</td>
                        <td>{{$sv->DiaChi}}</td>
                        <td>{{$sv->SoDT}}</td>
                        <td>
                            <form action="{{route('sinhvien.destroy',$sv->id)}}" method="POST">
                                <a href="{{route('sinhvien.edit',$sv->id)}}" class="btn btn-info">Update</a>
                                @csrf 
                                @method("DELETE")
                                <button type="submit" class="btn btn-danger">Delete</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </div>
</div>
@endsection