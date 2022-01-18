<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Our Website</title>
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>
    <body>
        <div class="container">
            <h2 class="text-center">Penambahan Produk</h2><br/>

            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </div><br/>
            @endif
            @if (\Session::has('success'))
                <div class="alert alert-success">
                    <p>{{ \Session::get('success') }};</p>
                </div><br/>
            @endif

            <form method="post" action="{{url('v1')}}">
                {{csrf_field()}}
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="name">Nama : </label>
                        <input type="text" class="form-control" name="name">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <label for="price">Harga : </label>
                        <input type="text" class="form-control" name="price">
                    </div>
                </div>
                <div class="row text-center">
                    <div class="col-md-4"></div>
                    <div class="form-group col-md-4">
                        <button type="submit" class="btn-success" style="margin-left: 38px">Tambahkan Produk</button>
                    </div>
                </div>
            </form>
        </div>
    </body>
</html>
