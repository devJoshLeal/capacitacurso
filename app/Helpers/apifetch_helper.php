<?php
function courseFetch(){
    
    $path = FCPATH . 'js/source/course.json'; 
    $jsonString = file_get_contents($path);
    $data = json_decode($jsonString, true); 
    return $data;
    }
?>