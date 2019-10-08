<!DOCTYPE HTML>
<html>
<style type="text/css">
    .login {
        height: 180px;
        width: 230px;
        margin: 0;
        padding: 10px;
        border: 1px #CCC solid;
    }
    .login input {
        padding: 5px;
        margin: 5px
    }
</style>
<body>
<form method="post">
    <div class="login">
        <h2>Simple Calculator</h2>
        <input type="text" name="first" size="15" placeholder=""/>
        <select name="operator">
            <option value="+">+</option>
            <option value="-">-</option>
            <option value="*">*</option>
            <option value="/">/</option>
        </select>
        <input type="text" name="second" size="15" placeholder=""/>
        <input type="submit" value="Calculator"/>

    </div>
    <?php
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        $first = $_POST['first'];
        $second = $_POST['second'];
        $operator = $_POST["operator"];
        if ($operator == '+') {
            echo $z = $first + $second;
        } else if ($operator == '-') {
            echo $z = $first - $second;
        } else if ($operator == '*') {
            echo $z = $first * $second;
        } else if ($operator == '/') {
            echo $z = $first / $second;
        }
    }
    ?>
