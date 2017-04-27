<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Compare</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading">
            <span class="page-heading-title2">So sánh sản phẩm</span>
        </h2>
        <!-- ../page heading-->
        <div class="page-content">
            <table class="table table-bordered table-compare" id="talbe">
                @if(Session::has('product_compare') &&  count(Session::get('product_compare')) > 0)
   
                <tr>
                    <td class="compare-label">Hình ảnh</td>
                       @foreach(Session::get('product_compare') as $item)
                    <td><a href="#"><img width="250px" src="{{asset('assets/data/'.$item['Product_Thumbnail'])}}" alt="Product"></a></td>
                    @endforeach


                </tr>
                <tr>

                    <td class="compare-label">Tên sản phẩm</td>
                     @foreach(Session::get('product_compare') as $item)
                    <td>
                        <a href="#">{{$item['Product_Name']}}</a>
                    </td>

                    @endforeach
                </tr>
                
                <tr>
                    <td class="compare-label">Giá</td>
                  @foreach(Session::get('product_compare') as $item)
                    <td class="price">${{$item['Product_Price']}}</td>
                    @endforeach

                </tr>
                <tr>
                    <td class="compare-label">Mô tả</td>
                    @foreach(Session::get('product_compare') as $item)
                    <td>{{$item['Product_Description']}}</td>
                    @endforeach

                </tr>

                <tr>
                    <td class="compare-label">Size</td>
                    @foreach(Session::get('product_compare') as $item)
                    <td>{{$item['Product_Size']}}</td>
                    @endforeach>

                </tr>
                <tr>
                    <td class="compare-label">Màu</td>
                    @foreach(Session::get('product_compare') as $item)
                    <td>{{$item['Product_Color']}}</td>
                    @endforeach

                </tr>


                <tr>
                    <td class="compare-label">Chức năng</td>
                  @foreach(Session::get('product_compare') as $item)
                    <td class="action">
                       <a href="#" id="addItem" class="addItem">Thêm vào giỏ</a>
                        <a href="#" id="wishItem"><i class="fa fa-heart-o"></i></a>
                        <a href="so-sanh/xoa-{{$item['Product_ID']}}" id="deleteItem"><i class="fa fa-close"></i></a>
                    </td>
                   
                   @endforeach

                </tr>
               @endif
            </table>
        </div>
    </div>
</div>

