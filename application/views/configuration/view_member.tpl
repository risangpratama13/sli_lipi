{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Konfigurasi Pengguna
            <small>Profil {$member->full_name}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Konfigurasi Pengguna</a></li>
            <li class="active">Profil {$member->full_name}</li>
        </ol>        
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="mailbox row">
            <div class="col-xs-12">
                <div class="box box-solid">
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-3 col-sm-4">
                                <div class="box-header">
                                    <i class="fa fa-user"></i>
                                    <h3 class="box-title">{$member->username}</h3>                                   
                                </div>
                                <img src="{base_url()}asset/avatar/{$member->photo}" class="img-thumbnail">                                
                            </div><!-- /.col (LEFT) -->
                            <div class="col-md-9 col-sm-8">
                                <h3 class="header">Informasi Akun</h3>
                                <div class="table-responsive">
                                    <table class="table table-striped">
                                        <tr>
                                            <td>Username</td>
                                            <td>{$member->username}</td>
                                        </tr>
                                        <tr>
                                            <td>Nama Lengkap</td>
                                            <td>{$member->full_name}</td>
                                        </tr>
                                        <tr>
                                            <td>Jenis Kelamin</td>
                                            <td>
                                                {if $member->sex == "M"}
                                                    Laki-laki
                                                {else}
                                                    Perempuan
                                                {/if}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Golongan/Jabatan</td>
                                            <td>
                                                {if !empty($data_member)}
                                                    {$data_member->category}/{$data_member->position}
                                                {/if}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Tempat Tanggal Lahir</td>
                                            <td>
                                                {if !empty($data_member)}
                                                    {$data_member->birthplace}, {date('j F Y', strtotime($data_member->birthday))}
                                                {/if}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Alamat</td>
                                            <td>{if !empty($data_member)}{$data_member->address}{/if}</td>
                                        </tr>
                                        <tr>
                                            <td>Kota/Kabupaten</td>
                                            <td>{if !empty($data_member)}{$data_member->state_name}{/if}</td>
                                        </tr>
                                        <tr>
                                            <td>Propinsi</td>
                                            <td>{if !empty($data_member)}{$data_member->prov_name}{/if}</td>
                                        </tr>
                                        <tr>
                                            <td>No. Telp</td>
                                            <td>{if !empty($data_member)}{$data_member->phone}{/if}</td>
                                        </tr>
                                        <tr>
                                            <td>Deputi Bidang</td>
                                            <td>{if !empty($data_member)}{$data_member->researcher_name}{/if}</td>
                                        </tr>
                                        <tr>
                                            <td>Satuan Kerja</td>
                                            <td>{if !empty($data_member)}{$data_member->research_name}{/if}</td>
                                        </tr>
                                        <tr>
                                            <td>Kelompok Penelitian</td>
                                            <td>{if !empty($data_member)}{$data_member->research_group}{/if}</td>
                                        </tr>
                                        <tr>
                                            <td>Terdaftar</td>
                                            <td>{date('j F Y H:i:s', $member->created_on)}</td>
                                        </tr>
                                        <tr>
                                            <td>Kelompok Pengguna</td>
                                            <td>
                                                {if $member_operator == TRUE}
                                                    Anggota dan Operator
                                                {else}
                                                    Anggota
                                                {/if}                                                
                                            </td>
                                        </tr>
                                        {if $member_operator == TRUE}
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
                                                {if $member->active == 1}
                                                    <span class="label label-success">Aktif</span>
                                                {else}
                                                    <span class="label label-danger">Tidak Aktif</span>
                                                {/if}
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>Terakhir Masuk</td>
                                            <td>
                                                {if $member->last_login != 0}
                                                    {date('j F Y H:i:s', $member->last_login)}
                                                {/if}
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div><!-- /.col (RIGHT) -->
                        </div><!-- /.row -->
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- /.col (MAIN) -->
        </div>
        <!-- MAILBOX END -->
    </section><!-- /.content -->
{/block}