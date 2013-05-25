<div id="min_header" class="yellow_b black_c">
	<ul>
		<?php 
			
			$entries = array
			(
				"1" => "home",
				"2" => "charte",
				"3" => "presse",
				"4" => "adherer",
				"5" => "contact"
			);
			
			for ($i = 1; $i <= 5; $i++) 
			{
				if(array_key_exists($i, $entries))
					$entry = $entries[$i];
				
				
				
				if(!isset($template))
					$template = 'home';
				
				if($template == $entry)
				{
					echo '<li class="orange_b current"><a href="index.php?page='.$entry.'"title="link">
					<img src="assets/images/'.$entry.'.png" alt="'.$entry.'" /></a></li>';
				}
				else {
					echo '<li class="smallcaps"><a href="index.php?page='.$entry.'"title="link">
					<img src="assets/images/'.$entry.'.png" alt="'.$entry.'" />'.$entry.'</a></li>';
				}
				
			}
		?>
		<div class="clear"> </div> 
	</ul>
	<div class="clear"> </div> 
</div>
<div class="clear"> </div> 