<?php
//error_reporting(0);
// php database connection
require '../db/config.php';
$sql = "SELECT * FROM project ORDER BY id DESC";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/admin.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans">
    <link rel="stylesheet" type="text/css" href="your_website_domain/css_root/flaticon.css">
    <script src="https://kit.fontawesome.com/24bb2596e9.js" crossorigin="anonymous"></script>
    <title>User Dashboard</title>
</head>

<body>
    <!-- navbar -->
    <nav class="navbar navbar-expand-xl navbar-dark bg-dark sticky-top">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Sudev Portfolio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo2" aria-controls="navbarTogglerDemo2" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse show" id="navbarTogglerDemo2">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item">
                        <!-- <a class="nav-link active" aria-current="page" href="#">Home</a> -->
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link" href="#">Link</a> -->
                    </li>
                    <li class="nav-item">
                        <!-- <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a> -->
                    </li>
                </ul>
                <div class="d-flex ">
                    <div class="user text-light text-center">
                        <h5 class="mt-2 px-3"> <img src="" alt="" class="bg-danger rounded-circle"><i class="fa-solid fa-user-astronaut"></i>&nbsp; sudev majhi </h5>
                    </div>
                    <button class="btn btn-success" type="submit">logout</button>
                </div>
            </div>
        </div>
    </nav>
    <!-- navbar end -->




    <section class="m-2 ">
        <div class="d-flex align-items-start ">

            <!-- vertical navbar -->
            <div class="nav flex-column nav-pills me-2 border vertical-tab p-2 bg-light sticky" id="v-pills-tab" role="tablist" aria-orientation="vertical">
                <a class="nav-link active" id="v-pills-home-tab" data-bs-toggle="pill" href="#v-pills-home" role="tab" aria-controls="v-pills-home" aria-selected="true">Dashboard</a>
                <a class="nav-link" id="v-pills-profile-tab" data-bs-toggle="pill" href="#v-pills-profile" role="tab" aria-controls="v-pills-profile" aria-selected="false">Profile</a>
                <a class="nav-link" id="v-pills-project-tab" data-bs-toggle="pill" href="#v-pills-projects" role="tab" aria-controls="v-pills-projects" aria-selected="false">Projects</a>
            </div>
            <!-- vertical navbar end -->


            <!-- content box -->
            <div class="tab-content border p-2 bg-light" id="v-pills-tabContent">

                <!-- dashboard content -->
                <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">

                    <nav class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" href="#nav-home" role="tab" aria-controls="nav-home" aria-selected="true">dashboard 1</a>
                        <a class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" href="#nav-profile" role="tab" aria-controls="nav-profile" aria-selected="false">dashboard 2</a>

                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">HOME content</div>
                        <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
                            PROFILE content</div>
                        <div class="tab-pane fade" id="nav-disabled" role="tabpanel" aria-labelledby="nav-disabled-tab">
                        </div>
                    </div>
                    <!-- dashboard content end -->
                </div>

                <!-- profile content -->
                <div class="tab-pane fade" id="v-pills-profile" role="tabpanel" aria-labelledby="v-pills-profile-tab">
                    HI I'M SUDEV</div>
                <!-- profile content end -->

                <!-- project content -->
                <div class="tab-pane fade" id="v-pills-projects" role="tabpanel" aria-labelledby="v-pills-projects-tab">

                    <!-- project nav -->
                    <nav class="nav nav-tabs" id="nav-tab" role="tablist">
                        <a class="nav-link active" id="nav-project-tab" data-bs-toggle="tab" href="#nav-project" role="tab" aria-controls="nav-project" aria-selected="true">Projects</a>
                        <a class="nav-link" id="nav-add-project-tab" data-bs-toggle="tab" href="#nav-add-project" role="tab" aria-controls="nav-add-project" aria-selected="false">Add project</a>
                    </nav>

                    <div class="tab-content" id="nav-tabContent">
                        <div class="tab-pane fade show active" id="nav-project" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="content-title">
                                <h5>Projects</h5>
                            </div>

                            <!-- project list -->
                            <div class="d-flex flex-wrap border project-list-container">
                                <div class="p-2">box</div>
                                <div class="p-2">box</div>
                                <div class="p-2">box</div>
                                <div class="p-2">box</div>
                                <div class="p-2">box</div>
                                <div class="p-2">box</div>
                            </div>

                            <!-- table data -->
                            <div class="container-fluid">
                                <div class="table-responsive mt-3">
                                    <table class="table table-bordered">
                                        <thead style="background-color: #e3f2fd;">
                                            <tr>
                                                <th scope="col">ID</th>
                                                <th scope="col">Title</th>
                                                <th scope="col">Description</th>
                                                <th scope="col">Github</th>
                                                <th scope="col">Web</th>
                                                <th scope="col">Image</th>
                                                <th scope="col">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <!-- fetching data from database -->
                                            <?php
                                            if ($result != 0) {
                                            ?>
                                                <?php
                                                $i = 0;
                                                while ($record = mysqli_fetch_assoc($result)) {
                                                ?>
                                                    <tr>
                                                        <th scope="row"> <?php echo $record['id']; ?> </th>
                                                        <td> <?php echo $record['title']; ?> </td>
                                                        <td> <?php echo $record['descr']; ?> </td>
                                                        <td pattern=".{3, 10}"> <?php echo $record['git']; ?> </td>
                                                        <td> <?php echo $record['web']; ?> </td>
                                                        <td> <img src="<?php echo $record['image']; ?>" class="p-img" alt="img" width="150" height="90"> </td>
                                                        <td> <a href="edit_project.php? id=<?php echo $record['id']; ?> ">edit</a>
                                                            <a href="del_project.php? id=<?php echo $record['id']; ?> ">delete</a>
                                                        </td>
                                                    </tr>
                                            <?php
                                                    $i++;
                                                }
                                            } else {
                                                echo "<script> alert('No records found'); </script>";
                                            }
                                            ?>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <!-- table data end -->

                            <!-- project list end -->

                        </div>
                        <div class="tab-pane fade show" id="nav-add-project" role="tabpanel" aria-labelledby="nav-home-tab">
                            <div class="content-title">
                                <h5>Add project</h5>
                            </div>

                            <!-- add project from -->
                            <div class="add-project-form ">
                                <form class="border " method="POST" enctype="multipart/form-data" action="<?php htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                                    <div class="row mb-3">
                                        <label for="input" class="col-sm-2">Title</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="" required name="p-title">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="input" class="col-sm-2">Description</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="" required name="p-desc">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="input" class="col-sm-2">Github</label>
                                        <div class="col-sm-10">
                                            <input type="url" pattern="https://.*" class="form-control" id="" name="p-git">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="input" class="col-sm-2">Web</label>
                                        <div class="col-sm-10">
                                            <input type="url" pattern="https://.*" class="form-control" id="" name="p-web">
                                        </div>
                                    </div>
                                    <div class="row mb-3">
                                        <label for="file" class="col-sm-2 form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" class="form-control" id="file" required name="p-img">
                                        </div>
                                    </div>
                                    <div class="row mb-3 align-middle">
                                        <div class="col-sm-12 ">
                                            <input type="submit" class="btn btn-primary add-btn float-end" type="button" name="save" value="Add">
                                            <!-- <button class="btn btn-primary float-end" type="button" name="save" value="">Add</button> -->
                                        </div>
                                    </div>
                                </form>
                            </div>
                            <!-- add project end -->

                        </div>

                    </div>
                </div>
            </div>
            <!-- content box end -->

        </div>
    </section>
    <!-- vertical nav end -->







    <script src="js/sudev.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>

