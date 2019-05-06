<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<style type="text/css">
    .nav-tabs>li>a:hover{
        color: #333;
        border-color: #31C2A5;
        background-color: white;
    }
    .nav-tabs > li.active > a,.nav-tabs > li.active > a:hover{
        background-color: #31C2A5;
        color: white;
        border-color: #31C2A5;
    }
    .nav.nav-tabs{border-color: #31C2A5;margin-top: 30px;}
</style>
<div class="main">
    <form action="" method="post" class="form-horizontal form" enctype="multipart/form-data">
        <!--<input type="hidden" name="parentid" value="<?php  echo $parent['id'];?>" />-->
        <div class="panel panel-default">
            <div class="panel-heading">
                分销设置
            </div>
            <div class="panel-body">
             <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启分销</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" name="is_open" value="1" <?php  if($item['is_open']==1 || empty($item['is_open'])) { ?>checked<?php  } ?> />开启
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="is_open" value="2" <?php  if($item['is_open']==2) { ?>checked<?php  } ?> />关闭
                        </label>    
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启分销商审核</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" name="is_fx" value="1" <?php  if($item['is_fx']==1 || empty($item['is_fx'])) { ?>checked<?php  } ?> />开启
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="is_fx" value="2" <?php  if($item['is_fx']==2) { ?>checked<?php  } ?> />关闭
                        </label>    
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">是否开启二级分销</label>
                    <div class="col-sm-9">
                        <label class="radio-inline">
                            <input type="radio" name="is_ej" value="1" <?php  if($item['is_ej']==1 || empty($item['is_ej'])) { ?>checked<?php  } ?> />开启
                        </label>
                        <label class="radio-inline">
                            <input type="radio" name="is_ej" value="2" <?php  if($item['is_ej']==2) { ?>checked<?php  } ?> />关闭
                        </label>    
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">分销小程序端文本名称</label>
                    <div class="col-sm-9">
                        <p class="input-group">
                             <input type="text" name="fx_name" value="<?php  echo $item['fx_name'];?>" id="points" class="form-control" />
                        </p>
                 </div>
                </div>
            <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">分销中心图片</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('img', $item['img'])?>
                        *建议宽高比例 2:1
                    </div>
                </div> 
                <div class="form-group">
                    <label class="col-xs-12 col-sm-3 col-md-2 control-label">申请分销商图片</label>
                    <div class="col-sm-9">
                        <?php  echo tpl_form_field_image('img2', $item['img2'])?>
                        *建议宽高比例 2:1
                    </div>
                </div> 

                <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">一级佣金比例</label>
                  <div class="col-sm-9">
                        <p class="input-group">
                             <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="commission" value="<?php  echo $item['commission'];?>" id="points" class="form-control" />
                             <span class="input-group-addon">%</span>
                        </p>
                        <div class="help-block">一级下线消费时,分销商可获得佣金比例</div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">二级佣金比例</label>
                  <div class="col-sm-9">
                        <p class="input-group">
                             <input type="text" onkeyup="value=value.replace(/[^\d.]/g,'')" name="commission2" value="<?php  echo $item['commission2'];?>" id="points" class="form-control" />
                             <span class="input-group-addon">%</span>
                        </p>
                        <div class="help-block">二级下线消费时,分销商可获得佣金比例</div>
                  </div>
                </div>
                <div class="form-group">
                    <label for="lastname" class="col-sm-2 control-label">提现方式</label>
                    <div class="col-sm-10">
                        <label class="checkbox-inline">
                        <?php  if($item['is_zfb']==1) { ?>  
                        <input type="checkbox" name="is_zfb" id="optionsRadios3" value="1" checked> 支付宝
                        <?php  } else { ?>
                        <input type="checkbox" name="is_zfb" id="optionsRadios3" value="1" > 支付宝
                        <?php  } ?>
                        </label>
                        <label class="checkbox-inline">
                            <?php  if($item['is_yhk']==1) { ?>  
                            <input type="checkbox" name="is_yhk" id="optionsRadios4"  value="1" checked> 银行卡
                              <?php  } else { ?>
                               <input type="checkbox" name="is_yhk" id="optionsRadios4"  value="1" > 银行卡
                               <?php  } ?>
                        </label>
                        <label class="checkbox-inline">
                           <?php  if($item['is_wx']==1) { ?>  
                            <input type="checkbox" name="is_wx" id="optionsRadios4"  value="1" checked> 微信
                             <?php  } else { ?>
                                <input type="checkbox" name="is_wx" id="optionsRadios4"  value="1"> 微信
                                 <?php  } ?>
                        </label>
                        <div class="help-block">*注意：不勾选则关闭此提现方式</div>
                    </div>
                </div>
                <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">最低提现金额</label>
                    <div class="col-sm-9">
                        <p class="input-group">
                             <input type="text" name="tx_money" value="<?php  echo $item['tx_money'];?>" id="points" class="form-control" />
                             <span class="input-group-addon">元</span>
                        </p>
                        <div class="help-block">最低提现金额不能小于1元，建议填写整数，不填写为不限制</div>
                 </div>
                </div>
                <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">提现费率</label>
                  <div class="col-sm-9">
                        <p class="input-group">
                             <input type="number" name="tx_rate" value="<?php  echo $item['tx_rate'];?>" id="points" class="form-control" />
                             <span class="input-group-addon">%</span>
                        </p>
                        <div class="help-block">用户申请提现时，每笔申请提现扣除的费用，默认为空，即提现不扣费</div>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">分销商申请协议</label>
                  <div class="col-sm-9">
                       <?php  echo tpl_ueditor('fx_details',$item['fx_details']);?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">佣金提现协议</label>
                  <div class="col-sm-9">
                       <?php  echo tpl_ueditor('tx_details',$item['tx_details']);?>
                  </div>
                </div>
                <div class="form-group">
                  <label class="col-xs-12 col-sm-3 col-md-2 control-label">分销商说明</label>
                  <div class="col-sm-9">
                       <?php  echo tpl_ueditor('instructions',$item['instructions']);?>
                  </div>
                </div>
             </div>
        </div>
        <div class="form-group col-sm-12">
            <input type="submit" name="submit" value="提交" class="btn col-sm-3" style="color: white;background-color: #31C2A5;"/>
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>" />
             <input type="hidden" name="id" value="<?php  echo $item['id'];?>" />
        </div>
    </form>
</div>
<script type="text/javascript">
    $(function(){
        $("#nav9").addClass("in");
    })
</script>