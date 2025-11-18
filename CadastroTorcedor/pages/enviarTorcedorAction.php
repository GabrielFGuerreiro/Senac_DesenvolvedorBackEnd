<?php
echo "<h1> Dados Enviados </h1>";
echo "<p>Torcedor: " . $_POST['inputNome'] . "</p>";
echo "<p>Gênero: " . $_POST['inputGenero'] . "</p>";
echo "<p>CPF: " . $_POST['inputCPF'] . "</p>";
echo "<p>Frequência: " . $_POST['selectFrequencia'] . "</p>";
echo "<p>Time: " . $_POST['selectTimes'] . "</p>";
echo "<p>É sócio torcedor? " . (isset($_POST['ckBxSocio']) ? "Sim" : "Não") . "</p>";
echo "<p>Possui camisa oficial? " . (isset($_POST['ckBxCamisa']) ? "Sim" : "Não") . "</p>";
?>