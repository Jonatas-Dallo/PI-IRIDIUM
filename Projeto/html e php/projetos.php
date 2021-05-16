<!DOCTYPE html>
<html lang="en">
<head>

    <link rel="sortcut icon" href="imagens/logo.jpeg" type="image/jpeg"/>
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Asap:ital,wght@1,600&family=Nunito:ital,wght@1,800&family=Yellowtail&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/normalize.css">
    <link rel="stylesheet" type="text/css" href="css/projetos.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VóMariaFélix</title>
    
</head>
<body>
    <div class="teo">
        <div class="main">
            <nav style="display: flex; float: center">
                <a href="#"></a>
                <ul>
                    <img src="imagens/logo.jpeg" class="logo1">
                    <header>
                        <li><a href="voluntarios.php" class="botao">Voluntários</a></li>
                        <li><a href="participantes.php" class="botao">Participantes</a></li>
                        <li><a href="index.HTML" class="botao">Home</a></li>
                        <li><a href="admin.php" class="botao">Admin</a></li>
                    </header>
                </ul>        
            </nav>
        </div>
    </div>

    <nav>
        <form id="CadastroP" method="POST" action="mailto:luisttine@gmail.com">
            <div>
                <h1 >Cadastro de Projetos</h1> 
            </div>
            <fieldset id="Projeto">
                <legend><h3>Informações do voluntário:</h3></legend>
                <p><label for="cEmail">E-mail do voluntário </label><input type="email" name="tEmail" id="cEmail" placeholder="exemple@tal.com"/></p>
                <p><label for="cVoluntario">Nome do Voluntário: </label><input type="text" name="tVoluntario" id="cVoluntario" placeholder="Exemplo De Tal"/></p>
                <p><label for="cProjeto">Nome do projeto: </label><input type="text" name="tProjeto" id="cProjeto" placeholder="Exemplo de tal"/></p>
                <p><label for="cEnsino">Tipo de ensino/atividade: </label><input type="text" name="tEnsino" id="cEnsino" placeholder="Educação Física"/></p>
            </fieldset>
            <fieldset>
                <legend>Recursos necessarios para execução do projeto:</legend>
                <p><input type="radio" name="tRecursos" id="cOng"><label for="cOng"> Possibilidade de proveitamento de estrutura da ong.</label></p>
                <p><input type="radio" name="tRecursos" id="cCedido"><label for="cCedido"> Outro local Cedido pelo voluntário.</label></p>
                <legend>Necessidade de  meio de transporte:</legend>
                <p><input type="radio" name="tTransporte" id="cProximo"><label for="cProximo"> Não necessário por ser proximo</label></p>
                <p><input type="radio" name="tTransporte" id="cEstrutura" ><label for="cEstrutura"> Não necessario por usar a estrutura da ONG</label></p>  
                <p><input type="radio" name="tTransporte" id="cNecessidade" ><label for="cNecessidade"> Em casos de necessidade de transporte explicar como funcionará na caixa de texto abaixo</label></p>
                <textarea name="tMsg" id="cMsg" cols="45" rows="5" placeholder="Digite aqui as especificações de transporte para sua futura turminha"></textarea>
                <p>Anexo documentação de esquema de implantação do projeto</p>
            </fieldset>
            <input type="button" value="TesteCadastro" id="tCadastro" onclick="CadastroP"> 
        </form>
    </nav>
    
</body>
</html>