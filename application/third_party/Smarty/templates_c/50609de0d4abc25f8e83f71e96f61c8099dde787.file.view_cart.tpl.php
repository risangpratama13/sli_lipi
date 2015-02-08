<?php /* Smarty version Smarty-3.1.21-dev, created on 2015-02-08 06:24:01
         compiled from "application\views\order\view_cart.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1260754975ac52efc02-04842824%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '50609de0d4abc25f8e83f71e96f61c8099dde787' => 
    array (
      0 => 'application\\views\\order\\view_cart.tpl',
      1 => 1419641547,
      2 => 'file',
    ),
    '5303d7aeafdcc8afd4652ad8c2cc04e723109c39' => 
    array (
      0 => 'application\\views\\layouts\\master.tpl',
      1 => 1423218267,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1260754975ac52efc02-04842824',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.21-dev',
  'unifunc' => 'content_54975ac5369a05_08622012',
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_54975ac5369a05_08622012')) {function content_54975ac5369a05_08622012($_smarty_tpl) {?><!DOCTYPE html>
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
            Pengajuan Pengujian
            <small>Keranjang Belanja</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Pengajuan Pengujian</a></li>
            <li><a href="<?php echo base_url();?>
keranjang_belanja">Keranjang Belanja</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-blue-gradient">
                    <div class="inner">
                        <h3><?php echo $_smarty_tpl->tpl_vars['shopping_carts']->value;?>
</h3>
                        <p>Pengujian</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-cart"></i>
                    </div>
                    <a href="<?php echo base_url();?>
keranjang_belanja" class="small-box-footer">
                        Lihat Detail <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-purple-gradient">
                    <div class="inner">
                        <h3>Rp. <?php echo number_format($_smarty_tpl->tpl_vars['total']->value,'2',',','.');?>
</h3>
                        <p>Total Harga</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-calculator"></i>
                    </div>
                    <a href="<?php echo base_url();?>
keranjang_belanja" class="small-box-footer">
                        Lihat Detail <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-5 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red-gradient">
                    <div class="inner">
                        <h3>Rp. <?php echo number_format($_smarty_tpl->tpl_vars['idr']->value,'2',',','.');?>
</h3>
                        <p>Saldo</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-social-usd"></i>
                    </div>
                    <a href="<?php echo base_url();?>
rincian_saldo" class="small-box-footer">
                        Lihat Detail <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->            
        </div><!-- /.row -->
        <?php if ($_smarty_tpl->tpl_vars['message']->value!='') {?>
            <div class="pad margin">
                <div class="alert alert-danger" style="margin-bottom: 0!important;">
                    <i class="fa fa-ban"></i>
                    <b><?php echo $_smarty_tpl->tpl_vars['message']->value;?>
</b>
                </div>
            </div>
        <?php }?>
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <?php echo form_open('orders/save_cart');?>
                        
                    <div class="box-header">
                        <h3 class="box-title">Keranjang Belanja</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a href="<?php echo base_url();?>
tambah_order" class="btn btn-flat btn-primary">
                            <i class="fa fa-plus-circle"></i> Tambah Pengujian
                        </a>
                        <br/><br/>     
                        <table id="tableTest" class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Pengujian</th>
                                    <th>Operator</th>
                                    <th>Jumlah</th>
                                    <th>Harga</th>
                                    <th>Subtotal</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable(1, null, 0);?>
                                <?php  $_smarty_tpl->tpl_vars['cart'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['cart']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['carts']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['cart']->key => $_smarty_tpl->tpl_vars['cart']->value) {
$_smarty_tpl->tpl_vars['cart']->_loop = true;
?>
                                    <?php echo form_hidden(((string)$_smarty_tpl->tpl_vars['i']->value)."rowid",$_smarty_tpl->tpl_vars['cart']->value['rowid']);?>

                                    <?php $_smarty_tpl->tpl_vars['qty'] = new Smarty_variable(array('name'=>((string)$_smarty_tpl->tpl_vars['i']->value)."qty",'value'=>$_smarty_tpl->tpl_vars['cart']->value['qty'],'maxlength'=>'3','size'=>'5','min'=>'1'), null, 0);?>
                                    <tr>
                                        <td><?php echo $_smarty_tpl->tpl_vars['cart']->value['name'];?>
</td>
                                        <td><?php echo $_smarty_tpl->tpl_vars['product_options']->value[$_smarty_tpl->tpl_vars['cart']->value['rowid']]['operator_name'];?>
</td>
                                        <td><?php echo form_input($_smarty_tpl->tpl_vars['qty']->value);?>
</td>
                                        <td>Rp. <?php echo number_format($_smarty_tpl->tpl_vars['cart']->value['price'],'2',',','.');?>
</td>
                                        <td>Rp. <?php echo number_format($_smarty_tpl->tpl_vars['cart']->value['subtotal'],'2',',','.');?>
</td>
                                        <td>
                                            <a href="<?php echo base_url();?>
orders/delete_cart/<?php echo $_smarty_tpl->tpl_vars['cart']->value['rowid'];?>
" class="btn btn-flat btn-sm btn-danger">
                                                <i class="fa fa-trash-o"></i> Hapus Pengujian
                                            </a>
                                        </td>
                                    </tr>
                                    <?php $_smarty_tpl->tpl_vars['i'] = new Smarty_variable($_smarty_tpl->tpl_vars['i']->value+1, null, 0);?>
                                <?php } ?>
                            </tbody>
                        </table>                        
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <?php echo form_submit('ubah',"Ubah Keranjang Belanja",'class="btn btn-flat btn-warning"');?>

                        <?php echo form_submit('checkout',"Checkout",'class="btn btn-flat btn-success"');?>
                        
                    </div>
                    <?php echo form_close();?>

                </div><!-- /.box -->               
            </div>
        </div>
    </section>

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
        
    </body>
</html><?php }} ?>
