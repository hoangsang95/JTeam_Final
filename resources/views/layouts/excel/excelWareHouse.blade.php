<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link type="text/css" rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/excel.css')}}">
    </head>
    <body>
        <h4>Tổng số : {{$total}} </h4>
       
        <table>
            <thead>
                <tr>
                    <th>Sản phẩm </th>
                    <th>Số lượng</th>
                    <th>Người thực hiện</th>
                    <th>Thời gian</th>
                    
                </tr>
            </thead>
            @foreach ($warehouses_product as $row)
            <tr>
                <td width="50px" id="User_ID">{{$row->Product_Name}}</td>
                <td width="10px">{{$row->Warehouse_Count}}</td>
                 <td width="20px" >{{$warehouses_user->User_Name}}</td>
                <td width="25px">{{$row->Warehouse_Datetime}}</td>
               
            </tr>
            @endforeach </table> 
       
    </body>
</html>