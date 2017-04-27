@extends('layouts.admin.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        @foreach($slide as $sl)
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
                    <small>Sửa</small>
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
                <form action="admin/slide/slide_edit/{{$sl->Slide_ID}}" method="POST" enctype="multipart/form-data">  
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Slide_Title</label>
                        <input class="form-control" name="Slide_Title" value="{{$sl->Slide_Title}}" />
                    </div>
                    <div class="form-group">
                        <label>Slide_Description</label>
                        <textarea class="form-control" rows="3" name="Slide_Description" value="">{{$sl->Slide_Description}}</textarea>
                    </div>
                    <div class="form-group">

                        <label>Image Current</label>

                        <p><img width="200px" src="{{asset('assets/images/gom/'.$sl->Slide_Image)}}"></p>

                        <input type="hidden" name="Image_Current" multiple value="{{$sl->Slide_Image}}"/>
                    </div>
                    <div class="form-group">

                        <label>Image Update <span class="text-danger">*</span></label>
                        <input type="file" name="Slide_Image" multiple />
                    </div>
                    <div class="form-group">
                        <label>Slide_Link</label>
                        <textarea class="form-control" rows="3" name="Slide_Link" value="{{$sl->Slide_Link}}"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Slide_Target</label>
                        <textarea class="form-control" rows="3" name="Slide_Target" value="{{$sl->Slide_Target}}"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Slide_Order</label>
                        <input class="form-control" name="Slide_Order" value="{{$sl->Slide_Order}}" type="number"/>
                    </div>
                    <div class="form-group">
                        <label>Slide_Cat</label>
                        <select class="form-control" name="Slide_Cat" value="{{$sl->Slide_Cat}}" >

                            @foreach($cate as $r)
                            <option 
                                @if($sl->Slide_Cat == $r->Cat_ID)
                                {{"selected"}}
                                @endif
                                value="{{$r->Cat_ID}}">{{$r->Cat_Name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="submit" class="btn btn-default">Edit</button>
                    <button type="reset" class="btn btn-default">Reset</button>
                    <form>
                        </div>
                        </div>
                        @endforeach
                        <!-- /.row -->
                        </div>
                        <!-- /.container-fluid -->
                        </div>
                        @endsection