<?php include "inc/header.php" ?>
    <div class="main_content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title clearfix">User Profile <span class="pull-right"><a href="index.php" class="btn btn-primary">Back</a></span></h3>
                        </div>
                        <div class="panel-body" style="padding: 50px 0">
                            <div class="col-md-6 col-md-offset-3">
                                <form>
                                    <div class="form-group">
                                        <label for="name">Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Name" value="Name">
                                    </div>
                                    <div class="form-group">
                                        <label for="name">Username</label>
                                        <input type="text" class="form-control" id="name" placeholder="Username" value="Username">
                                    </div>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email" value="Email">
                                    </div>
                                    <button type="submit" class="btn btn-success">Update</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "inc/footer.php" ?>