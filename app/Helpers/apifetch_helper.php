<?php
function courseFetch(){// Define the path to your JSON file
    $path = FCPATH . '../app/helpers/source/course.json'; 

    // Read the file content
    $jsonString = file_get_contents($path);

    // Decode JSON to a PHP object (or an associative array if the second parameter is true)
    $data = json_decode($jsonString, true); 
    return $data;
    }
?>