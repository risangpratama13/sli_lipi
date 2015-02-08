<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-08 06:24:46
         compiled from "application\views\account\balance_log.tpl" */ ?>
<?php /*%%SmartyHeaderCode:4619549d4b85e67908-66423787%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '3139f8bb9b3a0ce70a62fa341824ecf15214ae3b' => 
    array (
      0 => 'application\\views\\account\\balance_log.tpl',
      1 => 1419600347,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1423218267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '4619549d4b85e67908-66423787',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549d4b85f3a832_80067330',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549d4b85f3a832_80067330')) {function content_549d4b85f3a832_80067330($_smarty_tpl) {?><!DOCTYPE html>
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
        
    <?php echo link_tag('asset/css/datatables/dataTables.bootstrap.css');?>


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
            Rincian Saldo
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Rincian Saldo</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Rincian Saldo</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="tableBalance" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Uraian</th>
                                    <th>Jenis Transaksi</th>
                                    <th>Jumlah</th>
                                    <th>Saldo</th>
                                </tr>
                            </thead>                            
                            <tbody>
                                <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['balance'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['balance']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['balances']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['balance']->key => $_smarty_tpl->tpl_vars['balance']->value) {
$_smarty_tpl->tpl_vars['balance']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo date('j F Y',strtotime($_smarty_tpl->tpl_vars['balance']->value->trans_date));?>
</a></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['balance']->value->desc;?>
</td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['balance']->value->trans_type=="D") {?>
                                                <span class="label label-success">Debit</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['balance']->value->trans_type=="K") {?>
                                                <span class="label label-danger">Kredit</span>
                                            <?php }?>
                                        </td>
                                        <td>Rp. <?php echo number_format($_smarty_tpl->tpl_vars['balance']->value->amount,'2',',','.');?>
</td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['no']->value==1) {?>
                                                <?php $_smarty_tpl->tpl_vars['saldo_awal'] = new Smarty_variable($_smarty_tpl->tpl_vars['balance']->value->amount, null, 0);?>
                                                Rp. <?php echo number_format($_smarty_tpl->tpl_vars['saldo_awal']->value,'2',',','.');?>

                                            <?php } else { ?>
                                                <?php if ($_smarty_tpl->tpl_vars['balance']->value->trans_type=="D") {?>
                                                    <?php $_smarty_tpl->tpl_vars['saldo_awal'] = new Smarty_variable($_smarty_tpl->tpl_vars['saldo_awal']->value+$_smarty_tpl->tpl_vars['balance']->value->amount, null, 0);?>
                                                <?php } elseif ($_smarty_tpl->tpl_vars['balance']->value->trans_type=="K") {?>
                                                    <?php $_smarty_tpl->tpl_vars['saldo_awal'] = new Smarty_variable($_smarty_tpl->tpl_vars['saldo_awal']->value-$_smarty_tpl->tpl_vars['balance']->value->amount, null, 0);?>
                                                <?php }?>
                                                Rp. <?php echo number_format($_smarty_tpl->tpl_vars['saldo_awal']->value,'2',',','.');?>

                                            <?php }?>                                            
                                        </td>                                 
                                    </tr>
                                    <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
                                <?php } ?>
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="4">Total Saldo</th>
                                    <th>Rp. <?php echo number_format($_smarty_tpl->tpl_vars['saldo']->value,'2',',','.');?>
</th>
                                </tr>
                            </tfoot>
                        </table>
                    </div><!-- /.box-body -->
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
asset/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"><?php echo '</script'; ?>
>

        <!-- SLI LIPI App -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/Sli_Lipi/app.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- Addons Scripts -->
        
    <?php echo '<script'; ?>
 type="text/javascript">
        $(function () {
            $("#tableBalance").dataTable({
                bSort: false,
                oLanguage: {
                    sUrl: '<?php echo base_url();?>
asset/js/plugins/datatables/Indonesian.json'
                }
            });            
        });
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
