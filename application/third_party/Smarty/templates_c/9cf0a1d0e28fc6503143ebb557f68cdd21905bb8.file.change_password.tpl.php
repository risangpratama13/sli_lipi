<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-19 06:34:44
         compiled from "application\views\configuration\profile\change_password.tpl" */ ?>
<?php /*%%SmartyHeaderCode:27762548a26f417e827-58675489%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9cf0a1d0e28fc6503143ebb557f68cdd21905bb8' => 
    array (
      0 => 'application\\views\\configuration\\profile\\change_password.tpl',
      1 => 1418344107,
      2 => 'file',
    ),
    '68cc9180bc6fb0dd465914a3c57d03a07aa9bace' => 
    array (
      0 => 'application\\views\\configuration\\profile\\profile.tpl',
      1 => 1418338325,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1429400076,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '27762548a26f417e827-58675489',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548a26f4268e52_50970426',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548a26f4268e52_50970426')) {function content_548a26f4268e52_50970426($_smarty_tpl) {?><!DOCTYPE html>
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

        <!-- Theme style -->
        <?php echo link_tag('asset/css/sli_lipi.css');?>

        <!-- Addons Style -->
        
        

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
                                        <input type="file" id="file_avatar" name="file_avatar" onchange="$('#submitAvatar').click();"/>
                                        <input type="submit" id="submitAvatar" value="submit">
                                    </form>
                                </div>
                                <img src="<?php echo base_url();?>
asset/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value->photo;?>
" class="img-thumbnail"><br/><br/>
                                <button onclick="$('#file_avatar').click();" class="btn btn-block btn-primary"><i class="fa fa-picture-o"></i> Ubah Foto</button>
                                <!-- Navigation - folders-->
                                <div style="margin-top: 15px;">
                                
    <ul class="nav nav-pills nav-stacked">
        <li><a href="<?php echo base_url();?>
profil"><i class="fa fa-info-circle"></i> Informasi Pribadi</a></li>
            <?php if (in_array("members",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                <li><a href="<?php echo base_url();?>
profil/ubah_profil"><i class="fa fa-pencil-square-o"></i> Ubah Informasi Pribadi</a></li>
            <?php }?>
        <li class="active"><a href="<?php echo base_url();?>
profil/ubah_password"><i class="fa fa-unlock"></i> Ubah Password</a></li>
    </ul>

                            </div>
                        </div><!-- /.col (LEFT) -->
                        <div class="col-md-9 col-sm-8">
                        
    <!-- Content Header (Page header) -->
    <h3 class="header">Ubah Password</h3>
    <div class="box box-solid">
        <?php echo form_open("profil/ubah_password");?>

        <?php echo form_hidden('identity',$_smarty_tpl->tpl_vars['data']->value['identity']);?>

        <div class="box-body">
            <br/>
            <?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>

            <div class="form-group">
                <?php echo form_label('Password Lama','old');?>

                <?php echo form_password($_smarty_tpl->tpl_vars['data']->value['old_password']);?>

                <?php echo form_error('old','<p class="help-block text-red">','</p>');?>

            </div>
            <div class="form-group">
                <?php echo form_label('Password Baru','new');?>

                <?php echo form_password($_smarty_tpl->tpl_vars['data']->value['new_password']);?>

                <?php echo form_error('new','<p class="help-block text-red">','</p>');?>

            </div>
            <div class="form-group">
                <?php echo form_label('Konfirmasi Password Baru','new_confirm');?>

                <?php echo form_password($_smarty_tpl->tpl_vars['data']->value['new_password_confirm']);?>

                <?php echo form_error('new_confirm','<p class="help-block text-red">','</p>');?>

            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            <?php echo form_submit('submit',"Simpan Password Baru",'class="btn btn-warning"');?>

        </div>
        <?php echo form_close();?>

    </div><!-- /.box -->

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
        <!-- SLI LIPI App -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/Sli_Lipi/app.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- Addons Plugins -->
        
    <?php echo '<script'; ?>
 type="text/javascript" src="<?php echo base_url();?>
asset/js/plugins/jquery-form/jquery.form.min.js"><?php echo '</script'; ?>
>
       
        <!-- Addons Scripts -->
        
    <?php echo '<script'; ?>
 type="text/javascript">
        function beforeSubmitAvatar() {
            if (window.File && window.FileReader && window.FileList && window.Blob) {
                if (!$('#file_avatar').val()) {
                    alert("Gambar Tidak Ada");
                }

                var fsize = $("#file_avatar")[0].files[0].size;
                var ftype = $("#file_avatar")[0].files[0].type;

                switch (ftype) {
                    case 'image/png':
                    case 'image/gif':
                    case 'image/jpeg':
                    case 'image/pjpeg':
                        break;
                    default:
                        alert("Format File Yang Diupload Harus PNG, JPG, JPEG, atau GIF");
                        return false
                }

                if (fsize > 1048576) {
                    alert("Ukuran File Tidak Boleh Lebih Dari 1 MB");
                    return false
                }

            } else {
                alert("Browser Anda Tidak Mendukung Fasilitas Upload Ini");
                return false;
            }
        }

        $(document).ready(function () {
            var options = {
                resetForm: true,
                beforeSubmit: beforeSubmitAvatar,
                resetForm: true,
                        success: function (data) {
                            if (data == "Success") {
                                location.reload();
                            } else {
                                alert("Foto Tidak Berhasil Diubah")
                            }
                        }
            };

            $('#submitAvatar').click(function () {
                $('#avatar').ajaxSubmit(options);
                return false;
            });
        });
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
