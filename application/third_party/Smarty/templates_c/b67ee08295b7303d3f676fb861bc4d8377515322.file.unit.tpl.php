<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-15 11:04:38
         compiled from "application\views\master-data\unit.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5091548eb09e0be3a4-54902715%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'b67ee08295b7303d3f676fb861bc4d8377515322' => 
    array (
      0 => 'application\\views\\master-data\\unit.tpl',
      1 => 1418637789,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1418622047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5091548eb09e0be3a4-54902715',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548eb09e18d452_72011275',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548eb09e18d452_72011275')) {function content_548eb09e18d452_72011275($_smarty_tpl) {?><!DOCTYPE html>
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
            Master Data
            <small>Satuan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li class="active"><a href="<?php echo base_url();?>
unit">Satuan</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Satuan</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a class="btn btn-flat btn-primary" onclick="tambahSatuan()">
                            <i class="fa fa-plus-circle"></i> Tambah Satuan
                        </a>
                        <br/><br/>
                        <table id="tableUnit" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Satuan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['unit'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['unit']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['units']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['unit']->key => $_smarty_tpl->tpl_vars['unit']->value) {
$_smarty_tpl->tpl_vars['unit']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['unit']->value->unit_name;?>
</td>
                                        <td>
                                            <button onclick="ubahSatuan(<?php echo $_smarty_tpl->tpl_vars['unit']->value->id;?>
, '<?php echo $_smarty_tpl->tpl_vars['unit']->value->unit_name;?>
')" title="Ubah Satuan" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                            <button type="button" onclick="deleteSatuan(<?php echo $_smarty_tpl->tpl_vars['unit']->value->id;?>
)" title="Hapus Satuan" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
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
        
    <div class="modal fade" id="unit-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" name="title">Tambah Satuan</h4>
                </div>
                <?php echo form_open('master/crud_units');?>

                    <?php echo form_hidden('action','add');?>

                    <?php echo form_hidden('id',0);?>

                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-group">
                                <?php echo form_label('Nama Satuan','unit_name');?>

                                <?php echo form_input($_smarty_tpl->tpl_vars['unit_name']->value);?>
                            
                            </div>
                        </div>                        
                    </div>
                    <div class="modal-footer clearfix">
                        <button type="button" id="cancel" class="btn btn-danger" onclick="batalkanSatuan()"><i class="fa fa-times"></i> Batalkan</button>
                        <?php echo form_submit('submit',"Simpan Satuan",'class="btn btn-flat btn-success pull-left"');?>

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
        function deleteSatuan(id) {
            var konfirmasi = confirm("Hapus Satuan ?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>
master/crud_units",
                    data: "action=delete&id="+id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Satuan Berhasil Dihapus");
                            location.reload();
                        } else {
                            alert(" Satuan Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }
        
        function ubahSatuan(id, name) {
            $('input[name="action"]').val("edit");
            $('input[name="id"]').val(id);
            $('input[name="unit_name"]').val(name);
            $('[name="title"]').text("Ubah Satuan");
            $("#unit-modal").modal('show');
        }

        function batalkanSatuan() {
            $('input[name="action"]').val("");
            $('input[name="id"]').val("");
            $('input[name="unit_name"]').val("");
            $('[name="title"]').text("");
            $("#unit-modal").modal('hide');
        }
        
        function tambahSatuan() {
            $('input[name="action"]').val("add");
            $('input[name="id"]').val("0");
            $('input[name="unit_name"]').val("");
            $('[name="title"]').text("Tambah Stuan");
            $("#unit-modal").modal('show');
        }
        
        $(function () {
            var tableUnit = $("#tableUnit").dataTable({
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
