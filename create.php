<?php

    require_once('helper.php');

    $note = $_POST['note'];

    $sql    = "INSERT INTO notes(note) VALUES ('$note')";
    $query  = mysqli_query($conn, $sql);

    if($query)
    {
        // Tampilkan dalam file json
        echo json_encode( array(
                'message' => 'Berhasil ditambahkan',
        ));
    }
    else
    {
        echo json_encode( array(
            'message' => 'Gagal ditambahkan',
        ));
    }

   
?>