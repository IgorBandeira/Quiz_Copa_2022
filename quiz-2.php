<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="css/quiz-2.css" />
  <link rel="icon" type="image/png" sizes="16x16" href="./imagens/favicon-32x32.png">
  <title>Quiz - Copa do Mundo 2022</title>
</head>

<body>
  <form action="final.php" method="post">
    <button class="btn" type="submit">ENCERRAR</button>

    <h1>Confira seu Desempenho!</h1>
    <?php
    $Questions = array(
      1 => array(
        'Question' => '1. Qual é o maior artilheiro brasileiro das Copas do Mundo?',
        'Answers' => array(
          'A' => 'Ronaldo Fenômeno',
          'B' => 'Pelé',
          'C' => 'Romário',
          'D' => 'Neymar'
        ),
        'CorrectAnswer' => 'A'
      ),
      2 => array(
        'Question' => '2. Em qual ano o  Brasil foi campeão de uma Copa do Mundo pela primeira vez?',
        'Answers' => array(
          'A' => '1962',
          'B' => '1958',
          'C' => '1970',
          'D' => '1974'
        ),
        'CorrectAnswer' => 'B'
      ),

      3 => array(
        'Question' => '3. Quantas Copas do Mundo foram sediadas no Brasil?',
        'Answers' => array(
          'A' => '1',
          'B' => '2',
          'C' => '3',
          'D' => '4',
        ),
        'CorrectAnswer' => 'B'
      ),

      4 => array(
        'Question' => '4. Quantas Copas do Mundo o Pelé ganhou?',
        'Answers' => array(
          'A' => '2',
          'B' => '3',
          'C' => '1',
          'D' => '4'
        ),
        'CorrectAnswer' => 'B'
      ),

      5 => array(
        'Question' => '5. Qual era o técnico do Brasil que venceu a Copa do Mundo de 2002?',
        'Answers' => array(
          'A' => 'Parrera',
          'B' => 'Telê Santana',
          'C' => 'Zagallo',
          'D' => 'Felipão'
        ),
        'CorrectAnswer' => 'D'
      ),

      6 => array(
        'Question' => '6. Qual seleção foi responsável pela pior derrota do Brasil nas Copas do Mundo?',
        'Answers' => array(
          'A' => 'Espanha',
          'B' => 'Alemanha',
          'C' => 'Itália',
          'D' => 'França'
        ),
        'CorrectAnswer' => 'B'
      ),

      7 => array(
        'Question' => '7. Em qual estádio o Brasil estreou na Copa do Mundo de 2014?',
        'Answers' => array(
          'A' => 'Morumbi',
          'B' => 'Maracanã',
          'C' => 'Arena Corinthians',
          'D' => 'Mineirão'
        ),
        'CorrectAnswer' => 'C'
      ),

      8 => array(
        'Question' => '8. Qual foi o mascote oficial da Copa do Mundo de 2014?',
        'Answers' => array(
          'A' => 'Arara-Azul',
          'B' => 'Mico-Leão-Dourado',
          'C' => 'Canarinho',
          'D' => 'Tatu-Bola'
        ),
        'CorrectAnswer' => 'D'
      ),

      9 => array(
        'Question' => '9. De quantas finais de Copa do Mundo o Brasil participou ?',
        'Answers' => array(
          'A' => '6',
          'B' => '8',
          'C' => '7',
          'D' => '5'
        ),
        'CorrectAnswer' => 'C'
      ),

      10 => array(
        'Question' => '10. Qual é o placar da maior goleada aplicada pelo Brasil em uma Copa do Mundo?',
        'Answers' => array(
          'A' => 'Brasil 6 x 1 Espanha',
          'B' => 'Brasil 8 x 0 China',
          'C' => 'Brasil 5 x 0 México',
          'D' => 'Brasil 7 x 1 Suécia '
        ),
        'CorrectAnswer' => 'D'
      ),
      11 => array(
        'Question' => '11. Quantas finais de Copas o Brasil perdeu?',
        'Answers' => array(
          'A' => '1 final',
          'B' => '2 finais',
          'C' => '3 finais',
          'D' => '4 finais'
        ),
        'CorrectAnswer' => 'B'
      ),
      12 => array(
        'Question' => '12. Qual desses jogadores não ganhou nenhuma Copa do mundo?',
        'Answers' => array(
          'A' => 'Zico',
          'B' => 'Roberto Carlos',
          'C' => 'Pelé',
          'D' => 'Ronaldo'
        ),
        'CorrectAnswer' => 'A'
      ),

      13 => array(
        'Question' => '13. De qual seleção era o jogador que machucou o Neymar em 2014?',
        'Answers' => array(
          'A' => 'Camarões',
          'B' => 'Chile',
          'C' => 'Colômbia',
          'D' => 'Alemanha',
        ),
        'CorrectAnswer' => 'C'
      ),

      14 => array(
        'Question' => '14. Em qual Copa do Mundo o Galvão gritou "É TETRAAAAAAAAAA"?',
        'Answers' => array(
          'A' => '1998',
          'B' => '2002',
          'C' => '1970',
          'D' => '1994'
        ),
        'CorrectAnswer' => 'D'
      ),

      15 => array(
        'Question' => '15. Qual o veradeiro nome do atual técnico da seleção?',
        'Answers' => array(
          'A' => 'Tiago',
          'B' => 'Timóteo',
          'C' => 'Teógenes',
          'D' => 'Adenor'
        ),
        'CorrectAnswer' => 'D'
      ),

      16 => array(
        'Question' => '16. Em qual Copa do Mundo o Brasil não participou?',
        'Answers' => array(
          'A' => '1954',
          'B' => '1950',
          'C' => 'O Brasil nunca ficou de fora de uma Copa',
          'D' => '1982'
        ),
        'CorrectAnswer' => 'C'
      ),

      17 => array(
        'Question' => '17. Qual era o goleiro do Brasil no penta-campeonato?',
        'Answers' => array(
          'A' => 'Zeti',
          'B' => 'Marcos',
          'C' => 'Rogério Ceni',
          'D' => 'Júlio César'
        ),
        'CorrectAnswer' => 'B'
      ),

      18 => array(
        'Question' => '18. Qual animal foi usado de mascote pelo Brasil na Copa do Mundo de 2018?',
        'Answers' => array(
          'A' => 'Arara-Azul',
          'B' => 'Mico-Leão-Dourado',
          'C' => 'Canarinho',
          'D' => 'Tatu-Bola'
        ),
        'CorrectAnswer' => 'C'
      ),

      19 => array(
        'Question' => '19. Quais são as cores dos uniformes principal e secundário do Brasil na Copa do Mundo de 2022?',
        'Answers' => array(
          'A' => 'Amarelo e Azul',
          'B' => 'Amarelo e Verde',
          'C' => 'Amarelo e Branco',
          'D' => 'Amarelo e Preto'
        ),
        'CorrectAnswer' => 'A'
      ),

      20 => array(
        'Question' => '20. Qual era o nome da bola usada na Copa do Mundo de 2014, no Brasil?',
        'Answers' => array(
          'A' => 'TEAMGEIST',
          'B' => 'JABULANI',
          'C' => 'BRAZUCA',
          'D' => 'TELSTAR 18'
        ),
        'CorrectAnswer' => 'C'
      ),
    );

    $counter = 0;
    if (isset($_POST['answers'])) {
      $Answers = $_POST['answers'];

      foreach ($Questions as $QuestionNo => $Value) {

        echo $Value['Question'] . '<br />';

        if ($Answers[$QuestionNo] != $Value['CorrectAnswer']) {
          echo 'Você marcou: <span style="color: red;">' . $Value['Answers'][$Answers[$QuestionNo]] . '</span><br>';
          echo 'Resposta correta: <span style="color: green;">' . $Value['Answers'][$Value['CorrectAnswer']] . '</span>';
        } else {
          echo 'Você marcou: <span style="color: green;">' . $Value['Answers'][$Answers[$QuestionNo]] . '</span><br>';
          echo 'Resposta correta: <span style="color: green;">' . $Value['Answers'][$Answers[$QuestionNo]] . '</span>';
          $counter++;
        }

        echo '<br /><hr>';
        if ($counter == "") {
          $counter = '0';
          $results = "Sua pontuação: $counter/20";
        } else {
          $results = "Sua pontuação: $counter/20";
        }
        if ($counter <= 5) {
          $coment = "Você foi péssimo! 😔";
        } elseif ($counter <= 10) {
          $coment = "Você foi bem mais ou menos! 😟";
        } elseif ($counter <= 15) {
          $coment = "Você foi muito bem! 😀";
        } else {
          $coment = "Você foi incrível! 🏆";
        }
      }
      echo $results . '<br>';
      echo $coment;
    } else {
    ?>
      <form action="quiz-2.php" method="post">
        <?php foreach ($Questions as $QuestionNo => $Value) { ?>

          <h3><?php echo $Value['Question']; ?></h3>
          <?php
          foreach ($Value['Answers'] as $Letter => $Answer) {
            $Label = 'question-' . $QuestionNo . '-answers-' . $Letter;
          ?>
            <div>
              <input required type="radio" name="answers[<?php echo $QuestionNo; ?>]" id="<?php echo $Label; ?>" value="<?php echo $Letter; ?>" />
              <label for="<?php echo $Label; ?>"><?php echo $Letter; ?>) <?php echo $Answer; ?> </label>
            </div>
          <?php } ?>

        <?php } ?>
        <input type="submit" name="nome" />
      </form>
    <?php
    }
    ?>
</body>

</html>