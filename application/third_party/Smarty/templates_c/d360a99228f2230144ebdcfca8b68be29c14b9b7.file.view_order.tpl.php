<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-25 11:06:51
         compiled from "application\views\order\view_order.tpl" */ ?>
<?php /*%%SmartyHeaderCode:298075497e6499e6a10-52466132%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd360a99228f2230144ebdcfca8b68be29c14b9b7' => 
    array (
      0 => 'application\\views\\order\\view_order.tpl',
      1 => 1429934124,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1429934808,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '298075497e6499e6a10-52466132',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5497e649a54021_79906721',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5497e649a54021_79906721')) {function content_5497e649a54021_79906721($_smarty_tpl) {?><!DOCTYPE html>
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
        
    <section class="content-header">
        <h1>
            Invoice
            <small>#<?php echo sprintf("%06s",$_smarty_tpl->tpl_vars['order']->value->id);?>
</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="<?php echo base_url();?>
order">Pengajuan Pengujian</a></li>
            <li class="active">Invoice #<?php echo sprintf("%06s",$_smarty_tpl->tpl_vars['order']->value->id);?>
</li>
        </ol>
    </section>
    <section class="content invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <img src="<?php echo base_url();?>
asset/img/favicon.png"> 
                    Sistem Layanan Internal - Pusat Penelitian Fisika LIPI                    
                </h2>
            </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">                
                <address>
                    <strong><?php echo $_smarty_tpl->tpl_vars['order']->value->full_name;?>
</strong><br>
                    <?php if (!empty($_smarty_tpl->tpl_vars['member']->value)) {?>
                        <?php echo $_smarty_tpl->tpl_vars['member']->value->address;?>
<br>
                        <?php echo $_smarty_tpl->tpl_vars['member']->value->state_name;?>
, <?php echo $_smarty_tpl->tpl_vars['member']->value->prov_name;?>
<br>
                        Phone: <?php echo $_smarty_tpl->tpl_vars['member']->value->phone;?>

                    <?php }?>
                </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">

            </div>
            <div class="col-sm-4 invoice-col">
                <b>Invoice #<?php echo sprintf("%06s",$_smarty_tpl->tpl_vars['order']->value->id);?>
</b><br/>
                <br/>
                <b>Order ID:</b> <?php echo $_smarty_tpl->tpl_vars['order']->value->code;?>
<br/>
                <b>Tanggal Pengajuan:</b> <?php echo date("j F Y",strtotime($_smarty_tpl->tpl_vars['order']->value->order_date));?>
<br/>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Pengujian</th>
                            <th>Jumlah</th>                            
                            <th>Operator</th>
                            <th>Tanggal Pengujian</th>
                            <th>Status</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php  $_smarty_tpl->tpl_vars['test_order'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['test_order']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['test_orders']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['test_order']->key => $_smarty_tpl->tpl_vars['test_order']->value) {
$_smarty_tpl->tpl_vars['test_order']->_loop = true;
?>
                            <tr>    
                                <td rowspan="2"><?php echo $_smarty_tpl->tpl_vars['test_order']->value->testing_name;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['test_order']->value->qty;?>
</td>
                                <td><?php echo $_smarty_tpl->tpl_vars['test_order']->value->full_name;?>
</td>
                                <?php if ($_smarty_tpl->tpl_vars['test_order']->value->start_date=="0000-00-00 00:00:00") {?>
                                    <td>Belum Diatur</td>
                                <?php } else { ?>
                                    <td><?php echo date("j F Y H:i",strtotime($_smarty_tpl->tpl_vars['test_order']->value->start_date));?>
</td>
                                <?php }?>
                                <?php if ($_smarty_tpl->tpl_vars['test_order']->value->status=="P") {?>
                                    <td><span class="label label-warning">Pending</span></td>
                                <?php } elseif ($_smarty_tpl->tpl_vars['test_order']->value->status=="AL") {?>
                                    <td><span class="label label-success">Disetujui Ketua Kelitian</span></td>
                                <?php } elseif ($_smarty_tpl->tpl_vars['test_order']->value->status=="AO") {?>
                                    <td><span class="label label-success">Disetujui Operator</span></td>                                        
                                <?php } elseif ($_smarty_tpl->tpl_vars['test_order']->value->status=="D") {?>
                                    <td><span class="label label-danger">Denied</span></td>
                                <?php } elseif ($_smarty_tpl->tpl_vars['test_order']->value->status=="F") {?>
                                    <td><span class="label label-info">Finish</span></td>
                                <?php }?>                                     
                                <td>Rp. <?php echo number_format($_smarty_tpl->tpl_vars['test_order']->value->subtotal,'2',',','.');?>
</td>
                            </tr>
                            <tr>
                                <td colspan="5"><b>Penjelasan : </b><?php echo $_smarty_tpl->tpl_vars['test_order']->value->description;?>
</td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                <p class="lead">Keterangan</p>
                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    Tanggal Pengujian Diatur Oleh Operator Pengujian Yang Dipilih.<br/> 
                    Status Pengujian Akan Berubah Jika Sudah Mendapatkan Konfirmasi Dari Operator.
                </p>
            </div><!-- /.col -->
            <div class="col-xs-6">
                <p class="lead">Tanggal Pengajuan <?php echo date("d/m/Y",strtotime($_smarty_tpl->tpl_vars['order']->value->order_date));?>
</p>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Total Biaya Pengujian:</th>
                            <td>Rp. <?php echo number_format($_smarty_tpl->tpl_vars['order']->value->total,'2',',','.');?>
</td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->
        <div class="row" style="margin-bottom: 30px;">
            <div class="col-xs-4 pull-right">
                <p align="center"><strong>Ketua Kelitian</strong></p>
                <br/><br/><br/><br/><br/>
                <p align="center">(&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    )</p>
            </div><!-- /.col -->
        </div>

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <button class="btn btn-flat btn-primary pull-right" onclick="window.print();"><i class="fa fa-print"></i> Cetak Invoice</button>                
            </div>
        </div>
    </section>

        <footer class="main-footer no-print">
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
                                html += "<i class='" + notif_category(data.notifikasi[i].category) + "'></i> " + data.notifikasi[i].message;
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
                                        html += "<i class='" + notif_category(data[i].category) + "'></i>"
                                        html += data[i].message;
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

    function notif_category(category) {
        var iclass;
        switch (category) {
            case 1:
            case 2:
            case 4:
                iclass = "fa fa-users info";
                break;
            case 3:
                iclass = "ion ion-ios7-people warning";
                break;
            case 5:
                iclass = "fa fa-money info";
                break;
            case 6:
                iclass = "fa fa-money success";
                break;
            case 7:
                iclass = "fa fa-money danger";
                break;
            case 8:
                iclass = "fa fa-book info";
                break;
            case 9:
                iclass = "fa fa-book success";
                break;
            case 10:
                iclass = "fa fa-book danger";
                break;
            case 11:
                iclass = "fa fa-flag-checkered";
                break;
        }
        return iclass;
    }
<?php echo '</script'; ?>
>

</body>
</html><?php }} ?>
