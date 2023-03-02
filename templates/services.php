<?php
/**
* Template Name: Services Page
* @package WordPress
*/
?>

<?php get_header(); ?>

<?php
while (have_posts()) {
  the_post();?>

<div class="section__heading">
  <div class="overlay1" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/servicesBG.png'); ?>);"></div>
  <div class="overlay2" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/halftone.svg'); ?>);"></div>
  <div class="heading__textOverlay pageWidth">
    <div class="heading__textOverlay__left">
        <h4 class="heading__textOverlay__subtitle"><?php echo the_field('slogan_subtitle'); ?></h4>
        <h1 class="heading__textOverlay__title"><?php echo the_field('slogan_title'); ?></h1>
        <p class="heading__textOverlay__text"><?php the_content(); ?></p>

<?php } ?>

      <p class="heading__textOverlay__scroll"><span style="padding-right:10px;">scroll for more</span><img src="<?php echo get_theme_file_uri('/resources/images/Arrow1.svg'); ?>"></p>
    </div>
    <div class="heading__textOverlay__right">
      <p class="heading__textOverlay_contact contactTitle">olson outdoors</p>
      <p class="heading__textOverlay_contact">720.201.7561</p>
      <p class="heading__textOverlay_contact">7700 West 120th Avenue</p>
      <p class="heading__textOverlay_contact">Broomfield, CO 80020</p>
    </div>
  </div>
</div>


<div class="services__subHeading pageWidth">
  <h2 class="subHeading__subTitle">A design process that stands the test of time.</h2>
  <p class="subHeading__subText">We at Olson have implemented a streamlined approach designed to take all ambiguity out of the landscape installation process.</p>
</div>

