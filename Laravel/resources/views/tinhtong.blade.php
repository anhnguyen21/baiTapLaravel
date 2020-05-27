<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Web UI</title>

        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

       <link rel="stylesheet" href="public/css/styleWeb.css">

    </head>
    <body>
        <div class="container">
            <form method="POST">
                @csrf
                <p>Tinh tong 2 số a và b.</p>
                <div class="form-group">
                    <label for="exampleInputEmail1">Nhập vào a</label>
                    <input class="form-control"  name="a">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Nhập vào b</label>
                    <input class="form-control" name="b">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </body>
</html>
