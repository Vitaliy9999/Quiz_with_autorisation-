<html>

<head>
    <meta charset=UTF-8" />

    <title>PHP Quiz</title>

    <link rel="stylesheet" type="text/css" href="style.css" />
</head>

<body>

<div id="page-wraper">

    <h1 class="results">Ответы</h1>

    <?php

    $answer1 = $_POST['question-1-answers'];
    $answer2 = $_POST['question-2-answers'];
    $answer3 = $_POST['question-3-answers'];
    $answer4 = $_POST['question-4-answers'];
    $answer5 = $_POST['question-5-answers'];

    $totalCorrect = 0;

    if ($answer1 == "A")
    {
        $totalCorrect++;
        echo '<div class="answer"> Вопрос1: <br> Ваш ответ правильный, это Киев';
    }
    else if($answer1 == "B" or $answer1 == "C" or $answer1 == "D")
    {
        echo 'Вопрос1: <br> Ответ неверный: Правильный ответ Киев';
    }


    if ($answer2 == "B")
    {
        $totalCorrect++;
        echo '<br> Вопрос2: <br> Ваш ответ правильный, это Москва';
    }
    else if($answer2 == "A" or $answer2 == "C" or $answer2 == "D")
    {
        echo '<br>Вопрос2: <br> Ответ неверный: Правильный ответ Москва ';
    }


    if ($answer3 == "C")
    {
        $totalCorrect++;
        echo '<br> Вопрос3: <br> Ваш ответ правильный, это Париж';
    }
    else if($answer3 == "A" or $answer3 == "B" or $answer3 == "D")
    {
        echo '<br> Вопрос3: <br> Ответ неверный: Правильный ответ Париж';
    }

    if ($answer4 == "A")
    {
        $totalCorrect++;
        echo '<br> Вопрос4: <br> Ваш ответ правильный, это Мадрид';
    }
    else if($answer4 == "B" or $answer4 == "C" or $answer3 == "D")
    {
        echo '<br> Вопрос4: <br> Ответ неверный: Правильный ответ Мадрид';
    }


    if ($answer5 == "С")
    {
        $totalCorrect++;
        echo '<br> Вопрос5: <br> Ваш ответ правильный, это Рим';
    }
    else if($answer5 == "A" or $answer5 == "B" or $answer5 == "D")
    {
        echo '<br> Вопрос5: <br> Ответ неверный: Правильный ответ Рим';
    }

    echo "<div id='results'>$totalCorrect / 5 правильных ответов</div>";

    ?>

</div>

</body>

</html>

