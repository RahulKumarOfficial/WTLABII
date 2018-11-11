<?php

        $con=mysqli_connect('localhost:3306','rahul','','country');

        if(!$con)
        {
                die('Could not connect:'.mysql_error());
        }

        $sql="select *from country";

        $result=mysqli_query($con,$sql);

?>

<html>
<head>
<title>Country State City</title>
<script language="javascript" type="text/javascript">

function getXMLHTTP()
{
        var xmlhttp=false;
        try{
                xmlhttp=new XMLHttpRequest();
        }

        catch(e)
        {
                try{
                        xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
                }
catch(e)
                {

                        try{
                               xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
                        }

                        catch(e)
                        {
                                xmlhttp=false;
                       }
               }
        }
        return xmlhttp;
}

function getState(countryId)
{
        var strURL="findState.php?country="+countryId;
        var req=getXMLHTTP();

        if(req)
        {
                req.onreadystatechange = function()
                {
                        if(req.readyState==4)
                        {
if(req.status==200)
                                {
                                        document.getElementById('statediv').innerHTML=req.responseText;
                                        document.getElementById('citydiv').innerHTML='<select name="city_name">'+
                                        '<option>Select City</option>'+
                                        '</select>';
                                }
                                else
                                {
                                        alert("Problem loading:\n"+req.statusText);
                               }
                        }
                }
                req.open("GET",strURL,true);
                req.send(null);
        }
}



function getCity(countryId,stateId)
{
        var strURL="findCity.php?country="+countryId+"&state="+stateId;
var req=getXMLHTTP();

        if(req)
        {
                req.onreadystatechange = function()
                {
                        if(req.readyState==4)
                        {
                                if(req.status==200)
                                {
                                        document.getElementById('citydiv').innerHTML=req.responseText;
                                }
                                else
                                {
                                        alert("Problem loading:\n"+req.statusText);
                                }
                        }
                }
                req.open("GET",strURL,true);
               req.send(null);
        }
}

</script>
</head>
<body bgcolor="wheat">
<form action="" method="post">
<marquee><h2><font color="blue">Dynamic Change of Select Options</font></h2></marquee>
<center>
<table>
<tr>
        <td width="150px"><b><i>Country</i></b></td>
        <td>:</td>
        <td width="100px"><select name="s_name" onchange="getState(this.value)">
                <option>Select Country</option>
                <option value="1">India</option>
                <option value="2">USA</option>
        </select>
        </td>
</tr>

<tr>
        <td width="150px"><b><i>State</i></b></td>
        <td>:</td>
        <td width="100px"><div id="statediv"><select name="s_name">
                <option>Select State</option>
        </select>
        </td>
</tr>

<tr>
        <td width="150px">City</td>
        <td>:</td>
        <td width="100px"><div id="citydiv"><select name="city_name">
                <option>Select City</option>
        </select>
        </td>
</tr>

</table>
</center>
</form>
</body>
</html>
