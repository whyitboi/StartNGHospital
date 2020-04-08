<?php
include_once("lib/header.php");
if(isset($_SESSION['loggedin']) && !empty($_SESSION['loggedin'])){
   header("Location: dashboard.php");
}
 ?>

<p><strong>Welcome Please Register</strong></p>
<p>All fields are <strong>REQURED</strong></p>

<form method="POST" action="processingRegister.php">
     <p>
          <?php
          if (isset($_SESSION['error']) && !empty($_SESSION['error'])) {
               print "<span style='color:red'>" . $_SESSION['error'] . "</span>";
               //session_unset();
               session_destroy(); 
          }
          ?>
     </p>
     <p>
          <label>First Name</label><br />
          
          <input 
               <?php
               
                    if(isset($_SESSION['first_name'])){
                         print "value =" . $_SESSION['first_name'];
                    }

               ?>
                type="text" name="first_name" placeholder="First Name" />
     </p>

     <p>
          <label>Last Name</label><br />
          <input
          <?php
                    if(isset($_SESSION['last_name'])){
                         print "value =".$_SESSION['last_name'];
                    }

               ?>
                type="text" name="last_name" placeholder="Last Name"  />
     </p>

     <p>
          <label>Email</label><br />
          <input 
          <?php
                    if(isset($_SESSION['email'])){
                         print "value =".$_SESSION['email'];
                    }

               ?>
               type="text" name="email" placeholder="Email"  />
     </p>

     <p>
          <label>Password</label><br />
          <input type="password" name="password" placeholder="Password" />
     </p>

     <p>
          <label>Gender</label><br />
          <select name="gender" >
               <option value="">Select One</option>
               <option 
               <?php
                    if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Male'){
                         print "selected";
                    }

               ?>
               >Male</option>
               <option 
               <?php
                    if(isset($_SESSION['gender']) && $_SESSION['gender'] == 'Female'){
                         print "selected";
                    }

               ?>
               >Female</option>
          </select>
     </p>

     <p>
          <label>Designation</label><br />
          <select name="designation" >
               <option value="">Select One</option>
               <option>Medical Team</option>
               <option>Patients</option>
          </select>
     </p>

     <p>
          <label>Department</label><br />
          <input 
          <?php
                    if(isset($_SESSION['department'])){
                         print "value =".$_SESSION['department'];
                    }

               ?>
          type="text" name="department" placeholder="Department"  />
     </p>

     <p>
          <button type="submit">Register</button>
     </p>

</form>

<?php
 include_once("lib/menu.php");
include_once("lib/footer.php");

?>