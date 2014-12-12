{extends file="configuration/profile/profile.tpl"}
{block name="profile_menu"}
    <ul class="nav nav-pills nav-stacked">
        <li><a href="{base_url()}profil"><i class="fa fa-info-circle"></i> Informasi Pribadi</a></li>
            {if in_array("members", $groups)}
                <li class="active"><a href="{base_url()}profil/ubah_profil"><i class="fa fa-pencil-square-o"></i> Ubah Informasi Pribadi</a></li>
            {/if}
        <li><a href="{base_url()}profil/ubah_password"><i class="fa fa-unlock"></i> Ubah Password</a></li>
    </ul>
{/block}

{block name="profile_content"}
    <!-- Content Header (Page header) -->
    <h3 class="header">Informasi Akun</h3>
    <div class="box box-solid">
        {form_open("profil/ubah_password")}
        {form_hidden('identity',$data.identity)}
        <div class="box-body">
            <br/>
            {$data.message}
            <div class="form-group">
                {form_label('Password Lama', 'old')}
                {form_password($data.old_password)}
                {form_error('old','<p class="help-block text-red">','</p>')}
            </div>
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
            {form_submit('submit', "Simpan Password Baru", 'class="btn btn-warning"')}
        </div>
        {form_close()}
    </div><!-- /.box -->
{/block}