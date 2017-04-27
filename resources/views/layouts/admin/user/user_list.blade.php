@extends('layouts.admin.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div>
                <h1 class="page-header">Người dùng
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(count($errors) > 0)
            <div class="alert alert-danger">
                @foreach($errors->all() as $err)
                {{$err}}<br>
                @endforeach

            </div>
            @endif

            @if(session('success'))
            <div class="row alert alert-success">
                {{session('thongbao')}}
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
            <div class="row excel">
                <form action="importExcelUser" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <div class="btn-group">
                    <button type="button" class="btn btn-info">Xuất File</button>
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu" id="export-menu">
                        <li id="export-to-excel"><a href="exportUser">Xuất Excel</a></li>
                        <li id="export-to-excel"><a href="pdfExportUser">Xuất PDF</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </div>
                
                   
                   <label class="btn btn-primary btn-file">
                        Browse...<input type="file" name="importUser" style="display: none;"/>
                    </label> 
                    <input type="submit" class="btn btn-success" value="Import">                                     
                </form>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>ID</th>
                        <th>Tên người dùng</th>
                        <th>Email</th>
                        <th>Quyền</th>

                        <th>Xóa</th>
                        <th>Sửa</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($user as $r)
                    <tr class="odd gradeX deleteItem" align="center" id="{{$r->User_ID}}" url="http://localhost/jteam/public/admin/user/user_delete/">
                        <td>{{$r->User_ID}}</td>
                        <td>{{$r->User_Name}}</td>
                        <td>{{$r->User_Email}}</td>
                        <td>
                            @if( $r->User_RootAdmin ==1)
                            {{"Quản trị"}}
                            @else
                            {{"Người dùng"}}
                            @endif
                        </td>

                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/user/user_delete/{{$r->User_ID}}" id="deleteItem" idDelete="{{$r->User_ID}}"> Xóa</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/user/user_edit/{{$r->User_ID}}">Sửa</a></td>
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

