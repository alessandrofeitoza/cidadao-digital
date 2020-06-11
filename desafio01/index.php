<?php
    require_once 'config.php';

    function render(string $filename): void
    {
        include_once "partials/{$filename}.php";
    }
?>

<!DOCTYPE html>
<!--
	Astral by HTML5 UP (Edited by Alessandro Feitoza)
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="pt-br">
    <?php render('head'); ?>
	<body class="is-preload">
        <div id="wrapper">
            <?php render('menu'); ?>

            <!-- Main -->
            <div id="main">
                <?php
                    render('article01');
                    render('article02');
                    render('article03');
                ?>
            </div>

            <?php render('footer'); ?>
        </div>

		<!-- Scripts -->
        <script src="<?=Config::PROJECT_BASE_URL?>assets/js/jquery.min.js"></script>
        <script src="<?=Config::PROJECT_BASE_URL?>assets/js/browser.min.js"></script>
        <script src="<?=Config::PROJECT_BASE_URL?>assets/js/breakpoints.min.js"></script>
        <script src="<?=Config::PROJECT_BASE_URL?>assets/js/util.js"></script>
        <script src="<?=Config::PROJECT_BASE_URL?>assets/js/main.js"></script>

	</body>
</html>