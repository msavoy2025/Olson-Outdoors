<?php
/*
Template Name: Email V1
Template Post Type: email
*/
?>
<html>
<body>

<?php
while (have_posts()) {
  the_post();?>

<table width="100%" border="0" cellspacing="0" cellpadding="0">
  <tr>
    <td align="left">
      <table width="850" border="0" cellspacing="0" cellpadding="0">
        <tr>
          <td><img style="margin-bottom: -5px;" src="<?php echo get_theme_file_uri('/resources/images/bg_top.png'); ?>"></td>
        </tr>

        <tr>
          <td style="font-family: Verdana; font-style: normal; font-weight: bold; font-size: 80px; line-height: 86px; color: #ECDCCC; background:#425F35; padding-left:50px;"><?php the_title(); ?></td>
        </tr>
        <tr>
          <td style="font-family: Courier New; font-style: normal; font-weight: bold; font-size: 20px; line-height: 20px; color: #ECDCCC; background:#425F35; padding-left:50px; padding-top:15px;"><?php the_content(); ?></td>
        </tr>


        <tr style="color: #ECDCCC; background:#425F35;">
          <td class="pb-20" style="padding-bottom: 35px; padding-top:35px; padding-left:50px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td style="padding-bottom: 0px;">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="font-family: Courier New; font-style: normal; font-weight: bold; font-size: 20px; line-height: 20px; color: #ECDCCC; background:#425F35; letter-spacing:.05em; width:300px;">
                        <a style="color: #ECDCCC; text-decoration:none; font-family: Courier New;" href="tel:<?php echo the_field('phone') ?>"><?php echo the_field('phone') ?></a>
                      </td>
                      <td style="font-family: Courier New; font-style: normal; font-weight: bold; font-size: 20px; line-height: 20px; color: #ECDCCC; background:#425F35; padding-left:60px; letter-spacing:.05em;">
                        <a style="color: #ECDCCC; text-decoration:none; font-family: Courier New;" href="https://olsonoutdoors.com/">OLSONOUTDOORS.COM</a>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td style="padding-bottom: 0px;">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="font-family: Courier New; font-style: normal; font-weight: bold; font-size: 20px; line-height: 20px; color: #ECDCCC; background:#425F35; letter-spacing:.05em; width:300px;">
                        7700 WEST 120TH AVENUE
                      </td>
                      <td style="font-family: Courier New; font-style: normal; font-weight: bold; font-size: 20px; line-height: 20px; color: #ECDCCC; background:#425F35; padding-left:60px; letter-spacing:.05em;">
                        <a style="color: #ECDCCC; text-decoration:none; font-family: Courier New;" href="https://olsonlawncare.com/">OLSONLAWNCARE.COM</a>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td style="padding-bottom: 0px;">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="font-family: Courier New; font-style: normal; font-weight: bold; font-size: 20px; line-height: 20px; color: #ECDCCC; background:#425F35; letter-spacing:.05em; width:300px;">
                        BROOMFIELD, CO 80020
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>


        <tr style="color: #ECDCCC; background:#425F35;">
          <td class="pb-20" style="padding-bottom: 35px; padding-top:35px; padding-left:50px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td style="padding-bottom: 0px;">
                  <table width="600px" border="0" cellspacing="0" cellpadding="0">
                    <tr style="width:600px;">
                      <td style="width:300px; padding-right:70px;">
                        <img src="<?php echo get_theme_file_uri('/resources/images/emailLogo1.png'); ?>">
                      </td>
                      <td style="width:300px; border-left:1px solid #ffffff; padding-left:60px;">
                        <img src="<?php echo get_theme_file_uri('/resources/images/emailLogo2.png'); ?>">
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>




        <tr>
          <td><img src="<?php echo get_theme_file_uri('/resources/images/bg_bottom.png'); ?>"></td>
        </tr>
      </table>
    </td>
  </tr>
</table>
<?php } ?>
</body>
</html>
