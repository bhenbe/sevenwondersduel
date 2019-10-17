<?php 

    require_once('./functions/content.functions.php');

    $current_lang = ((isset($_GET['lang'])) && ($_GET['lang'] == 'en')) ? 'en' : 'fr';
