<!DOCTYPE html>
<html lang="en">
<head>

      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <title>Christian Medallada</title>
</head>
<body>


      <div class="wrapper">

            <div class="intro">
                  <h1 class="logo-header">
                    <span class="logo1">Chris</span><span class="logo1">Tian</span>
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

            <!--------------- intro start here ---------------->


            <!--------------- hero section starts here --------------->
            <div class="hero">
                  <div class="header">
                        <h1 class="line anim-typewriter">Christian Medallada</h1>
                        <h1 class="line anim-typewriter1">Aspiring Full Stack Engineer</h1>
                  </div>
            </div>

            <div class="scroll-down"></div>
            <!--------------- hero section ends here --------------->



            <!--------------- projects section starts here --------------->
            <div class="container-fluid" data-aos="fade-up" data-aos-duration="3000">
                  <br><br><br>
                  

                  <h6>Selected projects</h6>

                  <div class="vertical"></div>
                  <br>

                  <div class="whitespace"></div>
                  <div class="whitespace"></div>

                  <div class="cursor"></div>
                  <div class="cursor-follower"></div>

                  <div class="row" data-aos="fade-up">
                        <div class="col-lg-8"></div>

                        <div class="col-lg-4 project project1 wow fadeInUp" onclick="location.href='project1'"></div>
                  </div>

                  <div class="whitespace"></div>

                  <div class="row" data-aos="fade-up">
                        <div class="col-lg-6 project project2 wow fadeInUp" onclick="location.href='project2'"></div>

                        <div class="col-lg-6"></div>
                  </div>

                  <div class="whitespace"></div>

                  <div class="row" data-aos="fade-up">
                        <div class="col-lg-7"></div>

                        <div class="col-lg-4 project project3 wow fadeInUp" onclick="location.href='project3'"></div>

                        <div class="col-lg-1"></div>
                  </div>

                  <div class="whitespace" data-aos="fade-up"></div>

                  <div class="row">
                        <div class="col-lg-1"></div>

                        <div class="col-lg-5 project project4 wow fadeInUp" onclick="location.href='project4'"></div>

                        <div class="col-lg-6"></div>
                  </div>

                  <div class="whitespace"></div>
            </div>
            <!--------------- projects section ends here --------------->



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


      <!-- greensock cdn -->
      <script>
        AOS.init();
      </script>

</body>
</html>
