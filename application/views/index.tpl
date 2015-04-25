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
        {include file='home/calendar.tpl'}
    </section><!-- /.content -->
{/block}

{block name="addon_styles"}
    {link_tag('asset/css/fullcalendar/fullcalendar.css')}
    {link_tag('asset/css/fullcalendar/fullcalendar.print.css')}
{/block}

{block name="addon_plugins"}
    <script src="{base_url()}asset/js/plugins/fullcalendar/fullcalendar.min.js" type="text/javascript"></script>
{/block}

{block name="addon_scripts"}
    <script type="text/javascript">
        $(document).ready(function () {
            $('#calendar').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,agendaWeek,agendaDay'
                },
                buttonText: {
                    prev: "<span class='fa fa-caret-left'></span>",
                    next: "<span class='fa fa-caret-right'></span>",
                    today: 'today',
                    month: 'month',
                    week: 'week',
                    day: 'day'
                },
                //Random default events
                eventSources: [{
                        url: '{base_url()}testing/calendar'
                    }
                ]
            });
        });
    </script>
{/block}