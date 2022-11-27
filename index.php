<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body  >
     <?php

    // 3. 2 Sugeneruokit 300 atsitiktinių skaičių nuo 0 iki 300, atspausdinkite juos atskirtus tarpais ir suskaičiuokite kiek tarp jų yra didesnių už 150.  Skaičiai didesni nei 275 turi būti raudonos spalvos.

        $sumuoti=0;
        for ($i=0; $i < 300; $i++){
            $random = rand(0, 300);
            if($random > 275 ){
                echo '<span style="color: red; border: solid 1px red">'. $random . '</span>'."  ";
                $sumuoti++;
        }elseif($random >150){
            echo '<span style="color: blue; border: solid 1px blue">'. $random . '</span>'."  ";
            
            $sumuoti++;
        }else
            echo $random." ";
        }
        echo "<br>";
        echo 'Skaičiai, kurie didesni už 150 : '.'<span style="color: green; border: solid 1px black">'. $sumuoti. '</span>';
        echo "<br>.......................................";
        echo "<br>";

    // 3.3 Vienoje eilutėje atspausdinkite visus skaičius nuo 1 iki atsitiktinio skaičiaus tarp 3000 - 4000 pvz(aibė nuo 1 iki 3476), kurie dalijasi iš 77 be liekanos. Skaičius atskirkite kableliais. Po paskutinio skaičiaus kablelio neturi būti. Jeigu reikia, panaudokite css, kad visi rezultatai matytųsi ekrane.

    $a = [];
    $rand = rand(3000, 4000);
        for ($i=1; $i < $rand; $i++) { 
            if($i % 77 == 0){
                array_push($a, $i.",");
                // $a[] = $i.",";
            }
        }
    $str = implode(" ", $a);
    echo substr($str, 0, -1);
        // print_r($a)


        echo "<br>.......................................";
        echo "<br>";

    $result = "";
    for ($i=77; $i < $rand; $i+=77) { 
        $result .= $i.",";
    }
    echo substr($result, 0, -1);
echo "<br>.......................................";
        echo "<br>";


    // 3.6 Metam monetą. Monetos kritimo rezultatą imituojam rand() funkcija, kur 0 yra herbas, o 1 - skaičius. Monetos metimo rezultatus išvedame į ekraną atskiroje eilutėje: “S” jeigu iškrito skaičius ir “H” jeigu herbas. Suprogramuokite tris skirtingus scenarijus kai monetos metimą stabdome:
    // Iškritus herbui;
    // Tris kartus iškritus herbui;
    // Tris kartus iš eilės iškritus herbui; 

    
    // if($moneta == 0){
    //     echo 'H';
    // }else{
    //     echo 'S';
    // }
    // echo "<br>";


// 3.6.1 

// while (true){ 
//     $moneta = rand(0, 1);
//     if($moneta == 0){
//         echo 'H';
//         break;
//     }else{
//         echo 'S';
//     }
//     echo "<br>";
//     }
    
// 3.6.2

// $counter = 0;
// while (true){ 
//     $moneta = rand(0, 1);
//     if($moneta == 0){
//         echo 'H';
//         $counter++;
//         if($counter == 3){
//             break;
//         }
//     }else{
//         echo 'S';
//     }
//     echo "<br>";
//     }
    
// 3.6.3

$counter = 0;
while (true){ 
    $moneta = rand(0, 1);
    if($moneta == 0){
        echo 'H';
        $counter++;
        if($counter  == 3){
            break;
        }
    }else{
        $counter = 0;
        echo 'S';
    }
    echo "<br>";
    }
    echo "<br>";
//  3.6.10 Sumodeliuokite vinies kalimą. Įkalimo gylį sumodeliuokite pasinaudodami rand() funkcija. Vinies ilgis 8.5cm (pilnai sulenda į lentą).
//  “Įkalkite” 5 vinis mažais smūgiais. Vienas smūgis vinį įkala 5-20 mm. Suskaičiuokite kiek reikia smūgių.
//  “Įkalkite” 5 vinis dideliais smūgiais. Vienas smūgis vinį įkala 20-30 mm, bet yra 50% tikimybė (pasinaudokite rand() funkcija tikimybei sumodeliuoti), kad smūgis nepataikys į vinį. Suskaičiuokite kiek reikia smūgių.   

// 1var.

