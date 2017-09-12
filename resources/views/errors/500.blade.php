<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>{{config('app.name')}} | 服务器繁忙</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <link rel="shortcut icon" href="favicon.ico">
    <link href="{{URL::asset('static/backend/css/bootstrap.min.css?v=3.3.5')}}" rel="stylesheet">
    <link href="{{URL::asset('static/backend/css/font-awesome.min.css?v=4.4.0')}}" rel="stylesheet">

    <link href="{{URL::asset('static/backend/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/backend/css/style.min.css?v=4.0.0')}}" rel="stylesheet">

</head>

<body class="gray-bg">
    <div class="middle-box text-center animated fadeInDown">
        <h1>500</h1>
        <h3 class="font-bold">服务器内部错误</h3>

        <div class="error-desc">
            服务器好像出错了...
            <br/>您可以返回主页看看
            <br/><a href="index.html" class="btn btn-primary m-t">主页</a>
        </div>
    </div>
    <script src="{{URL::asset('static/backend/js/jquery.min.js?v=2.1.4')}}"></script>
    <script src="{{URL::asset('static/backend/js/bootstrap.min.js?v=3.3.5')}}"></script>
</body>

</html>
