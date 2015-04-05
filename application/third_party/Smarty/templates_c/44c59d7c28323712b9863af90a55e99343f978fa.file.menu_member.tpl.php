<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-05 07:06:16
         compiled from "application\views\layouts\menu_member.tpl" */ ?>
<?php /*%%SmartyHeaderCode:143295487a9d939a3c4-15757029%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '44c59d7c28323712b9863af90a55e99343f978fa' => 
    array (
      0 => 'application\\views\\layouts\\menu_member.tpl',
      1 => 1428192370,
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
            <i class="fa fa-home"></i> <span> Home </span>
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
            <i class="fa fa-money"></i>
            <span> Saldo </span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">            
            <li><a href="<?php echo base_url();?>
rincian_saldo"><i class="fa fa-angle-double-right"></i> Rincian Saldo </a></li>     
            <li><a href="<?php echo base_url();?>
item"><i class="fa fa-angle-double-right"></i> Tambah Saldo <small class="badge pull-right bg-yellow"><?php echo $_smarty_tpl->tpl_vars['shopping_carts']->value;?>
</small></a></li>
        </ul>
    </li>    
    <li class="treeview">
        <a href="#">
            <i class="fa fa-book"></i>
            <span> Pengujian </span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="<?php echo base_url();?>
keranjang_belanja"><i class="fa fa-angle-double-right"></i> Pengajuan Pengujian <small class="badge pull-right bg-yellow"><?php echo $_smarty_tpl->tpl_vars['shopping_carts']->value;?>
</small></a></li>
            <li><a href="<?php echo base_url();?>
order"><i class="fa fa-angle-double-right"></i> Daftar Pengajuan </a></li>     
        </ul>
    </li>
    <?php if (in_array("admin",$_smarty_tpl->tpl_vars['groups']->value)||in_array("superadmin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
        <li>
            <a href="<?php echo base_url();?>
history_pengujian">
                <i class="fa fa-tasks"></i> <span> Kegiatan Pengujian </span>
            </a>
        </li>
    <?php } elseif (in_array("members",$_smarty_tpl->tpl_vars['groups']->value)&&in_array("operators",$_smarty_tpl->tpl_vars['groups']->value)) {?>
        <li class="treeview">
            <a href="#">
                <i class="fa fa-tasks"></i>
                <span> Laporan Pengujian </span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">            
                <li><a href="<?php echo base_url();?>
pengujian_member"><i class="fa fa-angle-double-right"></i> Laporan Pengujian </a></li>
                    <?php if (in_array("kelitian",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                    <li><a href="<?php echo base_url();?>
konfirmasi_pengujian"><i class="fa fa-angle-double-right"></i> Konfirmasi Pengujian </a></li>
                    <?php }?>
                <li><a href="<?php echo base_url();?>
pengujian_operator"><i class="fa fa-angle-double-right"></i> Permohonan Pengujian </a></li>
            </ul>
        </li>
    <?php } elseif (in_array("members",$_smarty_tpl->tpl_vars['groups']->value)) {?>
        <?php if (in_array("kelitian",$_smarty_tpl->tpl_vars['groups']->value)) {?>
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tasks"></i>
                    <span> Laporan Pengujian </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">            
                    <li><a href="<?php echo base_url();?>
pengujian_member"><i class="fa fa-angle-double-right"></i> Laporan Pengujian </a></li>
                    <?php if (in_array("kelitian",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                        <li><a href="<?php echo base_url();?>
konfirmasi_pengujian"><i class="fa fa-angle-double-right"></i> Konfirmasi Pengujian </a></li>
                    <?php }?>
                </ul>
            </li>
        <?php } else { ?>
            <li>
                <a href="<?php echo base_url();?>
pengujian_member">
                    <i class="fa fa-tasks"></i> <span> Laporan Pengujian </span>
                </a>
            </li>
        <?php }?>        
    <?php }?>
</ul><?php }} ?>
