<?php

include ("dbconn.inc.php");
$conn = dbConnect();

?>



<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOW SAFE ARE DRUGS?</title>
    <link rel="stylesheet" href="css/foundation.css">
		<link rel="stylesheet" href="css/app.css">
		

		<style>
				* {
					box-sizing: border-box;
				}
				
				
				
				
				#myInput {
					background-image: url('/css/searchicon.png');
					background-position: 10px 12px;
					background-repeat: no-repeat;
					width: 100%;
					font-size: 16px;
					padding: 12px 20px 12px 40px;
					border: 1px solid #ddd;
					margin-bottom: 12px;
				}
				
				#myUL {
					list-style-type: none;
					padding: 0;
					margin: 0;
				}
				
				#myUL li a {
					border: 1px solid #ddd;
					margin-top: -1px; /* Prevent double borders */
					background-color: #f6f6f6;
					padding: 12px;
					text-decoration: none;
					font-size: 18px;
					color: black;
					display: block
				}
				
				#myUL li a:hover:not(.header) {
					background-color: #eee;
				}
				
				
				
				</style>








  </head>
  <body>
    <div class="grid-container wrapper">
      <div class="grid-x align-middle grid-padding-x">
        <div class="large-12 cell">
			<div style="background-color: #FAEAC6;" class="grid-x align-middle grid-padding-x">
				<div class="large-3 cell">
					<div class="grid-x medium-centered grid-padding-x">
       				 <div class="large-12 cell">
					<H1 style="color: #104B62"><img src="img/Frame_2.png"></H1>
						</div>
						</div>
					</div>
<div class="large-1 cell">
				</div>
				<div class="large-8 cell">
					<div class="grid-x align-middle grid-padding-x">
       				 <div class="large-2 cell">
					<H3>I am a</H3>
						</div>
					<div class="large-3 cell">
						<ul class="vertical menu accordion-menu" data-accordion-menu>
  <li>
    <a href="#"><h3>Student</h3></a>
    <ul class="menu vertical nested">
      <li><a href="#">Parent</a></li>
      <li><a href="#">Doctor</a></li>
		<li><a href="#">Researcher</a></li>
    </ul>
  </li>
</ul>
						</div>
					</div>
				</div>
		 </div>
      </div>
	</div>
      <div class="grid-x grid-padding-x">
        <div class="large-12 bgmain cell">
			<div class="grid-x grid-padding-x">
				<div class="large-2 cell">
				<div class="callout">
				Popular Topics
				</div>
				</div>
				<div class="large-10 cell">
				</div>
				<div class="large-2 cell">
				<a href="#" class="button small expanded hollow">2018</a>
				</div>
				<div class="large-2 cell">
				<a href="#" class="button small expanded hollow">2018</a>
				</div>
				<div class="large-2 cell">
				<a href="#" class="button small expanded hollow">2018</a>
				</div>
				<div class="large-2 cell">
				<a href="#" class="button small expanded hollow">2018</a>
				</div>
				<div class="large-2 cell">
				<a href="#" class="button small expanded hollow">2018</a>
				</div>
				<div class="large-12 cell">
				<ul class="menu">





<li><input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for names.." title="Type in a name"></li>

<ul id="myUL">

<?php

$sql = "SELECT * from Tags ORDER BY TAG_ID ASC";
$stmt = $conn->stmt_init();
if($stmt->prepare($sql)){
    $stmt->execute();
    $stmt->store_result();
    $stmt->bind_result($TAG_ID, $TAG_NAME);
    while($stmt->fetch()){
        echo "<li><a href='http://howsafearedrugs.khh9106.uta.cloud/results.php?tag=$TAG_ID'>$TAG_NAME</a></li>";
    }
    $stmt->close();
}

?>

</ul>

<script>
function myFunction() {
    var input, filter, ul, li, a, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    ul = document.getElementById("myUL");
    li = ul.getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}
</script>




</ul>
				</div>
			</div>
				
      </div>
	</div>

      
    </div>

    <script src="js/vendor/jquery.js"></script>
    <script src="js/vendor/what-input.js"></script>
    <script src="js/vendor/foundation.js"></script>
    <script src="js/app.js"></script>
  </body>
</html>
