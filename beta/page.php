<?php
session_start();
if(!empty($_POST)){
  $_SESSION['email'] = $_POST['email'];
}
$isManager = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" href="page.css">
  <script src="page.js"></script>
  <script src="https://kit.fontawesome.com/127f7c8d0a.js" crossorigin="anonymous"></script>
</head>

<body onload="updateCounters()">
<nav>
  <div id="nav-logo-section">
    <img src="Logo.png">
  </div>
  <div id="nav-link-section" class="nav-section">
    <a class="nav-link", id="active">Task List</a>
    <a class="nav-link", href="project.php">Project Task List</a>
    <a class="nav-link", href="forum.php">Forum</a>
    <a class="nav-link", id="manager-navbar" href="manager.php">Manager Dashboard</a>
  </div>
</nav>

 <?php
if  ($isManager == "manager@email.com") {
	echo '<style type="text/css">
		#manager-navbar {
            display: inline;
        }
        </style>';
}	

 ?>

  
<main>
  <article>
    <div class="sidebar">
      <div class="sidebar-counter">
        <div class="sidebar-counter-number", id="sidebar-todo-counter-personal"><p></p></div>
        <div class="sidebar-counter-label"><p>To Do</p></div>
      </div>
      <div class="sidebar-counter">
        <div class="sidebar-counter-number", id="sidebar-doing-counter-personal"><p></p></div>
        <div class="sidebar-counter-label"><p>Doing</p></div>
      </div>
      <div class="sidebar-counter">
        <div class="sidebar-counter-number", id="sidebar-done-counter-personal"><p></p></div>
        <div class="sidebar-counter-label"><p>Done</p></div>
      </div>
      <div class="sidebar-counter">
        <div class="sidebar-counter-number", id="sidebar-total-counter-personal"><p></p></div>
        <div class="sidebar-counter-label"><p>Total</p></div>
      </div>
      <div class="sidebar-counter delegated">
        <div class="sidebar-counter-number", id="sidebar-todo-counter-delegated"><p></p></div>
        <div class="sidebar-counter-label"><p>To Do</p></div>
      </div>
      <div class="sidebar-counter delegated">
        <div class="sidebar-counter-number", id="sidebar-doing-counter-delegated"><p></p></div>
        <div class="sidebar-counter-label"><p>Doing</p></div>
      </div>
      <div class="sidebar-counter delegated">
        <div class="sidebar-counter-number", id="sidebar-done-counter-delegated"><p></p></div>
        <div class="sidebar-counter-label"><p>Done</p></div>
      </div>
      <div class="sidebar-counter delegated">
        <div class="sidebar-counter-number", id="sidebar-total-counter-delegated"><p></p></div>
        <div class="sidebar-counter-label"><p>Total</p></div>
      </div>
    </div>

    <div class="kanban", id="kanban-todo">
      <div class="kanban-title"><h1><b>To do</b></h1></div>
      <div class="kanban-list", id="kanban-todolist"><div class="kanban-item delegated"><div class="kanban-item-text"><p><b>Do work x.</b></p></div><div class="kanban-item-buttons"><button class="kanban-item-moveDeleteButton kanban-item-button" ,type="button" onclick="delete_todoItem_button(this)"><i class="fa-solid fa-trash"></i></button><div class="kanban-item-leftRightButtons"><button class="kanban-item-moveLeftButton kanban-item-button" ,="" type="button" onclick="moveLeft_todoItem_button(this)"><i class="fa-solid fa-left-long"></i></button><button class="kanban-item-moveRightButton kanban-item-button" ,type="button" onclick="moveRight_todoItem_button(this)"><i class="fa-solid fa-right-long"></i></button></div></div></div></div>
      <div class="kanban-add"><button id="kanban-add-button", type="button", onclick="make_button()">Add+</button></div>
    </div>

    <div class="kanban", id="kanban-doing">
      <div class="kanban-title"><h1><b>Doing</b></h1></div>
      <div class="kanban-list", id="kanban-doinglist"></div>
    </div>

    <div class="kanban", id="kanban-done">
      <div class="kanban-title"><h1><b>Done</b></h1></div>
      <div class="kanban-list", id="kanban-donelist"></div>
    </div>
  </article>
</main>

<div class="overlay" id="overlay">
  <div id="todo-overlay-box">
    <div id="todo-overlay-box-loginline">
      <label for="todo-overlay-input">Task Description:</label>
      <textarea type="text" id="todo-overlay-input" name="todo-overlay-input"></textarea>
    </div>
    <button type="button" onclick="break_button()">Add Task</button>
    <button type="button" onclick="cancel_button(this)">Cancel</button>
  </div>
</div>

</body>

</html>