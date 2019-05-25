<?php 

function date_beetween($dataA, $dataB)
{
    // pecahkan data tanggal awal
    $dataA_pieces = explode('-',$dataA);
    $yearA = $dataA_pieces[0];
    $monthA = $dataA_pieces[1];
    $dayA = $dataA_pieces[2];

    $res = array();

    // pecahkan data tanggal akhir
    $dataB_pieces = explode('-',$dataB);
    $yearB = $dataB_pieces[0];
    $monthB = $dataB_pieces[1];
    $dayB = $dataB_pieces[2];

    for($initA = $dayA; $initA <= $dayB; $initA++)
    {
        if($initA > 32)
        {
            break;
        }
        else
        {
            $res[$initA] = $yearA."-".$monthA."-".$initA;
        }
    }

    $sting = implode(', ', $res);

    return $sting;
    

}

print_r(date_beetween('2019-11-01', '2019-11-05'));
?>