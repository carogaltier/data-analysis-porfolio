# Data analysis with R porfolio

## **Mortality data in Argentina (2017 - 2019)**

## Table of Contents
1. [Introduction](#introduction)
2. [Data source](#data-source)
3. [Libraries](#libraries)
4. [Data cleaning process](#data-cleaning-process)

## Introduction
The following data analysis was done with R software as part of a portfolio. You will find information, tables and charts about mortality in Argentina in the period 2017 to 2019 inclusive. The variables analyzed were Causes, Age, Sex and Province. 

## Data source
The data come from the [Dirección de Estadísticas e Información de la Salud (DEIS)](https://www.argentina.gob.ar/salud/deis) an official source of healthcare data from Argentina.

## Libraries
- dplyr
- forcats
- stringr
- tidyr
- ggplot2

## Data cleaning process
After importing the csv files, all the useless variables were removed. Also the name of the variables were changed in order to simplify the task.
Then then variables were converted as factor and recodified according to the data codification document provided by the source.
Causes of death wew agreggate in 8 different group of cases (Infectious Diseases, Cardiovascular Diseases, Tumors,Respiratory Diseases, Digestive Diseases, Digestive Diseases, External Causes and Other Causes).
All unspecified and missing values were removes as well as the category "Other countries".

## overview of the content
### Deaths by Province in Argentina in 2019
Considering all the provinces/jurisdictions, in 2019 in Argentina there is a total population of 44,94 M people according to the World Bank. Considering all the provinces/jurisdictions, the total amount of deaths is 337.4 K. The following plot and table show how the number of deaths is distributed geographically.

![Deaths by Province in Argentina in 2019](/img/region-line-chart-19.svg "Deaths by Province in Argentina in 2019")

### Deaths by Sex in Argentina in 2019
The following pie chart and table show that the amount of male deaths is slightly higher (2.2%) than the number of female deaths.

![Deaths by Sex in Argentina in 2019](/img/sex-pie-chart-19.svg "Deaths by Sex in Argentina in 2019")

### Deaths by Age Group in Argentina in 2019
In general, the younger the age group, the lower the amount of deaths (except when the youngest group is considered, due to relatively high mortality rates at early ages). The following bar chart and table show the distribution of deaths in the different age groups.

![Deaths by Age Group in Argentina in 2019](/img/age-group-line-chart-19.svg "Deaths by Age Group in Argentina in 2019")

### Deaths by Cause in Argentina in 2019
The bar chart and table below show the amount of deaths per cause. The cause with the highest amount is 'Cardiovascular Diseases'.

![Deaths by Cause in Argentina in 2019](/img/group-of-causes-line-chart-19.svg "Deaths by Cause in Argentina in 2019")