<div class="services__documentation pageWidth">
  <div class="documentation__heading">
    <p class="headingText">our process</p>
    <p class="headingText olsonDocHeading">olson outdoors - internal training documentation</p>
    <p class="headingText">form o.l. 1190</p>
  </div>

  <div class="documentation__steps">
    <div class="documentation__title_number">
      <div class="documentation__number">
        <p class="headingText">step number</p>
        <h2 class="number">1</h2>
      </div>
      <div class="documentation__title">
        <p class="headingText">step title</p>
        <h2 class="title">discovery</h2>
      </div>
    </div> <!-- documentation__title_number -->
    <div class="documentation__description_checkOff">
      <div class="documentation__description">
        <p class="headingText">step description</p>
        <p class="description">Set up an appointment to meet and discuss a landscape design or redesign. The wholly personalized experience will ensure a design that is specifically tailored to your goals, preferences, outdoor needs, and space.</p>
      </div>
      <div class="documentation__checkOff">
        <p class="headingText">check off until completion</p>
        <div class="checkOff">
          <div class="checkOff__complete">
            <input type="checkbox">
            <p>complete</p>
          </div>
          <div class="checkoff__date"><?php echo date('m / d / Y'); ?></div>
          <div class="date__title">date</div>
        </div><!-- checkOff -->
      </div><!-- documentation__checkOff -->
    </div> <!-- documentation__description_checkOff -->
  </div><!-- documentation__steps close -->

  <div class="documentation__steps">
    <div class="documentation__title_number">
      <div class="documentation__number">
        <p class="headingText">step number</p>
        <h2 class="number">2</h2>
      </div>
      <div class="documentation__title">
        <p class="headingText">step title</p>
        <h2 class="title">design</h2>
      </div>
    </div> <!-- documentation__title_number -->
    <div class="documentation__description_checkOff">
      <div class="documentation__description">
        <p class="headingText">step description</p>
        <p class="description">The design process is extensive and interactive. With the aid of multiple site visits, conversations, and email exchanges, we will create a design unique to your needs and space.</p>
      </div>
      <div class="documentation__checkOff">
        <p class="headingText">check off until completion</p>
        <div class="checkOff">
          <div class="checkOff__complete">
            <input type="checkbox">
            <p>complete</p>
          </div>
          <div class="checkoff__date"><?php echo date('m / d / Y'); ?></div>
          <div class="date__title">date</div>
        </div><!-- checkOff -->
      </div><!-- documentation__checkOff -->
    </div> <!-- documentation__description_checkOff -->
  </div><!-- documentation__steps close -->

  <div class="documentation__steps">
    <div class="documentation__title_number">
      <div class="documentation__number">
        <p class="headingText">step number</p>
        <h2 class="number">3</h2>
      </div>
      <div class="documentation__title">
        <p class="headingText">step title</p>
        <h2 class="title">plan</h2>
      </div>
    </div> <!-- documentation__title_number -->
    <div class="documentation__description_checkOff">
      <div class="documentation__description">
        <p class="headingText">step description</p>
        <p class="description">That design is then translated onto a scaled plan and detailed scope of work that serves as an invaluable resource during construction.</p>
      </div>
      <div class="documentation__checkOff">
        <p class="headingText">check off until completion</p>
        <div class="checkOff">
          <div class="checkOff__complete">
            <input type="checkbox">
            <p>complete</p>
          </div>
          <div class="checkoff__date"><?php echo date('m / d / Y'); ?></div>
          <div class="date__title">date</div>
        </div><!-- checkOff -->
      </div><!-- documentation__checkOff -->
    </div> <!-- documentation__description_checkOff -->
  </div><!-- documentation__steps close -->

  <div class="documentation__steps">
    <div class="documentation__title_number">
      <div class="documentation__number">
        <p class="headingText">step number</p>
        <h2 class="number">4</h2>
      </div>
      <div class="documentation__title">
        <p class="headingText">step title</p>
        <h2 class="title">coordination</h2>
      </div>
    </div> <!-- documentation__title_number -->
    <div class="documentation__description_checkOff">
      <div class="documentation__description">
        <p class="headingText">step description</p>
        <p class="description">Our success depends upon transparent communication and client involvement in every facet of construction. Landscape installations are a dynamic process that is best mediated through active client involvement.</p>
      </div>
      <div class="documentation__checkOff">
        <p class="headingText">check off until completion</p>
        <div class="checkOff">
          <div class="checkOff__complete">
            <input type="checkbox">
            <p>complete</p>
          </div>
          <div class="checkoff__date"><?php echo date('m / d / Y'); ?></div>
          <div class="date__title">date</div>
        </div><!-- checkOff -->
      </div><!-- documentation__checkOff -->
    </div> <!-- documentation__description_checkOff -->
  </div><!-- documentation__steps close -->

  <div class="documentation__steps">
    <div class="documentation__title_number">
      <div class="documentation__number">
        <p class="headingText">step number</p>
        <h2 class="number">5</h2>
      </div>
      <div class="documentation__title">
        <p class="headingText">step title</p>
        <h2 class="title">installation</h2>
      </div>
    </div> <!-- documentation__title_number -->
    <div class="documentation__description_checkOff">
      <div class="documentation__description">
        <p class="headingText">step description</p>
        <p class="description">Once all parties are in agreement, construction begins. We at Olson Outdoors LLC strive to provide a finished product that is fully custom and, above all, represents true craftsmanship.</p>
      </div>
      <div class="documentation__checkOff">
        <p class="headingText">check off until completion</p>
        <div class="checkOff">
          <div class="checkOff__complete">
            <input type="checkbox">
            <p>complete</p>
          </div>
          <div class="checkoff__date"><?php echo date('m / d / Y'); ?></div>
          <div class="date__title">date</div>
        </div><!-- checkOff -->
      </div><!-- documentation__checkOff -->
    </div> <!-- documentation__description_checkOff -->
  </div><!-- documentation__steps close -->

  <div class="documentation__steps">
    <div class="documentation__title_number">
      <div class="documentation__number">
        <p class="headingText">step number</p>
        <h2 class="number">6</h2>
      </div>
      <div class="documentation__title">
        <p class="headingText">step title</p>
        <h2 class="title">aftercare</h2>
      </div>
    </div> <!-- documentation__title_number -->
    <div class="documentation__description_checkOff">
      <div class="documentation__description">
        <p class="headingText">step description</p>
        <p class="description">We fully stand behind our work and are available for your post-installation needs. In offering a 1-year warranty on all workmanship and newly installed plants, shrubs, and trees, we provide piece of mind for your investment.</p>
      </div>
      <div class="documentation__checkOff">
        <p class="headingText">check off until completion</p>
        <div class="checkOff">
          <div class="checkOff__complete">
            <input type="checkbox">
            <p>complete</p>
          </div>
          <div class="checkoff__date"><?php echo date('m / d / Y'); ?></div>
          <div class="date__title">date</div>
        </div><!-- checkOff -->
      </div><!-- documentation__checkOff -->
    </div> <!-- documentation__description_checkOff -->
  </div><!-- documentation__steps close -->

  <div class="documentation__footing">
    <div class="documentation__footing__left">
      <div class="footing__leftServices">
        <p>services</p><span>:</span>
        <img src="<?php echo get_theme_file_uri('/resources/images/Line.svg'); ?>">
      </div>
      <div class="footing__leftImages">
        <img src="<?php echo get_theme_file_uri('/resources/images/checkoffSquare__checked.svg'); ?>">
        <p>landscaping</p>
        <img src="<?php echo get_theme_file_uri('/resources/images/checkoffSquare__checked.svg'); ?>">
        <p>maintenance</p>
      </div>
    </div><!-- documentation__footing__left close -->
    <div class="documentation__footing__right">
      <p>signature required:</p>
      <div class="footing__rightImage"><img src="<?php echo get_theme_file_uri('/resources/images/signature.svg'); ?>"></div>
    </div>
  </div><!-- documentation__footing close -->
