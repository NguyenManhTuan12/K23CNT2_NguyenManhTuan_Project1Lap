@extends('_layouts.admins._master')
@section('title','Thêm mới  sản phẩm')

@section('content-body')   
    <div class="container border">
   
    <div class="row">
       <div class="col">
      <form action="{{route('nmtadmins.nmtsanpham.nmtcreatesubmit')}}" method="post">
        @csrf
      <div class="crad">
        <div class="card-header">
            <h2>Thêm mới sản phẩm</h2>
        </div>

        <div class="crad-body container-fluid">
            <div class="mb-3 row">
                <label for="nmtMaSanPham" class="col-sm-2 col-form-label">Mã sản phẩm </label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" 
                     value="{{old('nmtMaSanPham')}}"

                  id="nmtMaSanPham" name="nmtMaSanPham" />
                  @error('nmtMaSanPham')
                  <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
              </div>

              <div class="mb-3 row">
                <label for="nmtTenSanPham" class="col-sm-2 col-form-label">Tên Sản Phẩm</label>
                <div class="col-sm-10">
                  <input type="text" class="form-control" 
                  value="{{old('nmtTenSanPham')}}"

                  id="nmtTenSanPham" name="nmtTenSanPham" />
                  @error('nmtTenSanPham')
                  <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
              </div>

              <div class="mb-3 row">
                <label for="nmtTenHinhAnh" class="col-sm-2 col-form-label">Hình Ảnh</label>
                <div class="col-sm-10">
                  <input type="file" class="form-control" 
                 
                  id="nmtTenHinhAnh" name="nmtTenHinhAnh" />
                  @error('nmtTenHinhAnh')
                  <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
              </div>

              <div class="mb-3 row">
                <label for="nmtSoLuong" class="col-sm-2 col-form-label">Số Lượng </label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" 
                  value="{{old('nmtSoLuong')}}"

                  id="nmtSoLuong" name="nmtSoLuong" />
                  @error('nmtSoLuong')
                  <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
              </div>

              <div class="mb-3 row">
                <label for="nmtDonGia" class="col-sm-2 col-form-label">Đơn giá </label>
                <div class="col-sm-10">
                  <input type="number" class="form-control" 
                  value="{{old('nmtDonGia')}}"

                  id="nmtDonGia" name="nmtDonGia" />
                  @error('nmtDonGia')
                  <span class="text-danger">{{$message}}</span>
                @enderror
                </div>
              </div>

              <div class="mb-3 row">
                <label for="nmtMaLoai" class="col-sm-2 col-form-label">Loại danh mục </label>
                <div class="col-sm-10">
                 <select name="nmtMaLoai" id="nmtMaLoai" class="form-control">
                    @foreach ($nmtLoaiSanPhams as $item)
                        <option value="{{$item->nmtMaLoai}}">{{$item->nmtTenLoai}}</option>
                    @endforeach
                 </select>
                </div>
              </div>

              <div class="mb-3 row">
                <label for="nmtTrangThai" class="col-sm-2 col-form-label">Trạng Thái</label>
                <div class="col-sm-10">
                  <input type="radio"   id="nmtTrangThai1" name="nmtTrangThai" value="1"
                    checked/>
                  <label for="nmtTrangThai1">Hiển Thị</label>
                    &nbsp;
                  <input type="radio"   id="nmtTrangThai0" name="nmtTrangThai" value="0"/>
                  <label for="nmtTrangThai0">Khoá</label>
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
