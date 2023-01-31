<?php 
error_reporting(E_ERROR | E_WARNING | E_PARSE);
include_once 'funkcije.php';

if(isset($_POST['submit'])){
    $red = $_POST['red'];
    $stupac = $_POST['stupac'];
    $broj=1;
    $minRed = 0;
    $maxRed= $red -1;
    $minStup = 0;
    $maxStup = $stupac -1;
    $tablica=[];
    $pocetna= $_POST['pocetnapoz'];

    if($pocetna=='dolje-desno'){
        while ($broj<=$red*$stupac){
            for($n=$maxStup; $n >= $minStup; $n--){
                $tablica[$maxRed][$n] = $broj++;
            }
            $maxRed--;
            if($broj >$red*$stupac) 
            break;
            for($m=$maxRed;$m>=$minRed; $m--){
                $tablica[$m][$minStup] = $broj++;
            }
            $minStup++;
            if($broj > $red*$stupac) 
            break;
    
            for($n=$minStup; $n<=$maxStup;$n++){
                $tablica[$minRed][$n] = $broj ++;
            }
            $minRed++;
            if($broj > $red*$stupac) 
            break;
            for($m=$minRed; $m<= $maxRed; $m++){
                $tablica[$m][$maxStup]=$broj++;
            }
            $maxStup --;
        }
        
    }
    else if($pocetna=='gore-lijevo'){
        while($broj<=$stupac*$red){

            for($n=$minStup;$n<=$maxStup;$n++){
                $tablica[$minRed][$n] = $broj++;
            }
            for($m=$minRed+1;$m<=$maxRed;$m++){
                $tablica[$m][$maxStup]=$broj++;
            }
            for($n=$maxStup-1;$n>=$minStup;$n--){
                $tablica[$maxRed][$n]=$broj++;
            }
            for($m=$maxRed-1;$m>=$minRed+1;$m--){
                $tablica[$m][$minStup]=$broj++;
        
            }
            $minStup++;
            $minRed++;
            $maxStup--;
            $maxRed--;
        
        }
    }
    else if($pocetna=='dolje-lijevo'){
        while($broj<=$stupac*$red){

            for($n=$maxRed;$n>=$minRed;$n--){
                $tablica[$n][$minStup] = $broj++;
            }
            for($m=$minStup+1;$m<=$maxStup;$m++){
                $tablica[$minRed][$m]=$broj++;
            }
            for($n=$minRed+1;$n<=$maxRed;$n++){
                $tablica[$n][$maxStup]=$broj++;
            }
            for($m=$maxStup-1;$m>=$minStup+1;$m--){
                $tablica[$maxRed][$m]=$broj++;
        
            }
            $minStup++;
            $minRed++;
            $maxStup--;
            $maxRed--;
        
        }
    }
    else if($pocetna=='gore-desno'){

        while($broj<=$stupac*$red){

            for($n=$minRed;$n<=$maxRed;$n++){
                $tablica[$n][$maxStup] = $broj++;
            }
            for($m=$maxStup-1;$m>=$minStup;$m--){
                $tablica[$maxRed][$m]=$broj++;
            }
            for($n=$maxRed-1;$n>=$minRed;$n--){
                $tablica[$n][$minStup]=$broj++;
            }
            for($m=$minStup+1;$m<=$maxStup-1;$m++){
                $tablica[$minRed][$m]=$broj++;
            }
            $minStup++;
            $minRed++;
            $maxStup--;
            $maxRed--;

        }

    }
}

?>

<table class="tablica">
<?php 
if(isset($_POST['submit'])){
        for($m=0;$m<$red;)
        {
          echo '<tr>';
            for ($n=0; $n < $stupac;) 
            { 
              echo '<td>'. $tablica[$m][$n] .'</td>';
              $n++;
            }
            echo '</tr>';
            $m++;
        }  
    }
?>
</table>
<?php 
