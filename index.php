<?php
error_reporting(1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ciklička tablica - PHP</title>
    <link rel="stylesheet" href="assets/css/foundation.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="naslov">
    <h2>SPIRALNA TABLICA</h2>
        <div class="objasnjenje1">
            <p> Korisnik unosi dva polja: broj redova i broj <br>stupaca. 
            Ispod postoji gumb "KREIRAJ<br> TABLICU". Nakon submita, pored navedene <br>
            forme se prikazuje tablica zatraženih dimenzija <br> 
            gdje su polja popunjena brojevima. Brojevi su <br>
            popunjeni sljedećom logikom:</p>
        </div>
        <p class="objasnjenje2">
            + BROJ 1 SE NALAZI U DONJEM DESNOM KUTU 
            <br>
            + POLJA TABLICE SE POPUNJAVAJU SPIRALNO <br> CIKLIČKI U KRUG U SMJERU KAZALJKE NA SATU
        </p>
    </div>
<div class="input"> INPUT </div>
<div>
<form action="" method="post" class="form" >
<div>
  <label for="pocetnapoz"><p class="pocetnapoz">Početna pozicija </p></label>
          <select name="pocetnapoz">
            <option value="dolje-desno">Dolje desno</option>
            <option value="dolje-lijevo">Dolje lijevo</option>
            <option value="gore-desno">Gore desno</option>
            <option value="gore-lijevo">Gore lijevo</option>
          </select>
  </div>
  <div>
    <label for="red" class="brojredaka">Broj redaka</label>
      <input type="text" name="red" class="red" value="<?php echo $_POST['red'];?>">
  </div>  
  <div>
  <label for="stupac" class="brojstupaca">Broj stupaca</label>
  <input type="text" name="stupac" class="stupac" value="<?php echo $_POST['stupac'];?>">
  </div>
    <div>
        <input type="submit" name="submit" class="button expand" value="KREIRAJ TABLICU"/>
    </div>
    </form>
  </div>
<div class="output"> OUTPUT </div> 

<?php 
    include 'funkcije.php';
    if(inputCheck()==1){
      echo "<p class='funkcija'> Unesite željene podatke..</p>";
    }
    else if (inputEmpty()==1){
      echo "<p class='funkcija'> Niste unjeli podatke!</p>";
    }
    else if(aboveZero()==1){
      echo "<p class='funkcija'> Podaci moraju biti veći od nula!</p>";
    }
    else if(correctInput()==1){
      echo "<p class='funkcija'> Uneseni podaci moraju biti brojevi!</p>";
    }
    else {
      echo "<p class='funkcija'> Unesite nove podatke..</p>";
      include 'matrix.php';
    }
?>
</div>  

<script src="assets/js/vendor.js"></script>
<script src="assets/js/foundation.js"></script>
<script src="assets/js/app.js"></script>
</body>
</html>