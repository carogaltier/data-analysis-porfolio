<!DOCTYPE html>
<html lang="en">
<?php $title = "Data Analysis in R"; ?>
<?php  require_once("head.php");?>

<body class="bg-light">
    <?php  require_once("header.php");?>
    
    <div class="container p-4">
        
        <h2 class="h1 py-4"><strong>Mortality data in Argentina (2017 - 2019)</strong></h2>
        <h3 class="code-line pt-3">Description</h3>
        <p class="text-justify">In this website you could find information about mortality in Argentina from 2017 to 2019 inclusive. 
            The variables analyzed were Causes, Age, Sex and Province.
            In the "About data" section it's described the data collection, the data cleaning and the data analysis process. 
            You may also find the data soruce information.  
        </p>
        <div class="container-fluid py-3">
            <div class="row">             

                    <a class="col m-2 nav-link" href="mortality-2019.php">
                        <div class="card bg-1">
                            <img class="card-img-top opacity-50" src="img/bg-1.jpg" alt="Digital global connection">
                            <div class="card-block">
                                <h4 class="card-title p-2 text-center text-white">Mortality data in 2019</h4>
                            </div>
                        </div> 
                    </a>

                    <a class="col m-2 nav-link" href="mortality-2018.php">
                        <div class="card bg-2">
                            <img class="card-img-top opacity-50" src="img/bg-2.jpg" alt="Digital global connection">
                            <div class="card-block">
                                <h4 class="card-title p-2 text-center text-white">Mortality data in 2018</h4>
                            </div>
                        </div> 
                    </a>

                    <a class="col m-2 nav-link" href="mortality-2017.php">
                        <div class="card bg-3">
                            <img class="card-img-top opacity-50" src="img/bg-3.jpg" alt="Digital global connection">
                            <div class="card-block">
                                <h4 class="card-title p-2 text-center text-white">Mortality data in 2017</h4>
                            </div>
                        </div> 
                    </a>  

                    <a class="col m-2 nav-link" href="about-data.php">
                        <div class="card bg-4">
                            <img class="card-img-top opacity-50" src="img/bg-4.jpg" alt="Digital global connection">
                            <div class="card-block">
                                <h4 class="card-title p-2 text-center text-white">About data</h4>
                            </div>
                        </div> 
                    </a>               
            </div>
        </div>

    </div>
    <?php  require_once("footer.php");?>
</body>
</html>
