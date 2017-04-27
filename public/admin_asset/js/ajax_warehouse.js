    $(document).ready(function(){
        alert(123);
        $("#Warehouse_Product").change(function(){
            // ID sản phẩm
            var product_id = $(this).val();
            alert(product_id);
           
        });
        
        
        $('#list_product tbody').on('click', '.delete_product', function(){
            $(this).parents('tr').remove();
        });

    });