{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pengajuan Pengujian
            <small>Tambah Pengujian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Pengajuan Pengujian</a></li>
            <li><a href="{base_url()}tambah_order">Buat Pengajuan Pengujian</a></li>
            <li class="active">Tambah Pengujian</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header">
                        <h3 class="box-title">Tambahkan Pengujian</h3>
                    </div><!-- /.box-header -->
                    {form_open('orders/add_cart')}
                    {form_hidden('test_id', $test_id)}
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    {form_label('Nama Pengujian', 'pengujian')}
                                    <input type="text" name="pengujian" value="{$test->testing_name}" class="form-control" disabled="disabled">
                                </div>
                                <div class="form-group">                            
                                    {form_label('Jumlah Pengujian', 'qty')}
                                    {form_input($qty)}                       
                                </div>
                                <div class="form-group">
                                    {form_label('Pilih Operator', 'operator')}                            
                                    <select name="operator" class="form-control">
                                        {foreach $operators as $operator}
                                            <option value="{$operator->id}">{$operator->full_name}</option>
                                        {/foreach}                          
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    {form_label('Keterangan (optional)', 'keterangan')}
                                    <textarea name="keterangan" class="form-control" rows="5"></textarea>
                                </div>
                            </div>
                        </div><!-- /.row -->
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {form_submit('submit', "Tambahkan Pengujian", 'class="btn btn-flat btn-success"')}
                    </div>
                    {form_close()}
                </div><!-- /.box -->               
            </div>
        </div>
    </section>
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
        function isNumberKey(evt) {
            var charCode = (evt.which) ? evt.which : event.keyCode
            if (charCode > 31 && (charCode < 48 || charCode > 57))
                return false;

            return true;
        }
    </script>
{/block}