<?php
class crud
{
    public $konek;

    //menjalankan koneksi
    function __construct()
    {
        // konfigurasi database
        $this->konek = mysqli_connect('localhost', 'root', '', 'data_programmer');
        if(!$this->konek)
        {
            echo "Koneksi bermasalah";
            echo "<br><br>ERROR: ".mysqli_error($this->konek);
        }
    }

    //utk menampilkan sebuaah data non-update
    public function tampil($nama_tb)
    {
        $SQL = "select * from $nama_tb";
        $exe = mysqli_query($this->konek, $SQL);
        return $exe;
    }

    public function sort_by($nama_tb, $nama_kolom, $value)
    {
        $SQL = "select * from $nama_tb where $nama_kolom='$value'";
        $exe = mysqli_query($this->konek, $SQL);
        return $exe;
    }

    //utk mengisi data baru alias buat baru
    public function insert($nama_tb, $get_data)
    {
        //pemecah data
        $kolom = implode(", ",array_keys($get_data));
        $value = implode("','",$get_data);

        //eksekusi perintah
        $SQL = "insert into $nama_tb ($kolom) values ('$value')";
        $exe = mysqli_query($this->konek, $SQL);
        if(!$exe)
        {
            return "ERROR: $SQL <br><br>".mysqli_error($this->konek);
        }
        else
        {
            return "ok";
        }
    }

}
?>