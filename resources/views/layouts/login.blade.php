<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <title>Đăng nhập</title>
       
        <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css">
        <link href="{{ asset('assets/css/MyStyle.css') }}" rel="stylesheet" type="text/css">
        <base href="{{('')}}">
        <script type="text/javascript" src="{{asset('assets/lib/jquery/jquery-1.11.2.min.js')}}"></script>
        <!-- Scripts -->
        <script>
            window.Laravel = {!! json_encode([
                    'csrfToken' => csrf_token(),
            ]) !!}
            ;
        </script>
        
        <script>
            $(document).ready(function(){
                $('#formLogin button').click(function(e){
                    e.preventDefault();
                    $('div#errorEmail').removeClass('has-error');
                    $('div#errorPassword').removeClass('has-error');
                    $.ajaxSetup({
                        headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        }
                     });
                    
                    
                    $.ajax({
                    url: 'login',
                    method: 'POST',
                    dataType: 'json' ,
                    data: {
                            email: $('#email').val(),
                            password: $('#password').val()
                    },
                    success: function(data){
                        
                       
                        if(data.success == false){
                            console.log(data);
                             $('.email , .password , .thongbao').html('');
                            if(data.errors.email != undefined){
                                $('div#errorEmail').addClass('has-error');
                                $('.email').html(data.errors.email[0]);
                               
                            }
                            
                            if(data.errors.password != undefined){           
                                $('div#errorPassword').addClass('has-error');
                                $('.password').html(data.errors.password[0]);
                               
                            } 
                            
                            if(data.errors.errorLogin != undefined){
                                $('.thongbao').html(data.errors.errorLogin[0]);
                            }
                            
                            if(data.errors.original != undefined){
                                $('.thongbao').html(data.errors.original['email']);
                            }
                        }
                        else
                        {
                             if(data.admin == true)
                             {
                                window.location = data.url; 
                             }
                             else
                             {
                                 window.location = "/";
                             }
                        }               
                        
                    },
                    
                    
                    
                    
                    });
                });
            });
        </script>
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default login">
                        <div class="panel-heading">Đăng nhập</div>
                        <div class="col-md-6  panel-body">
                           
                            
                           
                            <form class="form-horizontal" role="form" method="POST" action="{{url('login')}}" id="formLogin">
                                {{ csrf_field() }}
                                <div class="help-block" style="text-align: center">
                                <strong class="thongbao text-danger"></strong>
                                </div>
                                <div class="form-group" id="errorEmail">
                                    <label for="email" class="col-md-4 control-label">E-Mail</label>

                                    <div class="col-md-6">
                                        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}"  autofocus>

                                       
                                        <span class="help-block">
                                            <strong class="email text-danger"></strong>
                                        </span>
                                      
                                    </div>
                                </div>

                                <div class="form-group" id="errorPassword">
                                    <label for="password" class="col-md-4 control-label">Mật khẩu</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password" class="form-control" name="password" >

                                        
                                        <span class="help-block">
                                            <strong class="password text-danger"></strong>
                                        </span>
                                        
                                    </div>
                                </div>

                               

                                <div class="form-group ">
                                    <div class="submit-forgot">
                                        <div class="col-md-2"></div>
                                        <button type="submit" class="col-xs-12 col-sm-12 col-md-4 btn btn-primary">
                                            Đăng nhập
                                        </button>

                                        <a class="col-xs-12 col-sm-12 col-md-6 btn btn-link" href="">
                                            Quên mật khẩu?
                                        </a>
                                    </div>
                                </div>
                            </form>
                        </div>
                        <span class="col-md-6 socialLogin">

                                <div class="facebook"><a href="auth/facebook"><img src="{{asset('socialLogin/images/facebook.png')}}" alt=""/><i>Đăng nhập bằng Facebook</i></a></div>
                                <div class="google"><a href="auth/google"><img src="{{asset('socialLogin/images/gplus.png')}}" alt=""/><i> Đăng nhập bằng Google+</i></a></div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>