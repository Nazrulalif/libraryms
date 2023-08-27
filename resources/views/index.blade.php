<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <div class="title">
        <h1>Library Management System</h1>
    </div>
    <div class="content">
        <a href="{{route('create')}}" type="button" class="btn btn-primary" style="float: right; margin-bottom:20px">Create New</a>
        <div>
            @if(session()->has('success'))
                <div>
                    {{session('success')}}
                </div>
            @endif
        </div>
        <table class="table table-striped table-hover">
            <tr>
                <th>id</th>
                <th>Image</th>
                <th>name</th>
                <th>Quantity</th>
                <th>Price</th>
                <th>Update</th>
                <th>Delete</th>
            </tr>
            @foreach($book as $row)
            <tr>
                <td>{{$row->id}}</td>
                <td><img src="{{ asset('uploads/'.$row->image) }}" style="width:90px"></td>
                <td>{{$row->name}}</td>
                <td>{{$row->quantity}}</td>
                <td>{{$row->price}}</td>
                <td><a type="button" class="btn btn-warning"href="{{route('edit', ['book'=>$row])}}">Update</a></td>
                <td><a type="button" class="btn btn-danger" href="{{route('delete', ['book' => $row])}}">Delete</a></td>
            </tr>
            @endforeach
        </table>

    </div>
    <div class="footer">
        <p>copyright 2023</p>

    </div>
</body>

</html>
