<?php include('core/init.php'); ?>

<?php
//Create a DB Object
$db = new Database;

//run query
$db->query('update contacts set 
	first_name	= :first_name,
	last_name	= :last_name,
	email 		= :email,
	phone		= :phone,
	address1	= :address1,
	address2	= :address2,
	city 		= :city,
	district	= :district,
	state 		= :state,
	notes 		= :notes,
	contact_group = :contact_group
	where id = :id');

//Bind values to vars
$db->bind(':id', $_POST['id']);
$db->bind(':first_name', $_POST['first_name']);
$db->bind(':last_name', $_POST['last_name']);
$db->bind(':email', $_POST['email']);
$db->bind(':phone', $_POST['phone']);
$db->bind(':address1', $_POST['address1']);
$db->bind(':address2', $_POST['address2']);
$db->bind(':city', $_POST['city']);
$db->bind(':district', $_POST['district']);
$db->bind(':state', $_POST['state']);
$db->bind(':notes', $_POST['notes']);
$db->bind(':contact_group', $_POST['contact_group']);

if($db->execute()){
	echo "Contact was updated";
} else {
	echo "Could not update Contact";
}
?>