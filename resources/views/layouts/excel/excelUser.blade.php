<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link type="text/css" rel="stylesheet" href="{{asset('bootstrap/css/bootstrap.min.css')}}">
        <link type="text/css" rel="stylesheet" href="{{asset('css/excel.css')}}">
    </head>
    <body>
        <h4>Tổng số người dùng : {{$total}}</h4>
        @if(!empty($users)) 
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Tên người dùng</th>
                    <th>Email</th>
                    <th>Provider</th>
                    <th>Provider ID</th>
                </tr>
            </thead>
            @foreach ($users as $row)
            <tr>
                <td width="10px" id="User_ID">{{$row->User_ID}}</td>
                <td width="25px">{{$row->User_Name}}</td>
                <td width="25px"> {{$row->User_Email}}</td>
                <td width="20px">{{$row->User_Provider}}</td>
                <td width="25px">{{$row->User_ProviderID}}</td>
            </tr>
            @endforeach </table> 
        @endif
    </body>
</html>