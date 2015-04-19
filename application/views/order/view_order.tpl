{extends file="layouts/master.tpl"} 
{block name="content"}
    <section class="content-header">
        <h1>
            Invoice
            <small>#{sprintf("%06s", $order->id)}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="{base_url()}order">Pengajuan Pengujian</a></li>
            <li class="active">Invoice #{sprintf("%06s", $order->id)}</li>
        </ol>
    </section>
    <section class="content invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <h2 class="page-header">
                    <img src="{base_url()}asset/img/favicon.png"> 
                    Sistem Layanan Internal - Pusat Penelitian Fisika LIPI                    
                </h2>
            </div><!-- /.col -->
        </div>
        <!-- info row -->
        <div class="row invoice-info">
            <div class="col-sm-4 invoice-col">                
                <address>
                    <strong>{$order->full_name}</strong><br>
                    {if !empty($member)}
                        {$member->address}<br>
                        {$member->state_name}, {$member->prov_name}<br>
                        Phone: {$member->phone}
                    {/if}
                </address>
            </div><!-- /.col -->
            <div class="col-sm-4 invoice-col">

            </div>
            <div class="col-sm-4 invoice-col">
                <b>Invoice #{sprintf("%06s", $order->id)}</b><br/>
                <br/>
                <b>Order ID:</b> {$order->code}<br/>
                <b>Tanggal Pengajuan:</b> {date("j F Y", strtotime($order->order_date))}<br/>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- Table row -->
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr>
                            <th>Pengujian</th>
                            <th>Jumlah</th>                            
                            <th>Operator</th>
                            <th>Tanggal Pengujian</th>
                            <th>Status</th>
                            <th>Subtotal</th>
                        </tr>
                    </thead>
                    <tbody>
                        {foreach $test_orders as $test_order}
                            <tr>    
                                <td rowspan="2">{$test_order->testing_name}</td>
                                <td>{$test_order->qty}</td>
                                <td>{$test_order->full_name}</td>
                                {if $test_order->start_date eq "0000-00-00 00:00:00"}
                                    <td>Belum Diatur</td>
                                {else}
                                    <td>{date("j F Y H:i", strtotime($test_order->start_date))}</td>
                                {/if}
                                {if $test_order->status eq "P"}
                                    <td><span class="label label-warning">Pending</span></td>
                                {else if $test_order->status eq "AL"}
                                    <td><span class="label label-success">Disetujui Ketua Kelitian</span></td>
                                {else if $test_order->status eq "AO"}
                                    <td><span class="label label-success">Disetujui Operator</span></td>                                        
                                {else if $test_order->status eq "D"}
                                    <td><span class="label label-danger">Denied</span></td>
                                {else if $test_order->status eq "F"}
                                    <td><span class="label label-info">Finish</span></td>
                                {/if}                                     
                                <td>Rp. {number_format($test_order->subtotal, '2', ',', '.')}</td>
                            </tr>
                            <tr>
                                <td colspan="5"><b>Penjelasan : </b>{$test_order->description}</td>
                            </tr>
                        {/foreach}
                    </tbody>
                </table>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <div class="row">
            <!-- accepted payments column -->
            <div class="col-xs-6">
                <p class="lead">Keterangan</p>
                <p class="text-muted well well-sm no-shadow" style="margin-top: 10px;">
                    Tanggal Pengujian Diatur Oleh Operator Pengujian Yang Dipilih.<br/> 
                    Status Pengujian Akan Berubah Jika Sudah Mendapatkan Konfirmasi Dari Operator.
                </p>
            </div><!-- /.col -->
            <div class="col-xs-6">
                <p class="lead">Tanggal Pengajuan {date("d/m/Y", strtotime($order->order_date))}</p>
                <div class="table-responsive">
                    <table class="table">
                        <tr>
                            <th>Total Biaya Pengujian:</th>
                            <td>Rp. {number_format($order->total, '2', ',', '.')}</td>
                        </tr>
                        <tr>
                            <th>&nbsp;</th>
                            <td>&nbsp;</td>
                        </tr>
                    </table>
                </div>
            </div><!-- /.col -->
        </div><!-- /.row -->

        <!-- this row will not appear when printing -->
        <div class="row no-print">
            <div class="col-xs-12">
                <button class="btn btn-flat btn-primary pull-right" onclick="window.print();"><i class="fa fa-print"></i> Cetak Invoice</button>                
            </div>
        </div>
    </section>
{/block}