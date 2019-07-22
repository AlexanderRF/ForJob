<?php

for($i=0;$i<=999;$i++)
{
    $mass[$i]=$mass[$i-1]+3;
}

if (isset($_POST['rows'])) 
{ 
    $result=$_POST['rows'];
    $s = 0;
    $f = count($mass)-1;
    
    while($s <= $f)
    {
        $q = floor(($s+$f)/2);
        
        if($mass[$q] == $result)
        {
            break;
        }
        elseif($mass[$q] > $result)
        {
            $f = $q-1;
        }
        else
        {
            $s = $q+1;
        }
    }
    echo $q;    
}
?>


<form method="POST" action="index.php">
    <select name="rows" size="10">
        <?php
        for ($i = 0; $i < 1000; $i++)
        {
            echo "<option value='" . $mass[$i] . "'>" . $i.'/'.$mass[$i] . "</option>";
        }
        ?>
    </select>
    <input type="submit" value="Choose" style="vertical-align:top">
</form>


