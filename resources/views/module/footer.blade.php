<footer id="footer">
     <div class="container">
            <!-- introduce-box -->
            <div id="introduce-box" class="row">
                <div class="col-md-3 col-md-offset-3">
                    <div id="address-box">
                    <h3 class="text-center">SkyCompany</h3>
                        <a href="#"><img class="center-block" height="150" src="assets/images/gom/logo.jpg" alt="logo" /></a>
                        <div id="address-list">
                            <div class="tit-name">Địa chỉ:</div>
                            <div class="tit-contain">{{$about->About_Address}}</div>
                            <div class="tit-name">Đ.thoại:</div>
                            <div class="tit-contain">{{$about->About_Mobile}}</div>
                            <div class="tit-name">Email:</div>
                            <div class="tit-contain">{{$about->About_Email}}</div>
                        </div>
                    </div> 
                </div>
                <div class="col-md-3">
                    <div id="contact-box">
                        <div class="introduce-title">NhẬn tin mới</div>
                        <div class="input-group" id="mail-box">
                          <input type="text" placeholder="Nhập email của bạn"/>
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">OK</button>
                          </span>
                        </div><!-- /input-group -->
                        <div class="introduce-title">Tìm chúng tôi trên</div>
                        <div class="social-link">
                            <a href="{{$about->About_Facebook}}"><i class="fa fa-facebook"></i></a>
                            <a href="{{$about->About_Google}}"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>
                    
                </div>
            </div><!-- /#introduce-box -->
        
            
          
        </div> 
</footer>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
	
