<?php
/**
 * The template used for displaying page content for a signup page
 *
 * @package WordPress
 * @subpackage Twenty_Eleven
 * @since Twenty Eleven 1.0
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<!--<header class="entry-header">
		<h1 class="entry-title"><?php the_title(); ?></h1>
	</header>--><!-- .entry-header -->

	<div class="entry-content">
		<?php the_content(); ?>
		<p><!-- Begin MailChimp Signup Form --></p>
<div id="mc_embed_signup">
<img src="http://www.readyrosie.com/wp-content/uploads/2012/09/subscribe.png" alt="" title="subscribe" width="446" height="109" class="alignnone size-full wp-image-631"></p>
<form action="http://readyrosie.us5.list-manage1.com/subscribe/post?u=8d30c201c0551923fac27c1dd&amp;id=7bdf584c94" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
<div class="mc-field-group"> 
	<label for="mce-MMERGE6">Name Of Adult / Nombre del adulto:  </label><input type="text" value="" name="MMERGE6" class="" id="mce-MMERGE6">
</div>
<div class="mc-field-group">
	<label for="mce-MMERGE7">Name of Child / Nombre del niño</label><input type="text" value="" name="MMERGE7" class="" id="mce-MMERGE7">
</div>
<div class="mc-field-group">
	<label for="mce-MMERGE8">Relationship to child / Relación al niño:</label></p>
<select name="MMERGE8" class="" id="mce-MMERGE8">
<option value=""></option>
<option value="Mother">Mother</option>
<option value="Father">Father</option>
<option value="Grandparent">Grandparent</option>
<option value="Other legal guardian">Other legal guardian</option>
<option value="Teacher">Teacher</option>
<option value="Administrator">Administrator</option>
</select>
</div>
<div class="mc-field-group">
	<label for="mce-MMERGE9">Age of child(ren) / Edad del niño: </label></p>
<select name="MMERGE9" class="" id="mce-MMERGE9">
<option value=""></option>
<option value="3">3</option>
<option value="4">4</option>
</select>
</div>
<div class="mc-field-group">
	<label for="mce-EMAIL">Email Address / Correo electrónico <span class="asterisk">*</span><br />
</label><input type="email" value="" name="EMAIL" class="required email" id="mce-EMAIL">
</div>
<div class="mc-field-group">
	<label for="mce-MMERGE10">Name of school/center / Nombre de la escuela/del centro </label></p>
<select name="MMERGE10" class="" id="mce-MMERGE10">
<option value=""></option>
<option value="Abram HeadStart">Abram HeadStart</option>
<option value="Allstars Learning Center">Allstars Learning Center</option>
<option value="Amos Elementary">Amos Elementary</option>
<option value="Anderson Elementary">Anderson Elementary</option>
<option value="Arlington 1 HeadStart">Arlington 1 HeadStart</option>
<option value="Arlington 2 HeadStart">Arlington 2 HeadStart</option>
<option value="Atherton Elementary">Atherton Elementary</option>
<option value="Berry Elementary">Berry Elementary</option>
<option value="Blanton Elementary">Blanton Elementary</option>
<option value="Burgin Elementary">Burgin Elementary</option>
<option value="Children’s Place">Children’s Place</option>
<option value="Childtime">Childtime</option>
<option value="Crouch Elementary">Crouch Elementary</option>
<option value="Crow Elementary">Crow Elementary</option>
<option value="Destiny Academy">Destiny Academy</option>
<option value="East Arlington HeadStart">East Arlington HeadStart</option>
<option value="Ellis Elementary">Ellis Elementary</option>
<option value="Foster Elementary">Foster Elementary</option>
<option value="Goodman Elementary">Goodman Elementary</option>
<option value="Hale Elementary">Hale Elementary</option>
<option value="Humpty Dumpty">Humpty Dumpty</option>
<option value="Johns Elementary">Johns Elementary</option>
<option value="Kid’s Community">Kid’s Community</option>
<option value="Knox Elementary">Knox Elementary</option>
<option value="Kooken Educational Center (PK only)">Kooken Educational Center (PK only)</option>
<option value="Larson Elementary">Larson Elementary</option>
<option value="Morton Elementary">Morton Elementary</option>
<option value="Pope Elementary">Pope Elementary</option>
<option value="Rankin Elementary">Rankin Elementary</option>
<option value="Remynse Elementary">Remynse Elementary</option>
<option value="Roark Elementary">Roark Elementary</option>
<option value="Roquemore Elementary">Roquemore Elementary</option>
<option value="Sherrod Elementary">Sherrod Elementary</option>
<option value="Speer Elementary">Speer Elementary</option>
<option value="Thornton Elementary">Thornton Elementary</option>
<option value="Webb Elementary">Webb Elementary</option>
<option value="Wimbish Elementary">Wimbish Elementary</option>
<option value="YWCA">YWCA</option>
<option value="Zone 4 Kids">Zone 4 Kids</option>
</select>
</div>
<div id="mce-responses" class="clear">
<div class="response" id="mce-error-response" style="display:none"></div>
<div class="response" id="mce-success-response" style="display:none"></div>
</p>
</div>
<div class="clear">
			<input type="submit" name="mc_signup_submit" id="mc_signup_submit" value="Subscribe" class="button">
		</div>
</form>
<div class="indicates-required"><span class="asterisk">*</span> indicates required</div>
</div>
<p><!--End mc_embed_signup--></p>

		<?php wp_link_pages( array( 'before' => '<div class="page-link"><span>' . __( 'Pages:', 'twentyeleven' ) . '</span>', 'after' => '</div>' ) ); ?>
	</div><!-- .entry-content -->
	<footer class="entry-meta">
		<?php edit_post_link( __( 'Edit', 'twentyeleven' ), '<span class="edit-link">', '</span>' ); ?>
	</footer><!-- .entry-meta -->
</article><!-- #post-<?php the_ID(); ?> -->
