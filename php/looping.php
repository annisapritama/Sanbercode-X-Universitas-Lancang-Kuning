<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Looping</title>
</head>
<body>
    <h1>Berlatih Looping</h1>

    <?php 
        echo "<h4>Soal No 1 Looping I Love PHP</h4>";
        
        echo "<h5>Looping Pertama</h5>";
        
        $start_number = 2;
        while ($start_number <= 20) {
            echo $start_number . " - I Love PHP <br>";
            $start_number+=2;
        };

        echo "<h5>Looping Kedua</h5>";
        
        $last_number = 20;
        while ($last_number >= 2) {
            echo $last_number . " - I Love PHP <br>";
            $last_number-=2;
        };

        echo "<h4>Soal No 2 Looping Array Module</h4>";

        $numbers = [18, 45, 29, 61, 47, 34];
        echo "array numbers: ";
        print_r($numbers);
        // Lakukan Looping di sini
        foreach ($numbers as $number){ 
        $rest[] = $number%5;
        };
        echo "<br>";
        echo "Array sisa baginya adalah:  "; 
        echo "<br>";
        print_r($rest);

        echo "<h4>Soal No 3 Looping Asociative Array</h4>";

        $kids = [
            ["001", " Keyboard Logitek", "60000", "Keyboard yang mantap untuk kantoran", "logitek.jpeg "],
            ["002", " Keyboard MSI", "300000", "Keyboard gaming MSI mekanik", "msi.jpeg "],
            ["003", " Mouse Genius", "50000", "Mouse Genius biar lebih pinter", "genius.jpeg"],
            ["004", " Mouse Jerry", " 30000", "Mouse yang disukai kucing", "jerry.jpeg "],
        ];

        foreach ($kids as $value) {
         $data = [
            "id" => $value[0],
            "name" => $value[1],
            "price" => $value[2],
            "description" => $value[3],
            "source" => $value[4],
         ];

         print_r($data);
         echo "<br>";
        };

        echo "<h4>Soal No 4</h4>";

        for ($j=1; $j <= 5 ; $j++) { 
            for ($b=1; $b <= $j; $b++){
                echo "*";
            }
            echo "<br>";
        }



       
        
    ?>

</body>
</html>