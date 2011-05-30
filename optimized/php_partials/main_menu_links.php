<?php 
$menu_pages = array(
	"Home",
	"About us",
	"What we do" => array(
		"FAQs",
		"Greenpeace Worldwide",
		"The History of Greenpeace" => array(
			"World Park Antartica",
			"The evacuation of Rong",
			"The founders",
			"Amchitka: the founding",
		),
		"Work for Greenpeace",
	),
	"News",
	"Multimedia" => array(
		"Pictures",
		"Video",
		
	),
	"Get Involved",
	"Donate"	
);

$i = 0;

foreach ($menu_pages as $key => $value):
	$i++;

	// Has no children
	if (! is_array($value) ) : ?>
	<li class="menu-item level-1 no-child"><a href="#"><?php echo $value ?></a></li>
<?php	
	// Has children 
	else : ?>
	
	<li class="menu-item level-1 has-child">
		<a href="#"><?php echo $key ?></a>
		<ul class="dropdown-level-2 dropdown">
<?php 	
		// Generate level II
		foreach ($value as $key_ii => $value_ii): 
			
			// Has no children
			if (! is_array($value_ii) ) :	?>
			<li class="menu-item level-2 no-child"><a href="#"><?php echo $value_ii ?></a></li>
<?php
			else:	?>
			<li class="menu-item level-2 has-child">
				<a href="#"><?php echo $key_ii ?></a>
				<ul class="dropdown-level-3 dropdown">
<?php				
					foreach ($value_ii as $key_iii => $value_iii): ?>
						
					
					<li class="menu-item level-3"><a href="#"><?php echo $value_iii ?></a></li>
					
	
<?php				endforeach; ?>

				</ul>		
			</li>
			
			
		
<?php		endif; 
		endforeach; // end second level
		
		// Close second level and first level
	?>
		</ul> 	
	</li>
	
<?php
	endif; // ! is_array($value)
endforeach; // $menu_pages as $key => $value
	
		

