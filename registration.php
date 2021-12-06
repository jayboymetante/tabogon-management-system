<?php
require 'config.php';
if(isset($_POST['btn'])){
  header('Location: login.php');
}


?>
<html>
<head>
    <title>VACCINE INFORMATION MANAGEMENT SYSTEM</title>
    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
    <form action="login.php" action="" method="post">
        <input type="submit" name= "btn" value="Sign in">
    </form>
 <div>
     <?php
     if(isset($_POST['create'])){
         $firstname           =$_POST['firstname'];
         $middlename         =$_POST['middlename'];
         $lastname           =$_POST['lastname'];
         $gender             =$_POST['gender'];
         $age                =$_POST['age'];
         $mobile_number      =$_POST['mobile_number'];
         $email_address      =$_POST['email_address'];
         $citizenship        =$_POST['citizenship'];
         $purok              =$_POST['purok'];
         $address            =$_POST['address'];
         $civil_status       =$_POST['civil_status'];
         $weight             =$_POST['weight'];
         $height             =$_POST['height'];
         $comorbidities      =$_POST['comorbidities'];

         $sql = "INSERT INTO users_information (firstname,middlename,lastname,gender,age,mobile_number,email_address,citizenship,purok,address,civil_status,weight,height,comorbidities) VALUES(?,?,?,?,?,?,?,?,?,?,?,?,?,?)";
         $stmtinsert = $db->prepare($sql);
         $result = $stmtinsert->execute([$firstname,$middlename,$lastname,$gender,$age,$mobile_number,$email_address,$citizenship,$purok,$address,$civil_status, $weight,$height,$comorbidities  ]);
         if($result){
             echo 'Successfully Saved';
         }
         else{
            echo 'Saving Failed';
        }

     }
     ?>
</div>

     <div>
         <form action"registration.php" method="post">
         <div class="container">
             <div class="row">
                 <div class="col-sm-3">
                    <h1>VACCINE INFORMATION</h1>
                    <p>Online Registration</p>
                    <hr class="mb-3">
                    <label for="firstname"><b>First Name</b></label>
                    <input class="form-control" id="firstname" type="text" name="firstname" required>

                    <label for="middlename"><b>Middle Name</b></label>
                    <input class="form-control" id="middlename" type="text" name="middlename" required>

                    <label for="lastname"><b>Last Name</b></label>
                    <input class="form-control" id="lastname" type="text" name="lastname" required> 

                    <label for="gender" ><b>Gender</b></label required>  
                           <select class="form-control" id="gender"  name="gender">
                                <option value=""></option>
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                            </select>  

                     <label for="age"><b>Age</b></label>
                     <input class="form-control" id="age" type="text" name="age" required>

                     <label for="mobile_number"><b>Mobile Number</b></label>
                     <input class="form-control" id="mobile_number" type="text" name="mobile_number" required>

                   
                    <label for="email_address"><b>Email Address</b></label>
                    <input class="form-control" id="email_address" type="email" name="email_address" required>
                    
                    <label for="citizenship" ><b>Citizenship</b></label required>  
                           <select class="form-control" id="citizenship" name="citizenship">
                                <option value="filipino">Filipino</option>
                                <option value="american">American</option>
                                <option value="british">British</option>
                            </select>  

                            <label for="purok" ><b>Purok</b></label required>  
                           <select class="form-control" id="purok" name="purok">
                                <option value=""></option>
                                <option value="chicago">Chicago</option>
                                <option value="tabili">Tabili</option>
                                <option value="gumamela">Gumammela</option>
                            </select> 
                           
                        <label for="address"><b>Address</b></label>
                        <input class="form-control" id="address" type="text" name="address" required> 
                        
                        <label for="civil_status" ><b>Civil Status</b></label required>  
                           <select class="form-control" id="civil_status" name="civil_status">
                                <option value=""></option>
                                <option value="single">Single</option>
                                <option value="married">Married</option>
                                <option value="divorced">Divorced</option>
                                <option value="widowed">Widowed</option>
                            </select> 
                        
                        <label for="weight"><b>Weight</b></label>
                        <input class="form-control" id="weight" type="text" name="weight" required>

                        <label for="height"><b>Height</b></label>
                        <input class="form-control" id="height" type="text" name="height" required>

                        <label for="comorbidities"><b>Comorbidities</b></label>
                        <input class="form-control"  id="comorbidities" type="text" name="comorbidities" required>

                    <hr class="mb-3">
                    <input class="btn btn-primary" type="submit" id="submitted" name="create" value="Submit">
                </div>
             </div>
           </div> 
         </form> 
     </div>   
     
      </script>
    </body>
</html>