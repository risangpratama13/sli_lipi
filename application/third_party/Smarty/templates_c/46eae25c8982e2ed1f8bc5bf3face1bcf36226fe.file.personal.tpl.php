<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-11 20:10:00
         compiled from "application\views\configuration\profile\personal.tpl" */ ?>
<?php /*%%SmartyHeaderCode:307235489837a29c369-09293533%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '46eae25c8982e2ed1f8bc5bf3face1bcf36226fe' => 
    array (
      0 => 'application\\views\\configuration\\profile\\personal.tpl',
      1 => 1418303397,
      2 => 'file',
    ),
    '68cc9180bc6fb0dd465914a3c57d03a07aa9bace' => 
    array (
      0 => 'application\\views\\configuration\\profile\\profile.tpl',
      1 => 1418302912,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1418213239,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '307235489837a29c369-09293533',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5489837a3b1929_28948546',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5489837a3b1929_28948546')) {function content_5489837a3b1929_28948546($_smarty_tpl) {?><!DOCTYPE html>
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
        <?php if (in_array("admin",$_smarty_tpl->tpl_vars['groups']->value)||in_array("superadmin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
            <h1>
                Konfigurasi Pengguna
                <small>Profil <?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#">Konfigurasi Pengguna</a></li>
                <li><a href="<?php echo base_url();?>
profil">Profil</a></li>
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
</li>
            </ol>
        <?php } else { ?>
            <h1>
                Profil
                <small><?php echo $_smarty_tpl->tpl_vars['user']->value->full_name;?>
</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="<?php echo base_url();?>
profil">Profil</a></li>
                <li class="active"><?php echo $_smarty_tpl->tpl_vars['action']->value;?>
</li>
            </ol>
        <?php }?>
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
                                    <h3 class="box-title"><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</h3>                                   
                                </div>
                                <div id="input_file" style="display: none;"> 
                                    <form id="avatar" method="POST" enctype="multipart/form-data" action="<?php echo base_url();?>
auth/account_setting/change_avatar"> 
                                        <input type="file" id="file_avatar" name="file_avatar"/>
                                    </form>
                                </div>
                                <img src="<?php echo base_url();?>
asset/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value->photo;?>
" class="img-thumbnail"><br/><br/>
                                <button onclick="$('#file_avatar').click();" class="btn btn-block btn-primary"><i class="fa fa-picture-o"></i> Ubah Foto</button>
                                <!-- Navigation - folders-->
                                <div style="margin-top: 15px;">
                                
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="<?php echo base_url();?>
profil"><i class="fa fa-info-circle"></i> Informasi Pribadi</a></li>
        <li><a href="#"><i class="fa fa-pencil-square-o"></i> Ubah Informasi Pribadi</a></li>
        <li><a href="#"><i class="fa fa-unlock"></i> Ubah Password</a></li>
    </ul>

                            </div>
                        </div><!-- /.col (LEFT) -->
                        <div class="col-md-9 col-sm-8">
                        
    <h3 class="header">Informasi Akun</h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <td>Username</td>
                <td><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</td>
            </tr>
            <?php if (in_array("members",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                <tr>
                    <td>Nama Lengkap</td>
                    <td><?php echo $_smarty_tpl->tpl_vars['user']->value->full_name;?>
</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        <?php if ($_smarty_tpl->tpl_vars['user']->value->sex=="M") {?>
                            Laki-laki
                        <?php } else { ?>
                            Perempuan
                        <?php }?>
                    </td>
                </tr>
                <tr>
                    <td>Golongan/Jabatan</td>
                    <td>
                        <?php if (!empty($_smarty_tpl->tpl_vars['member']->value)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['member']->value->category;?>
/<?php echo $_smarty_tpl->tpl_vars['member']->value->position;?>

                        <?php }?>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Tanggal Lahir</td>
                    <td>
                        <?php if (!empty($_smarty_tpl->tpl_vars['member']->value)) {?>
                            <?php echo $_smarty_tpl->tpl_vars['member']->value->birthplace;?>
, <?php echo date('j F Y',strtotime($_smarty_tpl->tpl_vars['member']->value->birthday));?>

                        <?php }?>
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><?php if (!empty($_smarty_tpl->tpl_vars['member']->value)) {
echo $_smarty_tpl->tpl_vars['member']->value->address;?>
}<?php }?></td>
                </tr>
                <tr>
                    <td>Kota/Kabupaten</td>
                    <td><?php if (!empty($_smarty_tpl->tpl_vars['member']->value)) {
echo $_smarty_tpl->tpl_vars['member']->value->state_name;?>
}<?php }?></td>
                </tr>
                <tr>
                    <td>Propinsi</td>
                    <td><?php if (!empty($_smarty_tpl->tpl_vars['member']->value)) {
echo $_smarty_tpl->tpl_vars['member']->value->prov_name;?>
}<?php }?></td>
                </tr>
                <tr>
                    <td>No. Telp</td>
                    <td><?php if (!empty($_smarty_tpl->tpl_vars['member']->value)) {
echo $_smarty_tpl->tpl_vars['member']->value->phone;?>
}<?php }?></td>
                </tr>
                <tr>
                    <td>Kelompok Peneliti</td>
                    <td><?php if (!empty($_smarty_tpl->tpl_vars['member']->value)) {
echo $_smarty_tpl->tpl_vars['member']->value->researcher_name;?>
}<?php }?></td>
                </tr>
                <tr>
                    <td>Kelompok Penelitian</td>
                    <td><?php if (!empty($_smarty_tpl->tpl_vars['member']->value)) {
echo $_smarty_tpl->tpl_vars['member']->value->research_name;?>
}<?php }?></td>
                </tr>
            <?php }?>
            <tr>
                <td>Terdaftar</td>
                <td><?php echo date('j F Y H:i:s',$_smarty_tpl->tpl_vars['user']->value->created_on);?>
</td>
            </tr>
            <tr>
                <td>Kelompok Pengguna</td>
                <td>
                    <?php if (in_array("members",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                        <?php if (in_array("operators",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                            Anggota dan Operator
                        <?php } else { ?>
                            Anggota
                        <?php }?>
                    <?php } elseif (in_array("superadmin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                        Superadministrator
                    <?php } elseif (in_array("admin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                        Administrator    
                    <?php }?>
                </td>
            </tr>
            <tr>
                <td>Status Akun</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->active==1) {?>
                        <span class="label label-success">Aktif</span>
                    <?php } else { ?>
                        <span class="label label-danger">Tidak Aktif</span>
                    <?php }?>
                </td>
            </tr>
            <tr>
                <td>Terakhir Masuk</td>
                <td>
                    <?php if ($_smarty_tpl->tpl_vars['user']->value->last_login!=0) {?>
                        <?php echo date('j F Y H:i:s',$_smarty_tpl->tpl_vars['user']->value->last_login);?>

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

            </aside>
            <!-- End Content -->
        </div>
            
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
        
        <!-- SLI LIPI App -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/Sli_Lipi/app.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- Addons Scripts -->
        
    <?php echo '<script'; ?>
 type="text/javascript">

    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
