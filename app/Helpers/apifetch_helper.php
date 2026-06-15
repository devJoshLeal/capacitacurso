<?php
function courseFetch(){
    $path = FCPATH . '../app/helpers/source/course.json'; 
    $jsonString = file_get_contents($path);
    $data = json_decode($jsonString, true); 
    return $data;
    }
?>