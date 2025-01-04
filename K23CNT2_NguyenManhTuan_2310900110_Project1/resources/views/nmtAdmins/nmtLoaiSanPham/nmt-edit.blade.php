@extends('_layouts.admins._master')
@section('title','Sửa thông tin loại sản phẩm')

@section('content-body')   
    <div class="container border">
   
    <div class="row">
       <div class="col">
      <form action="{{route('nmtadmins.nmtloaisanpham.nmtEditSubmit')}}" method="post">
        @csrf
        <input type="hidden" name="id" id="id" value="{{$nmtLoaiSanPham->id}}">
      <div class="crad">
        <div class="card-header">
            <h2>Sửa thông tin loại sản phẩm</h2>
        </div>

        <div class="crad-body container-fluid">
            <div class="mb-3 row">
                <label for="nmtMaLoai" class="col-sm-2 col-form-label">Mã Loại</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" 
                  value="{{$nmtLoaiSanPham->nmtMaLoai}}"
                  id="nmtMaLoai" name="nmtMaLoai" />
                </div>
              </div>
              <div class="mb-3 row">
                <label for="nmtTenLoai" class="col-sm-2 col-form-label">Tên Loại</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" 
                        value="{{$nmtLoaiSanPham->nmtTenLoai}}"
                  id="nmtTenLoai" name="nmtTenLoai" />
                </div>
              </div>
              <div class="mb-3 row">
                <label for="nmtTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                <div class="col-sm-10">
                    @if($nmtLoaiSanPham->nmtTrangThai === 1)
                        <input type="radio"   id="nmtTrangThai1" name="nmtTrangThai" value="1"
                        checked/>
                      <label for="nmtTrangThai1">Hiển Thị</label>
                        &nbsp;
                      <input type="radio"   id="nmtTrangThai0" name="nmtTrangThai" value="0"/>
                      <label for="nmtTrangThai0">Khoá</label>
                        
                    @else
                    <input type="radio"   id="nmtTrangThai1" name="nmtTrangThai" value="1"
                    />
                  <label for="nmtTrangThai1">Hiển Thị</label>
                    &nbsp;
                  <input type="radio"   id="nmtTrangThai0" name="nmtTrangThai" value="0" checked/>
                  <label for="nmtTrangThai0">Khoá</label>
                    @endif

                 
                </div>
              </div>
        </div>

        <div class="card-footer">
            <button class="btn btn-success">Ghi lại</button>
            <a href="{{route('nmtadmins.nmtloaisanpham')}}" class="btn btn-secondary">Quay lại</a>
        </div>
      </div>
    </form>
       </div>
    </div>
</div>
@endsection