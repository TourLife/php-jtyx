<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>

<?php  if($operation == 'display') { ?>

    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data" id="invitative">
    <div class="main">
        <div class="panel panel-default">
            <div class="panel-heading">
                卡券设置
            </div>
            <div class="panel-body">
                <div class="form-group">
               <label class="col-xs-12 col-sm-3 col-md-2 control-label">发券设置</label>
               <div class="col-sm-9">
                   <label class="radio-inline">
                       <input type="radio" name="is_couset" value="1" <?php  if($item['is_couset']==1 || empty($item['is_couset'])) { ?>checked<?php  } ?> />开启
                   </label>
                   <label class="radio-inline">
                       <input type="radio" name="is_couset" value="2" <?php  if($item['is_couset']==2) { ?>checked<?php  } ?> />关闭
                       
                   </label>
                   <div class="help-block">开启后卡券领取金额和卡券分享群数量以商家设置为主,关闭后以平台设置为主</div>
               </div>
           </div>

           <div class="form-group">
               <label class="col-xs-12 col-sm-3 col-md-2 control-label">分享领券</label>
               <div class="col-sm-9">
                   <label class="radio-inline">
                       <input type="radio" name="is_fxlq" value="1" <?php  if($item['is_fxlq']==1 || empty($item['is_fxlq'])) { ?>checked<?php  } ?> />开启
                   </label>
                   <label class="radio-inline">
                       <input type="radio" name="is_fxlq" value="2" <?php  if($item['is_fxlq']==2) { ?>checked<?php  } ?> />关闭
                       
                   </label>
                   <div class="help-block">开启后商家发券有分享领券选项,关闭后则没有</div>
               </div>
           </div>

           <div class="form-group">
               <label class="col-xs-12 col-sm-3 col-md-2 control-label">用户领券限制</label>
               <div class="col-sm-9">
                   <label class="radio-inline">
                       <input type="radio" name="is_lqxz" value="1" <?php  if($item['is_lqxz']==1 || empty($item['is_lqxz'])) { ?>checked<?php  } ?> />开启
                   </label>
                   <label class="radio-inline">
                       <input type="radio" name="is_lqxz" value="2" <?php  if($item['is_lqxz']==2) { ?>checked<?php  } ?> />关闭
                       
                   </label>
                   <div class="help-block">开启后用户同一券只能领取一张券,关闭后用户领取核销后可继续领取</div>
               </div>
           </div>
           <div class="form-group">
               <label class="col-xs-12 col-sm-3 col-md-2 control-label">领完券是否显示</label>
               <div class="col-sm-9">
                   <label class="radio-inline">
                       <input type="radio" name="is_kqxs" value="1" <?php  if($item['is_kqxs']==1 || empty($item['is_kqxs'])) { ?>checked<?php  } ?> />显示
                   </label>
                   <label class="radio-inline">
                       <input type="radio" name="is_kqxs" value="2" <?php  if($item['is_kqxs']==2) { ?>checked<?php  } ?> />隐藏
                       
                   </label>
                   <div class="help-block">设置商家券领完后是否在商家页显示</div>
               </div>
           </div>
           <div class="form-group">
               <label class="col-xs-12 col-sm-3 col-md-2 control-label">免费券是否显示</label>
               <div class="col-sm-9">
                   <label class="radio-inline">
                       <input type="radio" name="is_mfq" value="1" <?php  if($item['is_mfq']==1 ) { ?>checked<?php  } ?> />显示
                   </label>
                   <label class="radio-inline">
                       <input type="radio" name="is_mfq" value="2" <?php  if($item['is_mfq']==2 || empty($item['is_mfq'])) { ?>checked<?php  } ?> />隐藏
                       
                   </label>
                   <div class="help-block"></div>
               </div>
           </div>
                
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">卡券立即领取金额设置</label>
                    <div class="col-sm-9">
                        <input type="text" name="lq_cost" value="<?php  echo $item['lq_cost'];?>" id="review_user" class="form-control" />
                        <div class="help-block">输入立即领取卡券支付金额</div>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">卡券分享群数量设置</label>
                    <div class="col-sm-9">
                        <input type="number" name="fxq_num" value="<?php  echo $item['fxq_num'];?>" id="review_user" class="form-control" />
                        <div class="help-block">输入优惠券分享群数量</div>
                    </div>
                </div>
                 <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">卡券分享群内容设置</label>
                    <div class="col-sm-9">
                        <input type="text" name="fx_content" value="<?php  echo $item['fx_content'];?>" id="review_user" class="form-control" />
                        <div class="help-block">变量值为num,例如：分享到num个微信群，即可免费领券</div>
                    </div>
                </div>
               <!--  <div class="form-group">
               <label class="col-xs-12 col-sm-3 col-md-2 control-label">领券模式设置</label>
               <div class="col-sm-9">
                   <label class="radio-inline">
                       <input type="radio" name="lq_more" value="1" <?php  if($item['lq_more']==1 || empty($item['lq_more'])) { ?>checked<?php  } ?> />平台模式
                   </label>
                   <label class="radio-inline">
                       <input type="radio" name="lq_more" value="2" <?php  if($item['lq_more']==2) { ?>checked<?php  } ?> />商家模式
                   </label>
               </div>
           </div>
                 <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">领券次数设置</label>
                    <div class="col-sm-9">
                        <input type="text" name="fx_content" value="<?php  echo $item['fx_content'];?>" id="review_user" class="form-control" />
                        <div class="help-block">同一券同一用户最多领取次数</div>
                    </div>
                </div>
     -->
              
            </div>
        </div>
      
        </div>
        <div class="form-group col-sm-12">
            <input type="submit" name="submit" value="保存设置" class="btn col-lg-3" style="color: white;background-color: #31C2A5;" />
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
        </div>
    </form>

 
<?php  } ?>
<script type="text/javascript">
    $(function(){
        $("#nav11").addClass("in");
    })
</script>
