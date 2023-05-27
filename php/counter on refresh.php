<?php
    session_start(); 
    $counter_name = 'emailCounter.txt';

    // Check if a text file exists. If not create one and initialize it to zero.
    if (!file_exists($counter_name)) {
          $f = fopen($counter_name, "w");
          fwrite($f,"0");
          fclose($f);
        }

    // Read the current value of our counter file
         $f = fopen($counter_name,"r");
         $counterVal = fread($f, filesize($counter_name));
         fclose($f);
         echo '<p>' . $counterVal .'</p>';


        // Increment counter value by one
        if (isset($_GET ['link'])){
            $link = $_GET['link'];
            if ($link == '1') {
                $counterVal++;
                $f = fopen($counter_name, "w");
                fwrite($f, $counterVal);
                fclose($f);
            }
        }
    ?>
  <a href="?link=1">Click me</a>