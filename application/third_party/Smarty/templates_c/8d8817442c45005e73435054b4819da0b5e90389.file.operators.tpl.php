<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-17 11:26:35
         compiled from "application\views\configuration\operators.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13923548f93436df625-56017294%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8d8817442c45005e73435054b4819da0b5e90389' => 
    array (
      0 => 'application\\views\\configuration\\operators.tpl',
      1 => 1418703093,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1418622047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13923548f93436df625-56017294',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548f93437875c0_15848646',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548f93437875c0_15848646')) {function content_548f93437875c0_15848646($_smarty_tpl) {?><!DOCTYPE html>
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
            Konfigurasi Pengguna
            <small>Operator</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Konfigurasi Pengguna</a></li>
            <li><a href="<?php echo base_url();?>
operator">Operator</a></li>
            <li class="active">Daftar Operator</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Operator</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a href="<?php echo base_url();?>
tambah_operator" class="btn btn-flat btn-primary">
                            <i class="fa fa-plus-circle"></i> Tambah Operator
                        </a>
                        <br/><br/>
                        <table id="tableOperator" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Kategori Pengujian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>                              
                                <?php  $_smarty_tpl->tpl_vars['operator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['operator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['operators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['operator']->key => $_smarty_tpl->tpl_vars['operator']->value) {
$_smarty_tpl->tpl_vars['operator']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['operator']->value->full_name;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['operator']->value->username;?>
</td>
                                        <td>
                                            <ul>
                                                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['operator']->value->categories; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                                                    <li><?php echo $_smarty_tpl->tpl_vars['category']->value->cat_name;?>
</li>
                                                <?php } ?>
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url();?>
anggota/<?php echo $_smarty_tpl->tpl_vars['operator']->value->username;?>
" title="Profil Anggota" class="btn btn-flat btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                            <a href="<?php echo base_url();?>
ubah_operator/<?php echo $_smarty_tpl->tpl_vars['operator']->value->id;?>
" title="Ubah Operator" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <button onclick="deleteOperator(<?php echo $_smarty_tpl->tpl_vars['operator']->value->id;?>
, '<?php echo $_smarty_tpl->tpl_vars['operator']->value->username;?>
')" title="Hapus Operator" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                <?php } ?>
                            </tbody>
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
 src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"><?php echo '</script'; ?>
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
            $("#tableOperator").dataTable({
                oLanguage: {
                    sUrl: '<?php echo base_url();?>
asset/js/plugins/datatables/Indonesian.json'
                }
            });
        });

        function deleteOperator(id, username) {
            var konfirmasi = confirm("Hapus Akun " + username + " Sebagai Operator ?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>
auth/delete_operator",
                    data: "user_id=" + id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Operator " + username + " Dihapus");
                            location.reload();
                        } else {
                            alert(" Operator " + username + " Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
