<?php

//Q list
define("QUESTIONS", array(
    array(
        "question-text" => "Wie gesund bist du körperlich?",
        "instruction"   => "Schätze deine Gesundheit mit dem Slider ein.",
        "type"          => "range",
        "min"           => -1,
        "max"           => 5,
        "step"          => 1,
        "value"         => -1,
        "labels"        => array("ungesund", "so lala", "sehr gesund")
    ),
    array(
        "question-text" => "Nimmst du Nahrungsergänzungsmittel?",
        "type"          => "radio",
        "values"        => array(
            "Nein", "Ja"
        )
    ),
    array(
        "question-text" => "Wie wichtig ist körperliche Aktivität für dich?",
        "instruction"   => "Überhaupt nicht wichtig / Sehr wichtig",
        "type"          => "range",
        "min"           => 1,
        "max"           => 5,
        "step"          => 1,
        "value"         => 1,
        "labels"        => array("Überhaupt nicht wichtig", "", "", "", "", "Sehr wichtig")
    ),
    array(
        "question-text" => "Welche zusätzliche körperliche Aktivität betreibst du am meisten?",
        "type"          => "checkbox",
        "values"        => array(
            "Keine zusätzliche körperliche Aktivität",
            "Gewichte heben",
            "Gehen",
            "Wandern",
            "Joggen",
            "Rennen",
            "Schwimmen",
            "Tanzen",
            "Aerobics",
            "Pilates",
            "Team Sport",
            "Andere"
        )
    ),
    array(
        "question-text" => "Hast du das Gefühl, zu wenig, genügend oder viel zu viel zusätzliche körperliche Aktivitäten zu betreiben?",
        "type"          => "range",
        "min"           => 1,
        "max"           => 5,
        "step"          => 1,
        "value"         => 1,
        "labels"        => array("Viel zu wenig", "", "", "", "", "Viel zu viel")
    ),
    array(
        "question-text" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Kohlenhydrate?",
        "type"          => "text",
        "input-type"    => "number"
    ),
    array(
        "question-text" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Protein?",
        "type"          => "text",
        "input-type"    => "number"
    ),
    array(
        "question-text" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Gemüse?",
        "type"          => "text",
        "input-type"    => "number"
    ),
    array(
        "question-text" => "An einem typischen Tag: Wie viele deiner Malzeiten oder Snacks enthalten Früchte?",
        "type" => "text",
        "input-type" => "number"
    ),
    array(
        "question-text" => "An einem typischen Tag: Wie viele deiner Malzeiten kommen aus der Mikrowelle oder sind schon fertig zubereitet?",
        "type"          => "text",
        "input-type"    => "number"
    )
));

?>
