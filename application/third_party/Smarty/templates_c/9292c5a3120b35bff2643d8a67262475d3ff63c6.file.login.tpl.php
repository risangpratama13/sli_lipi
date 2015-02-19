<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-10 05:34:13
         compiled from "application\views\login.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18088548700b7558bb5-93694648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9292c5a3120b35bff2643d8a67262475d3ff63c6' => 
    array (
      0 => 'application\\views\\login.tpl',
      1 => 1418251298,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18088548700b7558bb5-93694648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548700b75cdeb2_47738577',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548700b75cdeb2_47738577')) {function content_548700b75cdeb2_47738577($_smarty_tpl) {?><!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Masuk Sistem Layanan Internal P2F LIPI</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Icon -->
        <?php echo link_tag('asset/img/favicon.png','shortcut icon','image/png');?>
        
        <!-- bootstrap 3.0.2 -->
        <?php echo link_tag('asset/css/bootstrap.min.css');?>

        <!-- font Awesome -->
        <?php echo link_tag('asset/css/font-awesome.min.css');?>

        <!-- Theme style -->
        <?php echo link_tag('asset/css/sli_lipi.css');?>

        
        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"><?php echo '</script'; ?>
>
          <?php echo '<script'; ?>
 src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"><?php echo '</script'; ?>
>
        <![endif]-->
    </head>
    <body class="bg-black">
        <div class="form-box" id="login-box">
            <div class="header">Masuk Sistem Layanan Internal P2F LIPI</div>
            <?php echo form_open("login");?>

                <div class="body bg-gray">
                    <br/>
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>

                    <div class="form-group">                        
                        <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['username']);?>

                        <?php echo form_error('username','<p class="help-block text-red">','</p>');?>

                    </div>
                    <div class="form-group">
                        <?php echo form_password($_smarty_tpl->tpl_vars['data']->value['password']);?>

                        <?php echo form_error('password','<p class="help-block text-red">','</p>');?>

                    </div>          
                    <div class="form-group">
                        <?php echo form_checkbox('remember');?>
 Biarkan Saya Masuk
                    </div>
                </div>
                <div class="footer">                                                               
                    <?php echo form_submit('login',"Masuk",'class="btn bg-olive btn-block"');?>

                    <a href="<?php echo base_url();?>
registrasi" class="text-center">Daftar Anggota Baru</a>
                </div>
            <?php echo form_close();?>

        </div>

        <!-- jQuery 2.0.2 -->
        <?php echo '<script'; ?>
 src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><?php echo '</script'; ?>
>
        <!-- Bootstrap -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
    </body>
</html><?php }} ?>
