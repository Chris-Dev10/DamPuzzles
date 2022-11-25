<?php

$conexion = mysqli_connect('localhost','kechzntf_uno','qqlT+w+uyC65','kechzntf_uno');

if(!$conexion){
    echo "error en conexion";
}else{
    echo "todo chido bro";
}

$Nombre = $_POST["Nombre"];
$ApellidoP = $_POST["ApellidoP"];
$ApellidoM = $_POST["ApellidoM"];
$Email = $_POST["Email"];
$Password = $_POST["Password"];
$Calle = $_POST["Calle"];
$NumeroExt = $_POST["NumeroExt"];
$Colonia = $_POST["Colonia"];
$CP = $_POST["CP"];
$Estado = $_POST["Estado"];
$Ciudad = $_POST["Ciudad"];

$query = "INSERT INTO Usuarios (Nombre,ApellidoP,ApellidoM,Email,Password,Calle,NumeroExt,Colonia,CP,Estado,Ciudad) values ('$Nombre','$ApellidoP','$ApellidoM','$Email','$Password','$Calle','$NumeroExt','$Colonia','$CP','$Estado','$Ciudad')";
$resultado = mysqli_query($conexion,$query);

if($resultado){
    echo "registro correctamente";
}else{
    echo "error";
}



?>