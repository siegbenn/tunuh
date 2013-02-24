<div class="jumbotron">
    <div class=" l">
       <h4 class="title1 lblue "><?php echo $title; ?></h4>
    </div>
    <div class="buttons">
    <?php

    	
    	$html = '';
    	for ($i = 0; $i < sizeof($notes); $i++){
    		$html .= '<a class="btn btn-large"   href="#" onclick="return false;">';
    		$html .= '<audio preload="auto" loop>';
			$html .= '<source src="'.$notes[$i][1].'" type="audio/ogg" />';
			$html .= '<source src="'.$notes[$i][2].'" type="audio/mpeg" />';
			$html .= '</audio>';
    		$html .= ''.$notes[$i][0].' </a>';
       	}
    		
    	$html .= '<a href="#" id="stop" class="btn btn-danger">STOP</a>';
    	
    	echo $html;
        	
   	?>
    </div>
    
 </div>
