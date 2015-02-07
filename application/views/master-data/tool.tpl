{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Master Data
            <small>Alat Pengujian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li class="active"><a href="{base_url()}tool">Alat Pengujian</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Alat Pengujian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a class="btn btn-flat btn-primary" onclick="tambahTool()">
                            <i class="fa fa-plus-circle"></i> Tambah Alat Pengujian
                        </a>
                        <br/><br/>
                        <table id="tableTool" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Alat Pengujian</th>
                                    <th>Jumlah Alat</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {$no = 1}
                                {foreach $tools as $tool}
                                    <tr>
                                        <td>{$no}</td>
                                        <td>{$tool->tool_name}</td>
                                        <td>{$tool->tool_qty}</td>
                                        <td>
                                            <button onclick="ubahTool({$tool->id}, '{$tool->tool_name}', {$tool->tool_qty})" title="Ubah Alat Pengujian" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                            <button type="button" onclick="deleteTool({$tool->id})" title="Hapus Alat Pengujian" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
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

{block name="modal"}
    <div class="modal fade" id="unit-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" name="title">Tambah Alat Pengujian</h4>
                </div>
                {form_open('master/crud_tools')}
                    {form_hidden('action', 'add')}
                    {form_hidden('id', 0)}
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-group">
                                {form_label('Nama Alat Pengujian', 'tool_name')}
                                {form_input($tool_name)}                            
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="form-group">
                                {form_label('Jumlah Alat', 'tool_qty')}
                                {form_input($tool_qty)}                            
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer clearfix">
                        <button type="button" id="cancel" class="btn btn-danger" onclick="batalkanTool()"><i class="fa fa-times"></i> Batalkan</button>
                        {form_submit('submit', "Simpan", 'class="btn btn-flat btn-success pull-left"')}
                    </div>
                {form_close()}
            </div><!-- /.modal-content -->
        </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
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
        function deleteTool(id) {
            var konfirmasi = confirm("Hapus Alat Pengujian?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "{base_url()}master/crud_tools",
                    data: "action=delete&id="+id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Data Alat Pengujian Berhasil Dihapus");
                            location.reload();
                        } else {
                            alert(" Data Alat Pengujian Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }
        
        function ubahTool(id, name, qty) {
            $('input[name="action"]').val("edit");
            $('input[name="id"]').val(id);
            $('input[name="tool_name"]').val(name);
            $('input[name="tool_qty"]').val(qty);
            $('[name="title"]').text("Ubah Alat Pengujian");
            $("#unit-modal").modal('show');
        }

        function batalkanTool() {
            $('input[name="action"]').val("");
            $('input[name="id"]').val("");
            $('input[name="tool_name"]').val("");
            $('input[name="tool_qty"]').val(1);
            $('[name="title"]').text("");
            $("#unit-modal").modal('hide');
        }
        
        function tambahTool() {
            $('input[name="action"]').val("add");
            $('input[name="id"]').val("0");
            $('input[name="tool_name"]').val("");
            $('input[name="tool_qty"]').val(1);
            $('[name="title"]').text("Tambah Alat Pengujian");
            $("#unit-modal").modal('show');
        }
        
        $(function () {
            var tableTool = $("#tableTool").dataTable({
                oLanguage: {
                    sUrl: '{base_url()}asset/js/plugins/datatables/Indonesian.json'
                }
            });
        });
    </script>
{/block}