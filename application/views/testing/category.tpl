{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pengujian
            <small>Kategori Pengujian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Pengujian</a></li>
            <li class="active"><a href="{base_url()}kategori_pengujian">Kategori Pengujian</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Kategori Pengujian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a class="btn btn-flat btn-primary" onclick="tambahKategori()">
                            <i class="fa fa-plus-circle"></i> Tambah Kategori Pengujian
                        </a>
                        <br/><br/>
                        <table id="tableCategory" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kategori Pengujian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {$no = 1}
                                {foreach $categories as $category}
                                    <tr>
                                        <td>{$no}</td>
                                        <td>{$category->cat_name}</td>
                                        <td>
                                            <button onclick="ubahKategori({$category->id}, '{$category->cat_name}')" title="Ubah Kategori" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-edit"></i></button>
                                            <button type="button" onclick="deleteKategori({$category->id})" title="Hapus Kategori Pengujian" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
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
    <div class="modal fade" id="category-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" name="title">Tambah Kategori Pengujian</h4>
                </div>
                {form_open('testing/crud_categories')}
                    {form_hidden('action', 'add')}
                    {form_hidden('id', 0)}
                    <div class="modal-body">
                        <div class="form-group">
                            <div class="form-group">
                                {form_label('Kategori Pengujian', 'cat_name')}
                                {form_input($cat_name)}                            
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
        function deleteKategori(id) {
            var konfirmasi = confirm("Hapus Kategori Pengujian ?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "{base_url()}testing/crud_categories",
                    data: "action=delete&id="+id,
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
        
        function ubahKategori(id, name) {
            $('input[name="action"]').val("edit");
            $('input[name="id"]').val(id);
            $('input[name="cat_name"]').val(name);
            $('[name="title"]').text("Ubah Kategori Pengujian");
            $("#category-modal").modal('show');
        }

        function batalkanKategori() {
            $('input[name="action"]').val("");
            $('input[name="id"]').val("");
            $('input[name="cat_name"]').val("");
            $('[name="title"]').text("");
            $("#category-modal").modal('hide');
        }
        
        function tambahKategori() {
            $('input[name="action"]').val("add");
            $('input[name="id"]').val("0");
            $('input[name="cat_name"]').val("");
            $('[name="title"]').text("Tambah Kategori Pengujian");
            $("#category-modal").modal('show');
        }
        
        $(function () {
            $("#tableCategory").dataTable({
                oLanguage: {
                    sUrl: '{base_url()}asset/js/plugins/datatables/Indonesian.json'
                }
            });
        });
    </script>
{/block}