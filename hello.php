<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Basics Assignment</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            margin: 40px;
            background-color: #f9f9f9;
            color: #333;
        }

        .task-box {
            background: #fff;
            padding: 20px;
            margin-bottom: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            border-left: 5px solid #4F5D95;
        }

        h1 {
            color: #4F5D95;
        }

        h2 {
            margin-top: 0;
            color: #666;
            font-size: 1.1rem;
            text-transform: uppercase;
            letter-spacing: 0.5px;
        }

        p {
            font-size: 1.1rem;
            margin: 5px 0;
        }
    </style>
</head>

<body>

    <!-- TODO 4: Embed PHP into HTML for a "Welcome" page h1 tag -->
    <div class="task-box">
        <h2>Task 4: Welcome Message</h2>
        <h1><?php echo "Welcome to PHP Programming!"; ?></h1>
    </div>

    <!-- TODO 1: Use echo to print name, favorite language, and reason -->
    <div class="task-box">
        <h2>Task 1: About Me</h2>
        <p>
            <?php
            $name = " Aphiwe Lukho"; // Replace with your actual name if desired
            $language = "PHP";
            echo "My name is " . $name . ". My favourite programming language is " . $language . " because it is versatile, runs fast in the terminal, and powers the web!";
            ?>
        </p>
    </div>

    <!-- TODO 2: Script that calculates and prints the sum of two numbers -->
    <div class="task-box">
        <h2>Task 2: Math Calculation</h2>
        <p>
            <?php
            $num1 = 15;
            $num2 = 25;
            $sum = $num1 + $num2;
            echo "The sum of " . $num1 . " and " . $num2 . " is: <strong>" . $sum . "</strong>";
            ?>
        </p>
    </div>

    <!-- TODO 3: Display today's date formatted perfectly -->
    <div class="task-box">
        <h2>Task 3: Current Date</h2>
        <p>
            <?php
            // Format characters: l = Day name, F = Month name, j = Day number, Y = Year
            echo "Today is " . date("l, F j, Y") . ".";
            ?>
        </p>
    </div>

    <!-- TODO 5: Generate and output a random lucky number between 1 and 100 -->
    <div class="task-box">
        <h2>Task 5: Lucky Number Generator</h2>
        <p>
            <?php
            $luckyNumber = rand(1, 100);
            echo "Your lucky number today is: <strong>" . $luckyNumber . "</strong>.";
            ?>
        </p>
    </div>

</body>

</html>