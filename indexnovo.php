
<?php
if (isset($_POST["button-enviar"])){
  include_once"envio.php";
}
?>
<!DOCTYPE html>

<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="stylenovo.css">

  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"">
    
  <title>Enquete</title>
</head>

<body>
  <div class="wrapper">
    <form method="POST">
  <div class=" container-enquete">
  <div>
    <div class="enquete-titulo">
      <h1><strong>Enquete sobre o Plano Diretor Estratégico<br>da Cidade de São Paulo</strong></h1>
    </div>
    <div class="enquete-pergunta">
      <h2>Você sabe o que é o Plano Diretor Estratégico?</h2>
      <div>
        <input type="radio" id="a1" name="tempo" value="Sim" > <label for="a1">Sim</label> <br>
        <input type="radio" id="a2" name="tempo" value="Não"> <label for="a2">Não</label> <br>
        <div class="line"></div>
      </div>
    </div>
    <div class="enquete-pergunta">
      <h2>Você participou do processo participativo do Plano Diretor em 2014?</h2>
      <div>
        <input type="radio" id="b1"  name="tempo" value="Sim"> <label for="b1">Sim</label> <br>
        <input type="radio" id="b2" name="tempo" value="Não"> <label for="b2">Não</label> <br>
        <div class="line"></div>

      </div>
    </div>
    <div class="enquete-pergunta">
      <h2>Você gostaria de morar no centro da cidade?</h2>
      <div><input type="radio" id="h1" name="tempo" value="Sim"> <label for="h1">Sim</label> <br> <input type="radio" id="h2"
          value="Não"> <label for="h2">Não</label> <br></div>
      <div class="line"></div>
    </div>
    <div class="enquete-pergunta">
      <h2>Na sua opinião, do que seu bairro mais precisa?</h2>
      <div class="separador-conteudo">
        <div class="conteudo">
          <div class="">
            <div class=""><input type="radio" id="g1"  name="tempo"value="Transporte público"> <label for="g1">Transporte
                público</label></div>
            <div class=""><input type="radio" id="g2" name="tempo" value="Segurança"> <label for="g2">Segurança</label></div>
          </div>
          <div class="">
            <div class=""><input type="radio" id="g3" name="tempo" value="Emprego"> <label for="g3">Emprego</label></div>
            <div class=""><input type="radio" id="g4" name="tempo" value="Moradia"> <label for="g4">Moradia</label></div>
          </div>
        </div>
        <div class="conteudo">
          <div class="">
            <div class=""><input type="radio" id="g5" name="tempo"  value="Iluminação pública"> <label for="g5">Iluminação
                pública</label></div>
            <div class=""><input type="radio" id="g6" name="tempo" value="Parques e áreas verdes"> <label for="g6">Parques e
                áreas verdes</label></div>
          </div>
          <div class="">
            <div class=""><input type="radio" id="g7" name="tempo" value="Equipamento público"> <label for="g7">Equipamento
                público</label></div>
          </div>

        </div>
      </div>
      <div class="line"></div>

    </div>
    <div class="enquete-pergunta">
      <h2>Se pudesse escolher, qual das alternativas abaixo mais se aproxima dos seus planos?</h2>
      <div class="separador-conteudo">
        <div class="conteudo">
          <div class="">
            <div class=""><input type="radio" id="f1"  name="tempo" value="Não penso em hipótese alguma deixar o bairro onde moro">
             <label for="f1">Não penso em hipótese alguma deixar o bairro onde moro</label>
            </div>
          </div>
          <div class="">
            <div class=""><input type="radio" id="f2"
              name="tempo"  value="Permaneceria no bairro onde moro se ele recebesse melhorias"> <label for="f2">Permaneceria no
                bairro onde moro se ele recebesse melhorias</label></div>
          </div>

          <div class="">
            <div class=""><input type="radio" id="f3"
              name="tempo"  value="Mudaria de bairro porque prefiro ficar mais perto da região central da cidade"> <label
                for="f3">Mudaria de bairro porque prefiro ficar mais perto da região central da cidade</label></div>
          </div>
        </div>
        <div class="conteudo">

          <div class="">
            <div class=""><input type="radio" id="f4"
              name="tempo" value="Mudaria de bairro, pois está muito caro o custo de vida no atual"> <label for="f4">Mudaria de
                bairro, pois está muito caro o custo de vida no atual</label></div>
          </div>


          <div class=""><input type="radio" id="f5"
            name="tempo" value="Mudaria para regiões próximas à rede de transporte público, independentemente do bairro">
            <label for="f5">Mudaria para regiões próximas à rede de transporte público, independentemente do
              bairro</label>
          </div>
        </div>
      </div>
      <div class="line"></div>
    </div>
    <div class="enquete-pergunta">
      <h2>Quanto tempo de deslocamento você gasta, em média, da sua moradia até o trabalho diariamente?</h2>
      <div class="separador-conteudo">
        <div class="conteudo">
          <div class=""><input type="radio" id="e1" name="tempo" value="Menos de 15 minutos"> <label for="e1">Menos de 15
              minutos</label></div>
          <div class=""><input type="radio" id="e2" name="tempo" value="Entre 15 e 30 minutos"> <label for="e2">Entre 15 e 30
              minutos</label></div>

          <div class=""><input type="radio" id="e3"  name="tempo"value="Entre 30 minutos e 1 hora"> <label for="e3">Entre 30
              minutos e 1 hora</label></div>
        </div>
        <div class="conteudo">
          <div class=""><input type="radio" id="e4" name="tempo" value="e4"> <label for="e4">Entre 1 e 2
              horas</label></div>
          <div class=""><input type="radio" id="e5" name="tempo" value="Mais de 2 horas"> <label for="e5">Mais de 2
              horas</label></div>
        </div>

      </div>
      <div class="line"></div>

    </div>
    <div class="enquete-pergunta">
      <h2>Se pudesse escolher, você moraria perto de:</h2>
      <div class="separador-conteudo">
        <div class="conteudo">
          <div class="quest-1">
            <input type="checkbox" id="d1" name="tempo" value="a_Emprego"> <label for="d1">Emprego</label>
          </div>
          <div class=""><input type="checkbox" id="d1" name="tempo" value="b_Transporte"> <label for="d2">Transporte (metrô,
              trem e terminal de ônibus)</label></div>

          <div class=""><input type="checkbox" id="d1"  name="tempo" value="c_Escola"> <label for="d3">Escola</label></div>
        </div>
        <div class="conteudo">
          <div class=""><input type="checkbox" id="d1" name="tempo" value="d_Unidade de saúde"> <label for="d4">Unidade de
              saúde</label></div>
          <input type="checkbox" id="d1" name="tempo" value="e_Parque ou praça"> <label for="d5">Parque ou praça</label> <br>
        </div>

      </div>
      <div class="outro">
        <input type="checkbox" id="d1" name="tempo"  value="f_Outro"> <label for="d6">Outro</label> <input type="text" id="r4_outro"
          value=""><br>
      </div>
      <div class="line"></div>
    </div> ª
    <div class="enquete-pergunta">
      <h2>Você acompanha e se interessa sobre as discussões de desenvolvimento urbano da cidade?</h2>
      <div><input type="radio" id="c1" name="tempo" value="Sim"> <label for="c1">Sim</label> <br> <input type="radio" id="c2"
        name="tempo"  value="Não"> <label for="c2">Não</label> <br> </div>
      <div class="line"></div>
    </div>
    <div>

      <div class="enquete-pergunta">
        <h2>Qual desses espaços públicos ao ar livre você mais valoriza?</h2>
        <div class="separador-conteudo">
          <div class="conteudo">
            <div class=""><input type="radio" id="i1" name="tempo" value="Parque"> <label for="i1">Parque</label></div>
            <div class=""><input type="radio" id="i2"  name="tempo" value="Praça"> <label for="i2">Praça</label></div>
          </div>
          <div class="conteudo">
            <div class=""><input type="radio" id="i3" name="tempo" value="Quadra de esporte"> <label for="i3">Quadra de
                esporte</label></div>
            <div class=""><input type="radio" id="i4" name="tempo" value="Ciclovia"> <label for="i4">Ciclovia</label></div>
          </div>
        </div>
        <div class="line"></div>

      </div>
      <div>
        <div class="enquete-pergunta">
          <h2>O que é mais importante que tenha na São Paulo do futuro ?</h2>
          <div class="separador-conteudo">

            <div class="conteudo">
              <div class=""><input type="radio" id="j1" name="tempo" value="Moradia para todos"> <label for="j1">Moradia para
                  todos</label></div>
              <div class=""><input type="radio" id="j2" name="tempo" value="Transporte público perto de casa"> <label
                  for="j2">Transporte
                  público perto de casa</label></div>
              <div class=""><input type="radio" id="j3" name="tempo" value="Soluções para enfrentar novas pandemias"> <label
                  for="j3">Soluções para enfrentar novas pandemias</label></div>
            </div>
            <div class="conteudo">
              <div class=""><input type="radio" id="j4" name="tempo" value="Áreas verdes preservadas"> <label for="j4">Áreas
                  verdes
                  preservadas</label></div>
              <div class=""><input type="radio" id="j5"  name="tempo" value="Centro da cidade requalificado"> <label for="j5">Centro
                  da cidade requalificado</label></div>
            </div>
          </div>
          <div class="line"></div>

        </div>
        <div class="enquete-pergunta">
          <h2>Para concluir o envio da sua participação preencha os dados abaixo:</h2>
          <div class="campo-dados">
            <label for="pesquisado_nome">Nome completo:</label>
            <input type="text" id="pesquisado_nome" name="pesquisado_nome" placeholder="Preencha aqui"
              required="required" value="">
          </div>
          <div class="campo-dados">
            <label for="pesquisado_email">E-mail:</label>
            <input type="email" id="pesquisado_email" name="pesquisado_email" placeholder="exemplo@exemplo.com.br"
              required="required" value>
          </div>
          <div class="campo-dados">
            <label>Distrito:</label>
            <select id="select_zona" onchange="mostrarOpcoes()">
              <option value="" disabled="disabled" selected="" hidden="hidden">Selecione a região</option>
              <option value="CENTRO">CENTRO</option>
              <option value="NORTE">ZONA NORTE</option>
              <option value="LESTE">ZONA LESTE</option>
              <option value="OESTE">ZONA OESTE</option>
              <option value="SUL">ZONA SUL</option>
            </select>
            <div class="campo-dados2" id="option2" style="display: none;">

              <select>
                <option value="opcao1_centro">Centro</option>
                <option value="opcao2_centro">Bela Vista</option>
                <option value="opcao3_centro">Bom Retiro</option>
                <option value="opcao3_centro">Cambuci</option>
                <option value="opcao3_centro">Consolação</option>
                <option value="opcao3_centro">Liberdade</option>
                <option value="opcao3_centro">República</option>
                <option value="opcao3_centro">Santa Cecília</option>
                <option value="opcao3_centro">Sé</option>
              </select>
            </div>
            <div class="campo-dados2" id="option3" style="display: none;">

              <select>
                <option value="opcao1_norte">Norte1</option>
                <option value="opcao1_norte">Jaçanã</option>
                <option value="opcao1_norte">Mandaqui</option>
                <option value="opcao1_norte">Santana</option>
                <option value="opcao1_norte">Tremembé</option>
                <option value="opcao1_norte">Tucuruvi</option>
                <option value="opcao1_norte">Vila Guilherme</option>
                <option value="opcao1_norte">Vila Maria</option>
                <option value="opcao1_norte">Vila Medeiros</option>
              </select>
              <select>
                <option value="opcao1_norte">Norte2</option>
                <option value="opcao1_norte">Anhanguera</option>
                <option value="opcao1_norte">Brasilandia</option>
                <option value="opcao1_norte">Cachoeirinha</option>
                <option value="opcao1_norte">Casa Verde</option>
                <option value="opcao1_norte">Freguesia do Ó</option>
                <option value="opcao1_norte">Jaraguá</option>
                <option value="opcao1_norte">Limão</option>
                <option value="opcao1_norte">Perus</option>
                <option value="opcao1_norte">Pirituba</option>
                <option value="opcao1_norte">São Domingos</option>
              </select>
            </div>
            <div class="campo-dados2" id="option4" style="display: none;">

              <select>
                <option value="opcao1_leste">Leste 1</option>
                <option value="opcao1_leste">Água Rasa</option>
                <option value="opcao1_leste">Aricanduva</option>
                <option value="opcao1_leste">Artur Alvim</option>
                <option value="opcao1_leste">Belém</option>
                <option value="opcao1_leste">Brás</option>
                <option value="opcao1_leste">Cangaíba</option>
                <option value="opcao1_leste">Carrão</option>
                <option value="opcao1_leste">Moóca</option>
                <option value="opcao1_leste">Pari</option>
                <option value="opcao1_leste">Penha</option>
                <option value="opcao1_leste">São Lucas</option>
                <option value="opcao1_leste">Sapopemba</option>
                <option value="opcao1_leste">Tatuapé</option>
                <option value="opcao1_leste">Vila Formosa</option>
                <option value="opcao1_leste">Vila Matilde</option>
                <option value="opcao1_leste">Vila Prudente</option>
              </select>
              <select>
                <option value="opcao1_leste">Leste 2</option>
                <option value="opcao1_leste">Água Rasa</option>
                <option value="opcao1_leste">Aricanduva</option>
                <option value="opcao1_leste">Artur Alvim</option>
                <option value="opcao1_leste">Belém</option>
                <option value="opcao1_leste">Brás</option>
                <option value="opcao1_leste">Cangaíba</option>
                <option value="opcao1_leste">Carrão</option>
                <option value="opcao1_leste">Moóca</option>
                <option value="opcao1_leste">Pari</option>
                <option value="opcao1_leste">Penha</option>
                <option value="opcao1_leste">São Lucas</option>
                <option value="opcao1_leste">Sapopemba</option>
                <option value="opcao1_leste">Tatuapé</option>
                <option value="opcao1_leste">Vila Formosa</option>
                <option value="opcao1_leste">Vila Matilde</option>
                <option value="opcao1_leste">Vila Prudente</option>
              </select>
            </div>
            <div class="campo-dados2" id="option5" style="display: none;">

              <select>
                <option value="opcao1_oeste">Oeste</option>
                <option value="opcao2_oeste">Alto de Pinheiros</option>
                <option value="opcao3_oeste">Butantã</option>
                <option value="opcao3_oeste">Itaim Bibi</option>
                <option value="opcao3_oeste">Jaguara</option>
                <option value="opcao3_oeste">Jaguaré</option>
                <option value="opcao3_oeste">Jardim Paulista</option>
                <option value="opcao3_oeste">Lapa</option>
                <option value="opcao3_oeste">Morumbi</option>
                <option value="opcao3_oeste">Perdizes</option>
                <option value="opcao3_oeste">Pinheiro</option>
                <option value="opcao3_oeste">Raposo Tavares</option>
                <option value="opcao3_oeste">Rio Pequeno</option>
                <option value="opcao3_oeste">Vila Leopoldino</option>
                <option value="opcao3_oeste">Vila Sônia</option>
              </select>
            </div>
            <div class="campo-dados2" id="option6" style="display: none;">
              <select>
                <option value="opcao1_sul">Sul1</option>
                <option value="opcao1_sul">Cursino</option>
                <option value="opcao2_sul">Ipiranga</option>
                <option value="opcao3_sul">Jabaquara</option>
                <option value="opcao3_sul">Moema</option>
                <option value="opcao3_sul">Sacomã</option>
                <option value="opcao3_sul">Saúde</option>
                <option value="opcao3_sul">Vila Mariana</option>
              </select>
              <select>
                <option value="opcao1_sul">Sul2</option>
                <option value="opcao2_sul">Campo Belo</option>
                <option value="opcao3_sul">Campo Grande</option>
                <option value="opcao3_sul">Campo Limpo</option>
                <option value="opcao3_sul">Capão Redondo</option>
                <option value="opcao3_sul">Cidade Ademar</option>
                <option value="opcao3_sul">Cidade Dutra</option>
                <option value="opcao3_sul">Grajaú</option>
                <option value="opcao3_sul">Jardim Ângela</option>
                <option value="opcao3_sul">Jardim São Luís</option>
                <option value="opcao3_sul">Marsilac</option>
                <option value="opcao3_sul">Parelheiros</option>
                <option value="opcao3_sul">Pedreira</option>
                <option value="opcao3_sul">Santo Amaro</option>
                <option value="opcao3_sul">Socorro</option>
                <option value="opcao3_sul">Vila Andrade</option>
              </select>
            </div>
          </div>
          
        </div>

        <center><button type="submit" name="button-enviar" class="button-enquete">ENVIAR</button></center>
        </div>
      </div>
    </div>
    </div>
    </form>
    </div>
    </body>
    <script>
          var selectZona = document.getElementById("select_zona");

          selectZona.addEventListener("change", function () {
            mostrarOpcoes();
          });

          function mostrarOpcoes() {
            var opcoesCentro = document.getElementById("option2");
            var opcoesNorte = document.getElementById("option3");
            var opcoesLeste = document.getElementById("option4");
            var opcoesOeste = document.getElementById("option5");
            var opcoesSul = document.getElementById("option6");

            opcoesCentro.style.display = "none";
            opcoesLeste.style.display = "none";
            opcoesNorte.style.display = "none";
            opcoesOeste.style.display = "none";
            opcoesSul.style.display = "none";

            var selectedOption = selectZona.options[selectZona.selectedIndex].value;

            if (selectedOption === "CENTRO") {
              opcoesCentro.style.display = "inline-block";
            } else if (selectedOption === "LESTE") {
              opcoesLeste.style.display = "inline-block";
            } else if (selectedOption === "NORTE") {
              opcoesNorte.style.display = "inline-block";
            } else if (selectedOption === "OESTE") {
              opcoesOeste.style.display = "inline-block";
            } else if (selectedOption === "SUL") {
              opcoesSul.style.display = "inline-block";
            }
          }
        </script>

</html>