<?php
	$page='quiz';
	$path='../';
	require $path.'assets/inc/header.php';
    require_once $path.'assets/inc/nav.php';

    require $path.'../pinclude/dbConnect.inc';            
		$sql = "SELECT content FROM modularSite where page='".$page."'";
		$result = $mysqli->query($sql);

		if($result->num_rows > 0){
			//output the data for each row
			while ($row = $result->FETCH_ASSOC()) {
				echo $row['content'];
			}
		}else{
			echo '0 results, did something wrong!';
		}


$sql = "SELECT * FROM quiz";


if ($mysqli) {
    if(!empty($_GET['name']) && !empty($_GET['comment'])){

        $stmt=$mysqli->prepare("INSERT INTO support (name, comment) values (?,?)");
        $stmt->bind_param("ss",$_GET['name'],$_GET['comment']);
        $stmt->execute();
        $stmt->close();
    }

    $res=$mysqli->query($sql);
        if($res){
        while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){ // $rowHolder['name'] $rowHolder['comment']
            $records[] = $rowHolder;                               // $records[ ]['name']['comment']
        }
        }
    //   echo "It worked";
    }// end of if $mysqli


    include($path.'assets/inc/footer.php');
    mysqli_close($mysqli);

?>