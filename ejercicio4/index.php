<!-- Crea un formulario que incluya subida de al menos dos ficheros y que informe del resultado de 
esta subida. Haz un push al classroom.github.com y despliegalo en remoto. -->

<?php
    if(isset($_POST["submit"])){
        foreach ($_FILES as $file) {
            if($file['error']){
                echo "no se ha enviado";
                
            }else if (!move_uploaded_file($file['tmp_name'], 'archivosEnviados/' . $file['name'])) {
            
                echo "Falló"."<br>";
            }else{
                echo"funciona"."<br>";
            }
        }
    }

?>

<html>

    <form method="post" enctype = "multipart/form-data">
        <input type="file" name="archivo1"></input><br>
        <input type="file" name="archivo2"></input><br>
        <input type = 'submit' name = "submit"/>
    </form>

</html>