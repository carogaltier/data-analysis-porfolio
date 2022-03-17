<!DOCTYPE html>
<html lang="en">
<?php $title = "Data Cleaning"; ?>
<?php  require_once("head.php");?>
<body>
    <?php  require_once("header.php");?>

    <div class="container p-4">
        
        <h2 class="h1 py-4"><strong>About data</strong></h2>
        <hr>
        <h3 class="code-line pt-3">Table of Contents</h3>
        <ol>
            <li><a href="#introduction">Introduction</a></li>
            <li><a href="#data-source">Data source</a></li>
            <li><a href="#libraries">Libraries</a></li>
            <li><a href="#data-cleaning">Data cleaning process</a></li>
        </ol>
        <hr>
        <h3 class="code-line pt-3"><a id="introduction"></a>1. Introduction</h3>
        <p>The following demographic analysis was done with R software as part of a portfolio.</p>
       
        <h3 class="code-line pt-3"><a id="data-source"></a>2. Data source</h3>
        <p>The data come from the <a href="https://www.argentina.gob.ar/salud/deis">Dirección de Estadísticas e Información de la Salud (DEIS)</a> an official source of healthcare data from Argentina.</p>
        
        <h3 class="code-line  pt-3"><a id="libraries"></a>3. Libraries</h3>
        <ul>
        <li>dplyr</li>
        <li>forcats</li>
        <li>stringr</li>
        <li>tidyr</li>
        <li>ggplot2</li>
        </ul>
      
        <h3 class="code-line pt-3"><a id="data-cleaning"></a>4. Data cleaning process</h3>
        <p>After importing the csv files, all the useless variables were removed. Also the name of the variables were changed in order to simplify the task.<br>
        Then then variables were converted as factor and recodified according to the data codification document provided by the source.<br>
        Causes of death were agreggate in 8 different group of cases (Infectious Diseases, Cardiovascular Diseases, Tumors,Respiratory Diseases, Digestive Diseases, Digestive Diseases, External Causes and Other Causes).<br>
        All unspecified and missing values were removes as well as the category “Other countries”.</p>
       
    </div>

    <?php  require_once("footer.php");?>

</body>
</html>











