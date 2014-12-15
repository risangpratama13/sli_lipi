<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-16 05:07:34
         compiled from "application\views\configuration\members.tpl" */ ?>
<?php /*%%SmartyHeaderCode:72495487c82f42e4c4-57416047%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '997d082a93c41f920943874d385abb924d8accb7' => 
    array (
      0 => 'application\\views\\configuration\\members.tpl',
      1 => 1418607899,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1418622047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '72495487c82f42e4c4-57416047',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5487c82f4f5861_16765485',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5487c82f4f5861_16765485')) {function content_5487c82f4f5861_16765485($_smarty_tpl) {?><!DOCTYPE html>
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

    <?php echo link_tag('asset/css/bootstrap-switch/bootstrap-switch.min.css');?>


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
            <small>Anggota</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Konfigurasi Pengguna</a></li>
            <li><a href="<?php echo base_url();?>
anggota">Anggota</a></li>
            <li class="active">Daftar Anggota</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Anggota</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a href="<?php echo base_url();?>
tambah_anggota" class="btn btn-flat btn-primary">
                            <i class="fa fa-plus-circle"></i> Tambah Anggota
                        </a>
                        <br/><br/>
                        <table id="tableMember" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Terdaftar</th>
                                    <th>Terakhir Login</th>
                                    <th>Operator</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>                              
                                <?php  $_smarty_tpl->tpl_vars['member'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['member']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['members']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['member']->key => $_smarty_tpl->tpl_vars['member']->value) {
$_smarty_tpl->tpl_vars['member']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['member']->value->full_name;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['member']->value->username;?>
</td>
                                        <td><?php echo date('j F Y H:i:s',$_smarty_tpl->tpl_vars['member']->value->created_on);?>
</td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['member']->value->last_login!=0) {?>
                                                <?php echo date('j F Y H:i:s',$_smarty_tpl->tpl_vars['member']->value->last_login);?>

                                            <?php }?>
                                        </td>
                                        <td>
                                            <?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable('', null, 0);?>
                                            <?php  $_smarty_tpl->tpl_vars['group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['member']->value->groups; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['group']->key => $_smarty_tpl->tpl_vars['group']->value) {
$_smarty_tpl->tpl_vars['group']->_loop = true;
?>                                               
                                                <?php if ($_smarty_tpl->tpl_vars['group']->value->id==4) {?>
                                                    <?php $_smarty_tpl->tpl_vars['checked'] = new Smarty_variable("checked", null, 0);?>
                                                <?php }?>
                                            <?php } ?>
                                            <input type="checkbox" data-username="<?php echo $_smarty_tpl->tpl_vars['member']->value->username;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
" name="group" data-size="mini" <?php echo $_smarty_tpl->tpl_vars['checked']->value;?>
>
                                        </td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['member']->value->active==1) {?>
                                                <input type="checkbox" class="simple" data-username="<?php echo $_smarty_tpl->tpl_vars['member']->value->username;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
" name="status" data-size="mini" checked>
                                            <?php } else { ?>
                                                <input type="checkbox" class="simple" data-username="<?php echo $_smarty_tpl->tpl_vars['member']->value->username;?>
" data-id="<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
" name="status" data-size="mini">
                                            <?php }?>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url();?>
ganti_password/<?php echo $_smarty_tpl->tpl_vars['member']->value->username;?>
" title="Ubah Password" class="btn btn-flat btn-sm bg-navy"><i class="fa fa-unlock-alt"></i></a>
                                            <button onclick="deleteUser(<?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
,'<?php echo $_smarty_tpl->tpl_vars['member']->value->username;?>
')" title="Hapus Admin" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
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
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/plugins/bootstrap-switch/bootstrap-switch.min.js" type="text/javascript"><?php echo '</script'; ?>
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
            $("#tableMember").dataTable();
            $('input[name="status"]').bootstrapSwitch();
            $('input[name="group"]').bootstrapSwitch();
            $('input[name="status"]').on({
                'switchChange.bootstrapSwitch': function (event, state) {
                    var status = $(this).is(':checked') ? '1' : '0';
                    var id = $(this).attr("data-id");
                    var username = $(this).attr("data-username");
                    if (status == "0") {
                        var url = "<?php echo base_url();?>
auth/deactivate";
                    } else if (status == "1") {
                        var url = "<?php echo base_url();?>
auth/activate";
                    }
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: "id=" + id,
                        success: function (data) {
                            if (data == "Success") {
                                if(status == "0") {
                                    alert(" Akun " + username + " Tidak Aktif");
                                } else {
                                    alert(" Akun " + username + " Aktif");
                                }
                            }
                        }
                    });
                }
            });
            $('input[name="group"]').on({
                'switchChange.bootstrapSwitch': function (event, state) {
                    var status = $(this).is(':checked') ? 'add' : 'remove';
                    var id = $(this).attr("data-id");
                    var username = $(this).attr("data-username");
                    if (status == "add") {
                        var url = "<?php echo base_url();?>
auth/operator/add";
                    } else if (status == "remove") {
                        var url = "<?php echo base_url();?>
auth/operator/remove";
                    }
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: "id=" + id,
                        success: function (data) {
                            if (data == "Success") {
                                if(status == "remove") {
                                    alert(" Akun " + username + " Dihapus Dari Grup Operator");
                                } else {
                                    alert(" Akun " + username + " Dimasukkan Ke Grup Operator");
                                }
                            }
                        }
                    });
                }
            });            
        });

        function deleteUser(id, username) {
            var konfirmasi = confirm("Hapus Akun " + username + "?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>
auth/delete",
                    data: "id=" + id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Akun " + username + " Dihapus");
                            location.reload();
                        } else {
                            alert(" Akun " + username + " Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
