<!DOCTYPE HTML>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">

        <title>Estourando balões</title>

        <script src="jogo.js"></script>
    </head>

    <body onload="iniciaJogo()">
        <div>
            <audio id="player" preload autoplay controls>
                <source id="player-source" src="audio/Pumped up kicks tradução.mp3" type="audio/mpeg"/>        
            </audio>
        </div>        
        <div style="float: left; width: auto; height: 600px; background: #fff; border: solid 1px #A2A2A2; margin-right: 5px;">
            <table >
                <tr>
                    <td>
                        <img src="imagens/balao_azul_grande.png">
                    </td>
                    <td> 
                        <span id="baloes_inteiros" style="font-size: 40px;"></span>
                    </td>
                </tr>
            </table>

            <br />

            <table >
                <tr>
                    <td>
                        <img src="imagens/balao_azul_grande_estourado.png">
                    </td>
                    <td> 
                        <span id="baloes_estourados" style="font-size: 40px;"></span>
                    </td>
                </tr>
            </table>

            <br />

            <table  style="width: 140px; height: 138px;">
                <tr>
                    <td style="background: url(imagens/cronometro.png); text-align: center">
                        <span id="cronometro" style="color: red; font-size: 30px"></span>
                    </td>

                </tr>
            </table>

        </div>

        <div id="cenario" style="float: left; width: 500px; height: 600px; background: url('imagens/3bfc0549dd5ca1ed0619f3270f2e19b2f1c645ac_hq.gif'); background-position: bottom;"></div>
    </body>

</html>