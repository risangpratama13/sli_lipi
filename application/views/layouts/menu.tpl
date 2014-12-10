<!-- Left side column. contains the logo and sidebar -->
<aside class="left-side sidebar-offcanvas">
    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">
        <!-- Sidebar user panel -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="{base_url()}asset/avatar/{$user->photo}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{$user->username}</p>
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>        
        <!-- sidebar menu: : style can be found in sidebar.less -->
        {if in_array("admin", $groups) or in_array("superadmin", $groups)}
            {include file='layouts/menu_admin.tpl'}
        {else}
            {include file='layouts/menu_member.tpl'}            
        {/if}        
    </section>
    <!-- /.sidebar -->
</aside>