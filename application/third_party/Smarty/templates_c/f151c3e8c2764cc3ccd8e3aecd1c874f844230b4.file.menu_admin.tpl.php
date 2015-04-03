<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-03-21 06:25:31
         compiled from "application\views\layouts\menu_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16035548714f01505b9-17899961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f151c3e8c2764cc3ccd8e3aecd1c874f844230b4' => 
    array (
      0 => 'application\\views\\layouts\\menu_admin.tpl',
      1 => 1426893888,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '16035548714f01505b9-17899961',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548714f01505b9_10757498',
  'variables' => 
  array (
    'groups' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548714f01505b9_10757498')) {function content_548714f01505b9_10757498($_smarty_tpl) {?><ul class="sidebar-menu">
    <li>
        <a href="<?php echo base_url();?>
">
            <i class="fa fa-home"></i> <span>Home</span>
        </a>
    </li>
    <li>
        <a href="<?php echo base_url();?>
profil">
            <i class="fa fa-user"></i> <span> Profil </span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-hdd-o"></i>
            <span>Master Data</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">            
            <li><a href="<?php echo base_url();?>
research_group"><i class="fa fa-angle-double-right"></i> Kelompok Penelitian</a></li>     
            <li><a href="<?php echo base_url();?>
config_point"><i class="fa fa-angle-double-right"></i> Konfigurasi Poin</a></li>     
            <li><a href="<?php echo base_url();?>
tipe_item"><i class="fa fa-angle-double-right"></i> Kategori Item</a></li>
            <li><a href="<?php echo base_url();?>
unit"><i class="fa fa-angle-double-right"></i> Satuan</a></li>
            <li><a href="<?php echo base_url();?>
tool"><i class="fa fa-angle-double-right"></i> Alat Pengujian</a></li>
        </ul>
    </li>
    <li>
        <a href="<?php echo base_url();?>
item">
            <i class="fa fa-files-o"></i> <span>Pengajuan Saldo</span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-list-alt"></i>
            <span>Pengujian</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">            
            <li><a href="<?php echo base_url();?>
kategori_pengujian"><i class="fa fa-angle-double-right"></i> Kategori Pengujian</a></li>     
            <li><a href="<?php echo base_url();?>
pengujian"><i class="fa fa-angle-double-right"></i> Daftar Pengujian</a></li>
        </ul>
    </li>
    <li>
        <a href="<?php echo base_url();?>
order">
            <i class="fa fa-book"></i> <span>Pengajuan Pengujian</span>
        </a>
    </li>
    <li>
        <a href="<?php echo base_url();?>
history_pengujian">
            <i class="fa fa-tasks"></i> <span>Kegiatan Pengujian</span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-gears"></i>
            <span>Konfigurasi Pengguna</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <?php if (in_array("superadmin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                <li><a href="<?php echo base_url();?>
administrator"><i class="fa fa-angle-double-right"></i> Administrator</a></li>            
                <?php }?>
            <li><a href="<?php echo base_url();?>
anggota"><i class="fa fa-angle-double-right"></i> Anggota</a></li>
            <li><a href="<?php echo base_url();?>
operator"><i class="fa fa-angle-double-right"></i> Operator</a></li>
            <li><a href="<?php echo base_url();?>
leader"><i class="fa fa-angle-double-right"></i> Kelompok Kelitian</a></li>
        </ul>
    </li>
</ul><?php }} ?>
