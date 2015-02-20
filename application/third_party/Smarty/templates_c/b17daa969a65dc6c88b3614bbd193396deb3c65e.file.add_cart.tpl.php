<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-20 10:42:49
         compiled from "application\views\order\add_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:109255497543e15a5d7-15919826%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b17daa969a65dc6c88b3614bbd193396deb3c65e' => 
    array (
      0 => 'application\\views\\order\\add_cart.tpl',
      1 => 1424403127,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1423521212,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '109255497543e15a5d7-15919826',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5497543e1d75f2_50234353',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5497543e1d75f2_50234353')) {function content_5497543e1d75f2_50234353($_smarty_tpl) {?><!DOCTYPE html>
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
            Pengajuan Pengujian
            <small>Tambah Pengujian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Pengajuan Pengujian</a></li>
            <li><a href="<?php echo base_url();?>
tambah_order">Buat Pengajuan Pengujian</a></li>
            <li class="active">Tambah Pengujian</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Tambahkan Pengujian</h3>
                    </div><!-- /.box-header -->
                    <?php echo form_open('orders/add_cart');?>

                    <?php echo form_hidden('test_id',$_smarty_tpl->tpl_vars['test_id']->value);?>

                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo form_label('Nama Pengujian','pengujian');?>

                                    <input type="text" name="pengujian" value="<?php echo $_smarty_tpl->tpl_vars['test']->value->testing_name;?>
" class="form-control" disabled="disabled">
                                </div>
                                <div class="form-group">                            
                                    <?php echo form_label('Jumlah Pengujian','qty');?>

                                    <?php echo form_input($_smarty_tpl->tpl_vars['qty']->value);?>
                       
                                </div>
                                <div class="form-group">
                                    <?php echo form_label('Pilih Operator','operator');?>
                            
                                    <select name="operator" class="form-control">
                                        <?php  $_smarty_tpl->tpl_vars['operator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['operator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['operators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['operator']->key => $_smarty_tpl->tpl_vars['operator']->value) {
$_smarty_tpl->tpl_vars['operator']->_loop = true;
?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['operator']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['operator']->value->full_name;?>
</option>
                                        <?php } ?>                          
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <?php echo form_label('Penjelasan (optional)','description');?>

                                    <textarea name="description" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <?php echo form_submit('submit',"Tambahkan Pengujian",'class="btn btn-flat btn-success"');?>

                    </div>
                    <?php echo form_close();?>

                </div><!-- /.box -->               
            </div>
        </div>
    </section>

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
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
