<?php 

$sql1 = "SELECT COUNT(1) Number_of_users FROM om_user
INNER JOIN om_purchase
ON om_purchase.user_id = om_user.userId
WHERE purchaseDate >= '2018-02-01' AND purchaseDate < '2018-03-01'";


$sql2 = "SELECT om_product.productName 
FROM om_user
INNER JOIN om_purchase
	ON om_user.userId = om_purchase.user_id
INNER JOIN om_product
	ON om_purchase.productId = om_product.productId
WHERE om_user.email LIKE '%@aol.com' ";


$sql3 = "SELECT sex, SUM(quantity)
FROM om_purchase
INNER JOIN user ON om_user.userId = om_purchase.user_id
GROUP BY sex ";


$sql4 = "SELECT product.catId, category.catName
FROM product
INNER JOIN purchase ON product.productId = purchase.productId
INNER JOIN category ON product.catId = category.catId
WHERE purchaseDate BETWEEN '2018-01-31' AND '2018-03-01'
GROUP BY catId";


$host = "localhost";
$dbname = "ottermart";
$username = "root";
$password = "";
$dbConn = new PDO("mysql:host=$host;dbname=$dbname", $username, $password);
$dbConn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

$stmt = $dbConn->prepare($sql1);
$stmt->execute();
$records = $stmt->fetch();//You are expecting ONLY ONE record

//print_r($records);

echo "Total Purchases in February: " . $records['Number_of_users'];

$stmt = $dbConn->prepare($sql2);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC); //You are expecting MANY records

//print_r($records);

echo "<br><br/>Products bought by users with an AOL account: <br/>";

foreach($records as $record) {
	
	echo $record['productName'] . "<br />";
}

$stmt = $dbConn->prepare($sql3);
$stmt->execute();
$records = $stmt->fetchAll(PDO::FETCH_ASSOC);

print_r($records);

?>