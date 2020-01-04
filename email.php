<?php

$nombre=$_POST['nombre'];
$email=$_POST['email'];
$telefono=$_POST['telefono'];
$mensaje=$_POST['mensaje'];
if($nombre!=" " or $email!=" " or $telefono=" " or  $mensaje!=" "){
$empresa="LIAN WEB <andrea.salazar@liangroup.com.co>";

                                    $sfrom="MENSAJE WEB <andrea.salazar@liangroup.com.co>"; //cuenta que envia
									$sdestinatario="$email"; //cuenta destino
									$ssubject="Grupo Empresarial LIAN";
									$msnemail="Alguien quiere contactar con Grupo Empresarial LIAN, esta es la informacion de contacto<br><br><strong>Nombre:<strong>$nombre<br><strong>Email</strong>:$email<br><strong>Tel&eacute;fono</strong>: $telefono <br><strong>Mensaje</strong>: $mensaje";
									
									$sheader="From:".$sfrom."\nReply-To:".$sfrom."\n";
									$sheader=$sheader."X-Mailer:PHP/".phpversion()."\n";
									$sheader=$sheader."Mime-Version: 1.0\n";
									$sheader=$sheader."Content-Type: text/html";
									mail($sdestinatario,$ssubject,$msnemail,$sheader);
									mail($sfrom,$ssubject,$msnemail,$sheader);


?>
<script>alert ('Mensaje enviado. Gracias por escribirnos!.');</script>
<meta http-equiv="refresh" content="10; url=https://www.liangroup.com.co/index.html">
<?php

}
?>

