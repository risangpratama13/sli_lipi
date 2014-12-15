<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-15 12:03:04
         compiled from "application\views\testing\category.tpl" */ ?>
<?php /*%%SmartyHeaderCode:13911548ebe78e6a584-28830951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '83b7d3adccd01eb271fa89013dd36f2c94714629' => 
    array (
      0 => 'application\\views\\testing\\category.tpl',
      1 => 1418641381,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1418622047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '13911548ebe78e6a584-28830951',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548ebe78f2dab4_94632682',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548ebe78f2dab4_94632682')) {function content_548ebe78f2dab4_94632682($_smarty_tpl) {?><!DOCTYPE html>
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
            Pengujian
            <small>Kategori Pengujian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Pengujian</a></li>
            <li class="active"><a href="<?php echo base_url();?>
kategori_pengujian">Kategori Pengujian</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Kategori Pengujian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a class="btn btn-flat btn-primary" onclick="tambahKategori()">
                            <i class="fa fa-plus-circle"></i> Tambah Kategori Pengujian
                        </a>
                        <br/><br/>
                        <table id="tableCategory" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori Pengujian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['category'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['category']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['categories']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['category']->key => $_smarty_tpl->tpl_vars['category']->value) {
$_smarty_tpl->tpl_vars['category']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['category']->value->cat_name;?>
</td>
                                        <td>
                                            <button onclick="ubahKategori(<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
, '<?php echo $_smarty_tpl->tpl_vars['category']->value->cat_name;?>
')" title="Ubah Kategori" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                            <button type="button" onclick="deleteKategori(<?php echo $_smarty_tpl->tpl_vars['category']->value->id;?>
)" title="Hapus Kategori Pengujian" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable($_smarty_tpl->tpl_vars['no']->value+1, null, 0);?>
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
        
    <div class="modal fade" id="category-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" name="title">Tambah Kategori Pengujian</h4>
                </div>
                <?php echo form_open('testing/crud_categories');?>

                    <?php echo form_hidden('action','add');?>

                    <?php echo form_hidden('id',0);?>

                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-group">
                                <?php echo form_label('Kategori Pengujian','cat_name');?>

                                <?php echo form_input($_smarty_tpl->tpl_vars['cat_name']->value);?>
                            
                            </div>
                        </div>                        
                    </div>
                    <div class="modal-footer clearfix">
                        <button type="button" id="cancel" class="btn btn-danger" onclick="batalkanKategori()"><i class="fa fa-times"></i> Batalkan</button>
                        <?php echo form_submit('submit',"Simpan Kategori",'class="btn btn-flat btn-success pull-left"');?>

                    </div>
                <?php echo form_close();?>

            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->

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
        function deleteKategori(id) {
            var konfirmasi = confirm("Hapus Kategori Pengujian ?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>
testing/crud_categories",
                    data: "action=delete&id="+id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Kategori Berhasil Dihapus");
                            location.reload();
                        } else {
                            alert(" Kategori Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }
        
        function ubahKategori(id, name) {
            $('input[name="action"]').val("edit");
            $('input[name="id"]').val(id);
            $('input[name="cat_name"]').val(name);
            $('[name="title"]').text("Ubah Kategori Pengujian");
            $("#category-modal").modal('show');
        }

        function batalkanKategori() {
            $('input[name="action"]').val("");
            $('input[name="id"]').val("");
            $('input[name="cat_name"]').val("");
            $('[name="title"]').text("");
            $("#category-modal").modal('hide');
        }
        
        function tambahKategori() {
            $('input[name="action"]').val("add");
            $('input[name="id"]').val("0");
            $('input[name="cat_name"]').val("");
            $('[name="title"]').text("Tambah Kategori Pengujian");
            $("#category-modal").modal('show');
        }
        
        $(function () {
            $("#tableCategory").dataTable({
                oLanguage: {
                    sUrl: '<?php echo base_url();?>
asset/js/plugins/datatables/Indonesian.json'
                }
            });
        });
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
