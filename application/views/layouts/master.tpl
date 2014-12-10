<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistem Layanan Internal P2F LIPI</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Icon -->
        {link_tag('asset/img/favicon.png','shortcut icon','image/png')}        
        <!-- bootstrap 3.0.2 -->
        {link_tag('asset/css/bootstrap.min.css')}
        <!-- font Awesome -->
        {link_tag('asset/css/font-awesome.min.css')}
        <!-- Ionicons -->
        {link_tag('asset/css/ionicons.min.css')}
        <!-- Addons Style -->
        {block name="addon_styles"}{/block}
        <!-- Theme style -->
        {link_tag('asset/css/sli_lipi.css')}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="skin-blue">
        <!-- Header -->
        {include file='layouts/header.tpl'}
        
        <div class="wrapper row-offcanvas row-offcanvas-left">
            <!-- Menu Sidebar -->
            {include file='layouts/menu.tpl'}
            <!-- End Menu Sidebar -->
            <!-- Content -->
            <aside class="right-side">
                {block name="content"}{/block}
            </aside>
            <!-- End Content -->
        </div>
            
        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="{base_url()}asset/js/bootstrap.min.js" type="text/javascript"></script>
        <!-- Addons Plugins -->
        {block name="addon_plugins"}{/block}
        <!-- SLI LIPI App -->
        <script src="{base_url()}asset/js/Sli_Lipi/app.js" type="text/javascript"></script>
        <!-- Addons Scripts -->
        {block name="addon_scripts"}{/block}
    </body>
</html>