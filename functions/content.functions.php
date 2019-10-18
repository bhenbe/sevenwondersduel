<?php

    function get_content($file) {

        try{

            $json = file_get_contents($file);

            $array = json_decode($json, true);

            return $array;

        } catch (Exception $e) {

            echo 'Exception reçue : ',  $e->getMessage(), "\n";
            
        }

    }

    function get_slider_images() {

        $result = array();
        $dir = "./contents/slider/";
        $files = glob($dir . "/*.jpg");

        foreach($files as $img)
            $result[] = $img;

        return $result;

    }