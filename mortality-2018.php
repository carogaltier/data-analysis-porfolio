<!DOCTYPE html>
<html lang="en">
<?php $title = "Mortality data in Argentina in 2018"; ?>
<?php  require_once("head.php");?>

<body class="bg-light">
    <?php  require_once("header.php");?>


    <div class="container p-4">
        <h2 class="h1 py-4"><strong>Mortality data in Argentina 2018</strong></h2>
        
        <hr>
        <div class="row py-4">
            <h3 class="code-line py-2">Deaths by Province in Argentina in 2018</h3>
            <p>Considering all the provinces/jurisdictions, in 2018 in Argentina there is a total population of 44,49 M people according to the 
            <a href="https://data.worldbank.org/indicator/SP.POP.TOTL?locations=AR">World Bank</a>. 
            Considering all the provinces/jurisdictions, the total amount of deaths is <b>333.4 K</b>. The following plot and table show how the number of deaths is distributed geographically.</p> 

            <div class="col py-4">
                <table id="regionTable18" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead><tr><th title="province">Province</th>
                    <th title="Field #2">Deaths</th>
                    </tr></thead>
                    <tbody><tr>
                    <td>Buenos Aires</td>
                    <td align="right">133981</td>
                    </tr>
                    <tr>
                    <td>CABA</td>
                    <td align="right">29707</td>
                    </tr>
                    <tr>
                    <td>Catamarca</td>
                    <td align="right">2665</td>
                    </tr>
                    <tr>
                    <td>Chaco</td>
                    <td align="right">8106</td>
                    </tr>
                    <tr>
                    <td>Chubut</td>
                    <td align="right">3353</td>
                    </tr>
                    <tr>
                    <td>Córdoba</td>
                    <td align="right">29753</td>
                    </tr>
                    <tr>
                    <td>Corrientes</td>
                    <td align="right">7250</td>
                    </tr>
                    <tr>
                    <td>Entre Ríos</td>
                    <td align="right">10743</td>
                    </tr>
                    <tr>
                    <td>Formosa</td>
                    <td align="right">3896</td>
                    </tr>
                    <tr>
                    <td>Jujuy</td>
                    <td align="right">4498</td>
                    </tr>
                    <tr>
                    <td>La Pampa</td>
                    <td align="right">2488</td>
                    </tr>
                    <tr>
                    <td>La Rioja</td>
                    <td align="right">2331</td>
                    </tr>
                    <tr>
                    <td>Mendoza</td>
                    <td align="right">13968</td>
                    </tr>
                    <tr>
                    <td>Misiones</td>
                    <td align="right">7180</td>
                    </tr>
                    <tr>
                    <td>Neuquén</td>
                    <td align="right">3287</td>
                    </tr>
                    <tr>
                    <td>Río Negro</td>
                    <td align="right">4586</td>
                    </tr>
                    <tr>
                    <td>Salta</td>
                    <td align="right">8174</td>
                    </tr>
                    <tr>
                    <td>San Juan</td>
                    <td align="right">5245</td>
                    </tr>
                    <tr>
                    <td>San Luis</td>
                    <td align="right">3331</td>
                    </tr>
                    <tr>
                    <td>Santa Cruz</td>
                    <td align="right">1641</td>
                    </tr>
                    <tr>
                    <td>Santa Fe</td>
                    <td align="right">29381</td>
                    </tr>
                    <tr>
                    <td>Santiago del Estero</td>
                    <td align="right">6163</td>
                    </tr>
                    <tr>
                    <td>Tierra del Fuego</td>
                    <td align="right">603</td>
                    </tr>
                    <tr>
                    <td>Tucumán</td>
                    <td align="right">11095</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col py-4">
                <img class="img-fluid" src="img/region-line-chart-18.svg" alt="">
            </div>
        </div>

        <hr>
        <div class="row py-4">
            <h3 class="code-line py-2">Deaths by Sex in Argentina in 2018</h3>
            <p>The following pie chart and table show that the amount of male deaths is slightly higher <b>(3.4%)</b> than the number of female deaths.</p> 
            
            <div class="col py-4">
                <table class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead><tr>
                        <th title="sex">Sex</th>
                        <th title="deaths">Deaths</th>
                    </tr></thead>
                    <tbody><tr>
                        <tr>
                        <td>Female</td>
                        <td align="right">161202</td>
                        </tr>
                        <tr>
                        <td>Male</td>
                        <td align="right">172223</td>
                        </tr>
                        <td><b>Total</b></td> 
                        <td align="right"> <b>333425</b> </td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col py-4">
                <img class="img-fluid pie" src="img/sex-pie-chart-18.svg" alt="">
            </div>
            
        </div>

        <hr>
        <div class="row py-4">
            <h3 class="code-line py-2">Deaths by Age Group in Argentina in 2018</h3>
            <p>In general, the younger the age group, the lower the amount of deaths 
                (except when the youngest group is considered, due to relatively high mortality rates at early ages). 
                The following bar chart and table show the distribution of deaths in the different age groups.</p> 

            <div class="col py-4">
                <table id="ageGroupTable18" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead><tr><th title="AgeGroup">Age Group</th>
                    <th title="Deaths">Deaths</th>
                    </tr></thead>
                    <tbody><tr>
                        <td>0-1</td>
                        <td align="right">6022</td>
                        </tr>
                        <tr>
                        <td>1-9</td>
                        <td align="right">1795</td>
                        </tr>
                        <tr>
                        <td>10-14</td>
                        <td align="right">716</td>
                        </tr>
                        <tr>
                        <td>15-19</td>
                        <td align="right">2420</td>
                        </tr>
                        <tr>
                        <td>20-24</td>
                        <td align="right">3472</td>
                        </tr>
                        <tr>
                        <td>25-29</td>
                        <td align="right">3340</td>
                        </tr>
                        <tr>
                        <td>30-34</td>
                        <td align="right">3563</td>
                        </tr>
                        <tr>
                        <td>35-39</td>
                        <td align="right">4656</td>
                        </tr>
                        <tr>
                        <td>40-44</td>
                        <td align="right">5852</td>
                        </tr>
                        <tr>
                        <td>45-49</td>
                        <td align="right">7626</td>
                        </tr>
                        <tr>
                        <td>50-54</td>
                        <td align="right">10818</td>
                        </tr>
                        <tr>
                        <td>55-59</td>
                        <td align="right">15862</td>
                        </tr>
                        <tr>
                        <td>60-64</td>
                        <td align="right">23435</td>
                        </tr>
                        <tr>
                        <td>65-69</td>
                         <td align="right">31410</td>
                        </tr>
                        <tr>
                        <td>70-74</td>
                        <td align="right">37596</td>
                        </tr>
                        <tr>
                        <td>75-79</td>
                        <td align="right">41001</td>
                        </tr>
                        <tr>
                        <td>80+</td>
                        <td align="right">133841</td>
                        </tr>
                    </tbody>
                </table>
            </div>

            <div class="col py-4">
                <img class="img-fluid" src="img/age-group-line-chart-18.svg" alt="">
            </div>

        </div>

        <hr>
        <div class="row py-4">
            <h3 class="code-line py-2">Deaths by Cause in Argentina in 2018</h3>
             <p>The bar chart and table below show the amount of deaths per cause. The cause with the highest amount is <b>'Cardiovascular Diseases'</b>.</p>           
            <div class="col py-4">
                <table id="groupCausesTable18" class="table table-striped table-bordered" cellspacing="0" width="100%">
                    <thead><tr>
                    <th title="cause">Cause</th>
                    <th title="total">Deaths</th>
                    </tr></thead>
                    <tbody><tr>
                    <td>Cardiovascular Diseases</td>
                    <td align="right">94917</td>
                    </tr>
                    <tr>
                    <td>Digestive Diseases</td>
                    <td align="right">15637</td>
                    </tr>
                    <tr>
                    <td>External Causes</td>
                    <td align="right">17875</td>
                    </tr>
                    <tr>
                    <td>Infectious Diseases</td>
                    <td align="right">13765</td>
                    </tr>
                    <tr>
                    <td>Metabolic Diseases</td>
                    <td align="right">12379</td>
                    </tr>
                    <tr>
                    <td>Other Causes</td>
                    <td align="right">54375</td>
                    </tr>
                    <tr>
                    <td>Respiratory Diseases</td>
                    <td align="right">61026</td>
                    </tr>
                    <tr>
                    <td>Tumors</td>
                    <td align="right">63451</td>
                    </tr>
                    </tbody>
                </table>
            </div>

            <div class="col py-4">
                <img class="img-fluid" src="img/group-of-causes-line-chart-18.svg" alt="">
            </div>

        </div>
        
    </div>

    <?php  require_once("footer.php");?>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.js"></script>
    <script type="text/javascript" src="js/index.js"></script>
</body>
</html>