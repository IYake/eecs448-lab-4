<?php 
$color = $_POST["color"];
$number = $_POST["number"];
$location = $_POST["location"];
$question = $_POST["question"];
$mineral = $_POST["mineral"];
$nbr_correct = 0;

echo "<p> Question 1: Which color is a primary color? </p>";
echo "<p> You answered: " . $color . "</p>";
echo "<p> Correct answer: Red </p><br>";
if ($color === "red"){
  $nbr_correct++;
}

echo "<p> Question 2: What is 8^2? </p>";
echo "<p> You answered: " . $number . "</p>";
echo "<p> Correct answer: 64 </p><br>";
if ($number === "64"){
  $nbr_correct++;
}

echo "<p> Question 3: Where is Kansas? </p>";
echo "<p> You answered: " . $location . "</p>";
echo "<p> Correct answer: United States </p><br>";
if ($location === "United States"){
  $nbr_correct++;
}

echo "<p> Question 4: Which question number is this?</p>";
echo "<p> You answered: " . $question . "</p>";
echo "<p> Correct answer: 4 </p><br>";
if ($question === "4"){
  $nbr_correct++;
}

echo "<p> Question 5: Spinach is high in which mineral? </p>";
echo "<p> You answered: " . $mineral . "</p>";
echo "<p> Correct answer: Iron </p><br>";
if ($mineral === "Iron"){
  $nbr_correct++;
}

echo "<p> Number correct: ". $nbr_correct . " out of 5.</p>";
echo "<p> You got " . $nbr_correct*20 . "% correct.</p>";
