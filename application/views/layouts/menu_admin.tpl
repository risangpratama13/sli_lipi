<ul class="sidebar-menu">
    <li>
        <a href="{base_url()}">
            <i class="fa fa-home"></i> <span>Home</span>
        </a>
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