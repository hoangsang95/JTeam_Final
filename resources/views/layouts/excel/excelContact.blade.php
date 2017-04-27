<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf8">
        <link type="text/css" rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/excel.css')}}">
    </head>
    <body>
        <h4>Tổng số liên hệ: {{$total}} </h4>
       
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên người gửi</th>
                    <th>Số điện thoại</th>
                    <th>Email</th>
                    <th>Nội dung</th>
                    <th>Ngày gửi</th>
                </tr>
            </thead>
            @foreach ($contacts as $row)
            <tr>
                <td width="10px" id="User_ID">{{$row->Contact_ID}}</td>
                <td width="25px">{{$row->Contact_Name}}</td>
                 <td width="15px">{{$row->Contact_Mobile}}</td>
                <td width="15px">{{$row->Contact_Email}}</td>
                <td width="25px">{{$row->Contact_Message}}</td>
                <td width="25px">{{$row->Contact_Datetime}}</td>
            </tr>
            @endforeach </table> 
       
    </body>
</html>