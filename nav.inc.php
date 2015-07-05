<!-- Static navbar -->
<nav class="navbar navbar-default navbar-fixed-top js-toggleClass">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
			<span class="sr-only">Toggle navigation</span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			<span class="icon-bar"></span>
			</button>
			<a class="navbar-brand" href="/">West Cork Tiling</a>
		</div>
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
				<?php
				foreach($navItems as $nav_title => $nav_link)
				{
				    echo '<li '.($nav_link == $urlPath ? 'class="active"':'').'><a href="'.$nav_link.'">'.$nav_title.'</a></li>';
				}
				?>
			</ul>
		</div><!--/.nav-collapse -->
	</div>
</nav>