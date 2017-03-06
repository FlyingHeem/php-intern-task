<html>
<head>
    <title>User Crud</title>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link rel="stylesheet" href="css/styles.css">
    <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
</head>
<body>

    <div class="container-fluid" id="pit-custom-nav">
    <!--header here-->
        <div class="container">
            <div class="row">
                <div class="col-xs-10">
                    <a href="index.php" id="pit-logo" class="pull-left">
                        <h1>PHP Intern Task</h1>
                    </a>
                </div>
                <div class="col-xs-2">
                     <a href="list.php" class="pull-right btn btn-pit-style">
                        List Users
                    </a>

                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid" id="pit-contents">
        <!--page contents-->
        <div class="container">
            <div class="row">
                <form action="add.php" class="form col-lg-6 col-lg-offset-3 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 col-xs-12 col-xs-offset-0" role="form" method="post" id="pit-add-user-form">
                    <legend class="text-center">Add User</legend>
                    <div class="form-group">
                        <label for="email">Email *</label>
                        <input type="email" class="form-control" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="first_name">First Name *</label>
                        <input type="text" class="form-control" id="first_name" name="first_name" min-length="3" required>
                    </div>
                    <div class="form-group">
                        <label for="last_name">Last Name</label>
                        <input type="text" class="form-control" id="last_name" name="last_name">
                    </div>
                    <div class="form-group">
                        <button class="btn btn-success">Save</button> 
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!--js imports-->
    <script src="js/jquery.js" type="text/javascript"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>
