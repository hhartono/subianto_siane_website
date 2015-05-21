<!-- parallax column   -->
<div class="img-wrap">
<?php 
if($statussidebar=='' || $statussidebar=='0'){
?>
	<div class="bg" style="background-image: url(/assets/public/images_example/KSTUBUN-015313-8R.jpg)"  data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>
<?
}else{
?>
	<div class="bg" style="background-image: url(/uploads/project/<?php echo $sidebarphoto;?>)"  data-top-bottom="transform: translateY(300px);" data-bottom-top="transform: translateY(-300px);"></div>	
<?php
}
?>
	
</div>
<!-- parallax column end   -->


    
