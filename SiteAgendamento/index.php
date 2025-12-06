<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agendamento</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Agendamento de Horário</h2>

        <form action="salvar.php" method="POST">
            <label for="nomeInput">Nome:</label>
            <input type="text" name="nomeInput" id="nomeInput">

            <label for="telefoneInput">Telefone:</label>
            <input type="text" name="telefoneInput" id="telefoneInput">

            <label for="servicoInput">Serviço:</label>
            <select name="servicoInput" id="servicoInput">
                <option value="">Selecione</option>
                <option value="c">Corte de Cabelo</option>
                <option value="e">Escova</option>
                <option value="m">Manicure</option>
                <option value="p">Pedicure</option>
                <option value="mq">Maquiagem</option>
            </select>
            <label for="DataInput">Data:</label>    
            <input type="date" name="dataInput" id="DataInput" required>

            <label for="horaInput">Hora:</label>    
            <input type="time" name="horaInput" id="horaInput">
            
            <button type="submit">Agendar</button>
        </form>
        <a class="botao-lista" href="listar.php">Ver Agendamento</a>
    </div>
</body>
</html>

<?php
?>