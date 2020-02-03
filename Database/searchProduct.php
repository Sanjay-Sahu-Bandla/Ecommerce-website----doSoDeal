<?php

include_once('db.php');

$keyword = $_GET['keyword'];

$sql = "SELECT * FROM mobiles WHERE title LIKE '%$keyword%'";
$query = mysqli_query($con,$sql);

if (!$query) {
    printf("Error: %s\n", mysqli_error($con));
    exit();
}

if(mysqli_num_rows($query) > 0) {

    while($data = mysqli_fetch_array($query)) {   
        
        echo "<a href='http://localhost/Ecommerce%20website%20--%20doSoDeal/product'>".$data['title']."</a><br>";
    }

}

?>