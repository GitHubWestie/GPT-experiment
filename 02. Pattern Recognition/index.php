<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pattern Recognition</title>
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        html, body {
            height: 100vh;
        }
        body {
            display: grid;
            place-items: center;
            font-family: sans-serif;
        }
        .container {
            background-color: gray;
            border-radius: 1rem;
            padding: 2rem 2rem;
        }
        h1 {
            margin-bottom: 2rem;
        }
        h2 {
            margin: 1.5rem 0;
        }
        .question {
            margin: 1rem 0;
        }
        h3 {
            margin: 0.5rem 0;
        }
        .sequence {
            width: 100%;
            display: flex;
            gap: 0.5rem;
            justify-center: space-evenly;
        }
        input {
            max-width: 2rem;
        }
    </style>
</head>

<?php

$patterns = [
    'Pattern One' => '2, 4, 6, 8,',
    'Pattern Two' => '1, 1, 2, 3, 5, 8,',
    'Pattern Three' => '100, 50, 25,',
];

$solutions = [
    'Pattern_One' => '10',
    'Pattern_Two' => '13',
    'Pattern_Three' => '12.5',
];

function getUserAnswer($solutions) {
    foreach($solutions as $pattern => $solution) {
        if(array_key_exists($pattern, $_POST)) {
            if($_POST[$pattern] === $solution) {
                echo "That's right!";
            } else {
                echo "Not quite, try again!";
            }
        };
    }
}

$userAnswer = getUserAnswer($solutions);

?>

<body>
<div class="container">
        <h1>Pattern Recognition</h1>
        <h2>Complete the following patterns</h2>
        <div>
            <?php foreach($patterns as $pattern => $sequence) : ?>
            <form action="" method="post" class="question">
                <div>
                    <h3><?= $pattern ?></h3>
                </div>
                <div class="sequence">
                    <span><?= $sequence ?></span>
                    <span>
                        <label for="<?= str_replace(' ', '_', $pattern) ?>"></label>
                        <input id="<?= str_replace(' ', '_', $pattern) ?>" name="<?= str_replace(' ', '_', $pattern) ?>" type="text" placeholder="Your answer">
                    </span>
                    <button type="submit">Submit</button>
                </div>
            </form>
            <?php endforeach; ?>
        </div>
    </div>
</body>
</html>