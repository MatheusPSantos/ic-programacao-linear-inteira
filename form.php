<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="">
        <script type="text/javascript" src=""></script>
        <title>Formulário | IC</title>
    </head>
    <body>
        <!--Campo de formulário -->
        <div class="">
            <form>
                <h2>Restrição de horário</h2>
                <span class="">Caso NÃO possa assumir aulas em determinados horários da semana por favor informe abaixo.</span>
                <p class="">Restrições</p>
                <!-- require tabela com horários -->
                <?php
                    require 'inc/horarios.php';
                ?>
            </form>
        </div>
    </body>
</html>