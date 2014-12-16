{extends file="configuration/profile/profile.tpl"}
{block name="profile_menu"}
    <ul class="nav nav-pills nav-stacked">
        <li class="active"><a href="{base_url()}profil"><i class="fa fa-info-circle"></i> Informasi Pribadi</a></li>
            {if in_array("members", $groups)}
            <li><a href="{base_url()}profil/ubah_profil"><i class="fa fa-pencil-square-o"></i> Ubah Informasi Pribadi</a></li>
            {/if}
        <li><a href="{base_url()}profil/ubah_password"><i class="fa fa-unlock"></i> Ubah Password</a></li>
    </ul>
{/block}

{block name="profile_content"}
    <h3 class="header">Informasi Akun</h3>
    <div class="table-responsive">
        <table class="table table-striped">
            <tr>
                <td>Username</td>
                <td>{$user->username}</td>
            </tr>
            {if in_array("members", $groups)}
                <tr>
                    <td>Nama Lengkap</td>
                    <td>{$user->full_name}</td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>
                        {if $user->sex == "M"}
                            Laki-laki
                        {else}
                            Perempuan
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td>Golongan/Jabatan</td>
                    <td>
                        {if !empty($member)}
                            {$member->category}/{$member->position}
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td>Tempat Tanggal Lahir</td>
                    <td>
                        {if !empty($member)}
                            {$member->birthplace}, {date('j F Y', strtotime($member->birthday))}
                        {/if}
                    </td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>{if !empty($member)}{$member->address}{/if}</td>
                </tr>
                <tr>
                    <td>Kota/Kabupaten</td>
                    <td>{if !empty($member)}{$member->state_name}{/if}</td>
                </tr>
                <tr>
                    <td>Propinsi</td>
                    <td>{if !empty($member)}{$member->prov_name}{/if}</td>
                </tr>
                <tr>
                    <td>No. Telp</td>
                    <td>{if !empty($member)}{$member->phone}{/if}</td>
                </tr>
                <tr>
                    <td>Kelompok Peneliti</td>
                    <td>{if !empty($member)}{$member->researcher_name}{/if}</td>
                </tr>
                <tr>
                    <td>Kelompok Penelitian</td>
                    <td>{if !empty($member)}{$member->research_name}{/if}</td>
                </tr>
            {/if}
            <tr>
                <td>Terdaftar</td>
                <td>{date('j F Y H:i:s', $user->created_on)}</td>
            </tr>
            <tr>
                <td>Kelompok Pengguna</td>
                <td>
                    {if in_array("members", $groups)}
                        {if in_array("operators", $groups)}
                            Anggota dan Operator
                        {else}
                            Anggota
                        {/if}
                    {else if in_array("superadmin", $groups)}
                        Superadministrator
                    {else if in_array("admin", $groups)}
                        Administrator    
                    {/if}
                </td>
            </tr>
            {if in_array("operators", $groups)}
                <tr>
                    <td>Operator Pengujian</td>
                    <td>
                        <ul>
                            {foreach $operators as $operator}
                                <li>{$operator->cat_name}</li>
                                {/foreach}
                        </ul>
                    </td>
                </tr>
            {/if}
            <tr>
                <td>Status Akun</td>
                <td>
                    {if $user->active == 1}
                        <span class="label label-success">Aktif</span>
                    {else}
                        <span class="label label-danger">Tidak Aktif</span>
                    {/if}
                </td>
            </tr>
            <tr>
                <td>Terakhir Masuk</td>
                <td>
                    {if $user->last_login != 0}
                        {date('j F Y H:i:s', $user->last_login)}
                    {/if}
                </td>
            </tr>
        </table>
    </div>
{/block}