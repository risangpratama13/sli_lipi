<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-08 07:14:56
         compiled from "application\views\master-data\research_group\form.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2105054fb8e5c869da4-13997429%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'a2d233e27f4d949465f541ab3b7c7d30ea9f29ec' => 
    array (
      0 => 'application\\views\\master-data\\research_group\\form.tpl',
      1 => 1425773674,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1423218267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2105054fb8e5c869da4-13997429',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54fb8e5c987065_37989864',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fb8e5c987065_37989864')) {function content_54fb8e5c987065_37989864($_smarty_tpl) {?><!DOCTYPE html>
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
            Kelompok Penelitian
            <small>
                <?php if ($_smarty_tpl->tpl_vars['action']->value=="add") {?>
                    Tambah Kelompok Penelitian
                <?php } else { ?>
                    Ubah Kelompok Penelitian
                <?php }?>
            </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li><a href="<?php echo base_url();?>
pengujian">Daftar Kelompok Penelitian</a></li>
            <li class="active">
                <?php if ($_smarty_tpl->tpl_vars['action']->value=="add") {?>
                    Tambah Kelompok Penelitian
                <?php } else { ?>
                    Ubah Kelompok Penelitian
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
                                    Tambah Kelompok Penelitian
                                <?php } else { ?>
                                    Ubah Kelompok Penelitian
                                <?php }?>
                            </h3>
                        </div><!-- /.box-header -->
                        <?php if ($_smarty_tpl->tpl_vars['action']->value=="add") {?>
                            <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("research_group/add", null, 0);?>
                        <?php } else { ?>
                            <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("research_group/edit/".((string)$_smarty_tpl->tpl_vars['research_group']->value->id), null, 0);?>
                        <?php }?>                        
                        <?php echo form_open($_smarty_tpl->tpl_vars['url']->value);?>

                        <?php if ($_smarty_tpl->tpl_vars['action']->value=="edit") {?>
                            <?php echo form_hidden('id',$_smarty_tpl->tpl_vars['research_group']->value->id);?>

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
                                <label>Deputi Bidang</label>
                                <select class="form-control" name="researcher" id="researcher">
                                    <option value="">-- Deputi Bidang --</option>
                                    <?php  $_smarty_tpl->tpl_vars['researcher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['researcher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['researchers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['researcher']->key => $_smarty_tpl->tpl_vars['researcher']->value) {
$_smarty_tpl->tpl_vars['researcher']->_loop = true;
?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['research_group']->value)) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['researcher']->value->id==$_smarty_tpl->tpl_vars['research_group']->value->researcher_id) {?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['researcher']->value->id;?>
" selected=""><?php echo $_smarty_tpl->tpl_vars['researcher']->value->researcher_name;?>
</option>
                                            <?php } else { ?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['researcher']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['researcher']->value->researcher_name;?>
</option>
                                            <?php }?>
                                        <?php } else { ?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['researcher']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['researcher']->value->researcher_name;?>
</option>
                                        <?php }?>                        
                                    <?php } ?>
                                </select>
                                <?php echo form_error('researcher','<p class="help-block text-red">','</p>');?>

                            </div>
                            <div class="form-group">
                                <label>Satuan Kerja</label>
                                <select class="form-control" name="research" id="research">
                                    <option value="">-- Satuan Kerja --</option>
                                    <?php  $_smarty_tpl->tpl_vars['research'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['research']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['researches']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['research']->key => $_smarty_tpl->tpl_vars['research']->value) {
$_smarty_tpl->tpl_vars['research']->_loop = true;
?>
                                        <?php if (!empty($_smarty_tpl->tpl_vars['research_group']->value)) {?>
                                            <?php if ($_smarty_tpl->tpl_vars['research_group']->value->research_id==$_smarty_tpl->tpl_vars['research']->value->id) {?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['research']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['research']->value->researcher_id;?>
" selected=""><?php echo $_smarty_tpl->tpl_vars['research']->value->research_name;?>
</option>
                                            <?php } else { ?>
                                                <option value="<?php echo $_smarty_tpl->tpl_vars['research']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['research']->value->researcher_id;?>
"><?php echo $_smarty_tpl->tpl_vars['research']->value->research_name;?>
</option>
                                            <?php }?>
                                        <?php } else { ?>
                                            <option value="<?php echo $_smarty_tpl->tpl_vars['research']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['research']->value->researcher_id;?>
"><?php echo $_smarty_tpl->tpl_vars['research']->value->research_name;?>
</option>
                                        <?php }?>                        
                                    <?php } ?>
                                </select>
                                <?php echo form_error('research','<p class="help-block text-red">','</p>');?>

                            </div>
                            <div class="form-group">
                                <?php echo form_label('Kelompok Penelitian','group_name');?>

                                <?php echo form_input($_smarty_tpl->tpl_vars['group_name']->value);?>

                                <?php echo form_error('group_name','<p class="help-block text-red">','</p>');?>

                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            <?php echo form_submit('submit',"Simpan Kelompok Penelitian",'class="btn btn-flat btn-success"');?>

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
            $("select").attr("class", "form-control");
            $("#research").chained("#researcher");
        });
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
