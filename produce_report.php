<?php include 'header1.php'; ?>

<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{  
  $date = trim($_POST['date']);
  $date2 = trim($_POST['date2']);
  $Status = trim($_POST['Status']);
  $Artist = trim($_POST['Artist']);
  $Band = trim($_POST['Band']);
  $EventManager = trim($_POST['EventManager']);
  $TicketPrice = trim($_POST['TicketPrice']);
  $date11 = substr($date,0,2);
  $date12 = substr($date,3,2);
  $date13 = substr($date,6,4);
  $date21 = substr($date2,0,2);
  $date22 = substr($date2,3,2);
  $date23 = substr($date2,6,4);
  $date1year = $date13 . "-";
  $date1month = $date11 . "-";
  $newdate1 = ($date1year . $date1month . $date12);
  $date2year = $date23 . "-";
  $date2month = $date21 . "-";
  $newdate2 = ($date2year . $date2month . $date22);


    if($Status == "none")
    {    
        $getEventSql = "SELECT * FROM Event WHERE EventDate >= '" . $newdate1 . "' AND EventDate <= '" . $newdate2 . "';";
        $getEventSqlPDO = $pdo->query($getEventSql);
        $EventRows = $getEventSqlPDO->fetchAll();
    }
    else
    {
        $getEventSql = "SELECT * FROM Event WHERE EventDate >= '" . $newdate1 . "' AND EventDate <= '" . $newdate2 . "' ORDER BY EventStatus='" . $Status . "';";
        $getEventSqlPDO = $pdo->query($getEventSql);
        $EventRows = $getEventSqlPDO->fetchAll();
    }
}


echo '


<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Produce Report</h1>
        </div>
    </div>
</div>
<div class="container">
    <div class="row">
        <div class="col-12">
            <table class="table">
                <thead class="thead-dark">
                    <tr>
                        <th scope="col">Event ID</th>';

                       if($Artist == 1)
                       {
                        echo '<th scope="col">Artist</th>';
                       } 
                       if($Band == 1)
                       {
                        echo '<th scope="col>Band</th>';
                       }
                       if($EventManager == 1)
                       {
                        echo '<th scope="col>Event Manager</th>';
                       }
                       if($TicketPrice == 1)
                       {
                        echo '<th scope="col">Ticket Price</th>';
                       }
         echo '         <th scope="col">Event Name</th>
                        <th scope="col">Date</th>
                        <th scope="col">Status</th>
                        <th scope="col">Tickets Sold</th>
                        <th scope="col">Profit</th>
                    </tr>
                </thead>
                <tbody> '; 
                    foreach($EventRows as $row):
                    echo '
                     <tr>'  
                     .  '<td>' . $row['EventID'] . '</td>'
                     .  '<td>' . $row['EventName'] . '</td>'
                     .  '<td>' . $row['EventDate'] . '</td>'
                     .  '<td>' . $row['EventStatus'] . '</td>'
                     .  '<td>' . $row['TicketSales'] . '</td>' 
                     .  '<td>' . ($row['TicketSales'] = $row['TicketSales']*$row['TicketPrice']) . '</td>' .
                    '</tr>';
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
            <div class="form-group">
                <a href="javascript:window.print()" class="btn btn-secondary">Print <i class="fa fa-print"></i></a>
                <button type="button" class="btn btn-success">Save</button>            
            </div>
        </div>
    </div>
</div>



';
?>

<?php include 'footer.php'; ?>
