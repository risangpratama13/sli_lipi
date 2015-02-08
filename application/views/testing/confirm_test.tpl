{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Konfirmasi Pengujian
            <small>{$test_order->testing_name}</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Pengujian Operator</a></li>
            <li class="active"><a href="{base_url()}confirm/{$test_order->id}">Konfirmasi Pengujian</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        {form_open("confirm/`$test_order->id`")}
        <div class="row">
            <div class="col-md-12">
                <div class="box box-info">
                    <div class="box-header">
                        <i class="fa fa-calendar"></i>
                        <h3 class="box-title">Tanggal Pengujian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body">
                        <div class="form-group">
                            <label>Tanggal Pengujian</label>
                            <div class="input-group">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>                                
                                {form_input($test_date)}
                            </div><!-- /.input group -->
                        </div>
                    </div><!-- /.box-body -->
                    <div class="box-footer">
                        {form_submit('find_tool', "Pilih Alat Pengujian", 'class="btn btn-flat btn-primary"')}             
                    </div>
                </div><!-- /.box -->
            </div><!-- ./col -->      
        </div><!-- /.row -->
        {if !empty($tools)}
            <div class="row">
                <div class="col-md-12">
                    <div class="box box-info">
                        <div class="box-header">
                            <i class="fa fa-wrench"></i>
                            <h3 class="box-title">Alat Pengujian</h3>
                        </div><!-- /.box-header -->
                        <div class="box-body table-responsive">
                            <table id="tableTool" class="table table-bordered table-striped">
                                <thead>
                                    <tr>
                                        <th>No</th>
                                        <th>Pilih Alat</th>
                                        <th>Nama Alat Pengujian</th>
                                        <th>Jumlah Alat</th>                                    
                                    </tr>
                                </thead>
                                <tbody>
                                    {$no = 1}
                                    {foreach $tools as $tool}
                                        {if empty($count_tools.{$tool->id})}
                                            {$max_qty = $tool->tool_qty}                                            
                                        {else}
                                            {$max_qty = $tool->tool_qty - $count_tools.{$tool->id}}
                                        {/if}
                                        {if $max_qty != 0}
                                            <tr>
                                                <td>{$no}</td>
                                                <td>
                                                    <input type="checkbox" name="tools[]" value="{$tool->id}">
                                                </td>                                            
                                                <td>{$tool->tool_name}</td>
                                                <td>
                                                    <input type="number" name="tool_qty_{$tool->id}" value="1" min="1" max="{$max_qty}">
                                                </td>
                                            </tr>
                                            {$no = $no + 1}
                                        {/if}
                                    {/foreach}
                                </tbody>
                            </table>                        
                        </div><!-- /.box-body -->
                    </div><!-- /.box -->
                </div><!-- ./col -->      
            </div><!-- /.row -->
        {/if}
        <div class="row">
            <div class="col-md-12">
                <div class="box box-warning">
                    <div class="box-footer">
                        {form_submit('accept', "Setujui Pengujian", 'class="btn btn-flat btn-success"')}             
                        {form_submit('denied', "Tolak Pengujian", 'class="btn btn-flat btn-danger"')}             
                    </div>
                </div><!-- /.box -->
            </div><!-- ./col -->      
        </div><!-- /.row -->
        {form_close()}
    </section><!-- /.content -->
{/block}

{block name="addon_styles"}
    {link_tag('asset/css/datatables/dataTables.bootstrap.css')}
    {link_tag('asset/css/daterangepicker/daterangepicker-bs3.css')}
{/block}

{block name="addon_plugins"}
    <script src="{base_url()}asset/js/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="{base_url()}asset/js/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <script src="{base_url()}asset/js/plugins/daterangepicker/daterangepicker.js" type="text/javascript"></script>
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
        $(function () {
            var tableTool = $("#tableTool").dataTable({
                oLanguage: {
                    sUrl: '{base_url()}asset/js/plugins/datatables/Indonesian.json'
                },
                "bPaginate" : false
            });

            $('#tanggal_test').daterangepicker({
                timePicker: true,
                timePickerIncrement: 1,
                timePicker12Hour: false,
                format: 'MM/DD/YYYY H:mm'
            });
        });
    </script>
{/block}