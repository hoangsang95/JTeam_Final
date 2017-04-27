@extends('layouts.admin.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Sản phẩm
                    <small>Sửa</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            <div class="col-lg-7" style="padding-bottom:120px">
                <form action="admin/product/product_edit/{{$product->Product_ID}}" method="POST" enctype="multipart/form-data">
                    <input type="hidden" name="update" value="update">
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Chuyên mục <span class="text-danger">*</span></label>
                       
                        <select class="form-control" name="Product_Cat" >
                            
                           @foreach($cate as $r)
                            <option 
                                @if($product->Product_Cat == $r->Cat_ID)
                                {{"selected"}}
                                @endif
                                value="{{$r->Cat_ID}}">{{$r->Cat_Name}}</option>
                            @endforeach
                           
                        </select>
                       
                    </div>
                    <div class="form-group">
                        <label>Tên sản phẩm <span class="text-danger">*</span></label>
                        <input class="form-control" name="Product_Name" placeholder="Nhập tên sản phẩm" value="{{$product->Product_Name}}"/>
                    </div>
                    <div class="form-group">
                        <label>Mã sản phẩm</label>
                        <input class="form-control" name="Product_MID" placeholder="VD:SP01" value="{{$product->Product_MID}}" />
                    </div>
                    <div class="form-group">

                        <label>Image Current</label>

                        <p><img width="200px" src="{{asset('assets/data/'.$product->Product_Thumbnail)}}"></p>

                        <input type="hidden" name="Image_Current" multiple value="{{$product->Product_Thumbnail}}"/>
                    </div>
                    <div class="form-group">

                        <label>Image Update <span class="text-danger">*</span></label>
                        <input type="file" name="Product_Thumbnail" multiple />
                    </div>
                    <div class="form-group">
                        <label>Giá thị trường</label>
                        <input class="form-control" type="number" name="Product_PriceMarket" placeholder="Nhập giá bán" value="{{$product->Product_PriceMarket}}"/>
                    </div>
                    <div class="form-group">
                        <label>Giá bán <span class="text-danger">*</span></label>
                        <input class="form-control" type="number" name="Product_Price" placeholder="Nhập giá bán"  value="{{$product->Product_Price}}"/>
                    </div>
                    <div class="form-group">
                        <label>Mô tả <span class="text-danger">*</span></label>
                        <textarea rows="10" class="form-control" name="Product_Description" rows="3" value="">{{$product->Product_Description}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Nội dung giới thiệu</label>
                        <textarea rows="10" id="summernote" class="form-control" rows="3" name="Product_Content" value="">{{$product->Product_Content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Size sản phẩm <span class="text-danger">*</span></label>
                        <input class="form-control" name="Product_Size" placeholder="VD:L,M,S,..." value="{{$product->Product_Size}}"/>
                    </div>
                    <div class="form-group">
                        <label>Màu sắc</label>
                        <input class="form-control" name="Product_Color" placeholder="VD:L,M,S,..." value="{{$product->Product_Color}}"/>
                    </div>

                    <div class="form-group">
                        <label>Từ khóa</label>
                        <input class="form-control" name="Product_Keywords" placeholder="Nhập từ khóa, vd: áo dài, quần jean,..." value="{{$product->Product_Keywords}}"/>
                    </div>
                    <div class="form-group">
                        <label>Trạng thái</label>
                        <label class="radio-inline">
                            <input type="radio" name="Product_Show" value="0" 
                                   @if($product->Product_Show ==0)
                                   {
                                   {{"checked"}}
                                   }
                                   @endif
                                   >Ẩn
                        </label>
                        <label class="radio-inline">
                            <input name="Product_Show" value="1" type="radio"
                                   @if($product->Product_Show == 1)
                                   {
                                   {{"checked"}}
                                   }
                                   @endif
                                   >Hiện
                        </label>
                    </div>
                    <button type="submit" class="btn btn-default">Sửa</button>
                    <button type="reset" class="btn btn-default">Xóa trắng</button>
                    <form>
                        </div>
                        </div>
                        <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
                        </div>
                        @endsection