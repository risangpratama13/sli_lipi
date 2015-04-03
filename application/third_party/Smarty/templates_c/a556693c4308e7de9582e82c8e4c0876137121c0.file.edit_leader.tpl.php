<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-03 17:54:37
         compiled from "application\views\configuration\edit_leader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:28501551e713fbfc225-08747163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a556693c4308e7de9582e82c8e4c0876137121c0' => 
    array (
      0 => 'application\\views\\configuration\\edit_leader.tpl',
      1 => 1428058474,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1423218267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '28501551e713fbfc225-08747163',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_551e713fc80f45_68623494',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_551e713fc80f45_68623494')) {function content_551e713fc80f45_68623494($_smarty_tpl) {?><!DOCTYPE html>
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
            <small>Ketua Kelitian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Konfigurasi Pengguna</a></li>
            <li><a href="<?php echo base_url();?>
leader">Ketua Kelitian</a></li>
            <li class="active">Ubah Ketua Kelitian</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">Ubah Ketua Kelitian</h3>
                    </div><!-- /.box-header -->
                    <?php echo form_open('edit_leader/`$research_group->id`');?>

                    <?php echo form_hidden('res_group_id',$_smarty_tpl->tpl_vars['research_group']->value->id);?>

                    <?php echo form_hidden('ori_user_id',$_smarty_tpl->tpl_vars['research_group']->value->user_id);?>

                    <div class="box-body">
                        <div class="form-group">
                            <label>Deputi Bidang</label>                            
                            <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['deputi_bidang']);?>

                        </div>
                        <div class="form-group">
                            <label>Satuan Kerja</label>
                            <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['satuan_kerja']);?>

                        </div>
                        <div class="form-group">
                            <label>Kelompok Penelitian</label>
                            <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['kelompok_penelitian']);?>

                        </div>
                        <div class="form-group">
                            <label>Ketua Ketelitian</label>
                            <?php echo form_dropdown('user',$_smarty_tpl->tpl_vars['members']->value,$_smarty_tpl->tpl_vars['research_group']->value->user_id,'class="form-control"');?>

                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <?php echo form_submit('submit',"Ubah Ketua Kelitian",'class="btn btn-flat btn-success"');?>

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
            $("#user").chained("#research_group");
        });
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
