<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-05 04:02:20
         compiled from "application\views\testing\view_test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2558954d76cdf785498-14061738%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa236b7a7091e9cb6f261b0c6d53bbbd2b2e4b66' => 
    array (
      0 => 'application\\views\\testing\\view_test.tpl',
      1 => 1428199337,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1423218267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2558954d76cdf785498-14061738',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d76cdf86fa95_33147688',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d76cdf86fa95_33147688')) {function content_54d76cdf86fa95_33147688($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_diff')) include 'C:\\xampp\\htdocs\\sli_lipi\\application\\third_party\\Smarty\\libs\\plugins\\function.date_diff.php';
?><!DOCTYPE html>
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
            Detail Pengujian
            <small><?php echo $_smarty_tpl->tpl_vars['test_order']->value->testing_name;?>
</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url();?>
view_test/<?php echo $_smarty_tpl->tpl_vars['test_order']->value->id;?>
">Detail Pengujian</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-file-text-o"></i>
                        <h3 class="box-title">Detail Pengujian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <td>Anggota</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['test_order']->value->anggota;?>
</td>
                            </tr>
                            <tr>
                                <td>Pengujian</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['test_order']->value->testing_name;?>
</td>
                            </tr>                            
                            <tr>
                                <td>Tanggal Mulai Pengujian</td>
                                <?php if ($_smarty_tpl->tpl_vars['test_order']->value->start_date=="0000-00-00 00:00:00") {?>
                                    <td>Belum Diatur</td>
                                <?php } else { ?>
                                    <td><?php echo date("j F Y H:i",strtotime($_smarty_tpl->tpl_vars['test_order']->value->start_date));?>
</td>
                                <?php }?>                                
                            </tr>
                            <tr>
                                <td>Tanggal Selesai Pengujian</td>
                                <?php if ($_smarty_tpl->tpl_vars['test_order']->value->finish_date=="0000-00-00 00:00:00") {?>
                                    <td>Belum Diatur</td>
                                <?php } else { ?>
                                    <td><?php echo date("j F Y H:i",strtotime($_smarty_tpl->tpl_vars['test_order']->value->finish_date));?>
</td>
                                <?php }?>
                            </tr>
                            <tr>
                                <td>Periode</td>
                                <?php if ($_smarty_tpl->tpl_vars['test_order']->value->finish_date=="0000-00-00 00:00:00") {?>
                                    <td>&nbsp;</td>
                                <?php } else { ?>
                                    <td><?php echo smarty_function_date_diff(array('tanggal_1'=>date("Y-m-d",strtotime($_smarty_tpl->tpl_vars['test_order']->value->start_date)),'tanggal_2'=>date("Y-m-d",strtotime($_smarty_tpl->tpl_vars['test_order']->value->finish_date))),$_smarty_tpl);?>
 Hari</td>
                                <?php }?>
                            </tr>
                            <tr>
                                <td>Operator Pengujian</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['test_order']->value->full_name;?>
</td>
                            </tr>
                            <tr>
                                <td>Status Pengujian</td>
                                <?php if ($_smarty_tpl->tpl_vars['test_order']->value->status=="P") {?>
                                    <td><span class="label label-warning">Pending</span></td>
                                <?php } elseif ($_smarty_tpl->tpl_vars['test_order']->value->status=="AL") {?>
                                    <td><span class="label label-success">Disetujui Ketua Kelitian</span></td>
                                <?php } elseif ($_smarty_tpl->tpl_vars['test_order']->value->status=="AO") {?>
                                    <td><span class="label label-success">Disetujui Operator</span></td>                                        
                                <?php } elseif ($_smarty_tpl->tpl_vars['test_order']->value->status=="D") {?>
                                    <td><span class="label label-danger">Denied</span></td>
                                <?php } elseif ($_smarty_tpl->tpl_vars['test_order']->value->status=="F") {?>
                                    <td><span class="label label-info">Finish</span></td>
                                <?php }?> 
                            </tr>                            
                            <?php if (!empty($_smarty_tpl->tpl_vars['tools']->value)) {?>
                                <tr>
                                    <td>Alat Pengujian</td>
                                    <td>
                                        <ul>
                                            <?php  $_smarty_tpl->tpl_vars['tool'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tool']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tools']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tool']->key => $_smarty_tpl->tpl_vars['tool']->value) {
$_smarty_tpl->tpl_vars['tool']->_loop = true;
?>
                                                <li><?php echo $_smarty_tpl->tpl_vars['tool']->value->tool_name;?>
 (<?php echo $_smarty_tpl->tpl_vars['tool']->value->qty;?>
)</li>
                                                <?php } ?>
                                        </ul>
                                    </td>
                                </tr>
                            <?php }?>
                        </table>
                    </div><!-- /.box-body -->
                    <?php if (in_array("kelitian",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                        <?php if ($_smarty_tpl->tpl_vars['test_order']->value->status=="P") {?>
                            <div class="box-footer">
                                <button onclick="ubahStatus(<?php echo $_smarty_tpl->tpl_vars['test_order']->value->id;?>
, 'AL')" class="btn btn-flat btn-sm btn-success"><i class="fa fa-check"></i> Setujui Pengujian</button>
                                <button onclick="ubahStatus(<?php echo $_smarty_tpl->tpl_vars['test_order']->value->id;?>
, 'D')" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-times"></i> Tolak Pengujian</button>
                            </div>
                        <?php }?>                    
                    <?php }?>
                </div><!-- /.box -->
            </div><!-- ./col -->      
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
        
    <?php echo '<script'; ?>
 type="text/javascript">
        function ubahStatus(id, status) {
            $.ajax({
                url: "<?php echo base_url();?>
testing/update_status",
                type: "POST",
                data: "id=" + id + "&status=" + status,
                success: function (data) {
                    if (data == "Success") {
                        location.href = "<?php echo base_url();?>
konfirmasi_pengujian";
                    } else {
                        alert("Gagal Mengubah Status");
                    }
                }
            });
        }
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
