<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
<form action="mass.php" method="post">
    <p><input type="number" name="search_number" /></p>
    <p><input type="submit" /></p>
</form>

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
                        $string = " ";
                        for($i=0; $i < $pos; $i++){ $string += $string;}
                        echo $string . "<li>" . $file. "</li>";
                         file_manager($folder.'/'.$file, $pos+1);
                     }
                    else
                    {
                        for($i=0; $i < $pos; $i++){ echo " ";}
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

</body>
</html>