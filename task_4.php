<?php

$studentGrades = [
     "Student_1"=> ["Math" => 80, "English" => 87, "Science" => 98],
    "Student_2"=> ["Math" => 78, "English" => 92, "Science" => 94],
    "Student_3"=>["Math" => 55, "English" => 58, "Science" => 66]
];

function calculateAverageGrades($grades) {

    foreach ($grades as $student => $grades) {

        $studentName = $student;
        $mathGrade = $grades["Math"];
        $englishGrade = $grades["English"];
        $scienceGrade = $grades["Science"];

        // calculating average grade score
        $averageGradeScore =($mathGrade + $englishGrade + $scienceGrade) / 3;   
        
        // calculating average grade
        if($averageGradeScore >=90 && $averageGradeScore<= 100){
            $averageGrade = "A+";
        } elseif($averageGradeScore >=70 && $averageGradeScore< 90){
            $averageGrade = "A";
        } elseif($averageGradeScore >=60 && $averageGradeScore< 70){
            $averageGrade = "B";
        } elseif($averageGradeScore >=50 && $averageGradeScore< 60){
            $averageGrade = "C";
        }else {
            $averageGrade = "F";
        }

        echo "{$studentName} Average Grade Score: {$averageGradeScore} and Average Grade : {$averageGrade}". "</br>";
        
    }
}

calculateAverageGrades($studentGrades);

