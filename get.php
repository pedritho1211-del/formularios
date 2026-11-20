<?php
if(isset($_GET['nombre'])){
    echo "hola," .$_GET['nombre'];
}else{
    echo "No se recibio ningun nombre";
}
?>