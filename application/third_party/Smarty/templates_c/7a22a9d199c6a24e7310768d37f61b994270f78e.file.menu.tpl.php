<?php /* Smarty version Smarty-3.1.21-dev, created on 2014-12-09 22:27:44
         compiled from "application\views\layouts\menu.tpl" */ ?>
<?php /*%%SmartyHeaderCode:746554871496e76fc8-38110648%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7a22a9d199c6a24e7310768d37f61b994270f78e' => 
    array (
      0 => 'application\\views\\layouts\\menu.tpl',
      1 => 1418138860,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '746554871496e76fc8-38110648',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54871496e76fc7_11323095',
  'variables' => 
  array (
    'user' => 0,
    'groups' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54871496e76fc7_11323095')) {function content_54871496e76fc7_11323095($_smarty_tpl) {?><!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="<?php echo base_url();?>
asset/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value->photo;?>
" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p><?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>
</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        <?php if (in_array("admin",$_smarty_tpl->tpl_vars['groups']->value)||in_array("superadmin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
            <?php echo $_smarty_tpl->getSubTemplate ('layouts/menu_admin.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

        <?php } else { ?>
            <?php if (in_array("members")) {?>
                <?php echo $_smarty_tpl->getSubTemplate ('layouts/menu_member.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>

            <?php if (in_array("operators")) {?>
                <?php echo $_smarty_tpl->getSubTemplate ('layouts/menu_operator.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, null, array(), 0);?>

            <?php }?>
        <?php }?>        
    </section>
    <!-- /.sidebar -->
</aside><?php }} ?>