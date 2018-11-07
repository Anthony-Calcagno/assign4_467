<?php include 'header.php'; ?>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{  
  $Fname = trim($_POST['Fname']);
  $Minit = trim($_POST['Minit']);
  $Lname = trim($_POST['Lname']);
  $AgentEmail = trim($_POST['Email']);
  $OfficePhone = trim($_POST['OfficePhone']);
  $CellPhone = trim($_POST['CellPhone']);
  $AgentType = trim($_POST['Type']);
  $AgentStreet = trim($_POST['Street']);
  $AgentCity = trim($_POST['City']);
  $AgentState = trim($_POST['State']);
  $AgentZip = trim($_POST['Zip']);

  $sql = "INSERT INTO Agent (Fname, Minit, Lname, AgentEmail, OfficePhone, CellPhone, AgentType, AgentStreet, AgentCity, AgentState, AgentZip) VALUES (:Fname, :Minit, :Lname, :AgentEmail, :OfficePhone, :CellPhone, :AgentType, :AgentStreet, :AgentCity, :AgentState, :AgentZip) ";
  $prepared = $pdo->prepare($sql, array(PDO::ATTR_CURSOR =>PDO::CURSOR_FWDONLY));
  $result = $prepared->execute(array(':Fname' => $Fname, ':Minit' => $Minit, ':Lname' => $Lname, ':AgentEmail' => $AgentEmail, ':OfficePhone' => $OfficePhone, ':CellPhone' => $CellPhone, ':AgentType' => $AgentType, ':AgentStreet' => $AgentStreet, ':AgentCity' => $AgentCity, ':AgentState' => $AgentState, ':AgentZip' => $AgentZip));
}

?>



<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Create Agent</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
        <form action="" method="post">
            <div class="form-group">
                <label for="Fname">First Name: </label>
                <input type="text" name="Fname" class="form-control">
            </div>
            <div class="form-group">
                <label for="Minit">Middle Initial: </label>
                <input type="text" name="Minit" class="form-control">
            </div>
            <div class="form-group">
                <label for="Lname">Last Name: </label>
                <input type="text" name="Lname" class="form-control">
            </div>
            <div class="form-group">
                <label for="Email">Email Address: </label>
                <input type="email" name="Email" class="form-control">
            </div>
            <div class="form-group">
                <label for="OfficePhone">Office Phone Number: </label>
                <input type="text" name="OfficePhone" class="form-control">
            </div>
            <div class="form-group">
                <label for="CellPhone">Cell Phone Number: </label>
                <input type="text" name="CellPhone" class="form-control">
            </div>
            <div class="form-group">
                <label>Type: </label>
                <select name="Type" class="form-control">
                    <option value="Artist">Artist</option>
                    <option value="Band">Band</option>
                    <option value="Other">Other</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Street">Street Address: </label>
                <input type="text" name="Street" class="form-control">
            </div>
            <div class="form-group">
                <label for="City">City: </label>
                <input type="text" name="City" class="form-control">
            </div>
            <div class="form-group">
                <label for="State">State: </label>
                <input type="text" name="State" class="form-control">
            </div>
            <div class="form-group">
                <label for="Zip">Zip Code: </label>
                <input type="text" name="Zip" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Create</button>
                <button type="submit" class="btn btn-danger">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>
            



