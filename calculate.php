<!DOCTYPE html>
<html>
<head>
    <title>TOPSIS</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="bootstrap.min.css">
    <style>
        .bg-4 {
            background-color: #2f2f2f;
            color: #ffffff;
        }

        .container-fluid {
            padding-top: 50px;
            padding-bottom: 40px;
        }

        .no-underline:hover {
            text-decoration: none;
            color: #ffa0a0;
        }

        .putih {
            color: #ffffff;
        }
    </style>
</head>
<body>
    <div class="jumbotron text-center ">
    <h1><a class="putih no-underline" href="index.html">TOPSIS CALCULATOR</a></h1>
        <p>Aplikasi Pemilihan Minuman Beralkohol Terbaik Menggunakan Metode TOPSIS</p>
    </div>

<?php
//WEIGHT PREFERENSI
$w_rasa=$_POST['w_rasa'];
$w_aroma=$_POST['w_aroma'];
$w_kandungan=$_POST['w_kandungan'];
$w_tekstur=$_POST['w_tekstur'];

//ALTERNATIF 1
$c1a1=$_POST['c1a1'];
$c2a1=$_POST['c2a1'];
$c3a1=$_POST['c3a1'];
$c4a1=$_POST['c4a1'];

//ALTERNATIF 2
$c1a2=$_POST['c1a2'];
$c2a2=$_POST['c2a2'];
$c3a2=$_POST['c3a2'];
$c4a2=$_POST['c4a2'];

//ALTERNATIF 3
$c1a3=$_POST['c1a3'];
$c2a3=$_POST['c2a3'];
$c3a3=$_POST['c3a3'];
$c4a3=$_POST['c4a3'];

//ALTERNATIF 4
$c1a4=$_POST['c1a4'];
$c2a4=$_POST['c2a4'];
$c3a4=$_POST['c3a4'];
$c4a4=$_POST['c4a4'];

//ALTERNATIF 5
$c1a5=$_POST['c1a5'];
$c2a5=$_POST['c2a5'];
$c3a5=$_POST['c3a5'];
$c4a5=$_POST['c4a5'];

//ALTERNATIF 6
$c1a6=$_POST['c1a6'];
$c2a6=$_POST['c2a6'];
$c3a6=$_POST['c3a6'];
$c4a6=$_POST['c4a6'];

//1. MATRIKS KEPUTUSAN TERNORMALISASI
//kolom1
$k1b1=$c1a1/(sqrt((pow($c1a1,2)+pow($c1a2,2)+pow($c1a3,2)+pow($c1a4,2)+pow($c1a5,2)+pow($c1a6,2))));
$k1b2=$c1a2/(sqrt((pow($c1a1,2)+pow($c1a2,2)+pow($c1a3,2)+pow($c1a4,2)+pow($c1a5,2)+pow($c1a6,2))));
$k1b3=$c1a3/(sqrt((pow($c1a1,2)+pow($c1a2,2)+pow($c1a3,2)+pow($c1a4,2)+pow($c1a5,2)+pow($c1a6,2))));
$k1b4=$c1a4/(sqrt((pow($c1a1,2)+pow($c1a2,2)+pow($c1a3,2)+pow($c1a4,2)+pow($c1a5,2)+pow($c1a6,2))));
$k1b5=$c1a5/(sqrt((pow($c1a1,2)+pow($c1a2,2)+pow($c1a3,2)+pow($c1a4,2)+pow($c1a5,2)+pow($c1a6,2))));
$k1b6=$c1a6/(sqrt((pow($c1a1,2)+pow($c1a2,2)+pow($c1a3,2)+pow($c1a4,2)+pow($c1a5,2)+pow($c1a6,2))));

