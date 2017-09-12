<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

    <title>{{config('app.name')}} | 登录</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <link href="{{URL::asset('static/backend/css/bootstrap.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/backend/css/font-awesome.min.css?v=4.4.0')}}" rel="stylesheet">
    <link href="{{URL::asset('static/backend/css/animate.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/backend/css/style.min.css')}}" rel="stylesheet">
    <link href="{{URL::asset('static/backend/css/login.min.css')}}" rel="stylesheet">
    <!--[if lt IE 8]>
    <meta http-equiv="refresh" content="0;ie.html" />
    <![endif]-->
    <script>
        if(window.top!==window.self){window.top.location=window.location};
    </script>

</head>

<body class="signin">
    <div class="signinpanel">
        <div class="row">

            <div class="col-sm-12 ">
                <form method="post" action="{{url('login')}}">
                    {{csrf_field()}}
                    <h4 class="no-margins">登录：</h4>
                    <p class="m-t-md">登录到后台</p>
                    <input type="text" name="username" class="form-control uname" placeholder="用户名" />
                    <input type="password" name="password" class="form-control pword m-b" placeholder="密码" />
                    <button class="btn btn-success btn-block">登录</button>
                </form>
            </div>
        </div>
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2017 All Rights Reserved. 紫平方
            </div>
        </div>
    </div>
</body>

</html>
