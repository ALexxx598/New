
<?php

 function file_manager($folder, $pos)
 {
     if(is_dir($folder))
     {
         if($dh = opendir($folder))
         {
             while(($file=readdir($dh)) !== false)
             {
                 if($file != "." && $file !='..')
                 {
                     if(is_dir($folder.'/'.$file))
                     {
                         for($i=0; $i < pos; i++){ echo " ";}
                         echo  "<li>" . $file. "</li>";
                         $pos +=1
                         file_manager($file, $pos);
                         $pos -=1;
                     }
                     else
                     {
                         for($i=0; $i < pos; i++){ echo " ";}
                         echo "<li>" . $file. "</li>";
                     }
                 }
             }
             closedir($dh);
         }
     }
 }
$folder = "t1";
$pos = 0;
file_manager($folder, $pos);
?>

