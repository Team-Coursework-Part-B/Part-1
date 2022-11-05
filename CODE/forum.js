function create_post() {
	document.getElementById("post-overlay").style.display = "flex";
    document.getElementById("post-overlay-input").focus();
};

function cancel_button() {
	document.getElementById("post-overlay").style.display = "none";
};


function filter_posts() {}


function break_button() {
	var forumpost = document.getElementById("kanban-forumpost");
	var posttitle = document.getElementById("post-overlay-title").value;
	var contents = document.getElementById("post-overlay-input").value;
	var date = get_formatted_date();
	//var author = 'John Smith';

  if (posttitle!="") {
      var newDiv = document.createElement("div");
      newDiv.setAttribute("class", "kanban-item");
			var arr = "['" + posttitle + "','" + date + "'," + "'John Smith','"+ contents + "']"
      newDiv.innerHTML = '<div onclick="add_href('+arr+')" style="cursor: pointer;" class="kanban-item-text"><p><b>'+posttitle+'</b></p></a><p>John Smith</p></div></div><p class="kanban-date-posted">'+date+'</p>';
			console.log(newDiv.innerHTML);
      forumpost.appendChild(newDiv);
      document.getElementById("post-overlay").style.display = "none";
  } else {
      alert("Please Enter a Valid Input");
  }
	document.getElementById("post-overlay-title").value = "";
  document.getElementById("post-overlay-input").value = "";
	document.getElementById("post-overlay-tag").value = "";
	document.getElementById("post-overlay-subject").value = "";
};

function add_href(postContents){
	location.href="forum-page.html";
	sessionStorage.setItem("postArray", JSON.stringify(postContents));
}


function get_formatted_date() {
	const today = new Date();
	const yyyy = today.getFullYear();
	let mm = today.getMonth() + 1;
	let dd = today.getDate();

	if (dd < 10) dd = '0' + dd;
	if (mm < 10) mm = '0' + mm;

	const formattedToday = dd + '/' + mm + '/' + yyyy;
	return formattedToday;
}
