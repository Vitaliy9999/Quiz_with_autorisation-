<html>
<head>
    <link rel="stylesheet" type="text/css" href="style.css" />
</head>


<h1 class="registerhead">Заполнение формы валидации</h1>
<body class="bodyregister">
    <form action="quiz.php" class="formclass" method="POST">
        <p class="pregister">Фамилия</p> <input class="registerinput" placeholder="фамилия" name="surname" type="text" required><br>
        <p class="pregister">Имя </p><input class="registerinput" placeholder="имя" name="name" type="text" required><br>
        <p class="pregister">Отчество</p> <input class="registerinput" placeholder="отчество" name="names" type="text" required><br>
        <input class="buttonregister" name="submit" type="submit" value="Зарегистрироваться">
    </form>

</body>
</html>

