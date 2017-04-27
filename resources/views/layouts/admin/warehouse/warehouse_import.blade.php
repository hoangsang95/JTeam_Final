@extends('layouts.admin.admin')
@section('content')
<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Quản lý kho
                            <small>Nhập/Xuất</small>
                        </h1>
                    </div>
                    <!-- /.col-lg-12 -->
                    <div class="col-lg-12" style="padding-bottom:120px">
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
                        <form action="admin/warehouse/warehouse_import" method="POST">


                        <div class="col-md-6 col-md-offset-3">
                            <input type="hidden" name="_token" value="{{csrf_token()}}" />
                            <div class="form-group">
                                <label>Thời gian thực hiện</label>
                                <input class="form-control" name="Warehouse_Datetime"  value="{{$post['Warehouse_Datetime']}}" disabled/>
                            </div>
                            <div class="form-group">
                                <label>Sản phẩm</label>
                                <select id="Warehouse_Product" name="Warehouse_Product">
                                    <option value="0">Vui lòng chọn sản phẩm</option>
                                    @foreach($products as $r)
                                    <option value="{{$r->Product_ID}}">{{$r->Product_Name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label class="radio-inline"><input type="radio" name="status" value="import" checked>Nhập</label>
                                <label class="radio-inline"><input type="radio" name="status" value="export">Xuất</label>
                            </div>
                        </div>

                        <div class="col-lg-12">
                            <div class="table-responsive">
                                <div class="dataTables_wrapper form-inline no-footer">
                                    <table id="list_product" class="table table-striped table-bordered table-vcenter table-hover dataTable">
                                        <thead>
                                            <tr role="row">
                                                <th class="text-center">ID<br>Mã SP</th>
                                                <th class="text-center">Tên</th>
                                                <th class="text-center">Chuyên mục</th>
                                                <th class="text-center">Số lượng</th>
                                                <th class="text-center sorting_disabled"><i class="fa fa-flash"></i></th>
                                            </tr>
                                        </thead>
                                            <tbody>                                          
                                            </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <button type="submit" class="btn btn-primary pull-right">Thêm</button></div>
                        </form>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>   
@endsection
@section('script')
<script type="text/javascript">
    $(document).ready(function(){
        $("#Warehouse_Product").change(function(){
            // ID sản phẩm
            var product_id = $(this).val();
            var token = $("input[name='_token']").val();
            if($('#list_product tbody tr[data-id="'+product_id+'"]').length==0){
            $.ajax({
                url:'admin/warehouse/warehouse_import_ajax/'+product_id,
                type:'GET',
                cache:false,
                data:{"_token":token, "product_id":product_id},
                success:function(data){
                    if(data){
                        var temp = '<tr role="row" data-id="'+data.Product_ID+'"><td class="text-center">'+data.Product_ID+'<br>'+data.Product_MID+'</td><td class="text-left">'+data.Product_Name+'</td><td class="text-center">'+data.Cat_Name+'</td><td class="text-center"><div class="input-group"><input name="quantity['+data.Product_ID+']" type="number" min="1" class="form-control text-right" value="1"></div></td><td class="text-center"><button class="btn btn-effect-ripple btn-xs btn-danger delete_product" data-toggle="tooltip" title="Xóa"><i class="fa fa-times"></i></button> </td></tr>';
                       $('#list_product tbody').append(temp);
                    }
                },
                error:function(){ 
                    alert("Có lỗi xảy ra, vui lòng thử lại!!!!");
                }
            });

        };
            $(this).val('0');
        });



        $('#list_product tbody').on('click', '.delete_product', function(){
            $(this).parents('tr').remove();
        });

    });
</script>
@endsection