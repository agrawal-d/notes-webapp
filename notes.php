<?php include 'check_session.php' ?>
<?php
include 'mysql_values.php';
if(isset($_POST["title"])){
    $title = $conn->real_escape_string(htmlspecialchars($_POST['title']));
    $note = $conn->real_escape_string(htmlspecialchars($_POST['note']));
    $email = $_SESSION['email'];
    $date = $_POST['date'];
    $id = $_POST['ID'];

    $tag = htmlspecialchars($_POST['tag']);
    $color = $_POST["color"];
    $sql = "UPDATE `notes` SET `note` = '$note', `tag` = '$tag', `color` = '$color', `title` = '$title', `email` = '$email' WHERE `notes`.`id` = $id;";
    if($result = mysqli_query($conn, $sql)){
        $_GET["message"] = "New note created successfully!";
    }else{
        $_GET['message'] = "Could not save your note, $result";
    }
}

if(isset($_POST["new-title"])){
    $title = $conn->real_escape_string(htmlspecialchars($_POST['new-title']));
    $note = $conn->real_escape_string(htmlspecialchars($_POST['note']));
    $email = $_SESSION['email'];
    $date = $_POST['date'];
    $tag = htmlspecialchars($_POST['tag']);
    $color = $_POST["color"];
    $sql = "INSERT INTO `notes` (`id`, `note`, `date`, `tag`, `color`, `title`, `email`) VALUES (NULL, '$note', '$date', '$tag', '$color', '$title', '$email');";
    if($result = mysqli_query($conn, $sql)){
    }else{
        die("Could not save your note, $result");
    }
}
?>

<!doctype html>
<html lang="en">

<head>
    <title>Notes | hereisdx@gmail.com</title>
    <?php include 'header.php'; ?>
        <link rel="stylesheet" type="text/css" href="css/main.css">
</head>

<body>

    <?php include 'modal.php'; ?>
        <?php include 'navbar.php'; ?>
            <main role="main" class="container">



                <div class="starter-template">
                    <div class="row">
                        <div class="col-lg-6">
                            <h1>Your Notes</h1></div>
                        <div class="col-lg-6"><h5 class="float-right">
                            <img src="img/user.jpg" align="middle" class="user-circle"><?php echo $_SESSION["fname"]." ".$_SESSION["lname"]; ?></h5>
                            <div class="clearfix"></div>
                        </div>
                    </div>

<?php
if(isset($_GET['message'])){

$message=$_GET['message'];
echo<<<EOL
                    <div class="row">
                        <div class="col-lg-12">
                        <div class="alert alert-warning alert-dismissible fade show" role="alert">
  <strong><i class="fa fa-info-circle"></i>Message</strong> $message
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
                    </div>
                        </div>
EOL;
                    }
?>

                    <br>
                    <br>
                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <form method="POST" action="notes.php">
                                    <h5 class="card-title"><span class="fa-pen fa"></span>&nbsp;New Note</h5>
                                    <input class="form-control new-title" name="new-title" placeholder="Title of your new note"></input>
                                    <input type="text" hidden name="date" value="<?php echo date("o")."-".date("m")."-".date("d"); ?>">
                                    <input type="text" hidden name="email" value="<?php echo $_SESSION['email']?>">
                                    <textarea class="card-text new-note" name="note" placeholder="Start typing your new note here"></textarea>
                                    <button href="#" class="btn btn-primary" type="submit"><span class="fa-save fa " ></span>Save</button> &nbsp;

                                    <select class="custom-select" name="color" style="width: auto;">
                                        <option selected value="White">White</option>
                                        <option value="Yellow">Yellow</option>
                                        <option value="Pink">Pink</option>
                                        <option value="Green">Green</option>
                                    </select>
                                    <input type="text" style="width:80px;" name="tag" class="new-tag float-right" placeholder="Tag">
                                    <div class="clearfix"></div>
</form>
                                </div>
                            </div>

                        </div><!--
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title show-modal" data-uri="demo.txt" >Incognito Browsing</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiulgod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                    <a href="#" class="btn" View & Edit </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Math F111</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiulgod telorem Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiulgod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.mpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                    <a href="#" class="btn">View & Edit </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Math F111</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiulgod telorem Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiulgod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.mpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                    <a href="#" class="btn">View & Edit </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>-->
<?php

$email = $_SESSION['email'];
$sql = "SELECT * FROM `notes` WHERE `email` = '$email'";
$result = mysqli_query($conn, $sql);
if (mysqli_num_rows($result) > 0) {
    $count=1;
while ($row = mysqli_fetch_assoc($result)) {
    $count++;
    $note = $row["note"];
    $date=$row["date"];
    $color = $row['color'];
    $tag = $row['tag'];
    $title = $row["title"];
    $id = $row["id"];
echo<<<EOL

                        <div class="col-lg">
                            <div class="card n-$color">
                                <div class="card-body">
                                    <h5 class="card-title text-inline" style="display:inline;">$title</h5>&nbsp;     on $date
                                    <p class="card-text">
                                    $note
                                    </p>
                                    <a href="#" class="btn show-modal" data-title="View and Edit Note" data-uri="edit-note.php?id=$id">View & Edit </a>&nbsp;

<span class="badge badge-secondary float-right">$tag</span>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>                                    


EOL;

if($count%3==0){
echo '</div>  <div class="row">';
}                        
}
}
?>
<!--
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Math F111</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiulgod telorem Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiulgod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.mpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                    <a href="#" class="btn">View & Edit </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Math F111</h5>
                                    <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiulgod telorem Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiulgod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.mpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                    <a href="#" class="btn">View & Edit </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="card">
                                <div class="card-body">
                                    <h5 class="card-title">Math F111</h5>
                                    <p class="card-text demo">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiulgod telorem Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiulgod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.mpor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud </p>
                                    <a href="#" class="btn ajx">View & Edit </a>
                                    <div class="clearfix"></div>
                                </div>
                            </div>

                        </div>
                    </div>

                -->

                </div>

                </div>

            </main>
            <div class="container footer-main">
                <!-- Content here -->
                <div class="row">
                    <div class="col-lg"><img src="img/logo.png" class="footer-logo" width=128 height=128 alt="Logo">
                        <h3>Notes</h3>
                        <p>Notes is an open-source cross platform note-taking app that is available for web and the android platform. Made with <span class="fa fa-heart"></span>by Divyanshu Agrawal.</p>
                    </div>
                    <div class="col-lg footer-links">
                        <h3>Links</h3>
                        <a href="#">Homepage</a>
                        <a href="#">My Notes</a>
                        <a href="#">Login</a>
                        <a href="#">Help Center</a>
                        <a href="#">About</a>
                        <a href="#">Github</a>
                        <a href="#">Contribute</a>
                        <a href="#">Feedback</a>
                        <p>Notes is looking for passionate people to help make it even better. Head to github to start contributing.</p>
                    </div>
                </div>

            </div>
            </div>


                <?php include 'footer-scripts.php'; ?>
            
</body>

</html>