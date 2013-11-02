
<h2>WebService1</h2>
<h4>Detailed Description</h4>
<p>

The web service provides IP Address to country mapping. Using this 
service, consumers can locate the geographical location (country) 
based on an IP address. The service provides two methods. One method 
returns string formatted as XML, whereas another returns well formed 
XML document that may be parsed. 

The XML document has one node called Country under root node 
IPCountryService.</p>
<h4>Usage Notes</h4>
<p>

FindCountryAsString(v4IPAddress As String)  
return type: String

FindCountryAsXml(v4IPAddress as string)
return type: XML

Make sure that the input IP address is correct. The service checks 
for invalid IP addresses by matching each octet. Each octet must be 
between 0 - 255 inclusive. Incorrect IP addresses yield results with 
Country node explaining the error message.</p>
<p>Link: http://www.xmethods.net/ve2/ViewListing.po;jsessionid=nZqVJbVLA0I9XXwrhGoR_RC8?key=427412</p>
<p>WDSL: http://www.ecubicle.net/iptocountry.asmx?wsdl</p>
<hr>
<p>Your IP address is: <?php

echo $_SERVER['REMOTE_ADDR'];
?></p>
    
    
