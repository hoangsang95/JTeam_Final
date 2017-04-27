@extends('layouts.admin.admin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Thể loại
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
                        <form action="admin/category/category_add" method="POST">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Cat_Name</label>
                                <input class="form-control" name="Cat_Name"  />
                            </div>
                            <div class="form-group">
                                <label>Cat_Thumbnail</label>
                                <input class="form-control" name="Cat_Thumbnail"  />
                            </div>
                            <div class="form-group">
                                <label>Cat_Keywords</label>
                                <input class="form-control" name="Cat_Keywords"  />
                            </div>
                            <div class="form-group">
                                <label>Cat_Parent</label>
                                <input class="form-control" name="Cat_Parent"  />
                            </div>
                            <div class="form-group">
                                <label>Cat_Order</label>
                                <input class="form-control" name="Cat_Order"  />
                            </div>
                            <div class="form-group">
                                <label>Cat_Hot</label>
                                <input class="form-control" name="Cat_Hot"  />
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