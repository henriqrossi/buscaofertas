<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="<?=base_url('assets/img/favicon.ico')?>" type="image/x-icon">
    <title>Busca Oferta - Admin</title>
    <link href="<?=base_url('assets/css/all.min.css');?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link href="<?=base_url('assets/css/sb-admin-2.min.css')?>" rel="stylesheet">
    <style type="text/css">
        body {
            background-image: url("<?=base_url('assets/img/bg-admin.jpg');?>");
        }
    </style>
</head>
<body class="bg-gradient-primary">
    <div class="container">
        <div class="row justify-content-center" style="margin-top: 15vh">
            <div class="col-xl-10 col-lg-12 col-md-9">
                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <div class="row justify-content-center align-items-center" style="min-height: 50vh">
                            <div class="col-lg-6">
                                <div class="p-3">
                                    <!-- <?php echo $this->session->flashdata('result');?> -->
                                    <form class="user py-5 mt-5" action="<?=base_url('login/logar')?>" method="POST">
                                        <div class="col-12 text-center">
                                            <h5><b>ACESSAR</b></h5>
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="exampleInputEmail" placeholder="Login" name="usuario">
                                        </div>
                                        <div class="form-group">
                                            <input type="password" class="form-control form-control-user" placeholder="Senha" name="senha">
                                        </div>
                                        <button class="btn btn-primary btn-user btn-block">Acessar</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="<?=base_url('assets/js/jquery.min.js')?>"></script>
    <script src="<?=base_url('assets/js/bootstrap.bundle.min.js')?>"></script>
    <script src="<?=base_url('assets/js/jquery.easing.min.js')?>"></script>
    <script src="<?=base_url('assets/js/sb-admin-2.min.js')?>"></script>
</body>
</html>