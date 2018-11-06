<?php include 'header.php'; ?>

<div class="container">
    <div class="row">
        <div class="col-10">
            <h1>Create Vendor</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-10">
        <form action="" method="post">
            <div class="form-group">
                <label for="RepName">Representative's Name: </label>
                <input type="text" id="RepName" class="form-control">
            </div>
            <div class="form-group">
                <label for="RepPhone">Representative's Phone Number: </label>
                <input type="text" id="RepPhone" class="form-control">
            </div>
            <div class="form-group">
                <label for"RepEmail">Representative's Email: </label>
                <input type="email" id="RepEmail" class="form-control">
            </div>
            <div class="form-group">
                <label>Type: </label>
                <select name="Type" class="form-control">
                    <option value="ConcertHall">Concert Hall</option>
                    <option value="Equipment">Equipment</option>
                    <option value="Setup">Setup</option>
                    <option value="Lighting">Lighting</opiton>
                    <option value="Sound">Sound</option>
                    <option value="Cleanup">Cleanup</option>
                    <option value="Security">Security</option>
                    <option value="Foods">Foods</option>
                    <option value="Operating">Operating</option>
                    <option value="Advertisement">Advertisement</option>
                    <option value="Other">Other</option>
                </select>    
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

