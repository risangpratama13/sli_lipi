<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-10 21:26:11
         compiled from "application\views\configuration\change_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:89745487ae1b7d6cb1-13986762%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f813662e782f603651ef70e6fab25fb09359543' => 
    array (
      0 => 'application\\views\\configuration\\change_password.tpl',
      1 => 1418221565,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1418213239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '89745487ae1b7d6cb1-13986762',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5487ae1b857b51_92302044',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5487ae1b857b51_92302044')) {function content_5487ae1b857b51_92302044($_smarty_tpl) {?><!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistem Layanan Internal P2F LIPI</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Icon -->
        <?php echo link_tag('asset/img/favicon.png','shortcut icon','image/png');?>
        
        <!-- bootstrap 3.0.2 -->
        <?php echo link_tag('asset/css/bootstrap.min.css');?>

        <!-- font Awesome -->
        <?php echo link_tag('asset/css/font-awesome.min.css');?>

        <!-- Ionicons -->
        <?php echo link_tag('asset/css/ionicons.min.css');?>

        <!-- Addons Style -->
        
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
    <body class="skin-blue">
        <!-- Header -->
        <?php echo $_smarty_tpl->getSubTemplate ('layouts/header.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Menu Sidebar -->
            <?php echo $_smarty_tpl->getSubTemplate ('layouts/menu.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <!-- End Menu Sidebar -->
            <!-- Content -->
            <aside class="right-side">
                
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Konfigurasi Pengguna
            <?php if (in_array("members",$_smarty_tpl->tpl_vars['usergroups']->value)) {?>
                <small>Anggota</small>
            <?php } else { ?>
                <small>Administrator</small>
            <?php }?>            
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Konfigurasi Pengguna</a></li>
            <?php if (in_array("members",$_smarty_tpl->tpl_vars['usergroups']->value)) {?>
                <li><a href="<?php echo base_url();?>
anggota">Anggota</a></li>            
            <?php } else { ?>
                <li><a href="<?php echo base_url();?>
administrator">Administrator</a></li>            
            <?php }?>  
            <li class="active">Ubah Password</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">Ubah Password <?php echo $_smarty_tpl->tpl_vars['data']->value['identity'];?>
</h3>
                    </div><!-- /.box-header -->
                    <?php echo form_open("ganti_password/".((string)$_smarty_tpl->tpl_vars['data']->value['identity']));?>

                    <?php echo form_hidden('identity',$_smarty_tpl->tpl_vars['data']->value['identity']);?>

                    <div class="box-body">
                        <br/>
                        <?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>

                        <div class="form-group">
                            <?php echo form_label('Password Lama','old');?>

                            <?php echo form_password($_smarty_tpl->tpl_vars['data']->value['old_password']);?>

                            <?php echo form_error('old','<p class="help-block text-red">','</p>');?>

                        </div>
                        <div class="form-group">
                            <?php echo form_label('Password Baru','new');?>

                            <?php echo form_password($_smarty_tpl->tpl_vars['data']->value['new_password']);?>

                            <?php echo form_error('new','<p class="help-block text-red">','</p>');?>

                        </div>
                        <div class="form-group">
                            <?php echo form_label('Konfirmasi Password Baru','new_confirm');?>

                            <?php echo form_password($_smarty_tpl->tpl_vars['data']->value['new_password_confirm']);?>

                            <?php echo form_error('new_confirm','<p class="help-block text-red">','</p>');?>

                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        <?php echo form_submit('submit',"Simpan Password Baru",'class="btn btn-primary"');?>

                    </div>
                    <?php echo form_close();?>

                </div><!-- /.box -->               
            </div>
        </div>
    </section><!-- /.content -->

            </aside>
            <!-- End Content -->
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
        <!-- Addons Plugins -->
        
        <!-- SLI LIPI App -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/Sli_Lipi/app.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- Addons Scripts -->
        
    </body>
</html><?php }} ?>
