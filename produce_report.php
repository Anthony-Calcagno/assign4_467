<?php include 'header.php'; ?>

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
}


echo "Date is $date";
echo "Date2 is $date2";
echo "Status is $Status";
echo "Artist is $Artist";
echo "Band is $Band";
echo "EventManager is $EventManager";
echo "TicketPrice is $TicketPrice";

?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Produce Report</h1>
        </div>
    </div>
</div>







<?php include 'footer.php'; ?>
