<?php
    if ( 0 < $_FILES['file']['error'] ) {
        echo 'Error: ' . $_FILES['file']['error'] . '<br>';
    }
    else {
        $newfilename = uniqid().$_FILES['file']['name'];
        if(move_uploaded_file($_FILES['file']['tmp_name'], 'uploads/' . $newfilename)){
            echo $newfilename;
        }
    }