</html>
<?php

if (isset($_POST['save'])) {

    $title = $_POST['p-title'];
    $desc = $_POST['p-desc'];
    $git = $_POST['p-git'];
    $web = $_POST['p-web'];

    // file
    $file_name = $_FILES['p-img']['name'];
    $file_temp = $_FILES['p-img']['tmp_name'];
    $file_type = $_FILES['p-img']['type'];
    $folder = '../img_upload/' . $file_name;  // inserting image to folder
    move_uploaded_file($file_temp, $folder);

    // print_r($_FILES['p-img']) ;

    // echo $folder ;
    // echo "<img src='$folder' height='130px' width='160px' >";

    // img validation
    if ($file_type != "jpg" && $file_type != "png" && $file_type != "jpeg") {
        echo "<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.'); </script>";
        $uploadok = 0;
    }

    // query for submit form data to the database table
    $sql = " INSERT INTO project (title, descr, git, web, image) 
    VALUES('$title', '$desc', '$git', '$web', '$folder')";

    // execute query
    $data = mysqli_query($conn, $sql);

    // check execution
    if ($data) {
        echo "<script> alert(' record added successfully '); </script>";
        // header("Location: index.php");
    } else {
        echo "<script> alert(' Record could not added '); </script>";
    }
    // close connction
    mysqli_close($conn);
}

?>