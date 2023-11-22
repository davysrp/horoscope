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
<div class="wrapper">
    <div class="pie-wrap">

        <div class="light-yellow entry">
            <p>25%</p>
            <p class="entry-value">Rice</p>
        </div>

        <div class="sky-blue entry">
            <p>25%</p>
            <p class="entry-value">Pasta</p>
        </div>

        <div class="pink entry">
            <p>12.5%</p>
            <p class="entry-value">Beans </p>
        </div>

        <div class="purple entry">
            <p> 12.5%</p>
            <p class="entry-value">Plantain</p>
        </div>

        <div class="green entry">
            <p> 12.5%</p>
            <p class="entry-value">Potato</p>
        </div>

        <div class="wheat entry">
            <p> 12.5%</p>
            <p class="entry-value">Yam</p>
        </div>

    </div>

    <div class="key-wrap"></div>

</div>


<script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk="
        crossorigin="anonymous"></script>
<script src="{!! asset('assets/js/bootstrap.bundle.js') !!}" crossorigin="anonymous"></script>

</body>
</html>
