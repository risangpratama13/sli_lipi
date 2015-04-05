{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Konfirmasi Pengujian
            <small>                
                Daftar Pengujian
            </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Kegiatan Pengujian</a></li>
            <li class="active">
                <a href="{base_url()}konfirmasi_pengujian">Daftar Pengujian</a>
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Pengujian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="tableTestHistory" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Anggota</th>
                                    <th>Pengujian</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach $tests as $test}
                                    <tr>
                                        <td>{$test->anggota}</td>                                        
                                        <td>{$test->testing_name}</td>
                                        {if $test->start_date eq "0000-00-00 00:00:00"}
                                            <td>Belum Diatur</td>
                                        {else}
                                            <td>{date("j F Y H:i", strtotime($test->start_date))}</td>
                                        {/if}
                                        {if $test->status eq "P"}
                                            <td><span class="label label-warning">Pending</span></td>
                                        {else if $test->status eq "AL"}
                                            <td><span class="label label-success">Telah Disetujui</span></td>
                                        {/if}                                        
                                        <td>
                                            {if $test->status eq "P"}
                                                <a href="{base_url()}confirm/{$test->id}" class="btn btn-flat btn-sm btn-primary">Konfirmasi</a>
                                            {/if}
                                            <a href="{base_url()}view_test/{$test->id}" class="btn btn-flat btn-sm btn-info" title="Lihat Pengujian"><i class="fa fa-eye"></i></a>
                                        </td>
                                    </tr>
                                {/foreach}
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->               
            </div>
        </div>
    </section><!-- /.content -->
    <div style="display: none">
        <form action="{base_url()}testing/upload_result" method="POST" enctype="multipart/form-data"> 
            <input type="hidden" name="test_id">
            <input type="file" name="test_result" onchange="$('#submitResult').click()">
            <input type="submit" id="submitResult" name="submit">
        </form>
    </div>
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
                function ubahStatus(id, status) {
                    $.ajax({
                        url: "{base_url()}testing/update_status",
                        type: "POST",
                        data: "id=" + id + "&status=" + status,
                        success: function (data) {
                            if (data == "Success") {
                                location.reload();
                            } else {
                                alert("Gagal Mengubah Status");
                            }
                        }
                    });
                }

                function hapusOrder(id) {
                    $.ajax({
                        url: "{base_url()}testing/delete_order",
                        type: "POST",
                        data: "id=" + id,
                        success: function (data) {
                            if (data == "Success") {
                                location.reload();
                            } else {
                                alert("Gagal Menghapus Order");
                            }
                        }
                    });
                }

                $(document).ready(function () {
                    $("#tableTestHistory").dataTable({
                        oLanguage: {
                            sUrl: '{base_url()}asset/js/plugins/datatables/Indonesian.json'
                        }
                    });

                    $("#btnUpload").click(function () {
                        var test_id = $(this).attr("data-id");
                        $("input[name='test_id']").val(test_id);
                        $("input[name='test_result']").click();
                    });
                });
    </script>
{/block}