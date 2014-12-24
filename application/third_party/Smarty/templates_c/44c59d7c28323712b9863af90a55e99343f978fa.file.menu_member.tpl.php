<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-24 09:00:16
         compiled from "application\views\layouts\menu_member.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143295487a9d939a3c4-15757029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44c59d7c28323712b9863af90a55e99343f978fa' => 
    array (
      0 => 'application\\views\\layouts\\menu_member.tpl',
      1 => 1419380031,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '143295487a9d939a3c4-15757029',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_5487a9d939a3c7_07984121',
  'variables' => 
  array (
    'shopping_carts' => 0,
    'groups' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5487a9d939a3c7_07984121')) {function content_5487a9d939a3c7_07984121($_smarty_tpl) {?><ul class="sidebar-menu">
    <li>
        <a href="<?php echo base_url();?>
">
            <i class="fa fa-home"></i> <span>Home</span>
        </a>
    </li>    
    <li>
        <a href="<?php echo base_url();?>
profil">
            <i class="fa fa-user"></i> <span>Profil</span>
        </a>
    </li>    
    <li>
        <a href="<?php echo base_url();?>
item">
            <i class="fa fa-files-o"></i> <span>Item</span>
        </a>
    </li>    
    <li class="treeview">
        <a href="#">
            <i class="fa fa-book"></i>
            <span>Pengajuan Pengujian</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">            
            <li><a href="<?php echo base_url();?>
order"><i class="fa fa-angle-double-right"></i> Daftar Pengajuan</a></li>     
            <li><a href="<?php echo base_url();?>
keranjang_belanja"><i class="fa fa-angle-double-right"></i> Keranjang Belanja<small class="badge pull-right bg-yellow"><?php echo $_smarty_tpl->tpl_vars['shopping_carts']->value;?>
</small></a></li>
        </ul>
    </li>
    <?php if (in_array("admin",$_smarty_tpl->tpl_vars['groups']->value)||in_array("superadmin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
        <li>
            <a href="<?php echo base_url();?>
history_pengujian">
                <i class="fa fa-tasks"></i> <span>Kegiatan Pengujian</span>
            </a>
        </li>
    <?php } elseif (in_array("members",$_smarty_tpl->tpl_vars['groups']->value)&&in_array("operators",$_smarty_tpl->tpl_vars['groups']->value)) {?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-tasks"></i>
                <span>Kegiatan Pengujian</span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">            
                <li><a href="<?php echo base_url();?>
pengujian_member"><i class="fa fa-angle-double-right"></i> Pengujian Anggota</a></li>     
                <li><a href="<?php echo base_url();?>
pengujian_operator"><i class="fa fa-angle-double-right"></i> Pengujian Operator</a></li>
            </ul>
        </li>
    <?php } elseif (in_array("members",$_smarty_tpl->tpl_vars['groups']->value)) {?>
        <li>
            <a href="<?php echo base_url();?>
pengujian_member">
                <i class="fa fa-tasks"></i> <span>Kegiatan Pengujian</span>
            </a>
        </li>        
    <?php }?>
</ul><?php }} ?>
