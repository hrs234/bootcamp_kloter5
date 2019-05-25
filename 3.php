<?php 

function pencari($huruf, $arr):bool
{
    foreach($arr as $data)
    {
        if($data == $huruf)
        {
            return true;
        }
    }
    return false;
}

function kata_hidup($data)
{
    $kata_hidup = array("a", "i", "u", "e", "o");
    $split_char = str_split($data, 1);
    $banyak_elemen = count($split_char);
    $huruf_hidup = 0;

    for($initA = 0; $initA < $banyak_elemen; $initA++)
    {
        $cek = pencari($split_char[$initA],$kata_hidup);
        if($cek == true)
        {
            $huruf_hidup+=1;
        }
        

    }
    

    return $huruf_hidup;

}

print_r(kata_hidup("programmer"));
?>