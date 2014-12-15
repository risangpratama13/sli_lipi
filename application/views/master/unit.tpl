{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Master Data
            <small>Satuan</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li class="active"><a href="{base_url()}unit">Satuan</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-8">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Satuan</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="tableUnit" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Satuan</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {$no = 1}
                                {foreach $units as $unit}
                                    <tr>
                                        <td>{$no}</td>
                                        <td>{$unit->unit_name}</td>
                                        <td>
                                            {if $unit->unit_status == "Y"}
                                                <input type="checkbox" class="simple" data-id="{$unit->id}" data-unit_name="{$unit->unit_name}" name="status" data-size="mini" checked>
                                            {else}
                                                <input type="checkbox" class="simple" data-id="{$unit->id}" data-unit_name="{$unit->unit_name}" name="status" data-size="mini">
                                            {/if}
                                        </td>
                                        <td>
                                            <button onclick="ubahSatuan({$unit->id}, '{$unit->unit_name}')" title="Ubah Satuan" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                            <button type="button" onclick="deleteSatuan({$unit->id})" title="Hapus Satuan" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                                        </td>
                                    </tr>
                                    {$no = $no + 1}
                                {/foreach}
                            </tbody>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->               
            </div>
            <div class="col-md-4">
                <div class="box box-primary" id="boxForm">
                    <div class="box-header">
                        <h3 class="box-title" name="title">Tambah Satuan</h3>
                    </div><!-- /.box-header -->
                    {form_open('master/crud_units')}
                        {form_hidden('action', 'add')}
                        {form_hidden('id', 0)}
                    <div class="box-body">
                        <div class="form-group">
                            {form_label('Nama Satuan', 'unit_name')}
                            {form_input($unit_name)}
                            {$message}
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {form_submit('submit', "Simpan Satuan", 'class="btn btn-flat btn-success"')}
                        <button type="button" onclick="batalkanUbah()" id="cancel" class="btn btn-flat bg-red" style="display: none">Batalkan</button> 
                    </div>
                    {form_close()}
                </div>
            </div>
        </div>
    </section><!-- /.content -->
{/block}

{block name="addon_styles"}
    {link_tag('asset/css/datatables/dataTables.bootstrap.css')}
    {link_tag('asset/css/bootstrap-switch/bootstrap-switch.min.css')}
{/block}

{block name="addon_plugins"}
    <script src="{base_url()}asset/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="{base_url()}asset/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="{base_url()}asset/js/plugins/bootstrap-switch/bootstrap-switch.min.js" type="text/javascript"></script>
    <script src="{base_url()}asset/js/plugins/jquery-loadJSON/jquery.loadJSON.js" type="text/javascript"></script>
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
        function deleteSatuan(id) {
            var konfirmasi = confirm("Hapus Satuan ?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "{base_url()}master/crud_units",
                    data: "action=delete&id="+id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Satuan Berhasil Dihapus");
                            location.reload();
                        } else {
                            alert(" Satuan Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }
        
        function ubahSatuan(id, unit_name) {
            var data = {
                "title":"Ubah Satuan",
                "action":"edit",
                "id":id,"unit_name":unit_name
            };
            $("#boxForm").loadJSON(data);
            $("#cancel").show();
        }
        
        function batalkanUbah() {
            var data = {
                "title":"Tambahkan Satuan",
                "action":"add",
                "id":0,"unit_name":""
            };
            $("#boxForm").loadJSON(data);
            $("#cancel").hide();
        }
        
        $(function () {
            var tableUnit = $("#tableUnit").dataTable({
                oLanguage: {
                    sUrl: '{base_url()}asset/js/plugins/datatables/Indonesian.json'
                }
            });
            tableUnit.$('input[name="status"]').bootstrapSwitch();
            tableUnit.$('input[name="status"]').on({                
                'switchChange.bootstrapSwitch': function (event, state) {
                    var status = $(this).is(':checked') ? 'Y' : 'N';
                    var id = $(this).attr("data-id");
                    var unit_name = $(this).attr("data-unit_name");
                    $.ajax({
                        type: "POST",
                        url: "{base_url()}master/crud_units",
                        data: "id=" + id +"&status=" + status + "&action=change_status",
                        success: function(data) {
                            if (data == "Success") {
                                if(status == "Y") {
                                    alert(" Satuan " + unit_name + " Aktif");
                                } else {
                                    alert(" Satuan " + unit_name + " Tidak Aktif");
                                }
                            }
                        }
                    });
                }
            });
        });
    </script>
{/block}