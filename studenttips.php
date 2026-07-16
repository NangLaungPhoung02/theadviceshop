<?php include("inc_header.php"); ?>
<?php include("inc_nav.php"); ?>

<h1>Student Study Tips</h1>

<?php
echo "<h2>Welcome to the Study Tips Page</h2>";
echo "<p>This page provides original advice for university students.</p>";
echo "<button>View More Tips</button>";

$studyHours = 4;

if ($studyHours >= 5) {
    echo "<p>You have studied enough today. Remember to rest.</p>";
} else {
    echo "<p>You can complete one more short study session.</p>";
}

$studyTips = [
    "Create a weekly study timetable",
    "Take a short break every hour",
    "Review lecture notes after class",
    "Turn off phone notifications"
];

echo "<h2>Recommended Study Habits</h2>";
echo "<ul>";

foreach ($studyTips as $tip) {
    echo "<li>$tip</li>";
}

echo "</ul>";

function displayAdvice($title, $message)
{
    echo "<section>";
    echo "<h3>$title</h3>";
    echo "<p>$message</p>";
    echo "</section>";
}

displayAdvice(
    "Exam Preparation",
    "Start revising early and divide large topics into smaller sections."
);
?>

<?php include("inc_footer.php"); ?>