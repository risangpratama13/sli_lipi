<!-- header logo: style can be found in header.less -->
<header class="header">
    <a href="{base_url()}" class="logo">
        <!-- Add the class icon to your logo image or logo icon to add the margining -->
        SLI P2F LIPI
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