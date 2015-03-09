{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Kelompok Penelitian
            <small>
                {if $action eq "add"}
                    Tambah Kelompok Penelitian
                {else}
                    Ubah Kelompok Penelitian
                {/if}
            </small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Master Data</a></li>
            <li><a href="{base_url()}pengujian">Daftar Kelompok Penelitian</a></li>
            <li class="active">
                {if $action eq "add"}
                    Tambah Kelompok Penelitian
                {else}
                    Ubah Kelompok Penelitian
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
                                    Tambah Kelompok Penelitian
                                {else}
                                    Ubah Kelompok Penelitian
                                {/if}
                            </h3>
                        </div><!-- /.box-header -->
                        {if $action eq "add"}
                            {$url = "research_group/add"}
                        {else}
                            {$url = "research_group/edit/`$research_group->id`"}
                        {/if}                        
                        {form_open($url)}
                        {if $action eq "edit"}
                            {form_hidden('id', $research_group->id)}
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
                                <label>Deputi Bidang</label>
                                <select class="form-control" name="researcher" id="researcher">
                                    <option value="">-- Deputi Bidang --</option>
                                    {foreach $researchers as $researcher}
                                        {if !empty($research_group)}
                                            {if $researcher->id == $research_group->researcher_id}
                                                <option value="{$researcher->id}" selected="">{$researcher->researcher_name}</option>
                                            {else}
                                                <option value="{$researcher->id}">{$researcher->researcher_name}</option>
                                            {/if}
                                        {else}
                                            <option value="{$researcher->id}">{$researcher->researcher_name}</option>
                                        {/if}                        
                                    {/foreach}
                                </select>
                                {form_error('researcher','<p class="help-block text-red">','</p>')}
                            </div>
                            <div class="form-group">
                                <label>Satuan Kerja</label>
                                <select class="form-control" name="research" id="research">
                                    <option value="">-- Satuan Kerja --</option>
                                    {foreach $researches as $research}
                                        {if !empty($research_group)}
                                            {if $research_group->research_id == $research->id}
                                                <option value="{$research->id}" class="{$research->researcher_id}" selected="">{$research->research_name}</option>
                                            {else}
                                                <option value="{$research->id}" class="{$research->researcher_id}">{$research->research_name}</option>
                                            {/if}
                                        {else}
                                            <option value="{$research->id}" class="{$research->researcher_id}">{$research->research_name}</option>
                                        {/if}                        
                                    {/foreach}
                                </select>
                                {form_error('research','<p class="help-block text-red">','</p>')}
                            </div>
                            <div class="form-group">
                                {form_label('Kelompok Penelitian', 'group_name')}
                                {form_input($group_name)}
                                {form_error('group_name','<p class="help-block text-red">','</p>')}
                            </div>
                        </div><!-- /.box-body -->
                        <div class="box-footer">
                            {form_submit('submit', "Simpan Kelompok Penelitian", 'class="btn btn-flat btn-success"')}
                        </div>
                        {form_close()}
                    </div><!-- /.box -->               
                </div>
            </div>
    </section><!-- /.content -->
{/block}

{block name="addon_plugins"}
    <script src="{base_url()}asset/js/plugins/jquery-chained/jquery.chained.min.js" type="text/javascript"></script>
{/block}

{block name=addon_scripts}
    <script type="text/javascript">
        $(document).ready(function () {
            $("select").attr("class", "form-control");
            $("#research").chained("#researcher");
        });
    </script>
{/block}