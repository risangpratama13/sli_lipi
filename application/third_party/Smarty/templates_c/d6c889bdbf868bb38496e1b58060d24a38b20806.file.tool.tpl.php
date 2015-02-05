<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-05 01:29:14
         compiled from "application\views\master-data\tool.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1648854d2b95a800f78-82410951%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd6c889bdbf868bb38496e1b58060d24a38b20806' => 
    array (
      0 => 'application\\views\\master-data\\tool.tpl',
      1 => 1423096135,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1418622047,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1648854d2b95a800f78-82410951',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54d2b95a8c0629_55134264',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54d2b95a8c0629_55134264')) {function content_54d2b95a8c0629_55134264($_smarty_tpl) {?><!DOCTYPE html>
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
            <small>Tool</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li class="active"><a href="<?php echo base_url();?>
tool">Alat Pengujian</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Alat Pengujian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a class="btn btn-flat btn-primary" onclick="tambahTool()">
                            <i class="fa fa-plus-circle"></i> Tambah Alat Pengujian
                        </a>
                        <br/><br/>
                        <table id="tableTool" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Alat Pengujian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['tool'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['tool']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['tools']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['tool']->key => $_smarty_tpl->tpl_vars['tool']->value) {
$_smarty_tpl->tpl_vars['tool']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['tool']->value->tool_name;?>
</td>
                                        <td>
                                            <button onclick="ubahTool(<?php echo $_smarty_tpl->tpl_vars['tool']->value->id;?>
, '<?php echo $_smarty_tpl->tpl_vars['tool']->value->tool_name;?>
')" title="Ubah Alat Pengujian" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                            <button type="button" onclick="deleteTool(<?php echo $_smarty_tpl->tpl_vars['tool']->value->id;?>
)" title="Hapus Alat Pengujian" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
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
                    <h4 class="modal-title" name="title">Tambah Alat Pengujian</h4>
                </div>
                <?php echo form_open('master/crud_tools');?>

                    <?php echo form_hidden('action','add');?>

                    <?php echo form_hidden('id',0);?>

                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-group">
                                <?php echo form_label('Nama Alat Pengujian','tool_name');?>

                                <?php echo form_input($_smarty_tpl->tpl_vars['tool_name']->value);?>
                            
                            </div>
                        </div>                        
                    </div>
                    <div class="modal-footer clearfix">
                        <button type="button" id="cancel" class="btn btn-danger" onclick="batalkanTool()"><i class="fa fa-times"></i> Batalkan</button>
                        <?php echo form_submit('submit',"Simpan",'class="btn btn-flat btn-success pull-left"');?>

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
        function deleteTool(id) {
            var konfirmasi = confirm("Hapus Alat Pengujian?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>
master/crud_tools",
                    data: "action=delete&id="+id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Data Alat Pengujian Berhasil Dihapus");
                            location.reload();
                        } else {
                            alert(" Data Alat Pengujian Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }
        
        function ubahTool(id, name) {
            $('input[name="action"]').val("edit");
            $('input[name="id"]').val(id);
            $('input[name="tool_name"]').val(name);
            $('[name="title"]').text("Ubah Alat Pengujian");
            $("#unit-modal").modal('show');
        }

        function batalkanTool() {
            $('input[name="action"]').val("");
            $('input[name="id"]').val("");
            $('input[name="tool_name"]').val("");
            $('[name="title"]').text("");
            $("#unit-modal").modal('hide');
        }
        
        function tambahTool() {
            $('input[name="action"]').val("add");
            $('input[name="id"]').val("0");
            $('input[name="tool_name"]').val("");
            $('[name="title"]').text("Tambah Alat Pengujian");
            $("#unit-modal").modal('show');
        }
        
        $(function () {
            var tableTool = $("#tableTool").dataTable({
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
