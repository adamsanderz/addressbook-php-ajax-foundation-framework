<?php include('core/init.php'); ?>

<?php
//Create a DB Object
$db = new Database;

//run query
$db->query('delete from contacts where id = :id');

//Bind values to vars
$db->bind(':id', $_POST['id']);

if($db->execute()){
	echo "Contact was deleted";
} else {
	echo "Could not delete Contact";
}
?>