//kolom2
$k2b1=$c2a1/(sqrt((pow($c2a1,2)+pow($c2a2,2)+pow($c2a3,2)+pow($c2a4,2)+pow($c2a5,2)+pow($c2a6,2))));
$k2b2=$c2a2/(sqrt((pow($c2a1,2)+pow($c2a2,2)+pow($c2a3,2)+pow($c2a4,2)+pow($c2a5,2)+pow($c2a6,2))));
$k2b3=$c2a3/(sqrt((pow($c2a1,2)+pow($c2a2,2)+pow($c2a3,2)+pow($c2a4,2)+pow($c2a5,2)+pow($c2a6,2))));
$k2b4=$c2a4/(sqrt((pow($c2a1,2)+pow($c2a2,2)+pow($c2a3,2)+pow($c2a4,2)+pow($c2a5,2)+pow($c2a6,2))));
$k2b5=$c2a5/(sqrt((pow($c2a1,2)+pow($c2a2,2)+pow($c2a3,2)+pow($c2a4,2)+pow($c2a5,2)+pow($c2a6,2))));
$k2b6=$c2a6/(sqrt((pow($c2a1,2)+pow($c2a2,2)+pow($c2a3,2)+pow($c2a4,2)+pow($c2a5,2)+pow($c2a6,2))));

//kolom3
$k3b1=$c3a1/(sqrt((pow($c3a1,2)+pow($c3a2,2)+pow($c3a3,2)+pow($c3a4,2)+pow($c3a5,2)+pow($c3a6,2))));
$k3b2=$c3a2/(sqrt((pow($c3a1,2)+pow($c3a2,2)+pow($c3a3,2)+pow($c3a4,2)+pow($c3a5,2)+pow($c3a6,2))));
$k3b3=$c3a3/(sqrt((pow($c3a1,2)+pow($c3a2,2)+pow($c3a3,2)+pow($c3a4,2)+pow($c3a5,2)+pow($c3a6,2))));
$k3b4=$c3a4/(sqrt((pow($c3a1,2)+pow($c3a2,2)+pow($c3a3,2)+pow($c3a4,2)+pow($c3a5,2)+pow($c3a6,2))));
$k3b5=$c3a5/(sqrt((pow($c3a1,2)+pow($c3a2,2)+pow($c3a3,2)+pow($c3a4,2)+pow($c3a5,2)+pow($c3a6,2))));
$k3b6=$c3a6/(sqrt((pow($c3a1,2)+pow($c3a2,2)+pow($c3a3,2)+pow($c3a4,2)+pow($c3a5,2)+pow($c3a6,2))));

//kolom4
$k4b1=$c4a1/(sqrt((pow($c4a1,2)+pow($c4a2,2)+pow($c4a3,2)+pow($c4a4,2)+pow($c4a5,2)+pow($c4a6,2))));
$k4b2=$c4a2/(sqrt((pow($c4a1,2)+pow($c4a2,2)+pow($c4a3,2)+pow($c4a4,2)+pow($c4a5,2)+pow($c4a6,2))));
$k4b3=$c4a3/(sqrt((pow($c4a1,2)+pow($c4a2,2)+pow($c4a3,2)+pow($c4a4,2)+pow($c4a5,2)+pow($c4a6,2))));
$k4b4=$c4a4/(sqrt((pow($c4a1,2)+pow($c4a2,2)+pow($c4a3,2)+pow($c4a4,2)+pow($c4a5,2)+pow($c4a6,2))));
$k4b5=$c4a5/(sqrt((pow($c4a1,2)+pow($c4a2,2)+pow($c4a3,2)+pow($c4a4,2)+pow($c4a5,2)+pow($c4a6,2))));
$k4b6=$c4a6/(sqrt((pow($c4a1,2)+pow($c4a2,2)+pow($c4a3,2)+pow($c4a4,2)+pow($c4a5,2)+pow($c4a6,2))));

/*
$arr_mkternormalisasik1=array($k1b1,$k1b2,$k1b3,$k1b4,$k1b5,$k1b6);
$arr_mkternormalisasik2=array($k2b1,$k2b2,$k2b3,$k2b4,$k2b5,$k2b6);
$arr_mkternormalisasik3=array($k3b1,$k3b2,$k3b3,$k3b4,$k3b5,$k3b6);
$arr_mkternormalisasik4=array($k4b1,$k4b2,$k4b3,$k4b4,$k4b5,$k4b6);
print_r($arr_mkternormalisasik1);
echo'<br>';
print_r($arr_mkternormalisasik2);
echo'<br>';
print_r($arr_mkternormalisasik3);
echo'<br>';
print_r($arr_mkternormalisasik4);
echo'<br>';
*/

