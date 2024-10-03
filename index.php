<!doctype html>
<html lang="pt">
<?php
$is_index = true;
$is_show_zodiac = false;
include('layouts/header.php')
?>
<body class="index-page">
<div class="container text-center mt-5">
    <h1 class="index-title">Descubra Seu Signo Zodiacal</h1>
    <p class="index-description">Insira sua data de nascimento e descubra o que os astros dizem sobre você!</p>
    <form id="signo-form" method="POST" action="show_zodiac_sign.php">
        <div class="form-group mb-3">
            <input type="date" class="form-control" id="data_nascimento" name="data_nascimento" required>
        </div>
        <button type="submit" class="btn btn-primary btn-lg">Descobrir Signo</button>
    </form>
</div>
</body>
</html>