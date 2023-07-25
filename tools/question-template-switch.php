<?php
    include 'questions/questions.php';

    $data = nextQuestionData();

    switch($data["type"])
        {
            case "range":
                include "templates/template-range-slider.php";
                break;

            case "radio":
                include "templates/template-radio-buttons.php";
                break;

            case "checkbox":
                include "templates/template-checkbox.php";
                break;

            case "number":
                include "templates/template-number.php";
                break;
            
        }