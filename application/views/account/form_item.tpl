{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Item
            <small>
                {if $action eq "add"}
                    Tambah Item
                {else}
                    Ubah Item
                {/if}
            </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Item</a></li>
            <li><a href="{base_url()}pengujian">Daftar Item</a></li>
            <li class="active">
                {if $action eq "add"}
                    Tambah Item
                {else}
                    Ubah Item
                {/if}
            </li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                {if $action eq "add"}
                    <div class="box box-primary">
                    {else}
                        <div class="box box-warning">
                        {/if}                
                        <div class="box-header">
                            <h3 class="box-title">
                                {if $action eq "add"}
                                    Tambah Item
                                {else}
                                    Ubah Item
                                {/if}
                            </h3>
                        </div><!-- /.box-header -->
                        {if $action eq "add"}
                            {$url = "account/add_item"}
                        {else}
                            {$url = "account/edit_item"}
                        {/if}                        
                        {form_open_multipart($url)}
                        {if $action eq "edit"}
                            {form_hidden('id', $data.item_id)}
                        {/if}
                        <div class="box-body">
                            {if !empty($data.message)}
                                <div class="alert alert-danger alert-dismissable">
                                    <i class="fa fa-ban"></i>
                                    <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                    {foreach $data.message as $message}
                                        {$message}
                                    {/foreach}
                                </div>
                            {/if}
                            <div class="form-group">
                                {form_label('Judul Paper', 'item_title')}
                                {form_input($data.item_title)}
                                {form_error('item_title','<p class="help-block text-red">','</p>')}
                            </div>
                            <div class="form-group">                            
                                <label for="item_type">Kategori Item</label>
                                {if $action eq "add"}
                                    {html_options name=item_type options=$kategori}
                                {else}
                                    {html_options name=item_type options=$kategori selected=$data.select_option}
                                {/if}                                                       
                            </div>
                            <label>Upload Berkas Atau Masukkan URL Berkas</label>                                
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-btn">
                                                <button type="button" class="btn btn-primary" onclick="$('#paper').click();"><i class="fa fa-file-text"></i> Pilih Berkas</button>
                                            </div><!-- /btn-group -->
                                            <input type="file" name="paper" id="paper" style="display: none;">
                                            {form_input($data.paper_path)}
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group">
                                        <div class="input-group">
                                            <div class="input-group-addon">
                                                <i class="fa fa-globe"></i>
                                            </div>
                                            {form_input($data.paper_url)}
                                        </div>
                                    </div>
                                </div>                                
                            </div>
                            <div class="form-group">                            
                                {form_label('Description', 'description')}
                                {form_textarea($data.description)}                         
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            {form_submit('submit', "Simpan Item", 'class="btn btn-flat btn-success"')}
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
            $("#paper").change(function () {
                $("#paper_path").val($("#paper").val());
            });
        });
    </script>
{/block}