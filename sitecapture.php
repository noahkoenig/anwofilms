<?php
	$activecolor = '#33adff';
	$hovercolor = '#006bb3';
	
	$bordersize = '3';
	$bordersizehover = '3';
	
	if($file_type == 'sitenoticelink' || $file_type == 'privacypolicylink') {
		$bordersize = '0';
		$bordersizehover = '0';
	}
?>
	
				a.<?php echo $file_type;?>:link, a.<?php echo $file_type;?>:visited, a.<?php echo $file_type;?>mobile:link, a.<?php echo $file_type;?>mobile:visited {
					color: <?php echo $activecolor;?>;
					border-bottom: <?php echo $bordersize;?>px solid <?php echo $activecolor;?>;
				}
				a.<?php echo $file_type;?>mobile:hover, a.<?php echo $file_type;?>mobile:active, a.<?php echo $file_type;?>:hover, a.<?php echo $file_type;?>:active {
					color: <?php echo $hovercolor;?>;
					border-bottom: <?php echo $bordersizehover;?>px solid <?php echo $hovercolor;?>;
				}
	