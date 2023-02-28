<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
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
            <link rel="stylesheet" href="/styles/animate.css">
            <script src="./scripts/wow.min.js"></script>
            <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
</head>
<body>

<div class="wrapper">

            <div class="intro">
                  <h1 class="logo-header">
                    <span class="logo1">Sending</span><span class="logo1">&nbsp;Message</span>
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
					<a href="index" class="menu__item-link">Home</a>

                              <?php
                              $imageProperties = [    
                                    'src'    => 'img/menu-one.jpg',    
                                    'class'  => 'menu__item-img'
                                 ];
                                echo img($imageProperties);
                              ?>
					<div class="marquee">
						<div class="marquee__inner">
							<span>Home - Home - Home - Home - Home - Home - Home</span>
						</div>
					</div>
				</div>
				<div class="menu__item">
					<a href="work" class="menu__item-link">Work</a>

                              <?php
                              $imageProperties = [    
                                    'src'    => 'img/menu-two.jpg',    
                                    'class'  => 'menu__item-img'
                                 ];
                                echo img($imageProperties);
                              ?>
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
					<a href="about" class="menu__item-link">About</a>
					
                              <?php
                              $imageProperties = [    
                                    'src'    => 'img/menu-three.jpg',    
                                    'class'  => 'menu__item-img'
                                 ];
                                echo img($imageProperties);
                              ?>

					<div class="marquee">
						<div class="marquee__inner">
							<span>About - About - About - About - About - About - About</span>
						</div>
					</div>
				</div>
				<div class="menu__item">
					<a href="contact"class="menu__item-link">Contact</a>

                              <?php
                              $imageProperties = [    
                                    'src'    => 'img/menu-four.jpg',    
                                    'class'  => 'menu__item-img'
                                 ];
                                echo img($imageProperties);
                              ?>

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



            <div class="hero">
                  <div class="header">
                        <h1 class="line anim-typewriter">Message Sent</h1>
                        <h1 class="line anim-typewriter1">You can go back now</h1>
</div>
</div>
            </div>


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



<script src="./scripts/form.js"></script>
      <script src="./scripts/script.js"></script>
      <script src="./scripts/message.js"></script>
      <!-- greensock cdn -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
      <script>
        AOS.init();
      </script>
      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>

</body>
</body>
</html>


<?php
$fullname = filter_input(INPUT_POST, 'fullname');
$email = filter_input(INPUT_POST, 'email');
$service = filter_input(INPUT_POST, 'services');
$messages = filter_input(INPUT_POST, 'messages');

if (!empty($fullname)){
  if (!empty($email)){
    if(!empty($service)){
      if(!empty($messages)){

            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "portfolioform";
    
            // Create connection
            $conn = new mysqli($servername, $username, $password, $dbname);

        if (mysqli_connect_error()){
          die('Connect Error ('. mysqli_connect_errno() .') '
          . mysqli_connect_error());
          }
          else{
          $sql = "INSERT INTO messages (fullname, email, services, messages)
          values ('$fullname','$email','$service','$messages')";
          if ($conn->query($sql)){
          echo "New record is inserted sucessfully";
          }
          else{
          echo "Error: ". $sql ."
          ". $conn->error;
          }
          $conn->close();
          }
      }
      else{
        echo "Messages should not be empty";
        die();
      }
    }
    else{
      echo "Service should not be empty";
      die();
    }
  }
  else{
    echo "Email should not be empty";
    die();
  }
}
else{
  echo "Name should not be empty";
  die();
}


?>
