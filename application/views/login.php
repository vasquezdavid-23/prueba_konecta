<!DOCTYPE html>
<html lang="en">

<head id="head">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Inicio Sesión</title>

    <!-- Bootstrap Core CSS -->
    <link href="<?php echo base_url() ?>plantilla/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- MetisMenu CSS -->
    <!-- <link href="<?php echo base_url() ?>plantilla/vendor/metisMenu/metisMenu.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="<?php echo base_url() ?>plantilla/dist/css/pnotify.custom.min.css">

    <!-- Custom CSS -->
    <!-- <link href="<?php echo base_url() ?>plantilla/dist/css/sb-admin-2.css" rel="stylesheet"> -->

    <!-- Custom Fonts -->
    <link href="<?php echo base_url() ?>plantilla/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body>

    <div class="container">
        <div class="row">
            <div class="col-md-4 col-md-offset-4">
                <div class="login-panel panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">Please Sign In</h3>
                    </div>
                    <div class="panel-body">
                        <form id="inicioSesion">
                            <fieldset>
                                <div class="form-group">
                                    <input class="form-control" placeholder="E-mail" name="correo" type="email" autofocus>
                                </div>
                                <div class="form-group">
                                    <input class="form-control" placeholder="Password" name="clave" type="password">
                                </div>
                                <div class="checkbox">
                                    <label>
                                        <input name="remember" type="checkbox" value="Remember Me">Remember Me
                                    </label>
                                </div>
                                <!-- Change this to a button or input when using this as a form -->
                                <button type="button" class="btn btn-success btn-block" onclick="ini()">Login</button>
                            </fieldset>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>



    <!-- jQuery -->
    <script src="<?php echo base_url() ?>plantilla/vendor/jquery/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ?>plantilla/vendor/bootstrap/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <!-- <script src="<?php echo base_url() ?>plantilla/vendor/metisMenu/metisMenu.min.js"></script> -->

    <!-- Custom Theme JavaScript -->
    <!-- <script src="<?php echo base_url() ?>plantilla/dist/js/sb-admin-2.js"></script> -->

    <script src="<?php echo base_url() ?>plantilla/dist/js/pnotify.custom.min.js"></script>

    <script>
        var url = "<?= base_url() ?>";
    </script>

    <script>
        function ini() {
            var form = $("#inicioSesion").serialize();
            $.ajax({
                url:url+"Login/validar",
                type:'post',
                dataType:'json',
                data: form,
                success:function(respuesta){
                    if (respuesta == 1) {
                        new PNotify({
                            title: 'Success!',
                            text: 'Logeado correctamente',
                            type: 'success'
                        });
                        window.location.href = url+'Welcome';
                    } else if (respuesta == 2) {
                        new PNotify({
                            title: 'Error!',
                            text: 'Contraseña incorrecta',
                            type: 'error'
                        });
                    }else if (respuesta == 3) {
                        new PNotify({
                            title: 'Error!',
                            text: 'Usuario incorrecto',
                            type: 'error'
                        });
                    }else if (respuesta == 4) {
                        new PNotify({
                            title: 'Error!',
                            text: 'Complete los campos',
                            type: 'error'
                        });
                    } 
                }
            })
        }
        
    </script>

</body>

</html>
