<div id="family_obj">
  <li>
    <h3><?php //echo $family->getName(); ?><?php echo link_to($family->getName(), "family_show", $family, array('style' => 'text-decoration: none;color: black;')) ?></h3>
<!--    <img src="/uploads/family/<?php //echo $family->getPic(); ?>" >-->
    <?php echo link_to('<img src="/uploads/family/'.$family->getPic().'">', "family_show", $family) ?>
    <?php // echo link ?>
  </li>
</div>