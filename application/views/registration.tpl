<!DOCTYPE html>
<html class="bg-black">
    <head>
        <meta charset="UTF-8">
        <title>Registrasi Anggota Baru</title>
        <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
        <!-- Icon -->
        {link_tag('asset/img/favicon.png','shortcut icon','image/png')}        
        <!-- bootstrap 3.0.2 -->
        {link_tag('asset/css/bootstrap.min.css')}
        <!-- font Awesome -->
        {link_tag('asset/css/font-awesome.min.css')}
        <!-- Theme style -->
        {link_tag('asset/css/sli_lipi.css')}

        <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
        <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
        <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
          <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
        <![endif]-->
    </head>
    <body class="bg-black">
        <div class="form-box" id="login-box">
            <div class="header">Daftar Anggota Baru</div>
            {form_open("registrasi")}
                <div class="body bg-gray">
                    <br/>
                    {$data.message}
                    <div class="form-group">
                        {form_input($data.full_name)}
                        {form_error('full_name','<p class="help-block text-red">','</p>')}
                    </div>
                    <div class="form-group">
                        {form_input($data.username)}
                        {form_error('username','<p class="help-block text-red">','</p>')}
                    </div>
                    <div class="form-group">
                        {form_password($data.password)}
                        {form_error('password','<p class="help-block text-red">','</p>')}
                    </div>
                    <div class="form-group">
                        {form_password($data.password_confirm)}
                        {form_error('password_confirm','<p class="help-block text-red">','</p>')}
                    </div>
                    <div class="form-group">
                        {form_radio('sex','M',TRUE)} Laki-laki
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        {form_radio('sex','F')} Perempuan
                    </div>
                </div>
                <div class="footer">                    
                    {form_submit('registrasi', "Mendaftar", 'class="btn bg-olive btn-block"')}
                    <a href="{base_url()}login" class="text-center">Sudah Punya Akun</a>
                </div>
            {form_close()}
        </div>

        <!-- jQuery 2.0.2 -->
        <script src="http://ajax.googleapis.com/ajax/libs/jquery/2.0.2/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="{base_url()}asset/js/bootstrap.min.js" type="text/javascript"></script>
    </body>
</html>