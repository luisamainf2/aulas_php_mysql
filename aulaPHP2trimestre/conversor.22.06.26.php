<?php
?>
<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>

    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        body{
            background: linear-gradient(135deg, #a1059e, #ff97fd);
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        form{
            background: white;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 10px 25px rgba(0,0,0,0.2);
            width: 350px;
            display: flex;
            flex-direction: column;
            gap: 15px;
        }

        h2{
            text-align: center;
            color: #333;
            margin-bottom: 10px;
        }

        input[type="text"]{
            padding: 12px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 16px;
            transition: 0.3s;
        }

        input[type="text"]:focus{
            border-color: #ff71fd;
            outline: none;
        }

        input[type="submit"]{
            background: #ff71fd;
            color: white;
            border: none;
            padding: 12px;
            border-radius: 8px;
            cursor: pointer;
            font-size: 16px;
            transition: 0.3s;
        }

        input[type="submit"]:hover{
            background: #a1059e;
        }
    </style>
</head>
<body>

<form action="">
    <h2>Conversor</h2>

    <input type="text" id="temp" placeholder="Temperatura">
    <input type="text" placeholder="Escala de origem">
    <input type="text" placeholder="Escala de destino">

    <input type="submit" value="Converter">
</form>

</body>
</html>
