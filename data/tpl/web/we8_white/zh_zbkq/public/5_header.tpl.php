<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header-base', TEMPLATE_INCLUDEPATH)) : (include template('public/header-base', TEMPLATE_INCLUDEPATH));?>
<style>
	.nav.nav-tabs{border-color:#20a0ff;}
	.nav-tabs>li>a:hover{border-color:#eee #eee #20a0ff #eee;}
	.nav-tabs>li.active>a, .nav-tabs>li.active>a:hover, .nav-tabs>li.active>a:focus{background-color:#20a0ff; border-color:#20a0ff;}
	.nav-tabs>li>a {border-radius: 0 0 0 0;}
	.nav{background-color: white;}
	.nav-tabs > li.active > a, .nav-tabs > li.active > a:hover, .nav-tabs > li.active > a:focus {
		color: #FFF;
		background-color: #20a0ff;
		border-color: #20a0ff;
	}
	.list-group-item.active, .list-group-item.active:hover, .list-group-item.active:focus{
		color: #31C2A5;
		background-color: orange;
	}
	.list-group-item.active{
		background-color: orange;
		border-color: #20a0ff;
		color: #31C2A5;
	}
	.navbar-inverse {
		background-color: #fff;
		border-color: #20a0ff
	}
	.block {
		display: block;
	}
	.clear {
		display: block;
		overflow: hidden;
	}
	.navbar-nav > li > a {
		padding-top: 10px;
		padding-bottom: 10px;
		line-height: 40px
	}
	.navbar-inverse .navbar-nav>li>a:hover, .navbar-inverse .navbar-nav>li>a:focus{
		color: #777;
		background-color: #eee;
	}
	.big-menu{
		background-color: #2A3542;
		padding-right: 0px;
		padding-left: 0px;
		height: 1400px;
	}
	@media all and (min-width: 900px) and (max-width: 1003px) {
		.big-menu{width: 14.666667%;}
	}
	@media all and (max-width: 1450px) {
		.big-menu{width: 16.666667%;}
	}
	@media all and (min-width: 1451px) {
		.big-menu{width: 12.666667%;}
	}
	/*.yg_main{position: fixed;left: 250px;top: 50px;right: 20px;z-index: 2;overflow-y: scroll;}*/
	.big-menu .panel .list-group-item{
		border:none;overflow:hidden; white-space:normal; text-overflow:clip;background-color: #35404D;
		font-size: 13px;
		font-weight: bold;
		padding:10px 40px 10px 47px;
	}
	.panel>.list-group .list-group-item{padding-left: 34px;}
	.big-menu .panel .list-group-item:hover{
		background-color: #505D6C;
		color:white;
	}
	.btn-primary {
		color: #fff;
		background-color: #0066cd;
		border-color: #0066cd;
	}
	.btn-primary:hover, .btn-primary:focus, .btn-primary:active, .btn-primary.active,
	.open > .dropdown-toggle.btn-primary {
		color: #fff;
		background-color: #0066cd;
		border-color: #0066cd;
	}
	.big-menu .panel .panel-heading .panel-title{
		width: 100px;
		float: left;
		font-weight: bold;
		font-size: 13px;
	}

	.navbar-inverse .navbar-nav>.active>a, .navbar-inverse .navbar-nav>.active>a:hover, .navbar-inverse
	.navbar-nav>.active>a:focus{
		color: #f60;
		background-color: #e7e7e7;
		border-bottom: 2px solid transparent;
		border-color: #f60;
	}
	button{outline: none;}
	.left{float: left;}
	.right{float: right;}
	a{text-decoration: none;}
	a:hover{text-decoration: none;}
	ul,li{list-style: none;}
	ul{margin-bottom: 0px;}
	body{font-size: 14px;font-family: "微软雅黑";}
	.clearfix{clear:both;}
	.header{
	    background-color: #31C2A5;;
	    color: white;
	    height: 100%;
	}

	.header_left{
	    height: 50px;
	    padding-top: 10px;
	}
	.header_logo{
	    width: 34px;
	    height: 30px;
	    float: left;
	}
	.header_title{
	    float: left;
	    font-size: 20px;
	    font-weight: bold;
	    margin-left: 10px;
	}
	@media all and (max-width: 1270px) {
		.header_right{
			width: 30%;
			left: 36%;
		}
	}
	@media all and (max-width: 1250px) {
		.header_right{
			width: 34%;
			left: 35%;
		}
	}
	@media all and (max-width: 1200px) {
		
	}
	@media all and (min-width: 1270px){
		.header_right{
			width: 27%;
		}
	}
	.header_right{
	    height: 50px;
	    padding: 8px 0px;
	}
	.header_right>li>a:hover{color: white;}
	.header_right>li{
	    float: left;
	    padding: 0px 20px;
	    border-right: 1px solid #049473;
	    line-height: 33px;
	}
	.ymargin{
		float: right;
		width: 30px;
		height: 30px;
		margin-top: 5px;
	}
	.header_left>a:hover{color: white;}
	.panel,.panel-heading{border-radius: 0px;}
	.list-group-item:last-child,.list-group-item:first-child{border-radius: 0px;}
	.yg_login{height: 150px;background-color: #263949;padding-top: 35px;text-align: center;color: white;font-size: 14px;}
	.yg_login>img{margin: 0px auto;width: 60px;height: 60px;background-color: #5CB85C;border-radius: 50%;border: none;margin-bottom: 15px;}
	.header_btn{text-align: center;float: left;margin-left: 20px;width: 100px;border-right: 1px solid #049473;border-left: 1px solid #049473;height: 30px;line-height: 30px;}	
	.fa-bed,.fa-area-chart,.fa-university,.fa-diamond,.fa-info-circle,.fa-vimeo-square,.fa-money,.fa-cog,.fa-user{margin-right: 15px;}
	
	.yg_back{background-color: #F2F2F2;}
</style>
<?php  $res=pdo_get('zbkq_platform',array('uniacid'=>$_W['uniacid']))?>
<div class="col-md-12 col-xs-12 col-sm-12 header">
    <div class="col-md-4 col-xs-5 header_left">
        <div class="header_logo">
            <img width="34px" height="30px" src="<?php  if($res['logo']) { ?><?php  echo tomedia($res['logo'])?><?php  } else { ?>../addons/zh_jd/template/images/bac.png<?php  } ?>" alt=""/>
        </div>
        <div class="header_title"><?php  if($res['name']) { ?><?php  echo $res['name'];?><?php  } else { ?>智慧周边卡券<?php  } ?></div>
        <a href="<?php  echo $this->createWebUrl('storemanger')?>"><div class="header_btn">返回首页</div></a>
    </div>
    <ul class="col-md-3 col-md-push-4 col-xs-4 col-xs-push-4 header_right">
       <!--  <li>
            <img width="31px" height="32px" src="../addons/zh_dianc/template/images/man.png" alt=""/>
            <span>admin</span>
        </li> -->
        <li>
			<a href="javascript:void(0);" class="dropdown-toggle" data-toggle="dropdown" style="display:block; max-width:185px; white-space:nowrap; overflow:hidden; text-overflow:ellipsis; "><i class="fa fa-user"></i><?php  echo $_W['user']['username'];?> (<?php  if($_W['role'] == 'founder') { ?>系统管理员<?php  } else if($_W['role'] == 'manager') { ?>公众号管理员<?php  } else { ?>公众号操作员<?php  } ?>) <b class="caret"></b></a>
			<ul class="dropdown-menu">
				<?php  if($_W['role'] != 'operator') { ?>
				<li><a href="<?php  echo url('user/profile/profile');?>" target="_blank"><i class="fa fa-weixin fa-fw"></i> 我的账号</a></li>
				<li class="divider"></li>
				<li><a href="<?php  echo url('system/welcome');?>" target="_blank"><i class="fa fa-sitemap fa-fw"></i> 系统选项</a></li>
				<li><a href="<?php  echo url('system/welcome');?>" target="_blank"><i class="fa fa-cloud-download fa-fw"></i> 自动更新</a></li>
				<li><a href="<?php  echo url('system/updatecache');?>" target="_blank"><i class="fa fa-refresh fa-fw"></i> 更新缓存</a></li>
				<li class="divider"></li>
				<?php  } ?>
			</ul>
        <li>
            <a href="index.php?c=wxapp&a=version&do=home&version_id=<?php  echo $_GPC['version_id'];?>"> <img width="21px" height="20px" src="../addons/zh_zbkq/template/images/home.png" title="返回系统"/></a>
        </li>        
        <!-- <li>
            <img src="../addons/zh_dianc/template/images/tongzhi.png" width="15px" height="18px" alt=""/>
        </li> -->
        <li>
            <a href="<?php  echo url('user/logout');?>"><img src="../addons/zh_zbkq/template/images/kaiguan.png" width="20px" height="20px" title="退出系统"/></a>
        </li>
    </ul>
</div>
<div class="container-fluid  col-md-12 col-xs-12 col-sm-12">
	<?php  if(defined('IN_MESSAGE')) { ?>
	<div class="jumbotron clearfix alert alert-<?php  echo $label;?>">
		<div class="row">
			<div class="col-xs-12 col-sm-3 col-lg-2">
				<i class="fa fa-5x fa-<?php  if($label=='success') { ?>check-circle<?php  } ?><?php  if($label=='danger') { ?>times-circle<?php  } ?><?php  if($label=='info') { ?>info-circle<?php  } ?><?php  if($label=='warning') { ?>exclamation-triangle<?php  } ?>"></i>
			</div>
			<div class="col-xs-12 col-sm-8 col-md-9 col-lg-10">
				<?php  if(is_array($msg)) { ?>
				<h2>MYSQL 错误：</h2>
				<p><?php  echo cutstr($msg['sql'], 300, 1);?></p>
				<p><b><?php  echo $msg['error']['0'];?> <?php  echo $msg['error']['1'];?>：</b><?php  echo $msg['error']['2'];?></p>
				<?php  } else { ?>
				<h2><?php  echo $caption;?></h2>
				<p><?php  echo $msg;?></p>
				<?php  } ?>
				<?php  if($redirect) { ?>
				<p><a href="<?php  echo $redirect;?>">如果你的浏览器没有自动跳转，请点击此链接</a></p>
				<script type="text/javascript">
					setTimeout(function () {
						location.href = "<?php  echo $redirect;?>";
					}, 3000);
				</script>
				<?php  } else { ?>
				<p>[<a href="javascript:history.go(-1);">点击这里返回上一页</a>] &nbsp; [<a href="./?refresh">首页</a>]</p>
				<?php  } ?>
			</div>
			<?php  } else { ?>
			<div class="row">
				<?php $frames = empty($frames) ? $GLOBALS['frames'] : $frames; _calc_current_frames($frames);?>
				<?php  if(!empty($frames)) { ?>
				<div class="col-md-2 col-lg-2 big-menu col-md-2 col-xs-2 col-sm-2">
					
					<?php  if($cur_store) { ?>
					<!-- <div class="panel panel-default" style="padding-bottom: 10px;padding-top: 5px;">
						<span style="width:13.3333337%; height:160px;display: table-cell; line-height:160px; vertical-align:middle;text-align: center;padding-top: 5px;">
							<img style="display: inline-block;width: 160px;height: 160px;
box-sizing: border-box;margin-top:10px;padding: 10px;border: 1px solid #f2f2f2;box-sizing: border-box;max-width: 100%;" alt="image" src="<?php  echo tomedia($cur_store['logo'])?>" onerror="this.src='../addons/zh_dianc/template/images/logo.png';"/>
						</span>
						<a href="#" >
							<span style="text-align:center;margin-top: 8px;" class="block m-t-xs"><strong class="font-bold"><?php  echo $cur_store['title'];?></strong></span>
							<span style="text-align:center;" class="text-muted text-xs block"><strong class="font-bold"><?php  echo $_W['user']['username'];?></strong>(<?php  if($_W['role'] == 'founder') { ?>系统管理员<?php  } else if($_W['role'] == 'manager') { ?>公众号管理员<?php  } else { ?>门店管理员<?php  } ?>)</span>
						</a>
					</div> -->
					<div class="yg_login">
						<img src="<?php  echo tomedia($cur_store['ewm_logo'])?>">
						<div><?php  echo $cur_store['name'];?></div>
					</div>
					<?php  } ?>
					<?php  if(is_array($frames)) { foreach($frames as $k => $frame) { ?>
					<div class="panel panel-default" style="border-color: #35404d;color: #E5E8ED;">

						<div class="panel-heading" data-toggle="collapse" data-parent="#accordion" href="#<?php  echo $frame['id'];?>" style="background-color: #35404d;cursor: pointer;color: #E5E8ED;border:none;height: 50px;">
							<div class="panel-title"><?php  echo $frame['title'];?></div>
							<div class="ymargin fa fa-chevron-circle-down"></div>
						</div>
						<ul class="panel-collapse collapse" id="<?php  echo $frame['id'];?>">
							<?php  if(is_array($frame['items'])) { foreach($frame['items'] as $link) { ?>
							<?php  if(!empty($link['append'])) { ?>
							<li class="list-group-item<?php  echo $link['active'];?>" onclick="window.location.href = '<?php  echo $link['url'];?>';" style="cursor:pointer;" kw="<?php  echo $link['title'];?>">
								<?php  echo $link['title'];?>
								<a class="pull-right" href="<?php  echo $link['append']['url'];?>"><?php  echo $link['append']['title'];?></a>
							</li>
							<?php  } else { ?>
							<a class="list-group-item<?php  echo $link['active'];?>" href="<?php  echo $link['url'];?>" kw="<?php  echo $link['title'];?>" style="padding-left: 40px;"><?php  echo $link['title'];?></a>
							<?php  } ?>
							<?php  } } ?>
						</ul>
					</div>
					<?php  } } ?>
					<script type="text/javascript">						
						require(['bootstrap'], function(){
							$('#search-menu input').keyup(function() {
								var a = $(this).val();
								$('.big-menu .list-group-item, .big-menu .panel-heading').hide();
								$('.big-menu .list-group-item').each(function() {
									$(this).css('border-left', '0');
									if(a.length > 0 && $(this).attr('kw').indexOf(a) >= 0) {
										$(this).parents(".panel").find('.panel-heading').show();
										$(this).show().css('border-left', '3px #428bca double');
									}
								});
								if(a.length == 0) {
									$('.big-menu .list-group-item, .big-menu .panel-heading').show();
								}
							});
						});
					</script>
				</div>
				<div class="col-lg-10 col-md-10 col-xs-10 col-sm-10 yg_back">
					<style>.topNav{border-bottom-color: rgb(0, 0, 0);border-bottom-width: 0.1em;border-bottom-style: inset;}</style>
					<?php  if(CRUMBS_NAV == 1) { ?>
					<?php  global $module_types;global $module;global $ptr_title;?>
					<?php $frames = empty($frames) ? $GLOBALS['frames'] : $frames; _calc_current_frames($frames);?>
					<script language='javascript'>
						$(function(){
							$(".breadcrumb").remove();
						})
					</script>
					<?php  } else if(CRUMBS_NAV == 2) { ?>
					<?php  global $module_types;global $module;global $ptr_title; global $site_urls; $m = $_GPC['m'];?>
					<ul class="nav nav-tabs">
						<li><a href="<?php  echo url('platform/reply', array('m' => $m));?>">管理<?php  echo $module['title'];?></a></li>
						<li><a href="<?php  echo url('platform/reply/post', array('m' => $m));?>"><i class="fa fa-plus"></i> 添加<?php  echo $module['title'];?></a></li>
						<?php  if(!empty($site_urls)) { ?>
						<?php  if(is_array($site_urls)) { foreach($site_urls as $site_url) { ?>
						<li <?php  if($_GPC['do'] == $site_url['do']) { ?> class="active"<?php  } ?>><a href="<?php  echo $site_url['url'];?>"> <?php  echo $site_url['title'];?></a></li>
						<?php  } } ?>
						<?php  } ?>
					</ul>
					<?php  } ?>
					<?php  } else { ?>
					<div>
					<?php  } ?>
					<?php  } ?>

	<script type="text/javascript">

$(function(){
    setInterval(function(){
               $.ajax({	
                type: "post",
                dataType: "json",
                url: "<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=neworder&m=zh_jd",
                success: function (data) {
                    console.log(data);
                    if(data=='1'){
                     var myAuto = document.getElementById('myaudio');
                     myAuto.play(); 
                    }
                },
                error:function (data) {
                    console.log(data)
                }

            })
          },10000);
})
    
</script>
<audio id="myaudio" src="../addons/zh_jd/template/images/text2audio.mp3" controls="controls"  hidden="true" ></audio>