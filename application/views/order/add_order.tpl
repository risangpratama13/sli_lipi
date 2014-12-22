{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pengajuan Pengujian
            <small>Buat Pengajuan Pengujian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Pengajuan Pengujian</a></li>
            <li><a href="{base_url()}order">Daftar Pengajuan Pengujian</a></li>
            <li class="active">Buat Pengajuan Pengujian</li>
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
                        <table id="tableTest" class="table table-bordered table-striped">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Pengujian</th>
                                    <th>Kategori Pengujian</th>
                                    <th>Satuan</th>
                                    <th>Harga</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                {$no = 1}
                                {foreach $tests as $test}
                                    <tr>
                                        <td>{$no}</td>
                                        <td>{$test->testing_name}</td>
                                        <td>{$test->cat_name}</td>
                                        <td>Per {$test->unit_name}</td>
                                        <td>Rp. {number_format($test->testing_price, '2', ',', '.')}</td>
                                        <td>
                                            <a href="{base_url()}tambah_keranjang/{$test->id}/{$test->category_id}" class="btn btn-flat btn-sm btn-danger">
                                                <i class="fa fa-shopping-cart"></i> Tambahkan Pengujian
                                            </a>
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
        $(function () {
            $("#tableTest").dataTable({
                oLanguage: {
                    sUrl: '{base_url()}asset/js/plugins/datatables/Indonesian.json'
                }
            });           
        });
    </script>
{/block}