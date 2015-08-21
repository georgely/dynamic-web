<nav class="navbar navbar-default" role="navigation">

	<div class="container">

		<ul class="nav navbar-nav">
			<li <?php
			if ($pageid == 1) {echo 'class ="active"';
			}
 ?> >
				<a href="?page=1">Home</a>
			</li>
			<li <?php
				if ($pageid == 2) {echo 'class ="active"';
				}
 ?>>
				<a href="?page=2">About us</a>
			</li>
			<li>
				<a href="#">FAQ</a>
			</li>
			<li>
				<a href="#">Contact Us</a>
			</li>
		</ul>

	</div>
</nav>
<!-- End nav -->