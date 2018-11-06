<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-12">
            <h1>Create Band</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <form action="" method="post">
            <div class="form-group">
                <label for="BandName">Band Name: </label>
                <input class="form-control" type="text" id="BandName" placeholder="The Beatles">
            </div>
            <div class="form-group">
                <label for="BandRate">Rate per Event: </label>
                <input class="form-control" type="text" id="BandRate" placeholder="100">
            </div>
            <div class="form-group">
                <label for="BandAgent">Band Agent: </label>
                <input class="form-control" type="text" id="Band Agent" placeholder="Jim Agent">
            </div>
            <div class="form-group">
                <label for="BandPhone">Phone Number for Band: </label>
                <input class="form-control" type="text" id="BandPhone" placeholder="(630)555-5555">
            </div>
            <div class="form-group">
                <label for="Notes">Notes: </label>
                <input class="form-control" type="text" id="Notes">
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
