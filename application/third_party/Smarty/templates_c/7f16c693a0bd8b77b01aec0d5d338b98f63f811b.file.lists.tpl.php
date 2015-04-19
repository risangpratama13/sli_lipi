<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-19 07:49:16
         compiled from "application\views\master-data\research_group\lists.tpl" */ ?>
<?php /*%%SmartyHeaderCode:967154fa71e1ba4772-49114902%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7f16c693a0bd8b77b01aec0d5d338b98f63f811b' => 
    array (
      0 => 'application\\views\\master-data\\research_group\\lists.tpl',
      1 => 1425774965,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1429400112,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '967154fa71e1ba4772-49114902',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54fa71e1c54424_11549920',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54fa71e1c54424_11549920')) {function content_54fa71e1c54424_11549920($_smarty_tpl) {?><!DOCTYPE html>
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
            <small>Kelompok Penelitian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li class="active"><a href="<?php echo base_url();?>
research_group">Kelompok Penelitian</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Kelompok Penelitian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a class="btn btn-flat btn-primary" href="<?php echo base_url();?>
research_group/add">
                            <i class="fa fa-plus-circle"></i> Tambah Kelompok Penelitian
                        </a>
                        <br/><br/>
                        <table id="tableResearchGroup" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kelompok Penelitian</th>
                                    <th>Deputi Bidang</th>
                                    <th>Satuan Kerja</th>
                                    <th>Ketua Ketelitian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_smarty_tpl->tpl_vars['no'] = new Smarty_variable(1, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['research_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['research_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['research_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['research_group']->key => $_smarty_tpl->tpl_vars['research_group']->value) {
$_smarty_tpl->tpl_vars['research_group']->_loop = true;
?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['no']->value;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['research_group']->value->res_group_name;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['research_group']->value->researcher_name;?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['research_group']->value->research_name;?>
</td>
                                        <td>
                                            <?php if ($_smarty_tpl->tpl_vars['research_group']->value->user_id!=null) {?>
                                                <?php echo $_smarty_tpl->tpl_vars['users']->value[$_smarty_tpl->tpl_vars['research_group']->value->user_id];?>

                                            <?php }?>
                                        </td>
                                        <td>
                                            <a href="<?php echo base_url();?>
research_group/edit/<?php echo $_smarty_tpl->tpl_vars['research_group']->value->id;?>
" title="Ubah Kelompok Penelitian" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <button type="button" onclick="deleteResearchGroup(<?php echo $_smarty_tpl->tpl_vars['research_group']->value->id;?>
)" title="Hapus Kelompok Penelitian" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
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
        function deleteResearchGroup(id) {
            var konfirmasi = confirm("Hapus Kelompok Penelitian ?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "<?php echo base_url();?>
master/delete_research_group",
                    data: "id="+id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Kelompok Penelitian Berhasil Dihapus");
                            location.reload();
                        } else {
                            alert(" Kelompok Penelitian Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }
        
        $(function () {
            var tableResearchGroup = $("#tableResearchGroup").dataTable({
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
