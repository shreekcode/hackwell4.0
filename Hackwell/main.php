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
</style>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'LEARNING')">LEARNING</button>
  <button class="tablinks" ><a href = "detection.php">DETECTION</a></button>
</div>

<!-- Tab content -->
<div id="LEARNING" class="tabcontent">
  <h3>LEARNING</h3>
  <p>ADD A TEXT FILE!!</p>
  <div> 
    <input type="file">
    <textarea cols="50" rows="20" placeholder="text will appear here">
    </textarea>
  </div>
  <script src="display.js"></script>
</div>

</div>
<?php
    include 'Includes/footer.php';
?>