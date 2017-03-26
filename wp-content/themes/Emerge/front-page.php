<?php get_header(); ?>


<!-- <img src="http://localhost/Emerge/wp-content/uploads/2014/06/19201080eg.jpg"> -->
<nav id="addhere" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand scroll" href="#1">Emerge Gaming</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-left">
        <li><a id="click" class="scroll" href="#2">Teamspeak</a></li>
        <li><a class="scroll" href="#3">CS: GO</a></li>
        <li><a class="scroll" href="#4">League Of Legends</a></li>
        <li><a class="scroll" href="#5">Steam</a></li>
        <li><a href="checkers/">Checkers</a></li>
      </ul>
      <form class="navbar-form navbar-right">
		<a href="<?php echo get_admin_url( $blog_id, $path, $scheme ); ?>" type="button" class="btn btn-default btn-md">
			<span class="glyphicon glyphicon-user"></span> Log In
		</a>
		</form>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>

<div id="1" class="not-fullscreen background" style="background-image:url('http://localhost/Emerge/wp-content/uploads/2014/06/19201080eg.jpg');" data-img-width="1920" data-img-height="1080">
    <div class="content-a">

        <div class="content-b">

        </div>
    </div>
</div>

<!-- TEAMSPEAK -->
<div id="2" class="not-fullscreen background" style="background-image:url('http://localhost/Emerge/wp-content/uploads/2014/06/teamspeak.jpg');" data-img-width="1920" data-img-height="1080">
    <div class="content-a">
        <div class="content-b">
	        <div class="row">
		        <div  class="col-sm-offset-2 col-sm-4 well">
		        	<?php the_field('top_section', get_page_by_path( 'teamspeak' )); ?>
		        	<div class="panel-group" id="accordion">

					<?php if(get_field('collapsible_1_title', get_page_by_path( 'teamspeak' ))):?>
					  <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">
					          <?php the_field('collapsible_1_title', get_page_by_path( 'teamspeak' )); ?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseOne" class="panel-collapse collapse">
					      <div class="panel-body">
					      <?php the_field('collapsible_1', get_page_by_path( 'teamspeak' )); ?>
					      </div>
					    </div>
					  </div>
					<?php endif; ?>

					  <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">
					          <?php the_field('collapsible_2_title', get_page_by_path( 'teamspeak' )); ?>
					        </a>
					      </h4>
					    </div>
					    <!-- HERE HERE HERE -->
					    <div id="collapseTwo" class="panel-collapse collapse" style="max-height: 300px;">
					      <div class="panel-body">
					        <?php the_field('collapsible_2', get_page_by_path( 'teamspeak' )); ?>
					      </div>
					    </div>
					  </div>

					  <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">
					          <?php the_field('collapsible_3_title', get_page_by_path( 'teamspeak' )); ?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseThree" class="panel-collapse collapse">
					      <div class="panel-body">
					      	<div class="video-container"> 
					        	<?php the_field('collapsible_3', get_page_by_path( 'teamspeak' )); ?>
					        </div>
					      </div>
					    </div>
					  </div>

					  <a href="<?php the_field('join_teamspeak_link', get_page_by_path( 'teamspeak' )); ?>" type="button" class="btn btn-default btn-lg btn-block">Join Teamspeak.</a>
					  

					</div>
		        </div>
		        <div class="col-sm-6">        	
		        </div>
	        </div>
        </div>

    </div>
</div>

<!-- Counter Strike -->
<div id="3" class="not-fullscreen background" style="background-image:url('http://localhost/Emerge/wp-content/uploads/2014/06/counter_strike_cs_go-wallpaper-1920x1080.jpg');" data-img-width="1920" data-img-height="1080">
	<div class="content-a">

		<div class="content-b">
			<div class="row">  
		        <div class="col-sm-offset-2 col-sm-4 well">
		        	<?php the_field('top_section', get_page_by_path( 'csgo' )); ?>
		        	<div class="panel-group" id="accordion2">

					  <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseFour">
					          <?php the_field('collapsible_1_title', get_page_by_path( 'csgo' )); ?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseFour" class="panel-collapse collapse">
					      <div class="panel-body">
					      <?php the_field('collapsible_1', get_page_by_path( 'csgo' )); ?>
					      </div>
					    </div>
					  </div>

					  <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseFive">
					          <?php the_field('collapsible_2_title', get_page_by_path( 'csgo' )); ?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseFive" class="panel-collapse collapse">
					      <div class="panel-body">
					        <?php the_field('collapsible_2', get_page_by_path( 'csgo' )); ?>
					      </div>
					    </div>
					  </div>

					  <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion2" href="#collapseSix">
					          <?php the_field('collapsible_3_title', get_page_by_path( 'csgo' )); ?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseSix" class="panel-collapse collapse">
					      <div class="panel-body">
					        	<?php the_field('collapsible_3', get_page_by_path( 'csgo' )); ?>
					      </div>
					    </div>
					  </div>
					</div>
		        </div>
		        <div class="col-sm-6">        	
		        </div>
	        </div>
		</div>
	</div>