</div><!-- services__documentation pageWidth close -->


<div class="section__workStyles pageWidth">
  <div class="craftmanshipText">our focus and passion is new</div>
  <div class="craftmanshipText workStylesTitle cream" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/greenTearLong.svg') ?>);">landscape install and redesign.</div>

  <div class="dragRight">drag<img src="<?php echo get_theme_file_uri('resources/images/arrowRight2.svg'); ?>"></div>

  <div class="workStyles__columns">
    <div class="workStyles__column1">
      <div class="workStyles__imageBox" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/rocks.svg'); ?>);">
        <h2 class="workStyles__columnTitle">rock work</h2>
        <div class="workStyles__listItems">
          <p class="workStyles__listItem">Boulders</p>
          <p class="workStyles__listItem">Flagstone</p>
          <p class="workStyles__listItem">Natural Stone Work</p>
          <p class="workStyles__listItem">Landscape fabric installation</p>
        </div>
      </div><!-- workStyles__imageBox close -->
      <div class="workStyles__imageBox noMargin_bottom" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/atmosphere.svg'); ?>);">
        <h2 class="workStyles__columnTitle">atmosphere</h2>
        <div class="workStyles__listItems">
          <p class="workStyles__listItem">Lighting, Pergolas</p>
          <p class="workStyles__listItem">Fencing</p>
          <p class="workStyles__listItem">Paths & Patios</p>
        </div>
      </div><!-- workStyles__imageBox close -->
      <div class="column1Text">"No"?</br>Never heard of 'em?</div>
    </div><!-- workStyles__column1 close -->

    <div class="workStyles__column2">
      <div class="column2Text">
        <h3 class="column2Text__title">it's not a figment of your imagination.</h3>
        <p class="column2Text__text">we do it all.</p>
      </div>
      <div class="workStyles__imageBox" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/terrain.svg'); ?>);">
        <h2 class="workStyles__columnTitle">terrain</h2>
        <div class="workStyles__listItems">
          <p class="workStyles__listItem">Grading</p>
          <p class="workStyles__listItem">Drainage</p>
          <p class="workStyles__listItem">Retaining Walls</p>
        </div>
      </div><!-- workStyles__imageBox close -->
      <div class="workStyles__customWork">
        <h2 class="workStyles__columnTitle">custom work</h2>
        <div class="workStyles__listItems">
          <p class="workStyles__listItem">100% custom work to meet your needs.</p>
        </div>
        <p class="customWork__pictureText">insert picture of your project here</p>
        <a href="/request-service"><button class="customButton olsonButton">contact us</button></a>
        <div class="getStartedLine">
          <img src="<?php echo get_theme_file_uri('/resources/images/upArrow.svg'); ?>">
          <p>tap above to get started</p>
          <img src="<?php echo get_theme_file_uri('/resources/images/upArrow.svg'); ?>">
        </div>
      </div>
    </div><!-- workStyles__column2 close -->

    <div class="workStyles__column3">
      <div class="workStyles__imageBox" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/lawn.svg'); ?>);">
        <h2 class="workStyles__columnTitle">lawn</h2>
        <div class="workStyles__listItems">
          <p class="workStyles__listItem">Sod and hydroseeding</p>
          <p class="workStyles__listItem">Irrigation</p>
        </div>
      </div><!-- workStyles__imageBox close -->
      <div class="workStyles__imageBox" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/decoration.svg'); ?>);">
        <h2 class="workStyles__columnTitle">decoration</h2>
        <div class="workStyles__listItems">
          <p class="workStyles__listItem">Mulch</p>
          <p class="workStyles__listItem">Planting Services</p>
          <p class="workStyles__listItem">Metal & composite edging</p>
          <p class="workStyles__listItem">Veneer</p>
        </div>
      </div><!-- workStyles__imageBox close -->
      <div class="column1Text">"Yes"?</br>It's our best friend!</div>
    </div><!-- workStyles__column3 close -->
  </div><!-- workStyles__columns close -->

  <div class="mobileContactButton"><a href="#"><button class="contactButton2 olsonButton">contact us</button></a></div>

  <div class="craftmanshipText workStylesTitle2black">sweatin' hard 12 months a year.</div>
  <div class="craftmanshipText workStylesTitle2 cream" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/greenTearLong.svg') ?>);">seasonal maintenance.</div>
