<?php 
require_once "engine.php";
$CRUD = new crud();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Data Diri Programmer</title>
    <link rel="stylesheet" href="asset/css/app.css">
    <link rel="stylesheet" href="asset/css/components.css">
</head>
<body class="backgrounds">

    <div class="container">
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="kartu kartu-warna-dark">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-9">
                                <form action="proses_nama.php" method="post">
                                
                                    <input type="text" name="nama_user" id="" class="form-control" placeholder="Isi nama Programmer">      
                                </div>
                                <div class="col-md-3">
                                    <input type="submit" value="Simpan" name="save_nama" class="btn btn-warna">
                                </form>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
        <?php 
            $profil = $CRUD->tampil('users');
            foreach($profil as $pr)
            {
        ?>
        <div class="row mt-4">
            <div class="col-md-10">
                <div class="kartu kartu-warna">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-5">
                                <h2>

                                    <?= $pr['name']; ?>

                                </h2>
                            </div>
                            <div class="row mt-4">
                                <?php 
                                
                                    $get_id = $pr['id'];
                                ?>
                                    <div class="col-md-9">
                                        <form method="post" action="proses_skill.php?id=<?= $get_id ?>">
                                                <input type="text" name="nama_skill" id="" class="form-control" placeholder="Masukan Nama Keahlian">
                                            </div>
                                            <div class="col-md-3">
                                                
                                                <input type="submit" value="Simpan" name="save_skill" class="btn btn-warna-dark">
                                        </form>
                                    </div>
                                
                            </div>
                        </div>
                        <div class="row mt-3">
                            <div class="col-md-5">
                                <?php 
                                    $skill = $CRUD->sort_by('skills', 'user_id', $get_id);
                                    foreach($skill as $sk)
                                    {
                                        ?>
                                        <div class="badge badge-secondary">
                                            <?= $sk['name'] ?>
                                        </div>
                                        
                                        <?php
                                    }
                                ?>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <?php 
            }
        ?>
</div>

</body>
</html>