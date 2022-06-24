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

<?php
   $var = $_POST["tname"]
?>

<h3>LEARNING</h3>
  <h4>ADD A TEXT FILE!!</h4>
  <div>
    <input type="file">
    <textarea id="area" cols="50" rows="20" placeholder="text will appear here">
    </textarea>
  </div>
  
  <script>
    var x = "<?php echo"$var"?>";
    //let tname=document.getElementById("tname");
    console.log(x);
    let area= document.getElementById("area");
    area.onselect = function() {
    let attrName = prompt("enter attribute name");
    console.log(attrName);
    var start = area.selectionStart+1;
    var end = area.selectionEnd+1;
    console.log(start);
    console.log(end);
    };
  </script>

  <script src="display.js"></script>
</div>
<?php

?>
