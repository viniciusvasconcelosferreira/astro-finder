<!doctype html>
<html lang="pt">
<?php
$is_index = false;
$is_show_zodiac = true;
include('layouts/header.php')
?>
<body class="show-zodiac-page">
<?php
function tirarAcentos($string)
{
    return preg_replace(
        array(
            "/(á|à|ã|â|ä)/", "/(Á|À|Ã|Â|Ä)/",
            "/(é|è|ê|ë)/", "/(É|È|Ê|Ë)/",
            "/(í|ì|î|ï)/", "/(Í|Ì|Î|Ï)/",
            "/(ó|ò|õ|ô|ö)/", "/(Ó|Ò|Õ|Ô|Ö)/",
            "/(ú|ù|û|ü)/", "/(Ú|Ù|Û|Ü)/",
            "/(ñ)/", "/(Ñ)/"
        ),
        explode(" ", "a A e E i I o O u U n N"), $string
    );
}

$data_nascimento = $_POST['data_nascimento'];
$signos = simplexml_load_file("signos.xml");
$ano_atual = date('Y');
$data_nascimento_formatada = date('Y-m-d', strtotime($ano_atual . '-' . date('m-d', strtotime($data_nascimento))));
$signo_usuario = '';
$signo_descricao = '';

foreach ($signos->signo as $signo) {
    $start_date = date('Y-m-d', strtotime(str_replace('/', '-', $signo->dataInicio . '/' . $ano_atual)));
    $end_date = date('Y-m-d', strtotime(str_replace('/', '-', $signo->dataFim . '/' . $ano_atual)));

    if ($start_date > $end_date) {
        if (($data_nascimento_formatada >= $start_date && $data_nascimento_formatada <= $ano_atual . '-12-31') ||
            ($data_nascimento_formatada >= $ano_atual . '-01-01' && $data_nascimento_formatada <= $end_date)) {
            $signo_usuario = $signo->signoNome;
            $signo_descricao = $signo->descricao;
            break;
        }
    } else {
        if ($data_nascimento_formatada >= $start_date && $data_nascimento_formatada <= $end_date) {
            $signo_usuario = $signo->signoNome;
            $signo_descricao = $signo->descricao;
            break;
        }
    }
}
?>
<div class="container text-center mt-5">
    <div class="card mx-auto shadow" style="width: 25rem;">
        <div class="card-body">
            <h1 class="card-title text-uppercase">
                Seu signo é: <?php echo $signo_usuario; ?>
            </h1>
            <p class="card-text mt-3">
                <img src="assets/imgs/<?php echo strtolower(tirarAcentos($signo_usuario)); ?>.png" alt="Imagem do signo"
                     class="img-fluid mb-3" style="max-height: 150px;">
            </p>
            <p class="lead">
                <?php echo $signo_descricao; ?>
            </p>
            <a href="index.php" class="btn btn-primary mt-3">Descobrir outro signo</a>
        </div>
    </div>
</div>
</body>
</html>