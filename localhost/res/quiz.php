
<html>
<head>
    <meta charset=UTF-8" />

    <title>PHP QUIZ</title>

    <link rel="stylesheet" type="text/css" href="style.css" />

</head>

<body>

<?php
//
//    $surname = filter_var(trim($_POST['surname']),
//    FILTER_SANITIZE_STRING);
//    $name = filter_var(trim($_POST['name']),
//    FILTER_SANITIZE_STRING);
//    $names = filter_var(trim($_POST['names']),
//    FILTER_SANITIZE_STRING);
//
//
//
//    $mysql = new mysqli_connect('localhost','root','root','register');
//    $mysql -> query("INSERT INTO `users` ('surname','name','names')
//    VALUES ('$surname','$name','$names')");
//    $mysql->close();
//
//?>


<div id="page-wrap">

    <h1 class="quizheader">Задание Викторина</h1>

    <form action="result.php" method="post" id="quiz">

        <?php
        if ($_SERVER["REQUEST_METHOD"] == "GET") {

            if (empty($_GET["mins"])) {
                $mins = 2;
            }
            else {
                $mins = $_GET["mins"];
            }
            if (empty($_GET["secs"])) {
                $secs = 0;
            }
            else {
                $secs = $_GET["secs"];
            }

        }
        ?>

        <script type="text/javascript">
            function countDown(mins,secs) {

                var secelem = document.getElementById("sec");
                secelem.innerHTML = (secs<10 ? "0":"") +  secs + " secs";
                var minelem = document.getElementById("min");
                minelem.innerHTML = (mins<2 ? "0":"") +  mins + " mins";


                if(secs < 1) {
                    if(mins < 1 && flag <1) {
                        clearTimeout(timer)
                    }
                    else if (mins <1)
                    {
                        flag --;
                        mins = 60;
                    }
                    secs = 60;
                    mins--;

                }
                secs--;


                var timer = setTimeout(function(){countDown(mins,secs);},50);
            }
        </script>
        <div  class="btn-group btn-group-justified clock" role="group" aria-label="Justified button group">

            <div id="min" class="btn btn-default" role="button"><? echo $mins; ?> mins</div>
            <div id="sec" class="btn btn-success" role="button"><? echo $secs; ?> secs</div>
        </div>
        <script type="text/javascript">countDown(<? echo $mins; ?>,<? echo $secs; ?>);</script>



        <ol >

            <li class="liquiz1">

                <h3>Какая столица Украины?</h3>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-A" value="A" />
                    <label for="question-1-answers-A">A) Киев </label>
                </div>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-B" value="B" />
                    <label for="question-1-answers-B">B) Москва</label>
                </div>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-C" value="C" />
                    <label for="question-1-answers-C">C) Берлин</label>
                </div>

                <div>
                    <input type="radio" name="question-1-answers" id="question-1-answers-D" value="D" />
                    <label for="question-1-answers-D">D) Прага</label>
                </div>

            </li>

            <li class="liquiz1">

                <h3>Какая столица России ?</h3>

                <div>
                    <input type="radio" name="question-2-answers" id="question-2-answers-A" value="A" />
                    <label for="question-2-answers-A">A) Киев</label>
                </div>

                <div>
                    <input type="radio" name="question-2-answers" id="question-2-answers-B" value="B" />
                    <label for="question-2-answers-B">B) Москва</label>
                </div>

                <div>
                    <input type="radio" name="question-2-answers" id="question-2-answers-C" value="C" />
                    <label for="question-2-answers-C">C) Варшава</label>
                </div>

                <div>
                    <input type="radio" name="question-2-answers" id="question-2-answers-D" value="D" />
                    <label for="question-2-answers-D">D) Париж</label>
                </div>

            </li>

            <li class="liquiz1">

                <h3>Какая столица Франции ?</h3>

                <div>
                    <input type="radio" name="question-3-answers" id="question-3-answers-A" value="A" />
                    <label for="question-3-answers-A">A) Берлин</label>
                </div>

                <div>
                    <input type="radio" name="question-3-answers" id="question-3-answers-B" value="B" />
                    <label for="question-3-answers-B">B) Прага</label>
                </div>

                <div>
                    <input type="radio" name="question-3-answers" id="question-3-answers-C" value="C" />
                    <label for="question-3-answers-C">C) Париж</label>
                </div>

                <div>
                    <input type="radio" name="question-3-answers" id="question-3-answers-D" value="D" />
                    <label for="question-3-answers-D">D) Мадрид</label>
                </div>

            </li>

            <li class="liquiz1">

                <h3>Какая столица Испании ?</h3>

                <div>
                    <input type="radio" name="question-4-answers" id="question-4-answers-A" value="A" />
                    <label for="question-4-answers-A">A) Мадрид</label>
                </div>

                <div>
                    <input type="radio" name="question-4-answers" id="question-4-answers-B" value="B" />
                    <label for="question-4-answers-B">B) Вена</label>
                </div>

                <div>
                    <input type="radio" name="question-4-answers" id="question-4-answers-C" value="C" />
                    <label for="question-4-answers-C">C) Минск</label>
                </div>

                <div>
                    <input type="radio" name="question-4-answers" id="question-4-answers-D" value="D" />
                    <label for="question-4-answers-D">D) Киев</label>
                </div>

            </li>

            <li class="liquiz1">

                <h3>Какая столица Италии ?</h3>

                <div>
                    <input type="radio" name="question-5-answers" id="question-5-answers-A" value="A" />
                    <label for="question-5-answers-A">A) Рига</label>
                </div>

                <div>
                    <input type="radio" name="question-5-answers" id="question-5-answers-B" value="B" />
                    <label for="question-5-answers-B">B) Амстердам</label>
                </div>

                <div>
                    <input type="radio" name="question-5-answers" id="question-5-answers-C" value="C" />
                    <label for="question-5-answers-C">C) Рим</label>
                </div>

                <div>
                    <input type="radio" name="question-5-answers" id="question-5-answers-D" value="D" />
                    <label for="question-5-answers-D">D) Лондон</label>
                </div>

            </li>

        </ol>

        <input type="submit" value="Отправить" class="submitbtn" />

    </form>

</div>


</body>

</html>