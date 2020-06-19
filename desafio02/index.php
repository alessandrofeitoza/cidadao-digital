<?php include_once 'images.php'; ?>
<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <title>Cidadão Digital - Desafio 02</title>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.2/css/lightgallery.min.css">
        <link rel="stylesheet" href="/cidadao-digital/desafio02/style.css">
    </head>
    <body>
        <div class="cont">
            <div class="page-head">
                <h1>Privacidade Digital: Seus dados, suas regras (será?)</h1>
                <p class="lead">Assim como na vida real, na vida digital devemos ter alguns cuidados para nossa própria segurança e pra segurança das pessoas que estão ao nosso redor.</p>
            </div>

            <div class="demo-gallery">
                <ul id="lightgallery">
                    <?php
                        foreach ($images as $img) {
                            echo "
                                <li data-responsive='{$img['url']} 900' data-src='{$img['url']}'
                                    data-sub-html='{$img['content']}' data-pinterest-text=\"Pin it\" data-tweet-text=\"share on twitter \">
                                    <a href=\"\">
                                        <img class=\"img-responsive\" src='{$img['url']}'>
                                        <div class=\"demo-gallery-poster\">
                                            <img src='{$img['url']}'>
                                        </div>
                                    </a>
                                </li>
                            ";
                        }
                    ?>
                </ul>
                <span class="small" style="color: white; font-size: 14pt;">Clique nas imagens</span>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.7.2/js/lightgallery.min.js"></script>
        <script src="/cidadao-digital/desafio02/events.js"></script>
    </body>
</html>