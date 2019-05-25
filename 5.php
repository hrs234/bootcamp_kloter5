<?php 

function ganti_huruf($kata, $huruf_awal, $huruf_pengganti)
{
    $split_kata = str_split($kata);
    $banyak_element = count($split_kata);
    $new_kata = array();
    
    for($initA=0; $initA<$banyak_element;$initA++)
    {
        if($split_kata[$initA] == $huruf_awal)
        {
            $new_kata[$initA] = $huruf_pengganti;
        }
        else
        {
            $new_kata[$initA] = $split_kata[$initA];
        }
    }



    // return $new_kata;
    return implode('', $new_kata);
}

print_r(ganti_huruf("purwakarta", "a", "o"));
?>