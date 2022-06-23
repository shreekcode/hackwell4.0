<?php
include 'Includes/header.php';
?>
<style>
  a {
    color: inherit;
  }
</style>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'LEARNING')">LEARNING</button>
  <button class="tablinks"><a href="detection.php">DETECTION</a></button>
</div>

<!-- Tab content -->
<div id="LEARNING" class="tabcontent">
  <h3>LEARNING</h3>
  <p>ADD A TEXT FILE!!</p>
  <form action="upload_file.php" method="post" enctype="multipart/form-data">

    <label for="file">Filename:</label>
    <input type="file" name="file" id="file" />
    <br />
    <input type="submit" name="submit" value="Submit" />
  </form>
</div>

</div>
<?php
include 'Includes/footer.php';
?>