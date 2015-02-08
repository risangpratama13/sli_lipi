{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kegiatan Pengujian
            <small>
                {if $type eq "member"}
                    Pengujian Anggota
                {else if $type eq "operator"}
                    Pengujian Operator
                {else if $type eq "all"}
                    Daftar Pengujian
                {/if}  
            </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Kegiatan Pengujian</a></li>
            <li class="active">
                {if $type eq "member"}
                    <a href="{base_url()}pengujian_member">Pengujian Anggota</a>
                {else if $type eq "operator"}
                    <a href="{base_url()}pengujian_operator">Pengujian Operator</a>
                {else if $type eq "all"}
                    <a href="{base_url()}history_pengujian">Daftar Pengujian</a>
                {/if}                
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
                        {if !empty($messages)}
                            <div class="alert alert-danger alert-dismissable">
                                <i class="fa fa-ban"></i>
                                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                {foreach $messages as $message}
                                    {$message}
                                {/foreach}
                            </div>
                        {/if}
                        <table id="tableTestHistory" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    {if $type eq "operator" or $type eq "all"}
                                        <th>Anggota</th>
                                        {/if}
                                    <th>Pengujian</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Periode</th>
                                        {if $type eq "member" or $type eq "all"}
                                        <th>Operator</th>
                                        {/if}                                    
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach $tests as $test}
                                    <tr>
                                        {if $type eq "operator" or $type eq "all"}
                                            <td>{$test->anggota}</td>
                                        {/if}
                                        <td>{$test->testing_name}</td>
                                        {if $test->start_date eq "0000-00-00 00:00:00"}
                                            <td>Belum Diatur</td>
                                        {else}
                                            <td>{date("j F Y H:i", strtotime($test->start_date))}</td>
                                        {/if}
                                        {if $test->finish_date eq "0000-00-00 00:00:00"}
                                            <td>Belum Diatur</td>
                                        {else}
                                            <td>{date("j F Y H:i", strtotime($test->finish_date))}</td>
                                        {/if}
                                        {if $test->finish_date eq "0000-00-00 00:00:00"}
                                            <td>&nbsp;</td>
                                        {else}
                                            <td>{date_diff tanggal_1=date("Y-m-d", strtotime($test->start_date)) tanggal_2=date("Y-m-d", strtotime($test->finish_date))} Hari</td>
                                        {/if}
                                        {if $type eq "member" or $type eq "all"}
                                            <td>{$test->operator}</td>     
                                        {/if}                                                                           
                                        {if $test->status eq "P"}
                                            <td><span class="label label-warning">Pending</span></td>
                                        {else if $test->status eq "O"}
                                            <td><span class="label label-success">Ok</span></td>
                                        {else if $test->status eq "D"}
                                            <td><span class="label label-danger">Denied</span></td>
                                        {else if $test->status eq "F"}
                                            <td><span class="label label-info">Finish</span></td>
                                        {/if}                                        
                                        <td>
                                            {if $test->status eq "P"}
                                                {if $type eq "operator"}
                                                    <a href="{base_url()}confirm/{$test->id}" class="btn btn-flat btn-sm btn-primary">Konfirmasi</a>
{*                                                    <button title="Setujui Pengujian" id="accTest" data-id="{$test->id}" class="btn btn-flat btn-sm btn-success"><i class="fa fa-check"></i></button>*}
{*                                                    <button title="Tolak Pengujian" onclick="ubahStatus({$test->id}, 'D')" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-times"></i></button>*}
                                                {else}
                                                    &nbsp;
                                                {/if}
                                            {else if $test->status eq "O"}
                                                {if $type eq "operator"}
                                                    <button onclick="ubahStatus({$test->id}, 'F')" class="btn btn-flat btn-sm btn-default"><i class="fa fa-flag-checkered"></i> Pengujian Selesai</button>
                                                {else}
                                                    &nbsp;
                                                {/if}
                                            {else if $test->status eq "D"}
                                                {if $type eq "member"}
                                                    <button onclick="hapusOrder({$test->id})" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i> Hapus</button>
                                                {else}
                                                    &nbsp;
                                                {/if}
                                            {else if $test->status eq "F"}
                                                {if $test->url_file eq ""}
                                                    {if $type eq "operator"}
                                                        <button id="btnUpload" class="btn btn-flat btn-sm btn-default" data-id="{$test->id}"><i class="fa fa-upload"></i> Unggah Hasil Pengujian</button>
                                                    {else}
                                                        &nbsp;
                                                    {/if}
                                                {else}
                                                    <a href="{base_url()}asset/test_results/{$test->url_file}" class="btn btn-flat btn-sm btn-primary"><i class="fa fa-download"></i> Unduh Hasil Pengujian</a>
                                                {/if}
                                            {/if}
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

{block name="modal"}
    <div class="modal fade" id="accTest-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" name="title">Setujui Pengujian</h4>
                </div>
                <input type="hidden" name="id">
                <input type="hidden" name="status" value="O">
                <div class="modal-body">
                    <div class="form-group">                        
                        <label for="start_date">Tanggal Mulai Pengujian</label>                
                        <div class="input-group">
                            <div class="input-group-addon">
                                <i class="fa fa-calendar"></i>
                            </div>
                            <input type="text" name="start_date" class="form-control" data-inputmask="'alias': 'yyyy-mm-dd'" value="{date('Y-m-d')}" data-mask/>
                        </div>                        
                    </div>
                    <div class="bootstrap-timepicker">
                        <div class="form-group">
                            <label>Jam Mulai Pengujian</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-clock-o"></i>
                                </div>
                                <input type="text" name="start_time" class="form-control timepicker"/>                                
                            </div><!-- /.input group -->
                        </div><!-- /.form group -->
                    </div>
                </div>
                <div class="modal-footer clearfix">
                    <button type="button" id="cancel" class="btn btn-danger"><i class="fa fa-times"></i> Batalkan</button>
                    <button type="button" id="submit" class="btn btn-success"><i class="fa fa-check"></i> Setujui Pengujian</button>
                </div>
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
{/block}

{block name="addon_styles"}
    {link_tag('asset/css/datatables/dataTables.bootstrap.css')}
    {link_tag('asset/css/timepicker/bootstrap-timepicker.min.css')}
{/block}

{block name="addon_plugins"}
    <script src="{base_url()}asset/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="{base_url()}asset/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="{base_url()}asset/js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="{base_url()}asset/js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>    
    <script src="{base_url()}asset/js/plugins/timepicker/bootstrap-timepicker.min.js" type="text/javascript"></script>    
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
        function ubahStatus(id, status) {
            $.ajax({
                url : "{base_url()}testing/update_status",
                type: "POST",
                data: "id="+id+"&status="+status,
                success: function(data) {
                    if(data == "Success") {
                        location.reload();
                    } else {
                        alert("Gagal Mengubah Status");
                    }
                }
            });
        }
        
        function hapusOrder(id) {
            $.ajax({
                url : "{base_url()}testing/delete_order",
                type: "POST",
                data: "id="+id,
                success: function(data) {
                    if(data == "Success") {
                        location.reload();
                    } else {
                        alert("Gagal Menghapus Order");
                    }
                }
            });
        }
        
        $(document).ready(function() {
            $("#tableTestHistory").dataTable({
                oLanguage: {
                    sUrl: '{base_url()}asset/js/plugins/datatables/Indonesian.json'
                }
            });
            
            $("[data-mask]").inputmask();
            $(".timepicker").timepicker({
                showInputs: false,
                showMeridian: false
            });
            
            $("#btnUpload").click(function() {
                var test_id = $(this).attr("data-id");
                $("input[name='test_id']").val(test_id);
                $("input[name='test_result']").click();
            });
            
            $("#accTest").click(function() {
                var id = $(this).attr("data-id");
                $("input[name='id']").val(id);
                $("#accTest-modal").modal('show');
            });
            
            $("#cancel").click(function() {
                $("input[name='id']").val("");
                $("input[name='start_date']").val("");
                $("input[name='start_time']").val("");
                $("#accTest-modal").modal('hide');
            });
            
            $("#submit").click(function() {
                var id = $("input[name='id']").val();
                var start_date = $("input[name='start_date']").val();
                var status = $("input[name='status']").val();
                var start_time = $("input[name='start_time']").val();
                
                $.ajax({
                    url : "{base_url()}testing/update_status",
                    type: "POST",
                    data: "id="+id+"&status="+status+"&start_date="+start_date+"&start_time="+start_time,
                    success: function(data) {
                        if(data == "Success") {
                            location.reload();
                        } else {
                            alert("Gagal Mengubah Status");
                        }
                    }
                });
            });
        });     
    </script>
{/block}