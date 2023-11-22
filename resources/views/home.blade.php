<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <link href="{!! asset('assets/css/bootstrap.min.css') !!}" rel="stylesheet" crossorigin="anonymous">
    <link href="{!! asset('assets/css/style.css') !!}" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-4">


            <div class="pieContainer">
                <div class="pieBackground"></div>
                <div id="pieSlice1" class="hold"><div class="pie"></div></div>
                <div id="pieSlice2" class="hold"><div class="pie"></div></div>
                <div id="pieSlice3" class="hold"><div class="pie"></div></div>
                <div id="pieSlice4" class="hold"><div class="pie"></div></div>
                <div id="pieSlice5" class="hold"><div class="pie"></div></div>
                <div id="pieSlice6" class="hold"><div class="pie"></div></div>
                <div class="innerCircle"><div class="content"><b>Data</b></div></div>
            </div>

        </div>
    </div>
</div>
<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>
<script src="{!! asset('assets/js/bootstrap.bundle.js') !!}" crossorigin="anonymous"></script>

</body>
</html>
