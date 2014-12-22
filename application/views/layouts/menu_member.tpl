<ul class="sidebar-menu">
    <li>
        <a href="{base_url()}">
            <i class="fa fa-home"></i> <span>Home</span>
        </a>
    </li>    
    <li>
        <a href="{base_url()}profil">
            <i class="fa fa-user"></i> <span>Profil</span>
        </a>
    </li>    
    <li>
        <a href="{base_url()}item">
            <i class="fa fa-files-o"></i> <span>Item</span>
        </a>
    </li>    
    <li class="treeview">
        <a href="#">
            <i class="fa fa-book"></i>
            <span>Pengajuan Pengujian</span>
            <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">            
            <li><a href="{base_url()}order"><i class="fa fa-angle-double-right"></i> Daftar Pengajuan</a></li>     
            <li><a href="{base_url()}keranjang_belanja"><i class="fa fa-angle-double-right"></i> Keranjang Belanja<small class="badge pull-right bg-yellow">{$shopping_carts}</small></a></li>
        </ul>
    </li>    
</ul>