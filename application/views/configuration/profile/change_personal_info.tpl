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
    <h3 class="header">Ubah Informasi Pribadi</h3>
    <div class="box box-solid">
        {form_open("profil/ubah_profil")}
        {if empty($member)}
            {form_hidden('oper', 'add')}
        {else}
            {form_hidden('oper', 'edit')}
            {form_hidden('member_id', {$member->id})}
        {/if}
        <div class="box-body">
            <br/>
            {$data.message}
            <div class="form-group">
                {form_label('Nama Lengkap', 'full_name')}
                {form_input($data.full_name)}
                {form_error('full_name','<p class="help-block text-red">','</p>')}
            </div>
            <div class="form-group">
                {form_label('Jenis Kelamin', 'sex')}
                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                {if $user->sex == "M"}
                    <label>
                        {form_radio('sex','M',TRUE)} Laki-laki
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label>
                        {form_radio('sex','F' )} Perempuan
                    </label>
                {else}
                    <label>
                        {form_radio('sex','M')} Laki-laki
                    </label>
                    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                    <label>
                        {form_radio('sex','F', TRUE)} Perempuan
                    </label>
                {/if}
            </div>
            <div class="form-group">
                {form_label('Golongan', 'category')}
                {form_input($data.category)}
                {form_error('category','<p class="help-block text-red">','</p>')}
            </div>
            <div class="form-group">
                {form_label('Jabatan', 'position')}
                {form_input($data.position)}
                {form_error('position','<p class="help-block text-red">','</p>')}
            </div>
            <div class="form-group">
                {form_label('Tempat Lahir', 'birthplace')}
                {form_input($data.birthplace)}
                {form_error('birthplace','<p class="help-block text-red">','</p>')}
            </div>
            <div class="form-group">
                {form_label('Tanggal Lahir', 'birthday')}                
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-calendar"></i>
                    </div>
                    <input type="text" name="birthday" class="form-control" value="{(!empty($member->birthday)) ? $member->birthday : ""}" data-inputmask="'alias': 'yyyy-mm-dd'" data-mask/>
                </div>
                {form_error('birthday','<p class="help-block text-red">','</p>')}
            </div>
            <div class="form-group">
                {form_label('Alamat', 'address')}
                {form_textarea($data.address)}
                {form_error('address','<p class="help-block text-red">','</p>')}
            </div>
            <div class="form-group">
                <label>Propinsi</label>
                <select class="form-control" name="province" id="province">
                    <option value="">-- Pilih Propinsi --</option>
                    {foreach $provinces as $province}
                        {if !empty($member)}
                            {if $member->province_id == $province->id}
                                <option value="{$province->id}" selected="">{$province->prov_name}</option>
                            {else}
                                <option value="{$province->id}">{$province->prov_name}</option>
                            {/if}
                        {else}
                            <option value="{$province->id}">{$province->prov_name}</option>
                        {/if}                        
                    {/foreach}
                </select>
                {form_error('province','<p class="help-block text-red">','</p>')}
            </div>
            <div class="form-group">
                <label>Kabupaten/Kota</label>
                <select class="form-control" name="state" id="state">
                    <option value="">-- Pilih Kabupaten/Kota --</option>
                    {foreach $states as $state}
                        {if !empty($member)}
                            {if $member->state_id == $state->id}
                                <option value="{$state->id}" class="{$state->province_id}" selected="">{$state->state_name}</option>
                            {else}
                                <option value="{$state->id}" class="{$state->province_id}">{$state->state_name}</option>
                            {/if} 
                        {else}
                            <option value="{$state->id}" class="{$state->province_id}">{$state->state_name}</option>
                        {/if}                        
                    {/foreach}
                </select>
                {form_error('state','<p class="help-block text-red">','</p>')}
            </div>
            <div class="form-group">
                {form_label('Nomor Telepon', 'phone')}                
                <div class="input-group">
                    <div class="input-group-addon">
                        <i class="fa fa-phone"></i>
                    </div>
                    <input type="text" name="phone" class="form-control" value="{(!empty($member->phone)) ? $member->phone : ""}" data-inputmask="'mask': ['+62(###)###-##-###']" data-mask/>
                </div>
                {form_error('phone','<p class="help-block text-red">','</p>')}
            </div>
            <div class="form-group">
                <label>Deputi Bidang</label>
                <select class="form-control" name="researcher" id="researcher">
                    <option value="">-- Pilih Deputi Bidang --</option>
                    {foreach $researchers as $researcher}
                        {if !empty($member)}
                            {if $member->researcher_id == $researcher->id}
                                <option value="{$researcher->id}" selected="">{$researcher->researcher_name}</option>
                            {else}
                                <option value="{$researcher->id}">{$researcher->researcher_name}</option>
                            {/if}
                        {else}
                            <option value="{$researcher->id}">{$researcher->researcher_name}</option>
                        {/if}                        
                    {/foreach}
                </select>
                {form_error('researcher','<p class="help-block text-red">','</p>')}
            </div>
            <div class="form-group">
                <label>Satuan Kerja</label>
                <select class="form-control" name="research" id="research">
                    <option value="">-- Pilih Satuan Kerja --</option>
                    {foreach $researches as $research}
                        {if !empty($member)}
                            {if $member->research_id == $research->id}
                                <option value="{$research->id}" class="{$research->researcher_id}" selected="">{$research->research_name}</option>
                            {else}
                                <option value="{$research->id}" class="{$research->researcher_id}">{$research->research_name}</option>
                            {/if}
                        {else}
                            <option value="{$research->id}" class="{$research->researcher_id}">{$research->research_name}</option>
                        {/if}                        
                    {/foreach}
                </select>
                {form_error('research','<p class="help-block text-red">','</p>')}
            </div>
            <div class="form-group">
                {form_label('Kelompok Penelitian', 'research_group')}
                {form_input($data.research_group)}
                {form_error('research_group','<p class="help-block text-red">','</p>')}
            </div>
        </div><!-- /.box-body -->

        <div class="box-footer">
            {form_submit('submit', "Simpan Informasi Pribadi", 'class="btn btn-warning"')}
        </div>
        {form_close()}
    </div><!-- /.box -->
{/block}

{block name="addon_plugins"}
    <script src="{base_url()}asset/js/plugins/input-mask/jquery.inputmask.js" type="text/javascript"></script>
    <script src="{base_url()}asset/js/plugins/input-mask/jquery.inputmask.date.extensions.js" type="text/javascript"></script>
    <script src="{base_url()}asset/js/plugins/input-mask/jquery.inputmask.extensions.js" type="text/javascript"></script>
    <script src="{base_url()}asset/js/plugins/jquery-chained/jquery.chained.min.js" type="text/javascript"></script>
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
        $(document).ready(function () {
            $("[data-mask]").inputmask();
            $("#state").chained("#province");
            $("#research").chained("#researcher");
        });
    </script>
{/block}