<?php
$pagename = "Home";
include "navbar.php";
require_once "data.php"; 
?>


<h1>Home</h1>
<p>This is Home Page</p>

<div class="card" style="width: 18rem;background-color:black; color:white;" >
  <div class="card-body">
    <?php foreach($users as $user): ?>
    <h5 class="card-title"><?php echo $user['name']; ?></h5>
    <h6 class="card-subtitle mb-2 text-body-secondary"><?php echo $user['age']; ?> </h6>
    <a href="#" class="card-link"><?php echo $user['clr']; ?></a>
    <?php endforeach; ?>
  </div>
</div>
