<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-04-25 11:33:44
         compiled from "application\views\layouts\header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:6407548714861bd111-13683789%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ca6d73ec5e8d5926ca661a34939d1c33e07c27b1' => 
    array (
      0 => 'application\\views\\layouts\\header.tpl',
      1 => 1429936415,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '6407548714861bd111-13683789',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_548714861e4211_39987402',
  'variables' => 
  array (
    'user' => 0,
    'groups' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_548714861e4211_39987402')) {function content_548714861e4211_39987402($_smarty_tpl) {?><!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="<?php echo base_url();?>
" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        SLI LIPI
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="notif">
                        <i class="fa fa-warning"></i>
                        <span class="label label-warning" id="notif_count"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header" id="notif_header"></li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu" id="header_content">
                                
                            </ul>
                        </li>
                        <li class="footer"><a href="<?php echo base_url();?>
all_notif/<?php echo $_smarty_tpl->tpl_vars['user']->value->id;?>
">Lihat Semua</a></li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span>
                            <?php if (in_array("admin",$_smarty_tpl->tpl_vars['groups']->value)||in_array("superadmin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>

                            <?php } else { ?>
                                <?php echo $_smarty_tpl->tpl_vars['user']->value->full_name;?>

                            <?php }?>
                            <i class="caret"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="<?php echo base_url();?>
asset/avatar/<?php echo $_smarty_tpl->tpl_vars['user']->value->photo;?>
" class="img-circle" alt="User Image" />
                            <p>
                                <?php if (in_array("admin",$_smarty_tpl->tpl_vars['groups']->value)||in_array("superadmin",$_smarty_tpl->tpl_vars['groups']->value)) {?>
                                    <?php echo $_smarty_tpl->tpl_vars['user']->value->username;?>

                                <?php } else { ?>
                                    <?php echo $_smarty_tpl->tpl_vars['user']->value->full_name;?>

                                <?php }?>
                                <small>Terdaftar Sejak <?php echo date('M Y',$_smarty_tpl->tpl_vars['user']->value->created_on);?>
</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">                            
                            <div class="pull-left">
                                <a href="<?php echo base_url();?>
profil" class="btn btn-default btn-flat">Profil</a>
                            </div>
                            <div class="pull-right">
                                <a href="<?php echo base_url();?>
logout" class="btn btn-default btn-flat">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header><?php }} ?>
