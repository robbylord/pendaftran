<html>
<head>
<title>ADMINISTRATOR PAGES</title>
<link rel="SHORTCUT ICON" href="../images/icontexto-webdev-arrow-right-128x128.png" >
<?php include("lib_function_admin.php"); ?>
<link href="style.css" rel="stylesheet" type="text/css">
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<link href="style_admin.css" rel="stylesheet" type="text/css">
</head>
<body leftmargin="0" topmargin="0" >
<table width="100%" height="100%" border="0">
   <tr> 
    <td height="25" align="right" colspan="3" class="text_hitam"  >&nbsp;</td>
  </tr>
  <tr> 
    <td width="16%" rowspan="2">&nbsp;</td>
    <td height="528" align="center" class="head_judul" >
      <table width="500" border="0" cellspacing="0" cellpadding="0">
      <tr >
        <td background="images/left-up.png" class="row_table">&nbsp;</td>
        <td background="images/middle-up.png">&nbsp;</td>
        <td background="images/right-up.png" class="row_table">&nbsp;</td>
      </tr>
      <tr>
        <td background="images/left-middle.png">&nbsp;</td>
        <td><?php login_admin(); ?></td>
        <td background="images/right-middle.png" class="row_table">&nbsp;</td>
      </tr>
      <tr>
        <td background="images/left-bottom.png" class="row_table">&nbsp;</td>
        <td background="images/middle-bottom.png"  class="text_merah" align="center"><blink>Username tidak boleh kosong !!</blink></td>
        <td background="images/right-bottom.png">&nbsp;</td>
      </tr>
    </table></td>
    <td width="16%" rowspan="2" align="right" valign="bottom" >&nbsp;</td>
  </tr>
  <tr> 
    <td valign="bottom" align="center"><?php footer_admin(); ?>    </td>
  </tr>
</table>
</body>
</html>
