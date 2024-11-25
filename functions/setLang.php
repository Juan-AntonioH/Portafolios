<?php
if (isset($_GET["lang"])) {
    $_SESSION['lang'] = ($_GET["lang"] == "en" || $_GET["lang"] == "es") ? $_GET["lang"] : "es";
}
