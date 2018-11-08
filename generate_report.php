<?php include 'header.php'; ?>



<section>
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <h1>Generate Summary Report</h1>
                    </div>
                </div>
            </div>
        </section>

        <section>
            <div class="container">
                <form method="post" action="">
                    <div class="row">
                        <div class="col-6">
                                <div class="form-group">
                                    <label for="date">Filter by Date Range</label>
                                    <input type="text" name="date" class="form-control" id="datepicker" >
                                </div>
                        </div>
                        <div class="col-6">
                                <div class="form-group">
                                    <label for="date2">Date Range</label>
                                    <input type="text" name="date2" class="form-control" id="datepicker2" >
                                </div>      
                                </div>
                        </div>
                    </div>
                </form>
            </div>
        </section>

        <section>
            <div class="container">
                    <div class="row">
                        <div class="col-12">
                            <h2>Submit Form & Generate Report</h2>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <button type="cancel" class="btn btn-danger" style="width: 100%;">Cancel</button>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <button type="create" class="btn btn-success" style="width: 100%;">Create</button>
                            </div>
                        </div>
                        <div class="col-xl-3 col-lg-3 col-md-3 col-sm-12">
                            <div class="form-group">
                                <a href="javascript:window.print()" class="btn btn-secondary" style="width: 100%;">Print <i class="fa fa-print"></i></a>
                            </div>
                        </div>
                    </div>
            </div>
        </section>









    <script src="http://code.jquery.com/jquery-3.2.1.min.js"
        integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>

<script>
        $( function() {
            $( "#datepicker" ).datepicker();
            $( "#datepicker2" ).datepicker();
        } );
    </script>

  </body>
</html>
