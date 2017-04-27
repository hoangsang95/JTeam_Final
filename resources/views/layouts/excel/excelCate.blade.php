<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link type="text/css" rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/excel.css')}}">
    </head>
    <body>
        <h4>Tổng loại sản phẩm : {{$total}} </h4>
       
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên loại sản phẩm</th>
                    
                </tr>
            </thead>
            @foreach ($cates as $row)
            <tr>
                <td width="10px" id="User_ID">{{$row->Cat_ID}}</td>
                <td width="25px">{{$row->Cat_Name}}</td>
               
            </tr>
            @endforeach </table> 
       
    </body>
</html>