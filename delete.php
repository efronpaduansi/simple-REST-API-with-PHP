<?php

    require_once('helper.php');
    parse_str(file_get_contents('php://input'), $value);

    $id = $value['id'];
   

    $sql    = "DELETE FROM notes WHERE id='$id'";
    $query  = mysqli_query($conn, $sql);

    if($query)
    {
        // Tampilkan dalam file json
        echo json_encode( array(
                'message' => 'Berhasil dihapus',
        ));
    }
    else
    {
        echo json_encode( array(
            'message' => 'Gagal dihapus',
        ));
    }

   
?>