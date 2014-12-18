{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Master Data
            <small>Kategori Item</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li class="active"><a href="{base_url()}tipe_item">Kategori Item</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Kategori Item</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a class="btn btn-flat btn-primary" onclick="tambahKategori()">
                            <i class="fa fa-plus-circle"></i> Tambah Kategori Item
                        </a>
                        <br/><br/>
                        <table id="tableType" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori</th>
                                    <th>Jumlah Poin</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {$no = 1}
                                {foreach $types as $type}
                                    <tr>
                                        <td>{$no}</td>
                                        <td>{$type->type_name}</td>
                                        <td>{$type->type_point} Poin</td>
                                        <td>
                                            <button onclick="ubahKategori({$type->id}, '{$type->type_name}', {$type->type_point})" title="Ubah Kategori" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                            <button type="button" onclick="deleteKategori({$type->id})" title="Hapus Kategori" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
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
    <div class="modal fade" id="type-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" name="title">Tambah Kategori Item</h4>
                </div>
                {form_open('master/crud_item_types')}
                    {form_hidden('action', 'add')}
                    {form_hidden('id', 0)}
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-group">
                                {form_label('Nama Kategori', 'type_name')}
                                {form_input($data.type_name)}                            
                            </div>
                        </div>
                        <div class="form-group">
                            {form_label('Jumlah Poin', 'type_point')}
                            <div class="input-group">
                                {form_input($data.type_point)}
                                <span class="input-group-addon">Poin</span>                            
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer clearfix">
                        <button type="button" id="cancel" class="btn btn-danger" onclick="batalkanKategori()"><i class="fa fa-times"></i> Batalkan</button>
                        {form_submit('submit', "Simpan Kategori", 'class="btn btn-flat btn-success pull-left"')}
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
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
        
        function deleteKategori(id) {
            var konfirmasi = confirm("Hapus Kategori Item ?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "{base_url()}master/crud_item_types",
                    data: "action=delete&id=" + id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Kategori Berhasil Dihapus");
                            location.reload();
                        } else {
                            alert(" Kategori Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }

        function ubahKategori(id, name, point) {
            $('input[name="action"]').val("edit");
            $('input[name="id"]').val(id);
            $('input[name="type_name"]').val(name);
            $('input[name="type_point"]').val(point);
            $('[name="title"]').text("Ubah Kategori Item");
            $("#type-modal").modal('show');
        }

        function batalkanKategori() {
            $('input[name="action"]').val("");
            $('input[name="id"]').val("");
            $('input[name="type_name"]').val("");
            $('input[name="type_point"]').val("");
            $('[name="title"]').text("");
            $("#type-modal").modal('hide');
        }
        
        function tambahKategori() {
            $('input[name="action"]').val("add");
            $('input[name="id"]').val("0");
            $('input[name="type_name"]').val("");
            $('input[name="type_point"]').val("");
            $('[name="title"]').text("Tambah Kategori Item");
            $("#type-modal").modal('show');
        }

        $(function () {
            var tableType = $("#tableType").dataTable({
                oLanguage: {
                    sUrl: '{base_url()}asset/js/plugins/datatables/Indonesian.json'
                }
            });
        });
    </script>
{/block}