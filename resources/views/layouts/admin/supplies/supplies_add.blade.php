@extends('layouts.admin.admin')
@section('content')
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			
@if (count($errors) > 0)
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
			<div class="col-lg-12">
				<h1 class="page-header">Vật tư
					<small>- Thêm</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			<div class="col-lg-8 " style="padding-bottom:120px">
			<form action="admin/supplies/supplies_add" method="POST" enctype="multipart/form-data">
                                
                                <input type="hidden" name="_token" value="{{csrf_token()}}" />
                                <div class="form-group">
                                    <label>Tên vật tư <span class="text-danger">*</span></label>
                                    <input class="form-control" name="Supplies_Name" placeholder="Nhập tên vật tư" value="{{ old('Supplies_Name') }}"/>
                                </div>
                                <div class="form-group">
                                    <label>Mô tả <span class="text-danger">*</span></label>
                                    <textarea rows="10" class="form-control" name="Supplies_Description" rows="3" value="">{{ old('Supplies_Description') }}</textarea>
                                </div>
                                <div class="form-group">
                                    <label>Số lượng</label>
                                    <input class="form-control" type="number" name="Supplies_Quantity" placeholder="Nhập số luông" value="{{ old('Supplies_Quantity') }}"/>
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
@section('script')
<script>
	$(document).ready(function() {
	  $('#summernote').summernote({
		  height: 300,                 // set editor height
		  minHeight: null,             // set minimum height of editor
		  maxHeight: null,             // set maximum height of editor
		  focus: true                  // set focus to editable area after initializing summernote
		});
	});
</script>
@endsection