<?php

// Lab 1, part 1

/**
 * Remove invalid shows from the assoc. array that is passed as a parameter,
 * and return an array which contains only valid entries.
 *
 * Hint: look into https://www.php.net/manual/en/function.unset.php
 *
 * @param array $shows: an associative array of shows in a format following:
 *              ['name' => '<date string>', ...]
 * @return array: an associative array containing shows that don't have
 *                empty strings or null values for their names and dates
 */
function filterInvalidShows(array $shows): array
{
    foreach ($shows as $show_name => $dates_aired) {
        if (empty($show_name) || empty($dates_aired)) {
            unset($shows[$show_name]);
        }
    }
    return $shows;
}

/**
 * Prints the show data in a "name: <aired dates>" format.
 *
 * @param array $shows: the shows to print
 * @return void
 */
function displayShowInfo(array $shows): void
{
    $shows = filterInvalidShows($shows);
    foreach ($shows as $show_name => $dates_aired) {
        printf("<p><b>%s</b>: %s</p>\n", $show_name, $dates_aired);
    }
}

// An associative array of show names and associated dates when the shows aired
$shows = [
    // Add some more shows you like to the array
    'Breaking Bad' => 'January 20th, 2008 - September 29th, 2013',
    'The Boys' => 'July 26th, 2019 - Current',
    'The Grand Tour' => 'November 18th, 2016 - September 13th, 2024',
    'Invalid data1' => '',
    'Invalid data2' => null,
    null => 'December 17, 1999 - Current',
    '' => 'December 30, 1999 - Current',
    '' => '',
];

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lab 1, Part 1</title>
</head>

<body>

    <?php
displayShowInfo($shows)
?>

</body>

</html>