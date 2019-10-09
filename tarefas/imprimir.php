<!DOCTYPE html>
<html>
    <body>
        <form action="sucesso.php" method="post">
            Nome: <input type="text" name="nome" id=""><br>
            Email: <input type="text" name="email" id=""><br>
            Quales sao seus intereses?<br> 
                Futbol<input type="checkbox" name="interes" value="futbol"><br>
                Cine<input type="checkbox" name="interes" value="cine"><br>
                Teatro<input type="checkbox" name="interes" value="teatro"><br>
            Qual é o seu género?
                masculino<input type="radio" name="genero" value="masculino"><br>
                Feminino<input type="radio" name="genero" value="feminino"><br>
                Outro<input type="radio" name="genero" value="outro"><br>
            Durmiu bem ontem? De uma nota.
                <select name="dormiu" id="">
                    <?php 
                        for($i = 0; $i <= 10; $i++) { ?>
                        <option value="<?php $i ?>"><?php echo $i?></option>
                    <?php    } ?>
                </select><br>
            <input type="checkbox" name="condicoes">Aceito os termos e condicoes<br>
            <button type="submit">Enviar</button>
        </form>
    </body>
</html>   

<!-- Opción alternativa 
    <?php 
        $calificaciones = range(0,10);
        foreach($calificaciones as $calificacion) { ?>
        <option value="<?php $calificacion ?>"><?php echo $calificacion ?></option>
<?php    } ?> -->


<?php 

    echo "<h4>"."Ejercicio B"."</h4>";
    var_dump($_GET);
    echo "<br>".$_GET['nome']."<br>";
    echo $_GET['email'];
    echo "<h4>"."Ejercicio c"."</h4>";
    foreach ($_GET as $key => $value) {
        echo "$key : $value <br>";
    }


// ---------- Ejercicio 5 ---------- //

    foreach (getallheaders() as $key => $value) {
        echo "$key : $value";
    }

// ----- ¿Para qué sirve esto de arriba? -------//

// -------- Ejercicio 6 ----------- //

var_dump($_SESSION);

?>


