<?php

// Multidimensional student grades array
$studentGrades = [
    [ "Student 1", ["Math" => 80, "English" => 87, "Science" => 98]],
    ["Student 2", ["Math" => 78, "English" => 92, "Science" => 94]],
    ["Student 3", ["Math" => 95, "English" => 78, "Science" => 76]]
];

function calculateAverageGrades($grades) {

    foreach ($grades as $student) {

        $studentName = $student[0];
        $mathGrade = $student[1]["Math"];
        $englishGrade = $student[1]["English"];
        $scienceGrade = $student[1]["Science"];

        // calculating average grade
        $averageGrade = ($mathGrade + $englishGrade + $scienceGrade) / 3;    

        echo "{$studentName} Average Grade: {$averageGrade}". "</br>";
    }
}

calculateAverageGrades($studentGrades);

