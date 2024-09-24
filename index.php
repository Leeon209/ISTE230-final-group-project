
<?php

    $page = "home";
    $path='./';
    include($path.'assets/inc/header.php');
    include($path.'assets/inc/nav.php');

    require $path.'../pinclude/dbConnect.inc';           
		$sql = "SELECT content, CSS_Internal FROM modularSite where page='".$page."'";
		$result = $mysqli->query($sql);

		if($result->num_rows > 0){
			//output the data for each row
			while ($row = $result->FETCH_ASSOC()) {
				echo $row['content'];
			}
		}else{
			echo '0 results, did something wrong!';
		}     

    include('assets/inc/footer.php');
?>