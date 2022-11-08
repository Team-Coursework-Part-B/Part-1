<?php
session_start();
$isManager = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="page.css">
  <script src="page.js"></script>
  <script src="https://kit.fontawesome.com/127f7c8d0a.js" crossorigin="anonymous"></script>
</head>
<body>
<nav>
  <div id="nav-logo-section">
    <img src="Logo.png">
  </div>
  <div id="nav-link-section" class="nav-section">
    <a class="nav-link", href="page.php">Personal Task List</a>
    <a class="nav-link", href="project.php">Project Task List</a>
    <a class="nav-link", href="forum.php">Forum</a>
	<a class="nav-link", id="active">Manager Dashboard</a>
  </div>
</nav>

<main>

<article>
<h1><b><u>Projects:</b></u></h1>

<div class="kanban">
      <div class="kanban-title"><h1><b>Example Project</b></h1></div>
      <div class="kanban-list">
	  
	  <div class="kanban-item">
	  <p class="employee-name">Example Employee</p>
	  <button class="view-task-button" onclick="viewTasks(this)">View Tasks</button>
	  </div>
	  
	  <div class="kanban-item">
	  <p class="employee-name">Prototype Employee</p><br>
	  <button class="view-task-button" onclick="viewTasks(this)">View Tasks</button>
	  </div>
	  
	  </div>
    </div>

</article>

</main>

<div class="overlay" id="example-employee">
  <div class="dashboard-overlay-box">
	<div class="side-dashboard"> 
    <h2>Example Employee</h2>
	
	<div class="dashboard-overlay-input">
      <label for="todo-overlay-input">Add New Task: </label>
      <textarea type="text" id="todo-overlay-input" name="todo-overlay-input"></textarea>
    </div>
	
	<button id="dashboard-add", type="button", onclick="managerTaskAdd(this.parentNode.parentNode)">Add+</button>
	<button type="button" onclick="cancel_button(this.parentNode)">Close</button>
	</div>
	
	
	<div class="kanban", id="kanban-todo">
      <div class="kanban-title"><h1><b>To do</b></h1></div>
      <div class="kanban-list", id="kanban-todolist"></div>
    </div>

    <div class="kanban", id="kanban-doing">
      <div class="kanban-title"><h1><b>Doing</b></h1></div>

      <div class="kanban-list", id="kanban-doinglist"></div>
    </div>

    <div class="kanban", id="kanban-done">
      <div class="kanban-title"><h1><b>Done</b></h1></div>
      <div class="kanban-list", id="kanban-donelist"></div>
    </div>
  </div>
</div>

<div class="overlay" id="prototype-employee">
  <div class="dashboard-overlay-box">
	<div class="side-dashboard"> 
    <h2>Prototype Employee</h2>
	
	<div class="dashboard-overlay-input">
      <label for="todo-overlay-input">Add New Task: </label>
      <textarea type="text" id="todo-overlay-input" name="todo-overlay-input"></textarea>
    </div>
	
	<button id="dashboard-add", type="button", onclick="make_button()">Add+</button>
	<button type="button" onclick="cancel_button(this.parentNode)">Close</button>
	</div>
	
	
	<div class="kanban", id="kanban-todo">
      <div class="kanban-title"><h1><b>To do</b></h1></div>
      <div class="kanban-list", id="kanban-todolist"></div>
    </div>

    <div class="kanban", id="kanban-doing">
      <div class="kanban-title"><h1><b>Doing</b></h1></div>

      <div class="kanban-list", id="kanban-doinglist"></div>
    </div>

    <div class="kanban", id="kanban-done">
      <div class="kanban-title"><h1><b>Done</b></h1></div>
      <div class="kanban-list", id="kanban-donelist"></div>
    </div>
  </div>
</div>

</body>
</html>