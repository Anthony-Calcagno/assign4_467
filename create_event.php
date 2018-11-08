<?php include 'header.php'; ?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{  
  $ArtistID = trim($_POST['ArtistID']);
  $BandID = trim($_POST['BandID']);
  $EventDate = trim($_POST['EventDate']);
  $EventTime = trim($_POST['EventTime']);
  $EventStatus = trim($_POST['EventStatus']);
  $EventCapacity = trim($_POST['EventCapacity']);
  $EventNotes = trim($_POST['Notes']);
  $EventManager = trim($_POST['EventManager']);
  $EventStreet = trim($_POST['EventStreet']);
  $EventCity = trim($_POST['EventCity']);
  $EventState = trim($_POST['EventState']);
  $EventZip = trim($_POST['EventZip']);
    if($ArtistID == "none" && $BandID == "none")
        {

        }
    if($ArtistID == "none" && $BandID != "none")
        {
        $sql = "INSERT INTO Event (BandID, EventDate, EventTime, EventStatus, EventCapacity, EventNotes, EventStreet, EventCity, EventState, EventZip) VALUES (:BandID, :EventDate, :EventTime, :EventStatus, :EventCapacity, :EventNotes, :EventStreet, :EventCity, :EventState, :EventZip) ";
        $prepared = $pdo->prepare($sql, array(PDO::ATTR_CURSOR =>PDO::CURSOR_FWDONLY));
        $result = $prepared->execute(array(':BandID' => $BandID, ':EventDate' => $EventDate, ':EventTime' => $EventTime, ':EventStatus' => $EventStatus, ':EventCapacity' => $EventCapacity, ':EventNotes' => $EventNotes, ':EventStreet' => $EventStreet, ':EventCity' => $EventCity, ':EventState' => $EventState, ':EventZip' => $EventZip));

        }
    if($ArtistID != "none" && $BandID =="none")
        {
        $sql = "INSERT INTO Event (ArtistID, EventDate, EventTime, EventStatus, EventCapacity, EventNotes, EventStreet, EventCity, EventState, EventZip) VALUES (:ArtistID, :EventDate, :EventTime, :EventStatus, :EventCapacity, :EventNotes, :EventStreet, :EventCity, :EventState, :EventZip) ";
        $prepared = $pdo->prepare($sql, array(PDO::ATTR_CURSOR =>PDO::CURSOR_FWDONLY));
        $result = $prepared->execute(array(':ArtistID' => $ArtistID, ':EventDate' => $EventDate, ':EventTime' => $EventTime, ':EventStatus' => $EventStatus, ':EventCapacity' => $EventCapacity, ':EventNotes' => $EventNotes, ':EventStreet' => $EventStreet, ':EventCity' => $EventCity, ':EventState' => $EventState, ':EventZip' => $EventZip));

        }
    if($ArtistID != "none" && $BandID !="none")
        {
$sql = "INSERT INTO Event (ArtistID, BandID, EventDate, EventTime, EventStatus, EventCapacity, EventNotes, EventStreet, EventCity, EventState, EventZip) VALUES (:ArtistID, :BandID, :EventDate, :EventTime, :EventStatus, :EventCapacity, :EventNotes, :EventStreet, :EventCity, :EventState, :EventZip) ";
        $prepared = $pdo->prepare($sql, array(PDO::ATTR_CURSOR =>PDO::CURSOR_FWDONLY));
        $result = $prepared->execute(array(':ArtistID' => $ArtistID, ':BandID' => $BandID, ':EventDate' => $EventDate, ':EventTime' => $EventTime, ':EventStatus' => $EventStatus, ':EventCapacity' => $EventCapacity, ':EventNotes' => $EventNotes, ':EventStreet' => $EventStreet, ':EventCity' => $EventCity, ':EventState' => $EventState, ':EventZip' => $EventZip));
        }

}


$getArtistSql = "SELECT * FROM Artist;";
$getArtistSqlPDO = $pdo->query($getArtistSql);
$ArtistRows = $getArtistSqlPDO->fetchAll();
$getBandSql = "SELECT * FROM Band;";
$getBandSqlPDO = $pdo->query($getBandSql);
$BandRows = $getBandSqlPDO->fetchAll();

echo '

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Create Event</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
        <form action="" method="post">
            <label>Select Artist: </label>       
            <select name="ArtistID" class="form-control">
                <option value="none">No Artist</option> ';
                foreach($ArtistRows as $row):
                echo '<option value="' . $row['ArtistID'] . '" >' . $row['Fname'] . ' ' .  $row['Lname'] . '</option>';
                endforeach;
echo '
                </select>
                <label>Select Band: </label>
                <select name="BandID" class="form-control">
                    <option value="none">No Band</option> ';
                    foreach($BandRows as $row):
                echo '<option value="' . $row['BandID'] . '" >' . $row['BandName'] . '</option>';
            endforeach;
echo '
                </select>
            <div class="form-group">
                <label>Date of Event: </label>
                <input type="text" name="EventDate" class="form-control">
            </div>
            <div class="form-group">
                <label>Time of Event: </label>
                <input type="text" name="EventTime" class="form-control">
            </div>
            <div class="form-group">
                <label>Event Status: </label>
                <select name="EventStatus" class="form-control">
                    <option value="Created">Created</option>
                    <option value="Approved">Approved</option>
                    <option value="Advertised">Advertised</option>
                    <option value="SoldOut">Sold Out</option>
                    <option value="Cancelled">Cancelled</option>
                    <option value="Completed">Completed</option>
                </select>
            </div>
            <div class="form-group">
                <label>Event Seating Capacity: </label>
                <input type="text" name="EventCapacity" class="form-control">
            </div>
            <div class="form-group">
                <label>Event Manager: </label>
                <input type="text" name="EventManager" class="form-control">
            </div>
            <div class="form-group">
                <label>Notes: </label>
                <input type="text" name="Notes" class="form-control">
            </div>
            <div class="form-group">
                <label>Street Address: </label>
                <input type="text" name="EventStreet" class="form-control">
            </div>
            <div class="form-group">
                <label>City: </label>
                <input type="text" name="EventCity" class="form-control">
            </div>
            <div class="form-group">
                <label>State: </label>
                <input type="text" name="EventState" class="form-control">
            </div>
            <div class="form-group">
                <label>Zip Code: </label>
                <input type="text" name="EventZip" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Create</button>
                <button type="submit" class="btn btn-danger">Cancel</button>
            </div>
            </form>
        </div>
    </div>
</div>

';
?>

<?php include 'footer.php'; ?>

