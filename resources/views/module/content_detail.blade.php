<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <a href="#" title="Return to Home">Chuyên mục</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Chi tiết</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-md-3 col-xs-hidden" id="left_column">
                
                <!-- ./block category  -->
                
               
                <!-- block best sellers -->
                <div class="block left-module">
                    <p class="title_block">Khuyến mại</p>
                    <div class="block_content product-onsale">
                        <ul class="product-list owl-carousel" data-loop="true" data-nav = "false" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                           
                           @foreach($random as $r)
                            <li>
                                <div class="product-container">
                                    <div class="left-block">
                                        <a href="san-pham-{{$r->Product_ID}}">
                                            <img class="img-responsive" alt="product" src="assets/data/{{$r->Product_Thumbnail}}" />
                                        </a>
                                    </div>
                                    <div class="right-block">
                                        <h5 class="product-name"><a href="san-pham-{{$r->Product_ID}}">{{$r->Product_Name}}</a></h5>
                                        <div class="product-star">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star-half-o"></i>
                                        </div>
                                        <div class="content_price">
                                            <span class="price product-price">{{$r->Product_Price}} VND</span>
                                            <span class="price old-price">{{$r->Product_PriceMarket}} VND</span>
                                        </div>
                                    </div>
                                    <div class="product-bottom">
                                        <a class="btn-add-cart" title="Add to Cart" href="mua-hang/{{$r->Product_ID}}">Thêm vào giỏ</a>
                                    </div>
                                </div>
                            </li>
                            @endforeach
                        </ul>
                    </div>
                </div>
                <!-- ./block best sellers  -->
                <!-- left silide -->
                <div class="col-left-slide left-module">
                    <div class="banner-opacity">
                        <a href="#"><img width="270px" height="281px" src="assets/images/gom/banneri5.jpg" alt="ads-banner"></a>
                    </div>
                </div>
                <!--./left silde-->
            </div>
            <!-- Center colunm-->
            <div class="center_column col-md-9" id="center_column">
                <!-- Product -->
                    <div id="product">
                        <div class="primary-box row">
                            <div class="pb-left-column col-xs-12 col-sm-6" style="margin-bottom:10px">
                                <!-- product-imge-->
                                 
                                <div class="product-image">
                                    <div class="product-full">
                                        <img id="product-zoom" src='{{asset('assets/data/'.$product->Product_Thumbnail)}}' data-zoom-image="{{asset('assets/data/'.$product->Product_Thumbnail)}}"/>
                                    </div>
                                    <div class="product-img-thumb" id="gallery_01">
                                        <ul class="owl-carousel" data-items="3" data-nav="true" data-dots="false" data-margin="20" data-loop="false">
                                            
                                            @foreach($product_image as $k=>$v)
                                            <li>
                                                <a href="#" data-image="{{asset('assets/data/'.$v)}}" data-zoom-image="{{asset('assets/data/'.$v)}}">
                                                    <img id="product-zoom"  src="{{asset('assets/data/'.$v)}}" /> 
                                                </a>
                                            </li>
                                            @endforeach
                                            
                                        </ul>
                                    </div>
                                </div>
                                
                                <!-- product-imge-->
                            </div>
                            <div class="pb-right-column col-xs-12 col-sm-6">
                                <h1 class="product-name">{{$product->Product_Name}}</h1>
                                <div class="product-comments">
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="comments-advices">
                                       </div>
                                </div>
                                <div class="product-price-group">
                                    <span class="price">${{$product->Product_Price}}</span>
                                    <span class="old-price">${{$product->Product_PriceMarket}}</span>
                                    <span class="discount">-30%</span>
                                </div>
                                <div class="info-orther">
                                    <p>Mã sản phẩm: #{{$product->Product_MID}}</p>
                                    <p>Tình trạng: 
                                        @if($product->Product_InStock == 1)
                                        <span class="in-stock">Còn hàng</span>
                                        @else
                                        <span class="in-stock">Tạm hết</span>
                                        @endif
                                    </p>
                                    <p><span class="fa fa-eye"</span> Lượt xem: {{$product->Product_CountView}}</p>
                                </div>
                                <div class="product-desc">
                                    {{$product->Product_Description}}
                                </div>
                                <div class="form-option">
                                    <p class="form-option-title">Thông tin chi tiết:</p>
                                    <!--
                                    <div class="attributes">
                                        <div class="attribute-label">Color:</div>
                                        <div class="attribute-list">
                                            <ul class="list-color">
                                                <li style="background:#0c3b90;"><a href="#">red</a></li>
                                                <li style="background:#036c5d;" class="active"><a href="#">red</a></li>
                                                <li style="background:#5f2363;"><a href="#">red</a></li>
                                                <li style="background:#ffc000;"><a href="#">red</a></li>
                                                <li style="background:#36a93c;"><a href="#">red</a></li>
                                                <li style="background:#ff0000;"><a href="#">red</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                    -->
                                    <div class="attributes">
                                        <div class="attribute-label">Số lượng:</div>
                                        <div class="attribute-list product-qty">
                                            <div class="qty">
                                                <input id="option-product-qty" type="text" value="1">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="attributes">
                                        <div class="attribute-label">Size:</div>
                                        <div class="attribute-list">
                                            <select>
                                                @foreach($product_size as $k=>$v)
                                                <option value="{{$v}}">{{$v}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-action">
                                    <div class="button-group">
                                        <a class="btn-add-cart" href="mua-hang/{{$product->Product_ID}}">Thêm vào giỏ</a>
                                    </div>
                                    <!--
                                    <div class="button-group">
                                        <a class="wishlist" href="#"><i class="fa fa-heart-o"></i>
                                        <br>Wishlist</a>
                                        <a class="compare" href="#"><i class="fa fa-signal"></i>
                                        <br>        
                                        Compare</a>
                                    </div>
                                    -->
                                </div>
                                    
                                <div class="form-share">
                                    <!--
                                    <div class="sendtofriend-print">
                                        <a href="javascript:print();"><i class="fa fa-print"></i> Print</a>
                                        <a href="#"><i class="fa fa-envelope-o fa-fw"></i>Send to a friend</a>
                                    </div>
                                    -->
                                    <div class="network-share">
                                        <div class="fb-like" data-href="http://localhost:8082/jteam/public/san-pham-&#123;&#123;$product-&gt;Product_ID&#125;&#125;" data-layout="button_count" data-action="like" data-size="large" data-show-faces="true" data-share="true"></div>
                                       
                                        
                                    </div>
                                </div
                                    
                                    
                            </div>
                        </div>
                        <!-- tab product -->
                        <div class="product-tab">
                            <hr>
                            <ul class="nav-tab">
                                <li class="active">
                                    <a aria-expanded="false" data-toggle="tab" href="#product-detail">Chi tiết sản phẩm</a>
                                </li>
                                <li>
                                    <a aria-expanded="true" data-toggle="tab" href="#fbcomment">Bình luận</a>
                                </li>
                            </ul>
                            <div class="tab-container">
                                <div id="product-detail" class="tab-panel active">
                                    {{$product->Product_Content}}
                                </div>
                                <div id="fbcomment" class="tab-panel">
                                    <div id="fb_comment" class="fb-comments" data-href="http://localhost:8082/jteam/public/san-pham-{{$product->Product_ID}}" data-numposts="5" width="100%"></div>
                                    
                                </div>
                            </div>
                        </div>
                        <!-- ./tab product -->
                        <!-- box product -->
                        <div class="page-product-box">
                            <h3 class="heading">Sản phẩm cùng chuyên mục</h3>
                            <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3}}'>
                                @foreach($relate_product as $relate)
                                <li>
                                        <div class="product-container">
                                                <div class="left-block">
                                                        <a href="san-pham-{{$relate->Product_ID}}">
                                                                <img class="img-responsive" alt="product" src="{{asset('assets/data/'.$relate->Product_Thumbnail)}}" />
                                                        </a>
                                                        <div class="quick-view">
                                                                        <a title="Add to my wishlist" class="heart" href="#"></a>
                                                                        <a title="Add to compare" class="compare" href="#"></a>
                                                                        <a title="Quick view" class="search" href="#"></a>
                                                        </div>
                                                        <div class="add-to-cart">
                                                                <a title="Add to Cart" href="mua-hang/{{$r->Product_ID}}">Thêm vào giỏ</a>
                                                        </div>
                                                </div>
                                                <div class="right-block">
                                                        <h5 class="product-name"><a href="san-pham-{{$relate->Product_ID}}">{{$relate->Product_Name}}</a></h5>
                                                        <div class="product-star">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                        <div class="content_price">
                                                                <span class="price product-price">{{$relate->Product_Price}} VND</span>
                                                                <span class="price old-price">{{$relate->Product_PriceMarket}} VND</span>
                                                        </div>
                                                </div>
                                        </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <!-- ./box product -->
                        
                    </div>
                <!-- Product -->
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>
