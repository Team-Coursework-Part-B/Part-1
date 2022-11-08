<?php
session_start();
$isManager = $_SESSION['email'];
?>

<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="page.css">
	<script src="forum.js"></script>
</head>
<body>
	<nav>
		<div id="nav-logo-section">
	    <img src="Logo.png">
	  </div>
		<div id="nav-link-section" class="nav-section">
			<a class="nav-link", href="page.php">Task List</a>
		    <a class="nav-link", href="project.php">Project Task List</a>
		    <a class="nav-link", id="active">Forum</a>
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
				<div class="kanban" id="kanban-sidebar">
					<div class="kanban-title"><h1><b>Subject</b></h1></div>
					<div class="kanban-list">
						<div class="kanban-item">
							<label class="kanban-item-checkbox">
								<b>Tag 1</b>
								<input type="checkbox" name="checkbox">
							</label>
						</div>
						<div class="kanban-item">
							<label class="kanban-item-checkbox">
								<b>Tag 2</b>
								<input type="checkbox" name="checkbox">
							</label>
						</div>
						<div class="kanban-item">
							<label class="kanban-item-checkbox">
								<b>Tag 3</b>
								<input type="checkbox" name="checkbox">
							</label>
						</div>
						<div class="kanban-item">
							<label class="kanban-item-checkbox">
								<b>Tag 4</b>
								<input type="checkbox" name="checkbox">
							</label>
						</div>
						<div class="kanban-item">
							<label class="kanban-item-checkbox">
								<b>Tag 5</b>
								<input type="checkbox" name="checkbox">
							</label>
						</div>
						<div class="kanban-item">
							<label class="kanban-item-checkbox">
								<b>Tag 6</b>
								<input type="checkbox" name="checkbox">
							</label>
						</div>
					</div>
					<div class="kanban-add">
						<button id="kanban-add-button", type="button", onclick="filter_posts()">Filter</button>
					</div>
				</div>
				<div class="kanban", id="kanban-forum">
		      <div class="kanban-title"><h1><b>Forum</b></h1></div>
		      <div class="kanban-list" id="kanban-forumpost"></div>
			  <div class="kanban-add">
						<button id="kanban-add-button", type="button", onclick="create_post()">Create Post</button>
					</div>
		    </div>
			</article>
		</main>

		<div class="post-overlay" id="post-overlay">
			<div id="post-overlay-box">
				<div id="post-overlay-box-loginline">
					<label for="post-overlay-input">Post Title:</label>
					<textarea type="text" id="post-overlay-title" name="post-overlay-input"></textarea>
				</div>
				<div id="post-overlay-box-loginline">
					<label for="post-overlay-input">Post Subject:</label>
					<textarea type="text" id="post-overlay-tag" name="post-overlay-input"></textarea>
				</div>
				<div id="post-overlay-box-paragraph">
					<label for="post-overlay-input">Post Text:</label>
					<textarea type="text" id="post-overlay-input" name="post-overlay-input"></textarea>
				</div>
				<button type="button" onclick="break_button()">Add Task</button>
				<button type="button" onclick="cancel_button()">Cancel</button>
			</div>
		</div>

</body>

</html>