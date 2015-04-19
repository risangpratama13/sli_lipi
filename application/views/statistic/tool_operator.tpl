{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Statistik
            <small>Operator Pengujian</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="#">Statistik</a></li>
            <li class="active"><a href="{base_url()}operator_stat">Operator</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-info">
                    <div class="box-header">
                        <h3 class="box-title">Grafik Statistik Operator Pengujian</h3>
                    </div><!-- /.box-header -->
                    <div class="box-body table-responsive">
                        <div id="graphic" style="height: 600px;">

                        </div>
                    </div><!-- /.box-body -->
                </div><!-- /.box -->               
            </div>
        </div>
    </section><!-- /.content -->
{/block}

{block name="addon_plugins"}
    <script src="{base_url()}asset/js/plugins/highchart/highcharts.js"></script>
    <script src="{base_url()}asset/js/plugins/highchart/modules/exporting.js"></script>
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
        $(document).ready(function () {
            $('#graphic').highcharts({
                chart: {
                    type: 'column'
                },
                title: {
                    text: 'Statistik Operator Pengujian (Per Jam)'
                },
                xAxis: {
                    categories: [{$label_operators}],
                    title: {
                        text: "Operator"
                    }
                },
                yAxis: {
                    allowDecimals: false,
                    min: 0,
                    title: {
                        text: 'Waktu (Jam)'
                    }
                },
                tooltip: {
                    shared: true,
                    useHTML: true,
                    valueSuffix: ' jam'
                },
                plotOptions: {
                    column: {
                        pointPadding: 0.2,
                        borderWidth: 0
                    }
                },
                credit: {
                    enabled: false
                },
                series: [{
                        name: 'Waktu Pengujian', data: [{$label_total_hours}]
                    }]
            });
        });
    </script>
{/block}