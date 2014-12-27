{if in_array("admin", $groups) or in_array("superadmin", $groups)}
    <div class="col-lg-3 col-xs-6">            
        <div class="small-box bg-aqua-gradient">
            <div class="inner">
                <h3>{$count_test_orders}</h3>
                <p>Kegiatan Pengujian</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-settings-strong"></i>
            </div>
            <a href="{base_url()}pengujian_member" class="small-box-footer">
                Lihat Detail <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-gradient">
            <div class="inner">
                <h3>{$count_items}</h3>
                <p>Item</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-paper"></i>
            </div>
            <a href="{base_url()}item" class="small-box-footer">
                Lihat Detail <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div>
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-yellow-gradient">
            <div class="inner">
                <h3>{$count_members}</h3>
                <p>Anggota Terdaftar</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-people"></i>
            </div>
            <a href="{base_url()}item" class="small-box-footer">
                Lihat Detail <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-3 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-red-gradient">
            <div class="inner">
                <h3>{$count_admins}</h3>
                <p>Administrator</p>
            </div>
            <div class="icon">
                <i class="ion ion-person-add"></i>
            </div>
            <a href="#" class="small-box-footer">
                More info <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
{else}
    <div class="col-lg-4 col-xs-6">            
        <div class="small-box bg-aqua-gradient">
            <div class="inner">
                <h3>{$count_test_orders}</h3>
                <p>Kegiatan Pengujian</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-settings-strong"></i>
            </div>
            <a href="{base_url()}pengujian_member" class="small-box-footer">
                Lihat Detail <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-4 col-xs-6">
        <!-- small box -->
        <div class="small-box bg-green-gradient">
            <div class="inner">
                <h3>{$count_items}</h3>
                <p>Item</p>
            </div>
            <div class="icon">
                <i class="ion ion-ios-paper"></i>
            </div>
            <a href="{base_url()}item" class="small-box-footer">
                Lihat Detail <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
    <div class="col-lg-4 col-xs-6">
        <div class="small-box bg-red-gradient">
            <div class="inner">
                <h3>Rp. {number_format($saldo, '2', ',', '.')}</h3>
                <p>Saldo</p>
            </div>
            <div class="icon">
                <i class="ion ion-social-usd"></i>
            </div>
            <a href="{base_url()}rincian_saldo" class="small-box-footer">
                Lihat Detail <i class="fa fa-arrow-circle-right"></i>
            </a>
        </div>
    </div><!-- ./col -->
{/if}