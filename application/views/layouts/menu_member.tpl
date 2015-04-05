<ul class="sidebar-menu">
    <li>
        <a href="{base_url()}">
            <i class="fa fa-home"></i> <span> Home </span>
        </a>
    </li>    
    <li>
        <a href="{base_url()}profil">
            <i class="fa fa-user"></i> <span> Profil </span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-money"></i>
            <span> Saldo </span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">            
            <li><a href="{base_url()}rincian_saldo"><i class="fa fa-angle-double-right"></i> Rincian Saldo </a></li>     
            <li><a href="{base_url()}item"><i class="fa fa-angle-double-right"></i> Tambah Saldo <small class="badge pull-right bg-yellow">{$shopping_carts}</small></a></li>
        </ul>
    </li>    
    <li class="treeview">
        <a href="#">
            <i class="fa fa-book"></i>
            <span> Pengujian </span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            <li><a href="{base_url()}keranjang_belanja"><i class="fa fa-angle-double-right"></i> Pengajuan Pengujian <small class="badge pull-right bg-yellow">{$shopping_carts}</small></a></li>
            <li><a href="{base_url()}order"><i class="fa fa-angle-double-right"></i> Daftar Pengajuan </a></li>     
        </ul>
    </li>
    {if in_array("admin", $groups) or in_array("superadmin", $groups)}
        <li>
            <a href="{base_url()}history_pengujian">
                <i class="fa fa-tasks"></i> <span> Kegiatan Pengujian </span>
            </a>
        </li>
    {else if in_array("members", $groups) and in_array("operators", $groups)}
        <li class="treeview">
            <a href="#">
                <i class="fa fa-tasks"></i>
                <span> Laporan Pengujian </span>
                <i class="fa fa-angle-left pull-right"></i>
            </a>
            <ul class="treeview-menu">            
                <li><a href="{base_url()}pengujian_member"><i class="fa fa-angle-double-right"></i> Laporan Pengujian </a></li>
                    {if in_array("kelitian", $groups)}
                    <li><a href="{base_url()}konfirmasi_pengujian"><i class="fa fa-angle-double-right"></i> Konfirmasi Pengujian </a></li>
                    {/if}
                <li><a href="{base_url()}pengujian_operator"><i class="fa fa-angle-double-right"></i> Permohonan Pengujian </a></li>
            </ul>
        </li>
    {else if in_array("members", $groups)}
        {if in_array("kelitian", $groups)}
            <li class="treeview">
                <a href="#">
                    <i class="fa fa-tasks"></i>
                    <span> Laporan Pengujian </span>
                    <i class="fa fa-angle-left pull-right"></i>
                </a>
                <ul class="treeview-menu">            
                    <li><a href="{base_url()}pengujian_member"><i class="fa fa-angle-double-right"></i> Laporan Pengujian </a></li>
                    {if in_array("kelitian", $groups)}
                        <li><a href="{base_url()}konfirmasi_pengujian"><i class="fa fa-angle-double-right"></i> Konfirmasi Pengujian </a></li>
                    {/if}
                </ul>
            </li>
        {else}
            <li>
                <a href="{base_url()}pengujian_member">
                    <i class="fa fa-tasks"></i> <span> Laporan Pengujian </span>
                </a>
            </li>
        {/if}        
    {/if}
</ul>