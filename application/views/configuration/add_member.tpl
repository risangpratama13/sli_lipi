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
                    {form_open('master/crud_units')}
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