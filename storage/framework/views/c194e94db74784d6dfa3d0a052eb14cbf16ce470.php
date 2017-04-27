<!-- Script-->
<!--
<script type="text/javascript" src="assets/lib/countdown/jquery.countdown.js"></script>
-->
<script type="text/javascript" src="assets/lib/jquery/jquery-1.11.2.min.js"></script>
<script type="text/javascript" src="assets/lib/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/lib/select2/js/select2.min.js"></script>
<script type="text/javascript" src="assets/lib/jquery.bxslider/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="assets/lib/owl.carousel/owl.carousel.min.js"></script>
<!-- COUNTDOWN -->
<script type="text/javascript" src="assets/lib/countdown/jquery.plugin.js"></script>
<script type="text/javascript" src="assets/lib/countdown/jquery.countdown.js"></script>
<!-- ./COUNTDOWN -->

<script type="text/javascript" src="assets/lib/jquery-ui/jquery-ui.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.actual.min.js"></script>
<script type="text/javascript" src="assets/lib/fancyBox/jquery.fancybox.js"></script>
<script type="text/javascript" src="assets/lib/jquery.elevatezoom.js"></script>
<script type="text/javascript" src="assets/js/theme-script.js"></script>
<!-- End Script-->


<!-- Facebook message -->
	<div id="facebook_message">
    <div class="relative">
        <div class="panel panel-default pull-right">
            <div class="panel-heading">
                <h3 class="panel-title pull-left"><span class="fa fa-comment"></span> Liên hệ nhanh</h3>
                <div class="pull-right"> <span class="glyphicon glyphicon-plus icon_minim"></span> </div>
                <div class="clearfix"></div>
            </div>
            <div class="panel-body">
                <div class="fb-page fb_iframe_widget" data-tabs="messages" data-href="https://www.facebook.com/Sky-Fashion-419712735034490/" data-width="250" data-height="300" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true" data-show-posts="false" fb-xfbml-state="rendered" fb-iframe-plugin-query="adapt_container_width=true&amp;app_id=150886568763596&amp;container_width=0&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com/Sky-Fashion-419712735034490/&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false&amp;tabs=messages&amp;width=250"><span style="vertical-align: bottom; width: 250px; height: 300px;"><iframe name="f86a518ed652b8" width="250px" height="300px" frameborder="0" allowtransparency="true" allowfullscreen="true" scrolling="no" title="fb:page Facebook Social Plugin" src="https://www.facebook.com/v2.8/plugins/page.php?adapt_container_width=true&amp;app_id=1805762829635715&amp;channel=http%3A%2F%2Fstaticxx.facebook.com%2Fconnect%2Fxd_arbiter%2Fr%2Fao6eUeuGXQq.js%3Fversion%3D42%23cb%3Df36645281730a6c%26domain%3Dbietthuvalora.com%26origin%3Dhttp%253A%252F%252Fbietthuvalora.com%252Ff3fa9ee82881f%26relation%3Dparent.parent&amp;container_width=0&amp;height=300&amp;hide_cover=false&amp;href=https%3A%2F%2Fwww.facebook.com/Sky-Fashion-419712735034490/&amp;locale=en_US&amp;sdk=joey&amp;show_facepile=true&amp;show_posts=false&amp;small_header=false&amp;tabs=messages&amp;width=250" class="" style="border: none; visibility: visible; width: 250px; height: 300px;"></iframe></span></div>
            </div>
        </div>
    </div>
</div>

<script> $('#facebook_message .panel-heading').click(function(){ var $this = $(this); if (!$this.hasClass('panel-collapsed')) { $this.parents('.panel').find('.panel-body').slideUp(); $this.addClass('panel-collapsed'); $this.find('span.icon_minim').removeClass('glyphicon-minus').addClass('glyphicon-plus'); } else { $this.parents('.panel').find('.panel-body').slideDown(); $this.removeClass('panel-collapsed'); $this.find('span.icon_minim').removeClass('glyphicon-plus').addClass('glyphicon-minus'); } }); </script>
<!-- /Facebook Message -->

<!-- Facebook Social Plugins -->
iv id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/vi_VN/sdk.js#xfbml=1&version=v2.8&appId=150886568763596";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<!-- /Facebook Social Plugins -->

<!-- Auto Complete -->
  <script>
  $( function() {
    var availableTags = [
      "Quần dài",
      "Áo khoác",
      "Gìay nam",
      "Túi xách nữ",
      "Váy",
      "Đầm",
      "Son môi",
      "Kem dưỡng",
      "Tẩy trang",
      "Gìay cao gót",
      "Sơ mi"
    ];
    $( "#keys" ).autocomplete({
      source: availableTags
    });
  } );
  </script>
<!-- /Auto Complete -->

