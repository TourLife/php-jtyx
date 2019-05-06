<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>
<style type="text/css">
    .nav-tabs{
        margin-top: 30px;
    }
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
    .nav.nav-tabs{border-color: #31C2A5;}
    .yg5_key>div{float: left;line-height: 34px;}
    .store_td1{height: 45px;}
        .store_list_img{width: 80px;height: 80px;}
    .yg5_tabel{border-color: #e5e5e5;outline: 1px solid #e5e5e5;}
    .yg5_tr2>td{padding: 15px;border: 1px solid #e5e5e5;text-align: center;}
    .yg5_tr1>td{
        border: 1px solid #e5e5e5;
        padding-left: 15px;
        background-color: #FAFAFA;
        font-weight: bold;
        text-align: center;
    }
    .yg5_btn{background-color: #EEEEEE;color: #333;border: 1px solid #E4E4E4;border-radius: 6px;width: 100px;height: 34px;}
</style>

<div class="main">
    <div class="row">
    <div class="col-lg-12">
        <form action="" method="get" class="col-md-6">
         <input type="hidden" name="c" value="site" />
            <input type="hidden" name="a" value="entry" />
            <input type="hidden" name="m" value="zh_zbkq" />
            <input type="hidden" name="do" value="vipmanager" />
            <div class="input-group" style="width: 300px">
                <input type="text" name="keywords" class="form-control" placeholder="请输入昵称">
                <span class="input-group-btn">
                    <input type="submit" class="btn btn-default" name="submit" value="查找"/>
                </span>
            </div>
            <input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
        </form>
    </div><!-- /.col-lg-6 -->
</div>
</div>
    <div class="main">
    <!-- 门店列表部分开始 -->
        <div class="panel panel-default">
            <div class="panel-heading">
                VIP充值记录列表
            </div>
            <div class="panel-body" style="padding: 0px 15px;">
                <div class="row">
                    <table class="yg5_tabel col-md-12">
                        <tr class="yg5_tr1">
                            <td class="store_td1 col-md-2">姓名</td>
                             <td class="col-md-1">头像</td>
                            <td class="col-md-2">充值金额</td>
                            <td class="col-md-1">充值时间</td>  
                            <td class="col-md-1">状态</td>                        
                            <td class="col-md-3">操作</td>
                        </tr>
                      <?php  if(is_array($list)) { foreach($list as $key => $item) { ?>
                        <tr class="yg5_tr2">
                            <td><div> <?php  echo $item['nickname'];?></div></td>
                            <td>
                            <img class="store_list_img" src="<?php  echo tomedia($item['img'])?>"/>
                            </td>
                            <td>
                                <?php  echo $item['money'];?>
                            </td>
                            <td><?php  echo $item['time'];?></td>
                            <td><?php  if($item['note']=='用户vip') { ?><font class="label label-warning label-sm"><?php  echo $item['note'];?></font><?php  } else if($item['note']=='商家vip') { ?><font class="label label-info label-sm"><?php  echo $item['note'];?></font><?php  } ?></td>
                          
                            <td><a class="btn btn-danger btn-sm" href="<?php  echo $this->createWebUrl('vipmanager', array('id' => $item['id']))?>" onclick="return confirm('确认删除吗？');return false;" title="删除">删</a></td>
                        </tr>
                        <?php  } } ?>
                        <?php  if(empty($list)) { ?>
                          <tr>
                            <td colspan="10" style="padding: 15px;">
                              暂无充值信息
                            </td>
                          </tr>
                         
                        <?php  } ?>
                    </table>
                </div>
            </div>
        </div>
 
</div>
 <div class="text-right we7-margin-top"><?php  echo $pager;?></div>
<script type="text/javascript">
    $(function(){
        $("#nav18").addClass("in");
    })
</script>