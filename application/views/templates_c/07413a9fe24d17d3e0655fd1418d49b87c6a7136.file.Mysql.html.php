<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-22 15:15:26
         compiled from "E:\MyFile\Projects\PHP\Araa\application\views\templates\Mysql\Mysql.html" */ ?>
<?php /*%%SmartyHeaderCode:31239555da4ba89b715-74691012%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '07413a9fe24d17d3e0655fd1418d49b87c6a7136' => 
    array (
      0 => 'E:\\MyFile\\Projects\\PHP\\Araa\\application\\views\\templates\\Mysql\\Mysql.html',
      1 => 1432278924,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '31239555da4ba89b715-74691012',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555da4ba8ce3a8_18680388',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555da4ba8ce3a8_18680388')) {function content_555da4ba8ce3a8_18680388($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Prototype</title>

    <!-- Bootstrap -->
    <link href="/Style/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <?php echo '<script'; ?>
 src="http://cdn.bootcss.com/html5shiv/3.7.2/html5shiv.min.js"><?php echo '</script'; ?>
>
      <?php echo '<script'; ?>
 src="http://cdn.bootcss.com/respond.js/1.4.2/respond.min.js"><?php echo '</script'; ?>
>
    <![endif]-->
  </head>
  <body>
    <h1 style="padding:10px 20px;margin-top:20px;">MySQL TESTing</h1>

    <div class="container-fluid">
      <div class="row">
        <div class="col-md-2">
          <div class="well">
             <ul class="nav nav-pills nav-stacked">
                <li role="presentation" class="active"><a href="">链接查询</a></li>
                <li role="presentation"><a href="#">更新</a></li>
                <li role="presentation"><a href="#">删除</a></li>
                <li role="presentation"><a href="#">项目设置</a></li>
             </ul>
          </div>
        </div>
        <div class="col-md-10" >
          <form method="post" action="Mysql/Mysqltest/select"><input type="submit" class="btn btn-default" value="selection"/></form>
        </div>
     </div>
    </div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <?php echo '<script'; ?>
 src="http://cdn.bootcss.com/jquery/1.11.2/jquery.min.js"><?php echo '</script'; ?>
>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <?php echo '<script'; ?>
 src="/Style/bootstrap/js/bootstrap.min.js"><?php echo '</script'; ?>
>
  </body>
</html>
<?php }} ?>
