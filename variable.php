<?php
// Assume these are the voter's details obtained from a form
 $voter_age = 20;
 $has_pvc = true;
 $voter_ward = "020";

// Check if voter is above 18 years
 if ($voter_age < 18) {
     echo "Sorry, voter must be at least 18 years old to be eligible to vote.";
     } 
// Check if voter has PVC
elseif (!$has_pvc) {
echo "Sorry, voter must have a PVC (Permanent Voter's Card) to be eligible to vote.";
} 
// Check if voter's ward is 020
elseif ($voter_ward !== "020") {
echo "Sorry, voter must be registered to vote in ward 020 to be eligible to vote.";
} 
// All checks pass, voter is eligible to vote
else {
echo "Voter is eligible to vote.";
}
?>

