<?php 
function gambar($angka)
{
    for($a=1;$a<=$angka;$a++)
    {
        for($b=1;$b<=$angka;$b++)
        {
            if($a>1)
            {
                echo "* ";
            }
            else if($a == $angka)
            {
                echo "=";
            }
            else
            {
                echo "= ";
            }
        }
        echo "<br>";
    }
}

gambar(7);
?>