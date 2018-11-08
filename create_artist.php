<?php include 'header1.php'; ?>
 
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{  
  $AgentID = trim($_POST['AgentID']);
  $Fname = trim($_POST['Fname']);
  $Minit = trim($_POST['Minit']);
  $Lname = trim($_POST['Lname']);
  $Gender = trim($_POST['Gender']);
  $Email = trim($_POST['Email']);
  $PhoneNumber = trim($_POST['PhoneNumber']);
  $ConcertRate = trim($_POST['ConcertRate']);
  $ArtistStreet = trim($_POST['ArtistStreet']);
  $ArtistCity = trim($_POST['ArtistCity']);
  $ArtistState = trim($_POST['ArtistState']);
  $ArtistZip = trim($_POST['ArtistZip']);
if($AgentID == "none")
{     
  $sql = "INSERT INTO Artist (Fname, Minit, Lname, Gender, Email, PhoneNumber, ConcertRate, ArtistStreet, ArtistCity, ArtistState, ArtistZip) VALUES (:Fname, :Minit, :Lname, :Gender, :Email, :PhoneNumber, :ConcertRate, :ArtistStreet, :ArtistCity, :ArtistState, :ArtistZip) ";
  $prepared = $pdo->prepare($sql, array(PDO::ATTR_CURSOR =>PDO::CURSOR_FWDONLY));
  $result = $prepared->execute(array(':Fname' => $Fname, ':Minit' => $Minit, ':Lname' => $Lname, ':Gender' => $Gender, ':Email' => $Email, ':PhoneNumber' => $PhoneNumber, ':ConcertRate' => $ConcertRate, ':ArtistStreet' => $ArtistStreet, ':ArtistCity' => $ArtistCity, ':ArtistState' => $ArtistState, ':ArtistZip' => $ArtistZip));
}
else if($AgentID != "none")
{
  $sql = "INSERT INTO Artist (AgentID, Fname, Minit, Lname, Gender, Email, PhoneNumber, ConcertRate, ArtistStreet, ArtistCity, ArtistState, ArtistZip) VALUES (:AgentID, :Fname, :Minit, :Lname, :Gender, :Email, :PhoneNumber, :ConcertRate, :ArtistStreet, :ArtistCity, :ArtistState, :ArtistZip) ";
  $prepared = $pdo->prepare($sql, array(PDO::ATTR_CURSOR =>PDO::CURSOR_FWDONLY));
  $result = $prepared->execute(array(':AgentID' => $AgentID, ':Fname' => $Fname, ':Minit' => $Minit, ':Lname' => $Lname, ':Gender' => $Gender, ':Email' => $Email, ':PhoneNumber' => $PhoneNumber, ':ConcertRate' => $ConcertRate, ':ArtistStreet' => $ArtistStreet, ':ArtistCity' => $ArtistCity, ':ArtistState' => $ArtistState, ':ArtistZip' => $ArtistZip));
}
}

$getAgentSql = "SELECT * FROM Agent;";
$getAgentSqlPDO = $pdo->query($getAgentSql);
$AgentRows = $getAgentSqlPDO->fetchAll();


echo'
    
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Create Artist</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
        <form action="" method="post">
            <div class="form-group">
            <label>Select Agent: </label>       
            <select name="AgentID" class="form-control">
                <option value="none">No Agent</option> ';

            foreach($AgentRows as $row):
                echo '<option value="' . $row['AgentID'] . '" >' . $row['Fname'] . ' ' .  $row['Lname'] . '</option>';
            endforeach;
echo ' 
            </select>
             <div class="form-group">
                <label for="Fname">First Name: </label>
                <input required type="text" class="form-control" name="Fname">
            </div>
            <div class="form-group">
                <label for="Minit">Middle Initial: </label>
                <input required type="text" name="Minit" class="form-control">
            </div>
            <div class="form-group">
                <label for="Lname">Last Name: </label>
                <input required type="text" name="Lname" class="form-control">
            </div>
            <div class="form-group">
                <label>Gender: </label>
                <select name="Gender" class="form-control">
                    <option value="Male"></option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Choose not to Answer</option>
                </select>
            </div>
             <div class="form-group">
                <label for="Email">Email Address: </label>
                <input required type="email" name="Email" class="form-control">
            </div>
            <div class="form-group">
                <label for="PhoneNumber">Phone Number: </label>
                <input required type="text" name="PhoneNumber" class="form-control">
            </div>
            <div class="form-group">
                <label for="ConcertRate">Rate per Event: </label>
                <input required type="text" name="ConcertRate" class="form-control">
            </div>
            <div class="form-group">
                <label for="ArtistStreet">Street Address: </label>
                <input required type="text" name="ArtistStreet" class="form-control">
            </div>
            <div class="form-group">
                <label for="ArtistCity">City: </label>
                <input required type="text" name="ArtistCity" class="form-control">
            </div>
            <div class="form-group">
                <label for="ArtistState">State: </label>
                <input required type="text" name="ArtistState" class="form-control">
            </div>
            <div class="form-group">
                <label for="ArtistZip">Zip Code: </label>
                <input required type="text" name="ArtistZip" class="form-control">
            </div>
            <div class="form-group"> 
                <button type="submit" style="float: right" class="btn btn-success">Create</buttton>
                <button type="reset" style="float: right" class="btn btn-danger">Clear</button>
                
            </div>
        </form>
        </div>
    </div>
</div>

';
?>

<?php include 'footer.php'; ?>
