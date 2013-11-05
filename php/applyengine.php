<?php

$EmailTo = "dbailey@zoll.com";
$Subject = "ZOLL Foundation Application";
$Name = Trim(stripslashes($_POST['Name'])); 
$Position = Trim(stripslashes($_POST['Position']));
$Affiliation = Trim(stripslashes($_POST['Affiliation']));
$Address = Trim(stripslashes($_POST['Address'])); 
$Email = Trim(stripslashes($_POST['Email'])); 
$Telephone = Trim(stripslashes($_POST['Telephone'])); 

$Research = Trim(stripslashes($_POST['Research'])); 

$Reference_Name = Trim(stripslashes($_POST['Reference_Name'])); 
$Reference_Position = Trim(stripslashes($_POST['Reference_Position']));
$Reference_Affiliation = Trim(stripslashes($_POST['Reference_Affiliation']));
$Reference_Address = Trim(stripslashes($_POST['Reference_Address'])); 
$Reference_Email = Trim(stripslashes($_POST['Reference_Email'])); 
$Reference_Telephone = Trim(stripslashes($_POST['Reference_Telephone'])); 

$Recommendation = Trim(stripslashes($_POST['Recommendation'])); 

// validation
$validationOK=true;
if (!$validationOK) {
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
  exit;
}

// prepare email body text
$Body = "";
$Body .= "Name: ";
$Body .= $Name;
$Body .= "\n";
$Body .= "Position: ";
$Body .= $Position;
$Body .= "\n";
$Body .= "Affiliation: ";
$Body .= $Affiliation;
$Body .= "\n";
$Body .= "Address: ";
$Body .= $Address;
$Body .= "\n";
$Body .= "Email: ";
$Body .= $Email;
$Body .= "\n";
$Body .= "Telephone: ";
$Body .= $Telephone;
$Body .= "\n";
$Body .= "Research: ";
$Body .= $Research;
$Body .= "\n";

$Body = "";
$Body .= "Reference_Name: ";
$Body .= $Reference_Name;
$Body .= "\n";
$Body .= "Reference_Position: ";
$Body .= $Reference_Position;
$Body .= "\n";
$Body .= "Reference_Affiliation: ";
$Body .= $Reference_Affiliation;
$Body .= "\n";
$Body .= "Reference_Address: ";
$Body .= $Reference_Address;
$Body .= "\n";
$Body .= "Reference_Email: ";
$Body .= $Reference_Email;
$Body .= "\n";
$Body .= "Reference_Telephone: ";
$Body .= $Reference_Telephone;
$Body .= "\n";
$Body .= "Recommendation: ";
$Body .= $Recommendation;
$Body .= "\n";

// send email 
$success = mail($EmailTo, $Subject, $Body, "From: <$EmailFrom>");

// redirect to success page 
if ($success){
  print "<meta http-equiv=\"refresh\" content=\"0;URL=applythanks.php\">";
}
else{
  print "<meta http-equiv=\"refresh\" content=\"0;URL=error.htm\">";
}
?>