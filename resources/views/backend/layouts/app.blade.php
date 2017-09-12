<!DOCTYPE html>
<html>

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{config('app.name')}} | @yield('title')</title>
    <meta name="keywords" content="">
    <meta name="description" content="">

    <!-- 基础样式  -->
   <!--  <base target="_blank">   从新窗口打开链接-->
     @section('mycss')
        <link rel="shortcut icon" href="favicon.ico">
        <link href="{{URL::asset('static/backend/css/bootstrap.min.css?v=3.3.5')}}" rel="stylesheet">
        <link href="{{URL::asset('static/backend/css/font-awesome.min.css?v=4.4.0')}}" rel="stylesheet">
        <link href="{{URL::asset('static/backend/css/plugins/iCheck/custom.css')}}" rel="stylesheet">
        <link href="{{URL::asset('static/backend/css/animate.min.css')}}" rel="stylesheet">
        <link href="{{URL::asset('static/backend/css/style.min.css?v=4.0.0')}}" rel="stylesheet"><base target="_blank">
     @show
</head>

<body class="gray-bg">
    <div class="wrapper wrapper-content animated fadeInRight">
        @yield('content')
    </div>

    <!-- 弹框 -->
    @yield('layer')
    @section('myjs')
    <!-- 基础样式 -->
    <script src="{{URL::asset('static/backend/js/jquery.min.js?v=2.1.4')}}"></script>
    <script src="{{URL::asset('static/backend/js/bootstrap.min.js?v=3.3.5')}}"></script>
    <!--  自定义样式 -->
    @show

</body>

</html>
