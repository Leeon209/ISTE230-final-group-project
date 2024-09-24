<?php
// $path = './';
$page = 'support';
$path='../';
require $path.'assets/inc/header.php';
require_once $path.'assets/inc/nav.php';
// include $path.'assets/css.css';
// connect with your dbConnect.inc
// $DBpath = '../';
// require $DBpath.'dbConnect.inc';
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

$sql = "SELECT * FROM support";


if ($mysqli) {
	if(!empty($_GET['name']) && !empty($_GET['comment'])){

		$stmt=$mysqli->prepare("INSERT INTO support (name, comment) values (?,?)");
		$stmt->bind_param("ss",$_GET['name'],$_GET['comment']);
		$stmt->execute();
		$stmt->close();
	}
	  //get contents of table and send back...

	//   $result->fetch_assoc()
	//   $res = mysqli_query($mysqli, $sql);
	$res=$mysqli->query($sql);
	  if($res){
		while($rowHolder = mysqli_fetch_array($res,MYSQLI_ASSOC)){ // $rowHolder['name'] $rowHolder['comment']
			$records[] = $rowHolder;                               // $records[ ]['name']['comment']
		}
	  }
	//   echo "It worked";
	}// end of if $mysqli
?>
<!-- <!DOCTYPE html>
<html lang="en"> -->
<!-- <head>
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="assets/css/blogStyle.css" /> -->
	<!-- <title>Support</title>
</head> -->
<!-- <body> -->
<!-- <h2>Get Support from the Linux Community</h2>
<div>
	<table>
		<tr>
			<th>Name</th>
			<th>Comment</th>
		</tr> -->
<?php
	$path='../';
	// require $path.'assets/inc/formtop.php';
	foreach($records as $this_row){
		foreach($records as $this_row){
			echo '<li>'.$this_row['name'] .": " .$this_row['comment'].'</li>';
		} // end of foreach loop
	}
	require $path.'assets/inc/formbottom.php';

	// mysqli_close($mysqli);
	// include($path.'assets/inc/footer.php');
?>
	<!-- </table>
</div>
<hr/>
<h3>What is on your mind?</h3>
<form action="index.php" method="GET">		
	Name: <input type="text" id="name" name="name" width="40" placeholder="Enter your name"/> 
	<p>&nbsp;</p>
    Comment:<br/> <textarea id="comment" name="comment" cols="90" rows="10"></textarea>
    <p><input type="submit" value="Add to the List"/></p>
</form> -->

    
    
<!-- GET Date from operating System -->    
<!-- <?php
$filename = 'index.php';
if (file_exists($filename)) {
    echo "Last modified: " . date ("l, F d Y h:ia", filemtime($filename));
}
?> -->
<!-- </body>
</html> -->