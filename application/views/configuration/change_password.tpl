{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Konfigurasi Pengguna
            {if in_array("members", $usergroups)}
                <small>Anggota</small>
            {else}
                <small>Administrator</small>
            {/if}            
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Konfigurasi Pengguna</a></li>
            {if in_array("members", $usergroups)}
                <li><a href="{base_url()}anggota">Anggota</a></li>            
            {else}
                <li><a href="{base_url()}administrator">Administrator</a></li>            
            {/if}  
            <li class="active">Ubah Password</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">Ubah Password {$data.identity}</h3>
                    </div><!-- /.box-header -->
                    {form_open("ganti_password/`$data.identity`")}
                    {form_hidden('identity',$data.identity)}
                    <div class="box-body">
                        <br/>
                        {$data.message}
                        <div class="form-group">
                            {form_label('Password Baru', 'new')}
                            {form_password($data.new_password)}
                            {form_error('new','<p class="help-block text-red">','</p>')}
                        </div>
                        <div class="form-group">
                            {form_label('Konfirmasi Password Baru', 'new_confirm')}
                            {form_password($data.new_password_confirm)}
                            {form_error('new_confirm','<p class="help-block text-red">','</p>')}
                        </div>
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        {form_submit('submit', "Simpan Password Baru", 'class="btn btn-flat btn-success"')}
                    </div>
                    {form_close()}
                </div><!-- /.box -->               
            </div>
        </div>
    </section><!-- /.content -->
{/block}