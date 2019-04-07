<?php

    include_once("conexao.php");

    $linhas=0;

    //CAPTURA OS ARQUIVOS DIGITADOS NA PAGINA E COLOCA EM VARIAVEIS.
    
    $nome = $_POST['nome'];
    $sobrenome = $_POST['sobrenome'];
    $cpf = $_POST['cpf'];
        if(validacpf($cpf)){
            $email = $_POST['email'];
            $escola = $_POST['escola'];
            $situacao= $_POST['situacao'];
            $termos = $_POST['termos'];

            // INSERI OS ARQUIVOS QUE FORAM GUARDADDOS NAS VARIAVÉIS NO BANCO.
            

            $inserirNoBanco = "INSERT INTO pessoas (nome,sobrenome,cpfPessoas_PK,email,escola,situacao,termos)
                VALUES ('$nome','$sobrenome','$cpf','$email','$escola','$situacao','$termos')";
            $salvarNoBanco = mysqli_query($conexao,$inserirNoBanco);
            $linhas = mysqli_affected_rows($conexao);
            mysqli_close($conexao);

        }

    //VALIDAR O CPF

    function validaCPF($cpf) {
 
        // Extrai somente os números
        $cpf = preg_replace( '/[^0-9]/is', '', $cpf );

        // Verifica se foi informado todos os digitos corretamente
        if (strlen($cpf) != 11) {
            return false;
        }
        // Verifica se foi informada uma sequência de digitos repetidos. Ex: 111.111.111-11
        if (preg_match('/(\d)\1{10}/', $cpf)) {
            return false;
        }
        // Faz o calculo para validar o CPF
        for ($t = 9; $t < 11; $t++) {
            for ($d = 0, $c = 0; $c < $t; $c++) {
                $d += $cpf{$c} * (($t + 1) - $c);
            }
            $d = ((10 * $d) % 11) % 10;
            if ($cpf{$c} != $d) {
                return false;
            }
        }
        return true;
    }

?>

<!-- Cabeçalho -->
<!doctype html>
<html> 
    <head>
        <title>
            Sistema de Cadastro do HackAthon
        </title>
        <meta charset="utf-8">
        <meta name="viewpoint" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <link rel="stylesheet" href="bootstrap/node_modules/bootstrap/compiler/bootstrap.css">
        <link rel="stylesheet" href="bootstrap/node_modules/bootstrap/compiler/style.css">
        <link rel="shortcut icon" href="img/b32.ico">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

        <script src="bootstrap/node_modules/jquery/dist/jquery.js"></script>
        <script src="bootstrap/node_modules/popper.js/dist/umd/popper.js"></script>
        <script src="bootstrap/node_modules/bootstrap/dist/js/bootstrap.js"></script>
        <script src="libs/jquery2-1-1.min.js"></script>
        <script src="libs/jqueryMaskPluginV-1-14-11.js"></script>
        <script src="libs/jqueryMaskPluginV-1-14-10.js"></script>
        <script src="libs/jqueryMaskPluginV-1-14-15.js"></script> 
    
    </head>
    <body>


        <!-- Barra de Navegação -->

        <img src="img/cabeçalho.jpg" class="img-fluid">
        <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-dark">
            <div class="container">
                <a class="navbar-brand pull-right"></a>
                    <a class="navbar-brand h1 mb-0" class="icone ico" href="index.php"><strong><h4 class="titulo">HackAthon</h4></strong></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSite">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link titulo" href="cadastrar.php">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link titulo" href="desafios.php">Desafios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link titulo" href="requerimentos.php">Requisitos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link titulo" href="termos.php">Termos & Condições</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link titulo" href="consultas.php">Consultas</a>
                            </li>
                        </ul>
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle titulo" href="#" data-toggle="dropdown" id="navDrop">
                                Social
                                </a>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="https://pt-br.facebook.com/corpodebombeirosdapmesp/"><i class="fab fa-facebook-square"></i> Facebook</a>
                                    <a class="dropdown-item" href="https://www.instagram.com/corpodebombeirosdapmesp/?hl=pt-br"><i class="fab fa-instagram"></i> Instagran</a>
                                    <a class="dropdown-item" href="http://www.corpodebombeiros.sp.gov.br/"><p class="text-center">Site</p></a>
                                </div>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>
				<hr><br><br>
		<div class="container text-center">


                <?php // VERIFICA SE O CPF É REPETIDO OU NÃO.
                    if($linhas == 1){
                        print "<h3><strong>Cadastro realizado com sucesso</strong></h3>";
                        header('refresh:3;index.php');
                    }else{
                        print "<h4>Cadastro não efetuado. <br>Este<strong> CPF</strong> já foi utilizado ou é invalido.</h4>";
                        header('refresh:3;cadastrar.php');
                    }
                ?>
				<br>
				<input type="button" class="btn btn-primary" value="Voltar" onclick="history.go(-1)" class="botaoProcessa">
			

		</div>




        <!-- Rodapé -->
		<br><br><br><br><br><br><br>
		<footer class="navbar-fixed-buttom">
			<div class="container">
           		<div class="row">
                	<div class="col-12 mt-5" ><hr></div>
                    	<div class="col-sm-1">
                    	    <img src="img/bombeiro.ico">
                    	</div>
                   		<div class="col-sm-8 mt-3 ml-0">
                       		<h6><strong><i>Corpo de Bombeiros do Estado de São Paulo</i></strong></h6></a>
                    	</div>
						<div class="col-sm-3 mt-1" > 
							<div class="btn-group btn-group-sm " role="group">
								<a class="btn btn-outline-primary " href="https://pt-br.facebook.com/corpodebombeirosdapmesp/"><i class="fab fa-facebook-square"></i> Facebook</a>
								<a class="btn btn-outline-info " href="https://www.instagram.com/corpodebombeirosdapmesp/?hl=pt-br"><i class="fab fa-instagram"></i> Instagran</a>
								<a class="btn btn-outline-secondary " href="http://www.corpodebombeiros.sp.gov.br/">Site</a>
							</div>
						</div>
					</div>
				</div>
        	</div>	
		</footer>
	</body>
</html>
