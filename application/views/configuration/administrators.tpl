{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Konfigurasi Pengguna
            <small>Administrator</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Konfigurasi Pengguna</a></li>
            <li><a href="#">Daftar Administrator</a></li>
            <li class="active">Administrator</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Administrator</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a href="{base_url()}tambah_administrator" class="btn btn-flat btn-primary">
                            <i class="fa fa-plus-circle"></i> Tambah Administrator
                        </a>
                        <br/><br/>
                        <table id="tableAdmin" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>Username</th>
                                    <th>Terdaftar</th>
                                    <th>Terakhir Login</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>                              
                                {foreach $administrators as $admin}
                                    <tr>
                                        <td>{$admin->username}</td>
                                        <td>{date('j F Y H:i:s', $admin->created_on)}</td>
                                        <td>{date('j F Y H:i:s', $admin->last_login)}</td>
                                        <td>
                                            {if $admin->active == 1}
                                                <input type="checkbox" name="status" data-size="mini" checked>
                                            {else}
                                                <input type="checkbox" name="status" data-size="mini">
                                            {/if}
                                        </td>
                                        <td>
                                            <a href="{base_url()}ganti_password" title="Ganti Password" class="btn btn-flat btn-sm bg-navy"><i class="fa fa-unlock-alt"></i></a>
                                            <button title="Hapus Admin" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
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
            $("input[name='status']").bootstrapSwitch();
        });
    </script>
{/block}