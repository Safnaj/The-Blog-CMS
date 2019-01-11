<?php require_once("database/DBConnection.php"); ?>
<?php require_once ("Sessions.php"); ?>
<?php require_once ("Functions.php"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard</title>
    <link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
    <script src="bootstrap/js/jquery-3.3.1.min.js"></script>
    <script src="bootstrap/js/bootstrap.js"></script>
    <link href="http://netdna.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/AdminStyle.css">
</head>
<body>
<div class="container-fluid">
    <div class="row">

        <!--Sidebar-->
        <div class="col-sm-2">
            <h2>Admin Panel</h2>
            <ul id="Side_Menu" class="nav nav-pills flex-column">
                <li class="nav-item">
                    <a class="nav-link" href="Dashboard.php">
                        <span class="glyphicon glyphicon-home"></span>&nbspDashboard</a></i>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="NewPost.php">
                        <span class="glyphicon glyphicon-file"></span>&nbspNew Post</a></i>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" href="Posts.php">
                        <span class="glyphicon glyphicon-book"></span>&nbspPosts</a></i>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Categories.php">
                        <span class="glyphicon glyphicon-th-list"></span>&nbspCategories</a></i>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="glyphicon glyphicon-user"></span>&nbspManage Admins</a></i>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="glyphicon glyphicon-comment"></span>&nbspComments</a></i>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="Blog.php" target="_blank">
                        <span class="glyphicon glyphicon-equalizer"></span>&nbspView Site</a></i>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">
                        <span class="glyphicon glyphicon-off"></span>&nbspLogout</a></i>
                </li>
            </ul>
        </div>
        <!--Sidebar-->

        <div class="col-sm-10">
            <h2>Posts</h2>
            <div class="table-responsive">
                <table class="table table-striped table-hover">
                    <tr>
                        <th>No</th>
                        <th>Title</th>
                        <th>Date&Time</th>
                        <th>Category</th>
                        <th>Author</th>
                        <th>Banner</th>
                        <th>Comments</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        global $DBConnect;
                        $ViewQuery = "SELECT * FROM posts ORDER BY datetime desc";
                        $Execute = mysqli_query($DBConnect,$ViewQuery);
                        $SrNo=0;
                        while($DataRows=mysqli_fetch_array($Execute)) {
                            $PostID = $DataRows["id"];
                            $DateTime = $DataRows["datetime"];
                            $Title = $DataRows["title"];
                            $Category = $DataRows["category"];
                            $Author = $DataRows["author"];
                            $Image = $DataRows["image"];
                            $Post = $DataRows["post"];
                            $SrNo++;
                            ?>
                            <tr>
                                <td><?php echo $SrNo; ?></td>
                                <td><?php echo $Title; ?></td>
                                <td><?php echo $DateTime; ?></td>
                                <td><?php echo $Category; ?></td>
                                <td><?php echo $Author; ?></td>
                                <td><img src="uploads/<?php echo $Image;?>" width="40px" height="25px"></td>
                                <td>Processing</td>
                                <td>Edit & Delete</td>
                            </tr>
                            <?php
                        } ?>
                </table>

            </div>
        </div>
    </div>
    <!--Footer-->
    <div id="Footer">
        <p>Developed By Ahamed Safnaj | &copy2019 -- All Right Reserved</p>
    </div>
    <!--Footer-->
</div>
</body>
</html>
