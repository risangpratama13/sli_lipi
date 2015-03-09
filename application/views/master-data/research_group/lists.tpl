{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Master Data
            <small>Kelompok Penelitian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li class="active"><a href="{base_url()}research_group">Kelompok Penelitian</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Kelompok Penelitian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <a class="btn btn-flat btn-primary" href="{base_url()}research_group/add">
                            <i class="fa fa-plus-circle"></i> Tambah Kelompok Penelitian
                        </a>
                        <br/><br/>
                        <table id="tableResearchGroup" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Kelompok Penelitian</th>
                                    <th>Deputi Bidang</th>
                                    <th>Satuan Kerja</th>
                                    <th>Ketua Ketelitian</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {$no = 1}
                                {foreach $research_groups as $research_group}
                                    <tr>
                                        <td>{$no}</td>
                                        <td>{$research_group->res_group_name}</td>
                                        <td>{$research_group->researcher_name}</td>
                                        <td>{$research_group->research_name}</td>
                                        <td>
                                            {if $research_group->user_id != NULL}
                                                {$users[$research_group->user_id]}
                                            {/if}
                                        </td>
                                        <td>
                                            <a href="{base_url()}research_group/edit/{$research_group->id}" title="Ubah Kelompok Penelitian" class="btn btn-flat btn-sm btn-warning"><i class="fa fa-edit"></i></a>
                                            <button type="button" onclick="deleteResearchGroup({$research_group->id})" title="Hapus Kelompok Penelitian" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i></button>
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

{block name="addon_styles"}
    {link_tag('asset/css/datatables/dataTables.bootstrap.css')}
{/block}

{block name="addon_plugins"}
    <script src="{base_url()}asset/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="{base_url()}asset/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
        function deleteResearchGroup(id) {
            var konfirmasi = confirm("Hapus Kelompok Penelitian ?");
            if (konfirmasi == true) {
                $.ajax({
                    type: "POST",
                    url: "{base_url()}master/delete_research_group",
                    data: "id="+id,
                    success: function (data) {
                        if (data == "Success") {
                            alert(" Kelompok Penelitian Berhasil Dihapus");
                            location.reload();
                        } else {
                            alert(" Kelompok Penelitian Tidak Berhasil Dihapus");
                        }
                    }
                });
            }
        }
        
        $(function () {
            var tableResearchGroup = $("#tableResearchGroup").dataTable({
                oLanguage: {
                    sUrl: '{base_url()}asset/js/plugins/datatables/Indonesian.json'
                }
            });
        });
    </script>
{/block}