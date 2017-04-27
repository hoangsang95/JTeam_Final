<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Về trang chủ">Trang chủ</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Fashion</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
               
               
               
                <!-- TAGS -->
                <div class="block left-module">
                    <p class="title_block">Từ khóa</p>
                    <div class="block_content">
                        <div class="tags">
                            @if(count($keywords))
                                @foreach($keywords as $k=>$v)
                                    <a href="search"><span class="level1">{{$v}}</span></a>
                                @endforeach
                            @endif
                        </div>
                    </div>
                </div>
                <!-- ./TAGS -->
               
            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">
                <!-- category-slider -->
                <div class="category-slider">
                    <ul class="owl-carousel owl-style2" data-dots="false" data-loop="true" data-nav = "true" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1">
                        
                            @foreach($slide as $sl)
                            <li>
                                <img src="{{asset('assets/data/'.$sl->Slide_Image)}}">
                            </li>
                            @endforeach
                        
                    </ul>
                </div>
                <!-- ./category-slider -->
                <!-- subcategories -->
                <div class="subcategories">
                    <ul>
                        <li class="current-categorie">
                            <a href="#">{{$cate[0]->Cat_Name}}</a>
                        </li>
                    </ul>
                </div>
                <!-- ./subcategories -->
                <!-- view-product-list-->
                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title">Danh sách</span>
                    </h2>
                    <ul class="display-product-option">
                        <li class="view-as-grid selected">
                            <span>grid</span>
                        </li>
                        <li class="view-as-list">
                            <span>list</span>
                        </li>
                    </ul>
                    <!-- PRODUCT LIST -->
                    <ul class="row product-list grid">
                    @if(count($product))
                        @foreach($product as $pro)
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="san-pham-{{$pro->Product_ID}}">
                                        <img class="img-responsive" alt="product" src="{{asset('assets/data/'.$pro->Product_Thumbnail)}}" />
                                    </a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="#"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="mua-hang/{{$pro->Product_ID}}">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="san-pham-{{$pro->Product_ID}}">{{$pro->Product_Name}}</a></h5>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="content_price">
                                        <span class="price product-price">${{$pro->Product_Price}}</span>
                                        <span class="price old-price">${{$pro->Product_PriceMarket}}</span>
                                    </div>
                                    <div class="info-orther">
                                        <p>Item Code: #{{$pro->Product_MID}}</p>
                                        <p class="availability">Availability: <span>{{$pro->Product_InStock}}</span></p>
                                        <div class="product-desc">
                                            {{$pro->Product_Description}}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                         @endforeach
                    @else
                    <br>
                        Mục này chưa có sản phẩm nào!
                    @endif
                        
                        
                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>
                <!-- ./view-product-list-->
                <div class="sortPagiBar">
                    <div class="bottom-pagination">
                        <nav>
                          <ul class="pagination">
                            {!! $product->links() !!}
                              
                          </ul>
                        </nav>
                    </div>
                    <div class="show-product-item">
                        <select name="">
                            <option value="">Show 18</option>
                            <option value="">Show 20</option>
                            <option value="">Show 50</option>
                            <option value="">Show 100</option>
                        </select>
                    </div>
                    <div class="sort-product">
                        <select>
                            <option value="">Product Name</option>
                            <option value="">Price</option>
                        </select>
                        <div class="sort-product-icon">
                            <i class="fa fa-sort-alpha-asc"></i>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
</div>