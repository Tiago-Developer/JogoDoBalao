<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Estourando balões</title>

        <script language='Javascript'>
            
            function iniciaJogo(){
              var nivel_jogo =  document.getElementById('nivel_jogo').value;
              
              window.location.href = 'jogo.php?'+nivel_jogo;
              
              
            }
            
        </script>
    </head>

    <body>
        <div>
            <p>
                <b>Nível:</b>
                <select id="nivel_jogo">
                    <option value="1">Fácil</option>
                    <option value="2">Normal</option>
                    <option value="3">Difícil</option>
                </select>
            </p>
            <br />
            <img src="imagens/iniciar.png" onclick="iniciaJogo()">
        </div>
    </body>
</html>
