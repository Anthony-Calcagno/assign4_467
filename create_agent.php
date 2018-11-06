<?php include 'header.php'; ?>

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
                <input type="text" id="Fname" class="form-control">
            </div>
            <div class="form-group">
                <label for="Minit">Middle Initial: </label>
                <input type="text" id="Minit" class="form-control">
            </div>
            <div class="form-group">
                <label for="Lname">Last Name: </label>
                <input type="text" id="Lname" class="form-control">
            </div>
            <div class="form-group">
                <label for="Email">Email Address: </label>
                <input type="email" id="Email" class="form-control">
            </div>
            <div class="form-group">
                <label for="OfficePhone">Office Phone Number: </label>
                <input type="text" id="OfficePhone" class="form-control">
            </div>
            <div class="form-group">
                <label for="CellPhone">Cell Phone Number: </label>
                <input type="text" id="CellPhone" class="form-control">
            </div>
            <div class="form-group">
                <label>Type: </label>
                <select name="Type" class="form-control" >
                    <option value="Artist">Artist</option>
                    <option value="Band">Band</option>
                    <option value="Other">Other</option>
                </select>
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
            



