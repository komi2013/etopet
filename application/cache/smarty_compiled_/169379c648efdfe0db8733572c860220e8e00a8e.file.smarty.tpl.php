<?php /* Smarty version Smarty-3.1.5, created on 2011-12-02 14:25:14
         compiled from "/var/www/html/application/views/smarty.tpl" */ ?>
<?php /*%%SmartyHeaderCode:20105108374ed4f744d9a5e2-19234474%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '169379c648efdfe0db8733572c860220e8e00a8e' => 
    array (
      0 => '/var/www/html/application/views/smarty.tpl',
      1 => 1322825083,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '20105108374ed4f744d9a5e2-19234474',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.5',
  'unifunc' => 'content_4ed4f744df125',
  'variables' => 
  array (
    'testone' => 0,
    'title1' => 0,
    'title2' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_4ed4f744df125')) {function content_4ed4f744df125($_smarty_tpl) {?><html>
    <head>
        <title>We've got a message for you!</title>
    </head>
    <body>

<form name="form1" method="get" action="/diet/sample" enctype="multipart/form-data">
<input type="text" name="1" value="">
<input type="text" name="2" value="">
<input type="hidden" name="testone" value="<?php echo $_smarty_tpl->tpl_vars['testone']->value;?>
">
<input type="submit" name="button1" value = "submit">
</form>
	<h1><?php echo $_smarty_tpl->tpl_vars['title1']->value;?>
</h1>
	<h2><?php echo $_smarty_tpl->tpl_vars['title2']->value;?>
</h2>
	<h2><?php echo $_smarty_tpl->tpl_vars['testone']->value;?>
</h2>
        <h1></h1>
        <p>We just wanted to say it! for smarty but no any more</p>
    </body>
</html><?php }} ?>