<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="page.css">
	<script src="forum-page.js"></script>
</head>
<body onload="load_data()">
	<nav>
		<div id="nav-logo-section">
	    <img src="Logo.png">
	  </div>
		<div id="nav-link-section" class="nav-section">
				<a class="nav-link", href="page.html">Task List</a>
		    <a class="nav-link", href="project.html">Projet List</a>
		    <a class="nav-link", id="active">Forum</a>
		    <a class="nav-link", id="manager-navbar" href="manager.html">Manager Dashboard</a>
		</div>
	</nav>

	 <?php

$isManager = $_POST["email"];
if  ($isManager == "manager@email.com") {
	echo '<style type="text/css">
		#manager-navbar {
            display: inline;
        }
        </style>';
}	

 ?>
	
	<main>
		<div class="kanban", id="kanban-forum">
      <div class="kanban-title" id="forum-title"><h1><b>Forum</b></h1></div>
      <div class="kanban-list" id="kanban-forumpost"></div>
	  	<div class="kanban-add">
				<button id="kanban-add-button", type="button", onclick="break_button()">Add comment</button>
			</div>
    </div>
	</main>
</body>

</html>
