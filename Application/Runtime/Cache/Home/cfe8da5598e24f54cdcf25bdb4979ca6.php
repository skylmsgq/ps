<?php if (!defined('THINK_PATH')) exit();?><html lang="zh-CN">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="skylmsgq">
    <link rel="icon" href="/public_security/Public/images/icon.png">
    <title>新闻标注平台</title>
    <!-- Bootstrap core CSS -->
    <link href="/public_security/Public/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="/public_security/Public/css/labeled.css">
</head>

<body>
    <header class="navbar navbar-static-top bs-docs-nav" id="top" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button class="navbar-toggle collapsed" type="button" data-toggle="collapse" data-target="#bs-navbar" aria-controls="bs-navbar" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a href="<?php echo U('Index/index');?>" class="navbar-brand">上海交通大学公共安全研究中心</a>
            </div>
            <nav id="bs-navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a href="<?php echo U('Index/login_page');?>">登录</a></li>
                    <li><a href="<?php echo U('Index/register_page');?>">注册</a></li>
                </ul>
            </nav>
        </div>
    </header>
    <div class="container" style="margin-top:-30px">
        <div id="title" class="row">
            <div class="logo col-md-1 col-md-offset-4">
                <img src="/public_security/Public/images/logo.png" style="width:100px">
            </div>
            <div class="search col-md-5">
                <h1>案例浏览</h1>
            </div>
        </div>
        <hr>
        <div id="board-grp" class="row">
            <?php if(is_array($news)): foreach($news as $key=>$v): ?><div class="col-sm-6 col-md-4 board">
                    <div class="thumbnail">
                        <div class="caption">
                            <a href="<?php echo ($v["url"]); ?>"><h4 style="color:black;height:35px"><?php echo ($v["title"]); ?></h4></a>
                            <p><strong><?php echo ($v["author"]); ?></strong>，<strong><?php echo ($v["time"]); ?></strong></p>
                            <div class="btn-group" role="group" aria-label="...">
                                <?php if($v["label_1"] == 'true'): ?><button type="button" class="btn btn-warning">新闻背景</button><?php endif; ?>
                                <?php if($v["label_2"] == 'true'): ?><button type="button" class="btn btn-info">事实陈述</button><?php endif; ?>
                                <?php if($v["label_3"] == 'true'): ?><button type="button" class="btn btn-primary">各方态度</button><?php endif; ?>
                                <?php if($v["label_4"] == 'true'): ?><button type="button" class="btn btn-success">事件演化</button><?php endif; ?>
                                <?php if($v["label_6"] == 'true'): ?><button type="button" class="btn btn-default">直接关联</button><?php endif; ?>
                                <?php if($v["label_7"] == 'true'): ?><button type="button" class="btn btn-danger">暂无关联</button><?php endif; ?>
                                <!-- <?php if($v["label_6"] != ''): ?><button type="button" class="btn btn-success"><?php echo ($v["label_6"]); ?></button><?php endif; ?> -->
                            </div>
                            <p></p>
                            <p style="height:80px;"><?php echo ($v["abstract"]); ?></p>
                        </div>
                    </div>
                </div><?php endforeach; endif; ?>
        </div>
        <hr>
        <footer>
            <p>© 上海交通大学 OMNILab 2015-2016</p>
        </footer>
    </div>
    <!-- /container -->
    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="/public_security/Public/js/jquery.min.js"></script>
    <script src="/public_security/Public/js/bootstrap.min.js"></script>
</body>

</html>