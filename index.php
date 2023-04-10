<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="icon" type="image/x-icon" href="assets/img/formlogo.png">
    <style type="text/css">
        #hover-1{
            background-color: #002b7f;
            pointer-events: none;
            cursor: default;
        }
    </style>
    <meta charset="utf-8">
    <title>Research, Innovation & Extension Office - WVSU PC</title>
</head>

<body style="font-family: ABeeZee, sans-serif;">

<?php 
include 'partial/nav-bar.php';

?>

    <?php 
        include 'slider.php';
    ?>


    <section style="margin-bottom: 100px;">
        <div style="margin: 50px 0px;">

            <!-- Start: 2 Rows 1+2 Columns -->
            <div class="container">
                <div class="row text-center" style="color: rgb(0,0,0);">
                    <div class="col-md-12" style="padding: 20px;color: rgb(0,0,0);font-size: 16px;background: #efefef;">
                        <div>
                            <section>
                                <h3 class="d-xl-flex justify-content-xl-start" style="font-weight: bold;">News and Events</h3>
                                    <div class="d-xl-flex justify-content-xl-start align-items-xl-start">
                                         
                                            <p id="date"></p>
                                            <?php
                                            date_default_timezone_set('Asia/Manila'); 
                                            echo date('D, M j, Y | g:ia');?>
                                     </div>
                                <hr>
<?php 
    include 'php/dbconnect.php';
    $log = $conn->query("SELECT DISTINCT n_cover,n_title,act_n_date, n_content FROM news_events ORDER BY id DESC LIMIT 15"); 
    while($row=mysqli_fetch_array($log)){ 
?>

                                <div class="d-xl-flex justify-content-xl-start align-items-xl-start" style="text-align: left;">
                                    <div class="d-flex justify-content-center">
                                        <img width="100px" src="extension/news_cover_files/<?php echo $row['n_cover'];?>">
                                    </div>
                                    <div style="width: 100%;margin-left: 20px;">
                                        <p style="margin: 0px;">
<?php 

$datesu = $row['act_n_date'];
$date = new DateTime($datesu);
echo date_format($date, "d F Y ");

?>
                                        </p>
                                        <h4 style="margin: 0px;"><a href="news-events.php?title=<?php echo $row['n_title']; ?>" 
                                            style="color: rgb(0,0,0);">
<?php 
    echo $row['n_title'];
?>
                                            <br></a></h4>
                                        <p style="text-indent:50px;">
<?php 
    echo mb_strimwidth ($row['n_content'], 0, 300, "...");
?>
                                        </p>
                                        <hr>
                                        
                                    </div>
                                </div>
<?php 
    }
?>
                            </section>
                        </div>
                    </div>
                    



                </div>
            </div><!-- End: 2 Rows 1+2 Columns -->
        </div>
    </section>
<section>
    <div style="height: 500px;background: linear-gradient(rgba(0,0,0,0), #222222), url('assets/img/banner1.jpg') center / cover no-repeat;opacity: 1;">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="d-xl-flex justify-content-xl-center align-items-xl-center" style="margin: 30px 100px;">
                        <header>
                            <h1 style="color: #002b7f;text-shadow: 3px 3px 2px #ffffff;">Research, Innovation &amp; Extension Office</h1>
                        </header>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div style="background: #ffffff;padding: 20px;">
                        <h3 style="color: #002b7f;">Research, Innovation &amp; Development</h3><a class="btn btn-primary" role="button" style="border-style: none;border-radius: 0px;" href="research.php">Visit Page</a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div style="background: #ffffff;padding: 20px;">
                        <h3 style="color: #002b7f;">Extension &amp; Development</h3><a class="btn btn-primary" role="button" style="border-style: none;border-radius: 0px;" href="extension-activities.php">Visit Page</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

    <?php include 'partial/footer.php';?>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/assets/js/bs-init.js"></script>
</body>

</html>
