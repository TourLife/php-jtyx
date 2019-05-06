<?php defined('IN_IA') or exit('Access Denied');?><?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/header', TEMPLATE_INCLUDEPATH)) : (include template('public/header', TEMPLATE_INCLUDEPATH));?>
<?php (!empty($this) && $this instanceof WeModuleSite || 1) ? (include $this->template('public/comhead', TEMPLATE_INCLUDEPATH)) : (include template('public/comhead', TEMPLATE_INCLUDEPATH));?>

<style type="text/css">
	/*#nav3{display: block;visibility: visible;}*/
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
	.store_list_img{width: 40px;height: 40px;}
	.store_list_img2{width: 30px;height: 30px;}
	.yg5_tabel{border-color: #e5e5e5;outline: 1px solid #e5e5e5;}
	.yg5_tr2>td{padding: 10px;border: 1px solid #e5e5e5;text-align: center;}
	.yg5_tr1>td{
		border: 1px solid #e5e5e5;
		padding-left: 10px;
		background-color: #FAFAFA;
		font-weight: bold;
		text-align: center;
	}
	.yg5_btn{background-color: #EEEEEE;color: #333;border: 1px solid #E4E4E4;border-radius: 6px;width: 100px;height: 34px;}
	.yg_info{color: white;background-color: #31C2A5;}
	.yg_info:hover{color: white;background-color: #31C2A5;}
	.wlyanse{color: #ff3b3b;font-weight: bold;}
	.ygshouqian2 {
		color: #FF7F50;
		border: 1px solid #FF7F50;
		background-color: rgba(0,0,0,0);
	}
	.ygshouqian2:hover{
		color: #FF7F50;
		border: 1px solid #FF7F50;        
	}
</style>
<ul class="nav nav-tabs">
	<li class="active"><a href="<?php  echo $this->createWebUrl('storemanger');?>">门店列表</a></li>
	<li><a href="<?php  echo $this->createWebUrl('addstore');?>">添加/编辑门店</a></li>
</ul>

<div class="row">
	<div class="col-lg-12">
		<form action="" method="get" class="col-md-4">
			<input type="hidden" name="c" value="site" />
			<input type="hidden" name="a" value="entry" />
			<input type="hidden" name="m" value="zh_zbkq" />
			<input type="hidden" name="do" value="storemanger" />
			<div class="input-group" style="width: 300px">
				<input type="text" name="keywords" class="form-control" placeholder="请输入门店名称">
				<span class="input-group-btn">
					<input type="submit" class="btn btn-default" name="submit" value="查找"/>
				</span>
			</div>
			<input type="hidden" name="token" value="<?php  echo $_W['token'];?>"/>
		</form>
		<button class="col-md-1 btn ygshouqian2" data-toggle="modal" data-target="#myModalb20">全部续费</button>
		<button class="col-md-1 btn btn-md ygyouhui2" style="margin-left: 20px;border: 1px solid #5bc0de;background: none;color: #5bc0de;"  id="allselect">批量删除</button>
		<button class="col-md-1 btn btn-md ygyouhui2" style="margin-left: 20px;border: 1px solid #5bc0de;background: none;color: #5bc0de;"  id="allkd">批量开店</button>
		<button class="col-md-1 btn btn-md ygyouhui2" style="margin-left: 20px;border: 1px solid #5bc0de;background: none;color: #5bc0de;"  id="allgd">批量关店</button>
	</div>
</div> 
<div class="main">
	<div class="panel panel-default">
		<div class="panel-heading">
			门店列表
		</div>
		<div class="panel-body" style="padding: 0px 15px;">
			<div class="row">
				<table class="yg5_tabel col-md-12">
					<!-- tabel标题开始 -->
					<tr class="yg5_tr1">
                        <td class="store_td1 col-md-1" style="text-align: center;width: 40px;">
                          <input type="checkbox" class="allcheck" />
                          <span class="store_inp">全选</span>                      
                        </td>					
						<td class="store_td1 col-md-1" style="width: 40px">ID</td>
						<td class="col-md-1" style="width:20px">排序</td>
						<td class="store_td1 col-md-1">门店名称</td>
						<td class="col-md-1">分类</td>
						<td class="" style="width: 50px;">图片</td>
						<td class="col-md-1">地址</td>
						<td class="col-md-1">联系人</td>
						<td class="col-md-1">验证手机号</td>
						<td class="col-md-1">入驻到期时间</td>
						<td class="col-md-1">vip到期时间</td>
						<td class="col-md-2">操作</td>
					</tr>
					<?php  if(is_array($list)) { foreach($list as $key => $item) { ?>
					<tr class="yg5_tr2">
                        <td>
                          <input type="checkbox" name="test" value="<?php  echo $item['id'];?>">
                        </td>					
						<td><?php  echo $item['id'];?></td>
						<td><?php  echo $item['sort'];?></td>
						<td class="store_td1"> <?php  echo $item['md_name'];?></td>
						<td><?php  echo $item['type_name'];?></td>
						<td>
							<img class="store_list_img" src="<?php  echo tomedia($item['md_logo'])?>">
						</td>
						<td><?php  echo $item['address'];?></td>
						<td><?php  echo $item['link_name'];?></td>
						<td><?php  echo $item['yz_tel'];?></td>
						<td><?php  if($item['is_rz']==1) { ?><?php  echo $item['rzdq_time'];?><?php  } else { ?><font color="red">已过期</font><?php  } ?></td> 
						<td><?php  if($item['is_vip']==1) { ?><?php  echo $item['dq_time'];?><?php  } else { ?><font color="red">已过期</font><?php  } ?></td>                                              
						<td><a class="btn btn-warning btn-sm" href="<?php  echo $this->createWebUrl('addstore', array('id' => $item['id']))?>" title="编辑">改</a>&nbsp;&nbsp;<a class="btn btn-danger btn-sm" href="<?php  echo $this->createWebUrl('storemanger', array('id' => $item['id'],'op'=>'delete'))?>" onclick="return confirm('确认删除吗？');return false;" title="删除">删</a>&nbsp;&nbsp;<a class="btn btn-info btn-sm" href="<?php  echo $this->createWebUrl('couponslist', array('store_id' => $item['id']))?>" title="优惠券列表">卡券列表</a>
						</td>
					</tr>
					<?php  } } ?>
					<?php  if(empty($list)) { ?>
					<tr class="yg5_tr2">
						<td colspan="9">
							暂无门店信息
						</td>
					</tr>
					<?php  } ?>            
				</table>
			</div>
		</div>
	</div>
</div>

<div class="modal fade" id="myModalb20" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	<div class="modal-dialog" role="document">
		<form action="" method="post" enctype="multipart/form-data">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title" id="myModalLabel" style="font-size: 20px;">提示</h4>
				</div>
				<div class="modal-body"  style="font-size: 20px;">
					是否全部续费?
				</div>
				<div class="modal-footer">
					<button type="button" class="btn btn-default" data-dismiss="modal">取消</button>
					<a href="<?php  echo $this->createWebUrl('storemanger', array('op' =>'allxf'))?>" class="btn btn-info">确定</a>
				</div>
			</div>
		</form>
	</div>
</div>

<div class="text-right we7-margin-top">
	<?php  echo $pager;?>
</div>

<script type="text/javascript">
	$(function(){
		$("#nav3").addClass("in");
	})

    // ———————————————批量删除———————————————
    $("#allselect").on('click',function(){
        var check = $("input[type=checkbox][class!=allcheck]:checked");
        if(check.length < 1){
            alert('请选择要删除的商家!');
            return false;
        }else if(confirm("确认要删除此商家?")){
            var id = new Array();
            check.each(function(i){
                id[i] = $(this).val();
            });
            console.log(id)
            $.ajax({
                type:"post",
                url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=DeleteStore&m=zh_zbkq",
                dataType:"text",
                data:{id:id},
                success:function(data){
                    console.log(data);      
                   location.reload();
                }
            })
           
        }
    });


        $("#allkd").on('click',function(){
        var check = $("input[type=checkbox][class!=allcheck]:checked");
        if(check.length < 1){
            alert('请选择要开店的商家!');
            return false;
        }else if(confirm("确认要开店?")){
            var id = new Array();
            check.each(function(i){
                id[i] = $(this).val();
            });
            console.log(id)
            $.ajax({
                type:"post",
                url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=KdStore&m=zh_zbkq",
                dataType:"text",
                data:{id:id},
                success:function(data){
                    console.log(data);      
                   location.reload();
                }
            })
           
        }
    });
          $("#allgd").on('click',function(){
        var check = $("input[type=checkbox][class!=allcheck]:checked");
        if(check.length < 1){
            alert('请选择要关店的商家!');
            return false;
        }else if(confirm("确认要关店?")){
            var id = new Array();
            check.each(function(i){
                id[i] = $(this).val();
            });
            console.log(id)
            $.ajax({
                type:"post",
                url:"<?php  echo $_W['siteroot'];?>/app/index.php?i=<?php  echo $_W['uniacid'];?>&c=entry&do=GdStore&m=zh_zbkq",
                dataType:"text",
                data:{id:id},
                success:function(data){
                    console.log(data);      
                   location.reload();
                }
            })
           
        }
    });

    $(".allcheck").on('click',function(){
        var checked = $(this).get(0).checked;
        $("input[type=checkbox]").prop("checked",checked);
    });
</script>