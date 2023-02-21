<!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <meta http-equiv="X-UA-Compatible" content="ie=edge">

      <title>Christian Medallada</title>

      <!-- bootstrap cdns -->
      <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
      <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>



</head>
<body>
      <div class="wrapper">

            <div class="intro">
                  <h1 class="logo-header">
                    <span class="logo1">About</span><span class="logo1">&nbsp;Me</span>
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


            <!--------------- hero image starts here --------------->
            <div class="container">
                  <div class="row">
                        <div class="whitespace"></div>
                              <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                                    <ol class="carousel-indicators">
                                    <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
                                    <li data-target="#carouselExampleIndicators" data-slide-to="4"></li>
                                    </ol>
                                    <div class="carousel-inner">
                                    <div class="carousel-item active">
                                          <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/1st-Slide.png',    
                                                      'alt'    => 'First slide',    
                                                      'class'  => 'd-block w-100'  
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                    </div>
                                    <div class="carousel-item">
                                    <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/2ndSlide.jpg',    
                                                      'alt'    => 'Second slide',    
                                                      'class'  => 'd-block w-100'  
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                    </div>
                                    <div class="carousel-item">
                                    <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/3rd-Slide.png',    
                                                      'alt'    => 'Third slide',    
                                                      'class'  => 'd-block w-100'  
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                    </div>
                                    <div class="carousel-item">

                                    <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/4th-Slide.png',    
                                                      'alt'    => 'Fourth slide',    
                                                      'class'  => 'd-block w-100'  
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                    </div>
                                    <div class="carousel-item">
                                    <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/5th-Slide.png',    
                                                      'alt'    => 'Fifth slide',    
                                                      'class'  => 'd-block w-100'  
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                    </div>
                                    </div>
                                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                    <span class="sr-only">Next</span>
                                    </a>
                              </div>
                  </div>
            </div>
            <!--------------- hero image ends here --------------->


            <!--------------- hero section starts here --------------->
            <div class="container">
                  <div class="hero-content">
                        <br><br>

                        <div class="row">
                              <div class="col-lg-12">
                                    <h3 class="wow fadeInUp" data-wow-delay="1.2s">about me.</h3><br>

                                    <p class="wow fadeInUp">Hi, My Name Is Christian B. Medallada. Most People Call Me    Tian Or Meds. I'm Currently 19 Years Old And Living In Makati City, Philippines.
                                          I'm currently pursuing a Bachelor of Science in Information 
                                          Technology. I work on a variety of projects such as websites, 
                                          web apps, UI/UX design, web and graphic design, video creation,
                                          and coding lessons. have been working on so many projects that 
                                          would eventually make me a better software developer.</p>

                                    <p class="wow fadeInUp" data-wow-delay="0.2s">When I'm not writing code, I enjoy editing and learning about emerging technologies, travelling and learning managing money. I share the things I've learned through short videos or on my blog. Recently I created this Express Eat website to stack my knowledge in cooking and enhance also my programming skills.</p>

                              </div>
                        </div>

                        <div class="row" data-aos="fade-up">
                              <div class="col-lg-12">
                                    <h3 class="wow fadeInUp" data-wow-delay="1.2s">tech stack.</h3><br>
                                    <marquee behavior="scroll" direction="left">

                                          <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/HTML.png',      
                                                      'width' => '200',
                                                      'height' => '160'
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                          <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/CSS.png',      
                                                      'width' => '200',
                                                      'height' => '160'
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                          <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/JavaScript.png',      
                                                      'width' => '200',
                                                      'height' => '160'
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                          <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/Python.png',      
                                                      'width' => '200',
                                                      'height' => '160'
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                          <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/Photoshop.png',      
                                                      'width' => '200',
                                                      'height' => '160'
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                          <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/PremierePro.png',      
                                                      'width' => '200',
                                                      'height' => '160'
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                          <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/AfterEffect.png',      
                                                      'width' => '200',
                                                      'height' => '160'
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                          <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/Figma.png',      
                                                      'width' => '200',
                                                      'height' => '160'
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                          <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/Google-Script.png',      
                                                      'width' => '200',
                                                      'height' => '160'
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                          <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/Milanote.png',      
                                                      'width' => '200',
                                                      'height' => '160'
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                          <?php
                                                $imageProperties = [    
                                                      'src'    => 'img/Notion.png',      
                                                      'width' => '200',
                                                      'height' => '160'
                                                ];
                                                
                                                echo img($imageProperties);
                                          ?>
                                    </marquee>
                              </div>
                        </div>
                  </div>
            </div>

            <div class="alter-whitespace"></div>

            <div class="container" data-aos="fade-up">
                  <div class="row marginRow" >
                        <h3 class="wow fadeInUp service" data-wow-delay="1.2s">services.</h3>
                        <div class="alter-whitespace"></div>

                      <div class="col-md-4" >
                          <div class="box-services" >
                              <span>Web Design / Development</span>                      
                              <p>A good idea can only be born out of a good imagination an eye for detail and crafting pixel perfect websites are our strengths. I'm most excited about creating useful user experiences and driving users towards desired actions. Designing and developing high quality Web Applications, Websites, Landing Pages and Apps is a huge part of my daily life.</p>
                          </div>
                      </div>
                      <div class="col-md-4" >
                          <div class="box-services" >
                              <span>Graphic Design</span>                   
                              <p>Working and studies keep you busy? Don't have time to edit photos, videos, or graphical representations? Allow me to manage the idea and edit it to the highest quality for you. I can edit photos and videos, as well as create graphics. I can also build mockup designs to help your company's productivity. </p>
                          </div>
                      </div>
                      <div class="col-md-4" >
                          <div class="box-services" >
                              <span>Computer Support</span>                     
                              <p>You don't have time to build a computer, and you're experiencing trouble with some of your computer's problems? Allow me to assist you with computer construction, repair, and installation. And any other desktop or laptop issues. I have four years of experience, no bachelor's degree in computer assistance, but I have learnt a lot from school and the internet.</p>
                          </div>
                      </div>                         
                  </div>
              </div>

              <div class="alter-whitespace"></div>

              <div class="container" data-aos="fade-up">
                  <table class="table table-borderless table-responsive">
                        <h3 class="wow fadeInUp service" data-wow-delay="1.2s">experience.</h3>
                        <br><br>
                        <div class="col-md-4" >
                              <tbody>
                                    <tr>
                                    <td>Asia Pacific College</td>
                                    <td>College Undegraduate</td>
                                    <td>August 21- Present</td>
                                    </tr>
                                    <tr>
                                    <td>Adamson University</td>
                                    <td>Senior High School</td>
                                    <td>August 2019- July 2021</td>
                                    </tr>
                                    <tr>
                                    <td>PCWHS - STE Program</td>
                                    <td>Junior High School</td>
                                    <td>June 2015 - April 2019</td>
                                    </tr>
                              </tbody>      
                        </div>
                  </table>
              </div>

              <div class="alter-whitespace"></div>

              <div class="container" data-aos="fade-up">
                  <h3 class="wow fadeInUp service" data-wow-delay="1.2s">award & certificate.</h3>    
                  <br><br>  

                  <div class="cursors"></div>
                  <div class="cursor-followers"></div>
                  
		  <div class="table-responsive">
			  <table class="table">
			    <thead>
			      <tr class="award-head">
				<th class="award-head-first">awards</th>
				<th>platform</th>
				<th>project</th>
			      </tr>
			    </thead>
			    <tbody>
			      <tr class="award-body">
				<td><a href="https://www.designrush.com/best-designs" target=_blank class="cert">Best Design Awards </a></td>
				<td><a href="https://www.designrush.com/best-designs" target=_blank  class="cert">DesignRush</a></td>
				<td><a href="https://www.designrush.com/best-designs" target=_blank class="cert">The Best Black and White Web Designs</a></td>
			      </tr>    
			      <tr class="award-body">
				<td><a href="https://www.freecodecamp.org/certification/TianMeds/responsive-web-design" target=_blank class="cert">Developer Certificate</a></td>
				<td><a href="https://www.freecodecamp.org/certification/TianMeds/responsive-web-design" target=_blank  class="cert">FreeCodeCamp</a></td>
				<td><a href="https://www.freecodecamp.org/certification/TianMeds/responsive-web-design" target=_blank class="cert">Responsive Web Design</a></td>
			      </tr>
			      <tr class="award-body">
				<td><a href="https://www.linkedin.com/learning/certificates/a84865577bb6b53c7d99f064a8784be65f340efa2348d7d2a03e75352382e094?u=35279340" target=_blank class="cert">Course Completion</a></td>
				<td><a href="https://www.linkedin.com/learning/certificates/a84865577bb6b53c7d99f064a8784be65f340efa2348d7d2a03e75352382e094?u=35279340" target=_blank class="cert">Linkedln</a></td>
				<td><a href="https://www.linkedin.com/learning/certificates/a84865577bb6b53c7d99f064a8784be65f340efa2348d7d2a03e75352382e094?u=35279340" target=_blank  class="cert">Data Structure: Trees</a></td>
			      </tr>
			      <tr class="award-body">
                        <td><a href="https://drive.google.com/file/d/1QqHj7EppO-BVTCgnSX7kEzCw-l7i6sOU/view" target=_blank class="cert">Course Completion</a></td>
                        <td><a href="https://drive.google.com/file/d/1QqHj7EppO-BVTCgnSX7kEzCw-l7i6sOU/view" target=_blank class="cert">Linkedln</a></td>
				<td><a href="https://drive.google.com/file/d/1QqHj7EppO-BVTCgnSX7kEzCw-l7i6sOU/view" target=_blank class="cert">Flowcharts</a></td>
			      </tr>
			      <tr class="award-body">
				<td><a href="https://drive.google.com/file/d/1jMGiBdSzM73B6a2Y-TNU-KkZRmTwplPl/view" target=_blank class="cert">Compeletion Certificate</a></td>
				<td><a href="https://drive.google.com/file/d/1jMGiBdSzM73B6a2Y-TNU-KkZRmTwplPl/view" target=_blank class="cert">Code Combat</a></td>
				<td><a href="https://drive.google.com/file/d/1jMGiBdSzM73B6a2Y-TNU-KkZRmTwplPl/view" target=_blank class="cert">Intro to CSS Basic</a></td>
			      </tr>
                        <tr class="award-body">
                        <td><a href="https://www.linkedin.com/learning/certificates/03f7dc6adfea1bb1b68d3de61e076d0fe3cd3ff9c8a26827b16ae679d3311a99?u=35279340" target=_blank class="cert">DATAMA1 Completion</a></td>
                        <td><a href="https://www.linkedin.com/learning/certificates/03f7dc6adfea1bb1b68d3de61e076d0fe3cd3ff9c8a26827b16ae679d3311a99?u=35279340" target=_blank class="cert">Linkedln</a></td>
                        <td><a href="https://www.linkedin.com/learning/certificates/03f7dc6adfea1bb1b68d3de61e076d0fe3cd3ff9c8a26827b16ae679d3311a99?u=35279340" target=_blank class="cert">Relational Databases Essential Training</a></td>
                        </tr>
                        <tr class="award-body">
                        <td><a href="https://www.linkedin.com/learning/certificates/8c77cd626023286477db556aeb7e0f04520250a818eca290369b89315634eae3?u=35279340" target=_blank class="cert">UX Foundation</a></td>
                        <td><a href="https://www.linkedin.com/learning/certificates/8c77cd626023286477db556aeb7e0f04520250a818eca290369b89315634eae3?u=35279340" target=_blank class="cert">Linkedln</a></td>
                        <td><a href="https://www.linkedin.com/learning/certificates/8c77cd626023286477db556aeb7e0f04520250a818eca290369b89315634eae3?u=35279340" target=_blank class="cert">Prototyping</a></td>
                        </tr>
                        <tr class="award-body">
                        <td><a href="https://drive.google.com/file/d/1MG2_I_Dy7OWX6fFpk4dGenWV82FXnLaM/view" target=_blank class="cert">Compeletion Certificate</a></td>
				<td><a href="https://drive.google.com/file/d/1MG2_I_Dy7OWX6fFpk4dGenWV82FXnLaM/view" target=_blank class="cert">Hour of Code</a></td>
				<td><a href="https://drive.google.com/file/d/1MG2_I_Dy7OWX6fFpk4dGenWV82FXnLaM/view" target=_blank class="cert">Basic Concept of CS</a></td>
			      </tr>
			    </tbody>
			  </table>
		      </div>
                  <br><br>
                  <a href="award" id="view">View More</a>
                </div>
          
            <!--------------- hero section ends here --------------->

            <div class="whitespace"></div>

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

            <br><br><br><br>

      </div>

      <!-- greensock cdn -->
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.2/TweenMax.min.js"></script>
      <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
      <script>
        AOS.init();
      </script>

      <script src="https://code.jquery.com/jquery-3.4.1.js"></script>
      <script src="./scripts/script.js"></script>
</body>
</html>
