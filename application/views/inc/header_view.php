<!DOCTYPE html>
<html lang="br">
    <head>
        <title>.: Hosang :.</title>
        <link rel="stylesheet" href="<?= site_url('public/css/bootstrap.min.css') ?>" />
        <link rel="stylesheet" href="<?= site_url('public/css/style.css') ?>" />
        <link rel="shortcut icon" href="<?= site_url('public/img/judge.ico') ?>" />
        <link rel="stylesheet" href="<?= site_url('public/css/bootstrap-select.min.css')?>">
        <meta charset="utf-8">
        <script src="<?= site_url('public/js/jquery-3.1.1.min.js') ?>"></script>
        <script src="<?= site_url('public/js/bootstrap.js') ?>"></script>
        <script src="<?= site_url('public/js/jquery.maskMoney.min.js') ?>"></script>
        <script src="<?= site_url('public/js/bootstrap-datepicker.js') ?>"></script>
        <script src="<?= site_url('public/js/bootstrap-select.min.js')?>"></script>
        <script>
            $(document).ready(function () {
                $(".datepicker").datepicker({format: 'dd/mm/yyyy'});
                $(".money").maskMoney({'thousands': ''});
                $('.selectpicker').selectpicker();
            });
        </script>
    </head>
    <body role="document">
        <nav class="navbar navbar-inverse navbar-fixed-top">
            <div class="container-fluid">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">

                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?= site_url() ?>"><span><img src="<?= site_url() ?>public/img/judge.ico" height="20" width="20"/></span>&nbsp;<span>Hosang</span></a>
                </div>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav">
                        <li class="active"><a href="<?= base_url() ?>">Inicial <span class="sr-only"></span></a></li>
                        <!--li><a href="#">Link</a></li-->
                        
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Admin <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-header text-center">Cadastros</li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="<?= site_url('usuario') ?>">Usuário</a></li>
                                        <li role="separator" class="divider"></li>
                                        <li class="dropdown-header text-center">Configurações</li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="#">Config</a></li>
                                    </ul>
                                </li>
                            
                                <li class="dropdown">
                                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Financeiro <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li class="dropdown-header">Carteira</li>
                                        <li role="separator" class="divider"></li>
                                        <li><a href="<?= base_url() ?>expenses">Despesas</a></li>

                                    </ul>
                                </li>
                            
                    </ul>

                    <!--Se usuário não estiver autenticado, exibe formulário de login-->
                    
                    <div class="navbar-form navbar-right">
                        <a href="<?= site_url('autenticacao') ?>" class="btn btn-success">Entrar</a>
                    </div>
                    
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container-fluid -->
        </nav>
        <div class="row">
            <br>
            <br>
            <br>
        </div>
        <div class="container">
            <?php if ($this->session->userdata('erro_mensagem') != NULL) { ?>
                <div class="panel panel-danger">
                    <div class="panel-heading alert-danger">
                        <div class="panel-title alert-danger text-center">
                            <?php echo $this->session->userdata('erro_mensagem'); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
            <?php if ($this->session->userdata('sucesso_mensagem') != NULL) { ?>
                <div class="panel panel-success">
                    <div class="panel-heading alert-success">
                        <div class="panel-title alert-success text-center">
                            <?php echo $this->session->userdata('sucesso_mensagem'); ?>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>