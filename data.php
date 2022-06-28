<?php



    require_once('helper.php');

    $sql    = "SELECT * FROM notes ORDER BY id DESC";
    $query  = mysqli_query($conn, $sql);

    if($query){
        $result = array();
        while ($row = mysqli_fetch_array($query)){
            array_push($result, array(
                'id' => $row['id'],
                'note' => $row['note'],
            ));
        }
        // Tampilkan dalam file json
        echo json_encode( array(
            'notes' => $result,
            'message' => 'Success',
        ));
    }

   
?>