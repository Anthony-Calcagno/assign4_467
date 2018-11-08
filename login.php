<?php include 'header.php'; ?>


 <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Login</h1>
                        <hr>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <form method="post" action="dashboard.php">
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Enter username</label>
                            <input type="text" class="form-control" name="username">
                          </div>
                          <div class="form-group">
                            <label for="exampleFormControlInput1">Enter password</label>
                            <input type="password" class="form-control" name="password">
                          </div>
                          <div class="form-group">
                            <button type="submit" class="btn btn-primary">Login</button>
                          </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
















<?php include 'footer.php'; ?>
