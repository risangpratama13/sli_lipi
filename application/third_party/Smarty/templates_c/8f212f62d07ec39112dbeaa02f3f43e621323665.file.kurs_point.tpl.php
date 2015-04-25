<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-25 12:23:22
         compiled from "application\views\master-data\kurs_point.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5050548eb09971e046-90697013%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8f212f62d07ec39112dbeaa02f3f43e621323665' => 
    array (
      0 => 'application\\views\\master-data\\kurs_point.tpl',
      1 => 1429573018,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1429939367,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5050548eb09971e046-90697013',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548eb0997ba479_39771825',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548eb0997ba479_39771825')) {function content_548eb0997ba479_39771825($_smarty_tpl) {?><!DOCTYPE html>
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
            Master Data
            <small>Konfigurasi Poin</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li class="active"><a href="<?php echo base_url();?>
config_point">Konfigurasi Poin</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-rouble"></i>
                        <h3 class="box-title">Kurs Poin Hari Ini</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-striped">
                            <tr>
                                <td>Jumlah Poin</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['kurs']->value->point;?>
 Poin</td>
                            </tr>
                            <tr>
                                <td>Nilai Rupiah</td>
                                <td>
                                    <span class="label label-info">
                                        Rp. <?php echo number_format($_smarty_tpl->tpl_vars['kurs']->value->idr,'2',',','.');?>

                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>Terakhir Diubah</td>
                                <td><?php echo date("j F Y H:m:s",strtotime($_smarty_tpl->tpl_vars['kurs']->value->last_update));?>
</td>
                            </tr>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- ./col -->
            <div class="col-md-4">
                <div class="box box-warning">
                    <div class="box-header">
                        <i class="fa fa-edit"></i>
                        <h3 class="box-title">Ubah Kurs Poin</h3>
                    </div><!-- /.box-header -->
                    <?php echo form_open('master/config_point');?>

                    <div class="box-body">
                        <label for="idr">Nilai Tukar Rupiah</label>                            
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <?php echo form_input($_smarty_tpl->tpl_vars['form_kurs']->value);?>

                            <span class="input-group-addon">.00</span>                            
                        </div>
                        <?php echo form_error('idr','<p class="help-block text-red">','</p>');?>

                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <?php echo form_submit('ubah_kurs',"Ubah Kurs",'class="btn btn-flat btn-warning"');?>

                    </div>
                    <?php echo form_close();?>

                </div><!-- /.box -->
            </div><!-- ./col -->
            <div class="col-md-4">
                <div class="box">
                    <div class="box-header">
                        <i class="fa fa-keyboard-o"></i>
                        <h3 class="box-title">Kalkulator Kurs</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="input-group">
                            <input id="poin" class="form-control" placeholder="Jumlah Poin" onkeyup="calculator(event)">
                            <span class="input-group-addon">Poin</span>                            
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <label for="idr">Nilai Tukar Rupiah</label>                            
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input id="idr" class="form-control" disabled="">                            
                            <span class="input-group-addon">.00</span>                            
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- ./col -->
        </div><!-- /.row -->
        <div class="row">                
            <div class="col-md-4">
                <div class="box box-success">
                    <div class="box-header">
                        <i class="fa fa-money"></i>
                        <h3 class="box-title">Saldo Awal Anggota</h3>
                    </div><!-- /.box-header -->
                    <?php echo form_open('master/config_point');?>

                    <div class="box-body">
                        <label for="init_saldo">Saldo Awal</label>                            
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <?php echo form_input($_smarty_tpl->tpl_vars['form_init_saldo']->value);?>

                            <span class="input-group-addon">.00</span>                            
                        </div>
                        <?php echo form_error('init_saldo','<p class="help-block text-red">','</p>');?>

                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <?php echo form_submit('ubah_init_saldo',"Ubah Saldo Awal",'class="btn btn-flat btn-warning"');?>

                    </div>
                    <?php echo form_close();?>

                </div><!-- /.box -->
            </div><!-- ./col -->
            <div class="col-md-4">
                <div class="box box-primary">
                    <div class="box-header">
                        <i class="fa fa-ruble"></i>
                        <h3 class="box-title">Persentase Poin Operator</h3>
                    </div><!-- /.box-header -->
                    <?php echo form_open('master/config_point');?>

                    <div class="box-body">
                        <label for="test_percent">Persentase Poin</label>                            
                        <div class="input-group">
                            <?php echo form_input($_smarty_tpl->tpl_vars['form_test_percent']->value);?>

                            <span class="input-group-addon">%</span>                            
                        </div>
                        <?php echo form_error('test_percent','<p class="help-block text-red">','</p>');?>

                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <?php echo form_submit('ubah_test_percent',"Ubah Persentase Poin",'class="btn btn-flat btn-warning"');?>

                    </div>
                    <?php echo form_close();?>

                </div><!-- /.box -->
            </div><!-- ./col -->
            <div class="col-md-4">
                <div class="box box-danger">
                    <div class="box-header">
                        <i class="fa fa-exclamation-triangle"></i>
                        <h3 class="box-title">Konfigurasi Minimum Saldo</h3>
                    </div><!-- /.box-header -->
                    <?php echo form_open('master/config_point');?>

                    <div class="box-body">
                        <label for="min_saldo">Minimum Saldo</label>                            
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <?php echo form_input($_smarty_tpl->tpl_vars['form_min_saldo']->value);?>

                            <span class="input-group-addon">.00</span>                            
                        </div>
                        <?php echo form_error('test_percent','<p class="help-block text-red">','</p>');?>

                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <?php echo form_submit('ubah_min_saldo',"Ubah Minimum Saldo",'class="btn btn-flat btn-warning"');?>

                    </div>
                    <?php echo form_close();?>

                </div><!-- /.box -->
            </div><!-- ./col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

        <div class="main-footer">
            <strong>Copyright &copy; <?php echo date('Y');?>
 <a href="#">Bahasa Langit</a>.</strong> &nbsp;&nbsp;All rights reserved.
        </div>
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

<!-- SLI LIPI App -->
<?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/Sli_Lipi/app.js" type="text/javascript"><?php echo '</script'; ?>
>
<!-- Addons Scripts -->
<?php echo '<script'; ?>
 type="text/javascript">
    $(document).ready(function () {
        check();
        $("#notif").click(function () {
            var i;
            var html = "";
            $.ajax({
                url: "<?php echo base_url();?>
vendor/slim/slim/notif/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
",
                dataType: "json",
                success: function (data) {
                    if (data.status != "error") {
                        if (parseInt(data.total) > 0) {
                            var string_header = "Ada " + data.total + " Pemberitahuan Baru";
                            $("#notif_header").text(string_header);
                            for (i in data.notifikasi) {
                                html += "<li>";
                                html += "<a href='" + data.notifikasi[i].link + "'>";
                                html += data.notifikasi[i].message;
                                html += "</a>";
                                html += "</li>";

                                $.ajax({
                                    url: "<?php echo base_url();?>
vendor/slim/slim/notif/update/" + data.notifikasi[i].id,
                                    success: function (data) {
                                    }
                                });
                            }

                            $.ajax({
                                url: "<?php echo base_url();?>
vendor/slim/slim/notif/update/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
",
                                success: function (data) {
                                }
                            });

                            $("#header_content").empty();
                            $("#header_content").append(html);
                    } else {
                        $("#notif_header").empty();
                        $("#notif_header").text("Tidak Ada Pemberitahuan Baru");
                        $.ajax({
                            url: "<?php echo base_url();?>
vendor/slim/slim/notif/old/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
",
                            dataType: "json",
                            success: function (data) {
                                if (data.length != 0) {
                                    for (i in data) {
                                        html += "<li>";
                                        html += "<a href='" + data[i].link + "'>";
                                        html += "<p style='padding-left: 10px;padding-top: 2px;'>"+data[i].message+"</p>";
                                        html += "</a>";
                                        html += "</li>";
                                    }
                                    $("#header_content").empty();
                                    $("#header_content").append(html);
                                }
                            }
                        });
                    }
                }
            }
        });
    });
});

    function check() {
        $.ajax({
            url: "<?php echo base_url();?>
vendor/slim/slim/notif/check/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
",
            dataType: "json",
            success: function (data) {
                if (data.status == "success") {
                    if (data.total == 0) {
                        $("#notif_count").empty();
                    } else {
                        $("#notif_count").empty();
                        $("#notif_count").text(data.total);
                    }
                }
            }
        });
    }    
<?php echo '</script'; ?>
>

    <?php echo '<script'; ?>
 type="text/javascript">
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
        
        function calculator(evt) {
            if(isNumberKey(evt)) {
                var nilai_rupiah = <?php echo $_smarty_tpl->tpl_vars['kurs']->value->idr;?>
;
                var point = document.getElementById("poin").value;
                var idr = parseFloat(nilai_rupiah) * parseFloat(point);
                document.getElementById("idr").value = idr;
            }
        }
    <?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
