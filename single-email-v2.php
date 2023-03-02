<?php
/*
Template Name: Email V2
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

<table width="300px" border="0" cellspacing="0" cellpadding="0">


  <tr>
    <td align="left">
      <table width="300px" border="0" cellspacing="0" cellpadding="0" style="background:#425F35;">
        <tr>
          <td><img class="topBorder" width="100%" src="<?php echo get_theme_file_uri('/resources/images/bgTop.png'); ?>"></td>
        </tr>

        <tr>
          <td style="font-family: Verdana; font-style: normal; font-weight: bold; width:300px; font-size: 25px; line-height: 25px; color: #ECDCCC; background:#425F35; padding-left:25px; padding-top:15px;"><?php echo the_field('name') ?></td>
        </tr>
        <tr>
          <td style="font-family: Courier New; font-style: normal; font-weight: bold; font-size: 14px; line-height: 14px; color: #ECDCCC; background:#425F35; padding-left:25px; padding-top:15px;"><?php the_content(); ?></td>
        </tr>


        <tr style="color: #ECDCCC; background:#425F35;">
          <td class="pb-20" style="padding-bottom: 15px; padding-top:15px; padding-left:25px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td style="padding-bottom: 0px;">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="font-family: Courier New; font-style: normal; font-weight: bold; font-size: 12px; line-height: 12px; color: #ECDCCC; background:#425F35; letter-spacing:.1em;">
                        <a style="color: #ECDCCC; text-decoration:none; font-family: Courier New;" href="tel:<?php echo the_field('phone') ?>"><?php echo the_field('phone') ?></a>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td style="padding-bottom: 0px;">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="font-family: Courier New; font-style: normal; font-weight: bold; font-size: 12px; line-height: 12px; color: #ECDCCC; background:#425F35; letter-spacing:.1em; padding-top:10px; padding-bottom:10px;">
                        <p style="color: #ECDCCC;">7700 WEST 120TH AVENUE</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>

              <tr>
                <td style="padding-bottom: 0px;">
                  <table width="100%" border="0" cellspacing="0" cellpadding="0">
                    <tr>
                      <td style="font-family: Courier New; font-style: normal; font-weight: bold; font-size: 12px; line-height: 12px; color: #ECDCCC; background:#425F35; letter-spacing:.1em;">
                        <p style="color: #ECDCCC;">BROOMFIELD, CO 80020</p>
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>


        <tr style="color: #ECDCCC; background:#425F35;">
          <td class="pb-20" style="padding-bottom: 15px; padding-top:15px; padding-left:25px;">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
              <tr>
                <td style="padding-bottom: 0px;">
                  <table width="253px" border="0" cellspacing="0" cellpadding="0">
                    <tr style="width:102px;">
                      <td style="width:102px; padding-right:20px;">
                        <img width="102px" src="<?php echo get_theme_file_uri('/resources/images/emailLogo1_sm.png'); ?>">
                      </td>
                      <td style="width:102; border-left:1px solid #ffffff; padding-left:20px;">
                        <img width="102px" src="<?php echo get_theme_file_uri('/resources/images/emailLogo2_sm.png'); ?>">
                      </td>
                    </tr>
                  </table>
                </td>
              </tr>
            </table>
          </td>
        </tr>


        <tr style="background-color:#ffffff;">
          <td style="background-color:#ffffff;"><img width="300px" src="<?php echo get_theme_file_uri('/resources/images/bgBot.png'); ?>"></td>
        </tr>


      </table>
    </td>
  </tr>

</table>
<?php } ?>
</body>
</html>
