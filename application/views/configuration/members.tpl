{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Konfigurasi Pengguna
            <small>Anggota</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Konfigurasi Pengguna</a></li>
            <li><a href="{base_url()}anggota">Anggota</a></li>
            <li class="active">Daftar Anggota</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Anggota</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a href="{base_url()}tambah_anggota" class="btn btn-flat btn-primary">
                            <i class="fa fa-plus-circle"></i> Tambah Anggota
                        </a>
                        <br/><br/>
                        <table id="tableAdmin" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Nama Lengkap</th>
                                    <th>Username</th>
                                    <th>Terdaftar</th>
                                    <th>Terakhir Login</th>
                                    <th>Operator</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>                              
                                {foreach $members as $member}
                                    <tr>
                                        <td>{$member->full_name}</td>
                                        <td>{$member->username}</td>
                                        <td>{date('j F Y H:i:s', $member->created_on)}</td>
                                        <td>
                                            {if $member->last_login != 0}
                                                {date('j F Y H:i:s', $member->last_login)}
                                            {/if}
                                        </td>
                                        <td>
                                            {$checked = ""}
                                            {foreach $member->groups as $group}                                               
                                                {if $group->id == 4}
                                                    {$checked = "checked"}
                                                {/if}
                                            {/foreach}
                                            <input type="checkbox" data-username="{$member->username}" data-id="{$member->id}" name="group" data-size="mini" {$checked}>
                                        </td>
                                        <td>
                                            {if $member->active == 1}
                                                <input type="checkbox" data-username="{$member->username}" data-id="{$member->id}" name="status" data-size="mini" checked>
                                            {else}
                                                <input type="checkbox" data-username="{$member->username}" data-id="{$member->id}" name="status" data-size="mini">
                                            {/if}
                                        </td>
                                        <td>
                                            <a href="{base_url()}ganti_password/{$member->username}" title="Ubah Password" class="btn btn-flat btn-sm bg-navy"><i class="fa fa-unlock-alt"></i></a>
                                            <button onclick="deleteUser({$member->id},'{$member->username}')" title="Hapus Admin" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
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
    {link_tag('asset/css/bootstrap-switch/bootstrap-switch.min.css')}
{/block}

{block name="addon_plugins"}
    <script src="{base_url()}asset/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="{base_url()}asset/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="{base_url()}asset/js/plugins/bootstrap-switch/bootstrap-switch.min.js" type="text/javascript"></script>
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
        $(function () {
            $("#tableAdmin").dataTable();
            $('input[name="status"]').bootstrapSwitch();
            $('input[name="group"]').bootstrapSwitch();
            $('input[name="status"]').on({
                'switchChange.bootstrapSwitch': function (event, state) {
                    var status = $(this).is(':checked') ? '1' : '0';
                    var id = $(this).attr("data-id");
                    var username = $(this).attr("data-username");
                    if (status == "0") {
                        var url = "{base_url()}auth/deactivate";
                    } else if (status == "1") {
                        var url = "{base_url()}auth/activate";
                    }
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: "id=" + id,
                        success: function (data) {
                            if (data == "Success") {
                                if(status == "0") {
                                    alert(" Akun " + username + " Tidak Aktif");
                                } else {
                                    alert(" Akun " + username + " Aktif");
                                }
                            }
                        }
                    });
                }
            });
            $('input[name="group"]').on({
                'switchChange.bootstrapSwitch': function (event, state) {
                    var status = $(this).is(':checked') ? 'add' : 'remove';
                    var id = $(this).attr("data-id");
                    var username = $(this).attr("data-username");
                    if (status == "add") {
                        var url = "{base_url()}auth/operator/add";
                    } else if (status == "remove") {
                        var url = "{base_url()}auth/operator/remove";
                    }
                    $.ajax({
                        type: "POST",
                        url: url,
                        data: "id=" + id,
                        success: function (data) {
                            if (data == "Success") {
                                if(status == "remove") {
                                    alert(" Akun " + username + " Dihapus Dari Grup Operator");
                                } else {
                                    alert(" Akun " + username + " Dimasukkan Ke Grup Operator");
                                }
                            }
                        }
                    });
                }
            });            
        });

        function deleteUser(id, username) {
            var konfirmasi = confirm("Hapus Akun " + username + "?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "{base_url()}auth/delete",
                    data: "id=" + id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Akun " + username + " Dihapus");
                            location.reload();
                        } else {
                            alert(" Akun " + username + " Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }
    </script>
{/block}