//2. MATRIKS KEPUTUSAN TERNORMALISASI TERBOBOT
//kolom1
$w_k1b1=$k1b1*$w_rasa;
$w_k1b2=$k1b2*$w_rasa;
$w_k1b3=$k1b3*$w_rasa;
$w_k1b4=$k1b4*$w_rasa;
$w_k1b5=$k1b5*$w_rasa;
$w_k1b6=$k1b6*$w_rasa;
$arr_k1=array($w_k1b1,$w_k1b2,$w_k1b3,$w_k1b4,$w_k1b5,$w_k1b6);

//kolom2
$w_k2b1=$k2b1*$w_aroma;
$w_k2b2=$k2b2*$w_aroma;
$w_k2b3=$k2b3*$w_aroma;
$w_k2b4=$k2b4*$w_aroma;
$w_k2b5=$k2b5*$w_aroma;
$w_k2b6=$k2b6*$w_aroma;
$arr_k2=array($w_k2b1,$w_k2b2,$w_k2b3,$w_k2b4,$w_k2b5,$w_k2b6);

//kolom3
$w_k3b1=$k2b1*$w_kandungan;
$w_k3b2=$k2b2*$w_kandungan;
$w_k3b3=$k2b3*$w_kandungan;
$w_k3b4=$k2b4*$w_kandungan;
$w_k3b5=$k2b5*$w_kandungan;
$w_k3b6=$k2b6*$w_kandungan;
$arr_k3=array($w_k3b1,$w_k3b2,$w_k3b3,$w_k3b4,$w_k3b5,$w_k3b6);

//kolom4
$w_k4b1=$k2b1*$w_tekstur;
$w_k4b2=$k2b2*$w_tekstur;
$w_k4b3=$k2b3*$w_tekstur;
$w_k4b4=$k2b4*$w_tekstur;
$w_k4b5=$k2b5*$w_tekstur;
$w_k4b6=$k2b6*$w_tekstur;
$arr_k4=array($w_k4b1,$w_k4b2,$w_k4b3,$w_k4b4,$w_k4b5,$w_k4b6);

/*
$arr_mkternormalisasik1=array($k1b1,$k1b2,$k1b3,$k1b4,$k1b5,$k1b6);
$arr_mkternormalisasik2=array($k2b1,$k2b2,$k2b3,$k2b4,$k2b5,$k2b6);
$arr_mkternormalisasik3=array($k3b1,$k3b2,$k3b3,$k3b4,$k3b5,$k3b6);
$arr_mkternormalisasik4=array($k4b1,$k4b2,$k4b3,$k4b4,$k4b5,$k4b6);
print_r($arr_mkternormalisasik1);
echo'<br>';
print_r($arr_mkternormalisasik2);
echo'<br>';
print_r($arr_mkternormalisasik3);
echo'<br>';
print_r($arr_mkternormalisasik4);
*/

//3.Menentukan matriks solusi ideal positif & negatif
$s_positif=array(max($arr_k1),max($arr_k2),max($arr_k3),max($arr_k4));
$s_negatif=array(min($arr_k1),min($arr_k2),min($arr_k3),min($arr_k4));

