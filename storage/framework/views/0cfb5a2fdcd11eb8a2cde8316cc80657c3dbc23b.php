<?php $__env->startSection('content'); ?>
<div id="page-wrapper">
	<div class="container-fluid">
		<div class="row">
			
<?php if(count($errors) > 0): ?>
    <div class="alert alert-danger">
        <ul>
            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li><?php echo e($error); ?></li>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </ul>
    </div>
<?php endif; ?>
			<div class="col-lg-12">
				<h1 class="page-header">Sản phẩm
					<small>- Thêm</small>
				</h1>
			</div>
			<!-- /.col-lg-12 -->
			<div class="col-lg-8 col-lg-offset-2" style="padding-bottom:120px">
				<form action="admin/product/add" method="POST" enctype="multipart/form-data">
					<input type="hidden" name="_token" value="<?php echo e(csrf_token()); ?>" />
					<div class="form-group">
						<label>Chuyên mục <span class="text-danger">*</span></label>
						<select class="form-control" name="Product_Cat">
						<?php $__currentLoopData = $cat; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $r): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							<option value="<?php echo e($r->Cat_ID); ?>"><?php echo e($r->Cat_Name); ?></option>
						<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
						</select>
					</div>
					<div class="form-group">
						<label>Tên sản phẩm <span class="text-danger">*</span></label>
						<input class="form-control" name="Product_Name" placeholder="Nhập tên sản phẩm" />
					</div>
					<div class="form-group">
						<label>Mã sản phẩm <span class="text-danger">*</span></label>
						<input class="form-control" name="Product_MID" placeholder="VD:SP01" />
					</div>
					 <div class="form-group">
						<label>Hình đại diện <span class="text-danger">*</span></label>
						<input type="file" name="Product_Thumbnail" multiple>
					</div>
					 <div class="form-group">
						<label>Giá thị trường</label>
						<input class="form-control" name="Product_PriceMarket" placeholder="Nhập giá bán" />
					</div>
					<div class="form-group">
						<label>Giá bán <span class="text-danger">*</span></label>
						<input class="form-control" name="Product_Price" placeholder="Nhập giá bán" />
					</div>
					<div class="form-group">
						<label>Mô tả <span class="text-danger">*</span></label>
						<textarea class="form-control" name="Product_Description" rows="3"></textarea>
					</div>
					<div class="form-group">
						<label>Nội dung giới thiệu</label>
						<textarea id="summernote" class="form-control" rows="3" name="Product_Content"></textarea>
					</div>
					<div class="form-group">
						<label>Size sản phẩm <span class="text-danger">*</span></label>
						<input class="form-control" name="Product_Size" placeholder="VD:L,M,S,..." />
					</div>
					<div class="form-group">
						<label>Màu sắc</label>
						<input class="form-control" name="Product_Color" placeholder="VD:L,M,S,..." />
					</div>
					
					<div class="form-group">
						<label>Từ khóa</label>
						<input class="form-control" name="Product_Keywords" placeholder="Nhập từ khóa, vd: áo dài, quần jean,..." />
					</div>
					<div class="form-group">
						<label>Trạng thái</label>
						<label class="radio-inline">
							<input type="radio" name="Product_Show" value="0" checked>Ẩn
						</label>
						<label class="radio-inline">
							<input name="Product_Show" value="1" type="radio">Hiện
						</label>
					</div>
					<button type="submit" class="btn btn-default">Thêm</button>
					<button type="reset" class="btn btn-default">Làm lại</button>
				<form>
			</div>
		</div>
		<!-- /.row -->
	</div>
	<!-- /.container-fluid -->
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('script'); ?>
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
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin.admin', array_except(get_defined_vars(), array('__data', '__path')))->render(); ?>