<?php
    include "conectaBanco.php";
?>
<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Agenda de contatos </title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/bootstrap-icons.css">
    <script src="js/jquery-3.3.1.js"></script>
    <script src="js/bootstrap.bundle.js"></script>
    <script src="js/jquery.validate.js"></script>
    <script src="js/messages_pt_BR.js"></script>
    <script src="js/pwstrength-bootstrap.js"></script>
    <script src="js/dateITA.js"></script>
    <script src="js/jquery.mask.js"></script>
    <style>
        html {
            height: 100%;
        }

        body {
            background: url('img/dark-blue-background.jpg') no-repeat center fixed;
            background-size: cover;
            height: 100%;
            overflow-x: hidden;
        }
        .custom-file-input ~ .custom-file-label::after{
            content: "Selecionar";
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a href="main.html" class="navbar-brand">
                <img src="img/icone.svg" widht="30" height="30" alt="Agenda de contatos" />
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbar">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="menuCadastros"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi-card-list"></i> Cadastros</a>
                        <div class="dropdown-menu" aria-labelledby="menuCadastros">
                            <a class="dropdown-item" href="cadastroContato.html">
                                <i class="bi-person-fill"></i> Novo contato</a>
                            <a class="dropdown-item" href="listaContatos.html">
                                <i class="bi-list-ul"></i> Lista de contatos</a>
                        </div>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" id="menuConta" data-toggle="dropdown"
                            aria-haspopup="true" aria-expanded="false">
                            <i class="bi-gear-fill"></i> Minha conta</a>
                        <div class="dropdown-menu" aria-labelledby="menuConta">
                            <a class="dropdown-item" href="alterarDados.html">
                                <i class="bi-pencil-square"></i> Alterar dados</a>
                            <a class="dropdown-item" href="logout.php">
                                <i class="bi-door-open-fill"></i> Sair</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#" data-toggle="modal" data-target="#modalSobreAplicacao">
                            <i class="bi-info-circle"></i> Sobre</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0" method="get" action="listaContatos.html">
                    <input class="form-control mr-sm-2" type="search" name="busca" placeholder="Pesquisar">
                    <button class="btn btn-outline-light my-2 my-sm-0" type="submit">Pesquisar</button>
                </form>
                <span></span>
            </div>
        </div>
    </nav>
    
    <div class="row h-100 align-items-center pt-5">
        <div class="container">
            <div class="row">
                <div class="col-sm"></div>
                <div class="col-sm-12">
                    <div class="card border-primary my-5">
                        <div class="card-header bg-primary text-white">
                            <h5> Cadastro de contato</h5>
                        </div>
                        <div class="card-body">
                            <form method="post" action="main.html">
                                <h5 class="text-primary">Dados pessoais</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="nomeContato">Nome</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="bi-person-circle"></i></div>
                                                        </div>
                                                        <input id="nomeContato" type="text" class="form-control"
                                                        name="nomeContato" placeholder="Digite o seu nome" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="nascimentoContato">Data de nascimento</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="bi-calendar-date"></i></div>
                                                        </div>
                                                        <input id="nascimentoContato" type="text" class="form-control"
                                                        name="nascimentoContato" placeholder="DD/MM/AAAA" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="sexoContato">Sexo</label>
                                                    <div class="input-group">
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" 
                                                            name="sexoContato" id="sexoMasculino" value="masculino">
                                                            <label class="form-check-label" for="sexoMasculino">Masculino</label>
                                                        </div>
                                                        <div class="form-check form-check-inline">
                                                            <input class="form-check-input" type="radio" 
                                                            name="sexoContato" id="sexoFeminino" value="feminino">
                                                            <label class="form-check-label" for="sexoFeminino">Feminino</label>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="mailContato">E-mail</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="bi-at"></i></div>
                                                        </div>
                                                        <input id="mailContato" type="email" class="form-control"
                                                        name="mailContato" placeholder="Digite o e-mail" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="row">
                                                    <div class="col-sm">
                                                        <div class="form-group">
                                                            <label for="fotoContato">Foto</label>
                                                            <div class="input-group">
                                                                <div class="input-group-prepend">
                                                                    <div class="input-group-text"><i class="bi-file-earmark-person"></i></div>
                                                                </div>
                                                                <div class="custom-file">
                                                                    <input class="custom-file-input" type="file" name="fotoContato"
                                                                    id="fotoContato">
                                                                    <label class="custom-file-label" for="fotoContato">Escolha a foto...</label>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="text-primary">Telefones</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="telefone1Contato">Telefone</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="bi-fone"></i></div>
                                                        </div>
                                                        <input id="telefone1Contato" type="tel" class="form-control mascara-telefone"
                                                        name="telefone1Contato" placeholder="(XX) XXXXX-XXXX" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="telefone2Contato">Telefone</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="bi-fone"></i></div>
                                                        </div>
                                                        <input id="telefone2Contato" type="tel" class="form-control mascara-telefone"
                                                        name="telefone2Contato" placeholder="(XX) XXXXX-XXXX">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="telefone3Contato">Telefone</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="bi-fone"></i></div>
                                                        </div>
                                                        <input id="telefone3Contato" type="tel" class="form-control mascara-telefone"
                                                        name="telefone3Contato" placeholder="(XX) XXXXX-XXXX">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="telefone4Contato">Telefone</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="bi-fone"></i></div>
                                                        </div>
                                                        <input id="telefone4Contato" type="tel" class="form-control mascara-telefone"
                                                        name="telefone4Contato" placeholder="(XX) XXXXX-XXXX">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <h5 class="text-primary">Endere??o</h5>
                                <hr>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="logradouroContato">Logradouro</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="bi-map"></i></div>
                                                        </div>
                                                        <input id="logradouroContato" type="text" class="form-control"
                                                        name="logradouroContato" placeholder="Rua, avenida, travessa e outros">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="complementoContato">Complemento</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="bi-pin"></i></div>
                                                        </div>
                                                        <input id="complementoContato" type="text" class="form-control"
                                                        name="complementoContato" placeholder="N??mero, quadra, lote e outros" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="estadoContato">Estado</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="bi-globe"></i></div>
                                                        </div>
                                                        <select class="form-control" name="estadoContato" id="estadoContato"
                                                        required>
                                                            <option>Escolha o estado</option>
                                                            <?php
                                                              $sqlEstados = "SELECT codigoEstado, nomeEstado FROM estados";

                                                              $resultadosEstados = $conexao->query($sqlEstados)->fetchAll();
                                                            
                                                              foreach ($resultadosEstados as list($codigoEstado, $nomeEstado)){
                                                                  echo "<option value=\"$codigoEstado\">$nomeEstado</option>\n";
                                                              }
                                                            ?>  
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm">
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="bairroContato">Bairro</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="bi-globe"></i></div>
                                                        </div>
                                                        <input id="bairroContato" type="text" class="form-control"
                                                        name="bairroContato" placeholder="Digite o bairro" required>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-sm">
                                                <div class="form-group">
                                                    <label for="cidadeContato">Cidade</label>
                                                    <div class="input-group">
                                                        <div class="input-group-prepend">
                                                            <div class="input-group-text"><i class="bi-globe"></i></div>
                                                        </div>
                                                        <select class="form-control" name="cidadeContato" id="cidadeContato"
                                                        required>
                                                            <option>Escolha a cidade</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-sm text-right">
                                        <button class="btn btn-primary" type="submit">Salvar</button>
                                    </div>
                                </div>
                            </form>
                        </div>        
                    </div>
                </div>
                <div class="col-sm"></div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modalSobreAplicacao" tabindex="-1" role="dialog" aria-labelledby="sobreAplicacao"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="sobreAplicacao">Sobre</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <img src="img/logo.jpg">
                    <hr>
                    <p>Agenda de contatos</p>
                    <p>Vers??o 1.0</p>
                    <p>Todos os direitos reservados &copy; 2022</p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
                </div>
            </div>
        </div>
    </div>

</body>
<script>
    //prepara????o campos default do jquery
    jQuery.validator.setDefaults({
        errorElement: 'span',
        errorPlacement: function (error, element) {
            error.addClass('invalid-feedback');
            element.closest('.form-group').append(error);
        },

        highlight: function (element, errorClass, validClass) {
            $(element).addClass('is-invalid');
        },
        unhighlight: function (element, errorClass, validClass) {
            $(element).removeClass('is-invalid');
        }

    });
    $(document).ready(() => {
        $("#cadastroContato").validate({
            rules: {
                //defini????o de regras utilizando ids
                nomeContato: {
                    minlength: 5,
                    required: true
                },
                nascimentoContato: {
                    dateITA: true
                },
                sexoContato: {
                    required: true
                }
            }
        });
        //mask campos
        $("#nascimentoContato").mask("00/00/0000");

        var SPMaskBehavior = function (val) {
            return val.replace(/\D/g, '').length === 11 ? '(00) 00000-0000' : '(00) 0000-00009';
        },
            spOptions = {
                onKeyPress: function (val, e, field, options) {
                    field.mask(SPMaskBehavior.apply({}, arguments), options);
                }
            };
        //linha que aplica mascara ao telefone
        $('.mascara-telefone').mask(SPMaskBehavior, spOptions);

        $('#estadoContato').change(function (){
          $('#cidadeContato').html('<option>Carregando...</option>');
          $('#cidadeContato').load('listaCidades.php?codigoEstado='
                                    + $('#estadoContato').val());
        });

    });

</script>

</html>