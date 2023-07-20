<?php

$questions = array(
    array(
        "question-text" => "How healthy are you physically?",
        "instruction" => "Rate your overall physical health",
        "type" => "range",
        "labels" => array("Error", "Potato", "Minimi", "Healthy", "Superman"),
        "min" => 0,
        "max" => 4,
        "step" => 1,
        "value" => -1,
    ),
    array(
        "question-text" => "Do you take nutritional supplements?",
        "type" => "radio",
        "values" => array("Yes", "No"),
    ),
    array(
        "question-text" => "How important is physical activity to you?",
        "instruction" => null,
        "type" => "range",
        "labels" => array("Error", "Netflix and Chill", "Coder", "a bit", "Very"),
        "min" => 0,
        "max" => 4,
        "step" => 1,
        "value" => -1,
    ),
    array(
        "question-text" => "What additional physical activity do you do most?",
        "type" => "checkbox",
        "values" => array("Lifting weights", "Walking", "Jogging", "Running", "Swimming", "Dancing", "Aerobics", "Pilates", "Team sports", "Other"),
    ),
    array(
        "question-text" => "Do you feel you do too little, just enough or too much additional physical activity?",
        "instruction" => null,
        "type" => "range",
        "labels" => array("Error", "Fat and Happy", "Far too little", "just right", "far too much"),
        "min" => 0,
        "max" => 4,
        "step" => 1,
        "value" => -1,
    ),
    array(
        "question-text" => "On a typical day, how many of your meals or snacks contain carbohydrates?",
        "type" => "number",
    ),
    array(
        "question-text" => "On a typical day, how many of your meals or snacks contain protein?",
        "type" => "number",
    ),
    array(
        "question-text" => "On a typical day, how many of your meals or snacks contain vegetables?",
        "type" => "number",
    ),
    array(
        "question-text" => "On a typical day, how many of your meals or snacks contain fruit?",
        "type" => "number",
    ),
    array(
        "question-text" => "On a typical day, how many of your meals are microwaved or prepared?",
        "type" => "number",
    )
);



define("QUESTIONS",$questions);

function nextQuestionData()
    {
        if (isset($_POST["questionIndex"]))
        {
            $questionIndex = $_POST["questionIndex"];

        }
        else
        {
            $questionIndex = -1;

        }

        $questionIndex = $questionIndex + 1;

        $data = QUESTIONS[$questionIndex];
        
        $data["questionIndex"] = $questionIndex;

        if ($questionIndex + 1 < count(QUESTIONS))
            {
                $data["action"] =  "./question.php";
            }

        else
            {
                $data["action"] = "./feedback.php";
            }

        return $data;

    }

?>