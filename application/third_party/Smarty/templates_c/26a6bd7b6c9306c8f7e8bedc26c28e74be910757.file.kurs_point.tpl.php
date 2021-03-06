<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-15 04:32:11
         compiled from "application\views\master\kurs_point.tpl" */ ?>
<?php /*%%SmartyHeaderCode:18780548e474972c9a5-11324716%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '26a6bd7b6c9306c8f7e8bedc26c28e74be910757' => 
    array (
      0 => 'application\\views\\master\\kurs_point.tpl',
      1 => 1418614327,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1418213239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '18780548e474972c9a5-11324716',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548e47497a67a0_96039108',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548e47497a67a0_96039108')) {function content_548e47497a67a0_96039108($_smarty_tpl) {?><!DOCTYPE html>
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
            Master Data
            <small>Kurs Poin</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li class="active"><a href="<?php echo base_url();?>
kurs_point">Kurs Poin</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-rouble"></i>
                        <h3 class="box-title">Kurs Poin Hari Ini</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-striped">
                            <tr>
                                <td>Jumlah Poin</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['kurs']->value->point;?>
 Poin</td>
                            </tr>
                            <tr>
                                <td>Nilai Rupiah</td>
                                <td>
                                    <span class="label label-info">
                                        Rp <?php echo number_format($_smarty_tpl->tpl_vars['kurs']->value->idr,'2',',','.');?>

                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>Terakhir Diubah</td>
                                <td><?php echo date("j F Y H:m:s",strtotime($_smarty_tpl->tpl_vars['kurs']->value->last_update));?>
</td>
                            </tr>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- ./col -->
            <div class="col-md-4">
                <div class="box box-warning">
                    <div class="box-header">
                        <i class="fa fa-edit"></i>
                        <h3 class="box-title">Ubah Kurs Poin</h3>
                    </div><!-- /.box-header -->
                    <?php echo form_open('master/kurs_point');?>

                    <div class="box-body">
                        <label for="idr">Nilai Tukar Rupiah</label>                            
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <?php echo form_input($_smarty_tpl->tpl_vars['form_kurs']->value);?>

                            <span class="input-group-addon">.00</span>                            
                        </div>
                        <?php echo form_error('idr','<p class="help-block text-red">','</p>');?>

                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <?php echo form_submit('submit',"Ubah Kurs",'class="btn btn-flat btn-warning"');?>

                    </div>
                    <?php echo form_close();?>

                </div><!-- /.box -->
            </div><!-- ./col -->
            <div class="col-md-4">
                <div class="box box-solid">
                    <div class="box-header">
                        <i class="fa fa-keyboard-o"></i>
                        <h3 class="box-title">Kalkulator Kurs</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="input-group">
                            <input id="poin" class="form-control" placeholder="Jumlah Poin" onkeyup="calculator(event)">
                            <span class="input-group-addon">Poin</span>                            
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <label for="idr">Nilai Tukar Rupiah</label>                            
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input id="idr" class="form-control" disabled="">                            
                            <span class="input-group-addon">.00</span>                            
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- ./col -->
        </div><!-- /.row -->
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
        
    <?php echo '<script'; ?>
 type="text/javascript">
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
        
        function calculator(evt) {
            if(isNumberKey(evt)) {
                var nilai_rupiah = <?php echo $_smarty_tpl->tpl_vars['kurs']->value->idr;?>
;
                var point = document.getElementById("poin").value;
                var idr = parseFloat(nilai_rupiah) * parseFloat(point);
                document.getElementById("idr").value = idr;
            }
        }
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
