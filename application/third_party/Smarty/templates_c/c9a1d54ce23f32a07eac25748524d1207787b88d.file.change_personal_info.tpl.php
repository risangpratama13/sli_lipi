<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-05 06:49:09
         compiled from "application\views\configuration\profile\change_personal_info.tpl" */ ?>
<?php /*%%SmartyHeaderCode:17557548a4ff06c6b70-79465444%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9a1d54ce23f32a07eac25748524d1207787b88d' => 
    array (
      0 => 'application\\views\\configuration\\profile\\change_personal_info.tpl',
      1 => 1428191346,
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
      1 => 1423218267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '17557548a4ff06c6b70-79465444',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548a4ff07ba777_02144561',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548a4ff07ba777_02144561')) {function content_548a4ff07ba777_02144561($_smarty_tpl) {?><!DOCTYPE html>
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
                <li class="active"><a href="<?php echo base_url();?>
profil/ubah_profil"><i class="fa fa-pencil-square-o"></i> Ubah Informasi Pribadi</a></li>
            <?php }?>
        <li><a href="<?php echo base_url();?>
profil/ubah_password"><i class="fa fa-unlock"></i> Ubah Password</a></li>
    </ul>

                            </div>
                        </div><!-- /.col (LEFT) -->
                        <div class="col-md-9 col-sm-8">
                        
    <?php if (in_array("kelitian",$_smarty_tpl->tpl_vars['groups']->value)) {?>
        <?php $_smarty_tpl->tpl_vars['disabled'] = new Smarty_variable("disabled", null, 0);?>
    <?php }?>
    
    <!-- Content Header (Page header) -->
    <h3 class="header">Ubah Informasi Pribadi</h3>
    <div class="box box-solid">
        <?php echo form_open("profil/ubah_profil");?>

        <?php if (empty($_smarty_tpl->tpl_vars['member']->value)) {?>
            <?php echo form_hidden('oper','add');?>

        <?php } else { ?>
            <?php echo form_hidden('oper','edit');?>

            <?php ob_start();?><?php echo $_smarty_tpl->tpl_vars['member']->value->id;?>
<?php $_tmp1=ob_get_clean();?><?php echo form_hidden('member_id',$_tmp1);?>

        <?php }?>
        <div class="box-body">
            <br/>
            <?php echo $_smarty_tpl->tpl_vars['data']->value['message'];?>

            <div class="form-group">
                <?php echo form_label('Nama Lengkap','full_name');?>

                <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['full_name']);?>

                <?php echo form_error('full_name','<p class="help-block text-red">','</p>');?>

            </div>
            <div class="form-group">
                <?php echo form_label('Jenis Kelamin','sex');?>

                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                <?php if ($_smarty_tpl->tpl_vars['user']->value->sex=="M") {?>
                    <label>
                        <?php echo form_radio('sex','M',true);?>
 Laki-laki
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label>
                        <?php echo form_radio('sex','F');?>
 Perempuan
                    </label>
                <?php } else { ?>
                    <label>
                        <?php echo form_radio('sex','M');?>
 Laki-laki
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label>
                        <?php echo form_radio('sex','F',true);?>
 Perempuan
                    </label>
                <?php }?>
            </div>
            <div class="form-group">
                <?php echo form_label('Golongan','category');?>

                <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['category']);?>

                <?php echo form_error('category','<p class="help-block text-red">','</p>');?>

            </div>
            <div class="form-group">
                <?php echo form_label('Jabatan','position');?>

                <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['position']);?>

                <?php echo form_error('position','<p class="help-block text-red">','</p>');?>

            </div>
            <div class="form-group">
                <?php echo form_label('Tempat Lahir','birthplace');?>

                <?php echo form_input($_smarty_tpl->tpl_vars['data']->value['birthplace']);?>

                <?php echo form_error('birthplace','<p class="help-block text-red">','</p>');?>

            </div>
            <div class="form-group">
                <?php echo form_label('Tanggal Lahir','birthday');?>
                
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="birthday" class="form-control" value="<?php echo $_smarty_tpl->tpl_vars['member']->value->birthday!="0000-00-00" ? $_smarty_tpl->tpl_vars['member']->value->birthday : '';?>
" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask/>
                </div>
                <?php echo form_error('birthday','<p class="help-block text-red">','</p>');?>

            </div>
            <div class="form-group">
                <?php echo form_label('Alamat','address');?>

                <?php echo form_textarea($_smarty_tpl->tpl_vars['data']->value['address']);?>

                <?php echo form_error('address','<p class="help-block text-red">','</p>');?>

            </div>
            <div class="form-group">
                <label>Propinsi</label>
                <select class="form-control" name="province" id="province">
                    <option value="">-- Pilih Propinsi --</option>
                    <?php  $_smarty_tpl->tpl_vars['province'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['province']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['provinces']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['province']->key => $_smarty_tpl->tpl_vars['province']->value) {
$_smarty_tpl->tpl_vars['province']->_loop = true;
?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['member']->value)) {?>
                            <?php if ($_smarty_tpl->tpl_vars['member']->value->province_id==$_smarty_tpl->tpl_vars['province']->value->id) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['province']->value->id;?>
" selected=""><?php echo $_smarty_tpl->tpl_vars['province']->value->prov_name;?>
</option>
                            <?php } else { ?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['province']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['province']->value->prov_name;?>
</option>
                            <?php }?>
                        <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['province']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['province']->value->prov_name;?>
</option>
                        <?php }?>                        
                    <?php } ?>
                </select>
                <?php echo form_error('province','<p class="help-block text-red">','</p>');?>

            </div>
            <div class="form-group">
                <label>Kabupaten/Kota</label>
                <select class="form-control" name="state" id="state">
                    <option value="">-- Pilih Kabupaten/Kota --</option>
                    <?php  $_smarty_tpl->tpl_vars['state'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['state']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['states']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['state']->key => $_smarty_tpl->tpl_vars['state']->value) {
$_smarty_tpl->tpl_vars['state']->_loop = true;
?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['member']->value)) {?>
                            <?php if ($_smarty_tpl->tpl_vars['member']->value->state_id==$_smarty_tpl->tpl_vars['state']->value->id) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['state']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['state']->value->province_id;?>
" selected=""><?php echo $_smarty_tpl->tpl_vars['state']->value->state_name;?>
</option>
                            <?php } else { ?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['state']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['state']->value->province_id;?>
"><?php echo $_smarty_tpl->tpl_vars['state']->value->state_name;?>
</option>
                            <?php }?> 
                        <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['state']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['state']->value->province_id;?>
"><?php echo $_smarty_tpl->tpl_vars['state']->value->state_name;?>
</option>
                        <?php }?>                        
                    <?php } ?>
                </select>
                <?php echo form_error('state','<p class="help-block text-red">','</p>');?>

            </div>
            <div class="form-group">
                <?php echo form_label('Nomor Telepon','phone');?>
                
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" name="phone" class="form-control" value="<?php echo !empty($_smarty_tpl->tpl_vars['member']->value->phone) ? $_smarty_tpl->tpl_vars['member']->value->phone : '';?>
" data-inputmask="'mask': ['+62(###)###-##-###']" data-mask/>
                </div>
                <?php echo form_error('phone','<p class="help-block text-red">','</p>');?>

            </div>
            <div class="form-group">
                <label>Deputi Bidang</label>
                <select class="form-control" name="researcher" id="researcher" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
                    <option value="">-- Pilih Deputi Bidang --</option>
                    <?php  $_smarty_tpl->tpl_vars['researcher'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['researcher']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['researchers']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['researcher']->key => $_smarty_tpl->tpl_vars['researcher']->value) {
$_smarty_tpl->tpl_vars['researcher']->_loop = true;
?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['member']->value)) {?>
                            <?php if ($_smarty_tpl->tpl_vars['member']->value->researcher_id==$_smarty_tpl->tpl_vars['researcher']->value->id) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['researcher']->value->id;?>
" selected=""><?php echo $_smarty_tpl->tpl_vars['researcher']->value->researcher_name;?>
</option>
                            <?php } else { ?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['researcher']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['researcher']->value->researcher_name;?>
</option>
                            <?php }?>
                        <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['researcher']->value->id;?>
"><?php echo $_smarty_tpl->tpl_vars['researcher']->value->researcher_name;?>
</option>
                        <?php }?>                        
                    <?php } ?>
                </select>
                <?php echo form_error('researcher','<p class="help-block text-red">','</p>');?>

            </div>
            <div class="form-group">
                <label>Satuan Kerja</label>
                <select class="form-control" name="research" id="research" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
                    <option value="">-- Pilih Satuan Kerja --</option>
                    <?php  $_smarty_tpl->tpl_vars['research'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['research']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['researches']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['research']->key => $_smarty_tpl->tpl_vars['research']->value) {
$_smarty_tpl->tpl_vars['research']->_loop = true;
?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['member']->value)) {?>
                            <?php if ($_smarty_tpl->tpl_vars['member']->value->research_id==$_smarty_tpl->tpl_vars['research']->value->id) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['research']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['research']->value->researcher_id;?>
" selected=""><?php echo $_smarty_tpl->tpl_vars['research']->value->research_name;?>
</option>
                            <?php } else { ?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['research']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['research']->value->researcher_id;?>
"><?php echo $_smarty_tpl->tpl_vars['research']->value->research_name;?>
</option>
                            <?php }?>
                        <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['research']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['research']->value->researcher_id;?>
"><?php echo $_smarty_tpl->tpl_vars['research']->value->research_name;?>
</option>
                        <?php }?>                        
                    <?php } ?>
                </select>
                <?php echo form_error('research','<p class="help-block text-red">','</p>');?>

            </div>
            <div class="form-group">
                <label>Kelompok Penelitian</label>
                <select class="form-control" name="research_group" id="research_group" <?php echo $_smarty_tpl->tpl_vars['disabled']->value;?>
>
                    <option value="">-- Pilih Kelompok Penelitian --</option>
                    <?php  $_smarty_tpl->tpl_vars['research_group'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['research_group']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['research_groups']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['research_group']->key => $_smarty_tpl->tpl_vars['research_group']->value) {
$_smarty_tpl->tpl_vars['research_group']->_loop = true;
?>
                        <?php if (!empty($_smarty_tpl->tpl_vars['member']->value)) {?>
                            <?php if ($_smarty_tpl->tpl_vars['member']->value->research_group_id==$_smarty_tpl->tpl_vars['research_group']->value->id) {?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['research_group']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['research_group']->value->researcher_id;?>
\<?php echo $_smarty_tpl->tpl_vars['research_group']->value->research_id;?>
" selected><?php echo $_smarty_tpl->tpl_vars['research_group']->value->res_group_name;?>
</option>
                            <?php } else { ?>
                                <option value="<?php echo $_smarty_tpl->tpl_vars['research_group']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['research_group']->value->researcher_id;?>
\<?php echo $_smarty_tpl->tpl_vars['research_group']->value->research_id;?>
"><?php echo $_smarty_tpl->tpl_vars['research_group']->value->res_group_name;?>
</option>
                            <?php }?>
                        <?php } else { ?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['research_group']->value->id;?>
" class="<?php echo $_smarty_tpl->tpl_vars['research_group']->value->researcher_id;?>
\<?php echo $_smarty_tpl->tpl_vars['research_group']->value->research_id;?>
"><?php echo $_smarty_tpl->tpl_vars['research_group']->value->res_group_name;?>
</option>
                        <?php }?>                                                                           
                    <?php } ?>
                </select>
                <?php echo form_error('research_group','<p class="help-block text-red">','</p>');?>

            </div>
        </div>
        <div class="box-footer">
            <?php echo form_submit('submit',"Simpan Informasi Pribadi",'class="btn btn-warning"');?>

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
        <!-- Addons Plugins -->
        
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/plugins/jquery-chained/jquery.chained.min.js" type="text/javascript"><?php echo '</script'; ?>
>

        <!-- SLI LIPI App -->
        <?php echo '<script'; ?>
 src="<?php echo base_url();?>
asset/js/Sli_Lipi/app.js" type="text/javascript"><?php echo '</script'; ?>
>
        <!-- Addons Scripts -->
        
    <?php echo '<script'; ?>
 type="text/javascript">
        $(document).ready(function () {
            $("[data-mask]").inputmask();
            <?php if (!in_array("kelitian",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                $("#state").chained("#province");
                $("#research").chained("#researcher");
                $("#research_group").chained("#researcher, #research");
            <?php }?>
        });
    <?php echo '</script'; ?>
>

    </body>
</html><?php }} ?>
