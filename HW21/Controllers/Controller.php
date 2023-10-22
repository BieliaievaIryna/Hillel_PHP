<?php

class Controller
{
    /**
     * @return void
     */
    public function methodGet(): void
    {
        echo 'Hello!';
    }

    /**
     * @return void
     */
    public function methodPost(): void
    {
        if (!isset($_POST['num1']) || !isset($_POST['num2'])) {
            echo 'Please, enter two numbers!';
            return;
        }

        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        if(!is_numeric($num1) || !is_numeric($num2)) {
            echo 'Please, enter the number!';
            return;
        }

        echo "Result: " . ($num1 + $num2);
    }
}