<ul class="sidebar-menu">
    <li>
        <a href="{base_url()}">
            <i class="fa fa-home"></i> <span>Home</span>
        </a>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-hdd-o"></i>
            <span>Master Data</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">            
            <li><a href="{base_url()}kurs_point"><i class="fa fa-angle-double-right"></i> Kurs Poin</a></li>     
            <li><a href="{base_url()}tipe_item"><i class="fa fa-angle-double-right"></i> Kategori Item</a></li>
            <li><a href="{base_url()}unit"><i class="fa fa-angle-double-right"></i> Satuan</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-list-alt"></i>
            <span>Pengujian</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">            
            <li><a href="{base_url()}kategori_pengujian"><i class="fa fa-angle-double-right"></i> Kategori Pengujian</a></li>     
            <li><a href="{base_url()}pengujian"><i class="fa fa-angle-double-right"></i> Daftar Pengujian</a></li>
        </ul>
    </li>
    <li class="treeview">
        <a href="#">
            <i class="fa fa-gears"></i>
            <span>Konfigurasi Pengguna</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
            {if in_array("superadmin", $groups)}
                <li><a href="{base_url()}administrator"><i class="fa fa-angle-double-right"></i> Administrator</a></li>            
            {/if}
            <li><a href="{base_url()}anggota"><i class="fa fa-angle-double-right"></i> Anggota</a></li>
            <li><a href="{base_url()}profil"><i class="fa fa-angle-double-right"></i> Profil</a></li>
        </ul>
    </li>
</ul>