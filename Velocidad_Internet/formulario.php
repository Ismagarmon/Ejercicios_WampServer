<?php
include 'head.php';
echo'<form name="formu1" action="convertir.php" method="POST">
    <center><h1>Megabits a Megabytes Calculadora de Conversión
    </H1></center>
    <br>
    Introduce el Nº de megabit:
    <input type="text" name="n_megabit" value="" size="5" />
    <br>
    
             <br>
            <input type="submit" value="Convertir" id ="convertir" name="convertir" />
            <input type="reset" value="Borrar">
</form>';
	
include 'pie.php';
