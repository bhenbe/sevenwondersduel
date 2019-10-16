<?php

    function get_content($file) {

        $json = file_get_contents($file);

        $array = json_decode($json, true);

        return $array;

    }

    function get_slider_images() {

        $result = array();
        $dir = "./contents/slider/";
        $files = glob($dir . "/*.png");

        foreach($files as $img)
            $result[] = $img;

        return $result;

    }