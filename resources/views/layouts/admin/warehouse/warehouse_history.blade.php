@extends('layouts.admin.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row" >
            <div class="col-lg-12">
                <h1 class="page-header">Kho hàng
                    <small>Lịch sử</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            <div class="row excel" >
                <div class="btn-group">
                    <button type="button" class="btn btn-info">Xuất File</button>
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu" id="export-menu">
                        <li id="export-to-excel"><a href="exportWareHouse">Xuất Excel</a></li>
                        <li id="export-to-excel"><a href="pdfExportWareHouse">Xuất PDF</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </div>
            </div>    
            <table class="table table-striped table-bordered table-hover " id="dataTables-example" >
                <thead>
                    <tr align="center">
                        <th>Sản phẩm</th>
                        <th>Số lượng</th>
                        <th>Người thực hiện</th>
                        <th>Thời gian</th>

                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($warehouse_history_product as $r)
                    <tr class="odd gradeX" align="center">

                        <td>{{$r->Product_Name}}</td>
                        <td>{{$r->Warehouse_Count}}</td>
                        <td>{{$warehouse_history_user->User_Name}}</td>
                        <td>{{$r->Warehouse_Datetime}}</td>


                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href=""> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="">Edit</a></td>
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