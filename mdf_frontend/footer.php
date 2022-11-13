
<?php
include 'db.php';

if (isset($_POST['done'])) {
	$email=$_POST['email'];
	$phone_number=$_POST['phone_number'];
	$student_quick_message=$_POST['student_quick_message'];
	$sql="INSERT INTO `quick_message`(`email`,`phone_number`, `student_quick_message`) VALUES ('$email','$phone_number','$student_quick_message')";
$query=mysqli_query($con,$sql);
if ($query) {
	echo"Message send";
}else{
	echo"There is some problem in sending a message";
}

}

?>


<section class="query-section">
			<div class="container">
				<p>Any Queries? Ask us a question at<a href=""><i class="fas fa-phone"></i> +92 3125493112</a></p>
			</div>
		</section>
		<!-- End of Query Section -->
		<footer class="page-footer" itemprop="footer" itemscope itemtype="http://schema.org/WPFooter">
			<div class="footer-first-section">
				<div class="container">
					<div class="box-wrap" itemprop="about">
						<header>
							<h1>about</h1>
						</header>
						<p>MDF is a great start with geart education.</p>

						<h4><a href=""><i class="fas fa-phone"></i> +92 3125493112</a></h4>
						<h4><a href=""><i class="fas fa-envelope"></i> info@mdf.com</a></h4>
						<h4><a href=""><i class="fas fa-map-marker-alt"></i>Islamabad,Pakistan</a></h4>
					</div>



					<div class="box-wrap">
						<header>
							<h1>quick contact</h1>
						</header>
						<section class="quick-contact">
							<form method="post">
							<input type="email" name="email" placeholder="Your Email*" required><br><br>
							<input type="text" name="phone_number" placeholder="Your Phone No*" required>
							<textarea name="student_quick_message" placeholder="Type your message*" required></textarea>
							<button type="submit"name="done" value="submit" class="btn btn-success">send message</button>
						</form>
						</section>
					</div>

				</div>
			</div>
			<!-- End of box-Wrap -->
			<div class="footer-second-section">
				<div class="container">
					<hr class="footer-line">
					<ul class="social-list">
						<li><a href=""><i class="fab fa-facebook-square"></i></a></li>
						<li><a href=""><i class="fab fa-twitter"></i></a></li>
						<li><a href=""><i class="fab fa-skype"></i></a></li>
						<li><a href=""><i class="fab fa-youtube"></i></a></li>
						
					</ul>
					<hr class="footer-line">
				</div>
			</div>
			<div class="footer-last-section">
				<div class="container">
					<p>Copyright reserve 2022 &copy; mdf.com</p>
				</div>
			</div>
		</footer>

		<!-- <nav id="menu">
			<ul>
				<li><a href="#">HOME</a></li>
				<li>
					<span>COURSES</span>
					<ul>
						<li><a href="#/courses/child">Child</a></li>
						<li><a href="#/courses/child">Child</a></li>
						<li>
							<span>Child</span>
							<ul>
								<li><a href="#/courses/child/grandChild">Grand Child</a></li>
								<li><a href="#/courses/child/grandChild">Grand Child</a></li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="#">gallery</a>
					<ul>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
					</ul>
				</li>
				<li>
					<a href="#">news</a>
					<ul>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
						<li><a href="#">Child</a></li>
					</ul>
				</li>
				<li><a href="#">about</a></li>
				<li><a href="#">contact</a></li>
			</ul>
		</nav> -->

	</div>
	<script type="text/javascript" src="js/jquery-3.3.1.min.js"></script>
	<script type="text/javascript" src="js/lightbox.js"></script>
	<script type="text/javascript" src="js/all.js"></script>
	<script type="text/javascript" src="js/isotope.pkgd.min.js"></script>
	<script type="text/javascript" src="js/owl.carousel.js"></script>
	<script type="text/javascript" src="js/jquery.flexslider.js"></script>
	<script type="text/javascript" src="js/jquery.rateyo.js"></script>
	<!-- <script type="text/javascript" src="js/jquery.mmenu.all.js"></script> -->
	<!-- <script type="text/javascript" src="js/jquery.meanmenu.min.js"></script> -->
	<script type="text/javascript" src="js/custom.js"></script>
</body>
</html>