<?php include('core/init.php'); ?>

<?php
//Create a DB Object
$db = new Database;

//run query
$db->query('delete from contacts where id = :id');

//Bind values to vars
$db->bind(':id', $_POST['cid']);

if($db->execute()){
	echo "Congratulations! Contact was deleted.";
} else {
	echo "Could not delete Contact";
}
?>