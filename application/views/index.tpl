{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Sistem Layanan Internal Pusat Penelitian Fisika LIPI
        </h1>
        <ol class="breadcrumb">
            <li class="active"><i class="fa fa-home"></i> Home</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            {include file='home/tiles.tpl'}
        </div><!-- /.row -->
    </section><!-- /.content -->
{/block}