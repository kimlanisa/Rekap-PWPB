<!DOCTYPE html>
     <html> 
     <head> 
  <title>Kotak Hitam Putih</title>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  </head>
  <body> 
   <table cellspacing="0px" cellpadding="0px" border="1px">
   <!-- cell 270px wide (10 columns x 50px) -->
      <?php
      for($row=1;$row<=10;$row++)
    {
          echo "<tr>";
          for($col=1;$col<=10;$col++)
      {
          $total=$row+$col;
          if($total%2==0)
      {
          echo "<td height=50px width=50px bgcolor=#FFFFFF></td>";
          }
      else
      {
          echo "<td height=50px width=50px bgcolor=#000000></td>";
          }
          }
          echo "</tr>";
    }
          ?>
  </table>
  </body>
  </html>