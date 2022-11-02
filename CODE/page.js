function make_button() {
	document.getElementById("overlay").style.display = "flex";
    document.getElementById("todo-overlay-input").focus();
};

function break_button() {
	var todolist = document.getElementById("kanban-todolist");
	var todoText = document.getElementById("todo-overlay-input").value;

    if (todoText!="") {
        var newDiv = document.createElement("div");
        newDiv.setAttribute("class", "kanban-item");
        newDiv.innerHTML = "<div class=\"kanban-item-text\"><p><b>"+todoText+"</b></p></div><div class=\"kanban-item-buttons\"><button class=\"kanban-item-moveDeleteButton kanban-item-button\" ,type=\"button\" onclick=\"delete_todoItem_button(this)\"><i class=\"fa-solid fa-trash\"></i></button><div class=\"kanban-item-leftRightButtons\"><button class=\"kanban-item-moveLeftButton kanban-item-button\" , type=\"button\" onclick=\"moveLeft_todoItem_button(this)\"><i class=\"fa-solid fa-left-long\"></i></button><button class=\"kanban-item-moveRightButton kanban-item-button\" ,type=\"button\" onclick=\"moveRight_todoItem_button(this)\"><i class=\"fa-solid fa-right-long\"></i></button></div></div>";
        todolist.appendChild(newDiv);
        document.getElementById("overlay").style.display = "none";
        updateCounters();
    } else {
        alert("Please Enter a Valid Input");
    }
    document.getElementById("todo-overlay-input").value = "";
};

function cancel_button() {
	document.getElementById("overlay").style.display = "none";
};

function delete_todoItem_button(button) {
    var buttonParent = button.parentNode.parentNode;
    buttonParent.remove();
    updateCounters();
};

function moveRight_todoItem_button(button) {
    var buttonParent = button.parentNode.parentNode.parentNode;

    if (buttonParent.parentNode == document.getElementById("kanban-todolist")) {
        var kanban_col = document.getElementById("kanban-doinglist");
    } else {
        var kanban_col = document.getElementById("kanban-donelist")
    }

    var newDiv = document.createElement("div");
    newDiv.setAttribute("class","kanban-item");
    newDiv.innerHTML = buttonParent.innerHTML;

    kanban_col.appendChild(newDiv);
    buttonParent.remove();
    updateCounters();
};

function moveLeft_todoItem_button(button) {
    var buttonParent = button.parentNode.parentNode.parentNode;

    if (buttonParent.parentNode == document.getElementById("kanban-donelist")) {
        var kanban_col = document.getElementById("kanban-doinglist");
    } else {
        var kanban_col = document.getElementById("kanban-todolist")
    }

    var newDiv = document.createElement("div");
    newDiv.setAttribute("class","kanban-item");
    newDiv.innerHTML = buttonParent.innerHTML;

    kanban_col.appendChild(newDiv);
    buttonParent.remove();
    updateCounters();
};

function updateCounters() {
    var todoAmount = document.getElementById("kanban-todolist").childNodes.length;
    var doingAmount = document.getElementById("kanban-doinglist").childNodes.length;
    var doneAmount = document.getElementById("kanban-donelist").childNodes.length;
    var total = todoAmount + doingAmount + doneAmount;

    document.getElementById("sidebar-todo-counter").firstChild.innerHTML = todoAmount;
    document.getElementById("sidebar-doing-counter").firstChild.innerHTML = doingAmount;
    document.getElementById("sidebar-done-counter").firstChild.innerHTML = doneAmount;
    document.getElementById("sidebar-total-counter").firstChild.innerHTML = total;
}