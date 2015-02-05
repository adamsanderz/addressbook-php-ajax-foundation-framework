<?php include('core/init.php'); ?>

<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Ajax AddressBook | Welcome</title>
    <link rel="stylesheet" href="css/foundation.css" />
    <link rel="stylesheet" href="css/custom.css" />
    <script src="js/vendor/modernizr.js"></script>
  </head>
  <body>
    <div class="row">
      <div class="large-6 columns">
      <h1>Ajax Address Book</h1>
      </div>
      <div class="large-6 columns">
        <a class="add-btn button right small" data-reveal-id="addModal">Add Contact</a>
        <div id="addModal" class="reveal-modal" data-reveal>
          <h2>Add Contact</h2>
          <form id="addContact" action="#" method="post">
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
                    <option>Select District</option>
                    <?php foreach ($districts as $key => $value): ?>
                      <option value="<?php echo $key; ?>"><?php echo $value?></option>
                    <?php endforeach; ?> 
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
      </div>
    </div>

    <!-- Loader Image -->
    <div id="loaderImage"><img src="img/orange_loader.gif" /> Loading...</div>
    <!-- Main Content-->
    <div id="pageContent"></div>
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
