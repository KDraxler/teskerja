<?php

// $text = $_POST['text'];
// echo $text;
$text = '';
$sum = '';
$jduplicate = '';
$sump = '';
$empat = '';
$lima = '';
if (isset($_POST['input'])) {
    $text = $_POST['input'];
    // echo $text;

    // var_dump($text);

    $teks = 'Since 1995, Java has changed our world . . . and our expectations.. Today, with technology 
        such a part of our daily lives, we take it for granted that we can be connected and access 
        applications and content anywhere, anytime. Because of Java, we expect digital devices to be 
        smarter, more functional, and way more entertaining. In the early 90s, extending the power of 
        network computing to the activities of everyday life was a radical vision. In 1991, a small group 
        of Sun engineers called the "Green Team" believed that the next wave in computing was the 
        union of digital consumer devices and computers. Led by James 
        Gosling, the team worked around the clock and created the programming language that would 
        revolutionize our world – Java. The Green Team demonstrated their new language with an 
        interactive, handheld home-entertainment controller that was originally targeted at the digital 
        cable television industry. Unfortunately, the concept was much too advanced for the them at the 
        time. But it was just right for the Internet, which was just starting to take off. In 1995, the team 
        announced that the Netscape Navigator Internet browser would incorporate Java technology. 
        Today, Java not only permeates the Internet, but also is the invisible force behind many of the 
        applications and devices that power our day-to-day lives. From mobile phones to handheld 
        devices, games and navigation systems to e-business solutions, Java is everywhere! 
        ';
    $teks1 = 'Since 1995, Java java java has changed our world . . .   as  ';

    $filter = preg_replace("/[^a-zA-Z0-9 -]/", "", strtolower($text)); //filter dari karakter random, dan merubah string menjadi lowercase
    $filter2 = preg_replace("/[^a-zA-Z0-9 ]/", " ", $filter); //untuk merubah karakter "-" menjadi space. Karena pada kasus soal ini kata "day-to-day" terdiri dari 3 suku kata dan kata "e-business" terdiri dari 2 suku kata yaitu Electronic dan Business
    $removespace = trim($filter2, " "); //untuk menghapus space berlebih

    $starray = explode(" ", $removespace); //merubah string menjadi array
    $filternull = array_filter($starray); //menghapus array kosong
    $sum = count($filternull); //menghitung array 
    $duplicate = array_count_values($filternull); //menghitung starray yang sama


    // echo "Teks: $teks <hr><br>";
    // echo "Teks: $filter2 <hr><br>";

    // echo "Teks akhir: $removespace <hr><br>";

    // print_r($filternull);
    // echo "<hr>";
    // echo "Jumlah kata: $sum buah kata <br>";
    // echo "<hr>";


    $jduplicate = ''; //menanpilkan jumlah kemunculan kata dari text
    foreach ($duplicate as $x => $x_value) {
        $jduplicate .= $x . ' : ' . $x_value . ', ';
        // echo "<br>";
    }
    // echo 'jumlah kemunculan tiap kata adalah: <br>' . $jduplicate;
    // echo "<hr>";

    $min1 = ''; //menampilkan kata yang paling sedikit muncul
    foreach ($duplicate as $x => $x_value) {
        if ($x_value === 1) {
            $min1 .= $x . ' '; //diisi dengan key yang paling sedikit muncul pada array di separate dengan sepasi
        }
    }

    $removespacep = trim($min1, " "); //untuk menghapus space berlebih
    // echo 'ini adalah min1' . $removespacep;
    $starrayp = explode(" ", $removespacep); //merubah string menjadi array
    $sump = count($starrayp); //menghitung array 
    // echo 'Jumlah kata yang hanya muncul 1 kali ada ' . $sump;
    // echo "<hr>";

    $maxv = ''; //untuk value kata yang paling banyak muncul dalam text
    $maxk = ''; //untuk key kata yang paling banyak muncul dalam text
    foreach ($duplicate as $x => $x_value) {
        if ($x_value == max($duplicate)) {
            $maxv .= $x_value . ' ';
            $maxk .= $x . ' ';
        }
    }
    $empat = 'Sejumlah ' . $maxv . ' dan kata tersebut adalah: ' . $maxk;
    // echo "<hr>";

    $min2 = preg_replace("/[^a-zA-Z0-9]/", ", ", $min1); //untuk mengganti spasi dengan koma
    $lima = 'Sejumlah ' . $sump . ' dan kata tersebut adalah: ' . $min2;
    // echo "<hr>";
}
