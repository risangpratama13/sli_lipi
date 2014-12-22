{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pengajuan Pengujian
            <small>Daftar Pengajuan Pengujian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Pengajuan Pengujian</a></li>
            <li class="active"><a href="{base_url()}order">Daftar Pengajuan Pengujian</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Pengajuan Pengujian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="tableOrder" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nomor Pengajuan</th>
                                    <th>Anggota</th>                                  
                                    <th>Tanggal Pengajuan</th>
                                    <th>Total</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {$no = 1}
                                {foreach $orders as $order}
                                    <tr>
                                        <td>{$no}</td>
                                        <td>{$order->code}</td>
                                        <td>{$order->full_name}</td>
                                        <td>{date("j F Y H:i:s", strtotime($order->order_date))}</td>
                                        <td>Rp. {number_format($order->total, '2', ',', '.')}</td>
                                        <td>
                                            <a href="{base_url()}invoice/{$order->code}" title="Invoice" class="btn btn-flat btn-sm btn-info"><i class="fa fa-file-text"></i></a>
                                        </td>
                                    </tr>
                                    {$no = $no + 1}
                                {/foreach}
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->               
            </div>
        </div>
    </section><!-- /.content -->
{/block}

{block name="addon_styles"}
    {link_tag('asset/css/datatables/dataTables.bootstrap.css')}
{/block}

{block name="addon_plugins"}
    <script src="{base_url()}asset/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="{base_url()}asset/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
        $(function () {
            $("#tableOrder").dataTable({
                oLanguage: {
                    sUrl: '{base_url()}asset/js/plugins/datatables/Indonesian.json'
                }
            });            
        });
    </script>
{/block}