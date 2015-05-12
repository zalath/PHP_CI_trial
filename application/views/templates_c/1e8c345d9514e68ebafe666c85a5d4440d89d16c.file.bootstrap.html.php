<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-12 14:12:12
         compiled from "E:\MyFile\Projects\PHP\Araa\application\views\templates\bootstrap.html" */ ?>
<?php /*%%SmartyHeaderCode:435355517184e2cf95-38959391%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '1e8c345d9514e68ebafe666c85a5d4440d89d16c' => 
    array (
      0 => 'E:\\MyFile\\Projects\\PHP\\Araa\\application\\views\\templates\\bootstrap.html',
      1 => 1431411126,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '435355517184e2cf95-38959391',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_555171852ea387_46146777',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_555171852ea387_46146777')) {function content_555171852ea387_46146777($_smarty_tpl) {?><!DOCTYPE html>
<html lang="zh-CN">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- 上述3个meta标签*必须*放在最前面，任何其他内容都*必须*跟随其后！ -->
    <title>Bootstrap 101 Template</title>

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
    <h1>你好，世界！from bootstrap</h1>

    <div class="container-fluid">
      <a class="btn btn-default" href="#" role="button">Link</a>
      <button class="btn btn-default" type="submit">Button</button>
      <input class="btn btn-default" type="button" value="Input">
      <input class="btn btn-default" type="submit" value="Submit">
    </div>

    <h1>将中的实例代码粘贴到本页即可显示模板结果</h1>
    <h4>修改controllers/example.php内的display展示不同的页面</h4>
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
