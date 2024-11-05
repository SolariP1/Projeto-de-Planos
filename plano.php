<?php
session_start();
$data = date("d/m/Y");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Controle de Planos</title>
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
            padding: 20px;
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

        .descricao {
        width: 245px;
        }
    </style>

<script>
        function consultarPlano() {
            const id = document.getElementById("id").value;

            if (id === "") {
                alert("Por favor, insira um ID.");
                return;
            }

            const xhr = new XMLHttpRequest();
            xhr.open("POST", "plano_consulta.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");

            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    const response = JSON.parse(xhr.responseText);

                    if (response.success) {
                        document.getElementById("nome").value = response.nome;
                        document.getElementById("descricao").value = response.descricao;
                        document.getElementById("valor").value = response.valor;
                    } else {
                        alert("Nenhum registro encontrado para o ID fornecido.");
                    }
                }
            };

            xhr.send("id=" + id);
        }
    </script>
</head>
<body>
    <header>
        <div style="display: flex; align-items: center;">
            <img src="images.png" alt="Logo da Agenda">
            <h1>Controle de Planos</h1>
        </div>
    </header>

    <nav>
        <a href="principal.php">Home</a>
        <a href="plano.php">Planos</a>
        <a href="associado.php">Associados</a>
    </nav>

    <section>
        <div class="plano-container">
            <h2>Cadastrar Plano Hospitalar</h2>
            <form>
                <input type="text" name="id" id="id" placeholder="Ex: 1">
                <button type="button" onclick="consultarPlano()">Consultar</button>
                <p></p>
                <input type="text" class="descricao" name="nome" id="nome" placeholder="Ex: Convênio" required>
                <p></p>
                <input type="text" class="descricao" name="descricao" id="descricao" placeholder="Descrição" required>
                <p></p>
                <input type="text" class="descricao" name="valor" id="valor" placeholder="Valor" required>
                <p></p>
                <button type="submit" formaction="plano_insert.php" formmethod="POST">Inserir</button>
                <button type="button">Alterar</button>
                <button type="button">Excluir</button>
                <button type="button" onclick="window.location.href='principal.php'">Sair</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 controle hospitalar. Todos os direitos reservados.</p>
    </footer>

</body>
</html>