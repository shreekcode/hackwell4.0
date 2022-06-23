
let tname=document.getElementById("tname").value;
console.log(tname);
let area= document.getElementById("area");
area.onselect = function() {
  var from = area.selectionStart;
  var to = area.selectionEnd;
  console.log(from);
  console.log(to);
};
