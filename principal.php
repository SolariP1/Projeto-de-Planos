<?php
session_start();
$data = date("d/m/Y");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle hospitalar</title>
    <style>
        body {
            font-family: 'Poppins', sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f0f2f5;
            color: #333;
        }

        header {
            background-color: #4CAF50;
            color: white;
            padding: 20px;
            display: flex;
            align-items: center;
            justify-content: space-between;
        }

        header img {
            border-radius: 50%;
            width: 80px;
        }

        header h1 {
            margin-left: 10px;
            font-size: 2rem;
        }

        nav {
            background-color: #333;
            display: flex;
            justify-content: center;
            padding: 10px;
        }

        nav a {
            color: white;
            text-decoration: none;
            padding: 10px 20px;
            margin: 0 5px;
            border-radius: 25px;
            background-color: #444;
            transition: background-color 0.3s;
        }

        nav a:hover {
            background-color: #08f281;
        }

        section {
            padding: 40px;
            text-align: center;
        }

        section h2 {
            font-size: 2rem;
            margin-bottom: 10px;
        }

        section p {
            font-size: 1.1rem;
            margin: 10px 0;
        }

        footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 15px;
            position: fixed;
            bottom: 0;
            width: 100%;
        }

        @media (max-width: 768px) {
            header {
                flex-direction: column;
                text-align: center;
            }

            header img {
                margin-bottom: 10px;
            }

            nav {
                flex-wrap: wrap;
            }

            nav a {
                margin: 5px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div style="display: flex; align-items: center;">
            <img src="images.png" alt="Logo da Agenda">
            <h1>Controle Hospitalar</h1>
        </div>
    </header>

    <nav>
        <a href="principal.php">Home</a>
        <a href="plano.php">Planos</a>
        <a href="associado.php">Associados</a>
    </nav>

    <section>
        <h2>Bem-vindo ao Controle Hospitalar</h2>
        <p>Aqui você pode gerenciar sua empresa de forma fácil e rápida.</p>
        <p>Data: <?php echo "$data"; ?></p>
    </section>

<footer>
    <p>&copy; 2024 controle hospitalar. Todos os direitos reservados.</p>
</footer>

</body>
</html>
