<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Kalkulator Bunga</title>
</head>

<style>
    @import url('https://fonts.googleapis.com/css2?family=Space+Grotesk&display=swap');

    * {
        font-family: 'Space Grotesk', sans-serif;
    }

    .card-me {
        border-radius: 20px;
    }
</style>

<body class="bg-danger">

    <?php
    if (isset($_GET['page'])) {
        $page = $_GET['page'];

        if ($page == "future") {
            include "page/future.php";
        } else if ($page == "present") {
            include "page/present.php";
        } else if ($page == "anuitas") {
            include "page/anuitas.php";
        } else {
            include "page/home.php";
        }
    } else if (!isset($_GET['page']) && !isset($_GET['hitung'])) {
        include "page/home.php";
    }

    if (isset($_GET['hitung'])) {
        $hitung = $_GET['hitung'];
        print_r($_POST);

        if ($hitung == "future") {
            $pa = $_POST['pinjaman'];
            $bunga = $_POST['bunga'];
            $waktu = $_POST['waktu'];
            $tipe = $_POST['tipe'];

            if ($tipe == "tunggal") {
                $bunga_total = $pa * ($bunga / 100) * $waktu;
                $harus_bayar = $pa + $bunga_total;
                // echo $harus_bayar;
                $bungaAkhir = $harus_bayar;
            }
            
            if ($tipe == "majemuk") {
                $uang = $pa;
                $total = [];
                for($i = 0; $i < $waktu; $i++){
                    $bungaa = $uang * ($bunga / 100);
                    $uang = $uang + $bungaa;
                    // echo $uang ."<br>";
                    $total[] = $uang;
                }
                $total = array_sum($total);
                $bungaAkhir = $uang;
            }
        }

        if ($hitung == "present") {
            $pa = $_POST['pinjaman'];
            $bunga = $_POST['bunga'];
            $waktu = $_POST['waktu'];
            $tipe = $_POST['tipe'];

            if ($tipe == "tunggal") {
                $bunga_total = $pa * ($bunga / 100) * $waktu;
                $harus_bayar = $pa + $bunga_total;
                // echo $harus_bayar;
                $bungaAkhir = $harus_bayar;
            }
            
            if ($tipe == "majemuk") {
                $uang = $pa;
                $total = [];
                for($i = 0; $i < $waktu; $i++){
                    $bungaa = $uang * ($bunga / 100);
                    $uang = $uang + $bungaa;
                    // echo $uang ."<br>";
                    $total[] = $uang;
                }
                $total = array_sum($total);
                $bungaAkhir = $uang;
            }
        }
        
        
        include "page/hasil.php";
    }
    ?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>

</html>