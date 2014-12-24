{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kegiatan Pengujian
            <small>
                {if $type eq "member"}
                    Pengujian Anggota
                {else if $type eq "operator"}
                    Pengujian Operator
                {else if $type eq "all"}
                    Daftar Pengujian
                {/if}  
            </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Kegiatan Pengujian</a></li>
            <li class="active">
                {if $type eq "member"}
                    <a href="{base_url()}pengujian_member">Pengujian Anggota</a>
                {else if $type eq "operator"}
                    <a href="{base_url()}pengujian_operator">Pengujian Operator</a>
                {else if $type eq "all"}
                    <a href="{base_url()}history_pengujian">Daftar Pengujian</a>
                {/if}                
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box">
                    <div class="box-header">
                        <h3 class="box-title">Daftar Pengujian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <table id="tableTestHistory" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    {if $type eq "operator" or $type eq "all"}
                                        <th>Anggota</th>
                                    {/if}
                                    <th>Pengujian</th>
                                    <th>Tanggal Mulai</th>
                                    <th>Tanggal Selesai</th>
                                    <th>Periode</th>
                                    {if $type eq "member" or $type eq "all"}
                                        <th>Operator</th>
                                    {/if}                                    
                                    <th>Status</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {foreach $tests as $test}
                                    <tr>
                                        {if $type eq "operator" or $type eq "all"}
                                            <td>{$test->anggota}</td>
                                        {/if}
                                        <td>{$test->testing_name}</td>
                                        {if $test->start_date eq "0000-00-00 00:00:00"}
                                            <td>Belum Diatur</td>
                                        {else}
                                            <td>{date("j F Y H:i", strtotime($test->start_date))}</td>
                                        {/if}
                                        {if $test->finish_date eq "0000-00-00 00:00:00"}
                                            <td>Belum Diatur</td>
                                        {else}
                                            <td>{date("j F Y H:i", strtotime($test->finish_date))}</td>
                                        {/if}
                                        {if $test->finish_date eq "0000-00-00 00:00:00"}
                                            <td>&nbsp;</td>
                                        {else}
                                            <td>{date_diff tanggal_1=date("Y-m-d", strtotime($test->start_date)) tanggal_2=date("Y-m-d", strtotime($test->finish_date))} Hari</td>
                                        {/if}
                                        {if $type eq "member" or $type eq "all"}
                                            <td>{$test->operator}</td>     
                                        {/if}                                                                           
                                        {if $test->status eq "P"}
                                            <td><span class="label label-warning">Pending</span></td>
                                        {else if $test->status eq "O"}
                                            <td><span class="label label-success">Ok</span></td>
                                        {else if $test->status eq "D"}
                                            <td><span class="label label-danger">Denied</span></td>
                                        {else if $test->status eq "F"}
                                            <td><span class="label label-info">Finish</span></td>
                                        {/if}                                        
                                        <td>
                                            {if $test->status eq "P"}
                                                {if $type eq "operator"}
                                                    <button title="Setujui Pengujian" class="btn btn-flat btn-sm btn-success"><i class="fa fa-check"></i></button>
                                                    <button title="Tolak Pengujian" class="btn btn-flat btn-sm btn-danger"><i class="fa fa-times"></i></button>
                                                {else}
                                                    &nbsp;
                                                {/if}
                                            {else if $test->status eq "O"}
                                                {if $type eq "operator"}
                                                    <button class="btn btn-flat btn-sm btn-default"><i class="fa fa-flag-checkered"></i> Pengujian Selesai</button>
                                                {else}
                                                    &nbsp;
                                                {/if}
                                            {else if $test->status eq "D"}
                                                {if $type eq "member"}
                                                    <button class="btn btn-flat btn-sm btn-danger"><i class="fa fa-trash-o"></i> Hapus</button>
                                                {else}
                                                    &nbsp;
                                                {/if}
                                            {else if $test->status eq "F"}
                                                <button class="btn btn-flat btn-sm btn-default"><i class="fa fa-book"></i> Hasil Pengujian</button>
                                            {/if}
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
            $("#tableTestHistory").dataTable({
                oLanguage: {
                    sUrl: '{base_url()}asset/js/plugins/datatables/Indonesian.json'
                }
            });
        });
    </script>
{/block}