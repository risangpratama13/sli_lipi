<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-16 00:02:23
         compiled from "application\views\testing\add_test.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2717548f61712e32c1-62855273%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b16d12e69d7a3c9be923075cb599d5b9ee2ab7fa' => 
    array (
      0 => 'application\\views\\testing\\add_test.tpl',
      1 => 1418684541,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1418622047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2717548f61712e32c1-62855273',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548f6171364162_73457847',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f6171364162_73457847')) {function content_548f6171364162_73457847($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\sli_lipi\\application\\third_party\\Smarty\\libs\\plugins\\function.html_options.php';
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
            Pengujian
            <small>Daftar Pengujian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Pengujian</a></li>
            <li><a href="<?php echo base_url();?>
pengujian">Daftar Pengujian</a></li>
            <li class="active">Tambah Pengujian</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Tambah Pengujian</h3>
                    </div><!-- /.box-header -->
                    <?php echo form_open('tambah_pengujian');?>

                    <div class="box-body">
                        <div class="form-group">
                            <?php echo form_label('Nama Pengujian','testing_name');?>

                            <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['testing_name']);?>

                            <?php echo form_error('testing_name','<p class="help-block text-red">','</p>');?>

                        </div>
                        <div class="form-group">                            
                            <label for="category">Kategori Pengujian</label>
                            <?php echo smarty_function_html_options(array('name'=>'category','options'=>$_smarty_tpl->tpl_vars['kategori']->value,'class'=>'form'-'control'),$_smarty_tpl);?>
                       
                        </div>
                        <div class="form-group">
                            <?php echo form_label('Harga Pengujian','testing_price');?>

                            <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['testing_price']);?>

                                <span class="input-group-addon">.00</span>       
                            </div>
                            <?php echo form_error('testing_price','<p class="help-block text-red">','</p>');?>

                        </div>
                        <div class="form-group">                            
                            <label for="unit">Satuan (Per)</label>
                            <?php echo smarty_function_html_options(array('name'=>'unit','options'=>$_smarty_tpl->tpl_vars['satuan']->value,'class'=>'form'-'control'),$_smarty_tpl);?>
                         
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <?php echo form_submit('submit',"Tambahkan Pengujian",'class="btn btn-flat btn-success"');?>

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
        
        $(document).ready(function () {
            $("select").attr("class", "form-control");
        });
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
