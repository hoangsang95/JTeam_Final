@extends('layouts.admin.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>Sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/supplies/supplies_edit/{{$supplies->Supplies_ID}}" method="POST" enctype="multipart/form-data">
                  
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Tên vật tư <span class="text-danger">*</span></label>
                        <input class="form-control" name="Supplies_Name" placeholder="Nhập tên vật tư" value="{{$supplies->Supplies_Name}}"/>
                    </div>
                    <div class="form-group">
                        <label>Mô tả <span class="text-danger">*</span></label>
                        <textarea rows="10" class="form-control" name="Supplies_Description" rows="3" value="">{{$supplies->Supplies_Description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Số lượng</label>
                        <input class="form-control" type="number" name="Supplies_Quantity" placeholder="Nhập số luông" value="{{$supplies->Supplies_Quantity}}"/>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Xóa trắng</button>
                    <form>
                        </div>
                        </div>
                        <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
                        </div>
                        @endsection