</div><!-- section__workStyles close -->

<div class="section__seasonal pageWidth">
  <div class="seasonalScroller">
    <a href="#autumn">
      <div class="seasons">
        <div class="seasonsImg"><img src="<?php echo get_theme_file_uri('resources/images/autumnIcon.png'); ?>"></div>
        <span>autumn</span>
      </div>
    </a>

    <a href="#summer">
      <div class="seasons">
        <div class="seasonsImg"><img src="<?php echo get_theme_file_uri('resources/images/SummerIcon.svg'); ?>"></div>
        <span>summer</span>
      </div>
    </a>

    <a href="#spring">
      <div class="seasons">
        <div class="seasonsImg"><img src="<?php echo get_theme_file_uri('resources/images/SpringIcon.svg'); ?>"></div>
        <span>spring</span>
      </div>
    </a>

    <a href="#winter">
      <div class="seasons">
        <div class="seasonsImg"><img src="<?php echo get_theme_file_uri('resources/images/WinterIcon.svg'); ?>"></div>
        <span>winter</span>
      </div>
    </a>

    <div class="seasons__precip__temp">
      <div class="precip precipitation">
        <div class="precipImg">
          <svg width="14" height="121" viewBox="0 0 14 121" fill="none" xmlns="http://www.w3.org/2000/svg">
            <rect x="1.39551" y="1.40625" width="11.8327" height="118.269" fill="#ECDCCC" stroke="#252525"/>
            <rect id="precipitation-bar" x="1" y="53" width="12" height="67" fill="#252525"/>
            <rect class="separator" x="7" y="12" width="6" height="1" fill="#252525"/>
            <rect class="separator" x="7" y="24" width="6" height="1" fill="#252525"/>
            <rect class="separator" x="7" y="36" width="6" height="1" fill="#252525"/>
            <rect class="separator" x="7" y="48" width="6" height="1" fill="#252525"/>
            <rect class="separator" x="7" y="60" width="6" height="1" fill="#ECDCCC"/>
            <rect class="separator" x="7" y="72" width="6" height="1" fill="#ECDCCC"/>
            <rect class="separator" x="7" y="84" width="6" height="1" fill="#ECDCCC"/>
            <rect class="separator" x="7" y="96" width="6" height="1" fill="#ECDCCC"/>
            <rect class="separator" x="7" y="108" width="6" height="1" fill="#ECDCCC"/>
          </svg>
        </div>
        <div class="precipText">
          <div class="precipTextNum">1.84"</div>
          <p>average</p>
          <p>denver</p>
          <p>precipitation</p>
        </div>
      </div>
      <div class="precip temp">
        <div class="precipImg tempImg">
          <svg width="28" height="122" viewBox="0 0 28 122" fill="none" xmlns="http://www.w3.org/2000/svg">
            <mask id="path-1-inside-1" fill="white">
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.3121 0.220703C10.7477 0.220703 7.8582 3.11018 7.8582 6.67455V95.9097C3.60155 98.2083 0.709473 102.71 0.709473 107.887C0.709473 115.399 6.79952 121.489 14.312 121.489C21.8244 121.489 27.9145 115.399 27.9145 107.887C27.9145 102.71 25.0225 98.2084 20.7659 95.9098V6.67456C20.7659 3.11019 17.8764 0.220703 14.3121 0.220703Z"/>
            </mask>
            <path fill-rule="evenodd" clip-rule="evenodd" d="M14.3121 0.220703C10.7477 0.220703 7.8582 3.11018 7.8582 6.67455V95.9097C3.60155 98.2083 0.709473 102.71 0.709473 107.887C0.709473 115.399 6.79952 121.489 14.312 121.489C21.8244 121.489 27.9145 115.399 27.9145 107.887C27.9145 102.71 25.0225 98.2084 20.7659 95.9098V6.67456C20.7659 3.11019 17.8764 0.220703 14.3121 0.220703Z" fill="#ECDCCC"/>
            <path d="M7.8582 95.9097L8.33334 96.7897L8.8582 96.5062V95.9097H7.8582ZM20.7659 95.9098H19.7659V96.5063L20.2908 96.7897L20.7659 95.9098ZM8.8582 6.67455C8.8582 3.66247 11.3 1.2207 14.3121 1.2207V-0.779297C10.1954 -0.779297 6.8582 2.5579 6.8582 6.67455H8.8582ZM8.8582 95.9097V6.67455H6.8582V95.9097H8.8582ZM1.70947 107.887C1.70947 103.092 4.38706 98.9206 8.33334 96.7897L7.38306 95.0298C2.81604 97.496 -0.290527 102.328 -0.290527 107.887H1.70947ZM14.312 120.489C7.35181 120.489 1.70947 114.847 1.70947 107.887H-0.290527C-0.290527 115.951 6.24724 122.489 14.312 122.489V120.489ZM26.9145 107.887C26.9145 114.847 21.2722 120.489 14.312 120.489V122.489C22.3767 122.489 28.9145 115.951 28.9145 107.887H26.9145ZM20.2908 96.7897C24.237 98.9207 26.9145 103.092 26.9145 107.887H28.9145C28.9145 102.328 25.808 97.4961 21.2411 95.0299L20.2908 96.7897ZM19.7659 6.67456V95.9098H21.7659V6.67456H19.7659ZM14.3121 1.2207C17.3241 1.2207 19.7659 3.66248 19.7659 6.67456H21.7659C21.7659 2.55791 18.4287 -0.779297 14.3121 -0.779297V1.2207Z" fill="#252525" mask="url(#path-1-inside-1)"/>
            <circle cx="14" cy="108" r="13" fill="#252525"/>
            <rect id="temp-bar" x="8" y="54" width="12" height="43" fill="#252525"/>
          </svg>
        </div>
        <div class="precipText2">
          <div class="precipTextNum2">67&#176;</div>
          <p>average</p>
          <p>denver</p>
          <p>temperature</p>
        </div>
      </div>
    </div>
  </div><!-- seasonalScroller close -->

