function make_button() {
	document.getElementById("overlay").style.display = "block";
}

function break_button() {
	document.getElementById("overlay").style.display = "none";
	var putShitHere = document.getElementById("kanban-todolist");
	var trelloText = document.getElementById("nextTrello").value;
	document.getElementById("nextTrello").value = "";
	
	
	var newDiv = document.createElement("div");
	newDiv.setAttribute("class", "kanban-item");
	newDiv.innerHTML = "<div class=\"kanban-padding\">" + trelloText + "</div>"
	putShitHere.appendChild(newDiv);
	
}

function cancel_button() {
	document.getElementById("overlay").style.display = "none";
}