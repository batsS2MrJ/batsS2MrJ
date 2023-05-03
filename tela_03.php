
<!DOCTYPE html>

<html lang="pt-br">

<head>

<meta charset="UTF-8">

<meta http-equiv="X-UA-Compatible" content="IE=edge">

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Sistema de Chamada de T.I</title>

<style>

body{

font-family: Arial, Helvetica, sans-serif;

}

.tab{

background-color: aquamarine;

border: 1px solid black;

border-bottom: none;

border-radius: 5px 5px 0 0;

overflow: auto;

}

.tab button{

background-color: aquamarine;

border: none;

outline: none;

border-radius: 5px 5px 0 0;

cursor: pointer;

padding: 10px 16px;

font-weight: bold;

color: #333;

margin: 3px 2px 0 2px;

float: left;

}

.tab button:hover{

background-color: #fbfbfb;

}

.tab button.ativo{

background-color: white;

color: #008cff;

}

.conteudo{

border: 1px solid #ccc;

border-top: none;

padding: 6px 12px;

display: none;

}

.bodychamada{
    background-image: url(../Moises/Imagens/timagem.webp) ;
    background-repeat: no-repeat;
    background-size: cover;
    background-position: center center;
}

.selectedit select {
    border-radius: 5px 5px;
}











</style>

</head>

<body>

<div class = "tab">

<button id = "tabPadrao" class = "tab-button" onclick = "abrirTab(event, 'chamada')">CHAMADA</button>

<button class = "tab-button" onclick="abrirTab(event, 'chat')">CHAT</button>

<button class = "tab-button" onclick="abrirTab(event, 'sobre')">SOBRE</button>

</div>

<div id = "chamada" class = "conteudo">


    <div class="bodychamada">
    

        <br<br><br>

        <form>

            <div class="selectedit">
                Usuário:

                <select id="usuario" name="usuario">

                <option value="Diretoria">Diretoria</option>

                <option value="Gestão">Gestão</option>

                <option value="Professor">Professor</option>

                </select>
           

           
                Departamento:

                <select id="local" name="local">

                <option value="Coordenação" name="Coordenação">Coordenação</option>

                <option value="Secretaria" name="Secretaria">Secretaria</option>

                <option value="Biblioteca" name="Biblioteca">Biblioteca</option>

                <option value="Laboratório de Hardware" name="Laboratório de Hardware">Laboratório de Hardware</option>

                <option value="Laboratório de Software" name="Laboratório de Software">Laboratório de Software</option>

                <option value="Laboratório de Matemática" name="Laboratório de Matemática">Laboratório de Matemática</option>

                <option value="Laboratório de Biologia" name="Laboratório de Biologia">Laboratório de Biologia</option>

                <option value="Laboratório de Física" name="Laboratório de Física">Laboratório de Física</option>

                <option value="Laboratório de Química" name="Laboratório de Química">Laboratório de Química</option>

                <option value="Sala 1°A" name="Sala 1°A">Sala 1°A</option>

                <option value="Sala 1°B" name="Sala 1°B">Sala 1°B</option>

                <option value="Sala 1°C" name="Sala 1°C">Sala 1°C</option>

                <option value="Sala 1°D" name="Sala 1°D">Sala 1°D</option>

                <option value="Sala 2°A" name="Sala 2°A">Sala 2°A</option>

                <option value="Sala 2°B" name="Sala 2°B">Sala 2°B</option>

                <option value="Sala 2°C" name="Sala 2°C">Sala 2°C</option>

                <option value="Sala 2°D" name="Sala 2°D">Sala 2°D</option>

                <option value="Sala 3°A" name="Sala 3°A">Sala 3°A</option>

                <option value="Sala 3°B" name="Sala 3°B">Sala 3°B</option>

                <option value="Sala 3°C" name="Sala 3°C">Sala 3°C</option>

                <option value="Sala 3°D" name="Sala 3°D">Sala 3°D</option>

                </select>
            </div>

        <br><br><br><br>

            <div class="inpcliente">
                Cliente:
                <input type='text' id='nome' name='nome' required>
            </div>

        <br><br><br><br>
        
            <div class="setoredit">
                Setor:

                <select id="setor" name="setor">

                <option value="Redes" name="Redes">Rede</option>

                <option value="Hardware" name="Hardware">Hardware</option>

                <option value="Software" name="Software">Software</option>

                </select>
            </div>

        <br><br><br><br>

        Solicitação:

        <br>

        <div class="solitedit">
        <textarea id="msg" name="msg" rows="7" cols="70"></textarea>

        <br>

        <input type="reset" value="Reset">

        <input type="submit" value="Enviar">

        </form>
        </div>

    </div>

</div>

<div id = "chat" class = "conteudo">

<h3>Chat</h3>

</div>

<div id = "sobre" class = "conteudo">

<h3>Sobre</h3>

<p>Um Sistema de Chamada de T.I.(Tecnologia da Informação) é uma ferramenta utilizada<br>

para gerenciar e rastrear solicitações e problemas relacionados à infraestrutura de T.I de<br>

uma organização.<br>Esses sistemas geralmente são usadospor equipes de suporte técnico de T.I para registar<br>

e gerenciar solicitações de usuários, problemas de hardware e software, atualizações de<br>

sistema, monitoramento de rede, entre outros.<br>

Ao usar um sistema de chamada de T.I, os usuários podem enviar solicitações por meio de<br>

uma interface de usuário amigável, que geralmente é acessível por meio de um portal de<br>

autoatendimento ou de um e-mail específico. As solicitações só estão direcionados para<br>

a equipe de suporte técnico, que atribui a elas um nivel de prioridade e comecem a<br>

trabalhar na resolução do problema.<br>

O Sistema de Chamada de T.I também permite que a equipe de suporte técnico<br>

acompanhe o progresso das solicitações e gerencie seu tempo de resposta, bem como<br>

avalie seu desempenho e identifique áreas que precisam de melhoria.<br>

Além disso, o sistema pode fornecer relatórios úteis para gestores de T.I, ajudando-os a<br>

identificar tendências e tomar decisões informadas para melhorar a eficiência do<br>

departamento de suporte técnico de T.I.

</p>

</div>

<script>

document.getElementById('tabPadrao').click();

function abrirTab(event, idTab) {

var conteudos = document.getElementsByClassName('conteudo');

for(var i = 0; i < conteudos.length; i++) {

conteudos[i].style.display = "none";

}

var tabs = document.getElementsByClassName('tab-button');

for(var i = 0; i < tabs.length; i++) {

tabs[i].className = tabs[i].className.replace('ativo', '');

}

document.getElementById(idTab).style.display = 'block';

event.currentTarget.className += ' ativo';

}

</script>

</body>

</html>
