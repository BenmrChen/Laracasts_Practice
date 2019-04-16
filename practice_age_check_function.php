<?php 

function age_check($age){
  if ($age >= 21) {
    echo "You're allowed to enter.";
  } else {
    echo "Go back home and get to bed";
  }  
}

?>

<p>Please enter your age to confirm whether you're over 21 or not.</p>
<form action="practice_age_check_function_result.php" method="get">
  <input type="text" name="age">
  <input type="submit" value="confirm">
</form>