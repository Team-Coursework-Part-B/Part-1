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
    <a class="nav-link", href="page.php">Task List</a>
    <a class="nav-link", id="active">Project Task List</a>
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
    <div class="kanban", id="kanban-project">
      <div class="kanban-title"><h1><b>Projects...</b></h1></div>
      <div class="kanban-project-list">
        <div class="kanban-item-project">
            <div class="kanban-project-title"><h2>Project X</h2></div>
            <div class="kanban-project-boxes">
                <div class="kanban-project-box resource" onclick="resourceUpdate(this)"></div>
            </div>
            <div class="kanban-project-progressBar"><div class="progressBar project" onclick="increaseProgress(this)"></div></div>
            <div class="kanban-project-training">
              <p>Training Required:</p>
              <ul>
                <li>Training X</li>
                <li>Training Y</li>
              </ul>
            </div>
            <div class="kanban-project-progressBar"><div class="progressBar allocation" onclick="increaseProgress(this)"></div></div>
        </div>
        <div class="kanban-item-project"></div>
        <div class="kanban-item-project"></div>
        <div class="kanban-item-project"></div>
      </div>
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
    <button type="button" onclick="cancel_button()">Cancel</button>
  </div>
</div>

</body>

</html>