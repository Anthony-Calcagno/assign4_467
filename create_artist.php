<?php include 'header.php'; ?>
 
<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{  
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
  $sql = "INSERT INTO Artist (Fname, Minit, Lname, Gender, Email, PhoneNumber, ConcertRate, ArtistStreet, ArtistCity, ArtistState, ArtistZip) VALUES (:Fname, :Minit, :Lname, :Gender, :Email, :PhoneNumber, :ConcertRate, :ArtistStreet, :ArtistCity, :ArtistState, :ArtistZip) ";
  $prepared = $pdo->prepare($sql, array(PDO::ATTR_CURSOR =>PDO::CURSOR_FWDONLY));
  $result = $prepared->execute(array(':Fname' => $Fname, ':Minit' => $Minit, ':Lname' => $Lname, ':Gender' => $Gender, ':Email' => $Email, ':PhoneNumber' => $PhoneNumber, ':ConcertRate' => $ConcertRate, ':ArtistStreet' => $ArtistStreet, ':ArtistCity' => $ArtistCity, ':ArtistState' => $ArtistState, ':ArtistZip' => $ArtistZip));
}
?>
    
<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Create Artist</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
        <form action="" method="post">
            <div class="form-group">
                <label for="Fname">First Name: </label>
                <input type="text" class="form-control" name="Fname">
            </div>
            <div class="form-group">
                <label for="Minit">Mnamedle Initial: </label>
                <input type="text" name="Minit" class="form-control">
            </div>
            <div class="form-group">
                <label for="Lname">Last Name: </label>
                <input type="text" name="Lname" class="form-control">
            </div>
            <div class="form-group">
                <label>Gender: </label>
                <select name="Gender" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Choose not to Answer</option>
                </select>
            </div>
             <div class="form-group">
                <label for="Email">Email Address: </label>
                <input type="email" name="Email" class="form-control">
            </div>
            <div class="form-group">
                <label for="PhoneNumber">Phone Number: </label>
                <input type="text" name="PhoneNumber" class="form-control">
            </div>
            <div class="form-group">
                <label for="ConcertRate">Rate per Event: </label>
                <input type="text" name="ConcertRate" class="form-control">
            </div>
            <div class="form-group">
                <label for="ArtistStreet">Street Address: </label>
                <input type="text" name="ArtistStreet" class="form-control">
            </div>
            <div class="form-group">
                <label for="ArtistCity">City: </label>
                <input type="text" name="ArtistCity" class="form-control">
            </div>
            <div class="form-group">
                <label for="ArtistState">State: </label>
                <input type="text" name="ArtistState" class="form-control">
            </div>
            <div class="form-group">
                <label for="ArtistZip">Zip Code: </label>
                <input type="text" name="ArtistZip" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Create</button>
            <button type="submit" class="btn btn-danger">Cancel</button>
            </div>
        </form>
        </div>
    </div>
</div>
