<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-22 06:01:33
         compiled from "application\views\configuration\add_leader.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2283654ff7a46ecab66-79664899%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'aa9ab2129cd9e30452419b5335ed78c3ddba2f1e' => 
    array (
      0 => 'application\\views\\configuration\\add_leader.tpl',
      1 => 1426893919,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1429400112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2283654ff7a46ecab66-79664899',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54ff7a4702c893_52817359',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54ff7a4702c893_52817359')) {function content_54ff7a4702c893_52817359($_smarty_tpl) {?><!DOCTYPE html>
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
            <li class="active">Tambah Ketua Kelitian</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Tambah Ketua Kelitian</h3>
                    </div><!-- /.box-header -->
                    <?php echo form_open('tambah_leader');?>

                    <div class="box-body">
                        <div class="form-group">
                            <label>Deputi Bidang</label>
                            <select class="form-control" name="researcher" id="researcher">
                                <option value="">-- Pilih Deputi Bidang --</option>
                                <?php  $_smarty_tpl->tpl_vars['researcher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['researcher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['researchers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['researcher']->key => $_smarty_tpl->tpl_vars['researcher']->value) {
$_smarty_tpl->tpl_vars['researcher']->_loop = true;
?>                                    
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['researcher']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['researcher']->value->researcher_name;?>
</option>                                                          
                                <?php } ?>
                            </select>
                            <?php echo form_error('researcher','<p class="help-block text-red">','</p>');?>

                        </div>
                        <div class="form-group">
                            <label>Satuan Kerja</label>
                            <select class="form-control" name="research" id="research">
                                <option value="">-- Pilih Satuan Kerja --</option>
                                <?php  $_smarty_tpl->tpl_vars['research'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['research']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['researches']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['research']->key => $_smarty_tpl->tpl_vars['research']->value) {
$_smarty_tpl->tpl_vars['research']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['research']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['research']->value->researcher_id;?>
"><?php echo $_smarty_tpl->tpl_vars['research']->value->research_name;?>
</option>                                                           
                                <?php } ?>
                            </select>
                            <?php echo form_error('research','<p class="help-block text-red">','</p>');?>

                        </div>
                        <div class="form-group">
                            <label>Kelompok Penelitian</label>
                            <select class="form-control" name="research_group" id="research_group">
                                <option value="">-- Pilih Kelompok Penelitian --</option>
                                <?php  $_smarty_tpl->tpl_vars['research_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['research_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['research_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['research_group']->key => $_smarty_tpl->tpl_vars['research_group']->value) {
$_smarty_tpl->tpl_vars['research_group']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['research_group']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['research_group']->value->researcher_id;?>
\<?php echo $_smarty_tpl->tpl_vars['research_group']->value->research_id;?>
"><?php echo $_smarty_tpl->tpl_vars['research_group']->value->res_group_name;?>
</option>                                                                                                                
                                <?php } ?>
                            </select>
                            <?php echo form_error('research_group','<p class="help-block text-red">','</p>');?>

                        </div>
                        <div class="form-group">
                            <label>Ketua Ketelitian</label>
                            <select class="form-control" name="user" id="user">
                                <option value="">-- Pilih Ketua Kelitian --</option>
                                <?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['members']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->_loop = true;
?>
                                    <option value="<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['research_group_id']->value[$_smarty_tpl->tpl_vars['member']->value->id];?>
"><?php echo $_smarty_tpl->tpl_vars['member']->value->full_name;?>
</option>                                                                                                                
                                <?php } ?>
                            </select>
                            <?php echo form_error('research_group','<p class="help-block text-red">','</p>');?>

                        </div>
                    </div><!-- /.box-body -->
                <div class="box-footer">
                    <?php echo form_submit('submit',"Tambahkan Operator",'class="btn btn-flat btn-success"');?>

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
