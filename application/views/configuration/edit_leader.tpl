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
            <li class="active">Ubah Ketua Kelitian</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">Ubah Ketua Kelitian</h3>
                    </div><!-- /.box-header -->
                    {form_open('edit_leader/`$research_group->id`')}
                    {form_hidden('res_group_id', $research_group->id)}
                    {form_hidden('ori_user_id', $research_group->user_id)}
                    <div class="box-body">
                        <div class="form-group">
                            <label>Deputi Bidang</label>                            
                            {form_input($data.deputi_bidang)}
                        </div>
                        <div class="form-group">
                            <label>Satuan Kerja</label>
                            {form_input($data.satuan_kerja)}
                        </div>
                        <div class="form-group">
                            <label>Kelompok Penelitian</label>
                            {form_input($data.kelompok_penelitian)}
                        </div>
                        <div class="form-group">
                            <label>Ketua Ketelitian</label>
                            {form_dropdown('user', $members, $research_group->user_id, 'class="form-control"')}
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {form_submit('submit', "Ubah Ketua Kelitian", 'class="btn btn-flat btn-success"')}
                    </div>
                    {form_close()}
                </div><!-- /.box -->               
            </div>
        </div>
    </section><!-- /.content -->
{/block}

{block name="addon_plugins"}    
    <script src="{base_url()}asset/js/plugins/jquery-chained/jquery.chained.min.js" type="text/javascript"></script>
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
        $(document).ready(function () {
            $("#research").chained("#researcher");
            $("#research_group").chained("#researcher, #research");
            $("#user").chained("#research_group");
        });
    </script>
{/block}