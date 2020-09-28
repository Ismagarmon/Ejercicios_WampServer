<?php
include 'head.php';
echo'<form name="formu1" action="calcular.php" method="POST">
    <center><h1>PRESUPUESTO </H1></center>
    <br>
    Introduce el Precio Base del coche:
    <input type="text" name="precio_base" value="0" size="5" />
    <br>
    <br>
    Elige el Tipo de Motor:
    <select name="Motor">
        <option value="0">Gasolina
        <option value="1500" selected>Diesel 
        <option value="3000">Hibrido
    </select>
<br>
<br>
Elige el Modelo :
            <select name="Modelo">
                <option value ="2000">3 Puertas
                <option value="0" selected>5 Puertas
                <option value ="1500">Familiar
            </select>
            <br>
            <br>
            <fieldset>
            <legend>Selecciona un Color:</legend>
          
            
            <input type="radio" name="color" value="0" checked="checked" />Blanco <br>  <!--Siempre hay que tener alguna checkeada-->
            <input type="radio" name="color" value="1000" />Pintura  Mate <br>
            <input type="radio" name="color" value="700" />Pintura Metalizada <br>
            
            </fieldset>
            <br>
             <fieldset>
            <legend>Selecciona otros Complementos:</legend>
            
            
           
            <input type="checkbox" id="LLantas" name="LLantas" value="200" />LLantas de Aleación
            <br>
            <input type="checkbox" id="Climatizacion" name="Climatizacion" value="800" />Climatizacion 
            <br> 
            <input type="checkbox" id="GPS" name="GPS" value="340" />GPS
            <br>
            <input type="checkbox" id="DVD" name="DVD" value="800" />DVD 
             </fieldset>
             <br>
            <input type="submit" value="Calcular Precio" name="BotonCalcular" />
</form>';
	
include 'pie.php';
