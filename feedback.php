<?php
    
    session_start();
    error_reporting(E_ALL);
ini_set('display_errors', 1);

    ?>

<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Umfrage Feedback</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<body>

<div class="container">
    <h1>Umfrage Feedback</h1>

    <?php
    
    
    // Überprüfen, ob die Umfragedaten in der Session vorhanden sind
    if (isset($_SESSION['survey_data'])) {
        $surveyData = $_SESSION['survey_data'];
        unset($_SESSION['survey_data']); // Umfragedaten aus der Session entfernen
        ?>

        <h3>Vielen Dank für Ihre Teilnahme an der Umfrage!</h3>
        <p>Hier sind Ihre Antworten:</p>

        <table class="table">
            <thead>
                <tr>
                    <th>Frage</th>
                    <th>Antwort</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($surveyData as $questionIndex => $response) { ?>
                    <tr>
                        <td><?php echo $response['question-text']; ?></td>
                        <td>
                            <?php
                            if (isset($response['response'])) {
                                if (is_array($response['response'])) {
                                    echo implode(", ", $response['response']);
                                } else {
                                    echo $response['response'];
                                }
                            } else {
                                echo "Keine Antwort";
                            }
                            ?>
                        </td>
                    </tr>
                <?php } ?>
            </tbody>
        </table>

    <?php } else { ?>
        <p>Keine Umfragedaten gefunden.</p>
    <?php } ?>

</div>

</body>
</html>
