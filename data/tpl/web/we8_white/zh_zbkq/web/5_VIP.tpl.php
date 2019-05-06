<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>


<div class="main">
  <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="invitative">
    <div class="panel panel-default">
      <div class="panel-heading">
        VIP管理
      </div>

      &nbsp;&nbsp;
       <div class="form-group">
               <label class="col-xs-12 col-sm-3 col-md-2 control-label">用户VIP功能</label>
               <div class="col-sm-9">
                   <label class="radio-inline">
                       <input type="radio" name="status" value="1" <?php  if($list['status']==1 || empty($item['status'])) { ?>checked<?php  } ?> />关闭 
                   </label>
                   <label class="radio-inline">
                     <input type="radio" name="status" value="2" <?php  if($list['status']==2) { ?>checked<?php  } ?> />开启
                   </label>
                    <div class="help-block"><font color="red">开启平台用户会员vip高级功能,会员vip期限在"VIP管理->VIP设置"里面添加</font></div>
               </div>
           </div>
           <div class="form-group">
               <label class="col-xs-12 col-sm-3 col-md-2 control-label">允许用户选择领券模式</label>
               <div class="col-sm-9">
                   <label class="radio-inline">
                       <input type="radio" name="is_ms" value="1" <?php  if($list['is_ms']==1 || empty($item['is_ms'])) { ?>checked<?php  } ?> />开启
                   </label>
                   <label class="radio-inline">
                     <input type="radio" name="is_ms" value="2" <?php  if($list['is_ms']==2) { ?>checked<?php  } ?> />关闭
                   </label>
                    <div class="help-block"><font color="red">开启后,用户领券可选择"开通vip后领取"或"付费领取";关闭后,用户必须开通"用户vip"才能领券</font><font color="green">(此模式必须先开启"用户vip功能")</font></div>
               </div>
           </div>
			<div class="form-group">
               <label class="col-xs-12 col-sm-3 col-md-2 control-label">VIP用户付费领券</label>
               <div class="col-sm-9">
                   <label class="radio-inline">
                       <input type="radio" name="is_ff" value="1" <?php  if($list['is_ff']==1 || empty($item['is_ff'])) { ?>checked<?php  } ?> />开启
                   </label>
                   <label class="radio-inline">
                       
                        <input type="radio" name="is_ff" value="2" <?php  if($list['is_ff']==2) { ?>checked<?php  } ?> />关闭
                   </label>
                   <div class="help-block"><font color="red">开启后VIP用户领券需要付费领取,关闭后vip用户免费领券</font><font color="green">(此模式必须先开启"用户vip功能")</font></div>
               </div>
           </div>
           <div class="form-group">
               <label class="col-xs-12 col-sm-3 col-md-2 control-label">免费领券判断vip</label>
               <div class="col-sm-9">
                   <label class="radio-inline">
                       <input type="radio" name="is_mfvip" value="1" <?php  if($list['is_mfvip']==1 || empty($item['is_mfvip'])) { ?>checked<?php  } ?> />开启
                   </label>
                   <label class="radio-inline">
                       
                        <input type="radio" name="is_mfvip" value="2" <?php  if($list['is_mfvip']==2) { ?>checked<?php  } ?> />关闭
                   </label>
                    <div class="help-block"><font color="red">开启后用户免费领券需要开通vip,关闭后用户免费领券不用开通vip</font><font color="green">(此模式必须先开启"用户vip功能")</font></div>
               </div>
           </div>
           <div class="form-group">
               <label class="col-xs-12 col-sm-3 col-md-2 control-label">门店VIP状态</label>
               <div class="col-sm-9">
                   <label class="radio-inline">
                       <input type="radio" name="status2" value="1" <?php  if($list['status2']==1 || empty($item['status2'])) { ?>checked<?php  } ?> />开启
                   </label>
                   <label class="radio-inline">
                       
                        <input type="radio" name="status2" value="2" <?php  if($list['status2']==2) { ?>checked<?php  } ?> />关闭
                   </label>
                    <div class="help-block"></div>
               </div>
           </div>
           



           <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">用户VIP图片</label>
                        <div class="col-sm-10">
                            <?php  echo tpl_form_field_image('img',$list['img']);?>
                               建议上传宽高2:1图片
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-2 control-label">门店VIP图片</label>
                        <div class="col-sm-10">
                            <?php  echo tpl_form_field_image('img2',$list['img2']);?>
                               建议上传宽高2:1图片
                        </div>
                    </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户升级VIP特权</label>
        <div class="col-sm-10">
          <textarea name="content" class="form-control" placeholder="请输入用户VIP特权" cols="30" rows="7"><?php  echo $list['content'];?></textarea>
        </div>
      </div>
     


      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">用户升级VIP协议</label>
        <div class="col-sm-10">
         <textarea name="info" class="form-control" placeholder="请输入用户VIP协议" cols="30" rows="7"><?php  echo $list['info'];?></textarea>
       </div>
     </div>
       <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">门店升级VIP协议</label>
        <div class="col-sm-10">
         <textarea name="info2" class="form-control" placeholder="请输入门店VIP协议" cols="30" rows="7"><?php  echo $list['info2'];?></textarea>
       </div>
     </div>
      <div class="form-group">
        <label for="inputEmail3" class="col-sm-2 control-label">门店升级VIP特权</label>
        <div class="col-sm-10">
          <textarea name="content2" class="form-control" placeholder="请输入门店VIP特权" cols="30" rows="7"><?php  echo $list['content2'];?></textarea>
        </div>
      </div>



            </div>
        </div>
        <div class="form-group col-sm-12">
            <input type="submit" name="submit" value="保存设置" class="btn col-lg-3" style="color: white;background-color: #31C2A5;" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
        </div>
    </form>
</div>

<script type="text/javascript">
    $(function(){
        $("#nav14").addClass("in");
    })
</script>