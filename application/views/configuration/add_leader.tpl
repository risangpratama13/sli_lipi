{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Konfigurasi Pengguna
            <small>Ketua Ketilitian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Konfigurasi Pengguna</a></li>
            <li><a href="{base_url()}leader">Ketua Ketilitian</a></li>
            <li class="active">Tambah Ketua Ketilitian</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Tambah Ketua Ketilitian</h3>
                    </div><!-- /.box-header -->
                    {form_open('tambah_leader')}
                    <div class="box-body">
                        <div class="form-group">
                            <label>Deputi Bidang</label>
                            <select class="form-control" name="researcher" id="researcher">
                                <option value="">-- Pilih Deputi Bidang --</option>
                                {foreach $researchers as $researcher}                                    
                                    <option value="{$researcher->id}">{$researcher->researcher_name}</option>                                                          
                                {/foreach}
                            </select>
                            {form_error('researcher','<p class="help-block text-red">','</p>')}
                        </div>
                        <div class="form-group">
                            <label>Satuan Kerja</label>
                            <select class="form-control" name="research" id="research">
                                <option value="">-- Pilih Satuan Kerja --</option>
                                {foreach $researches as $research}
                                    <option value="{$research->id}" class="{$research->researcher_id}">{$research->research_name}</option>                                                           
                                {/foreach}
                            </select>
                            {form_error('research','<p class="help-block text-red">','</p>')}
                        </div>
                        <div class="form-group">
                            <label>Kelompok Penelitian</label>
                            <select class="form-control" name="research_group" id="research_group">
                                <option value="">-- Pilih Kelompok Penelitian --</option>
                                {foreach $research_groups as $research_group}
                                    <option value="{$research_group->id}" class="{$research_group->researcher_id}\{$research_group->research_id}">{$research_group->res_group_name}</option>                                                                                                                
                                {/foreach}
                            </select>
                            {form_error('research_group','<p class="help-block text-red">','</p>')}
                        </div>
                        <div class="form-group">
                            <label>Ketua Ketelitian</label>
                            <select class="form-control" name="user" id="user">
                                <option value="">-- Pilih Ketua Ketelitian --</option>
                                {foreach $members as $member}
                                    <option value="{$member->id}" class="{$research_group_id[$member->id]}">{$member->full_name}</option>                                                                                                                
                                {/foreach}
                            </select>
                            {form_error('research_group','<p class="help-block text-red">','</p>')}
                        </div>
                    </div><!-- /.box-body -->
                <div class="box-footer">
                    {form_submit('submit', "Tambahkan Operator", 'class="btn btn-flat btn-success"')}
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