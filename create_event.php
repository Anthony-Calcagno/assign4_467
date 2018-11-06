<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Create Event</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
        <form action="" method="post">
            <div class="form-group">
                <label for="Performer">Band or Artist: </label>
                <input type="text" id="Performer" class="form-control">
            </div>
            <div class="form-group">
                <label for="Date">Date of Event: </label>
                <input type="text" id="Date" class="form-control">
            </div>
            <div class="form-group">
                <label for="Time">Time of Event: </label>
                <input type="text" id="Time" class="form-control">
            </div>
            <div class="form-group">
                <label>Event Status: </label>
                <select name="Status" class="form-control">
                    <option value="Approved">Approved</option>
                    <option value="Advertised">Advertised</option>
                    <option value="SoldOut">Sold Out</option>
                    <option value="Cancelled">Cancelled</option>
                    <option value="Completed">Completed</option>
                </select>
            </div>
            <div class="form-group">
                <label for="Capacity">Event Seating Capacity: </label>
                <input type="text" id="Capacity" class="form-control">
            </div>
            <div class="form-group">
                <label for="Manager">Event Manager: </label>
                <input type="text" id="Manager" class="form-control">
            </div>
            <div class="form-group">
                <label for="Notes">Notes: </label>
                <input type="text" id="Notes" class="form-control">
            </div>
            <div class="form-group">
                <label for="Street">Street Address: </label>
                <input type="text" id="Street" class="form-control">
            </div>
            <div class="form-group">
                <label for="City">City: </label>
                <input type="text" id="City" class="form-control">
            </div>
            <div class="form-group">
                <label for="State">State: </label>
                <input type="text" id="State" class="form-control">
            </div>
            <div class="form-group">
                <label for="Zip">Zip Code: </label>
                <input type="text" id="Zip" class="form-control">
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

