<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-25 13:22:39
         compiled from "application\views\notification\all_notif.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5724553b192ed45ab8-98365423%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e621f338e0e43b40b1c2ebca1bbeb9167e3b1841' => 
    array (
      0 => 'application\\views\\notification\\all_notif.tpl',
      1 => 1429942909,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1429939767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5724553b192ed45ab8-98365423',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_553b192ee0ce64_30739778',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_553b192ee0ce64_30739778')) {function content_553b192ee0ce64_30739778($_smarty_tpl) {?><!DOCTYPE html>
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
            Pemberitahuan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><a href="<?php echo base_url();?>
all_notif/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">Pemberitahuan</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <!-- The time line -->
                <ul class="timeline">
                    <?php if (!empty($_smarty_tpl->tpl_vars['notifications']->value)) {?>
                        <?php $_smarty_tpl->tpl_vars['notif_date'] = new Smarty_variable('', null, 0);?>
                        <?php  $_smarty_tpl->tpl_vars['notif'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['notif']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['notifications']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['notif']->key => $_smarty_tpl->tpl_vars['notif']->value) {
$_smarty_tpl->tpl_vars['notif']->_loop = true;
?>
                            <?php if ($_smarty_tpl->tpl_vars['notif_date']->value!=date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['notif']->value['notif_date']))) {?>
                                <li class="time-label">
                                    <span class="bg-red">
                                        <?php echo date('j F Y',strtotime($_smarty_tpl->tpl_vars['notif']->value['notif_date']));?>

                                    </span>
                                </li>
                                <?php $_smarty_tpl->tpl_vars['notif_date'] = new Smarty_variable(date('Y-m-d',strtotime($_smarty_tpl->tpl_vars['notif']->value['notif_date'])), null, 0);?>
                            <?php }?>
                            <li>
                                <i class="<?php echo notif_category($_smarty_tpl->tpl_vars['notif']->value['notif_cat']);?>
"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> <?php echo date('H:i',strtotime($_smarty_tpl->tpl_vars['notif']->value['notif_date']));?>
</span>
                                    <h3 class="timeline-header no-border"><?php echo $_smarty_tpl->tpl_vars['notif']->value['message'];?>
</h3>
                                    <div class='timeline-footer'>
                                        <a class="btn btn-primary btn-xs" href="<?php echo $_smarty_tpl->tpl_vars['notif']->value['notif_link'];?>
">Lihat Detail</a>
                                    </div>
                                </div>
                            </li>
                        <?php } ?>
                    <?php }?>
                    <li>
                        <i class="fa fa-clock-o"></i>
                    </li>
                </ul>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->

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

</body>
</html><?php }} ?>
