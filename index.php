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
        <a class="add-btn button right small" data-reveal-id="myModal">Add Contact</a>
        <div id="myModal" class="reveal-modal" data-reveal>
          <h2>Add Contact</h2>
          <form>
            <div class="row">
              <div class="large-6 columns"><label>First Name <input type="text" placeholder="Enter First Name" /></label></div>
              <div class="large-6 columns"><label>Last Name <input type="text" placeholder="Enter Last Name" /></label></div>
            </div>
            <div class="row">
              <div class="large-4 columns"><label>Email <input type="email" placeholder="Enter Email address" /></label></div>
              <div class="large-4 columns"><label>Phone Number <input type="text" placeholder="Phone Number" /></label></div>
              <div class="large-4 columns"><label>Contact Group 
                <select><option value="family">Family</option><option value="friends">Friends</option><option value="business">Business</option></select>
              </label></div>
              <div class="row">
                <div class="large-6 columns"><label>Address1 <input type="text" placeholder="Enter Street, House Number, GPO" /></label></div>
                <div class="large-6 columns"><label>Address2 <input type="text" placeholder="Enter Additional Address" /></label></div>
              </div>
              <div class="row">
                <div class="large-4 columns"><label>City <input type="email" placeholder="Enter Email address" /></label></div>
                <div class="large-4 columns"><label>District
                  <select>
                    <option value="Kathmandu">Kathmandu</option>
                    <option value="Lalitpur">Lalitpur</option>
                    <option value="Bhaktapur">Bhaktapur</option>
                    <option value="Kaski">Kaski</option>
                    <option value="Gorkha">Gorkha</option>
                    <option value="Chitwan">Chitwan</option>
                  </select>
                </label></div>
                <div class="large-4 columns"><label>Zone/State <input type="text" placeholder="Enter Zone or State" /></label></div>
            </div>
            <div class="row">
              <div class="large-12 columns"><label>Notes<textarea placeholder="Enter Optional Notes"></textarea></label></div>
            </div>
            <input type="submit" class="add-btn button right small" value="Submit" />
            <a class="close-reveal-modal">&#215;</a>
          </form>
        </div>
      </div>
    </div>
    
    
    <script src="js/vendor/jquery.js"></script>
    <script src="js/script.js"></script>
    <script src="js/foundation.min.js"></script>
    <script>
      $(document).foundation();
    </script>
  </body>
</html>
