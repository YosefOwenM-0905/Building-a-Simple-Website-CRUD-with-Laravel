<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Our Website</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
</head>
<body>
    <div class="container">
        <h2 class="text-center mb-5">Perubahan Produk</h2>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div><br/>
        @endif

        <form method="post" action="{{route('v1.update', $id)}}">
            {{csrf_field()}}
            <input name="_method" type="hidden" value="PATCH">
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="name">Name : </label>
                    <input type="text" class="form-control" name="name" value="{{$product->name}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group col-md-4">
                    <label for="price">Price : </label>
                    <input type="text" class="form-control" name="price" value="{{$product->price}}">
                </div>
            </div>
            <div class="row">
                <div class="col-md-4"></div>
                <div class="form-group text-center  col-md-4">
                    <button type="submit" class="btn-success" style="margin-left: 38px">Update Produk</button>
                </div>
            </div>
        </form>
    </div>
</body>
</html>
