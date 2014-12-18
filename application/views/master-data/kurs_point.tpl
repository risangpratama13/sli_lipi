{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Master Data
            <small>Kurs Poin</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li class="active"><a href="{base_url()}kurs_point">Kurs Poin</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-4">
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-rouble"></i>
                        <h3 class="box-title">Kurs Poin Hari Ini</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <table class="table table-striped">
                            <tr>
                                <td>Jumlah Poin</td>
                                <td>{$kurs->point} Poin</td>
                            </tr>
                            <tr>
                                <td>Nilai Rupiah</td>
                                <td>
                                    <span class="label label-info">
                                        Rp. {number_format($kurs->idr, '2', ',', '.')}
                                    </span>
                                </td>
                            </tr>
                            <tr>
                                <td>Terakhir Diubah</td>
                                <td>{date("j F Y H:m:s", strtotime($kurs->last_update))}</td>
                            </tr>
                        </table>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- ./col -->
            <div class="col-md-4">
                <div class="box box-warning">
                    <div class="box-header">
                        <i class="fa fa-edit"></i>
                        <h3 class="box-title">Ubah Kurs Poin</h3>
                    </div><!-- /.box-header -->
                    {form_open('master/kurs_point')}
                    <div class="box-body">
                        <label for="idr">Nilai Tukar Rupiah</label>                            
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            {form_input($form_kurs)}
                            <span class="input-group-addon">.00</span>                            
                        </div>
                        {form_error('idr','<p class="help-block text-red">','</p>')}
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {form_submit('submit', "Ubah Kurs", 'class="btn btn-flat btn-warning"')}
                    </div>
                    {form_close()}
                </div><!-- /.box -->
            </div><!-- ./col -->
            <div class="col-md-4">
                <div class="box box-danger">
                    <div class="box-header">
                        <i class="fa fa-keyboard-o"></i>
                        <h3 class="box-title">Kalkulator Kurs</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="input-group">
                            <input id="poin" class="form-control" placeholder="Jumlah Poin" onkeyup="calculator(event)">
                            <span class="input-group-addon">Poin</span>                            
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        <label for="idr">Nilai Tukar Rupiah</label>                            
                        <div class="input-group">
                            <span class="input-group-addon">Rp</span>
                            <input id="idr" class="form-control" disabled="">                            
                            <span class="input-group-addon">.00</span>                            
                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->
            </div><!-- ./col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
        
        function calculator(evt) {
            if(isNumberKey(evt)) {
                var nilai_rupiah = {$kurs->idr};
                var point = document.getElementById("poin").value;
                var idr = parseFloat(nilai_rupiah) * parseFloat(point);
                document.getElementById("idr").value = idr;
            }
        }
    </script>
{/block}