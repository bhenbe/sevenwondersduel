<?php

    require_once('config.php');

    $content = get_content('./contents/fr.json');
    $slider_images = get_slider_images();

    /** view **/
    include('partials/header.php');
    include('partials/loud.php');
    include('partials/navbar.php');
    include('partials/requirements.php');
    include('partials/slider.php');
    include('partials/bottom-description.php');
    include('partials/footer.php');