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
    .nav.nav-tabs{border-color: #31C2A5;margin-top: 30px;margin-bottom: 30px;}
    .yg5_key>div{float: left;line-height: 34px;}
    .store_td1{height: 45px;}
    .store_list_img{width: 80px;height:80px;}
    .yg5_tabel{border-color: #e5e5e5;outline: 1px solid #e5e5e5;text-align: center;}
    .yg5_tr2>td{padding: 15px;border: 1px solid #e5e5e5;}
    .yg5_tr1>td{
        border: 1px solid #e5e5e5;
        background-color: #FAFAFA;
        font-weight: bold;
    }
    .yg5_btn{background-color: #EEEEEE;color: #333;border: 1px solid #E4E4E4;border-radius: 6px;width: 100px;height: 34px;}
    .check_img{width: 45px;height: 45px;}
</style>
<ul class="nav nav-tabs">
  <li  <?php  if($type=='all') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('fxlist',array('type'=>all));?>">全部</a></li>
  <li   <?php  if($type=='wait') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('fxlist',array('type'=>wait,'status'=>1));?>">待审核</a></li>
  <li   <?php  if($type=='now') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('fxlist',array('type'=>now,'status'=>2));?>">审核通过</a></li>
  <li   <?php  if($type=='delivery') { ?> class="active" <?php  } ?>><a href="<?php  echo $this->createWebUrl('fxlist',array('type'=>delivery,'status'=>3));?>">审核拒绝</a></li>
</ul>
<div class="row">
    <div class="col-lg-12">
        <form action="" method="get" class="col-md-6">
        <input type="hidden" name="c" value="site" />
            <input type="hidden" name="a" value="entry" />
            <input type="hidden" name="m" value="zh_zbkq" />
            <input type="hidden" name="do" value="fxlist" />
            <div class="input-group" style="width: 300px;margin-top: 30px;">
                <input type="text" name="keywords" class="form-control" placeholder="请输入商家名称/联系人">
                <span class="input-group-btn">
                    <input type="submit" class="btn btn-default" name="submit" value="查找"/>
                </span>
            </div>
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
        </form>
    </div><!-- /.col-lg-6 -->
</div>  
<div class="main">
    <div class="panel panel-default">
        <div class="panel-heading">
            审核管理
        </div>
        <div class="panel-body" style="padding: 0px 15px;">
            <div class="row">
                <table class="yg5_tabel col-md-12">
                    <tr class="yg5_tr1">
                        <td class="store_td1">用户名称</td>
                        <td>用户电话</td>
                        <td>申请时间</td>
                        <td>审核状态</td>
                        <td>操作</td>
                    </tr>
                    <?php  if(is_array($list)) { foreach($list as $key => $item) { ?>
                    <tr class="yg5_tr2">
                      <td class="store_td1"><?php  echo $item['user_name'];?></td>
                     <td class="store_td1"><?php  echo $item['user_tel'];?></td>
                     <td><?php  echo date("Y-m-d H:i:s",$item['time'])?></td>
                     <?php  if($item['state']==1) { ?>
                     <td >
                        <span class="label label-warning">待审核</span>
                    </td >
                    <?php  } else if($item['state']==2) { ?>
                    <td >
                        <span class="label label-success">已通过</span>
                    </td>
                    <?php  } else if($item['state']==3) { ?>
                    <td >
                       <span class="label label-primary">已拒绝</span>
                   </td>
                   <?php  } ?>  
                   <td>
                      <?php  if($item['state']==1) { ?>
                      <a class="btn btn-info btn-sm" href="<?php  echo $this->createWebUrl('fxlist',array('id'=>$item['id'],'op'=>'adopt'))?>" >通过</a>
                      <a class="btn btn-warning btn-sm" href="<?php  echo $this->createWebUrl('fxlist', array('id' => $item['id'],'op'=>'reject'))?>" title="拒绝">拒绝</a>
                      <?php  } ?>
                      <a class="btn btn-danger btn-sm" href="<?php  echo $this->createWebUrl('fxlist', array('id' => $item['id'],'op'=>'delete'))?>" onclick="return confirm('确认删除吗？');return false;" title="删除">删</a>
                  </td>
              </td>
          </tr>
          <?php  } } ?>
          <?php  if(empty($list)) { ?>
          <tr class="yg5_tr2">
            <td colspan="9">
              暂无申请信息
          </td>
      </tr> 
      <?php  } ?>        
  </table>
</div>
</div>
</div>
</div>
<div class="text-right we7-margin-top">
   <?php  echo $pager;?>
</div>
<script type="text/javascript">
    $(function(){
        $("#nav9").addClass("in");
    })
</script>