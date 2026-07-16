<?php include("inc_header.php"); ?>
<?php include("inc_nav.php"); ?>

<h1>Student Wellbeing</h1>

<?php
echo "<p>Healthy habits can improve concentration and academic performance.</p>";

echo "<h2>Five-Day Wellbeing Challenge</h2>";

for ($day = 1; $day <= 5; $day++) {
    echo "<p>Day $day: Complete one healthy activity.</p>";
}

$taskNumber = 1;

echo "<h2>Daily Health Tasks</h2>";

while ($taskNumber <= 3) {
    echo "<p>Task $taskNumber completed.</p>";
    $taskNumber++;
}

$waterGlasses = 6;

if ($waterGlasses >= 8) {
    echo "<p>You reached your water goal today.</p>";
} else {
    echo "<p>Try to drink more water today.</p>";
}

function showWellbeingTip($category, $tip)
{
    echo "<div>";
    echo "<h3>$category</h3>";
    echo "<p>$tip</p>";
    echo "</div>";
}

showWellbeingTip(
    "Sleep",
    "Try to maintain a regular sleeping schedule."
);
?>

<?php include("inc_footer.php"); ?>