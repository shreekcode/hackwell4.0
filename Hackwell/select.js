
let tname=document.getElementById("tname");
console.log(tname);
let area= document.getElementById("area");
area.onselect = function() {
  let attrName = prompt("enter attribute name");
  console.log(attrName);
  var start = area.selectionStart+1;
  var end = area.selectionEnd+1;
  console.log(start);
  console.log(end);
};
