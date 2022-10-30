function make_button() {
	document.getElementById("overlay").style.display = "block";
}

function break_button() {
	document.getElementById("overlay").style.display = "none";
	var putShitHere = document.getElementById("putShitHere");
	var trelloText = document.getElementById("nextTrello").value;
	const newDiv = document.createElement("div");

  // and give it some content
  const newContent = document.createTextNode(trelloText);

  // add the text node to the newly created div
	newDiv.appendChild(newContent);
	putShitHere.appendChild(newDiv);
	
}