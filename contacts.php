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
                <li><a href="#" class="button tiny" data-reveal-id="editModal<?php echo $contact->id; ?>" data-cid="<?php echo $contact->id; ?>" >Edit</a></li>
                <li><a href="#" class="button tiny [secondary alert success]" id="deleteContact" data-cid="<?php echo $contact->id; ?>" >Delete</a></li>
              </ul>
                <div id="editModal<?php echo $contact->id; ?>" data-cid="<?php echo $contact->id; ?>" class="reveal-modal editModal" data-reveal>
                  <h2>Edit Contact</h2>
                  <form id="editContact" action="#" method="post">
                    <div class="row">
                      <div class="large-6 columns"><label>First Name <input name="first_name" type="text" placeholder="Enter First Name" value="<?php echo $contact->first_name; ?>" /></label></div>
                      <div class="large-6 columns"><label>Last Name <input name="last_name" type="text" placeholder="Enter Last Name" value="<?php echo $contact->last_name; ?>" /></label></div>
                    </div>
                    <div class="row">
                      <div class="large-4 columns"><label>Email <input name="email" type="email" placeholder="Enter Email address" value="<?php echo $contact->email; ?>" /></label></div>
                      <div class="large-4 columns"><label>Phone Number <input name="phone" type="text" placeholder="Phone Number" value="<?php echo $contact->phone; ?>" /></label></div>
                      <div class="large-4 columns"><label>Contact Group 
                        <select name="contact_group">
                          <option value="Family" <?php echo $contact->contact_group=='Family'?'selected':''; ?> >Family</option>
                          <option value="Friends" <?php echo $contact->contact_group=='Friends'?'selected':''; ?> >Friends</option>
                          <option value="Business" <?php echo $contact->contact_group == 'Business'?'selected':''; ?> >Business</option>
                        </select>
                      </label></div>
                      <div class="row">
                        <div class="large-6 columns"><label>Address1 <input name="address1" type="text" placeholder="Enter Street, House Number, GPO" value="<?php echo $contact->address1; ?>" /></label></div>
                        <div class="large-6 columns"><label>Address2 <input name="address2" type="text" placeholder="Enter Additional Address" value="<?php echo $contact->address2; ?>" /></label></div>
                      </div>
                      <div class="row">
                        <div class="large-4 columns"><label>City <input name="city" type="text" placeholder="Enter City where you live" value="<?php echo $contact->city; ?>" /></label></div>
                        <div class="large-4 columns"><label>District
                          <select name="district">
                            <?php foreach ($districts as $key => $value): ?>
                              <option value="<?php echo $key; ?>" <?php echo $key==$contact->district?'selected':''; ?> ><?php echo $value?></option>
                            <?php endforeach; ?>
                          </select>
                        </label></div>
                        <div class="large-4 columns"><label>Zone/State <input name="state" type="text" placeholder="Enter Zone or State" value="<?php echo $contact->state; ?>" /></label></div>
                    </div>
                    <div class="row">
                      <div class="large-12 columns"><label>Notes<textarea name="notes" placeholder="Enter Optional Notes"><?php echo $contact->notes; ?></textarea></label></div>
                    </div>
                    <input type="hidden" name="id" value="<?php echo $contact->id; ?>" />
                    <input name="submit" type="submit" class="add-btn button right small" value="Submit" />
                    <a class="close-reveal-modal">&#215;</a>
                  </form>
                </div>
              </td>
            </td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
</div>