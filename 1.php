<?php 
function data_diri()
{
    $data_json = array(
        'name'=>"Harris Santoso",
        'address'=>"JL.MT Haryono No.7",
        'Hobby'=>array(
            "Pemrograman",
            "animanga"
        ),
        'is_married'=>false,
        'school'=>array(
            'highSchool'=>"SMK Negeri 4 Banjarmasin",
            'University'=>null
        ),
        'skills'=>array(['name'=>"PHP", 'score'=>5])


    );

    return json_encode($data_json);
}

echo data_diri();
?>