$count = 0;
$sum = 0;
for ($j=0; $j <= 5; $j++) { 
    for ($i=rand(5, 20); $i <= 85; ) {
        echo 'tiek mm sukalta vinis į medį:'.$i;
        echo '<br>'; 
        $ran = rand(5, 20);
        $i = $i += $ran;
        echo $ran;
        if($i >= 85 ){
            echo $count;
        }else 
            $count++;
            $sum++;  
    }
    echo "<br>";
    echo "<br>";
    echo 'tiek smūgių prireikį įkalti vinį:'.$count.'<br>';
    echo 'Is viso sukalta mm :'.$i;
    echo "<br>";
    echo "<br>";
    $count = 0;
}
echo '<span style = "color:red;"> tiek smūgių reikia įkalti 5 vinis:</span>'.$sum.'<br>';
echo "<br>";


// 2var.

$counts = 5;
$sums = 0;

 for ($k=0; $k <= 5; $k++) { 
    for ($l=rand(20, 30)  ; $l <= 85;) { 
        echo 'tiek mm suvaryta vinis į medį:'.$l;
        echo '<br>'; 
        $rand = rand(20, 30);
        $l = $l += $rand;
        echo $rand.'mm';
        
        $tikimybe = rand (0, 1);
        if ($tikimybe == 1){
            echo 'taiklus smūgis <br>';
            echo 'tiek mm vinis įkalta po smūgio:'.$l.'<br>';
            if($l >= 85 ){
                echo $counts.'<br>';
            }else 
                $counts++;
                $sums++; 
        }else $l -= $rand;
        // echo $rand;
        echo 'nepataikė'.'<br>';
    }
    echo "<br>";
    echo 'tiek mm suvaryta vinis į medį:'.$l;
    echo "<br>";
    echo 'tiek smūgių prireikį įkalti vinį:'.$counts.'<br>';
    echo "<br>";
    $counts = 0;
 }
echo '<span style = "color:red;"> tiek smūgių reikia įkalti 5 vinis:</span>'.$sums.'<br>';
echo "<br>";

// masyvai
// 1. Sugeneruokite masyvą iš 30 elementų (indeksai nuo 0 iki 29), kurių reikšmės yra atsitiktiniai skaičiai nuo 5 iki 25.

$a = [];
    
        for ($i=1; $i <= 30; $i++) { 
            $rand = rand(5, 25);
            $a[] = $rand.",";
            
        }
print_r($a);
echo "<br>";
// 2. Naudodamiesi 1 uždavinio masyvu:
// a) Suskaičiuokite kiek masyve yra reikšmių didesnių už 10;
$a = [];
    
        for ($i=1; $i <= 30; $i++) { 
            $rand = rand(5, 25);
            $a[] = $rand.",";
            
        }
print_r($a);
echo "<br>";

// b) Raskite didžiausią masyvo reikšmę ir jos indeksą arba indeksus jeigu yra keli;
// c) Suskaičiuokite visų porinių (lyginių) indeksų reikšmių sumą;
// d) Sukurkite naują masyvą, kurio reikšmės yra 1 uždavinio masyvo reikšmes minus tos reikšmės indeksas;
// e) Papildykite masyvą papildomais 10 elementų su reikšmėmis nuo 5 iki 25, kad bendras masyvas padidėtų iki indekso 39;
// f) Iš masyvo elementų sukurkite du naujus masyvus. Vienas turi būti sudarytas iš neporinių indekso reikšmių, o kitas iš porinių;
// g) Pirminio masyvo elementus su poriniais indeksais padarykite lygius 0 jeigu jie didesni už 15;
// h) Suraskite pirmą (mažiausią) indeksą, kurio elemento reikšmė didesnė už 10;
// i) Naudodami funkciją unset() iš masyvo ištrinkite visus elementus turinčius porinį indeksą;


$lyginiai = 0;
$nelyginiai = 0;
for ($i=1; $i < 10; $i++) { 
    $randoms = rand(1, 100);
    if($randoms % 2 == 0) {
        echo 'Atsitiktinis skaičius yra lyginis, jo reikšmė ='.$randoms.'<br>';
        $lyginiai++;
    }else echo 'Atsitiktinis skaičius yra nelyginis, jo reikšmė ='.$randoms.'<br>';
    $nelyginiai++;
}
echo 'lygininiai skaičiai cikle ='.$lyginiai;
echo '<br>';
echo 'lygininiai skaičiai cikle ='.$nelyginiai;



?>
</body>
</html>