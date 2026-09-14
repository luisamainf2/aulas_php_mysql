<?php
$conn = mysqli_connect("localhost", "root", "", "locadora");
if ($conn -> connect_error) {
    die("falha na conexão: " . $conn->connect_error);
}else{
    echo "tudo ok";
}
