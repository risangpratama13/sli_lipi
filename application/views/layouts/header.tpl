<!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="{base_url()}" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        SLI LIPI
    </a>
    <!-- Header Navbar: style can be found in header.less -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="navbar-btn sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </a>
        <div class="navbar-right">
            <ul class="nav navbar-nav">
                <!-- Notifications: style can be found in dropdown.less -->
                <li class="dropdown notifications-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" id="notif">
                        <i class="fa fa-warning"></i>
                        <span class="label label-warning" id="notif_count"></span>
                    </a>
                    <ul class="dropdown-menu">
                        <li class="header" id="notif_header"></li>
                        <li>
                            <!-- inner menu: contains the actual data -->
                            <ul class="menu" id="header_content">
                                
                            </ul>
                        </li>
                        <li class="footer"><a href="{base_url()}all_notif/{$user->id}">Lihat Semua</a></li>
                    </ul>
                </li>
                <!-- User Account: style can be found in dropdown.less -->
                <li class="dropdown user user-menu">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="glyphicon glyphicon-user"></i>
                        <span>
                            {if in_array("admin", $groups) or in_array("superadmin", $groups)}
                                {$user->username}
                            {else}
                                {$user->full_name}
                            {/if}
                            <i class="caret"></i>
                        </span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- User image -->
                        <li class="user-header bg-light-blue">
                            <img src="{base_url()}asset/avatar/{$user->photo}" class="img-circle" alt="User Image" />
                            <p>
                                {if in_array("admin", $groups) or in_array("superadmin", $groups)}
                                    {$user->username}
                                {else}
                                    {$user->full_name}
                                {/if}
                                <small>Terdaftar Sejak {date('M Y', $user->created_on)}</small>
                            </p>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">                            
                            <div class="pull-left">
                                <a href="{base_url()}profil" class="btn btn-default btn-flat">Profil</a>
                            </div>
                            <div class="pull-right">
                                <a href="{base_url()}logout" class="btn btn-default btn-flat">Keluar</a>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>