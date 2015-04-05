{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Detail Pengujian
            <small>{$test_order->testing_name}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><a href="{base_url()}view_test/{$test_order->id}">Detail Pengujian</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-file-text-o"></i>
                        <h3 class="box-title">Detail Pengujian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table class="table table-striped">
                            <tr>
                                <td>Anggota</td>
                                <td>{$test_order->anggota}</td>
                            </tr>
                            <tr>
                                <td>Pengujian</td>
                                <td>{$test_order->testing_name}</td>
                            </tr>                            
                            <tr>
                                <td>Tanggal Mulai Pengujian</td>
                                {if $test_order->start_date eq "0000-00-00 00:00:00"}
                                    <td>Belum Diatur</td>
                                {else}
                                    <td>{date("j F Y H:i", strtotime($test_order->start_date))}</td>
                                {/if}                                
                            </tr>
                            <tr>
                                <td>Tanggal Selesai Pengujian</td>
                                {if $test_order->finish_date eq "0000-00-00 00:00:00"}
                                    <td>Belum Diatur</td>
                                {else}
                                    <td>{date("j F Y H:i", strtotime($test_order->finish_date))}</td>
                                {/if}
                            </tr>
                            <tr>
                                <td>Periode</td>
                                {if $test_order->finish_date eq "0000-00-00 00:00:00"}
                                    <td>&nbsp;</td>
                                {else}
                                    <td>{date_diff tanggal_1=date("Y-m-d", strtotime($test_order->start_date)) tanggal_2=date("Y-m-d", strtotime($test_order->finish_date))} Hari</td>
                                {/if}
                            </tr>
                            <tr>
                                <td>Operator Pengujian</td>
                                <td>{$test_order->full_name}</td>
                            </tr>
                            <tr>
                                <td>Status Pengujian</td>
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
                            </tr>                            
                            {if !empty($tools)}
                                <tr>
                                    <td>Alat Pengujian</td>
                                    <td>
                                        <ul>
                                            {foreach $tools as $tool}
                                                <li>{$tool->tool_name} ({$tool->qty})</li>
                                                {/foreach}
                                        </ul>
                                    </td>
                                </tr>
                            {/if}
                        </table>
                    </div><!-- /.box-body -->
                    {if in_array("kelitian", $groups)}
                        {if $test_order->status eq "P"}
                            <div class="box-footer">
                                <button onclick="ubahStatus({$test_order->id}, 'AL')" class="btn btn-flat btn-sm btn-success"><i class="fa fa-check"></i> Setujui Pengujian</button>
                                <button onclick="ubahStatus({$test_order->id}, 'D')" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-times"></i> Tolak Pengujian</button>
                            </div>
                        {/if}                    
                    {/if}
                </div><!-- /.box -->
            </div><!-- ./col -->      
        </div><!-- /.row -->                
    </section><!-- /.content -->
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
        function ubahStatus(id, status) {
            $.ajax({
                url: "{base_url()}testing/update_status",
                type: "POST",
                data: "id=" + id + "&status=" + status,
                success: function (data) {
                    if (data == "Success") {
                        location.href = "{base_url()}konfirmasi_pengujian";
                    } else {
                        alert("Gagal Mengubah Status");
                    }
                }
            });
        }
    </script>
{/block}