<div class="seasonalContent">

<div id="spring" class="seasonalContentBlock" data-temp="62" data-precipitation="1.84">
  <div id="tempChange1"></div>
  <img src="<?php echo get_theme_file_uri('resources/images/spring.png'); ?>">
  <div class="seasonalInfo">

    <div class="seasonalInfo__title">
      <p>olson outdoors seasonal information</p>
      <p>form 1453 o.l.</p>
    </div>

    <div class="seasonalInfo__columns">
      <div class="seasonalInfo__column1">
        <div class="seasonalInfo__column1__top">
          <div class="seasonLine">
            <div>season</div>
            <div><img src="<?php echo get_theme_file_uri('resources/images/SpringIcon.svg'); ?>"></div>
          </div>
          <div class="seasonalInfo__column1__title">spring</div>
        </div><!-- seasonalInfo__column1__top close -->
        <div class="seasonalInfo__column1__bottom">
          <div class="seasonalInfo__column1__dates">
            <p>begins on - tuesday, sept. 22</p>
            <p>ends on - monday, dec. 21</p>
          </div>
        </div><!-- seasonalInfo__column1__bottom close -->

      </div><!-- seasonalInfo__column1 close -->

      <div class="seasonalInfo__column2">
        <div class="seasonalInfo__columnsTitle">seasonal description</div>
        <p>Spring is a time when flowers bud and tress blossom and new ideas become projects. We can prepare your landscape for the new season and plan with you to realize your dreams.</p>
      </div>

      <div class="seasonalInfo__column3">
        <div class="seasonalInfo__columnsTitle">important events</div>
          <ul class="seasonalInfo__column3__list">
            <li>The Vernal Equinox</li>
            <li>Flowers begin to bloom</li>
            <li>Earth Day</li>
            <li>Arbor Day</li>
            <li>Mother's Day</li>
          </ul>
      </div>
    </div><!-- seasonalInfo__columns close -->
  </div><!-- seasonalInfo close -->

  <div class="overview__services__title">From aeration and power raking to sprinkler systems and foliage planting, we have you covered.</div>

  <div class="seasonalOverview">
    <div class="seasonalSideText">overview</div>
    <div class="seasonalOverview__text">As Colorado outside finally begins to turn green after a cold winter, it’s that time again to love your lawn. Spring is a sensitive time for your yard – the soil is porous, the plants are frail, and the weather is unpredictable.</div>
  </div><!-- seasonalOverview close -->

  <div class="seasonalServices">
    <div class="seasonalSideText__services">services</div>

    <div class="seasonalServices__textSections">
      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">sprinkler systems</h3>
        <p class="seasonalServices__text">System activation and inspection: service includes turning on the system, setting the clock, and adjusting sprinkler heads to ensure proper coverage.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">power raking</h3>
        <p class="seasonalServices__text">Removes the deep and heavy thatch from your lawn bed to foster healthy growth.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">Commercial & residential lawn maintenance</h3>
        <p class="seasonalServices__text">Remove all leaves and debris from your commercial or residential property.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">fertilization</h3>
        <p class="seasonalServices__text">Iron rich blend to stimulate and maintain healthy lawn growth.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">planting</h3>
        <p class="seasonalServices__text">Tree, shrub, bush, and flower planting.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">herbicide application</h3>
        <p class="seasonalServices__text">Inhibits weed growth through growing season.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">trimming</h3>
        <p class="seasonalServices__text">Tree, shrub, and bush trimming.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">aeration</h3>
        <p class="seasonalServices__text">Facilitates water retention by your lawn and maximizes the benefits of fertilization.</p>
      </div>
    </div>
  </div>

