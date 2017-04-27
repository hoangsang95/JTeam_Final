 @extends('layouts.admin.admin')
  @section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                @foreach($user as $r)
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Người dùng
                            <small>Sửa</small>
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
                        
                        @if(session('thongbao'))
                        <div class="alert alert-success">
                            {{session('thongbao')}}
                        </div>
                        @endif
                    <div class="col-lg-7" style="padding-bottom:120px">
                        <form action="admin/user/user_edit/{{$r->User_ID}}" method="POST">
                        <input type="hidden" name="_method" value="PATCH">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Tên người dùng</label>
                                <input class="form-control" name="User_Name" placeholder="Tên người dùng" value="{{$r->User_Name}}" />
                            </div>
                            <div class="form-group">
                                <label>Email</label>
                                <input class="form-control" type="email" name="User_Email" placeholder="Email" value="{{$r->User_Email}}" readonly=""/>
                            </div>
                           
                            <div class="form-group">
                                <input type="checkbox" name="changePassword" id="changePassword"/>
                                <label>Đổi mật khẩu</label>
                                  
                                <input class="form-control password"  type="password" name="User_Password" placeholder="Mật khẩu" disabled="" value="{{$r->User_Password}}"/>
                            </div>
                           <div class="form-group">
                                <label>Nhập lại mật khẩu</label>
                                <input class="form-control password" type="password" name="User_Repassword" placeholder="Nhập lại mật khẩu" disabled="" value="{{$r->User_Password}}"/>
                            </div>
                            <div class="form-group">
                                <label>Quyền</label>
                                <label class="radio-inline">
                                    <input name="User_RootAdmin" value="0"   type="radio" 
                                            @if($r->User_RootAdmin ==0)
                                           {{"checked"}}
                                           @endif
                                           >Người dùng
                                </label>
                                <label class="radio-inline">
                                    <input name="User_RootAdmin" value="1" type="radio"
                                             @if($r->User_RootAdmin ==1)
                                           {{"checked"}}
                                           @endif
                                           >Quản trị
                                </label>
                            </div>
                            <button type="submit" class="btn btn-default">Sửa</button>
                            <button type="reset" class="btn btn-default">Xóa trắng</button>
                            {{ method_field('PATCH') }}
                        <form>
                    </div>
                </div>
                @endforeach
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
 @endsection
 
 @section('script')
     <script>
         $(document).ready(function(){
              $("#changePassword").change(function(){
                  if($(this).is(":checked"))
                      {
                     $(".password").removeAttr('disabled');
                 }
                   else
                 {
                      $(".password").attr('disabled','');
                 }
              });
         });   
     </script>
 @endsection
 
  
                 
                  