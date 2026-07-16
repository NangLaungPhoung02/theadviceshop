<?php include( "dbconnect.php" ); ?>
<!doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <title>The Advice Shop - Home</title>
    <link href="styles/mainstyles.css" rel="stylesheet" type="text/css" media="screen">
</head>

<body>
<?php include( "inc_header.php" );
include( "inc_nav.php" ); ?>
<section id="content">

    <div class="home-intro">

        <div class="home-text">
            <h2>Welcome to The Student Advice Hub</h2>

            <p>
                University life can be exciting, but it can also be challenging.
                Students often need to manage assignments, exams, group projects,
                part-time work and personal responsibilities at the same time.
            </p>

            <p>
                The Student Advice Hub provides simple and practical guidance to help
                students improve their study habits, manage stress and maintain a
                healthier balance between academic and personal life.
            </p>

            <p>
                Our aim is to provide advice that is clear, useful and easy to apply
                in everyday student life.
            </p>

            <p>
                <a href="studenttips.php" class="home-button">Explore Study Tips</a>
                <a href="wellbeing.php" class="home-button secondary">View Wellbeing Advice</a>
            </p>
        </div>

        <img
            src="images/womanHeadset.jpg"
            alt="Student support advisor"
            width="310"
            height="200"
            class="rightImage home-image"
        >

    </div>

    <h3>Our Main Services</h3>

    <p>
        We provide advice in several important areas that can support students
        throughout their university journey.
    </p>

    <div class="service-boxes">

        <div class="service-box">
            <h4>Study Skills</h4>
            <p>
                Learn how to create a study timetable, organise lecture notes,
                prepare for assessments and avoid last-minute revision.
            </p>
        </div>

        <div class="service-box">
            <h4>Time Management</h4>
            <p>
                Discover practical ways to prioritise tasks, meet deadlines and
                balance university work with other responsibilities.
            </p>
        </div>

        <div class="service-box">
            <h4>Student Wellbeing</h4>
            <p>
                Build healthy routines through regular sleep, study breaks,
                exercise and simple stress-management activities.
            </p>
        </div>

    </div>

    <h3>Why Use Our Advice?</h3>

    <p>
        Good advice can help students make small improvements that lead to better
        academic performance and a healthier daily routine.
    </p>

    <ul class="home-benefits">
        <li>Improve concentration and study organisation</li>
        <li>Reduce stress before assessments and examinations</li>
        <li>Create realistic and achievable weekly goals</li>
        <li>Build healthier study and sleep habits</li>
        <li>Develop better confidence in managing university life</li>
    </ul>

    <div class="home-highlight">
        <h3>Start with One Small Step</h3>

        <p>
            You do not need to change everything at once. Start by choosing one
            useful study habit or one wellbeing activity and practise it regularly.
            Small and consistent actions can create meaningful improvements over time.
        </p>

        <p>
            <a href="subscribe.php">Subscribe to receive more student advice.</a>
        </p>
    </div>

</section>
<?php include( "inc_footer.php" ); ?>
</body>
</html>