</div>
</div>
</div>

<!-- League of Legends -->
<div id="4" class="not-fullscreen background" style="background-image:url('http://localhost/Emerge/wp-content/uploads/2014/06/katarina_the_sinister_blade___league_of_legends-wallpaper-1920x1080.jpg');" data-img-width="1920" data-img-height="1080">
    <div class="content-a">

        <div class="content-b">
        	<div class="row">  
		        <div class="col-sm-offset-2 col-sm-4 well">
		        	<?php the_field('top_section', get_page_by_path( 'league' )); ?>
		        	<div class="panel-group" id="accordion3">

					  <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion3" href="#collapseSeven">
					          <?php the_field('collapsible_1_title', get_page_by_path( 'league' )); ?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseSeven" class="panel-collapse collapse">
					      <div class="panel-body">
					      <?php the_field('collapsible_1', get_page_by_path( 'league' )); ?>
					      </div>
					    </div>
					  </div>

					  <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion3" href="#collapseEight">
					          <?php the_field('collapsible_2_title', get_page_by_path( 'league' )); ?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseEight" class="panel-collapse collapse">
					      <div class="panel-body">
					        <?php the_field('collapsible_2', get_page_by_path( 'league' )); ?>
					      </div>
					    </div>
					  </div>

					  <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion3" href="#collapseNine">
					          <?php the_field('collapsible_3_title', get_page_by_path( 'league' )); ?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseNine" class="panel-collapse collapse">
					      <div class="panel-body">
					      	<div class="overflow"> 
					        	<?php the_field('collapsible_3', get_page_by_path( 'league' )); ?>
					        </div>
					      </div>
					    </div>
					  </div>
					</div>
		        </div>
		        <div class="col-sm-6">        	
		        </div>
	        </div>

        </div>
    </div>
</div>

<div id="5" class="not-fullscreen background" style="background-image:url('http://localhost/Emerge/wp-content/uploads/2014/06/Gaben.jpg');" data-img-width="1920" data-img-height="1080">
    <div class="content-a">

        <div class="content-b">
        <div class="row">  
		        <div class="col-sm-offset-2 col-sm-4 well">
		        	<?php the_field('top_section', get_page_by_path( 'steam' )); ?>
		        	<div class="panel-group" id="accordion4">

					  <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion4" href="#collapseTen">
					          <?php the_field('collapsible_1_title', get_page_by_path( 'steam' )); ?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseTen" class="panel-collapse collapse">
					      <div class="panel-body">
					      <?php the_field('collapsible_1', get_page_by_path( 'steam' )); ?>
					      </div>
					    </div>
					  </div>

					  <div class="panel panel-default">
					    <div class="panel-heading">
					      <h4 class="panel-title">
					        <a data-toggle="collapse" data-parent="#accordion4" href="#collapseEleven">
					          <?php the_field('collapsible_2_title', get_page_by_path( 'steam' )); ?>
					        </a>
					      </h4>
					    </div>
					    <div id="collapseEleven" class="panel-collapse collapse">
					      <div class="panel-body">
					        <?php the_field('collapsible_2', get_page_by_path( 'steam' )); ?>
					      </div>
					    </div>
					  </div>

					</div>
					<a href="<?php the_field('steam_link', get_page_by_path( 'steam' )); ?>" type="button" class="btn btn-default btn-lg btn-block">Visit Steam Page</a>
		        </div>
		        <div class="col-sm-6">        	
		        </div>
	        </div>

        </div>
    </div>
</div>
<script>
	function importClass() {
    if(screen.width<768)
     {
        document.write("<div class="container row">"); // this css runs in only 1024 resulation
     }
  else
    {
        document.write("<div class="row"> "); // for other resulatiom
    }
}
	
</script>

<?php get_footer(); ?>