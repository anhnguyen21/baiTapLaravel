<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web UI</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

       <link rel="stylesheet" href="public/css/styleDT.css">

    </head>
    <body>
        <div class="container">
            <form method="POST">
                @csrf
                <p>Tích diện tích.</p>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nhập canh a:</label>
                    <input class="form-control"  name="a">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nhập canh b:</label>
                    <input class="form-control" name="b">
                </div>
                <div class="form-group">
                    <select name="type" id="">
                        <option value="tamgiac">Tam giác</option>
                        <option value="chunhat">Chữ nhật</option>
                    </select>
                </div>
                <button type="submit" class="btn btn-primary w-100">Submit</button>
            </form>
        </div>
    </body>
</html>
