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
                                    <h3 class="box-title">{$user->username}</h3>                                   
                                </div>
                                <div id="input_file" style="display: none;"> 
                                    <form id="avatar" method="POST" enctype="multipart/form-data" action="{base_url()}auth/account_setting/change_avatar"> 
                                        <input type="file" id="file_avatar" name="file_avatar" onchange="$('#submitAvatar').click();"/>
                                        <input type="submit" id="submitAvatar" value="submit">
                                    </form>
                                </div>
                                <img src="{base_url()}asset/avatar/{$user->photo}" class="img-thumbnail"><br/><br/>
                                <button onclick="$('#file_avatar').click();" class="btn btn-block btn-primary"><i class="fa fa-picture-o"></i> Ubah Foto</button>
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

{block name="addon_plugins"}
    <script type="text/javascript" src="{base_url()}asset/js/plugins/jquery-form/jquery.form.min.js"></script>
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
        function beforeSubmitAvatar() {
            if (window.File && window.FileReader && window.FileList && window.Blob) {
                if (!$('#file_avatar').val()) {
                    alert("Gambar Tidak Ada");
                }

                var fsize = $("#file_avatar")[0].files[0].size;
                var ftype = $("#file_avatar")[0].files[0].type;

                switch (ftype) {
                    case 'image/png':
                    case 'image/gif':
                    case 'image/jpeg':
                    case 'image/pjpeg':
                        break;
                    default:
                        alert("Format File Yang Diupload Harus PNG, JPG, JPEG, atau GIF");
                        return false
                }

                if (fsize > 1048576) {
                    alert("Ukuran File Tidak Boleh Lebih Dari 1 MB");
                    return false
                }

            } else {
                alert("Browser Anda Tidak Mendukung Fasilitas Upload Ini");
                return false;
            }
        }

        $(document).ready(function () {
            var options = {
                resetForm: true,
                beforeSubmit: beforeSubmitAvatar,
                resetForm: true,
                        success: function (data) {
                            if (data == "Success") {
                                location.reload();
                            } else {
                                alert("Foto Tidak Berhasil Diubah")
                            }
                        }
            };

            $('#submitAvatar').click(function () {
                $('#avatar').ajaxSubmit(options);
                return false;
            });
        });
    </script>
{/block}