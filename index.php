<?php

require_once("modelo/Link.php");
echo '<link rel="stylesheet" href="style.css">';
echo '<link rel="stylesheet" href="botao_imagem.css">';


$timesFutebol = array(
    $time1 = new Link("https://upload.wikimedia.org/wikipedia/commons/thumb/0/08/Gremio_logo.svg/1920px-Gremio_logo.svg.png", "Grêmio"),
    $time2 = new Link("https://upload.wikimedia.org/wikipedia/pt/thumb/4/43/FCBarcelona.svg/1280px-FCBarcelona.svg.png", "Barcelona"),
    $time3 = new Link("https://upload.wikimedia.org/wikipedia/pt/f/f6/Esporte_Clube_Taubat%C3%A9.png", "Burro da Central")
);

$bandasRock = array(
    $banda1 = new Link("https://images.seeklogo.com/logo-png/0/2/angra-logo-png_seeklogo-9040.png", "Angra"),
    $banda2 = new Link("https://blogger.googleusercontent.com/img/b/R29vZ2xl/AVvXsEjs2Y1aJGOsyBFgwjRpQcHZmdt_aEEhqsFLLsbaj8TR6bgX7XngyGcjnSQ60sDouUXy_N6JYOT4i4LkT_vFhAxtWCasf_R-gmLcQdZmYf3__VJAokd-BBiPAJgORRz97cxFk-6W5H4iAVA/s320/The_Police-logo.png", "The Police"),
    $banda3 = new Link("https://lh3.googleusercontent.com/proxy/z6k5N4sl7I6Wdb-A1OLmG0pVC7BRM63uzCaFgYQt3E--TentiEIUqYGeL8ysaNojp3Vp2XK6V-sW6-3TujF0eNsuCtE75ky7NmP53rmkWiSeSfwTxG7Ecrss0ll3b-0hLdakULY9_A5D1hD7NjgPKnNQ-w", "Praying Mantis")
);

$modelCalcas = array(
    $calca1 = new Link("https://br.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-calca-esportiva-de-alfaiataria--HTFP5WPRJ651_PM2_Front%20view.jpg", "Alfaiataria"),
    $calca2 = new Link("https://storage.moovin.store/main/4c606e72-6a3a-46ac-8d96-f255da43c825/3cc1d8b0-3da4-4d31-8c28-91d921b53215.png?v=1757797027", "Baggy"),
    $calca3 = new Link("https://br.louisvuitton.com/images/is/image/lv/1/PP_VP_L/louis-vuitton-calca-flare-de-alfaiataria-em-veludo--HSP60EPSY90D_PM2_Front%20view.jpg", "Flare")
);

$jrpg = array(
    $jogo1 = new Link("https://acdn-us.mitiendanube.com/stores/001/108/179/products/59d132595e695d46e8175b33de892dcdawsaccesskeyidakiatclmsgfx4j7tu445expires1687031589signature1nb2frhnbmxprvns2kjw6rmc2bop83d-561154bf467434aa5516844395977837-1024-1024.webp", "Chrono Trigger"),
    $jogo2 = new Link("https://images.launchbox-app.com//979fff20-f294-4a99-af7b-8a82057d9db5.png", "Pokémon White 2"),
    $jogo3 = new Link("https://images.launchbox-app.com//cf5904be-5d0c-4c23-a7cd-134e02fb0fc4.png", "Final Fantasy IX")
);

function desenhaBotao($titulo,$array)
{
    print("<div class='dropdown'>");
    print("<button class='dropbtn'>$titulo</button>");
    print("<div class='dropText'>");

    foreach ($array as $a) {
        print("<span><img src='" . $a->getLinkImg() . "' width='20' height='20'>" . $a->getInfo() . "</span>");
    }

    print("</div>");
    print("</div>");
}

desenhaBotao("Times de Futebol", $timesFutebol);
desenhaBotao("Bandas de Rock", $bandasRock);
desenhaBotao("Modelo de Calças", $modelCalcas);
desenhaBotao("JRPG", $jrpg);

