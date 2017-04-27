<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link type="text/css" rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/excel.css')}}">
    </head>
    <body>
        <h4>Tổng số slide : {{$total}} </h4>
       
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên slide</th>
                    <th>Mô tả</th>
                    <th>Hình ảnh</th>                   
                </tr>
            </thead>
            @foreach ($slides as $row)
            <tr>
                <td width="10px" id="User_ID">{{$row->Slide_ID}}</td>
                <td width="25px">{{$row->Slide_Title}}</td>
                 <td width="15px">{{$row->Slide_Description}}</td>
                <td width="50px" style="text-align:center"><img width="100px" src="assets/data/{{$row->Slide_Image}}"></td>

            </tr>
            @endforeach </table> 
       
    </body>
</html>