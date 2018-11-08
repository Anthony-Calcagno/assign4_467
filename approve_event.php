<?php include 'header.php'; ?>

<?php


if($_SERVER['REQUEST_METHOD'] == 'POST')
{
$EventNumber = trim($_POST['EventNumber']);

if($EventNumber >= $Counter)
{
    $sql = "UPDATE Event SET EventStatus = 'Approved' WHERE EventID = :EventNumber"
    $prepared = $pdo->prepare($sql, array(PDO::ATTR_CURSOR => PDO::CURSOR_FWDONLY));
    $result = $prepared->execute(array(':EventNumber' => $EventNumber));
}
}

$getEventSql = "SELECT * FROM Event;";
$getEventSqlPDO = $pdo->query($getEventSql);
$EventRows = $getEventSqlPDO->fetchAll();
$Counter = 1;

echo '

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Approve Event</h1>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Event ID</th>
                        <th scope="col">Event Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Event Manager</th>
                    </tr>
                </thead>
                <tbody> '; 
                    foreach($EventRows as $row):
                    echo '
                     <tr>'  
                     .  '<td>' . $row['EventID'] . '</td>'
                     .  '<td>' . $row['EventName'] . '</td>'
                     .  '<td>' . $row['EventDate'] . '</td>'
                     .  '<td>' . $row['EventManager'] . '</td>' .
                    '</tr>';
                    $Counter++;
                    endforeach;
echo '
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="container">
    <div class="row">
        <div class="col-12">
            <form method="post" action="">
                <div class="form-group">
                    <label>Enter Event Number for Approval: </label>
                    <input type="text" name="EventNumber" class="form-control">
                    <button type="submit" class="btn btn-danger">Cancel</button>
                    <button type="submit" class="btn btn-success">Approve</button>
                </div>
            </form>
        </div>
    </div>
</div>


';
?>


<?php include 'footer.php'; ?>
