<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-16 04:40:56
         compiled from "application\views\configuration\add_member.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27633548836ae036e30-28494044%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9bc586f68bd539d542679023ce200b7bea537e11' => 
    array (
      0 => 'application\\views\\configuration\\add_member.tpl',
      1 => 1429134052,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1423218267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27633548836ae036e30-28494044',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548836ae0bbb51_56618954',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548836ae0bbb51_56618954')) {function content_548836ae0bbb51_56618954($_smarty_tpl) {?><!DOCTYPE html>
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
            <small>Anggota</small>
        </h1>
        <ol class="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#">Konfigurasi Pengguna</a></li>
                <li><a href="<?php echo base_url();?>
anggota">Anggota</a></li>
                <li class="active">Tambah Anggota</li>
            </ol>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Tambah Anggota</h3>
                    </div><!-- /.box-header -->
                    <?php echo form_open('tambah_anggota');?>

                    <div class="box-body">
                        <div class="form-group">
                            <?php echo form_label('Nama Lengkap','full_name');?>

                            <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['full_name']);?>

                            <?php echo form_error('full_name','<p class="help-block text-red">','</p>');?>

                        </div>
                        <div class="form-group">
                            <?php echo form_label('Username','username');?>

                            <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['username']);?>

                            <?php echo form_error('username','<p class="help-block text-red">','</p>');?>

                        </div>
                        <div class="form-group">
                            <?php echo form_label('Password','password');?>

                            <?php echo form_password($_smarty_tpl->tpl_vars['data']->value['password']);?>

                            <?php echo form_error('password','<p class="help-block text-red">','</p>');?>

                        </div>
                        <div class="form-group">
                            <?php echo form_label('Konfirmasi Password','password_confirm');?>

                            <?php echo form_password($_smarty_tpl->tpl_vars['data']->value['password_confirm']);?>

                            <?php echo form_error('password_confirm','<p class="help-block text-red">','</p>');?>

                        </div>
                        <div class="form-group">                            
                            <label>
                                <input type="radio" name="sex" value="M" checked>
                                Laki-laki
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="sex" value="F">
                                Perempuan
                            </label>                           
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="researcher" id="researcher">
                                <option value="">-- Pilih Deputi Bidang --</option>
                                <?php  $_smarty_tpl->tpl_vars['researcher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['researcher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['researchers']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['researcher']->key => $_smarty_tpl->tpl_vars['researcher']->value) {
$_smarty_tpl->tpl_vars['researcher']->_loop = true;
?>                            
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['researcher']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['researcher']->value->researcher_name;?>
</option>                                                
                                <?php } ?>
                            </select>
                            <?php echo form_error('researcher','<p class="help-block text-red">','</p>');?>

                        </div>
                        <div class="form-group">
                            <select class="form-control" name="research" id="research">
                                <option value="">-- Pilih Satuan Kerja --</option>
                                <?php  $_smarty_tpl->tpl_vars['research'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['research']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['researches']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['research']->key => $_smarty_tpl->tpl_vars['research']->value) {
$_smarty_tpl->tpl_vars['research']->_loop = true;
?>                            
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['research']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['research']->value->researcher_id;?>
"><?php echo $_smarty_tpl->tpl_vars['research']->value->research_name;?>
</option>                                                   
                                <?php } ?>
                            </select>
                            <?php echo form_error('research','<p class="help-block text-red">','</p>');?>

                        </div>
                        <div class="form-group">
                            <select class="form-control" name="research_group" id="research_group">
                                <option value="">-- Pilih Kelompok Penelitian --</option>
                                <?php  $_smarty_tpl->tpl_vars['research_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['research_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['research_groups']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['research_group']->key => $_smarty_tpl->tpl_vars['research_group']->value) {
$_smarty_tpl->tpl_vars['research_group']->_loop = true;
?>                            
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['research_group']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['research_group']->value->researcher_id;?>
\<?php echo $_smarty_tpl->tpl_vars['research_group']->value->research_id;?>
"><?php echo $_smarty_tpl->tpl_vars['research_group']->value->res_group_name;?>
</option>                                                   
                                <?php } ?>
                            </select>
                            <?php echo form_error('research_group','<p class="help-block text-red">','</p>');?>

                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <?php echo form_submit('submit',"Tambahkan Anggota",'class="btn btn-flat btn-success"');?>

                    </div>
                    <?php echo form_close();?>

                </div><!-- /.box -->               
            </div>
        </div>
    </section><!-- /.content -->

            </aside>
            <!-- End Content -->
        </div>
        <!-- Modal -->    
        
        <!-- End Modal -->
        
        <!-- jQuery 2.0.2 -->

        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/jquery-2.0.2.min.js"><?php echo '</script'; ?>
>
        <!-- Bootstrap -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/bootstrap.min.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- Addons Plugins -->
            
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/plugins/jquery-chained/jquery.chained.min.js" type="text/javascript"><?php echo '</script'; ?>
>

        <!-- SLI LIPI App -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/Sli_Lipi/app.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- Addons Scripts -->
        
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {           
            $("#research").chained("#researcher");
            $("#research_group").chained("#researcher, #research");
        });
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
