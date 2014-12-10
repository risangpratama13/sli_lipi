<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-09 21:22:46
         compiled from "application\views\registration.tpl" */ ?>
<?php /*%%SmartyHeaderCode:30145548701d7039d15-78777328%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '194337bdb176924d22a7a6b0f7c71ef1423f023e' => 
    array (
      0 => 'application\\views\\registration.tpl',
      1 => 1418134963,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '30145548701d7039d15-78777328',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548701d7039d16_92886680',
  'variables' => 
  array (
    'data' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548701d7039d16_92886680')) {function content_548701d7039d16_92886680($_smarty_tpl) {?><!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>AdminLTE | Registration Page</title>
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
            <div class="header">Daftar Anggota Baru</div>
            <?php echo form_open("registrasi");?>

                <div class="body bg-gray">
                    <br/>
                    <?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>

                    <div class="form-group">
                        <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['full_name']);?>

                        <?php echo form_error('full_name','<p class="help-block text-red">','</p>');?>

                    </div>
                    <div class="form-group">
                        <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['username']);?>

                        <?php echo form_error('username','<p class="help-block text-red">','</p>');?>

                    </div>
                    <div class="form-group">
                        <?php echo form_password($_smarty_tpl->tpl_vars['data']->value['password']);?>

                        <?php echo form_error('password','<p class="help-block text-red">','</p>');?>

                    </div>
                    <div class="form-group">
                        <?php echo form_password($_smarty_tpl->tpl_vars['data']->value['password_confirm']);?>

                        <?php echo form_error('password_confirm','<p class="help-block text-red">','</p>');?>

                    </div>
                    <div class="form-group">
                        <?php echo form_radio('sex','M',true);?>
 Laki-laki
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <?php echo form_radio('sex','F');?>
 Perempuan
                    </div>
                </div>
                <div class="footer">                    
                    <?php echo form_submit('login',"Mendaftar",'class="btn bg-olive btn-block"');?>

                    <a href="<?php echo base_url();?>
login" class="text-center">Sudah Punya Akun</a>
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
