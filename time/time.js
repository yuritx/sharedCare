

var completes = document.querySelectorAll(".complete");
var toggleButton = document.getElementById("toggleButton");


function toggleComplete(){
  var lastComplete = completes[completes.length - 2];
  lastComplete.classList.toggle('complete');
}

toggleButton.onclick = toggleComplete();
