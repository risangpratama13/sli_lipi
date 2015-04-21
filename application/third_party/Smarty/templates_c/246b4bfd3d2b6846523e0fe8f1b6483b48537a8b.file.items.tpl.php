<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-21 06:27:46
         compiled from "application\views\account\items.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12181549210bca81cf2-84654804%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '246b4bfd3d2b6846523e0fe8f1b6483b48537a8b' => 
    array (
      0 => 'application\\views\\account\\items.tpl',
      1 => 1424731250,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1429400112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12181549210bca81cf2-84654804',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_549210bcb83a36_40609130',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_549210bcb83a36_40609130')) {function content_549210bcb83a36_40609130($_smarty_tpl) {?><!DOCTYPE html>
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
            Item
            <small>Daftar Item</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Item</a></li>
            <li class="active"><a href="<?php echo base_url();?>
item">Daftar Item</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Item</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <?php if (in_array("members",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                            <a href="<?php echo base_url();?>
tambah_item" class="btn btn-flat btn-primary">
                                <i class="fa fa-plus-circle"></i> Tambah Item
                            </a>                            
                            <br/><br/>
                        <?php }?>
                        <table id="tableAccount" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <?php if (in_array("admin",$_smarty_tpl->tpl_vars['groups']->value)||in_array("superadmin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                                        <th>Anggota</th>
                                        <?php }?>
                                    <th>Judul Paper</th>
                                    <th>Kategori</th>
                                    <th>Jumlah Penulis</th>
                                    <th>Tanggal Upload</th>
                                    <th>Poin</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php  $_smarty_tpl->tpl_vars['item'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['item']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['items']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['item']->key => $_smarty_tpl->tpl_vars['item']->value) {
$_smarty_tpl->tpl_vars['item']->_loop = true;
?>
                                    <tr>
                                        <?php if (in_array("admin",$_smarty_tpl->tpl_vars['groups']->value)||in_array("superadmin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                                            <td><?php echo $_smarty_tpl->tpl_vars['item']->value->full_name;?>
</td>                                        
                                        <?php }?>
                                        <?php if (file_exists("asset/items/".((string)$_smarty_tpl->tpl_vars['item']->value->url))) {?>
                                            <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable("asset/items/".((string)$_smarty_tpl->tpl_vars['item']->value->url), null, 0);?>
                                        <?php } else { ?>                                            
                                            <?php $_smarty_tpl->tpl_vars['url'] = new Smarty_variable($_smarty_tpl->tpl_vars['item']->value->url, null, 0);?>
                                        <?php }?>
                                        <td><a href="<?php echo $_smarty_tpl->tpl_vars['url']->value;?>
" target="_blank"><?php echo $_smarty_tpl->tpl_vars['item']->value->item_title;?>
</a></td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->type_name;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->author_num;?>
</td>
                                        <td><?php echo date('j F Y H:i:s',strtotime($_smarty_tpl->tpl_vars['item']->value->upload_date));?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['item']->value->type_point;?>
/<?php echo $_smarty_tpl->tpl_vars['item']->value->author_num;?>
</td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['item']->value->status=="O") {?>
                                                <span class="label label-success">Ok</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->status=="P") {?>
                                                <span class="label label-warning">Pending</span>
                                            <?php } elseif ($_smarty_tpl->tpl_vars['item']->value->status=="D") {?>
                                                <span class="label label-danger">Denied</span>
                                            <?php }?>
                                        </td>
                                        <td>
                                            <?php if (in_array("admin",$_smarty_tpl->tpl_vars['groups']->value)||in_array("superadmin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value->status=="P") {?>
                                                    <button title="Setujui Item" onclick="ubahStatus(<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
, 'O')" class="btn btn-flat btn-sm btn-success"><i class="fa fa-check"></i></button>
                                                    <button title="Tolak Item" onclick="ubahStatus(<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
, 'D')" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-times"></i></button>                                                    
                                                <?php }?>
                                            <?php } else { ?>
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value->status=="P") {?>
                                                    <a href="<?php echo base_url();?>
ubah_item/<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" title="Ubah Item" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                                    <button title="Hapus Item" onclick="hapusItem(<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
)" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                                                <?php }?>
                                            
                                                <?php if ($_smarty_tpl->tpl_vars['item']->value->status=="D") {?>
                                                    <button title="Hapus Item" onclick="hapusItem(<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
)" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                                                <?php }?>
                                            <?php }?>
                                            <textarea id="desc<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
" style="display: none"><?php echo $_smarty_tpl->tpl_vars['item']->value->description;?>
</textarea>
                                            <button onclick="openDesc(<?php echo $_smarty_tpl->tpl_vars['item']->value->id;?>
)" title="Deskripsi Item" class="btn btn-flat btn-sm btn-info"><i class="fa fa-align-left"></i></button>                                         
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
        
    <div class="modal fade" id="description-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-align-left"></i> Deskripsi Item</h4>
                </div>
                <div class="modal-body">
                    <p id="block-desc"></p>
                </div>                    
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

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
            $("#tableAccount").dataTable({
                oLanguage: {
                    sUrl: '<?php echo base_url();?>
asset/js/plugins/datatables/Indonesian.json'
                }
            });            
        });

        function ubahStatus(id, status) {
            if(status == "O") {
                var konfirmasi = confirm("Setujui Item ?");
            } else if(status == "D") {
                var konfirmasi = confirm("Tolak Item ?");
            }
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>
account/edit_item",
                    data: "id=" + id + "&status="+status,
                    success: function (data) {
                        alert(data);
                        location.reload();
                    }
                });
            }
        }

        function hapusItem(id) {
            var konfirmasi = confirm("Hapus Item ?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>
account/delete_item",
                    data: "id=" + id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Item Berhasil Dihapus");
                            location.reload();
                        } else {
                            alert(" Item Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }
        
        function openDesc(id) {
            var desc = $("#desc"+id).val();
            $("#block-desc").text(desc);
            $("#description-modal").modal('show');            
        }
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
