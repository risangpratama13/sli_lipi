{extends file="layouts/master.tpl"} 
{block name="content"}
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Pemberitahuan
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-home"></i> Home</a></li>
            <li class="active"><a href="{base_url()}all_notif/{$user->id}">Pemberitahuan</a></li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <!-- row -->
        <div class="row">
            <div class="col-md-12">
                <!-- The time line -->
                <ul class="timeline">
                    {if !empty($notifications)}
                        {$notif_date = ""}
                        {foreach $notifications as $notif}
                            {if $notif_date != date('Y-m-d', strtotime($notif['notif_date']))}
                                <li class="time-label">
                                    <span class="bg-red">
                                        {date('j F Y', strtotime($notif['notif_date']))}
                                    </span>
                                </li>
                                {$notif_date = date('Y-m-d', strtotime($notif['notif_date']))}
                            {/if}
                            <li>
                                <i class="{notif_category($notif['notif_cat'])}"></i>
                                <div class="timeline-item">
                                    <span class="time"><i class="fa fa-clock-o"></i> {date('H:i', strtotime($notif['notif_date']))}</span>
                                    <h3 class="timeline-header no-border">{$notif['message']}</h3>
                                    <div class='timeline-footer'>
                                        <a class="btn btn-primary btn-xs" href="{$notif['notif_link']}">Lihat Detail</a>
                                    </div>
                                </div>
                            </li>
                        {/foreach}
                        <li>
                            <i class="fa fa-clock-o"></i>
                        </li>
                    {else}
                        <div class="callout callout-danger">
                            <h4>Pemberitahuan Kosong</h4>
                            <p>Anda Tidak Memiliki Pemberitahuan.</p>
                        </div>
                    {/if}                    
                </ul>
            </div><!-- /.col -->
        </div><!-- /.row -->
    </section><!-- /.content -->
{/block}