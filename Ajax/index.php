<?php

        $con=mysqli_connect('localhost:3306','rahul','','country');
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
        xmlhttp=new XMLHttpRequest();
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
                        if(req.readyState==4 && req.status==200)
                            document.getElementById('statediv').innerHTML=req.responseText;
                }
                req.open("GET",strURL,true);
                req.send(null);
        }
}



function getCity(stateId)
{
        var strURL="findCity.php?state="+stateId;
var req=getXMLHTTP();

        if(req)
        {
                req.onreadystatechange = function()
                {
                        if(req.readyState==4 && req.status==200)
                                document.getElementById('citydiv').innerHTML=req.responseText;
                }
                req.open("GET",strURL,true);
                req.send(null);
        }
}

</script>
</head>
<body bgcolor="aqua">
<form action="" method="post">
<h2><font color="blue">Dynamic Change of Select Options</font></h2>
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
