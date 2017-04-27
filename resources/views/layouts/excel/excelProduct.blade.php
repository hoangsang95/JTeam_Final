<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link type="text/css" rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/excel.css')}}">
    </head>
    <body>
        <h4>Tổng số sản phẩm : {{$total}} </h4>
       
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên sản phẩm</th>
                    <th>Hình ảnh</th>
                    <th>Giá</th>
                    <th>Trạng thái</th>
                </tr>
            </thead>
            @foreach ($products as $row)
            <tr>
                <td width="10px" id="User_ID">{{$row->Product_ID}}</td>
                <td width="30px">{{$row->Product_Name}}</td>
                <td width="50px" style="text-align:center"><img width="50px" src="assets/data/{{$row->Product_Thumbnail}}"></td>
                <td width="15px">${{$row->Product_Price}}</td>
                <td width="20px">
                    @if( $row->Product_InStock ==1)
                    {{"Còn hàng"}}
                    @else
                    {{"Hết hàng"}}
                    @endif

                </td>
            </tr>
            @endforeach </table> 
       
    </body>
</html>