@extends('layouts.admin.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div>
                <h1 class="page-header">Vật tư
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('success'))
            <div class="alert alert-success">
                {{session('success')}}
            </div>
            @endif
            
            @if(session('warning'))
            <div class="row alert alert-warning">
                {{session('warning')}}
            </div>
            @endif
            
             @if(session('error'))
            <div class="row alert alert-danger">
                {{session('error')}}
            </div>
            @endif
            <div class="row excel" >
                <form action="importExcelProduct" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="btn-group">
                    <button type="button" class="btn btn-info">Xuất File</button>
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu" id="export-menu">
                        <li id="export-to-excel"><a href="exportProduct">Xuất Excel</a></li>
                        <li id="export-to-excel"><a href="pdfExportProduct">Xuất PDF</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </div>
                
                   
                   <label class="btn btn-primary btn-file">
                        Browse...<input type="file" name="importProduct" style="display: none;"/>
                    </label> 
                    <input type="submit" class="btn btn-success" value="Nhập File">                                     
                </form>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên vật tư</th>
                        <th>Mô tả</th>
                        <th>Số lượng</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($supplies as $r)
                    <tr class="odd gradeX deleteItem" align="center" id="{{$r->Supplies_ID}}" url="http://localhost/jteam/public/admin/product/product_delete/">
                        <td>{{$r->Supplies_ID}}</td>
                        <td>{{$r->Supplies_Name}}</td>
                        <td>{{$r->Supplies_Description}}</td>
                        <td>{{$r->Supplies_Quantity}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/supplies/supplies_delete/{{$r->Supplies_ID}}" id="deleteItem" idDelete="{{$r->Supplies_ID}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/supplies/supplies_edit/{{$r->Supplies_ID}}">Sửa</a></td>
                    </tr>
                    @endforeach  
                </tbody>
            </table>

        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection

