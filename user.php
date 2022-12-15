<?php
 require_once "conexao.php";
?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Usuarios</title>
    <style>
        table{
            border-spacing: 0;
            margin: auto;
        }
        table tr:nth-child(1){
            background-color: #333;
            color: #fff;
        }
        table td{
            padding: 10px;
        }
    </style>
</head>
<body>
    <table>
    <tr>
        <td>Nome</td>
        <td>Email</td>
        <td>Gênero</td>
    </tr>
    <?php
            $query = $pdo -> prepare("SELECT * FROM alunos");
            $query -> execute();
            while($row_query = $query -> fetch(PDO::FETCH_ASSOC)):
                extract($row_query);
        ?>
    <tr>
        <td><?= $nome?></td>
        <td><?= $email?></td>
        <td><?= $genero?></td>
    </tr>
    <?php endwhile?>

    </table>
</body>
</html>