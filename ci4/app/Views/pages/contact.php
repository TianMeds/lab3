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
	      
	     <!------------ intro ------------------------------->
	      
	      <div class="intro">
                  <h1 class="logo-header">
                    <span class="logo1">Contact</span><span class="logo1">&nbsp;Me</span>
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
            <div class="whitespace"></div>

            <!--------------- hero section starts here say hello 👋 --------------->
            <div class="container">
                  <div class="hero-content">
                        <br><br>

                        <div class="row">
                              <div class="col-lg-8">

                                    <h3 class="wow fadeInUp" data-wow-delay="1s">Get in touch — let’s <Br>work together. </h3><br>
                                    <p class="wow fadeInUp" data-wow-delay="1.2s">I provide high-quality website and app development services at reasonable pricing. I am skilled and well-trained to create outstanding websites and apps that will assist you in meeting your company objectives.</p>

                              </div>
                        </div>
                  </div>
            </div>
            <!--------------- hero section ends here --------------->

            <!-- <div class="whitespace"></div> -->

            <!--------------- form section starts here --------------->
            <div class="container-fluid">
                  <div class="row">
                        <div class="col-lg-8">
                        <form  id="contact-form" class="form"  method="POST"  data-email="medalladachris100@gmail.com"
                              action="/~cbmedallada/lab3/ci4/public/connect">

                              <?= csrf_field() ?>

                              <ul>

                              <li class="wow fadeInUp" data-wow-delay="1.4s">
                                    <div class="textarea">
                                          <label for="name">Name:</label>
                                          <input type="text" name="fullname" id="name" placeholder="Your Name" value="<?php set_value('fullname') ?>">
                                    </div>
                                    <small class="error"></small>
                              </li>

                              <li class="wow fadeInUp" data-wow-delay="1.6s">
                                    <div class="textarea">
                                          <label for="email">Email:</label>
                                          <input type="text" name="email" id="email" placeholder="Your Email" value="<?php set_value('email') ?>">
                                    </div>
                                    <small class="error"></small>
                                    
                              </li>
                              <li class="wow fadeInUp" data-wow-delay="1.6s">
                                    <label for="dropdown">Services</label style="width: 100px;">
                                          <br>
                                          <select id="dropdown" name="services" value="<?php set_value('services') ?>">
                                                <option value="" disabled selected hidden>What are you interested in?</option>
                                                <option>UI/UX Web & Mobile Design</option>
                                                <option>Web & Mobile App Development</option>
                                                <option>Graphic Design</option>
                                                <option>IT Solution</option>
                                          </select>
                                    
                              </li>
                              


                              <li class="wow fadeInUp" data-wow-delay="1.6s">
                                    <div class="textarea">
                                          <label for="message">Message:</label>
                                          <textarea id="messages" name="messages" placeholder="Your Message" value="<?php set_value('messages') ?>"></textarea>
                                    </div>
                                    <small class="error"></small>
                              </li>

                              </ul>

                              <input type="submit" id="send" value="Send Message" >
                              <p id="success"></p>

                              </form>
                        </div>
                  </div>
            </div>

            <!--------------- form section ends here --------------->

            <div class="whitespace"></div>

            <!--------------- footer starts here --------------->
            <div class="footer">
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

            <br><br><br><br>

      </div>
      

      <script src="./scripts/form.js"></script>
      <script src="./scripts/script.js"></script>
      <script src="./scripts/message.js"></script>
      <!-- greensock cdn -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>

      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
</body>
</html>
