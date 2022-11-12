<html>
  <head>
    <title>Multiplication Table</title>
  </head>
  <body>
    <table style="border-collapse: collapse">
      <?php
      	echo '<tr>';
      	for ($r=0; $r <= 100; $r++) {
          	if ($r == 0) {
              echo '<th></th>';
              continue;
            }
          	echo '<th style="text-align: left; border:1px solid black; border-collapse:collapse">' .$r. '</th>';
          }
          echo '<tr>';
          
      	for ($r=1; $r <= 100; $r++) {
          	echo '<th style="border:1px solid black; border-collapse:collapse">' .$r. '</th>';
      		for ($c=1; $c <= 100; $c++) 
      			echo '<td style="border:1px solid black; border-collapse:collapse">' .$c*$r. '</td>';
      		echo '</tr>';
      	}
      ?>
    </table>
  </body>
</html>