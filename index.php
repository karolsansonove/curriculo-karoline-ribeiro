<?php include ('./php/send-email.php'); ?>

<!DOCTYPE html>
<html lang="PT-BR">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Karoline Sansonove Ribeiro">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@100;300;400;500;700;900&display=swap&family=Roboto+Condensed:wght@300;400;700&family=Roboto:wght@100;300;400;500;700;900&display=swap" rel="stylesheet">
    <title>Currículo | Karoline Ribeiro</title>
</head>
<body>
    <section class="bunner" id="topo">
        <div class="container bunner-container">

            <nav class="bunner-nav">

                <div class="nav-item">
                    <a href="https://www.linkedin.com/in/karoline-ribeiro-285767121/" target="_blank">
                        <img class="icone icone-linkedin" src="img/linkedin.png" alt="Ícone Linkedin" title="Linkedin">
                    </a>
                    <a href="https://github.com/karolsansonove" target="_blank">
                        <img class="icone" src="img/github_dark.png" alt="Ícone Github" title="Github">
                    </a>
                </div>

                <div class="nav-item">
                    <a href="#formacao" class="nav-formacao">Formação</a>
                    <a href="#fale-comigo">
                        <button class="btn btn-contato">Fale comigo</button>
                    </a>
                </div>
            </nav>

            <div class="bunner-name">
                <h1>Karoline Ribeiro</h1>
                <h2 class="subtexto-nome">Desenvolvedora</h2>
            </div>
            
            <section class="conhecimento">
                <h3 class="conhecimento-titulo">Conhecimentos</h3>
                <div class="box-images">
                    <div>
                        <img src="img/java.png" alt="Logo Java">
                        <p class="texto-conhecimento">Java</p>
                    </div>
                    <div>
                        <img src="img/php.png" alt="Logo PHP">
                        <p class="texto-conhecimento">PHP</p>
                    </div>
                    <div>
                        <img src="img/javascript.png" alt="Logo JavaScript">
                        <p class="texto-conhecimento">JavaScript</p>
                    </div>
                    <div>
                        <img src="img/html.png" alt="Logo HTML">
                        <p class="texto-conhecimento">HTML</p>
                    </div>
                    <div>
                        <img src="img/css.png" alt="Logo CSS">
                        <p class="texto-conhecimento">CSS</p>
                    </div>
                    <div>
                        <img src="img/sql.png" alt="Logo Banco de dados">
                        <p class="texto-conhecimento">SQL</p>
                    </div>
                    <div>
                        <img src="img/poo.png" alt="Paradigma Orientado a Objetos">
                        <p class="texto-conhecimento">POO</p>
                    </div>
                </div>
            </section>
        </div>
    </section>

    <section class="formacao" id="formacao">
        <div class="container formacao-container">

            <h3 class="formacao-titulo">Formação Acadêmica</h3>

            <div class="formacao-content">

                <div class="formacao-item formacao-item-data">
                    <div>
                        <p>2017</p>
                    </div>
                    
                    <div>
                        <p>Cursando</p>
                    </div>
                </div>        
                
                <img src="img/linha-tempo.png" alt="Linha do tempo" class="img-linha-tempo">

                <div class="formacao-item formacao-item-curso">
                    <div>
                        <p>Técnico em Informática</p>
                        <p class="formacao-instituicao">Escolas e Faculdades QI</p>
                        <!-- <p>2015 - 2017</p> -->
                    </div>
                    
                    <div>
                        <p>Análise e Desenvolvimento de Sistemas</p>
                        <p class="formacao-instituicao">Escolas e Faculdades QI</p>
                        <!-- <p>2019 - Atualmente</p> -->
                    </div>
                </div>
            
            </div>
        </div>
    </section>

    <section class="fale-comigo" id="fale-comigo">

        <div class="container falecomigo-container">

            <form class="form-contato" method="post" action="index.php">
                <div class="falecomigo-content">
                    
                    <div class="form-content">
                        <h3 class="titulo-falecomigo">Fale Comigo</h3>

                        <label for="nome">Nome:</label>
                        <input type="text" name="nome" id="nome" placeholder="Ex.: Maria da Silva">
                    
                        <label for="nome">E-mail:</label>
                        <input type="email" name="email" id="email" placeholder="Ex.: seuemail@email.com">
                    </div>

                    <div class="box-contatos">
                        <h3 class="titulo-contatos">Contatos</h3>
                        <a class="contatos-item" href="https://www.linkedin.com/in/karoline-ribeiro-285767121/" target="_blank">
                            <img class="icone" src="img/linkedin.png" alt="Ícone Linkedin">
                            <p>Linkedin</p>
                        </a>
                        <a class="contatos-item" href="https://github.com/karolsansonove" target="_blank">
                            <img class="icone" src="img/github.png" alt="Ícone Github">
                            <p>Github</p>
                        </a>
                        <div class="contatos-item">
                            <img class="icone" src="img/email.png" alt="Ícone e-mail">
                            <address>karolsansonove@gmail.com</address>
                        </div>
                    </div>

                </div>

                <div class="form-content">
                    <label for="mensagem">Mensagem:</label>
                    <textarea name="mensagem" id="mensagem" cols="30" rows="4" placeholder="Digite sua mensagem aqui"></textarea>
                </div>
                <input class="btn btn-enviar" type="submit" value="Enviar">
            </form>
        </div>
    </section>

    <footer class="footer">
        <div class="container footer-container">
            <a class="footer-item" href="https://www.linkedin.com/in/karoline-ribeiro-285767121/" target="_blank">
                <img class="icone" src="img/linkedin.png" alt="Ícone Linkedin">
                <p>Linkedin</p>
            </a>
            <a class="footer-item" href="https://github.com/karolsansonove" target="_blank">
                <img class="icone" src="img/github.png" alt="Ícone Github">
                <p>Github</p>
            </a>
            <div class="footer-item">
                <img class="icone" src="img/email.png" alt="Ícone e-mail">
                <address>karolsansonove@gmail.com</address>
            </div>
        </div>
    </footer>
</body>
</html>
