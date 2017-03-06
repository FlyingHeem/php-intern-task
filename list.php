<?php


include 'vendor/autoload.php';
$users = (new Classes\User())->getAll();

?>

<html>
<head>
    <title>User Crud</title>
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
                        <h1>PHP I.T.</h1>
                    </a>
                </div>
                <div class="col-xs-2">
                     <a href="index.php" class="pull-right btn btn-pit-style">
                        Add User
                    </a>

                </div>
            </div>

        </div>
    </div>

    <div class="container-fluid" id="pit-contents">
        <div class="container">
            <div class="row">
                <h1 style="color: #ffffff;" class="text-center">Users List</h1>
                <table class="table" id="list-user-table">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                    <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?php echo $user->getFirstName(); ?></td>
                            <td><?php echo $user->getLastName(); ?></td>
                            <td><?php echo $user->getEmail(); ?></td>
                            <td>
                                <a href="edit.php?user=<?php echo $user->getId(); ?>" class="btn btn-primary">
                                    <span class="glyphicon glyphicon-edit" aria-hidden="true"></span> Edit
                                </a>
                                <a href="javascript:delete_user_popup(<?php echo $user->getId(); ?>);" class="btn btn-danger">
                                    <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete
                                </a>
                            </td>
                        </tr>
                    <?php endforeach; ?>
                </table>
            </div>


            <div class="modal fade" id="delete-user-modal" role="dialog">
                <div class="modal-dialog modal-sm">
                  <div class="modal-content">
                    <div class="modal-header">
                      <button type="button" class="close" data-dismiss="modal">&times;</button>
                      <h4 class="modal-title">Delete User?</h4>
                    </div>
                    <div class="modal-body">
                      <p>Are you sure you want to delete the delected user?</p>
                      <p class="text-danger">Note: Once deleted the action cannot be reverted!</p>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                      <a type="button" href="javascript: delete_user();" class="btn btn-danger">
                        <span class="glyphicon glyphicon-trash" aria-hidden="true"></span> Delete Anyway
                    </a>
                    </div>
                  </div>
                </div>
            </div>


        </div>
    </div>

    <!--js imports-->
    <script src="js/jquery.min.js" type="text/javascript"></script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
    <script src="js/scripts.js" type="text/javascript"></script>
</body>
</html>
