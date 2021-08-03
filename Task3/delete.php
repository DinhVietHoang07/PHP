<?php
if (isset($_POST["id"])&& !empty($_POST["id"])){
    require_once 'config.php';
    $sql = "DELETE FROM books WHERE id=?";


    if ($stmt = mysqli_prepare($link, $sql)){
        mysqli_stmt_bind_param($stmt, "i", $param_id);

        $param_id = trim($_POST["id"]);

        if (mysqli_stmt_execute($stmt)){
            header("location: index.php");
            exit();
        }else{
            echo "Oops! Something went wrong. Pleas try again later.";
        }
    }
    mysqli_stmt_close($stmt);
    mysqli_close($link);
}else{
    if (empty(trim($_GET["id"]))){
        header("location: index.php");
        exit();
    }
}
?>
<!DOCTYPe html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Delete Record</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css">
    <style type="text/css ">
        .wrappers{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
<div class="wrappers">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="page-header">
                    <h1>Delete Record</h1>
                </div>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
                    <div class="alert alert-danger fade in">
                        <input type="hidden" name="id" value="<?php echo trim($_GET["id"]); ?>"/>
                        <p>Are you sure you want to delete this record?</p>
                        <p>
                            <input type="submit" value="yes" class="btn btn-danger">
                            <a href="index.php" class="btn btn-daault">No</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
</body>
</html>