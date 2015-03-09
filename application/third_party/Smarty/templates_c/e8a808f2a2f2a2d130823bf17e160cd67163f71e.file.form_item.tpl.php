<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-08 06:18:26
         compiled from "application\views\account\form_item.tpl" */ ?>
<?php /*%%SmartyHeaderCode:173035492119672c1f5-49354121%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e8a808f2a2f2a2d130823bf17e160cd67163f71e' => 
    array (
      0 => 'application\\views\\account\\form_item.tpl',
      1 => 1425770287,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1423218267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '173035492119672c1f5-49354121',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549211967ef724_69031244',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549211967ef724_69031244')) {function content_549211967ef724_69031244($_smarty_tpl) {?><?php if (!is_callable('smarty_function_html_options')) include 'C:\\xampp\\htdocs\\sli_lipi\\application\\third_party\\Smarty\\libs\\plugins\\function.html_options.php';
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
            Item
            <small>
                <?php if ($_smarty_tpl->tpl_vars['action']->value=="add") {?>
                    Tambah Item
                <?php } else { ?>
                    Ubah Item
                <?php }?>
            </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="<?php echo base_url();?>
pengujian">Daftar Item</a></li>
            <li class="active">
                <?php if ($_smarty_tpl->tpl_vars['action']->value=="add") {?>
                    Tambah Item
                <?php } else { ?>
                    Ubah Item
                <?php }?>
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <?php if ($_smarty_tpl->tpl_vars['action']->value=="add") {?>
                    <div class="box box-primary">
                    <?php } else { ?>
                        <div class="box box-warning">
                        <?php }?>                
                        <div class="box-header">
                            <h3 class="box-title">
                                <?php if ($_smarty_tpl->tpl_vars['action']->value=="add") {?>
                                    Tambah Item
                                <?php } else { ?>
                                    Ubah Item
                                <?php }?>
                            </h3>
                        </div><!-- /.box-header -->
                        <?php if ($_smarty_tpl->tpl_vars['action']->value=="add") {?>
                            <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("account/add_item", null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("account/edit_item/".((string)$_smarty_tpl->tpl_vars['data']->value['item_id']), null, 0);?>
                        <?php }?>                        
                        <?php echo form_open_multipart($_smarty_tpl->tpl_vars['url']->value);?>

                        <?php if ($_smarty_tpl->tpl_vars['action']->value=="edit") {?>
                            <?php echo form_hidden('id',$_smarty_tpl->tpl_vars['data']->value['item_id']);?>

                        <?php }?>
                        <div class="box-body">
                            <?php if (!empty($_smarty_tpl->tpl_vars['data']->value['message'])) {?>
                                <div class="alert alert-danger alert-dismissable">
                                    <i class="fa fa-ban"></i>
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['data']->value['message']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
                                        <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                                    <?php } ?>
                                </div>
                            <?php }?>
                            <div class="form-group">
                                <?php echo form_label('Judul Paper','item_title');?>

                                <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['item_title']);?>

                                <?php echo form_error('item_title','<p class="help-block text-red">','</p>');?>

                            </div>
                            <div class="form-group">                            
                                <label for="item_type">Kategori Item</label>
                                <?php if ($_smarty_tpl->tpl_vars['action']->value=="add") {?>
                                    <?php echo smarty_function_html_options(array('name'=>'item_type','options'=>$_smarty_tpl->tpl_vars['kategori']->value),$_smarty_tpl);?>

                                <?php } else { ?>
                                    <?php echo smarty_function_html_options(array('name'=>'item_type','options'=>$_smarty_tpl->tpl_vars['kategori']->value,'selected'=>$_smarty_tpl->tpl_vars['data']->value['select_option']),$_smarty_tpl);?>

                                <?php }?>                                                       
                            </div>
                            <div class="form-group">
                                <?php echo form_label('Jumlah Penulis','author_num');?>

                                <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['author_num']);?>

                                <?php echo form_error('author_num','<p class="help-block text-red">','</p>');?>

                            </div>
                            <label>Upload Berkas Atau Masukkan URL Berkas</label>                                
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-primary" onclick="$('#paper').click();"><i class="fa fa-file-text"></i> Pilih Berkas</button>
                                            </div><!-- /btn-group -->
                                            <input type="file" name="paper" id="paper" value="<?php echo $_smarty_tpl->tpl_vars['data']->value['url'];?>
" style="display: none;">
                                            <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['paper_path']);?>

                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-globe"></i>
                                            </div>
                                            <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['paper_url']);?>

                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="form-group">                            
                                <?php echo form_label('Description','description');?>

                                <?php echo form_textarea($_smarty_tpl->tpl_vars['data']->value['description']);?>
                         
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <?php echo form_submit('submit',"Simpan Item",'class="btn btn-flat btn-success"');?>

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
        
        <!-- SLI LIPI App -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/Sli_Lipi/app.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- Addons Scripts -->
        
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            $("select").attr("class", "form-control");
            $("#paper").change(function () {
                $("#paper_path").val($("#paper").val());
            });
        });
    <?php echo '</script'; ?>
>
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
