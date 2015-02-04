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
              <li><a href="#" class="button tiny" data-reveal-id="editModal<?php echo $contact->id; ?>" data-contact-id="<?php echo $contact->id; ?>" >Edit</a></li>
                <div id="editModal<?php echo $contact->id; ?>" data-cid="<?php echo $contact->id; ?>" class="reveal-modal editModal" data-reveal>
                  <h2>Edit Contact</h2>
                  <form id="editContact" action="#" method="post">
                    <div class="row">
                      <div class="large-6 columns"><label>First Name <input name="first_name" type="text" placeholder="Enter First Name" /></label></div>
                      <div class="large-6 columns"><label>Last Name <input name="last_name" type="text" placeholder="Enter Last Name" /></label></div>
                    </div>
                    <div class="row">
                      <div class="large-4 columns"><label>Email <input name="email" type="email" placeholder="Enter Email address" /></label></div>
                      <div class="large-4 columns"><label>Phone Number <input name="phone" type="text" placeholder="Phone Number" /></label></div>
                      <div class="large-4 columns"><label>Contact Group 
                        <select name="contact_group"><option value="family">Family</option><option value="friends">Friends</option><option value="business">Business</option></select>
                      </label></div>
                      <div class="row">
                        <div class="large-6 columns"><label>Address1 <input name="address1" type="text" placeholder="Enter Street, House Number, GPO" /></label></div>
                        <div class="large-6 columns"><label>Address2 <input name="address2" type="text" placeholder="Enter Additional Address" /></label></div>
                      </div>
                      <div class="row">
                        <div class="large-4 columns"><label>City <input name="city" type="text" placeholder="Enter Email address" /></label></div>
                        <div class="large-4 columns"><label>District
                          <select name="district">
                            <option value="Kathmandu">Kathmandu</option>
                            <option value="Lalitpur">Lalitpur</option>
                            <option value="Bhaktapur">Bhaktapur</option>
                            <option value="Kaski">Kaski</option>
                            <option value="Gorkha">Gorkha</option>
                            <option value="Chitwan">Chitwan</option>
                          </select>
                        </label></div>
                        <div class="large-4 columns"><label>Zone/State <input name="state" type="text" placeholder="Enter Zone or State" /></label></div>
                    </div>
                    <div class="row">
                      <div class="large-12 columns"><label>Notes<textarea name="notes" placeholder="Enter Optional Notes"></textarea></label></div>
                    </div>
                    <input name="submit" type="submit" class="add-btn button right small" value="Submit" />
                    <a class="close-reveal-modal">&#215;</a>
                  </form>
                </div>
              <li><a href="#" class="button tiny [secondary alert success]">Delete</a></li>
            </ul></td>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>