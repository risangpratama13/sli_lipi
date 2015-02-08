<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-08 03:15:40
         compiled from "application\views\testing\confirm_test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2205954d6aaa5d9da59-12267598%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0bea8cc03a9101bfd3b4548f6678656ff59a04dc' => 
    array (
      0 => 'application\\views\\testing\\confirm_test.tpl',
      1 => 1423361735,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1423218267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2205954d6aaa5d9da59-12267598',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d6aaa5e32173_28510686',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d6aaa5e32173_28510686')) {function content_54d6aaa5e32173_28510686($_smarty_tpl) {?><!DOCTYPE html>
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

    <?php echo link_tag('asset/css/daterangepicker/daterangepicker-bs3.css');?>


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
            Konfirmasi Pengujian
            <small><?php echo $_smarty_tpl->tpl_vars['test_order']->value->testing_name;?>
</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Pengujian Operator</a></li>
            <li class="active"><a href="<?php echo base_url();?>
confirm/<?php echo $_smarty_tpl->tpl_vars['test_order']->value->id;?>
">Konfirmasi Pengujian</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <?php echo form_open("confirm/".((string)$_smarty_tpl->tpl_vars['test_order']->value->id));?>

        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-calendar"></i>
                        <h3 class="box-title">Tanggal Pengujian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label>Tanggal Pengujian</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>                                
                                <?php echo form_input($_smarty_tpl->tpl_vars['test_date']->value);?>

                            </div><!-- /.input group -->
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <?php echo form_submit('find_tool',"Pilih Alat Pengujian",'class="btn btn-flat btn-primary"');?>
             
                    </div>
                </div><!-- /.box -->
            </div><!-- ./col -->      
        </div><!-- /.row -->
        <?php if (!empty($_smarty_tpl->tpl_vars['tools']->value)) {?>
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <i class="fa fa-wrench"></i>
                            <h3 class="box-title">Alat Pengujian</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive">
                            <table id="tableTool" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pilih Alat</th>
                                        <th>Nama Alat Pengujian</th>
                                        <th>Jumlah Alat</th>                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
                                    <?php  $_smarty_tpl->tpl_vars['tool'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tool']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tools']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tool']->key => $_smarty_tpl->tpl_vars['tool']->value) {
$_smarty_tpl->tpl_vars['tool']->_loop = true;
?>
                                        <?php if (empty($_smarty_tpl->tpl_vars['count_tools']->value[$_smarty_tpl->tpl_vars['tool']->value->id])) {?>
                                            <?php $_smarty_tpl->tpl_vars['max_qty'] = new Smarty_variable($_smarty_tpl->tpl_vars['tool']->value->tool_qty, null, 0);?>                                        
                                        <?php } else { ?>
                                            <?php $_smarty_tpl->tpl_vars['max_qty'] = new Smarty_variable($_smarty_tpl->tpl_vars['tool']->value->tool_qty-$_smarty_tpl->tpl_vars['count_tools']->value[$_smarty_tpl->tpl_vars['tool']->value->id], null, 0);?>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['max_qty']->value!=0) {?>
                                            <tr>
                                                <td><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                                <td>
                                                    <input type="checkbox" name="tools[]" value="<?php echo $_smarty_tpl->tpl_vars['tool']->value->id;?>
">
                                                </td>                                            
                                                <td><?php echo $_smarty_tpl->tpl_vars['tool']->value->tool_name;?>
</td>
                                                <td>
                                                    <input type="number" name="tool_qty_<?php echo $_smarty_tpl->tpl_vars['tool']->value->id;?>
" value="1" min="1" max="<?php echo $_smarty_tpl->tpl_vars['max_qty']->value;?>
">
                                                </td>
                                            </tr>
                                            <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
                                        <?php }?>
                                    <?php } ?>
                                </tbody>
                            </table>                        
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- ./col -->      
            </div><!-- /.row -->
        <?php }?>
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-footer">
                        <?php echo form_submit('accept',"Setujui Pengujian",'class="btn btn-flat btn-success"');?>
             
                        <?php echo form_submit('denied',"Tolak Pengujian",'class="btn btn-flat btn-danger"');?>
             
                    </div>
                </div><!-- /.box -->
            </div><!-- ./col -->      
        </div><!-- /.row -->
        <?php echo form_close();?>

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
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"><?php echo '</script'; ?>
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
            var tableTool = $("#tableTool").dataTable({
                oLanguage: {
                    sUrl: '<?php echo base_url();?>
asset/js/plugins/datatables/Indonesian.json'
                }
            });

            $('#tanggal_test').daterangepicker({
                timePicker: true,
                timePickerIncrement: 1,
                format: 'DD/MM/YYYY H:mm'
            });
        });
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
