<?php include "inc/header.php" ?>
    <div class="main_content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">User Login</h3>
                        </div>
                        <div class="panel-body" style="padding: 50px 0">
                            <div class="col-md-6 col-md-offset-3">
                                <form>
                                    <div class="form-group">
                                        <label for="email">Email address</label>
                                        <input type="email" class="form-control" id="emial" placeholder="Email">
                                    </div>
                                    <div class="form-group">
                                        <label for="password">Password</label>
                                        <input type="password" class="form-control" id="password" placeholder="Password">
                                    </div>
                                    <button type="submit" class="btn btn-success">Login</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php include "inc/footer.php" ?>