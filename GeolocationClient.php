<?php
/*
 * Geo IP Location 1.0.0
 * http://www.strikeiron.com/Catalog/ProductDetail.aspx?pv=1.0.0&pn=Geo+IP+Location
 *
 * Required:
 *
 *  1. PHP 5 with soap extensions
 *  2. A registered StrikeIron account with a userid/password.
 *		To register please visit: http://www.strikeiron.com/Register.aspx
 * 		Then set the $USER_ID and $PASSWORD below
 *  3. Call GetLatestRate
 *
 * To run place this script, copy it to a directory on your web server and access with a browser.
 *
 *
 * For additional support:
 *  email: support@strikeiron.com
 *  phone: +1 919-467-4545 opt. 3
 *
 *
 */

/* 
 * As a Registered User, you can authenticate your web service request by using a UserID/Password combination,
 * or by using a License Key or Master Key. If you are using a License Key or Master Key, assign this value to
 * the $USER_ID and set the $PASSWORD to null.
 */
$USER_ID = 'antonio_sirera@yahoo.es';
$PASSWORD = 'zEPLEX';
 

$WSDL = 'http://ws.strikeiron.com/IPligenceGeoIPLocation?WSDL';

// create client
$client = new SoapClient($WSDL, array('trace' => 1, 'exceptions' => 1));

// create registered user for soap header
$registered_user = array("RegisteredUser" => array("UserID" => $USER_ID,"Password" => $PASSWORD));
$header = new SoapHeader("http://ws.strikeiron.com", "LicenseInfo", $registered_user);

// set soap headers - this will apply to all operations
$client->__setSoapHeaders($header);

try
{
  //Calls GetInfoByIP and displayes the result
  GetInfoByIP();

  //for track message, comment out the line above and uncomment the line below.  Enter a valid tracking tag
  //track_message("enter a tracking tag here");
}
catch (Exception $ex)
{
	echo $ex->getMessage() . "<br />";
}

function GetInfoByIP()
{
  global $client;

  //Set up input parameters for the GetInfoByIP operation

  $IPAddress = "180.111.57.244"; //IP address to look up
  $pointWeight = 2; //size of point for map image
  $ColorOfPoint = "BLUE"; //color of point on map

  //set up parameter array
  $params = array("IPAddress" => $IPAddress, "PointWeight" => $pointWeight, "ColorOfPoint" => $ColorOfPoint);

  //call the web service operation
  $result = $client->__soapCall("GetInfoByIP", array($params), null, null, $output_header);

  //show service results
  //Note that these are not all the fields contained in the service
  echo "<h1>GetInfoByIP Result:</h1><br />";
  output_Result($result->GetInfoByIPResult->GeoLocInfo);


  //show status info
  echo "<br /><h2>Status Info:</h2><br />";
  output_status_info($result->GetInfoByIPResult->ServiceStatus);

  //show subscription info
  echo "<br /><h2>Subscription Info:</h2><br />";
  output_subscription_info($output_header['SubscriptionInfo']);
}


function output_Result( $svcResult )
{
  echo '<table border="1">';
      echo '<tr><td>Country:</td><td>' . $svcResult->CountryName . '</td></tr>';
      echo '<tr><td>Region:</td><td>' . $svcResult->RegionName . '</td></tr>';
      echo '<tr><td>City:</td><td>' . $svcResult->CityName . '</td></tr>';
      echo '<tr><td>Latitude:</td><td>' . $svcResult->Latitude . '</td></tr>';
      echo '<tr><td>Longitude:</td><td>' . $svcResult->Longitude . '</td></tr>';

  echo '</table>';
}


function output_status_info( $status_info )
{
	echo '<table border="1">';
		echo '<tr><td>Status Description</td><td>' . $status_info->StatusDescription . '</td></tr>';
		echo '<tr><td>Status Nbr</td><td>' . $status_info->StatusNbr . '</td></tr>';
	echo '</table>';
}

function output_subscription_info( $subscription_info )
{
	echo '<table border="1">';
		echo '<tr><td>License Status</td><td>' . $subscription_info->LicenseStatus . '</td></tr>';
		echo '<tr><td>License Action</td><td>' . $subscription_info->LicenseAction . '</td></tr>';
		echo '<tr><td>Remaining Hits</td><td>' . $subscription_info->RemainingHits . '</td></tr>';
	echo '</table>';
}

?>

