<?php

include_once('db.php');

$keyword = $_GET['keyword'];

// $sql = "SELECT *
// FROM mobiles m
// JOIN clothes c ON m.id=c.id
// JOIN accessories a ON a.id=c.id
// WHERE title LIKE '%$keyword%' ";

// $sql = "SELECT clothes.title, accessories.title
// FROM clothes
// INNER JOIN accessories ON clothes.id = accessories.id WHERE title LIKE '%$keyword%' ;"

// $sql = "SELECT clothes.title, accessories.title FROM clothes INNER JOIN accessories ON accessories.id = clothes.id WHERE clothes.title OR accessories.title LIKE '%$keyword%' ";

$sql = "SELECT * FROM accessories WHERE title LIKE '%$keyword%' ";

$query = mysqli_query($con,$sql);

if (!$query) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

if(mysqli_num_rows($query) > 0) {

    while($data = mysqli_fetch_array($query)) {   
        
        echo "<a href='http://localhost/Ecommerce%20website%20--%20doSoDeal/product/".$data['id']."/".$data['category']."'>".$data['title']."</a><br>";
    }

}

else {
	echo "<div class='text-danger'>No results matched !</div>";
}

?>