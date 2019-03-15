<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>PENDAFTARAN ONLINE</title>
<link rel="SHORTCUT ICON" href="images/icontexto-webdev-arrow-right-128x128.png">
 <?php include("lib_function.php"); ?>
<link href="style.css" rel="stylesheet" type="text/css">
</head>
<SCRIPT src="typingtext.js" type=text/javascript>
</SCRIPT>
<body onload=didi_moelyadie_ganteng_pisan_asli_subang_he_he_he_he_clock()>
<table width="100%" border="0" cellpadding="0" cellspacing="0">
  <tr>
    <td valign="top"><table width="900" border="0"  align="center" cellpadding="0" cellspacing="0">
	 <tr>
        <td height="20">&nbsp;</td>
        </tr>
      <tr>
        <td  height="71" valign="top"><img src="images/banner_a_1.png" width="900" height="150" /></td>
        </tr>
       
      <tr>
        <td height="25"><table height="25" width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="600" align="left"><script language="JavaScript" type="text/javascript">

new TypingText(document.getElementById("example2"), 100, function(i){ var ar = new Array("\\", "|", "/", "-"); return " " + ar[i.length % ar.length]; });

TypingText.runAll();
        </script>            </td>
            <td align="right" class="text_hitam">Hari ini&nbsp;
                <script language="JavaScript" type="text/javascript">
<!-- Hide from browser that do not understand Javascript
var dayarray=new Array("Minggu","Senin","Selasa","Rabu","Kamis","Jum'at","Sabtu")
var montharray=new Array("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember")

function getthedate()
	{
		var mydate=new Date()
		var year=mydate.getYear()

			if (year < 1000) year+=1900
		
		var day=mydate.getDay()
		var month=mydate.getMonth()
		var daym=mydate.getDate()
			
			if (daym<10) daym="0"+daym

		var hours=mydate.getHours()
		var minutes=mydate.getMinutes()
		var seconds=mydate.getSeconds()
		var dn="AM"

			if (hours>=12) dn="PM"
			if (hours>12)
				{
					hours=hours-12
				}
			if (hours==0) hours=12
			if (minutes<=9) minutes="0"+minutes
			if (seconds<=9) seconds="0"+seconds

// Change Font here
			
			var cdate="<small><font color='#000000' face='tahoma' size='1'>"+dayarray[day]+", "+daym+" "+montharray[month]+"  "+year+" "+hours+":"+minutes+":"+seconds+" "+dn
+"</font></small>"
			if (document.all)
				document.all.clock.innerHTML=cdate
			else if (document.getElementById)
				document.getElementById("clock").innerHTML=cdate
			else
				document.write(cdate)
		}
			if (!document.all&&!document.getElementById)
				getthedate()
		
		function didi_moelyadie_ganteng_pisan_asli_subang_he_he_he_he_clock()
			{
				if (document.all||document.getElementById)
					setInterval("getthedate()",1000)
			}
// End Hidding -->
   	      </script>
                <span id="clock"></span>&nbsp;&nbsp;</td>
          </tr>
        </table>
		</td>
      </tr>
      <tr>
        <td background="images/shadow_putih_kiri.jpg"><table width="100%" border="0" cellpadding="0" cellspacing="0">
          <tr>
            <td width="210" valign="top"><table width="100%" border="0" cellpadding="5" cellspacing="5" class="border">
              <tr>
                <td align="justify" bgcolor="#FFCC66" ><?php menu(); ?></td>
              </tr>
            </table></td>
            <td width="14" align="center" valign="top">&nbsp;</td>
            <td width="676" align="center" valign="top"><table width="100%" border="0" cellpadding="5" cellspacing="5" class="border">
              <tr>
                <td align="justify" bgcolor="#FFCC66"><?php include "buka_file.php"; ?></td>
              </tr>
            </table></td>
          </tr>
          
        </table></td>
        </tr>
      <tr>
        <td height="20"><?php footer(); ?></td>
        </tr>
      <tr>
        <td height="20">&nbsp;</td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
