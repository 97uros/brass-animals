<?php
/**
 * Template Name: Page (Default)
 *
 */

get_header();
the_post();
?>
  
  
  <?php
  $locations=array("Alabama (AL)","Arizona (AZ)","Arkansas (AR)","California (CA)","Colorado (CO)","Florida (FL)","Georgia (GA)","Hawaii (HI)","Illinois (IL)","Indiana (IN)","Louisiana (LA)","Massachusetts (MA)","Michigan (MI)","Minnesota (MN)","Mississippi (MS)","Missouri (MO)","Nevada (NV)","New Jersey (NJ)","New York (NY)","North Carolina (NC)","Ohio (OH)","Oklahoma (OK)","Oregon (OR)","Pennsylvania (PA)","South Carolina (SC)","Tennessee (TN)","Texas (TX)","Washington (WA)","Wisconsin (WI)","Alaska (AK)","Connecticut (CT)","Washington DC (DC)","Delaware (DE)","Iowa (IA)","Idaho (ID)","Kansas (KS)","Kentucky (KY)","Maryland (MD)","Maine (ME)","Montana (MT)","North Dakota (ND)","Nebraska (NE)","New Hampshire (NH)","New Mexico (NM)","Rhode Island (RI)","South Dakota (SD)","Utah (UT)","Virginia (VA)","Vermont (VT)","West Virginia (WV)","Wyoming (WY)");
  
  if(is_page($locations)) {
    include "page-singlestate.php";
  } else {
    include "page-singlecity.php";
  }

  ?>
<?php
get_template_part( 'template-parts/content', 'page' );
get_footer();