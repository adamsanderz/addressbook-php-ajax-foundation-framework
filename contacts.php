<?php include('core/init.php'); ?>

<?php 
//Create DB object
$db = new Database;

//Run query to select all from contacts
$db->query("select * from contacts");

//Assign resultset
$contacts = $db->resultset();

?>
<div class="row">
  <div class="large-12 columns">
    <table>
      <thead>
        <tr>
          <th width="200">Name</th>
          <th width="130">Phone</th>
          <th width="200">Email</th>
          <th width="250">Address</th>
          <th width="100">Group</th>
          <th width="150">Actions</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach($contacts as $contact): ?>
          <tr>
            <td><a href="contact.html"><?php echo $contact->first_name." ".$contact->last_name; ?></a></td>
            <td><?php echo $contact->phone; ?></td>
            <td><?php echo $contact->email; ?></td>
            <td><ul>
              <li><?php echo $contact->address1; ?></li>
              <li><?php if($contact->address2) echo $contact->address2; ?></li>
              <li><?php echo $contact->city.", ".$contact->district.", ".$contact->state; ?></li>
            </ul></td>
            <td><?php echo $contact->contact_group; ?></td>
            <td><ul class="button-group radius">
              <li><a href="#" class="button tiny" data-reveal-id="myModal">Edit</a></li>
              <li><a href="#" class="button tiny [secondary alert success]">Delete</a></li>
            </ul></td>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>