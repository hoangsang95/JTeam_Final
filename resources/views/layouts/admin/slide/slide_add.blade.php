@extends('layouts.admin.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <h1 class="page-header">Slide
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
                <form action="admin/slide/slide_add" method="POST">  
                    <input type="hidden" name="_token" value="{{csrf_token()}}" />
                    <div class="form-group">
                        <label>Slide_Title</label>
                        <input class="form-control" name="Slide_Title"  value="{{ old('Slide_Title') }}" />
                    </div>
                    <div class="form-group">
                        <label>Slide_Description</label>
                        <textarea class="form-control" rows="3" name="Slide_Description"> {{ old('Slide_Description') }}</textarea>
                    </div>
                    <div class="form-group">

                        <label>Slide_Image <span class="text-danger">*</span></label>
                        <input type="file" name="Slide_Image" multiple  value="{{ old('Slide_Image') }}"/>
                    </div>
                    <div class="form-group">
                        <label>Slide_Link</label>
                        <textarea class="form-control" rows="3" name="Slide_Link"> {{ old('Slide_Link') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Slide_Target</label>
                        <textarea class="form-control" rows="3" name="Slide_Target"> {{ old('Slide_Target') }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Slide_Order</label>
                        <input class="form-control" name="Slide_Order" type="number"  value="{{ old('Slide_Order') }}"/>
                    </div>
                    <div class="form-group">
                        <label>Slide_Cat</label>
                        <select class="form-control" name="Slide_Cat">

                            @foreach($cate as $r)
                            <option value="{{$r->Cat_ID}}">{{$r->Cat_Name}}</option>
                            @endforeach
                        </select>
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