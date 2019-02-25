<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<table border="1px" cellspacing="0">
    <tr>
        <th>STT</th>
        <th>Ho Va Ten</th>
        <th>So Dien Thoai</th>
        <th>Email</th>
        <th>Created_at</th>
        <th>updated_at</th>
        <th colspan="3">Thao Tac</th>
    </tr>
    @foreach($task as $key=>$value)
        <tr>
            <td>{{$value->id}}</td>
            <td>{{$value->name}}</td>
            <td>{{$value->email}}</td>
            <td>{{$value->phone}}</td>
            <td>{{$value->created_at}}</td>
            <td>{{$value->updated_at}}</td>
            <td><a href="{{route('create')}}">Them</a></td>
            <td><a href="{{route('store', $value->id)}}">sua</a></td>
            <td><a href="{{route('delete', $value->id)}}"><button type="submit" onclick="return confirm('ban co chac muon xoa')">Xoa</button></a></td>
        </tr>
    @endforeach
</table>
</body>
</html>