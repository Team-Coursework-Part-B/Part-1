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
        newDiv.classList.add("personal");
        newDiv.innerHTML = "<div class=\"kanban-item-text\"><p><b>"+todoText+"</b></p></div><div class=\"kanban-item-buttons\"><button class=\"kanban-item-moveDeleteButton kanban-item-button\" ,type=\"button\" onclick=\"delete_todoItem_button(this)\"><i class=\"fa-solid fa-trash\"></i></button><div class=\"kanban-item-leftRightButtons\"><button class=\"kanban-item-moveLeftButton kanban-item-button\" , type=\"button\" onclick=\"moveLeft_todoItem_button(this)\"><i class=\"fa-solid fa-left-long\"></i></button><button class=\"kanban-item-moveRightButton kanban-item-button\" ,type=\"button\" onclick=\"moveRight_todoItem_button(this)\"><i class=\"fa-solid fa-right-long\"></i></button></div></div>";
        todolist.appendChild(newDiv);
        document.getElementById("overlay").style.display = "none";
        updateCounters();
    } else {
        alert("Please Enter a Valid Input");
    }
    document.getElementById("todo-overlay-input").value = "";
};

function cancel_button(button) {
	button.parentNode.parentNode.style.display = "none";
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

    if (buttonParent.classList.contains("personal")) {
        newDiv.classList.add("personal");
    } else if (buttonParent.classList.contains("delegated")) {
        newDiv.classList.add("delegated");
    }

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

    if (buttonParent.classList.contains("personal")) {
        newDiv.classList.add("personal");
    } else if (buttonParent.classList.contains("delegated")) {
        newDiv.classList.add("delegated");
    }

    kanban_col.appendChild(newDiv);
    buttonParent.remove();
    updateCounters();
};

function personal_or_delegated(element) {
    var children = element.childNodes;
    var personal = 0;
    var project = 0;
    for (let i=0; i<children.length; ++i) {
        if (children[i].classList.contains("personal")) {
            personal = personal+1;
        } else if (children[i].classList.contains("delegated")) {
            project = project+1;
        }
    }
    var amountList = [personal,project];
    return amountList;
}

function updateCounters() {
    var todo = document.getElementById("kanban-todolist");
    var todoCounts = personal_or_delegated(todo);
    var doing = document.getElementById("kanban-doinglist");
    var doingCounts = personal_or_delegated(doing);
    var done = document.getElementById("kanban-donelist");
    var doneCounts = personal_or_delegated(done);

    document.getElementById("sidebar-todo-counter-personal").firstChild.innerHTML = todoCounts[0];
    document.getElementById("sidebar-doing-counter-personal").firstChild.innerHTML = doingCounts[0];
    document.getElementById("sidebar-done-counter-personal").firstChild.innerHTML = doneCounts[0];
    document.getElementById("sidebar-total-counter-personal").firstChild.innerHTML = todoCounts[0]+doingCounts[0]+doneCounts[0];

    document.getElementById("sidebar-todo-counter-delegated").firstChild.innerHTML = todoCounts[1];
    document.getElementById("sidebar-doing-counter-delegated").firstChild.innerHTML = doingCounts[1];
    document.getElementById("sidebar-done-counter-delegated").firstChild.innerHTML = doneCounts[1];
    document.getElementById("sidebar-total-counter-delegated").firstChild.innerHTML = todoCounts[1]+doingCounts[1]+doneCounts[1];
};

function resourceUpdate(box) {
    if (box.classList.contains("resourceBoxClicked")) {
        box.classList.remove("resourceBoxClicked");
    } else {
        box.classList.add("resourceBoxClicked")
    }
};

function increaseProgress(bar) {
    computedStyle = getComputedStyle(bar);
    width = parseFloat(computedStyle.getPropertyValue("--width")) || 0;
    if (width==100) {width=0};
    bar.style.setProperty("--width", width+10);
}

function viewTasks(button) {
	var employeeNode = button.parentNode;
	var employeeName = employeeNode.querySelector(".employee-name").innerHTML.split(' ')[0].toLowerCase() + "-" + employeeNode.querySelector(".employee-name").innerHTML.split(' ')[1].toLowerCase();
	
	document.getElementById(employeeName).style.display = "flex";
}

function managerTaskAdd(kanbanID) {
	var kanbanDiv = kanbanID.querySelector(".kanban");
	var todoText = kanbanID.querySelector(".dashboard-overlay-input").querySelector("textarea").value;
	
	var newDiv = document.createElement("div");
	newDiv.setAttribute("class", "kanban-item");
	newDiv.innerHTML = "<div class=\"kanban-item-text\"><p><b>"+todoText+"</b></p></div><div class=\"kanban-item-buttons\"><button class=\"kanban-item-moveDeleteButton kanban-item-button\" ,type=\"button\" onclick=\"delete_todoItem_button(this)\"><i class=\"fa-solid fa-trash\"></i></button></div>";
	kanbanDiv.appendChild(newDiv);
}