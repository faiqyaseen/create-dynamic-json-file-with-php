<?php

    if(isset($_POST['submit'])){
        if($_POST['name'] != "" && $_POST['age'] != "" && $_POST['class'] != ""){
            $path = "json/student-data.json";
            if(file_exists($path)){
                $current_data = file_get_contents($path);
                $array_data = json_decode($current_data, true);
                $new_data = array(
                    'name' => $_POST['name'],
                    'class' => $_POST['class'],
                    'age' => $_POST['age']
                );
                $array_data[] = $new_data;
                $json_data = json_encode($array_data, JSON_PRETTY_PRINT);

                if(file_put_contents($path,$json_data)){
                    echo "Successfully Saved.!";
                }else{
                    echo "Some Error Found.!";
                }
            }else{
                echo "File Doesn\'t Exist";
            }

        }else{
            echo "All input Fields Are Required.!";
        }
    }

?>