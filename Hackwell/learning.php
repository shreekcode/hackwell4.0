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
      text-align: right;
      display: inline-block;
        width: 800px;
    }

    h3,h4{
        text-align: center;
    }
</style>

<div class="tab">
  <button class="tablinks">LEARNING</button>
  <button class="tablinks" ><a href = "detection.php">DETECTION</a></button>
</div>

<h3>LEARNING</h3>
  <h4>ADD A TEXT FILE!!</h4>
  <script src="select.js"></script>
  <div> 
    <input type="file">
    <textarea onClick ="foo()" cols="50" rows="20" placeholder="text will appear here">
    </textarea>
  </div>
  <script src="display.js"></script>
</div>
<?php

?>