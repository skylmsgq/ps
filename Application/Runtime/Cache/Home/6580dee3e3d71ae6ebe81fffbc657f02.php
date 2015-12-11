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
    <nav class="navbar navbar-default navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="<?php echo U('Index/index');?>">上海交通大学公共安全研究中心</a>
            </div>
            <nav id="bs-navbar" class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li><a>用户名：<?php echo (session('user_name')); ?></a></li>
                    <li><a href="<?php echo U('Index/logout');?>"><span class="glyphicon glyphicon-log-out"></span> 退出登录</a></li>
                </ul>
            </nav>
            <!--/.nav-collapse -->
        </div>
    </nav>
    <div class="container" style="margin-top:50px">
        <div id="title" class="row">
            <div class="logo col-md-1 col-md-offset-4">
                <img src="/public_security/Public/images/logo.png" style="width:100px">
            </div>
            <div class="search col-md-5">
                <h1>已标注新闻</h1>
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
                            <!-- Button trigger modal -->
                            <button style="width:130px" type="button" class="btn btn-primary" data-toggle="modal" data-target="#myModal<?php echo ($v["id"]); ?>">
                                修改标签
                            </button>
                            <!-- Modal -->
                            <div class="modal fade" id="myModal<?php echo ($v["id"]); ?>" tabindex="-1" role="dialog" aria-labelledby="myModalLabel<?php echo ($v["id"]); ?>">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                            <h4 class="modal-title" id="myModalLabel<?php echo ($v["id"]); ?>"><?php echo ($v["title"]); ?></h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="btn-group" data-toggle="buttons">
                                                <label class="btn btn-default">
                                                    <input type="checkbox" name="options" id="option1<?php echo ($v["id"]); ?>" autocomplete="off"> 新闻背景
                                                </label>
                                                <label class="btn btn-default">
                                                    <input type="checkbox" name="options" id="option2<?php echo ($v["id"]); ?>" autocomplete="off"> 事实陈述
                                                </label>
                                                <label class="btn btn-default">
                                                    <input type="checkbox" name="options" id="option3<?php echo ($v["id"]); ?>" autocomplete="off"> 各方态度
                                                </label>
                                                <label class="btn btn-default">
                                                    <input type="checkbox" name="options" id="option4<?php echo ($v["id"]); ?>" autocomplete="off"> 事件演化
                                                </label>
                                                <label class="btn btn-default">
                                                    <input type="checkbox" name="options" id="option6<?php echo ($v["id"]); ?>" autocomplete="off"> 直接关联
                                                </label>
                                                <label class="btn btn-default">
                                                    <input type="checkbox" name="options" id="option7<?php echo ($v["id"]); ?>" autocomplete="off"> 暂无关联
                                                </label>
                                            </div>
                                            <!-- <div class="form-group">
                                        <input style="margin-top:10px;width:406px" type="text" class="form-control" id="option6<?php echo ($v["id"]); ?>" placeholder="<?php echo ($v["label_6"]); ?>" value="<?php echo ($v["label_6"]); ?>">
                                    </div> -->
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                                            <button type="button" class="btn btn-primary" onclick="ajaxAction(<?php echo ($v["id"]); ?>)">提交</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><?php endforeach; endif; ?>
        </div>
    </div>
</body>

</html>
<script type="text/javascript">
function ajaxAction(news_id) {
    console.log(news_id);
    var label = {
        checkbox_1: document.getElementById('option1' + news_id).checked,
        checkbox_2: document.getElementById('option2' + news_id).checked,
        checkbox_3: document.getElementById('option3' + news_id).checked,
        checkbox_4: document.getElementById('option4' + news_id).checked,
        checkbox_6: document.getElementById('option6' + news_id).checked,
        checkbox_7: document.getElementById('option7' + news_id).checked,
    };
    console.log(label);
    $("#myModal<?php echo ($v["id"]); ?>").html('<center style="margin:50px"><h4>提交中...</h4><div class="progress progress-striped active" style="width: 50%"><div class="progress-bar"  role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div></div></center>');
    $.ajax({
        url: 'postdata?news_id=' + news_id,
        data: label,
        type: 'post',
        dataType: 'text',
        success: function(data) {
            console.log(data);
            location.reload();
        }
    })
}
</script>
<script src="/public_security/Public/js/jquery.min.js"></script>
<script src="/public_security/Public/js/bootstrap.min.js"></script>