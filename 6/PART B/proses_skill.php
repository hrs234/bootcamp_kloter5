<?php 
    require_once "engine.php";
    $CRUD = new crud();

    if(isset($_POST['save_skill']))
    {
        
        $add_data = array(
            'name'=>$_POST['nama_skill'],
            'user_id'=>$_GET['id']
        );
        $jalan = $CRUD->insert('skills', $add_data);
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