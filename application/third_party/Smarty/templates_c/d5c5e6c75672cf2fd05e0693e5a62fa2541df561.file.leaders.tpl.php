<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-10 07:11:06
         compiled from "application\views\configuration\leaders.tpl" */ ?>
<?php /*%%SmartyHeaderCode:810454fe369a57da03-08991587%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd5c5e6c75672cf2fd05e0693e5a62fa2541df561' => 
    array (
      0 => 'application\\views\\configuration\\leaders.tpl',
      1 => 1425946176,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1423218267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '810454fe369a57da03-08991587',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54fe369a629835_19381516',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fe369a629835_19381516')) {function content_54fe369a629835_19381516($_smarty_tpl) {?><!DOCTYPE html>
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
            <small>Ketua Ketelitian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Konfigurasi Pengguna</a></li>
            <li><a href="<?php echo base_url();?>
leader">Ketua Ketelitian</a></li>
            <li class="active">Daftar Ketua Ketelitian</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Ketua Ketelitian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a href="<?php echo base_url();?>
add_leader" class="btn btn-flat btn-primary">
                            <i class="fa fa-plus-circle"></i> Tambah Ketua Ketelitian
                        </a>
                        <br/><br/>
                        <table id="tableLeader" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Kelompok Penelitian</th>
                                    <th>Deputi Bidang</th>
                                    <th>Satuan Kerja</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>                              
                                <?php  $_smarty_tpl->tpl_vars['leader'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['leader']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['leaders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['leader']->key => $_smarty_tpl->tpl_vars['leader']->value) {
$_smarty_tpl->tpl_vars['leader']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['leader']->value->full_name;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['add_data']->value['research_group_`$leader->user_id`'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['add_data']->value['researcher_`$leader->user_id`'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['add_data']->value['research_`$leader->user_id`'];?>
</td>
                                        <td>
                                            <a href="<?php echo base_url();?>
anggota/<?php echo $_smarty_tpl->tpl_vars['leader']->value->username;?>
" title="Profil Anggota" class="btn btn-flat btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                            <a href="<?php echo base_url();?>
edit_leader/<?php echo $_smarty_tpl->tpl_vars['leader']->value->id;?>
" title="Ubah Ketua Ketelitian" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <button onclick="deleteLeader(<?php echo $_smarty_tpl->tpl_vars['leader']->value->id;?>
, '<?php echo $_smarty_tpl->tpl_vars['leader']->value->full_name;?>
')" title="Hapus Ketua Ketelitian" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
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
            $("#tableLeader").dataTable({
                oLanguage: {
                    sUrl: '<?php echo base_url();?>
asset/js/plugins/datatables/Indonesian.json'
                }
            });
        });

        function deleteLeader(id, username) {
            var konfirmasi = confirm("Hapus " + username + " Sebagai Leader ?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>
auth/delete_operator",
                    data: "user_id=" + id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Leader " + username + " Dihapus");
                            location.reload();
                        } else {
                            alert(" Leader " + username + " Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
