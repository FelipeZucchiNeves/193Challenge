<!doctype html>
<html> 
    <head>
        <title>
            Cadastro do HackAthon
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


        <script>

            // INSERE A MASCARA DO CPF E VALIDA APENAS NUMEROS.
            $('#cpf').mask('000.000.000-00', {reverse: true});    
            
            $(function(){
                $('[data-toggle="popover"]').popover();
            })
    
            form.reset();

            // NÃO ACEITA NUMERO EM CAMPOS COM APENAS LETRAS
            function tecla(){
                evt = window.event;
                var tecla = evt.keyCode;

                    if(tecla > 47 && tecla < 58){ 
                    evt.preventDefault();
                    }
            }

            // VALIDA SE NÃO HÁ ESPAÇOS VAZIOS
            function Trim(nome){
	            return nome.replace(/^\s+|\s+$/g,"");
                }
                
            
        </script>

       
    
    
    </head>
    <body>


        <!-- Barra de Navegação -->
        <div>
            <img src="img/cabeçalho.jpg" class="img-fluid" alt="Imagem responsiva" id="teste">
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
                                <a class="nav-link titulo" href="#" data-toggle="modal" data-target="#siteModal">Termos & Condições</a>
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

        <!--Começa o formulário de cadastro-->

        <div class="container">
            <div class="row">
                <div class="col-12 mt-3">
                    <h1 class="display-4"><strong>Cadastrar</strong></h1>
                </div>
            </div>
                <form method="post" name="form" data-toggle="validator" action="processa.php" >  
                    <div class="form-row">     
                        <div class="form-group col-sm-4">
                            <label for="inputNome"><strong>Nome</strong></label>
                            <input type="text" class="form-control" id="inputNome" name="nome" maxlenght="25" placeholder="Digite seu Nome..." required onBlur = "tecla()">
                        </div> 
                        <div class="form-group col-sm-4">
                            <label for="inputSobrenome"><strong>Sobrenome</strong></label>
                            <input type="text" class="form-control" id="inputSobrenome" name="sobrenome" maxlenght="40" placeholder="Digite seu Sobrenome..." required onKeyPress = "tecla()">
                        </div>  
                    </div> 
                    <div class="form-row"> 
                        <div class="form-group col-sm-4">                        
                            <label for="cpf"><strong>CPF</strong></label>
                            <input type="text" class="form-control" id="cpf" name="cpf" maxlenght="15" placeholder="000.000.000-00" required="requiered" onBlur="ValidarCPF(form.cpf)">
                        </div>
                        <div class="form-group col-sm-4">                       
                            <label for="inputEmail"><strong>E-Mail</strong></label>
                            <input type="email" class="form-control" id="inputEmail" name="email" maxlenght="40" placeholder="Digite o E-Mail..." required> 
                        </div>
                    </div>     
                    <div class="form-row">
                        <div class="col-sm-6 mt-2 mb-2">
                            <label for="inputInstituicao"><strong>Instituição de Ensino</strong></label>
                            <input type="text" class="form-control" id="inputInstituicao" name="escola" maxlenght="40" placeholder="Digite Instituição a qual pertence..." required>
                        </div>
                    </div> 
                    <div class="form-row">
                    <div class="col-2-sm mt-2"><strong>Curso</strong></div>
                        <div class="btn-group btn-group-toggle mt-2" data-toggle="buttons">
                            <select class="selectpicker ml-3" name="situacao">
                                <option>Completo</option>
                                <option>Incompleto</option>
                            </select>
                        </div>
                    </div>  
                    <div class="form-row">
                        <div class="form-check col-sm-6 mt-3 ">
                            <label>	        
                                <input type="checkbox" name="termos" data-error="Você deve marcar este campo!" required> Li e aceito os <a href="#" data-toggle="modal" data-target="#siteModal">Termos e Condições.</a>	     
                            </label>
                        </div>  
                    </div>
                    <div class="form-row mt-3">
                        <div class="col-sm-12">
                            <input type="submit" onclick="return ValidarCPF()" class="btn btn-primary" href="consultar" value="Cadastrar" id="cadastrar" >
                            <button class="btn btn-secondary ml-2" role="button" type="reset" value="Limpar">Limpar</button>
                            </div>            
                        </div>
                    </div>
                </form>
            </div>

        <div class="modal fade" id="siteModal" tabindex="-1" role="dialog">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Termos & Condições</h5>
                        <button type="button" class="close" data-dismiss="modal">
                            <span>&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <h3><strong>1.	Campanha de Inovação</strong></h3>
                        <p>O 193challenge é um evento de participação voluntária, com o intuito de promover a 
                        inovação em serviços ofertados pelo Corpo de Bombeiros à sociedade em geral, 
                        com foco na experiência do cidadão.
                        </p>
                        <p>Consiste em uma “maratona tecnológica” focada na busca por soluções 
                        de desafios propostos aos participantes, reunindo pessoas dispostas a trabalhar em 
                        equipe, por horas, 
                        em um ambiente informal e altamente produtivo.
                        </p>
                        <p>Todos serão convidados a enfrentar paradigmas, pensar fora da caixa e 
                        colaborar com o serviço do 
                        Corpo de Bombeiros em sua essência: o atendimento à sociedade nas emergências.
                        </p>
                        <h3><strong>2.	Público elegível</strong></h3>
                        <p>Esta campanha se estende a todos que se considerem aptos a contribuir com o 
                        desenvolvimento de soluções a um dos desafios propostos, desde que sejam maiores de 18 
                        (dezoito) 
                        anos de idade ou estejam acompanhados de um responsável devidamente identificado.
                        </p>
                        <p>Diversos tipos de perfis serão benvindos, quais sejam: universitários, 
                        desenvolvedores, analistas de sistemas, analistas de banco de dados, 
                        analistas de negócio, designers de UX, não se restringindo a esses perfis.
                        </p>
                        <p>A criatividade, a capacidade de trabalho em equipe e o foco 
                        na execução de tarefas são características desejáveis, 
                        uma vez que há um prazo para a apresentação de soluções.
                        </p>
                        <h3><strong>3.	Período de duração</strong></h3>
                        <p>Das 09h00 de 09/03/2019 às 20h00 de 10/03/2019.
                        </p>
                        <h3><strong>4.	Metodologia</strong></h3>
                        <p>Uma vez iniciado o prazo para inscrição, qualquer pessoa poderá se 
                        inscrever individualmente ou em grupos de no máximo três pessoas. Recomenda-se que os grupos possuam 
                        desenvolvedores e designers de UX.
                        </p>
                        <p>
                        Haverá a possibilidade de inscrição individual, entretanto, ao ser selecionada, 
                        será automaticamente inserida em um grupo, definido através de sorteio direcionado, 
                        para que o grupo apresente integrantes com os papéis recomendados.                        
                        </p>
                        <p>
                        Serão oferecidos 3 (três) desafios e, no ato da inscrição, o participante 
                        deverá selecionar aquele que seja de preferência do grupo ou do inscrito.
                        </p>
                        <p>
                        Serão selecionados grupos e pessoas 
                        individualmente até que se atinja um número mínimo de 150 participantes.
                        </p>
                        <p>
                        No caso do número de inscrições individuais e de grupos exceder o 
                        limite previsto de vagas, haverá uma seleção técnica de todos os perfis inscritos, 
                        até que se atinja o limite estipulado neste regulamento. Esta seleção será feita por
                         um comitê, ao seu exclusivo arbítrio e critério, sem a necessidade de emissão de esclarecimento justificado, 
                        e levará em consideração as respostas fornecidas na ficha de inscrição.
                        </p>
                        <p>
                        A inscrição é totalmente espontânea e voluntária, sem qualquer tipo de vínculo 
                        com contrato de trabalho e sem a execução de tarefas rotineiras, 
                        tendo pleno conhecimento de que a sua participação se limita ao evento e sua duração.
                        </p>
                        <p>
                        A inscrição será realizada através do 
                        preenchimento de um formulário online, acessado em: www.193challenge.com.br
                        </p>
                        <p>
                        O evento ocorrerá nos dias 09 e 10 de março de 2019, na Pontifícia Universidade 
                        Católica de São Paulo, no Campus Consolação, localizado na rua Marquês de Paranaguá, 
                        nº 111, São Paulo, SP. O início está previsto para às 09h00 do dia 9 de março e o término 
                        previsto para às 20h00 do dia 10 de março, assegurados intervalos para 
                        alimentação e descanso dos participantes, nas dependências do local do evento.
                        </p>
                        <p>
                        É admitida a desistência do participante a qualquer momento. Se a desistência 
                        implicar no prejuízo da 
                        efetividade da participação do grupo a que pertencia, todo o grupo será desqualificado.
                        </p>
                        <p>
                        É permitida a saída do local do evento, a qualquer momento, e o acesso será permitido 
                        até as 20h00 do dia 9 de março (sábado), 
                        com retorno autorizado a partir das 07h15 do dia 10 de março (domingo).
                        </p>
                        <p>
                        Os participantes disporão de alimentação e bebidas (não alcoólicas) durante todo o evento.
                        </p>
                        <p>
                        Haverá uma equipe de socorristas à disposição dos participantes, durante todo o evento.
                        </p>
                        <p>
                        Os inscritos que forem selecionados receberão, por e-mail, acesso ao formulário
                         online de confirmação de presença, o qual deverá ser aceito de livre e espontânea vontade em 
                        todas as suas condições em caso de concordância para, desse modo, efetivar sua participação.
                        </p>
                        <p>
                        Durante o evento, os participantes também receberão orientações e instruções 
                        detalhadas sobre os problemas/desafios propostos 
                        e os meios que poderão ser utilizados para desenvolvimento de suas respectivas soluções.
                        </p>
                        <p>
                        Os participantes deverão levar seus computadores de uso pessoal, 
                        com seus respectivos acessórios e poderão utilizar a tecnologia de sua preferência 
                        no desenvolvimento da 
                        solução e/ou que estejam disponíveis para a proposta de resolução do desafio.
                        </p>
                        <p>
                        Haverá conexão à internet via Wi-Fi aberta para todos os participantes.
                        </p>
                        <p>
                        Durante o evento, mentores com conhecimento sobre os desafios estarão disponíveis para sanar eventuais dúvidas.
                        </p>
                        <p>
                        Para entrada no evento, bem como eventuais saídas durante sua realização, 
                        será necessária a apresentação de documento de identificação original, com foto.
                        </p>
                        <p>
                        Se a conduta de algum participante estiver prejudicando negativamente o 
                        progresso da equipe ou demonstrar-se inconveniente ao evento, o caso poderá ser 
                        levado ao conhecimento do júri técnico para avaliação e deliberação, podendo haver advertência verbal ou a exclusão do 
                        participante do evento, com a devida perda de direito à premiação.
                        </p>
                        <h3><strong>5.	Seleção da melhor solução e premiação</strong></h3>
                        <p>
                        Após a entrega das soluções, será iniciado o processo de apresentação 
                        das soluções de cada equipe, seguindo ordem estabelecida pela organização 
                        do evento. Cada apresentação deverá obedecer a um limite de 10 minutos de 
                        duração e mais 5 minutos de perguntas e comentários do comitê avaliador.
                        As soluções serão analisadas pelo júri técnico, que definirá quais projetos 
                        apresentam requisitos mínimos para a avaliação do comitê organizador.
                        </p>
                        <p>
                        A classificação e divulgação dos vencedores ficará a cargo do comitê organizador, 
                        após a seleção prévia de projetos pelo júri técnico.
                        </p>
                        <p>
                        Para os desafios definidos, haverá premiação para a equipe que 
                        apresentar a melhor proposta de soluções, resultando em um MVP que melhor atenda aos 
                        propósitos do evento e que 
                        atenda da melhor maneira aos critérios técnicos, funcionais e operacionais estabelecidos.
                        </p>
                        <p>
                        O prêmio será uma experiência completa junto ao Corpo de Bombeiros na Escola Superior de 
                        Bombeiros, 
                        além de uma visita ao Centro de Operações do Corpo de Bombeiros, conforme cronograma próprio. 
                        </p>
                        <h3><strong>6.	Os critérios de seleção do melhor projeto serão:</strong></h3>
                        <p>
                        Alinhamento ao desafio:<br>

                        <i>O quanto a solução atende o desafio proposto?<br></i>
                        Inovação<br><br>

                        <i>O quanto a solução é inovadora e se diferencia do que há no mercado na atualidade?</i><br>
                        Design e usabilidade<br><br>

                        <i>O quanto a solução possui interfaces intuitivas e provê boa usabilidade ao usuário?</i><br>
                        Confiabilidade<br><br>

                        <i>O quanto a solução é confiável para o uso na prestação de serviços de emergência?</i><br>
                        Integração<br><br>

                        <i>A solução pode ser integrada aos demais sistemas em funcionamento no CBPMESP?</i><br>
                        Prazo de implementação<br><br>

                        <i>Qual o prazo previsto de implantação?</i><br>
                        Escalabilidade da solução<br><br>

                        <i>Quanto da sociedade é atendida pela solução? Como escalar a solução para atender 
                        100% dos usuários dos serviços de bombeiros
                         no Estado de São Paulo? Em quanto tempo isso seria possível?</i><br>
                         Se a solução de nenhuma das equipes participantes do evento atingir 
                         um nível de qualidade técnico mínimo, com um protótipo funcional, 
                         não haverá vencedor do desafio, desobrigando, desse modo, a organização 
                         de premiar uma das equipes.
                        </p>
                        <h3><strong>7. Considerações gerais</strong></h3>
                        <p>
                        O participante ou o grupo poderão ser desclassificados da campanha de 
                        inovação em caso de conduta desrespeitosa, perigosa ou ilícita, desde que seja comprovada a violação de leis e/ou regras 
                        comerciais, perdendo, assim, todos os direitos à premiação do evento.
                        </p>
                        <p>
                        Todos os participantes terão direito a sair e a retornar ao local do evento, 
                        sendo a gestão do tempo responsabilidade do próprio grupo. Todos os deslocamentos externos 
                        serão por conta do próprio participante, sem quaisquer ônus para a organização do evento e o CBPMESP.
                        </p>
                        <p>
                        Este regulamento está disponível no site www.193challenge.com.br , bem como o formulário de inscrição.
                        </p>
                        <h3><strong>8.	Do direito de imagem</strong></h3>
                        <p>
                        Ao participar dessa campanha de inovação, nos termos deste Regulamento, o participante estará 
                        automaticamente autorizando a organização do evento e o CBPMESP a utilizar, de modo gratuito, 
                        definitivo e irrevogável, o seu nome, imagem e som de voz nos canais de comunicação interna e externa 
                        da organização, para a divulgação da campanha. As autorizações descritas anteriormente não implicam em 
                        quaisquer ônus ou 
                        obrigações de divulgação ou de pagamento de qualquer quantia por parte da organização e do CBPMESP.
                        </p>
                        <p>
                        Propriedade intelectual e confidencialidade no Programa 193Challenge.
                        Todos os participantes deverão publicar seus códigos sob licença GPL3.
                        O participante poderá realizar a reprodução e/ou a apresentação parcial ou 
                        integral das soluções ou ideias a terceiros.
                        </p>
                        <p>
                        O participante declara sua inequívoca ciência de que a submissão de uma ideia, solução ou protótipo, 
                        não gera qualquer direito ou garantia de sua efetiva implementação e que esta poderá, ainda, ser 
                        livremente modificada e transformada para que aumente a 
                        possibilidade de ser adotada e implementada pelo CBPMESP, caso seja premiada.
                        </p>
                        <p>
                        Quaisquer códigos, implementações ou alterações além dos códigos 
                        desenvolvidos no âmbito do evento devem se submeter à licença Creative Commons.
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

       <div class="container-fluid rodape mt-5">
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

