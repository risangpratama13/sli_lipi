<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-10 11:12:28
         compiled from "application\views\layouts\menu_admin.tpl" */ ?>
<?php /*%%SmartyHeaderCode:16035548714f01505b9-17899961%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f151c3e8c2764cc3ccd8e3aecd1c874f844230b4' => 
    array (
      0 => 'application\\views\\layouts\\menu_admin.tpl',
      1 => 1418184740,
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
"><i class="fa fa-angle-double-right"></i> Akun</a></li>
        </ul>
    </li>
</ul><?php }} ?>
