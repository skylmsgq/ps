<?php if (!defined('THINK_PATH')) exit();?><html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="/public_security/Public/images/icon.png">
    <title>Signin Template for Bootstrap</title>
    <!-- Bootstrap core CSS -->
    <link href="/public_security/Public/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container" style="margin-top:150px">
        <div class="panel panel-primary" style="margin:0 auto;width:600px">
            <!-- Default panel contents -->
            <div class="panel-heading" style="font-size:20px;">注 册</div>
            <div class="panel-body">
                <p>请准确填写以下信息并提交。</p>
                <hr>
            <form>
                <div class="form-group">
                    <label for="exampleInputEmail1">用户名</label>
                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">手机号</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">密码</label>
                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
            </form>
            <div style="padding-top:10px;width:100px;margin:0 auto"><button type="submit" style="width:100px" class="btn btn-primary">提 交</button></div>
          </div>
        </div>
    </div>
</body>

</html>