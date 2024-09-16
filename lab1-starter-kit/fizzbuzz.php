<?php
// Lab 1, part 2
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1, Part 2</title>
</head>

<body>

    <?php
$counter = 1;

while ($counter <= 100):
    if ($counter % 3 === 0 && $counter % 5 !== 0):
        printf("<b>Fizz</b><br>");
    elseif ($counter % 5 === 0 && $counter % 3 !== 0):
        printf("<b>Buzz</b><br>");
    elseif ($counter % 3 === 0 && $counter % 5 === 0):
        printf("<b>FizzBuzz</b><br>");
    else:
        printf("%d<br>", $counter);
    endif;
    $counter++;
endwhile;
?>

</body>

</html>