</div><!-- spring seasonalContentBlock close -->
<div id="tempChange2"></div>
<div id="summer" class="seasonalContentBlock" data-temp="87" data-precipitation="1.84">
  <img src="<?php echo get_theme_file_uri('resources/images/summer.svg'); ?>">
  <div class="seasonalInfo">

    <div class="seasonalInfo__title">
      <p>olson outdoors seasonal information</p>
      <p>form 1453 o.l.</p>
    </div>

    <div class="seasonalInfo__columns">
      <div class="seasonalInfo__column1">
        <div class="seasonalInfo__column1__top">
          <div class="seasonLine">
            <div>season</div>
            <div><img src="<?php echo get_theme_file_uri('resources/images/SummerIcon.svg'); ?>"></div>
          </div>
          <div class="seasonalInfo__column1__title">summer</div>
        </div><!-- seasonalInfo__column1__top close -->
        <div class="seasonalInfo__column1__bottom">
          <div class="seasonalInfo__column1__dates">
            <p>begins on - tuesday, sept. 22</p>
            <p>ends on - monday, dec. 21</p>
          </div>
        </div><!-- seasonalInfo__column1__bottom close -->

      </div><!-- seasonalInfo__column1 close -->

      <div class="seasonalInfo__column2">
        <div class="seasonalInfo__columnsTitle">seasonal description</div>
        <p>Hot, dry Colorado weather calls for continual care of your lawn and plantings. Our thorough knowledge of horticulture gives you the beauty of your yard without the work.</p>
      </div>

      <div class="seasonalInfo__column3">
        <div class="seasonalInfo__columnsTitle">important events</div>
          <ul class="seasonalInfo__column3__list">
            <li>Changing of the stars</li>
            <li>Memorial Day</li>
            <li>Father's Day</li>
            <li>Independence Day</li>
            <li>Labor Day</li>
          </ul>
      </div>
    </div><!-- seasonalInfo__columns close -->
  </div><!-- seasonalInfo close -->

  <div class="overview__services__title">Don’t like the heat? We do! Let us take care of that special landscape project!</div>

  <div class="seasonalOverview">
    <div class="seasonalSideText">overview</div>
    <div class="seasonalOverview__text">From the first concept to the final results, Olson Outdoors’ professional designers and installation crews will make the most of your space and garden to enhance year-round enjoyment of your outdoor living area.</div>
  </div><!-- seasonalOverview close -->

  <div class="seasonalServices">
    <div class="seasonalSideText__services">services</div>

    <div class="seasonalServices__textSections">
      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">mid-summer fertilization</h3>
        <p class="seasonalServices__text">A special blend designed to help with water absorption and proactive fortification against heat and drought.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">commercial maintenance programs</h3>
        <p class="seasonalServices__text">First impressions count so make sure they last a lifetime. No matter the size no matter the task, we've got you covered.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">RESIDENTIAL WEEKLY LAWN MAINTENANCE</h3>
        <p class="seasonalServices__text">Weekly mowing services with numerous service options.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">xeriscapes</h3>
        <p class="seasonalServices__text">Utilizes drought-tolerant plants and design techniques.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">open space moving</h3>
        <p class="seasonalServices__text">Stay within city vegetation height ordinances and promote fire mitigation.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">LANDSCAPE RENOVATION & INSTALLATION</h3>
        <p class="seasonalServices__text">Everything from retaining walls to new sod installations.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">sprinkler systems</h3>
        <p class="seasonalServices__text">Inspections and repair.</p>
      </div>

    </div>
  </div>

