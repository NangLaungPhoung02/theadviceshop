<?php include("dbconnect.php"); ?>

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>The Advice Shop - Study Tips</title>

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

    <h2>Student Study Tips</h2>

    <?php
    echo "<h3>Welcome to the Study Tips Page</h3>";
    echo "<p>This page provides original advice for university students.</p>";

    $studyHours = 4;

    if ($studyHours >= 5) {
        echo "<p class='message success'>";
        echo "You have completed enough study today. Remember to rest.";
        echo "</p>";
    } else {
        echo "<p class='message'>";
        echo "You can complete one more short study session.";
        echo "</p>";
    }

    $studyTips = [
        "Create a weekly study timetable",
        "Take a short break every hour",
        "Review lecture notes after class",
        "Turn off phone notifications"
    ];

    echo "<h3>Recommended Study Habits</h3>";
    echo "<ul class='tip-list'>";

    foreach ($studyTips as $tip) {
        echo "<li>$tip</li>";
    }

    echo "</ul>";

    function displayAdvice($title, $message)
    {
        echo "<article class='advice-card'>";
        echo "<h3>$title</h3>";
        echo "<p>$message</p>";
        echo "</article>";
    }

    displayAdvice(
        "Exam Preparation",
        "Start revising early and divide large topics into smaller sections."
    );
    ?>

</section>

<?php include("inc_footer.php"); ?>

</body>
</html>