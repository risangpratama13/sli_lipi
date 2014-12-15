{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Konfigurasi Pengguna
            <small>Administrator</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Konfigurasi Pengguna</a></li>
            <li><a href="{base_url()}administrator">Administrator</a></li>
            <li class="active">Tambah Administrator</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Tambah Administrator</h3>
                    </div><!-- /.box-header -->
                    {form_open('tambah_administrator')}
                    <div class="box-body">
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
                    </div><!-- /.box-body -->

                    <div class="box-footer">
                        {form_submit('submit', "Tambahkan Akun Administrator", 'class="btn btn-flat btn-success"')}
                    </div>
                    {form_close()}
                </div><!-- /.box -->               
            </div>
        </div>
    </section><!-- /.content -->
{/block}