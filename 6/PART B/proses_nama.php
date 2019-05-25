<?php 
    require_once "engine.php";
    $CRUD = new crud();

    if(isset($_POST['save_nama']))
    {
        
        $add_data = array(
            'name'=>$_POST['nama_user'],
            
        );
        $jalan = $CRUD->insert('users', $add_data);
        if($jalan == 'ok')
        {
            echo "<script>document.location='index.php';</script>";
        }   
        else
        {
            echo $jalan;
        }
    }
?>