<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-05-01 00:46:41
         compiled from "application\views\testing\history.tpl" */ ?>
<?php /*%%SmartyHeaderCode:8472549a1e8a8c8b89-83129481%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9afc75256c57d70903a482fc76a37d51beb6fa3f' => 
    array (
      0 => 'application\\views\\testing\\history.tpl',
      1 => 1430260984,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1429949464,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '8472549a1e8a8c8b89-83129481',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549a1e8aba33b7_11466323',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549a1e8aba33b7_11466323')) {function content_549a1e8aba33b7_11466323($_smarty_tpl) {?><?php if (!is_callable('smarty_function_date_diff')) include 'C:\\xampp\\htdocs\\sli_lipi\\application\\third_party\\Smarty\\libs\\plugins\\function.date_diff.php';
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
            Kegiatan Pengujian
            <small>
                <?php if ($_smarty_tpl->tpl_vars['type']->value=="member") {?>
                    Pengujian Anggota
                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="operator") {?>
                    Pengujian Operator
                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="all") {?>
                    Daftar Pengujian
                <?php }?>  
            </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Kegiatan Pengujian</a></li>
            <li class="active">
                <?php if ($_smarty_tpl->tpl_vars['type']->value=="member") {?>
                    <a href="<?php echo base_url();?>
pengujian_member">Pengujian Anggota</a>
                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="operator") {?>
                    <a href="<?php echo base_url();?>
pengujian_operator">Pengujian Operator</a>
                <?php } elseif ($_smarty_tpl->tpl_vars['type']->value=="all") {?>
                    <a href="<?php echo base_url();?>
history_pengujian">Daftar Pengujian</a>
                <?php }?>                
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Pengujian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <?php if (!empty($_smarty_tpl->tpl_vars['messages']->value)) {?>
                            <div class="alert alert-danger alert-dismissable">
                                <i class="fa fa-ban"></i>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                <?php  $_smarty_tpl->tpl_vars['message'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['message']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['messages']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['message']->key => $_smarty_tpl->tpl_vars['message']->value) {
$_smarty_tpl->tpl_vars['message']->_loop = true;
?>
                                    <?php echo $_smarty_tpl->tpl_vars['message']->value;?>

                                <?php } ?>
                            </div>
                        <?php }?>
                        <table id="tableTestHistory" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <?php if ($_smarty_tpl->tpl_vars['type']->value=="operator"||$_smarty_tpl->tpl_vars['type']->value=="all") {?>
                                        <th>Anggota</th>
                                        <?php }?>
                                    <th>Pengujian</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Periode</th>
                                        <?php if ($_smarty_tpl->tpl_vars['type']->value=="member"||$_smarty_tpl->tpl_vars['type']->value=="all") {?>
                                        <th>Operator</th>
                                        <?php }?>                                    
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['test'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['test']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tests']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['test']->key => $_smarty_tpl->tpl_vars['test']->value) {
$_smarty_tpl->tpl_vars['test']->_loop = true;
?>
                                    <tr>
                                        <?php if ($_smarty_tpl->tpl_vars['type']->value=="operator"||$_smarty_tpl->tpl_vars['type']->value=="all") {?>
                                            <td><?php echo $_smarty_tpl->tpl_vars['test']->value->anggota;?>
</td>
                                        <?php }?>
                                        <td><?php echo $_smarty_tpl->tpl_vars['test']->value->testing_name;?>
</td>
                                        <?php if ($_smarty_tpl->tpl_vars['test']->value->start_date=="0000-00-00 00:00:00") {?>
                                            <td>Belum Diatur</td>
                                        <?php } else { ?>
                                            <td><?php echo date("j F Y H:i",strtotime($_smarty_tpl->tpl_vars['test']->value->start_date));?>
</td>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['test']->value->finish_date=="0000-00-00 00:00:00") {?>
                                            <td>Belum Diatur</td>
                                        <?php } else { ?>
                                            <td><?php echo date("j F Y H:i",strtotime($_smarty_tpl->tpl_vars['test']->value->finish_date));?>
</td>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['test']->value->finish_date=="0000-00-00 00:00:00") {?>
                                            <td>&nbsp;</td>
                                        <?php } else { ?>
                                            <td><?php echo smarty_function_date_diff(array('tanggal_1'=>date("Y-m-d",strtotime($_smarty_tpl->tpl_vars['test']->value->start_date)),'tanggal_2'=>date("Y-m-d",strtotime($_smarty_tpl->tpl_vars['test']->value->finish_date))),$_smarty_tpl);?>
 Hari</td>
                                        <?php }?>
                                        <?php if ($_smarty_tpl->tpl_vars['type']->value=="member"||$_smarty_tpl->tpl_vars['type']->value=="all") {?>
                                            <td><?php echo $_smarty_tpl->tpl_vars['test']->value->operator;?>
</td>     
                                        <?php }?>                                                                           
                                        <?php if ($_smarty_tpl->tpl_vars['test']->value->status=="P") {?>
                                            <td><span class="label label-warning">Pending</span></td>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['test']->value->status=="AL") {?>
                                            <td><span class="label label-success">Disetujui Ketua Kelitian</span></td>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['test']->value->status=="AO") {?>
                                            <td><span class="label label-success">Disetujui Operator</span></td>                                        
                                        <?php } elseif ($_smarty_tpl->tpl_vars['test']->value->status=="D") {?>
                                            <td><span class="label label-danger">Denied</span></td>
                                        <?php } elseif ($_smarty_tpl->tpl_vars['test']->value->status=="F") {?>
                                            <td><span class="label label-info">Finish</span></td>
                                        <?php }?>                                        
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['test']->value->status=="AL") {?>
                                                <?php if ($_smarty_tpl->tpl_vars['type']->value=="operator") {?>
                                                    <a href="<?php echo base_url();?>
confirm/<?php echo $_smarty_tpl->tpl_vars['test']->value->id;?>
" class="btn btn-flat btn-sm btn-primary">Konfirmasi</a>
                                                <?php } else { ?>
                                                    &nbsp;
                                                <?php }?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['test']->value->status=="AO") {?>
                                                <?php if ($_smarty_tpl->tpl_vars['type']->value=="operator") {?>
                                                    <button onclick="ubahStatus(<?php echo $_smarty_tpl->tpl_vars['test']->value->id;?>
, 'F')" class="btn btn-flat btn-sm btn-default" title="Pengujian Selesai"><i class="fa fa-flag-checkered"></i></button>
                                                <?php } else { ?>
                                                    &nbsp;
                                                <?php }?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['test']->value->status=="D") {?>
                                                <?php if ($_smarty_tpl->tpl_vars['type']->value=="member") {?>
                                                    <button onclick="hapusOrder(<?php echo $_smarty_tpl->tpl_vars['test']->value->id;?>
)" class="btn btn-flat btn-sm btn-danger" title="Hapus"><i class="fa fa-trash-o"></i></button>
                                                <?php } else { ?>
                                                    &nbsp;
                                                <?php }?>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['test']->value->status=="F") {?>
                                                <?php if ($_smarty_tpl->tpl_vars['test']->value->url_file=='') {?>
                                                    <?php if ($_smarty_tpl->tpl_vars['type']->value=="operator") {?>
                                                        <button id="btnUpload" class="btn btn-flat btn-sm btn-default" data-id="<?php echo $_smarty_tpl->tpl_vars['test']->value->id;?>
" title="Unggah Hasil Pengujian"><i class="fa fa-upload"></i></button>
                                                    <?php } else { ?>
                                                        &nbsp;
                                                    <?php }?>
                                                <?php } else { ?>
                                                    <a href="<?php echo base_url();?>
asset/test_results/<?php echo $_smarty_tpl->tpl_vars['test']->value->url_file;?>
" class="btn btn-flat btn-sm btn-primary" title="Unduh Hasil Pengujian"><i class="fa fa-download"></i></a>
                                                <?php }?>
                                            <?php }?>
                                            <a href="<?php echo base_url();?>
view_test/<?php echo $_smarty_tpl->tpl_vars['test']->value->id;?>
" class="btn btn-flat btn-sm btn-info" title="Lihat Pengujian"><i class="fa fa-eye"></i></a>
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
    <div style="display: none">
        <form action="<?php echo base_url();?>
testing/upload_result" method="POST" enctype="multipart/form-data"> 
            <input type="hidden" name="test_id">
            <input type="file" name="test_result" onchange="$('#submitResult').click()">
            <input type="submit" id="submitResult" name="submit">
        </form>
    </div>

        <footer class="main-footer">
            <strong>Copyright &copy; <?php echo date('Y');?>
 <a href="#">Bahasa Langit</a>.</strong> &nbsp;&nbsp;All rights reserved.
        </footer>
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
        function ubahStatus(id, status) {
            $.ajax({
                url : "<?php echo base_url();?>
testing/update_status",
                type: "POST",
                data: "id="+id+"&status="+status,
                success: function(data) {
                    if(data == "Success") {
                        location.reload();
                    } else {
                        alert("Gagal Mengubah Status");
                    }
                }
            });
        }
        
        function hapusOrder(id) {
            $.ajax({
                url : "<?php echo base_url();?>
testing/delete_order",
                type: "POST",
                data: "id="+id,
                success: function(data) {
                    if(data == "Success") {
                        location.reload();
                    } else {
                        alert("Gagal Menghapus Order");
                    }
                }
            });
        }
        
        $(document).ready(function() {
            $("#tableTestHistory").dataTable({
                oLanguage: {
                    sUrl: '<?php echo base_url();?>
asset/js/plugins/datatables/Indonesian.json'
                }
            });
                        
            $("#btnUpload").click(function() {
                var test_id = $(this).attr("data-id");
                $("input[name='test_id']").val(test_id);
                $("input[name='test_result']").click();
            });
        });     
    <?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
