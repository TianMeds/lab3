<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <title>Christian Medallada</title>


      <script src="https://code.jquery.com/jquery-3.3.1.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>

      <link rel="shortcut icon" href="./img/Favicon.png" type="image/x-icon" />
      
      <!-- stylesheet -->
      <link rel="stylesheet" href="./styles/style.css">

      <!-- bootstrap cdns -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

      <!-- google fonts -->
      <link href="https://fonts.googleapis.com/css?family=Roboto+Mono:100,100i,300,300i,400,400i,500,500i,700,700i" rel="stylesheet">

      <!-- terminal effect -->
      <script src="./scripts/t.min.js"></script>

      <!-- Icons -->
      <script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
      <script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>

      <!-- for on scroll animations -->
      <link rel="stylesheet" href="./styles/animate.css">
      <script src="./scripts/wow.min.js"></script>
      <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

<div class="wrapper">

            <div class="intro">
                  <h1 class="logo-header">
                    <span class="logo1">Guest</span><span class="logo1">&nbsp;Form</span>
                  </h1>
            </div>



             <!--------------- navbar starts here --------------->
            <div class="menu-open">menu</div>
		<div class="nav-container">
			<div class="menu-close">close</div>
			<div class="socials">
				<a href="https://tinyurl.com/38u9r4d7" target="_blank"><span>facebook</span></a>
				<a href="https://tinyurl.com/38bv8ths" target="_blank"><span>instagram</span></a>
                        <a href="https://tinyurl.com/mv3vjvmt" target="_blank"><span>github</span></a>
                        <a href="https://tinyurl.com/498hj8b4" target="_blank"><span>linkedln</span></a>
			</div>
			<nav class="menu">
				<div class="menu__item">
					<a href="index.html" class="menu__item-link">Home</a>
					<img class="menu__item-img" src="./img/menu-one.jpg" />
					<div class="marquee">
						<div class="marquee__inner">
							<span>Home - Home - Home - Home - Home - Home - Home</span>
						</div>
					</div>
				</div>
				<div class="menu__item">
					<a href="work.html" class="menu__item-link">Work</a>
					<img class="menu__item-img" src="./img/menu-two.jpg" />
					<div class="marquee">
						<div class="marquee__inner">
							<span
								>Work - Work - Work - Work - Work - Work
								- Work</span
							>
						</div>
					</div>
				</div>
				<div class="menu__item">
					<a href="about.html" class="menu__item-link">About</a>
					<img class="menu__item-img" src="./img/menu-three.jpg" />
					<div class="marquee">
						<div class="marquee__inner">
							<span>About - About - About - About - About - About - About</span>
						</div>
					</div>
				</div>
				<div class="menu__item">
					<a href="contact.html"class="menu__item-link">Contact</a>
					<img class="menu__item-img" src="./img/menu-four.jpg" />
					<div class="marquee">
						<div class="marquee__inner">
							<span
								>Contact - Contact - Contact - Contact - Contact - Contact -
								Contact</span>
						</div>
					</div>
				</div>
			</nav>
		</div>
            <!--------------- navbar ends here --------------->


            <div class="alter-whitespace"></div>

            <div class="container" data-aos="fade-up">
                  <h3 class="wow fadeInUp service" data-wow-delay="1.2s">guest.</h3>    
                  <br><br>  

                  <div class="table-responsive">
                        <table class="table">
                      <thead>
                        <tr class="guest-head">
                    <th class="guest-head-first">name</th>
                    <th>email</th>
                    <th>services</th>
                    <th>messages</th>
                        </tr>


                        

<?php 
$host = "localhost";
$username = "root";
$password = "";
$dbname = "portfolioform";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

    $sql = "SELECT fullname, email, services, messages from messages";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            echo "<tr><td>" .  $row["fullname"].  "</td><td>".  $row["email"] . "</td><td>".  $row["services"] . "</td><td>". $row["messages"] . "<br>";
        }
    echo "</table>";
    } else {
        echo "0 results";
    }
    
    ?>

</thead>
</table>
  </div>


  <div class="alter-whitespace"></div>
  <div class="alter-whitespace"></div>
  <div class="alter-whitespace"></div>
  <div class="alter-whitespace"></div>


    <!--------------- footer starts here --------------->
    <div class="footer" data-aos="fade-up">
                  <div class="container">
                        <br><br>

                        <div class="collab">
                              <div class="row">
                                    <div class="col-lg-12">
                                          <p class="wow fadeInUp">Do you have an interesting project? I can assist you.</p>
                                    </div>
                              </div>
                        </div>

                        <br>

                        <div class="hr">
                              <div class="row"></div>
                        </div>

                        <br><br>

                        <div class="info">
                              <div class="row">
                                    <div class="col-lg-4" id="personal">
                                          <p class="wow fadeInUp">connect with me</p>
                                          <a href="tel:+639951617400"><h4 class="wow fadeInUp" data-wow-delay="0.2s"><ion-icon name="call-outline"></ion-icon> +63 995 161 7400</h4></a>
                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="media">
                                          <p class="wow fadeInUp" data-wow-delay="0s">follow me</p>

                                          <ul>
                                                <a href="https://tinyurl.com/38u9r4d7" target="_blank"><li id="fb" class="wow fadeInUp" data-wow-delay="0.4s">facebook</li></a>
                                                <a href="https://tinyurl.com/38bv8ths" target="_blank"><li id="ig" class="wow fadeInUp" data-wow-delay="0.6s">instagram</li></a>
                                                <a href="https://tinyurl.com/mv3vjvmt" target="_blank"><li id="gh" class="wow fadeInUp" data-wow-delay="0.8s">github</li></a>
                                                <a href="https://tinyurl.com/498hj8b4" target="_blank"><li id="ln" class="wow fadeInUp" data-wow-delay="1s">linkedln</li></a>
                                          </ul>

                                          <br><br>
                                    </div>

                                    <div class="col-lg-4" id="address">
                                          <p class="wow fadeInUp" data-wow-delay="0s">say hello</p>
                                          <a href="mailto:medalladachris100@gmail.com"><h4 class="wow fadeInUp" data-wow-delay="0.2s">medalladachris100@gmail.com</h4></a>
                                          <br><br>
                                    </div>
                              </div>
                        </div>
                  </div>
            </div>
            <!--------------- footer ends here --------------->


    <!-- greensock cdn -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>

      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="./phpfile/php.js"></script>
</body>
</html>