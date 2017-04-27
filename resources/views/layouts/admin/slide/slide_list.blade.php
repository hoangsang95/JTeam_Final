@extends('layouts.admin.admin')
@section('content')
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div>
                <h1 class="page-header">Slide
                    <small>Danh sách</small>
                </h1>
            </div>
            <!-- /.col-lg-12 -->
            @if(session('thongbao'))
            <div class="alert alert-success">
                {{session('thongbao')}}
            </div>
            @endif
            <div class="row excel">
                <form action="#" method="post" enctype="multipart/form-data">
                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                <a href="#" class="btn btn-danger">Delete All</a>
                <div class="btn-group">
                    <button type="button" class="btn btn-info">Export</button>
                    <button type="button" class="btn btn-info dropdown-toggle" data-toggle="dropdown">
                        <span class="caret"></span>
                        <span class="sr-only">Toggle Dropdown</span>
                    </button>
                    <ul class="dropdown-menu" role="menu" id="export-menu">
                        <li id="export-to-excel"><a href="exportSlide">Export to Excel</a></li>
                        <li id="export-to-excel"><a href="pdfExportSlide">Export to PDF</a></li>
                        <li class="divider"></li>
                        <li><a href="#">Other</a></li>
                    </ul>
                </div>
                
                   
                   <label class="btn btn-primary btn-file">
                        Browse...<input type="file" name="importProduct" style="display: none;"/>
                    </label> 
                    <input type="submit" class="btn btn-success" value="Import">                                     
                </form>
            </div>
            <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                <thead>
                    <tr align="center">
                        <th>Slide_ID</th>
                        <th>Slide_Title</th>
                        <th>Slide_Description</th>
                        <th>Slide_Image</th>

                        <th>Slide_Order</th>

                        <th></th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($slide as $r)
                    <tr class="odd gradeX deleteItem" align="center" id="{{$r->Slide_ID}}" url="http://localhost/jteam/public/admin/slide/slide_delete/">

                        <td>{{$r->Slide_ID}}</td>
                        <td>{{$r->Slide_Title}}</td>
                        <td>{{$r->Slide_Description}}</td>
                        <td><img width="100px" src="{{asset('assets/images/gom/'.$r->Slide_Image)}}"></td>

                        <td>{{$r->Slide_Order}}</td>


                        <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="admin/slide/slide_delete/{{$r->Slide_ID}}" id="deleteItem" idDelete="{{$r->Slide_ID}}"> Delete</a></td>
                        <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="admin/slide/slide_edit/{{$r->Slide_ID}}">Edit</a></td>
                    </tr>
                    @endforeach

                </tbody>
            </table>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container-fluid -->
</div>
@endsection