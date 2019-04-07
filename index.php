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


        <!-- Importações de script para aplicar as mascaras-->

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
        <div>
            <img src="img/cabecalho.jpg" class="img-fluid" alt="Resposive image" id="teste">
        </div>
        <nav class="navbar navbar-expand-lg navbar-dark bg-gradient-dark">
            <div class="container">
                <a class="navbar-brand pull-right"></a>
                    <a class="navbar-brand mb-0 mt-2" class="icone ico" href="index.php"><strong><p class="titulo193">193Challenge</strong></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSite">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSite">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link titulo" href="cadastrar.php">Cadastrar</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link titulo" href="#" data-toggle="modal" data-target="#siteModalDesafios">Desafios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link titulo" data-toggle="modal" data-target="#siteModalRequisitos">Requisitos</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link titulo" href="#" data-toggle="modal" data-target="#siteModalTermos">Termos & Condições</a>
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
                                    <a class="dropdown-item" href="https://twitter.com/BombeirosPMESP"><i class="fab fa-twitter"></i> Twitter</a>
                                </div>
                            </li>
                        </ul>
                    </div>
            </div>
        </nav>

        <!--Menu de imagens -->

    <div class="container text-center">
        <div id="carouselSite" class="carousel slide" data-ride="carousel">
          
           <ol class="carousel-indicators ">
               <li data-target="carouselSite" data-slide-to="0" class="active"></li>
               <li data-target="carouselSite" data-slide-to="1"></li>
               <li data-targey="carouselSite" data-slide-to="2"></li>
               <li data-targey="carouselSite" data-slide-to="3"></li>
           </ol>
          
           <div class="carousel-inner">
               <div class="carousel-item active">
                   <img src="img/cadastrar.jpg" class="img-fluid d-block " alt="First slide">
                   <div class="carousel-caption d-none d-md-block">
                   </div>
               </div>
               <div class="carousel-item">
                   <img src="img/requisitos2.jpg" class="img-fluid d-block" alt="Second slide">
                   <div class="carousel-caption d-none d-md-block">
                       <h3 class="titulo">Requisitos</h3>
                       <p><hr></p>
                       <p><hr></p>
                   </div>
                </div>
               <div class="carousel-item">
                   <img src="img/requisitosbomb.jpeg" class="img-fluid d-block" alt="Third slide">
                   <div class="carousel-caption d-none d-md-block">
                       <h3 class="titulo">Desafios</h3>
                       <p><hr></p>
                       <p><hr></p>
                   </div>
               </div>
               <div class="carousel-item">
                   <img src="img/regras3.jpg" class="img-fluid d-block" alt="Forth slide">
                   <div class="carousel-caption d-none d-md-block">
                       <h3 class="titulo">Termos & Condições</h3>
                       <p><hr></p>
                       <p><hr></p>
                   </div>
               </div>
           </div>

           <a class="carousel-control-prev" href="#carouselSite" role="button" data-slide="prev">
               <span class="carousel-control-prev-icon"></span>
               <span class="sr-only">Anterior</span>
           </a>
           <a class="carousel-control-next" href="#carouselSite" role="button" data-slide="next">
               <span class="carousel-control-next-icon"></span>
               <span class="sr-only">Avançar</span>
           </a>





       </div>
    </div>
       
        <hr class="mt-5">
        <div class="container text-center">
            <div class="row mb-5 mt-5">
                <div class="col-sm-6">
                    <div class="card">
                    <img class="card-img-top" src="img/cadastrar.jpg">
                        <div class="car-body">
                            <h4 class="card-title"><strong>Cadastrar-se</strong></h4>
                            <h6 class="sub-title mb-2 text-muted">Venha fazer parte da nossa História</h6>
                            <p class="car-text"></p>
                            <a class="btn btn-outline-primary mb-2" href="cadastrar.php" role="button">Cadastrar</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <img class="card-img-top" src="img/requisitos2.jpg">
                        <div class="car-body">
                            <h4 class="card-title"><strong>Requisitos</strong></h4>
                            <h6 class="sub-title mb-2 text-muted">Saiba o que é necessário para participar</h6>
                            <p class="car-text"></p>
                            <a class="btn btn-outline-dark mb-2" data-toggle="modal" data-target="#siteModalRequisitos" href="#" role="button">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div><div class="row mb-5 text-center">
            <div class="col-sm-6">
                    <div class="card">
                    <img class="card-img-top" src="img/requisitosbomb.jpeg">
                        <div class="car-body">
                            <h4 class="card-title"><strong>Desafios</strong></h4>
                            <h6 class="sub-title mb-2 text-muted">O que deverá ser solucionado</h6>
                            <p class="car-text"></p>
                            <a class="btn btn-outline-dark mb-2" href="#" role="button" data-toggle="modal" data-target="#siteModalDesafios">Saiba mais</a>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="card">
                    <img class="card-img-top" src="img/regras3.jpg">
                        <div class="car-body">
                            <h4 class="card-title"><strong>Termos & Condições</strong></h4>
                            <h6 class="sub-title mb-2 text-muted">Quais as condições para o projeto</h6>
                            <p class="car-text"></p>
                            <a class="btn btn-outline-dark mb-2" role="button" data-toggle="modal" data-target="#siteModalTermos" href="#">Saiba mais</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--MODAL DO BOTÃO DE TERMOS E CONDIÇÕES-->

        <div class="modal fade" id="siteModalTermos" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Termos & Condições</h2>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <br><h3><strong>1.	Campanha de Inovação</strong></h3><br>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;O 193challenge é um evento de participação voluntária, com o intuito de promover a 
                        inovação em serviços ofertados pelo Corpo de Bombeiros à sociedade em geral, 
                        com foco na experiência do cidadão.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Consiste em uma “maratona tecnológica” focada na busca por soluções 
                        de desafios propostos aos participantes, reunindo pessoas dispostas a trabalhar em 
                        equipe, por horas, 
                        em um ambiente informal e altamente produtivo.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Todos serão convidados a enfrentar paradigmas, pensar fora da caixa e 
                        colaborar com o serviço do 
                        Corpo de Bombeiros em sua essência: o atendimento à sociedade nas emergências.
                        </p>
                        <br><h3><strong>2.	Público elegível</strong></h3><br>
                        <p class="ml-3">&nbsp;&nbsp;&nbsp;&nbsp;Esta campanha se estende a todos que se considerem aptos a contribuir com o 
                        desenvolvimento de soluções a um dos desafios propostos, desde que sejam maiores de 18 
                        (dezoito) 
                        anos de idade ou estejam acompanhados de um responsável devidamente identificado.
                        </p>
                        <p class="ml-3">&nbsp;&nbsp;&nbsp;&nbsp;Diversos tipos de perfis serão benvindos, quais sejam: universitários, 
                        desenvolvedores, analistas de sistemas, analistas de banco de dados, 
                        analistas de negócio, designers de UX, não se restringindo a esses perfis.
                        </p>
                        <p class="ml-3">&nbsp;&nbsp;&nbsp;&nbsp;A criatividade, a capacidade de trabalho em equipe e o foco 
                        na execução de tarefas são características desejáveis, 
                        uma vez que há um prazo para a apresentação de soluções.
                        </p>
                        <br><h3><strong>3.	Período de duração</strong></h3><br>
                        <p class="ml-3"> &nbsp;&nbsp;&nbsp;&nbsp;Das 09h00 de 09/03/2019 às 20h00 de 10/03/2019.
                        </p>
                        <br><h3><strong>4.	Metodologia</strong></h3><br>
                        <p class="ml-3">&nbsp;&nbsp;&nbsp;&nbsp;Uma vez iniciado o prazo para inscrição, qualquer pessoa poderá se 
                        inscrever individualmente ou em grupos de no máximo três pessoas. Recomenda-se que os grupos possuam 
                        desenvolvedores e designers de UX.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Haverá a possibilidade de inscrição individual, entretanto, ao ser selecionada, 
                        será automaticamente inserida em um grupo, definido através de sorteio direcionado, 
                        para que o grupo apresente integrantes com os papéis recomendados.                        
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Serão oferecidos os seguintes desafios:
                            <ol>
                                <li> Desenvolvimento de App e Feature para fornecimento de informações 
                                padronizadas da emergência com integração a API do sistema COBOM ON LINE.</li><br>
                                <li> Desenvolvimento de App Acionamento e Despacho de Recursos (Bombeiros Militares, 
                                Municipais, Voluntários e Recursos Materiais), Coleta de Informações do local da 
                                Emergência, permitindo uma integração com a API do sistema COBOM ON LINE.</li>
                            </ol>
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Serão selecionados grupos e pessoas 
                        individualmente até que se atinja um número mínimo de 150 participantes.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;No caso do número de inscrições individuais e de grupos exceder o 
                        limite previsto de vagas, haverá uma seleção técnica de todos os perfis inscritos, 
                        até que se atinja o limite estipulado neste regulamento. Esta seleção será feita por
                         um comitê, ao seu exclusivo arbítrio e critério, sem a necessidade de emissão de esclarecimento justificado, 
                        e levará em consideração as respostas fornecidas na ficha de inscrição.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;A inscrição é totalmente espontânea e voluntária, sem qualquer tipo de vínculo 
                        com contrato de trabalho e sem a execução de tarefas rotineiras, 
                        tendo pleno conhecimento de que a sua participação se limita ao evento e sua duração.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;A inscrição será realizada através do 
                        preenchimento de um formulário online, acessado em: www.193challenge.com.br
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;O evento ocorrerá nos dias 09 e 10 de março de 2019, na Pontifícia Universidade 
                        Católica de São Paulo, no Campus Consolação, localizado na rua Marquês de Paranaguá, 
                        nº 111, São Paulo, SP. O início está previsto para às 09h00 do dia 9 de março e o término 
                        previsto para às 20h00 do dia 10 de março, assegurados intervalos para 
                        alimentação e descanso dos participantes, nas dependências do local do evento.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;É admitida a desistência do participante a qualquer momento. Se a desistência 
                        implicar no prejuízo da 
                        efetividade da participação do grupo a que pertencia, todo o grupo será desqualificado.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;É permitida a saída do local do evento, a qualquer momento, e o acesso será permitido 
                        até as 20h00 do dia 9 de março (sábado), 
                        com retorno autorizado a partir das 07h15 do dia 10 de março (domingo).
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Os participantes disporão de alimentação e bebidas (não alcoólicas) durante todo o evento.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Haverá uma equipe de socorristas à disposição dos participantes, durante todo o evento.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Os inscritos que forem selecionados receberão, por e-mail, acesso ao formulário
                         online de confirmação de presença, o qual deverá ser aceito de livre e espontânea vontade em 
                        todas as suas condições em caso de concordância para, desse modo, efetivar sua participação.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Durante o evento, os participantes também receberão orientações e instruções 
                        detalhadas sobre os problemas/desafios propostos 
                        e os meios que poderão ser utilizados para desenvolvimento de suas respectivas soluções.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Os participantes deverão levar seus computadores de uso pessoal, 
                        com seus respectivos acessórios e poderão utilizar a tecnologia de sua preferência 
                        no desenvolvimento da 
                        solução e/ou que estejam disponíveis para a proposta de resolução do desafio.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Haverá conexão à internet via Wi-Fi aberta para todos os participantes.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Durante o evento, mentores com conhecimento sobre os desafios estarão disponíveis para sanar eventuais dúvidas.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Para entrada no evento, bem como eventuais saídas durante sua realização, 
                        será necessária a apresentação de documento de identificação original, com foto.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Se a conduta de algum participante estiver prejudicando negativamente o 
                        progresso da equipe ou demonstrar-se inconveniente ao evento, o caso poderá ser 
                        levado ao conhecimento do júri técnico para avaliação e deliberação, podendo haver advertência verbal ou a exclusão do 
                        participante do evento, com a devida perda de direito à premiação.
                        </p>
                        <br><h3><strong>5.	Seleção da melhor solução e premiação</strong></h3><br>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Após a entrega das soluções, será iniciado o processo de apresentação 
                        das soluções de cada equipe, seguindo ordem estabelecida pela organização 
                        do evento. Cada apresentação deverá obedecer a um limite de 10 minutos de 
                        duração e mais 5 minutos de perguntas e comentários do comitê avaliador.
                        As soluções serão analisadas pelo júri técnico, que definirá quais projetos 
                        apresentam requisitos mínimos para a avaliação do comitê organizador.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;A classificação e divulgação dos vencedores ficará a cargo do comitê organizador, 
                        após a seleção prévia de projetos pelo júri técnico.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Para os desafios definidos, haverá premiação para a equipe que 
                        apresentar a melhor proposta de soluções, resultando em um MVP que melhor atenda aos 
                        propósitos do evento e que 
                        atenda da melhor maneira aos critérios técnicos, funcionais e operacionais estabelecidos.
                        </p>
                        <p class="ml-3"> 
                        &nbsp;&nbsp;&nbsp;&nbsp;O prêmio será uma experiência completa junto ao Corpo de Bombeiros na Escola Superior de 
                        Bombeiros, 
                        além de uma visita ao Centro de Operações do Corpo de Bombeiros, conforme cronograma próprio. 
                        </p>
                        <br><h3><strong>6.	Os critérios de seleção do melhor projeto serão:</strong></h3><br>
                        <ol>
                            <li>Código;</li>
                            <li>Aprendizado;</li>
                            <li>Documentação;</li>
                            <li>Inovação;</li>
                            <li>Escalabilidade;</li>
                            <li>Aplicabilidade;</li>
                            <li>Apresentação;</li>
                            <li>Oratória;</li>
                            <li>Interesse;</li>
                            <li>Entrosamento.</li>
                        </ol>
                        <br><h3><strong>7. Considerações gerais</strong></h3><br>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp; O participante ou o grupo poderão ser desclassificados da campanha de 
                        inovação em caso de conduta desrespeitosa, perigosa ou ilícita, desde que seja comprovada a violação de leis e/ou regras 
                        comerciais, perdendo, assim, todos os direitos à premiação do evento.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Todos os participantes terão direito a sair e a retornar ao local do evento, 
                        sendo a gestão do tempo responsabilidade do próprio grupo. Todos os deslocamentos externos 
                        serão por conta do próprio participante, sem quaisquer ônus para a organização do evento e o CBPMESP.
                        </p>
                        <p class="ml-3"> 
                        &nbsp;&nbsp;&nbsp;&nbsp;Este regulamento está disponível no site www.193challenge.org , bem como o formulário de inscrição.
                        </p>
                        <br><h3><strong>8.	Do direito de imagem</strong></h3><br>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Ao participar dessa campanha de inovação, nos termos deste Regulamento, o participante estará automaticamente 
                        autorizando a organização do evento e o CBPMESP a utilizar, de modo gratuito, definitivo e irrevogável, o seu 
                        nome, imagem e som de voz nos canais de comunicação interna e externa da organização, para a divulgação da 
                        campanha. As autorizações descritas anteriormente não implicam em quaisquer ônus ou 
                        obrigações de divulgação ou de pagamento de qualquer quantia por parte da organização e do CBPMESP.
                        </p>
                        <br><h3><strong>9.	Propriedade intelectual e confidencialidade</strong></h3><br>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Todos os participantes deverão publicar seus códigos sob licença GPL3 no 
                        repositório oficial do CBPMESP.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;O participante declara sua inequívoca ciência de que a submissão de uma ideia, 
                        solução ou protótipo, não gera qualquer direito ou garantia de sua efetiva implementação.
                        </p>
                        <p class="ml-3">
                        &nbsp;&nbsp;&nbsp;&nbsp;Quaisquer conteúdo, além dos códigos desenvolvidos no âmbito do evento devem se submeter 
                        à licença Creative Commons Atribuição-CompartilhaIgual CC BY-SA.
                        </p>
                    </div>
                    <div class="modal-footer">      
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
       </div> 

       <!--MODAL DOS DESAFIOS PROPOSTOS NO HACKATHON-->

       <div class="modal fade" id="siteModalDesafios" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Desafios</h2>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li class="list-group-item"><h5>&nbsp;&nbsp;&nbsp;&nbsp;Desenvolvimento de App e Feature para fornecimento de informações padronizadas da emergência com integração a API do sistema COBOM ON LINE.</h5></li>
                            <li class="list-group-item"><h5>&nbsp;&nbsp;&nbsp;&nbsp;Desenvolvimento de App Acionamento e Despacho de Recursos (Bombeiros Militares, Municipais, Voluntários e Recursos Materiais), Coleta de Informações do local da Emergência, permitindo uma integração com a API do sistema COBOM ON LINE.</h5></li>
                        </ul>
                    </div>
                    <div class="modal-footer">      
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
       </div> 

       <!--MODAL DOS REQUISITOS PARA PARTICIPAÇÃO NO HACKATHON-->

       <div class="modal fade" id="siteModalRequisitos" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h2 class="modal-title">Requisitos</h2>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <ul>
                            <li class="list-group-item"><h5>&nbsp;&nbsp;&nbsp;&nbsp;Todos podem participar desde que sejam maior de 18 anos, ou estejam acompanhados por um responsável devidamente identificado.</h5></li>
                            <li class="list-group-item"><h5>&nbsp;&nbsp;&nbsp;&nbsp;Ter conhecimento em alguma area de Tecnologia, ou que contribua para tal:
                                                        <br><p class=" ml-4">Desenvolvedores<br>Analista de Negócios<br>Analista de Sistemas<br>Analista de Banco de Dados<br>Designers UX ...<br></p></h5></li>
                            <li class="list-group-item"><h5>&nbsp;&nbsp;&nbsp;&nbsp;Capacidade de trabalhar em equipe tendo em vista que há prazo para apresentação das soluções</h5></li>
                        </ul>
                    </div>
                    <div class="modal-footer">      
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Fechar</button>
                    </div>
                </div>
            </div>
       </div> 


        

     



        
    </body>
    <footer>
        <!-- Começa o rodapé -->       

       <div class="container-fluid rodape">
        <div class="container">
                <div class="row">
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-left mt-1" >
                        <p><span class="corDaFonte"><img src="img/b32.ico">&nbsp;&nbsp;Corpo de Bombeiros do Esdado de São Paulo</span></p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-center mt-2">
                        <p class="corDaFonte">&reg; Copyright 2019 193Challenge</p>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4 text-right mt-2" > 
                        <div class="btn-group btn-group-sm " role="group">
                            <a class="btn btn-light " href="https://pt-br.facebook.com/corpodebombeirosdapmesp/"><i class="fab fa-facebook-square"></i></a>
                            <a class="btn btn-light " href="https://www.instagram.com/corpodebombeirosdapmesp/?hl=pt-br"><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-light " href="https://twitter.com/BombeirosPMESP"><i class="fab fa-twitter"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
</html>