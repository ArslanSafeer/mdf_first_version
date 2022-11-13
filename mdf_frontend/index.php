
<?php
session_start();

if(!isset($_SESSION['uid'])){
header('location:signin.php');
}

?>
<?php
include 'header.php';

?>
		<!-- Header Close -->
		<div class="banner">
			<div class="owl-four owl-carousel" itemprop="image">
				<img src="images/page-banner.jpg" alt="Image of Bannner">
				<img src="images/page-banner2.jpg" alt="Image of Bannner">
				<img src="images/page-banner3.jpg" alt="Image of Bannner">
			</div>
			<div class="container" itemprop="description">
				<h1>welcome to MDF Education Portal</h1>
				
			</div>
			 <div id="owl-four-nav" class="owl-nav"></div>
		</div>

		<!-- Banner Close -->
		<div class="page-heading">
			<div class="container">
				<h2>popular courses</h2>
			</div>
		</div>
		<!-- Popular courses End -->
		<div class="learn-courses">
			<div class="container">
				<div class="courses">
					<div class="owl-one owl-carousel">
						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap" itemprop="image"><img src="images/course-pic.jpg" alt="courses picture"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">Learn Web Development >>></a>
							<div class="box-body" itemprop="description">
								<p>A web developer's job is to create websites. While their primary role is to ensure the website is visually appealing and easy to navigate.</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Months</p>
									<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
									<p><span>Fee:</span> 40000</p>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="images/course-pic.jpg" alt="courses picture"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">Web Designing >>></a>
							<div class="box-body" itemprop="description">
								<p>Web design has numerous components that work together to create the finished experience of a website, including graphic design, user experience design.</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Months</p>
									<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
									<p><span>Fee:</span> 40000</p>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="images/course-pic.jpg" alt="courses picture"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">SEO >>></a>
							<div class="box-body" itemprop="description">
								<p>SEO means Search Engine Optimization and is the process used to optimize a website's technical configuration, content relevance and link popularity so its pages can become easily findable</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Months</p>
									<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
									<p><span>Fee:</span> 40000</p>
								</section>
							</div>
						</div>

						<div class="box-wrap" itemprop="event" itemscope itemtype=" http://schema.org/Course">
							<div class="img-wrap"  itemprop="image"><img src="images/course-pic.jpg" alt="courses picture"></div>
								<a href="#" class="learn-desining-banner" itemprop="name">Graphics Designing >>></a>
							<div class="box-body" itemprop="description">
								<p>Graphic design is a craft where professionals create visual content to communicate messages. By applying visual hierarchy and page layout techniques, designers use typography and pictures to meet users' specific needs.</p>
								<section itemprop="time">
									<p><span>Duration:</span> 4 Months</p>
									<p><span>Class Time:</span> 6am-12am / 11am-5pm</p>
									<p><span>Fee:</span> 40000</p>
								</section>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- Learn courses End -->
		<section class="whyUs-section">
			<div class="container">
				<div class="featured-points">
					<ul>
						<li><i class="fas fa-money-check-alt"></i> affordable fees</li>
						<li><i class="fas fa-chalkboard-teacher"></i> experienced teachers</li>
						
					</ul>
				</div>
				<div class="whyus-wrap">
					<h1>why us?</h1>
					<p itemprop="description">MDF is a great platform for learning some technologies like web development, web designing, Graphic designing and many more. MDF provide an experience trainers who have a huge practical experience in their fields. MDF provide a professional and Clean enviornment for their students. MDF want to make murree a digital hub and he want to educate a youth of murree who can not afford paid courses. MDF courge them and provide a batter and professonal environment for education. </p>

					<a href="#" class="read-more-btn">read more</a>
				</div>
			</div>
		</section>
		<!-- Closed WhyUs section -->
		<section class="page-heading">
			<div class="container">
				<h2>gallery</h2>
			</div>
		</section>
		<section class="gallery-images-section" itemprop="image" itemscope itemtype=" http://schema.org/ImageGallery">
			<div class="gallery-img-wrap">
				<a href="images/gallery-img1.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="images/gallery-img1.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img2.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="images/gallery-img2.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img3.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="images/gallery-img3.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img4.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="images/gallery-img4.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img5.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="images/gallery-img5.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img6.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="images/gallery-img6.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img7.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="images/gallery-img7.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img8.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="images/gallery-img8.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img9.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="images/gallery-img9.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img10.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="images/gallery-img10.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img11.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="images/gallery-img11.jpg" alt="gallery-images">
				</a>
			</div>
			<div class="gallery-img-wrap">
				<a href="images/gallery-img12.jpg" data-lightbox="example-set" data-title="Click the right half of the image to move forward.">
					<img src="images/gallery-img12.jpg" alt="gallery-images">
				</a>
			</div>
		</section>
		<!-- End of gallery Images -->
		<section class="page-heading">
			<div class="container">
				<h2>upcomming events</h2>
			</div>
		</section>
		<section class="events-section" itemprop="event" itemscope itemtype=" http://schema.org/Event">
			<div class="container">
				<div class="event-wrap">
					<div class="img-wrap" itemprop="image">
						<img src="images/events.jpg" alt="event images">
					</div>
					<div class="details">
						<a href=""><h3 itemprop="name">Orientation Programme for new Students.</h3></a>
						<p itemprop="description">Orientation Programme for new sffs Students. Orientation Programme for new sffs Students. Orientation Programme for new sffs Students.</p>

						<h5 itemprop="startDate"><i class="far fa-clock"></i> </h5>
						<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i></h5>
					</div>
				</div>

				<div class="event-wrap">
					<div class="img-wrap" itemprop="image">
						<img src="images/events.jpg" alt="event images">
					</div>
					<div class="details">
						<a href=""><h3 itemprop="name">Orientation Programme for new Students.</h3></a>
						<p itemprop="description">Orientation Programme for new sffs Students. Orientation Programme for new sffs Students. Orientation Programme for new sffs Students.</p>

						<h5 itemprop="startDate"><i class="far fa-clock"></i> </h5>
						<h5 itemprop="location"><i class="fas fa-map-marker-alt"></i></h5>
					</div>
				</div>
			</div>
		</section>
		<!-- End of Events section -->
		<section class="what-other-say">
		<!-- Latest News CLosed -->
		<?php
include 'footer.php';

?>