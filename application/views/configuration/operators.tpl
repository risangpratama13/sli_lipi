{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Konfigurasi Pengguna
            <small>Operator</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Konfigurasi Pengguna</a></li>
            <li><a href="{base_url()}operator">Operator</a></li>
            <li class="active">Daftar Operator</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Operator</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a href="{base_url()}tambah_operator" class="btn btn-flat btn-primary">
                            <i class="fa fa-plus-circle"></i> Tambah Operator
                        </a>
                        <br/><br/>
                        <table id="tableOperator" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Kategori Pengujian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>                              
                                {foreach $operators as $operator}
                                    <tr>
                                        <td>{$operator->full_name}</td>
                                        <td>{$operator->username}</td>
                                        <td>
                                            <ul>
                                                {foreach $operator->categories as $category}
                                                    <li>{$category->cat_name}</li>
                                                {/foreach}
                                            </ul>
                                        </td>
                                        <td>
                                            <a href="{base_url()}ubah_operator/{$operator->id}" title="Ubah Operator" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <button onclick="deleteOperator({$operator->id}, '{$operator->username}')" title="Hapus Operator" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
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
            $("#tableOperator").dataTable({
                oLanguage: {
                    sUrl: '{base_url()}asset/js/plugins/datatables/Indonesian.json'
                }
            });
        });

        function deleteOperator(id, username) {
            var konfirmasi = confirm("Hapus Akun " + username + " Sebagai Operator ?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "{base_url()}auth/delete_operator",
                    data: "user_id=" + id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Operator " + username + " Dihapus");
                            location.reload();
                        } else {
                            alert(" Operator " + username + " Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }
    </script>
{/block}