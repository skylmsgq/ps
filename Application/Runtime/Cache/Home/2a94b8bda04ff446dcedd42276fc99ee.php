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
    <link rel="stylesheet" type="text/css" href="/public_security/Public/css/jumbotron.css">
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
    <!-- Main jumbotron for a primary marketing message or call to action -->
    <div class="jumbotron">
        <div class="container">
            <h1>新闻标注平台</h1>
            <br>
            <p>新闻标注平台由<strong>上海交通大学公共安全研究中心</strong>创立，搜集整理了国内外主流媒体新闻报道，面向公众以众包方式标注恐怖主义事件相关新闻报道，为每一条新闻报道打上专属标签，人人为建立中国恐怖主义事件数据库（CTD）贡献一份力量。</p>
            <p><a id="labeled" class="btn btn-primary btn-lg" href="http://omnilab.sjtu.edu.cn" role="button">关于 公共安全研究中心 »</a></p>
        </div>
    </div>
    <div class="container">
        <h1>关于标签</h1>
        <h4>我们给出以下几条原则（分别点击以查看详情）。</h4>
        <hr>
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingOne">
                    <h4 class="panel-title">
        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <新闻背景> 标签
        </a>
      </h4>
                </div>
                <div id="collapseOne" class="panel-collapse collapse in" role="tabpanel" aria-labelledby="headingOne">
                    <div class="panel-body">
                        凡是有关于事件发生的<strong>时间、地点、原因</strong>和<strong>内幕</strong>介绍的新闻条目，我们打上新闻背景标签。
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingTwo">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
          <事实陈述> 标签
        </a>
      </h4>
                </div>
                <div id="collapseTwo" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingTwo">
                    <div class="panel-body">
                        凡是<strong>当下</strong>的事实，也包括<strong>后期</strong>被补充的事实，我们打上事实陈述标签。
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingThree">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
          <事件演化> 标签
        </a>
      </h4>
                </div>
                <div id="collapseThree" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingThree">
                    <div class="panel-body">
                        凡是关于<strong>事实后期</strong>的变化，我们打上事件演化标签。<br>对于既有演化又有评论的新闻条目，同样打上事件演化标签。
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFour">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
          <各方态度> 标签
        </a>
      </h4>
                </div>
                <div id="collapseFour" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFour">
                    <div class="panel-body">
                        凡是<strong>政府、团体组织、民间机构、社会人士</strong>对事件本身的<strong>判断观点、情绪、意向</strong>,我们打上各方态度标签。
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingFive">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
          <直接关联> 标签
        </a>
      </h4>
                </div>
                <div id="collapseFive" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingFive">
                    <div class="panel-body">
                        凡是不属于事件或者事实（包括对事件或者事实的态度）但又有<strong>一定关系</strong>的。
                    </div>
                </div>
            </div>
            <div class="panel panel-default">
                <div class="panel-heading" role="tab" id="headingSix">
                    <h4 class="panel-title">
        <a class="collapsed" role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
          <暂无关联> 标签
        </a>
      </h4>
                </div>
                <div id="collapseSix" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingSix">
                    <div class="panel-body">
                        如果你找不到新闻与事件有什么关联的话，就只好打上暂无关联标签了。
                    </div>
                </div>
            </div>
        </div>
        <br>
        <br>
        <h1>如果你还不是很明白</h1>
        <h4>请点击案例浏览按钮，查看专家已经标注的新闻案例。</h4>
        <hr>
        <div>
            <p><a id="labeled" class="btn btn-success" style="width:400px" href="<?php echo U('Index/example');?>" role="button">案例浏览 »</a></p>
        </div>
        <br>
        <br>
        <br>
        <h1>反恐英雄榜</h1>
        <h4>反恐英雄也有琅琊榜。</h4>
        <hr>
        <div class="panel panel-primary">
            <!-- Default panel contents -->
            <div class="panel-heading" style="text-align:center;font-size:16px;">反恐英雄榜（20151204期）</div>
            <!-- Table -->
            <table class="table">
                <thead>
                    <tr>
                        <th>用户名</th>
                        <th>最近一次登陆时间</th>
                        <th>标注次数</th>
                    </tr>
                </thead>
                <tbody>
                    <?php if(is_array($users)): foreach($users as $key=>$v): ?><tr>
                            <th><?php echo ($v["user_name"]); ?></th>
                            <td><?php echo ($v["last_login_time"]); ?></td>
                            <td><?php echo ($v["count(*)"]); ?></td>
                        </tr><?php endforeach; endif; ?>
                </tbody>
            </table>
        </div>
        <br>
        <h1>加入我们</h1>
        <h4>点击注册按钮，拥有自己的反恐账号。</h4>
        <hr>
        <div>
            <p><a class="btn btn-danger" style="width:400px" href="<?php echo U('Index/register_page');?>" role="button">点击注册 »</a></p>
        </div>
        <br>
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