{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Konfigurasi Pengguna
            <small>Operator</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Konfigurasi Pengguna</a></li>
            <li><a href="{base_url()}operator">Operator</a></li>
            <li class="active">Tambah Operator</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Tambah Operator</h3>
                    </div><!-- /.box-header -->
                    {form_open('tambah_operator')}
                    <div class="box-body">
                        <div class="form-group">
                            {form_label('Nama Operator', 'full_name')}
                            {form_dropdown('user_id', $members, '', 'class="form-control"')}
                        </div>
                        <div class="form-group">
                            {form_label('Kategori Pengujian', 'username')}
                            {form_multiselect('categories[]', $categories, '', 'class="form-control"')}
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {form_submit('submit', "Tambahkan Operator", 'class="btn btn-flat btn-success"')}
                    </div>
                    {form_close()}
                </div><!-- /.box -->               
            </div>
        </div>
    </section><!-- /.content -->
{/block}