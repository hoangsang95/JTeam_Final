@extends('layouts.admin.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div>
                <h1 class="page-header">Sản phẩm
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            <div class="row excel" >
                <form action="#" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="btn-group">
                    <button type="button" class="btn btn-info">Xuất File</button>
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu" id="export-menu">
                        <li id="export-to-excel"><a href="#">Xuất Excel</a></li>
                        <li id="export-to-excel"><a href="#">Xuất PDF</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </div>
                
                   
                   <label class="btn btn-primary btn-file">
                        Duyệt...<input type="file" name="importProduct" style="display: none;"/>
                    </label> 
                    <input type="submit" class="btn btn-success" value="Nhập File">                                     
                </form>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên</th>
                        <th>Giá</th>
                        <th>Ngày</th>
                        <th>Số lượng trong kho</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($warehouse_list as $r)
                    <tr class="odd gradeX deleteItem" align="center" id="{{$r->Product_ID}}" url="http://localhost/jteam/public/admin/product/product_delete/">
                        <td>{{$r->Product_ID}}</td>
                        <td>{{$r->Product_Name}}</td>
                        <td>{{$r->Product_Price}} VNĐ</td>
                        <td>{{$r->Product_Datetime}}</td>
                        <td>{{$r->quantity}}</td>
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

