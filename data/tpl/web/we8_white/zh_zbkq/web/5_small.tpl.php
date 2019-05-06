<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="invitative">
        <div class="panel panel-default">
            <div class="panel-heading">
                系统设置&nbsp;>&nbsp;小程序设置
            </div>
            <div class="panel-body">
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序appid：</label>
                    <div class="col-sm-9">
                        <input type="text" name="appid" value="<?php  echo $list['appid'];?>" id="web_name" class="form-control" />
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序appsecret：</label>
                    <div class="col-sm-9">
                        <input type="text" name="appsecret" value="<?php  echo $list['appsecret'];?>" id="web_name" class="form-control" />
                    </div>
                </div>
             <!--    <div class="form-group">
                 <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序商户号：</label>
                 <div class="col-sm-9">
                     <input type="text" name="mchid" value="<?php  echo $list['mchid'];?>" id="web_name" class="form-control" />
                 </div>
             </div>
             <div class="form-group">
                 <label class="col-xs-12 col-sm-3 col-md-2 control-label">小程序商户号密钥：</label>
                 <div class="col-sm-9">
                     <input type="text" name="wxkey" value="<?php  echo $list['wxkey'];?>" id="web_name" class="form-control" />
                 </div>
             </div> -->
                  <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">微信小程序JavaScript SDK的key</label>
                    <div class="col-sm-9">
                        <input type="text" name="map_key" class="form-control" value="<?php  echo $list['map_key'];?>" />
                        *腾讯地图申请网站 http://lbs.qq.com/qqmap_wx_jssdk/index.html
                    </div>
                </div>
                
            </div>
        </div>
        
        <div class="form-group col-sm-12">
            <input type="submit" name="submit" value="保存设置" class="btn col-lg-3" style="color: white;background-color: #31C2A5;" />
             <input type="hidden" name="id" value="<?php  echo $list['id'];?>"/>
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        $("#nav8").addClass("in");
    })
</script>