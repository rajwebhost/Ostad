<?php

// Task 1: Personal Information Page


// variable declaration
$first_name = "Mizanur";
$last_name = "Rahman";
$full_name = $first_name . ' ' . $last_name;
$age = 28;
$birth_date = "December 05, 1994";
$address = "333/1 (4th Floor), Hatem Khan Choto Masjid Road, Boalia, Ghoramara, Rajshahi Sadar";
$city = "Rajshahi";
$country = "Bangladesh";
$mobile = "01711-943457";

$company = "Raj Web Host";
$designation = "Founder & CEO";
$website_url = "https://www.rajwebhost.com";

$introduction = "Hi, I am $full_name, $designation of $company. I have started my Web Hosting Business at 2016 which have been providing quality hosting service for up to 7 years. We provide Shared Hosting, Reseller Hosting, VPS, Dedicated Server etc.";



// display the information in terminal
echo "Name: " . $full_name . "<br>";
echo "Age: " . $age . " Years" . "<br>";
echo "Birth Date: " . $birth_date . "<br>";
echo "Address: " . $address . "<br>";
echo "City: " . $city . "<br>";
echo "Country: " . $country . "<br>";
echo "Mobile Number: " . $mobile . "<br>";

echo "Company Name: " . $company . "<br>";
echo "Designation: " . $designation . "<br>";
echo "Website: " . $website_url . "<br>";
echo "Introduction: " . $introduction . "<br>";

?>