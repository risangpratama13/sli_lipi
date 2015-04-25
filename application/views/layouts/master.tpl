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
        <footer class="main-footer">
            <strong>Copyright &copy; {date('Y')} <a href="#">Bahasa Langit</a>.</strong> &nbsp;&nbsp;All rights reserved.
        </footer>
    </aside>
    <!-- End Content -->

</div>
<!-- Modal -->    
{block name="modal"}{/block}
<!-- End Modal -->

<!-- jQuery 2.0.2 -->
{*        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>*}
<script src="{base_url()}asset/js/jquery-2.0.2.min.js"></script>
<!-- Bootstrap -->
<script src="{base_url()}asset/js/bootstrap.min.js" type="text/javascript"></script>
<!-- Addons Plugins -->
{block name="addon_plugins"}{/block}
<!-- SLI LIPI App -->
<script src="{base_url()}asset/js/Sli_Lipi/app.js" type="text/javascript"></script>
<!-- Addons Scripts -->
{*<script type="text/javascript">
    $(document).ready(function () {
        check();
        $("#notif").click(function () {
            var i;
            var html = "";
            $.ajax({
                url: "{base_url()}vendor/slim/slim/notif/{$user->id}",
                dataType: "json",
                success: function (data) {
                    if (data.status != "error") {
                        if (parseInt(data.total) > 0) {
                            var string_header = "Ada " + data.total + " Pemberitahuan Baru";
                            $("#notif_header").text(string_header);
                            for (i in data.notifikasi) {
                                html += "<li>";
                                html += "<a href='" + data.notifikasi[i].link + "'>";
                                html += data.notifikasi[i].message;
                                html += "</a>";
                                html += "</li>";

                                $.ajax({
                                    url: "{base_url()}vendor/slim/slim/notif/update/" + data.notifikasi[i].id,
                                    success: function (data) {
                                    }
                                });
                            }

                            $.ajax({
                                url: "{base_url()}vendor/slim/slim/notif/update/{$user->id}",
                                success: function (data) {
                                }
                            });

                            $("#header_content").empty();
                            $("#header_content").append(html);
                    } else {
                        $("#notif_header").empty();
                        $("#notif_header").text("Tidak Ada Pemberitahuan Baru");
                        $.ajax({
                            url: "{base_url()}vendor/slim/slim/notif/old/{$user->id}",
                            dataType: "json",
                            success: function (data) {
                                if (data.length != 0) {
                                    for (i in data) {
                                        html += "<li>";
                                        html += "<a href='" + data[i].link + "'>";
                                        html += "<p style='padding-left: 10px;padding-top: 2px;'>"+data[i].message+"</p>";
                                        html += "</a>";
                                        html += "</li>";
                                    }
                                    $("#header_content").empty();
                                    $("#header_content").append(html);
                                }
                            }
                        });
                    }
                }
            }
        });
    });
});

    function check() {
        $.ajax({
            url: "{base_url()}vendor/slim/slim/notif/check/{$user->id}",
            dataType: "json",
            success: function (data) {
                if (data.status == "success") {
                    if (data.total == 0) {
                        $("#notif_count").empty();
                    } else {
                        $("#notif_count").empty();
                        $("#notif_count").text(data.total);
                    }
                }
            }
        });
    }    
</script>*}
{block name="addon_scripts"}{/block}
</body>
</html>