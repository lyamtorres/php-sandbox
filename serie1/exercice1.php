<?php

    $div = [];
    $perfectNumbers = [];

    for ($i = 1; $i <= 100; $i++) {
        // Determiner les diviseurs du nombre
        $div = [];

        for ($j = 1; $j <= $i; $j++) {
            if (($i % $j === 0) && ($i !== $j)) {
                array_push($div, $j);
            }
        }
        
        $sum = 0;

        foreach ($div as $value) {
            $sum += $value;
        }
        
        if ($sum === $i) {
            $perfectNumbers[$i] = "Parfait";
        } else {
            $perfectNumbers[$i] = "Non parfait";
        }

    }

    
    foreach($perfectNumbers as $x => $x_value) {
        echo $x . " => " . $x_value;
        echo "<br>";
    }

?>