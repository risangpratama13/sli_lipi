<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-25 13:20:49
         compiled from "application\views\configuration\view_member.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19196548fae117852b8-35474556%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0f6bce61ab01ba19a5a258e68fa1ecd6252d4624' => 
    array (
      0 => 'application\\views\\configuration\\view_member.tpl',
      1 => 1426030107,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1429939767,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19196548fae117852b8-35474556',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548fae11854363_46243339',
  'variables' => 
  array (
    'user' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548fae11854363_46243339')) {function content_548fae11854363_46243339($_smarty_tpl) {?><!DOCTYPE html>
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
            Konfigurasi Pengguna
            <small>Profil <?php echo $_smarty_tpl->tpl_vars['member']->value->full_name;?>
</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Konfigurasi Pengguna</a></li>
            <li class="active">Profil <?php echo $_smarty_tpl->tpl_vars['member']->value->full_name;?>
</li>
        </ol>        
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="mailbox row">
            <div class="col-xs-12">
                <div class="box box-solid">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="box-header">
                                    <i class="fa fa-user"></i>
                                    <h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['member']->value->username;?>
</h3>                                   
                                </div>
                                <img src="<?php echo base_url();?>
asset/avatar/<?php echo $_smarty_tpl->tpl_vars['member']->value->photo;?>
" class="img-thumbnail">                                
                            </div><!-- /.col (LEFT) -->
                            <div class="col-md-9 col-sm-8">
                                <h3 class="header">Informasi Akun</h3>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <td>Username</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['member']->value->username;?>
</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td><?php echo $_smarty_tpl->tpl_vars['member']->value->full_name;?>
</td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['member']->value->sex=="M") {?>
                                                    Laki-laki
                                                <?php } else { ?>
                                                    Perempuan
                                                <?php }?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Golongan/Jabatan</td>
                                            <td>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['data_member']->value->category)) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['data_member']->value->category;?>
/<?php echo $_smarty_tpl->tpl_vars['data_member']->value->position;?>

                                                <?php }?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Tanggal Lahir</td>
                                            <td>
                                                <?php if (!empty($_smarty_tpl->tpl_vars['data_member']->value->birthplace)) {?>
                                                    <?php echo $_smarty_tpl->tpl_vars['data_member']->value->birthplace;?>
, <?php echo date('j F Y',strtotime($_smarty_tpl->tpl_vars['data_member']->value->birthday));?>

                                                <?php }?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td><?php if (!empty($_smarty_tpl->tpl_vars['data_member']->value)) {
echo $_smarty_tpl->tpl_vars['data_member']->value->address;
}?></td>
                                        </tr>
                                        <tr>
                                            <td>Kota/Kabupaten</td>
                                            <td><?php if (!empty($_smarty_tpl->tpl_vars['data_member']->value)) {
echo $_smarty_tpl->tpl_vars['data_member']->value->state_name;
}?></td>
                                        </tr>
                                        <tr>
                                            <td>Propinsi</td>
                                            <td><?php if (!empty($_smarty_tpl->tpl_vars['data_member']->value)) {
echo $_smarty_tpl->tpl_vars['data_member']->value->prov_name;
}?></td>
                                        </tr>
                                        <tr>
                                            <td>No. Telp</td>
                                            <td><?php if (!empty($_smarty_tpl->tpl_vars['data_member']->value)) {
echo $_smarty_tpl->tpl_vars['data_member']->value->phone;
}?></td>
                                        </tr>
                                        <tr>
                                            <td>Deputi Bidang</td>
                                            <td><?php if (!empty($_smarty_tpl->tpl_vars['data_member']->value)) {
echo $_smarty_tpl->tpl_vars['data_member']->value->researcher_name;
}?></td>
                                        </tr>
                                        <tr>
                                            <td>Satuan Kerja</td>
                                            <td><?php if (!empty($_smarty_tpl->tpl_vars['data_member']->value)) {
echo $_smarty_tpl->tpl_vars['data_member']->value->research_name;
}?></td>
                                        </tr>
                                        <tr>
                                            <td>Kelompok Penelitian</td>
                                            <td><?php if (!empty($_smarty_tpl->tpl_vars['data_member']->value)) {
echo $_smarty_tpl->tpl_vars['data_member']->value->res_group_name;
}?></td>
                                        </tr>
                                        <tr>
                                            <td>Terdaftar</td>
                                            <td><?php echo date('j F Y H:i:s',$_smarty_tpl->tpl_vars['member']->value->created_on);?>
</td>
                                        </tr>
                                        <tr>
                                            <td>Kelompok Pengguna</td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['member_operator']->value==true) {?>
                                                    Anggota dan Operator
                                                <?php } else { ?>
                                                    Anggota
                                                <?php }?>                                                
                                            </td>
                                        </tr>
                                        <?php if ($_smarty_tpl->tpl_vars['member_operator']->value==true) {?>
                                            <tr>
                                                <td>Operator Pengujian</td>
                                                <td>
                                                    <ul>
                                                        <?php  $_smarty_tpl->tpl_vars['operator'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['operator']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['operators']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['operator']->key => $_smarty_tpl->tpl_vars['operator']->value) {
$_smarty_tpl->tpl_vars['operator']->_loop = true;
?>
                                                            <li><?php echo $_smarty_tpl->tpl_vars['operator']->value->cat_name;?>
</li>
                                                            <?php } ?>
                                                    </ul>
                                                </td>
                                            </tr>                                        
                                        <?php }?>  
                                        <tr>
                                            <td>Status Akun</td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['member']->value->active==1) {?>
                                                    <span class="label label-success">Aktif</span>
                                                <?php } else { ?>
                                                    <span class="label label-danger">Tidak Aktif</span>
                                                <?php }?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Terakhir Masuk</td>
                                            <td>
                                                <?php if ($_smarty_tpl->tpl_vars['member']->value->last_login!=0) {?>
                                                    <?php echo date('j F Y H:i:s',$_smarty_tpl->tpl_vars['member']->value->last_login);?>

                                                <?php }?>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div><!-- /.col (RIGHT) -->
                        </div><!-- /.row -->
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col (MAIN) -->
        </div>
        <!-- MAILBOX END -->
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
