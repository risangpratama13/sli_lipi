{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Rincian Saldo
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active">Rincian Saldo</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Rincian Saldo</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="tableBalance" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Tanggal</th>
                                    <th>Uraian</th>
                                    <th>Jenis Transaksi</th>
                                    <th>Jumlah</th>
                                    <th>Saldo</th>
                                </tr>
                            </thead>                            
                            <tbody>
                                {$no = 1}
                                {foreach $balances as $balance}
                                    <tr>
                                        <td>{date('j F Y', strtotime($balance->trans_date))}</a></td>
                                        <td>{$balance->desc}</td>
                                        <td>
                                            {if $balance->trans_type eq "D"}
                                                <span class="label label-success">Debit</span>
                                            {else if $balance->trans_type eq "K"}
                                                <span class="label label-danger">Kredit</span>
                                            {/if}
                                        </td>
                                        <td>Rp. {number_format($balance->amount, '2', ',', '.')}</td>
                                        <td>
                                            {if $no == 1}
                                                {$saldo_awal = $balance->amount}
                                                Rp. {number_format($saldo_awal, '2', ',', '.')}
                                            {else}
                                                {if $balance->trans_type eq "D"}
                                                    {$saldo_awal = $saldo_awal + $balance->amount}
                                                {else if $balance->trans_type eq "K"}
                                                    {$saldo_awal = $saldo_awal - $balance->amount}
                                                {/if}
                                                Rp. {number_format($saldo_awal, '2', ',', '.')}
                                            {/if}                                            
                                        </td>                                 
                                    </tr>
                                    {$no = $no + 1}
                                {/foreach}
                            </tbody>
                            <tfoot>
                                <tr>
                                    <th colspan="4">Total Saldo</th>
                                    <th>Rp. {number_format($saldo, '2', ',', '.')}</th>
                                </tr>
                            </tfoot>
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
            $("#tableBalance").dataTable({
                bSort: false,
                oLanguage: {
                    sUrl: '{base_url()}asset/js/plugins/datatables/Indonesian.json'
                }
            });            
        });
    </script>
{/block}