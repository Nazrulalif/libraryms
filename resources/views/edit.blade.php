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
        <a href="{{route('index')}}" type="button" class="btn btn-primary" style="margin-bottom:20px">List</a>

        <div>
            @if($errors->any())
            <ul>
                @foreach($errors->all() as $error)
                <li>{{$error}}</li>
                @endforeach
            </ul>
            @endif
        </div>

        <form class="row g-3" method="post" action="{{route('update', ['book'=>$book])}}">
            @csrf
            @method('post')
            <div class="col-md-6">
                <label for="" class="form-label">Photo</label>
                <input type="file" class="form-control" id="image" name="image">
            </div>
            <div class="col-md-6">
                <label for="" class="form-label">Book Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{$book->name}}">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Quantity</label>
                <input type="number" class="form-control" id="quantity" name="quantity" value="{{$book->quantity}}">
            </div>
            <div class="col-12">
                <label for="" class="form-label">Price</label>
                <input type="number" step="any" class="form-control" id="price" name="price" value="{{$book->price}}">
            </div>
            
            <div class="col-12">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </form>

    </div>
    <div class="footer" style="margin-top: 0px">
        <p>copyright 2023</p>

    </div>
</body>

</html>
