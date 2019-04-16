
<?php  
function dd($data){
    echo '<pre>';
    die(var_dump($data));
    echo '</pre>';
  }

function age_check($age){
  if ($age >= 21) {
    echo "You're allowed to enter.";
  } else {
    echo "Go back home and get to bed";
  }  
}

?>