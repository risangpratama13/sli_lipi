{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Item
            <small>Daftar Item</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Item</a></li>
            <li class="active"><a href="{base_url()}item">Daftar Item</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Item</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        {if in_array("members", $groups)}
                            <a href="{base_url()}tambah_item" class="btn btn-flat btn-primary">
                                <i class="fa fa-plus-circle"></i> Tambah Item
                            </a>                            
                            <br/><br/>
                        {/if}
                        <table id="tableAccount" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    {if in_array("admin", $groups) or in_array("superadmin", $groups)}
                                        <th>Anggota</th>
                                        {/if}
                                    <th>Judul Paper</th>
                                    <th>Kategori</th>
                                    <th>Tanggal Upload</th>
                                    <th>Poin</th>
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach $items as $item}
                                    <tr>
                                        {if in_array("admin", $groups) or in_array("superadmin", $groups)}
                                            <td>{$item->full_name}</td>                                        
                                        {/if}
                                        {if file_exists("asset/items/`$item->url`")}
                                            {$url = "asset/items/`$item->url`"}
                                        {else}                                            
                                            {$url = $item->url}
                                        {/if}
                                        <td><a href="{$url}" target="_blank">{$item->item_title}</a></td>
                                        <td>{$item->type_name}</td>
                                        <td>{date('j F Y H:i:s', strtotime($item->upload_date))}</td>
                                        <td>{$item->type_point}</td>
                                        <td>
                                            {if $item->status eq "O"}
                                                <span class="label label-success">Ok</span>
                                            {else if $item->status eq "P"}
                                                <span class="label label-warning">Pending</span>
                                            {else if $item->status eq "D"}
                                                <span class="label label-danger">Denied</span>
                                            {/if}
                                        </td>
                                        <td>
                                            {if in_array("admin", $groups) or in_array("superadmin", $groups)}
                                                {if $item->status eq "P"}
                                                    <button title="Setujui Item" onclick="ubahStatus({$item->id}, 'O')" class="btn btn-flat btn-sm btn-success"><i class="fa fa-check"></i></button>
                                                    <button title="Tolak Item" onclick="ubahStatus({$item->id}, 'D')" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-times"></i></button>                                                    
                                                {/if}
                                            {else}
                                                {if $item->status eq "P"}
                                                    <a href="{base_url()}ubah_item/{$item->id}" title="Ubah Item" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                                    <button title="Hapus Item" onclick="hapusItem({$item->id})" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                                                {/if}
                                            
                                                {if $item->status eq "D"}
                                                    <button title="Hapus Item" onclick="hapusItem({$item->id})" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
                                                {/if}
                                            {/if}
                                            <textarea id="desc{$item->id}" style="display: none">{$item->description}</textarea>
                                            <button onclick="openDesc({$item->id})" title="Deskripsi Item" class="btn btn-flat btn-sm btn-info"><i class="fa fa-align-left"></i></button>                                         
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

{block name="modal"}
    <div class="modal fade" id="description-modal" tabindex="-1" role="dialog" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    <h4 class="modal-title"><i class="fa fa-align-left"></i> Deskripsi Item</h4>
                </div>
                <div class="modal-body">
                    <p id="block-desc"></p>
                </div>                    
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
        $(function () {
            $("#tableAccount").dataTable({
                oLanguage: {
                    sUrl: '{base_url()}asset/js/plugins/datatables/Indonesian.json'
                }
            });            
        });

        function ubahStatus(id, status) {
            if(status == "O") {
                var konfirmasi = confirm("Setujui Item ?");
            } else if(status == "D") {
                var konfirmasi = confirm("Tolak Item ?");
            }
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "{base_url()}account/edit_item",
                    data: "id=" + id + "&status="+status,
                    success: function (data) {
                        alert(data);
                        location.reload();
                    }
                });
            }
        }

        function hapusItem(id) {
            var konfirmasi = confirm("Hapus Item ?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "{base_url()}account/delete_item",
                    data: "id=" + id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Item Berhasil Dihapus");
                            location.reload();
                        } else {
                            alert(" Item Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }
        
        function openDesc(id) {
            var desc = $("#desc"+id).val();
            $("#block-desc").text(desc);
            $("#description-modal").modal('show');            
        }
    </script>
{/block}