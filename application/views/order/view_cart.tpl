{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pengajuan Pengujian
            <small>Keranjang Belanja</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Pengajuan Pengujian</a></li>
            <li><a href="{base_url()}keranjang_belanja">Keranjang Belanja</a></li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-lg-3 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-blue-gradient">
                    <div class="inner">
                        <h3>{$shopping_carts}</h3>
                        <p>Pengujian</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-ios-cart"></i>
                    </div>
                    <a href="{base_url()}keranjang_belanja" class="small-box-footer">
                        Lihat Detail <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-4 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-purple-gradient">
                    <div class="inner">
                        <h3>Rp. {number_format($total, '2', ',', '.')}</h3>
                        <p>Total Harga</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-calculator"></i>
                    </div>
                    <a href="{base_url()}keranjang_belanja" class="small-box-footer">
                        Lihat Detail <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->
            <div class="col-lg-5 col-xs-6">
                <!-- small box -->
                <div class="small-box bg-red-gradient">
                    <div class="inner">
                        <h3>Rp. {number_format($idr, '2', ',', '.')}</h3>
                        <p>Saldo</p>
                    </div>
                    <div class="icon">
                        <i class="ion ion-social-usd"></i>
                    </div>
                    <a href="{base_url()}rincian_saldo" class="small-box-footer">
                        Lihat Detail <i class="fa fa-arrow-circle-right"></i>
                    </a>
                </div>
            </div><!-- ./col -->            
        </div><!-- /.row -->
        {if $message neq ""}
            <div class="pad margin">
                <div class="alert alert-danger" style="margin-bottom: 0!important;">
                    <i class="fa fa-ban"></i>
                    <b>{$message}</b>
                </div>
            </div>
        {/if}
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    {form_open('orders/save_cart')}                        
                    <div class="box-header">
                        <h3 class="box-title">Keranjang Belanja</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a href="{base_url()}tambah_order" class="btn btn-flat btn-primary">
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
                                {$i = 1}
                                {foreach $carts as $cart}
                                    {form_hidden("`$i`rowid", $cart['rowid'])}
                                    {assign var=qty value=['name' => "`$i`qty", 'value' => $cart['qty'], 'maxlength' => '3', 'size' => '5', 'min' => '1']}
                                    <tr>
                                        <td>{$cart['name']}</td>
                                        <td>{$product_options[$cart['rowid']]['operator_name']}</td>
                                        <td>{form_input($qty)}</td>
                                        <td>Rp. {number_format($cart['price'], '2', ',', '.')}</td>
                                        <td>Rp. {number_format($cart['subtotal'], '2', ',', '.')}</td>
                                        <td>
                                            <a href="{base_url()}orders/delete_cart/{$cart['rowid']}" class="btn btn-flat btn-sm btn-danger">
                                                <i class="fa fa-trash-o"></i> Hapus Pengujian
                                            </a>
                                        </td>
                                    </tr>
                                    {$i = $i + 1}
                                {/foreach}
                            </tbody>
                        </table>                        
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {form_submit('ubah', "Ubah Keranjang Belanja", 'class="btn btn-flat btn-warning"')}
                        {form_submit('checkout', "Checkout", 'class="btn btn-flat btn-success"')}                        
                    </div>
                    {form_close()}
                </div><!-- /.box -->               
            </div>
        </div>
    </section>
{/block}