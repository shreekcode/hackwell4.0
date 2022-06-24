
        // let theaterName = getElementById("tname").value;
        //console.log(theaterName);
      
        //var selObj = window.getSelection();
        
      //  document.getElementById('a=textarea').addEventListener("click", myFunction);
        function foo() {
    var selObj = window.getSelection();
    
    
    var selRange = selObj.getRangeAt(0);
    // do stuff with the range
    let attrName = prompt("enter attribute name");
    console.log(attrName);
    console.log(selRange);
    let start = selRange.startOffset + 1;
    console.log(start);
    let end = selRange.endOffset;
    console.log(end);
}

 