</div><!-- summer seasonalContentBlock close -->
<div id="tempChange3"></div>
<div id="autumn" class="seasonalContentBlock" data-temp="67" data-precipitation="1.03">
  <img src="<?php echo get_theme_file_uri('resources/images/autumn.svg'); ?>">
  <div class="seasonalInfo">

    <div class="seasonalInfo__title">
      <p>olson outdoors seasonal information</p>
      <p>form 1453 o.l.</p>
    </div>

    <div class="seasonalInfo__columns">
      <div class="seasonalInfo__column1">
        <div class="seasonalInfo__column1__top">
          <div class="seasonLine">
            <div>season</div>
            <div><img src="<?php echo get_theme_file_uri('resources/images/AutumnIcon.svg'); ?>"></div>
          </div>
          <div class="seasonalInfo__column1__title">Autumn</div>
        </div><!-- seasonalInfo__column1__top close -->
        <div class="seasonalInfo__column1__bottom">
          <div class="seasonalInfo__column1__dates">
            <p>begins on - tuesday, sept. 22</p>
            <p>ends on - monday, dec. 21</p>
          </div>
        </div><!-- seasonalInfo__column1__bottom close -->

      </div><!-- seasonalInfo__column1 close -->

      <div class="seasonalInfo__column2">
        <div class="seasonalInfo__columnsTitle">seasonal description</div>
        <p>The leaves change color and fall to the earth. The flowers dry and the green of the lawn starts to dry. This is the time when it its important to prepare the yard for winter and for the optimum spring growth.</p>
      </div>

      <div class="seasonalInfo__column3">
        <div class="seasonalInfo__columnsTitle">important events</div>
          <ul class="seasonalInfo__column3__list">
            <li>Autumn Equinox</li>
            <li>Oktoberfest</li>
            <li>Columbus Day</li>
            <li>Halloween</li>
            <li>Thanksgiving</li>
          </ul>
      </div>
    </div><!-- seasonalInfo__columns close -->
  </div><!-- seasonalInfo close -->

  <div class="overview__services__title">Let us handle the sprinkler winterization and fall clean up with our lawn care specialists.</div>

  <div class="seasonalOverview">
    <div class="seasonalSideText">overview</div>
    <div class="seasonalOverview__text">Autumn is the perfect time to prep your yard for the next growing season. Remove spent stems, dead branches, and heavy leaf cover to protect your property from cold Colorado winters.</div>
  </div><!-- seasonalOverview close -->

  <div class="seasonalServices">
    <div class="seasonalSideText__services">services</div>

    <div class="seasonalServices__textSections">
      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">sprinkler system winterization</h3>
        <p class="seasonalServices__text">Full evacuation of water to prevent irrigation system damage from freezing.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">Lawn Maintenance</h3>
        <p class="seasonalServices__text">Residential weekly lawn maintenance including commercial maintenance programs.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">fall clean up</h3>
        <p class="seasonalServices__text">Remove all leaves and debris from your property.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">aeration</h3>
        <p class="seasonalServices__text">Facilitates water retention by your lawn and maximizes the benefits of fertilization.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">herbicide application</h3>
        <p class="seasonalServices__text">Inhibits weed growth through growing season</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">fertilization</h3>
        <p class="seasonalServices__text">Winterization blend to foster healthy dormancy.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">trimming</h3>
        <p class="seasonalServices__text">Tree, shrub, and bush trimming.</p>
      </div>

    </div>
  </div>

</div><!-- autumn seasonalContentBlock close -->
<div id="tempChange4"></div>
<div id="winter" class="seasonalContentBlock" data-temp="45" data-precipitation="0.54">
  <img src="<?php echo get_theme_file_uri('resources/images/winter.svg'); ?>">
  <div class="seasonalInfo">

    <div class="seasonalInfo__title">
      <p>olson outdoors seasonal information</p>
      <p>form 1453 o.l.</p>
    </div>

    <div class="seasonalInfo__columns">
      <div class="seasonalInfo__column1">
        <div class="seasonalInfo__column1__top">
          <div class="seasonLine">
            <div>season</div>
            <div><img src="<?php echo get_theme_file_uri('resources/images/WinterIcon.svg'); ?>"></div>
          </div>
          <div class="seasonalInfo__column1__title">Winter</div>
        </div><!-- seasonalInfo__column1__top close -->
        <div class="seasonalInfo__column1__bottom">
          <div class="seasonalInfo__column1__dates">
            <p>begins on - tuesday, sept. 22</p>
            <p>ends on - monday, dec. 21</p>
          </div>
        </div><!-- seasonalInfo__column1__bottom close -->

      </div><!-- seasonalInfo__column1 close -->

      <div class="seasonalInfo__column2">
        <div class="seasonalInfo__columnsTitle">seasonal description</div>
        <p>The snow may be beautiful, but in our region, it builds up quickly, making sidewalks icy and driveways impassible. We provide commercial snow removal in a professional, timely and reliable way.</p>
      </div>

      <div class="seasonalInfo__column3">
        <div class="seasonalInfo__columnsTitle">important events</div>
          <ul class="seasonalInfo__column3__list">
            <li>Winter Solstice</li>
            <li>Hanukkah</li>
            <li>Christmas</li>
            <li>Kwanzaa</li>
            <li>New Years</li>
          </ul>
      </div>
    </div><!-- seasonalInfo__columns close -->
  </div><!-- seasonalInfo close -->

  <div class="overview__services__title">Let us handle the sprinkler winterization and fall clean up with our lawn care specialists.</div>

  <div class="seasonalOverview">
    <div class="seasonalSideText">overview</div>
    <div class="seasonalOverview__text">Colorado winters are unpredictable, but often equate to heavy snow falls. Protect your clients, employees, patients, and visitors with a reliable and timely snow removal service provider. Olson is here to assist with your commercial property.</div>
  </div><!-- seasonalOverview close -->

  <div class="seasonalServices">
    <div class="seasonalSideText__services">services</div>

    <div class="seasonalServices__textSections">
      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">snow removal</h3>
        <p class="seasonalServices__text">Commercial snow removal services for the greater metropolitan Denver area and cities to the north. Professional, timely, and reliable. We do apologize, but we are unable to provide residential snow removal services.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">ice and snow pack mitigation</h3>
        <p class="seasonalServices__text">Salt, magnesium chloride, sand, ice slicer, we use it all to combat slippery conditions.</p>
      </div>

    </div>
  </div>

