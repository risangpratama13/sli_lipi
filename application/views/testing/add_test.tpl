{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pengujian
            <small>Tambah Pengujian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Pengujian</a></li>
            <li><a href="{base_url()}pengujian">Daftar Pengujian</a></li>
            <li class="active">Tambah Pengujian</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Tambah Pengujian</h3>
                    </div><!-- /.box-header -->
                    {form_open('tambah_pengujian')}
                    <div class="box-body">
                        <div class="form-group">
                            {form_label('Nama Pengujian', 'testing_name')}
                            {form_input($data.testing_name)}
                            {form_error('testing_name','<p class="help-block text-red">','</p>')}
                        </div>
                        <div class="form-group">                            
                            <label for="category">Kategori Pengujian</label>
                            {html_options name=category options=$kategori}                       
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
                            <label for="unit">Satuan (Per)</label>
                            {html_options name=unit options=$satuan}                         
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {form_submit('submit', "Tambahkan Pengujian", 'class="btn btn-flat btn-success"')}
                    </div>
                    {form_close()}
                </div><!-- /.box -->               
            </div>
        </div>
    </section><!-- /.content -->
{/block}

{block name=addon_scripts}
    <script type="text/javascript">
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
        
        $(document).ready(function () {
            $("select").attr("class", "form-control");
        });
    </script>
{/block}