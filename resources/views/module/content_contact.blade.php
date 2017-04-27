
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="/" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Liên hệ</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">Liên hệ với chúng tôi</span>
        </h2>
        <!-- ../page heading-->
        <div id="contact" class="page-content page-contact">
            <div id="message-box-conact"></div>
            <div class="row">
                <div class="col-sm-6">
                    <h3 class="page-subheading">Liên Hệ</h3>

                    <form method="POST" action="{{ url('lien-he')}}" id="formContact">
                        <input type="hidden" name="_token" value="{{csrf_token()}}" />
                        <div class="contact-form-box">
                            <div class="form-selector{{ $errors->has('Contact_Name') ? ' has-error' : '' }}">
                                <label>Họ tên</label>
                                <input type="text" name="Contact_Name" class="form-control input-sm" id="Contact_Name"  value="{{old('Contact_Name')}}">
                              
                                <span class="help-block">
                                    <strong class="Contact_Name text-danger">{{ $errors->first('Contact_Name')}}</strong>
                                </span>
                         
                            </div>
                            <div class="form-selector{{ $errors->has('Contact_Email') ? ' has-error' : '' }}">
                                <label>Email</label>
                                <input type="text" name="Contact_Email" class="form-control input-sm" id="Contact_Email"  value="{{old('Contact_Email')}}">
                          
                                <span class="help-block">
                                    <strong class="Contact_Email text-danger">{{ $errors->first('Contact_Email')}}</strong>
                                </span>
                          
                            </div>
                            <div class="form-selector{{ $errors->has('Contact_Mobile') ? ' has-error' : '' }}">
                                <label>Số điện thoai</label>
                                <input type="tel" name="Contact_Mobile" class="form-control input-sm" id="Contact_Mobile"  value="{{old('Contact_Mobile')}}">
                          
                                <span class="help-block">
                                    <strong class="Contact_Mobile text-danger">{{ $errors->first('Contact_Mobile')}}</strong>
                                </span>
                         
                            </div>
                            <div class="form-selector{{ $errors->has('Contact_Message') ? ' has-error' : '' }}">
                                <label>Lời nhắn</label>
                                <textarea class="form-control input-sm" name="Contact_Message" id="Contact_Message"  rows="10" >{{old('Contact_Message')}}</textarea>
                   
                                <span class="help-block">
                                    <strong class="Contact_Message text-danger"></strong>
                                </span>
                                
                            </div>
                            <div class="form-selector">
                                <button type="submit" id="btn-send-contact" class="btn">Gửi</button>
                            </div>
                        </div>

                    </form>
                </div>
                <div class="col-xs-12 col-sm-6" id="contact_form_map">
                    <h3 class="page-subheading">Thông tin liên hệ</h3>
                    <br>
                    <ul class="store_info">
                        <li><i class="fa fa-home"></i>{{$about->About_Address}}</li>
                        <li><i class="fa fa-phone"></i><span>{{$about->About_Mobile}}</span></li>
                        <li><i class="fa fa-envelope"></i>Email: <span><a href="mailto:{{$about->About_Email}}">{{$about->About_Email}}</a></span></li>
                    </ul> 
                    <h3 class="page-subheading">Bản đồ</h3>
                    <div class="map-responsive">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d755.3908781619774!2d106.75833712030968!3d10.850845397248106!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xb3ff69197b10ec4f!2sThu+Duc+College+of+Technology!5e0!3m2!1sen!2s!4v1493060137935" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@section('script')
    <script>
        $(document).ready(function(){
            $('#btn-send-contact').click(function(e){   
                e.preventDefault();
                
                 var Contact_Name = $('#Contact_Name').val();
                 var Contact_Mobile = $('#Contact_Mobile').val();
                 var Contact_Email = $('#Contact_Email').val();
                 var Contact_Message = $('#Contact_Message').val();
                
                $.ajaxSetup({
                    headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                     }
                });
                    
                $.ajax({
                    url: 'lien-he',
                    method: 'POST',
                    data: {
                        Contact_Name: Contact_Name,
                        Contact_Email: Contact_Email,
                        Contact_Mobile: Contact_Mobile,
                        Contact_Message: Contact_Message
                    },
                    success: function(data){
                        $('.Contact_Name, .Contact_Email, .Contact_Mobile, .Contact_Message').html('');
                        if(data.success == false)
                        {   
                            console.log(data);
                            $.each(data.errors, function(index, value){
                                $('.'+index).html(value);
                                console.log(index);
                            });
                            
                        }
                        else
                        {
                            alert('Gửi thành công');
                            window.location = "http://localhost/jteam_beta/public/lien-he"; 
                            
                        }
                    },
                    
                    
                });
            });
        });
    </script>
    
    <script>
    window.Laravel = {!! json_encode([
            'csrfToken' => csrf_token(),
    ]) !!}
    ;
</script>
@endsection