</div><!-- winter seasonalContentBlock close -->

</div><!-- seasonalContent close -->
</div><!-- section__seasonal close -->

<div class="seasonalIrrigation pageWidth">
  <div class="irrigationTitle"><span style=" color:#ECDCCC; background-image:url(<?php echo get_theme_file_uri('/resources/images/greenTear.svg'); ?>)">Irrigation.</span>
    you need it. we all need it. all year round.
  </div>
  <div class="irrigationSubtitle">Keep your grass green & your neighbors jealous.</div>

  <div class="seasonalOverview">
    <div class="seasonalSideText">overview</div>
    <div class="seasonalOverview__text">We can handle any size irrigation project ranging from simple residential systems to complex cutting-edge commercial systems. Our experienced team has the knowledge and expertise to handle all facets of water management and irrigation.</div>
  </div><!-- seasonalOverview close -->

  <div class="seasonalServices">
    <div class="seasonalSideText__services">services</div>

    <div class="seasonalServices__textSections">
      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">fall winterization</h3>
        <p class="seasonalServices__text">We offer a fully guaranteed water evacuation of your system in preparation for freezing temperatures. This includes crucial winterization of in-house and exterior lines and a full wrap of installation for your backflow. In the event that issues or repairs that result from the winterization procedure, we remedy the issue at no cost to you.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">modernization</h3>
        <p class="seasonalServices__text">Many irrigation systems are old and therefore often very inefficient, causing higher water bills with low plant/turf performance. Allow us to save you a great deal on your water bill by installing the latest water-saving techniques and sprinkler heads.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">spring startup</h3>
        <p class="seasonalServices__text">We will ensure that your irrigation system is ready for the warm summer months. We will introduce water into the lines and verify that no issues are present as well as check every sprinkler head for proper coverage.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">pumps/submersibles</h3>
        <p class="seasonalServices__text">Full installation of booster pumps including submersible pump replacements for water features.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">repairs</h3>
        <p class="seasonalServices__text">Proper repairs using the most current industry standards to all lines, heads, clocks, wiring, and backflows.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">maintenance</h3>
        <p class="seasonalServices__text">Routine inspections and pressure checks for over/under watering and leaks.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">water conservation</h3>
        <p class="seasonalServices__text">Management of system to ensure compliance with municipal water restrictions.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">new installations</h3>
        <p class="seasonalServices__text">Comprehensive design and implementation for any system.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">automation</h3>
        <p class="seasonalServices__text">Installation of rain, transpiration, and soil sensors to take the guesswork out of watering.</p>
      </div>

      <div class="seasonalServices__textSection">
        <h3 class="seasonalServices__title">mobile</h3>
        <p class="seasonalServices__text">Full management of your irrigation system from the comfort of your smartphone or tablet.</p>
      </div>

    </div>
  </div>

</div><!-- seasonalIrrigation close -->

<div class="blogPosts__servicesCTA pageWidth">
  <div class="craftmanshipText">sitting's dull.</div>
  <div class="craftmanshipText services_CTAbg cream" style="background-image:url(<?php echo get_theme_file_uri('/resources/images/greenTearLong.svg') ?>);">we're born to be outside.</div>
  <div class="workTexts">
    <div class="seasonalWorkText">We’ve all heard it before – Colorado has 300 days of sunshine.</div>
    <div class="seasonalWorkText">We’re dorks, engineers, archaeologists, fathers, mothers, and so much more.</div>
    <div class="work__button CTA__button">
      <a href="/request-service"><button class="servicesCTA__button workButton olsonButton">request your service today!</button></a>
    </div>
  </div>
</div>

<div id="location"></div>
<?php get_footer();?>
