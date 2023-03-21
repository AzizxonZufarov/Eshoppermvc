<?function items(){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM items");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
		$arr[] = $row;
	}
	return $arr;
}


function modal_items($id){
	global $con;
	$res = mysqli_query($con,"SELECT * FROM items WHERE id = $id");
	$arr = [];
	while($row = mysqli_fetch_assoc($res)){
		$arr[] = $row;
	}
	return $arr;
}


function addcart($id){
	if($_SESSION['cart'][$id]){
	$_SESSION['cart'][$id]++;
	}else{
		$_SESSION['cart'][$id] = 1;
	}
//	header("location:cart.php");
}
