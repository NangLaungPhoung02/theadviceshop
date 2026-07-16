<?php include("dbconnect.php"); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Advice Shop - Wellbeing</title>

    <link
        href="styles/mainstyles.css"
        rel="stylesheet"
        type="text/css"
        media="screen"
    >
</head>

<body>

<?php
include("inc_header.php");
include("inc_nav.php");
?>

<section id="content">

    <?php
    echo "<h2>Student Wellbeing</h2>";
    echo "<p>Good wellbeing habits can improve concentration, energy and study performance.</p>";

    $sleepHours = 7;

    if ($sleepHours >= 8) {
        echo "<p class='message success'>You reached the recommended sleep goal.</p>";
    } else {
        echo "<p class='message'>Try to sleep a little earlier tonight.</p>";
    }

    echo "<h3>Five-Day Wellbeing Challenge</h3>";

    for ($day = 1; $day <= 5; $day++) {
        echo "<p>Day $day: Complete one healthy activity.</p>";
    }

    echo "<h3>Daily Wellbeing Tasks</h3>";

    $taskNumber = 1;

    while ($taskNumber <= 3) {
        echo "<p>Task $taskNumber completed.</p>";
        $taskNumber++;
    }

    $wellbeingTips = [
        "Drink enough water",
        "Take regular study breaks",
        "Go outside for a short walk",
        "Avoid using your phone before sleep"
    ];

    echo "<h3>Healthy Habits</h3>";
    echo "<ul class='tip-list'>";

    foreach ($wellbeingTips as $tip) {
        echo "<li>$tip</li>";
    }

    echo "</ul>";

    function showWellbeingAdvice($category, $advice)
    {
        echo "<article class='advice-card'>";
        echo "<h3>$category</h3>";
        echo "<p>$advice</p>";
        echo "</article>";
    }

    showWellbeingAdvice(
        "Managing Stress",
        "Divide large assignments into smaller tasks and complete one step at a time."
    );
    ?>

</section>

<?php include("inc_footer.php"); ?>

</body>
</html>