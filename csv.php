<?php
  
        $myfile = fopen('file.csv', 'a');
        fputcsv($myfile,
            array("hello,12", "hello,12", "hello,12"));
        fclose($myfile);
   
?>
sadsa
