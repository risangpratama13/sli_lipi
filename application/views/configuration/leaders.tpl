{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Konfigurasi Pengguna
            <small>Ketua Kelitian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Konfigurasi Pengguna</a></li>
            <li><a href="{base_url()}leader">Ketua Kelitian</a></li>
            <li class="active">Daftar Ketua Kelitian</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Ketua Kelitian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a href="{base_url()}tambah_leader" class="btn btn-flat btn-primary">
                            <i class="fa fa-plus-circle"></i> Tambah Ketua Kelitian
                        </a>
                        <br/><br/>
                        <table id="tableLeader" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Kelompok Penelitian</th>
                                    <th>Deputi Bidang</th>
                                    <th>Satuan Kerja</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>                              
                                {foreach $leaders as $leader}
                                    {if $add_data["res_group_id_`$leader->user_id`"] != NULL}
                                        <tr>
                                            <td>{$leader->full_name}</td>
                                            <td>{$add_data["research_group_`$leader->user_id`"]}</td>
                                            <td>{$add_data["researcher_`$leader->user_id`"]}</td>
                                            <td>{$add_data["research_`$leader->user_id`"]}</td>
                                            <td>
                                                <a href="{base_url()}anggota/{$leader->username}" title="Profil Anggota" class="btn btn-flat btn-sm btn-info"><i class="fa fa-eye"></i></a>
                                                <a href="{base_url()}edit_leader/{$add_data["res_group_id_`$leader->user_id`"]}" title="Ubah Ketua Ketelitian" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-edit"></i></a>                                            
                                            </td>
                                        </tr>
                                    {/if}
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
            $("#tableLeader").dataTable({
                oLanguage: {
                    sUrl: '{base_url()}asset/js/plugins/datatables/Indonesian.json'
                }
            });
        });

        function deleteLeader(id, username) {
            var konfirmasi = confirm("Hapus " + username + " Sebagai Leader ?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "{base_url()}auth/delete_operator",
                    data: "user_id=" + id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Leader " + username + " Dihapus");
                            location.reload();
                        } else {
                            alert(" Leader " + username + " Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }
    </script>
{/block}