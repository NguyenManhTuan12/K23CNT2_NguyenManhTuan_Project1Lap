@extends('_layouts.admins._master')
@section('title','Danh sách loại sản phẩm')

@section('content-body')   
    <div class="container border">
    <div class="row">
        <div class="col-12 ">
            <div class="d-flex w-100 justify-content-between"> 
                <h2> Danh sách loại sản phẩm</h2>
                <a href="{{route('nmtadmins.nmtloaisanpham.nmtcreate')}}"class="btn btn-success">Thêm mới</a>
            </div>
   
    </div>
</div> 
    <div class="row">
       <div class="col">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Mã loại</th>
                    <th>Tên loại</th>
                    <th>Trạng Thái</th>
                    <th>Chức năng</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($nmtLoaiSanPhams as $item)
                    <tr>
                        <td class="test-center">{{$loop->iteration}}</td>
                        <td>{{$item->nmtMaLoai}}</td>
                        <td>{{$item->nmtTenLoai}}</td>
                        <td>{{$item->nmtTrangThai}}</td>
                        <td>
                            <a href="/nmt-admins/{{$item->id}}"class="btn btn-success">
                                view </a>
                               
                            <a href="/nmt-admins/nmt-loai-san-pham/nmt-edit/{{$item->id}}"class="btn btn-primary">Edit</a>

                            <a href="/nmt-admins/nmt-loai-san-pham/nmt-delete/{{$item->id}}"
                                onclick="return confirm('Bạn có chắc chắn xoá không?')"
                                    class="btn btn-primary"
                                
                                >
                                Delete </a>    
                        </td>
                    </tr>
                @empty
                    <tr>
                        <th colspan="5">Chưa có thông tin sản phẩm </th>
                    </tr>
                @endforelse
            </tbody>
        </table>
       </div>
    </div>
</div>
@endsection