//4.Menentukan Jarak Antara Nilai setiap alternatif dengan matrtiks solusi ideal pos neg
//jarak dengan solusi positif
$d1pos=sqrt(pow($w_k1b1-$s_positif[0],2)+pow($w_k2b1-$s_positif[1],2)+pow($w_k3b1-$s_positif[2],2)+pow($w_k4b1-$s_positif[3],2));
$d2pos=sqrt(pow($w_k1b2-$s_positif[0],2)+pow($w_k2b2-$s_positif[1],2)+pow($w_k3b2-$s_positif[2],2)+pow($w_k4b2-$s_positif[3],2));
$d3pos=sqrt(pow($w_k1b3-$s_positif[0],2)+pow($w_k2b3-$s_positif[1],2)+pow($w_k3b3-$s_positif[2],2)+pow($w_k4b3-$s_positif[3],2));
$d4pos=sqrt(pow($w_k1b4-$s_positif[0],2)+pow($w_k2b4-$s_positif[1],2)+pow($w_k3b4-$s_positif[2],2)+pow($w_k4b4-$s_positif[3],2));
$d5pos=sqrt(pow($w_k1b5-$s_positif[0],2)+pow($w_k2b5-$s_positif[1],2)+pow($w_k3b5-$s_positif[2],2)+pow($w_k4b5-$s_positif[3],2));
$d6pos=sqrt(pow($w_k1b6-$s_positif[0],2)+pow($w_k2b6-$s_positif[1],2)+pow($w_k3b6-$s_positif[2],2)+pow($w_k4b6-$s_positif[3],2));

//jarak dengan solusi negatif
$d1neg=sqrt(pow($w_k1b1-$s_negatif[0],2)+pow($w_k2b1-$s_negatif[1],2)+pow($w_k3b1-$s_negatif[2],2)+pow($w_k4b1-$s_negatif[3],2));
$d2neg=sqrt(pow($w_k1b2-$s_negatif[0],2)+pow($w_k2b2-$s_negatif[1],2)+pow($w_k3b2-$s_negatif[2],2)+pow($w_k4b2-$s_negatif[3],2));
$d3neg=sqrt(pow($w_k1b3-$s_negatif[0],2)+pow($w_k2b3-$s_negatif[1],2)+pow($w_k3b3-$s_negatif[2],2)+pow($w_k4b3-$s_negatif[3],2));
$d4neg=sqrt(pow($w_k1b4-$s_negatif[0],2)+pow($w_k2b4-$s_negatif[1],2)+pow($w_k3b4-$s_negatif[2],2)+pow($w_k4b4-$s_negatif[3],2));
$d5neg=sqrt(pow($w_k1b5-$s_negatif[0],2)+pow($w_k2b5-$s_negatif[1],2)+pow($w_k3b5-$s_negatif[2],2)+pow($w_k4b5-$s_negatif[3],2));
$d6neg=sqrt(pow($w_k1b6-$s_negatif[0],2)+pow($w_k2b6-$s_negatif[1],2)+pow($w_k3b6-$s_negatif[2],2)+pow($w_k4b6-$s_negatif[3],2));

//5. Menentukan Nilai Preferensi Untuk Setiap Alternatif
$v1=$d1neg/($d1neg-$d1pos);
$v2=$d2neg/($d2neg-$d2pos);
$v3=$d3neg/($d3neg-$d3pos);
$v4=$d4neg/($d4neg-$d4pos);
$v5=$d5neg/($d5neg-$d5pos);
$v6=$d6neg/($d6neg-$d6pos);

//6. Ranking
$arr_rank=array('1'=>"$v1",'2'=>"$v2",'3'=>"$v3",'4'=>"$v4",'5'=>"$v5",'6'=>"$v6");
arsort($arr_rank);
$a=1;
echo '<div class="container"><div class="row"><h3>HASIL</h3>';
echo '<table class="table-striped table-hover table-condensed"><tr><td><b>Rank</b></td><td><b>Alternatif</b></td><td><b>Nilai</b></td></tr>';
foreach ($arr_rank as $kunci=>$nilai){
    echo "<tr><td>$a</td><td>$kunci</td><td>$nilai</td></tr>";
    $a++;
}
echo '</table>';
echo '</div></div>';
?>
<br><br>
<footer class="container-fluid bg-4 text-center">
        <p>Made By Val, Visit me at <a
                href="https://novalinoreynaldi.000webhostapp.com">www.novalinoreynaldi.000webhostapp.com</a></p>
    </footer>
</body>
</html>