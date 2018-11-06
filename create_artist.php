<?php include 'header.php'; ?>
 

    






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
                <input type="text" class="form-control" id="Fname">
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
                <label>Gender: </label>
                <select name="Gender" class="form-control">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                    <option value="Other">Choose not to Answer</option>
                </select>
            </div>
             <div class="form-group">
                <label for="Email">Email Address: </label>
                <input type="email" id="Email" class="form-control">
            </div>
            <div class="form-group">
                <label for="PhoneNumber">Phone Number: </label>
                <input type="text" id="PhoneNumber" class="form-control">
            </div>
            <div class="form-group">
                <label for="ConcertRate">Rate per Event: </label>
                <input type="text" id="ConcertRate" class="form-control">
            </div>
            <div class="form-group">
                <label for="ArtistStreet">Street Address: </label>
                <input type="text" id="ArtistStreet" class="form-control">
            </div>
            <div class="form-group">
                <label for="ArtistCity">City: </label>
                <input type="text" id="ArtistCity" class="form-control">
            </div>
            <div class="form-group">
                <label for="ArtistState">State: </label>
                <input type="text" id="ArtistState" class="form-control">
            </div>
            <div class="form-group">
                <label for="ArtistZip">Zip Code: </label>
                <input type="text" id="ArtistZip" class="form-control">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">Create</button>
            <button type="submit" class="btn btn-danger">Cancel</button>
            </div>
        </form>
        </div>
    </div>
</div>
