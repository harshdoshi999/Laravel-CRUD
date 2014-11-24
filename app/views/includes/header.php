<body>
	<div class="navbar navbar-default navbar-fixed-top">
		<title>Lara - CRUD</title>
      	<div class="container">
        	<div class="navbar-header">
          		<a href="<?php echo URL::to('/'); ?>" class="navbar-brand">Lara-Demo</a>
	          	<button class="navbar-toggle" type="button" data-toggle="collapse" data-target="#navbar-main">
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	            	<span class="icon-bar"></span>
	          	</button>
        	</div>
        	<div class="navbar-collapse collapse" id="navbar-main">
          		<ul class="nav navbar-nav">
            		<li><a href="<?php echo URL::to('/addUser'); ?>">+Add new</a></li>
	          	</ul>
	          	<ul class="nav navbar-nav navbar-right">
	            	<li class="dropdown">
	              		<a class="dropdown-toggle" data-toggle="dropdown" style="cursor:pointer" id="download">Account <span class="caret"></span></a>
	              		<ul class="dropdown-menu" aria-labelledby="download">
			                <li><a onclick="alert('Under Construction!!!')">Login</a></li>
			                <li><a onclick="alert('Under Construction!!!')">Sign up</a></li>
	              		</ul>
	            	</li>
	          	</ul>
        	</div>
    	</div>
	</div>
</body>
