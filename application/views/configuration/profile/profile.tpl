{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        {if in_array("admin", $groups) or in_array("superadmin", $groups)}
            <h1>
                Konfigurasi Pengguna
                <small>Profil {$user->username}</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="#">Konfigurasi Pengguna</a></li>
                <li><a href="{base_url()}profil">Profil</a></li>
                <li class="active">{$action}</li>
            </ol>
        {else}
            <h1>
                Profil
                <small>{$user->full_name}</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
                <li><a href="{base_url()}profil">Profil</a></li>
                <li class="active">{$action}</li>
            </ol>
        {/if}
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
                                    {if in_array("admin", $groups) or in_array("superadmin", $groups)}
                                        <h3 class="box-title">{$user->username}</h3>
                                    {else}
                                        <h3 class="box-title">{$user->full_name}</h3>
                                    {/if}
                                </div>

                                <img src="{base_url()}asset/avatar/{$user->photo}" class="img-thumbnail">
                                <a class="btn btn-block btn-primary"><i class="fa fa-picture-o"></i> Ubah Foto</a>
                                <!-- Navigation - folders-->
                                <div style="margin-top: 15px;">
                                    {block name="profile_menu"}{/block}
                                </div>
                            </div><!-- /.col (LEFT) -->
                            <div class="col-md-9 col-sm-8">
                                {block name="profile_content"}{/block}
                            </div><!-- /.col (RIGHT) -->
                        </div><!-- /.row -->
                    </div><!-- /.box-body -->
                    {block name="profile_footer"}{/block}
                </div><!-- /.box -->
            </div><!-- /.col (MAIN) -->
        </div>
        <!-- MAILBOX END -->
    </section><!-- /.content -->
{/block}