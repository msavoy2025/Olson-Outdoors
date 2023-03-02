<?php
/*
Template Name: Email V3
Template Post Type: email
*/
?>
<html>
<body>
  <style>
    .topBorder {
      margin-bottom:-10px;
    }

    p {
      margin:0;
    }

  </style>
<?php
while (have_posts()) {
  the_post();?>

  <table width="355" border="0" cellspacing="0" cellpadding="0">
  	<tr>
  		<td class="img" style="font-size:0pt; line-height:0pt; text-align:left;">
  			<img src="<?php echo get_theme_file_uri('/resources/images/top_decoration.png') ?>" width="355" height="26" border="0" alt="" />
  		</td>
  	</tr>
  	<tr>
  		<td>
  			<!-- Content -->
  			<table width="355" border="0" cellspacing="0" cellpadding="0" bgcolor="#485e3a">
  				<tr>
  					<td class="px-27 pt-6 pb-20" style="padding-left: 27px; padding-right: 27px; padding-top: 6px; padding-bottom: 20px;">
  						<table width="100%" border="0" cellspacing="0" cellpadding="0">
  							<tr>
  								<td class="title-34 fw-b c-lorange" style="font-size:34px; line-height:38px; font-family:Arial, sans-serif; text-align:left; min-width:auto !important; font-weight:bold; color:#e9dcce;">
  									<?php echo get_field('name'); ?>
  								</td>
  							</tr>
  							<tr>
  								<td class="text-6 c-lorange tt-u pb-17" style="font-size:6px; line-height:10px; font-family:Arial, sans-serif; text-align:left; min-width:auto !important; color:#e9dcce; text-transform:uppercase; padding-bottom: 17px;">
  									<?php the_content(); ?>
  								</td>
  							</tr>
  							<tr>
  								<td class="pb-10" style="padding-bottom: 10px;">
  									<table border="0" cellspacing="0" cellpadding="0">
  										<tr>
  											<td class="text-8 c-lorange tt-u" style="font-size:8px; line-height:12px; font-family:Arial, sans-serif; text-align:left; min-width:auto !important; color:#e9dcce; text-transform:uppercase;">
  												<?php echo get_field('phone'); ?> <br /> 770 west 120th avenue <br /> broomfield, co 80020
  											</td>
  											<td class="img" width="44" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
  											<td class="text-6 c-lorange tt-u" valign="top" style="font-size:6px; line-height:10px; font-family:Arial, sans-serif; text-align:left; min-width:auto !important; color:#e9dcce; text-transform:uppercase;">
  												<a href="https://olsonoutdoors.com/" target="_blank" class="link c-lorange" style="text-decoration:none; color:#e9dcce;"><span class="link c-lorange" style="text-decoration:none; color:#e9dcce;">olsonoutdoors.com</span></a>
  												<br /> <a href="https://olsonoutdoors.com/" target="_blank" class="link c-lorange" style="text-decoration:none; color:#e9dcce;"><span class="link c-lorange" style="text-decoration:none; color:#e9dcce;">olsonoutdoors.com</span></a>
  											</td>
  										</tr>
  									</table>
  								</td>
  							</tr>
  							<tr>
  								<td>
  									<table border="0" cellspacing="0" cellpadding="0">
  										<tr>
  											<td width="119">
  												<table border="0" cellspacing="0" cellpadding="0">
  													<tr>
  														<td class="img" width="40" style="font-size:0pt; line-height:0pt; text-align:left;">
  															<img src="<?php echo get_theme_file_uri('/resources/images/logo_1.png'); ?>" width="40" height="40" border="0" alt="" />
  														</td>
  														<td class="img" width="10" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
  														<td class="text-10 c-white tt-u fw-b" style="font-size:10px; line-height:14px; font-family:Arial, sans-serif; text-align:left; min-width:auto !important; color:#ffffff; text-transform:uppercase; font-weight:bold;">
  															Olson <br /> Outdoors
  														</td>
  													</tr>
  												</table>
  											</td>
  											<td class="px-23" style="padding-left: 23px; padding-right: 23px;">
  												<table width="100%" border="0" cellspacing="0" cellpadding="0" bgcolor="#ebded0">
  													<tr>
  														<td class="img" width="1" height="42" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
  													</tr>
  												</table>
  											</td>
  											<td>
  												<table border="0" cellspacing="0" cellpadding="0">
  													<tr>
  														<td class="img" width="40" style="font-size:0pt; line-height:0pt; text-align:left;">
  															<img src="<?php echo get_theme_file_uri('/resources/images/logo_2.png'); ?>" width="40" height="40" border="0" alt="" />
  														</td>
  														<td class="img" width="13" style="font-size:0pt; line-height:0pt; text-align:left;">&nbsp;</td>
  														<td class="text-10 c-white tt-u fw-b" style="font-size:10px; line-height:14px; font-family:Arial, sans-serif; text-align:left; min-width:auto !important; color:#ffffff; text-transform:uppercase; font-weight:bold;">
  															Olson <br /> Lawn care
  														</td>
  													</tr>
  												</table>
  											</td>
  											<td>
  										</tr>
  									</table>
  								</td>
  							</tr>
  						</table>
  					</td>
  				</tr>
  			</table>
  			<!-- END Content -->
  		</td>
  	</tr>
  	<tr>
  		<td class="img" style="font-size:0pt; line-height:0pt; text-align:left;">
  			<img src="<?php echo get_theme_file_uri('/resources/images/bottom_decoration.png'); ?>" width="355" height="26" border="0" alt="" />
  		</td>
  	</tr>
  </table>
<?php } ?>
</body>
</html>
