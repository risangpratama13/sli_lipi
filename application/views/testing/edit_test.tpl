{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pengujian
            <small>Ubah Pengujian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Pengujian</a></li>
            <li><a href="{base_url()}pengujian">Daftar Pengujian</a></li>
            <li class="active">Ubah Pengujian</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-warning">
                    <div class="box-header">
                        <h3 class="box-title">Ubah Pengujian</h3>
                    </div><!-- /.box-header -->
                    {$url = "testing/edit_pengujian/`$test->id`"}
                    {form_open($url)}
                    {form_hidden('id', $test->id)}
                    <div class="box-body">
                        <div class="form-group">
                            {form_label('Nama Pengujian', 'testing_name')}
                            {form_input($data.testing_name)}
                            {form_error('testing_name','<p class="help-block text-red">','</p>')}
                        </div>
                        <div class="form-group">                            
                            <label for="category">Kategori Pengujian</label>
                            {html_options name=category options=$kategori selected=$cat_option}                         
                        </div>
                        <div class="form-group">
                            {form_label('Harga Pengujian', 'testing_price')}
                            <div class="input-group">
                                <span class="input-group-addon">Rp</span>
                                {form_input($data.testing_price)}
                                <span class="input-group-addon">.00</span>       
                            </div>
                            {form_error('testing_price','<p class="help-block text-red">','</p>')}
                        </div>
                        <div class="form-group">                            
                            <label for="kelitian">Kelompok Penelitian</label>
                            {html_options name=research_group options=$kelitian selected=$res_group_option}                       
                        </div>
                        <div class="form-group">                            
                            <label for="unit">Satuan (Per)</label>
                            {html_options name=unit options=$satuan selected=$unit_option}                         
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {form_submit('submit', "Ubah Pengujian", 'class="btn btn-flat btn-success"')}
                    </div>
                    {form_close()}
                </div><!-- /.box -->               
            </div>
        </div>
    </section><!-- /.content -->
{/block}

{block name=addon_scripts}
    <script type="text/javascript">
        $(document).ready(function () {
            $("select").attr("class", "form-control");
        });
    </script>
{/block}