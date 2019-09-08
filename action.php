<?php 
if (isset($_POST["action"]))
 {
 	# code...

	 	# code...
	 	$folder = array_filter(glob('*'), 'is_dir');
	 	$output = 'sdf';
	 	if (count($folder)>0) {
	 		foreach ($folder as $name) {
	 			# code...
	 			$output .= $name;
	 		}
	 		# code...
	 	echo $output;
	 	}
	 
 } 
 ?>