@extends('layouts.admin.admin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">User
                            <small>Thêm</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-7" style="padding-bottom:120px">
                        @if(count($errors) > 0)
                        <div class="alert alert-danger">
                            @foreach($errors->all() as $err)
                                {{$err}}<br>
                            @endforeach
                            
                        </div>
                        @endif
                        
                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                        <form action="admin/user/user_add" method="POST">
                              <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Tên người dùng</label>
                                <input class="form-control" name="User_Name" placeholder="Tên người dùng" value="{{ old('User_Name') }}"/>
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="User_Email" placeholder="Email" value="{{ old('User_Email') }}"/>
                            </div>
                           
                            <div class="form-group">
                                <label>Mật khẩu</label>
                                <input class="form-control" type="password" name="User_Password" placeholder="Mật khẩu" />
                            </div>
                           <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input class="form-control" type="password" name="User_Repassword" placeholder="Nhập lại mật khẩu" />
                            </div>
                            <div class="form-group">
                                <label>Quyền</label>
                                <label class="radio-inline">
                                    <input name="User_RootAdmin" value="0" checked="" type="radio">Người dùng
                                </label>
                                <label class="radio-inline">
                                    <input name="User_RootAdmin" value="1" type="radio">Quản trị
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Thêm</button>
                            <button type="reset" class="btn btn-default">Xóa trắng</button>
                        <form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection