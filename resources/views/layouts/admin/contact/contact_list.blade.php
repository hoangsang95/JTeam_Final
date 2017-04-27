@extends('layouts.admin.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div>
                <h1 class="page-header">Liên hệ
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            <div class="row excel">
                <form action="#" method="post" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="btn-group">
                        <button type="button" class="btn btn-info">Xuất File</button>
                        <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                            <span class="caret"></span>
                            <span class="sr-only">Toggle Dropdown</span>
                        </button>
                        <ul class="dropdown-menu" role="menu" id="export-menu">
                            <li id="export-to-excel"><a href="exportContact">Xuất Excel</a></li>
                            <li id="export-to-excel"><a href="pdfExportContact">Xuất PDF</a></li>
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
                        <th>Tên người gửi</th>
                        <th>Email</th>
                        <th>Số điện thoại</th>
                        <th>Tin nhắn</th>
                        <th>Ngày gửi</th>
                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($contact as $r)
                    <tr class="odd gradeX deleteItem" align="center" id="{{$r->Contact_ID}}" url="http://localhost/jteam/public/admin/contact/contact_delete/">
                        <td>{{$r->Contact_Name}}</td>
                        <td>{{$r->Contact_Email}}</td>
                        <td>{{$r->Contact_Mobile}}</td>
                        <td>{{$r->Contact_Message}}</td>
                        <td>{{$r->Contact_Datetime}}</td>
                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/contact/contact_delete/{{$r->Contact_ID}}" id="deleteItem" idDelete="{{$r->Contact_ID}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/contact/contact_edit/{{$r->Contact_ID}}">Sửa</a></td>
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