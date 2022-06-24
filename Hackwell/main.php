<?php
    include 'Includes/header.php';
?>
<style>
    a {
        color: inherit;
    }

    textarea {
        horizontal-align: left ;
        resize:none;
        display: inline-block;
    }

    label {
      text-align: center;
      display: inline-block;
        width: 300px;
    }
</style>

<div class="tab">
  <button class="tablinks">LEARNING</button>
  <button class="tablinks" ><a href = "detection.php">DETECTION</a></button>
</div>

<!-- Tab content -->
<div id="LEARNING" class="tabcontent">
<form action = "learning.php" method = POST>
  <br>

  <label for="tname"><b>Theater Name</b></label>
  <input id="tname" type="text" name = "tname"><br>
  <input type="submit" value = "submit">
</form>
</div>

<?php

?>
