<?php
/* What's the Problem? 
    - PHP logic + HTML in one file
    - Works, but not scalable
    - Repetition will become a problem

    How can we refactor this code so it’s easier to maintain?

    Something I learned from this lab was to avoid repition when it comes to incorporating HTML and PHP in one file. Instead, I split it up into different files and used "include" to incorporate it into my document. This is something I will try to keep in mind

    
*/

$items = ["Home", "About", "Contact"];

include "header.php"; 

?>

<ul>
    <?php foreach ($items as $item): ?>
    <li><?= $item ?></li>
    <?php endforeach; ?>
</ul>


<?php 
include "footer.php";
 ?>

