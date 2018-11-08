<?php include 'header1.php';?>


<?php

if($_SERVER['REQUEST_METHOD'] == 'POST')
{
  $username = trim($_POST['username']);
  $password = trim($_POST['password']);
    
    if($username == "eventstaff" && $password == "eventstaff")
    {

        echo'
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>Event Staff</h1>
                            <a href="create_artist.php" class="btn btn-primary">Create Artist</a>
                            <a href="create_agent.php" class="btn btn-primary">Create Agent</a>
                            <a href="create_event.php" class="btn btn-primary">Create Event</a>
                        </div>
                    </div>
                </div>
            </section>

        ';
    }
    else if ($username == "eventmanager" && $password == "eventmanager")
    {

        echo'
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>Event Manager</h1>
                            <a href="approve_event.php" class="btn btn-primary">Approve Event</a>
                        </div>
                    </div>
                </div>
            </section>

        ';

    }
    else if ($username == "coo" && $password == "coo")
    {

        echo'
            <section>
                <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h1>COO</h1>
                            <a href="generate_report.php" class="btn btn-primary">Generate Report</a>
                        </div>
                    </div>
                </div>
            </section>

        ';
    }

}
