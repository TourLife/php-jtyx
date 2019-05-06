
<?php
defined('YII_ENV') or exit('Access Denied');

use yii\widgets\LinkPager;

$urlManager = Yii::$app->urlManager;
$this->title = '系统更新';
$this->params['active_nav_group'] = 1;
?>

<div class="panel mb-3">
    <div class="panel-header"><?= $this->title ?></div>
    <div class="panel-body">
        <div class="text-danger">操作失败 请联系籽阳客服</div>
        <div class="text-danger">错误码：<?= $error_code ?></div>
    </div>
</div>