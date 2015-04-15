{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Konfigurasi Pengguna
            <small>Anggota</small>
        </h1>
        <ol class="breadcrumb">
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#">Konfigurasi Pengguna</a></li>
                <li><a href="{base_url()}anggota">Anggota</a></li>
                <li class="active">Tambah Anggota</li>
            </ol>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Tambah Anggota</h3>
                    </div><!-- /.box-header -->
                    {form_open('tambah_anggota')}
                    <div class="box-body">
                        <div class="form-group">
                            {form_label('Nama Lengkap', 'full_name')}
                            {form_input($data.full_name)}
                            {form_error('full_name','<p class="help-block text-red">','</p>')}
                        </div>
                        <div class="form-group">
                            {form_label('Username', 'username')}
                            {form_input($data.username)}
                            {form_error('username','<p class="help-block text-red">','</p>')}
                        </div>
                        <div class="form-group">
                            {form_label('Password', 'password')}
                            {form_password($data.password)}
                            {form_error('password','<p class="help-block text-red">','</p>')}
                        </div>
                        <div class="form-group">
                            {form_label('Konfirmasi Password', 'password_confirm')}
                            {form_password($data.password_confirm)}
                            {form_error('password_confirm','<p class="help-block text-red">','</p>')}
                        </div>
                        <div class="form-group">                            
                            <label>
                                <input type="radio" name="sex" value="M" checked>
                                Laki-laki
                            </label>
                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                            <label>
                                <input type="radio" name="sex" value="F">
                                Perempuan
                            </label>                           
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="researcher" id="researcher">
                                <option value="">-- Pilih Deputi Bidang --</option>
                                {foreach $data.researchers as $researcher}                            
                                    <option value="{$researcher->id}">{$researcher->researcher_name}</option>                                                
                                {/foreach}
                            </select>
                            {form_error('researcher','<p class="help-block text-red">','</p>')}
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="research" id="research">
                                <option value="">-- Pilih Satuan Kerja --</option>
                                {foreach $data.researches as $research}                            
                                    <option value="{$research->id}" class="{$research->researcher_id}">{$research->research_name}</option>                                                   
                                {/foreach}
                            </select>
                            {form_error('research','<p class="help-block text-red">','</p>')}
                        </div>
                        <div class="form-group">
                            <select class="form-control" name="research_group" id="research_group">
                                <option value="">-- Pilih Kelompok Penelitian --</option>
                                {foreach $data.research_groups as $research_group}                            
                                    <option value="{$research_group->id}" class="{$research_group->researcher_id}\{$research_group->research_id}">{$research_group->res_group_name}</option>                                                   
                                {/foreach}
                            </select>
                            {form_error('research_group','<p class="help-block text-red">','</p>')}
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {form_submit('submit', "Tambahkan Anggota", 'class="btn btn-flat btn-success"')}
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
        });
    </script>
{/block}