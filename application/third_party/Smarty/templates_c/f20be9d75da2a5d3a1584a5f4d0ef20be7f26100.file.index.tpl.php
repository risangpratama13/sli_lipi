<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-10 05:34:22
         compiled from "application\views\index.tpl" */ ?>
<?php /*%%SmartyHeaderCode:218035487144de015c5-93114714%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f20be9d75da2a5d3a1584a5f4d0ef20be7f26100' => 
    array (
      0 => 'application\\views\\index.tpl',
      1 => 1419734732,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1423521212,
      2 => 'file',
    ),
    '668c70bfc32ed27c742429d00bb2307df1fd048a' => 
    array (
      0 => 'application\\views\\home\\tiles.tpl',
      1 => 1419814148,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '218035487144de015c5-93114714',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5487144de4f7c4_96202581',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5487144de4f7c4_96202581')) {function content_5487144de4f7c4_96202581($_smarty_tpl) {?><!DOCTYPE html>
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
            Sistem Layanan Internal Pusat Penelitian Fisika LIPI
        </h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-home"></i> Home</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <?php /*  Call merged included template "home/tiles.tpl" */
$_tpl_stack[] = $_smarty_tpl;
 $_smarty_tpl = $_smarty_tpl->setupInlineSubTemplate('home/tiles.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0, '218035487144de015c5-93114714');
content_54d935eec224a4_22317477($_smarty_tpl);
$_smarty_tpl = array_pop($_tpl_stack); 
/*  End of included template "home/tiles.tpl" */?>
        </div><!-- /.row -->
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
        
        <!-- SLI LIPI App -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/Sli_Lipi/app.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- Addons Scripts -->
        
    </body>
</html><?php }} ?>
<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-10 05:34:22
         compiled from "application\views\home\tiles.tpl" */ ?>
<?php if ($_valid && !is_callable('content_54d935eec224a4_22317477')) {function content_54d935eec224a4_22317477($_smarty_tpl) {?><?php if (in_array("admin",$_smarty_tpl->tpl_vars['groups']->value)||in_array("superadmin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
    <div class="col-lg-3 col-xs-6">            
        <div class="small-box bg-aqua-gradient">
            <div class="inner">
                <h3><?php echo $_smarty_tpl->tpl_vars['count_test_orders']->value;?>
</h3>
                <p>Kegiatan Pengujian</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-settings-strong"></i>
            </div>
            <a href="<?php echo base_url();?>
history_pengujian" class="small-box-footer">
                Lihat Detail <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-gradient">
            <div class="inner">
                <h3><?php echo $_smarty_tpl->tpl_vars['count_items']->value;?>
</h3>
                <p>Item</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-paper"></i>
            </div>
            <a href="<?php echo base_url();?>
item" class="small-box-footer">
                Lihat Detail <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow-gradient">
            <div class="inner">
                <h3><?php echo $_smarty_tpl->tpl_vars['count_members']->value;?>
</h3>
                <p>Anggota Terdaftar</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-people"></i>
            </div>
            <a href="<?php echo base_url();?>
anggota" class="small-box-footer">
                Lihat Detail <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red-gradient">
            <div class="inner">
                <h3><?php echo $_smarty_tpl->tpl_vars['count_operators']->value;?>
</h3>
                <p>Operator</p>
            </div>
            <div class="icon">
                <i class="ion ion-man"></i>
            </div>
            <a href="<?php echo base_url();?>
operator" class="small-box-footer">
                Lihat Detail <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
<?php } else { ?>
    <div class="col-lg-4 col-xs-6">            
        <div class="small-box bg-aqua-gradient">
            <div class="inner">
                <h3><?php echo $_smarty_tpl->tpl_vars['count_test_orders']->value;?>
</h3>
                <p>Kegiatan Pengujian</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-settings-strong"></i>
            </div>
            <a href="<?php echo base_url();?>
pengujian_member" class="small-box-footer">
                Lihat Detail <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-gradient">
            <div class="inner">
                <h3><?php echo $_smarty_tpl->tpl_vars['count_items']->value;?>
</h3>
                <p>Item</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-paper"></i>
            </div>
            <a href="<?php echo base_url();?>
item" class="small-box-footer">
                Lihat Detail <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-red-gradient">
            <div class="inner">
                <h3>Rp. <?php echo number_format($_smarty_tpl->tpl_vars['saldo']->value,'2',',','.');?>
</h3>
                <p>Saldo</p>
            </div>
            <div class="icon">
                <i class="ion ion-social-usd"></i>
            </div>
            <a href="<?php echo base_url();?>
rincian_saldo" class="small-box-footer">
                Lihat Detail <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
<?php }?><?php }} ?>
