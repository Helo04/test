<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        nama
        <br>
        <input type="text" name="nama" placeholder="masukan nama"> 
        <br>
        alamat
        <br>
        <input type="text" name="alamat" placeholder="masukan alamat"> 
        <br>
        No KTP
        <br>
        <input type="text" name="no_ktp" placeholder="masukan ktp">
        <br>
        foto penyewa 
        <br>
        <input type="file" name="foto" placeholder="masukan foto">  
        <br>
        email penyewa
        <br>
        <input type="text" name="email" placeholder="masukan email"> 
        <br>
        lama sewa
        <br>
        <input type="text" name="sewa" placeholder="masukan lama_sewa"> 
        <br>
        cc motor
        <br>
        <input type="text" name="cc" placeholder="masukan cc_motor"> 
        <br>
        <br>
        <input type="submit" name="proses" value="proses">
        <input type="reset" name="reset " value="reset">
        <br>
        <input type="checkbox" name="helm" value="50000">
        <label for="item1">HELM = 50000</label>
        <br>
        <input type="checkbox" name="mantel" value="5000">
        <label for="item2">MANTEL = 5000</label>
        <br>
        
    </form>
    <?php
    if(isset($_POST['proses'])) 
        $input_nama=$_POST['nama'];
        $input_alamat=$_POST['alamat'];
        $input_no_ktp=$_POST['no_ktp'];
        $input_foto=$_POST['foto'];
        $input_email= $_POST['email'];
        $input_sewa= $_POST['sewa'];
        $input_cc= $_POST['cc'];
        $input_helm = $_POST['helm'];
        $input_mantel = $_POST['mantel'];
 

        if($input_cc<=125)
        {
            $harga=125000;
            $harga1=$harga*$input_sewa+$input_helm+$input_mantel;
            echo "harga yang anda dapatkan adalah : $harga1 <br>";
        }
        elseif($input_cc >= 126 && $input_cc <= 150 )
        {
            $harga=200000;
            $harga1=$harga*$input_sewa+$input_helm+$input_mantel;
            echo "harga yang anda dapatkan adalah : $harga1 <br>";
        }
        elseif($input_cc >= 151 && $input_cc <= 175)
        {
            $harga=300000;
            $harga1=$harga*$input_sewa+$input_helm+$input_mantel;
            echo "harga yang anda dapatkan adalah : $harga1 <br>";
        }
        elseif($input_cc >= 175)
        {
            $harga=400000;
            $harga1=$harga*$input_sewa+$input_helm+$input_mantel;
            echo "harga yang anda dapatkan adalah : $harga1 <br>";
        }
      

        echo "nama anda         = $input_nama <br>";
        echo "alamat anda di    = $input_alamat <br>";
        echo "no ktp anda       = $input_no_ktp <br>";
        echo "email anda        = $input_email <br>";
        echo "lama sewa anda    = $input_sewa <br>";
        echo "cc motor yang anda pilih    = $input_cc <br>";

      

?>
</body>
</html>
