
<body>

<?php   

	//access the global array called $_POST to get the values from the text fields 
	$Q1= $_POST["Q1"]; 
	$Q2 = $_POST["Q2"]; 
	$Q3= $_POST["Q3"]; 
	$Q4 = $_POST["Q4"]; 
	$Q5= $_POST["Q5"]; 
	
	$score = 0;
	
	if ($Q1 == "Erno Rubik, 1974") {
	    $score += 20;
	}

  if ($Q2 == "8x8") {
	    $score += 20;
	}

  if ($Q3 == "L") {
	    $score += 20;
	}

  if ($Q4 == "10") {
	    $score += 20;
	}

  if ($Q5 == "43 Quintillion") {
	    $score += 20;
	}
    
$q = $score/20;


echo "<b>You scored: " .$q. "/5 <br>" .$score. "%</b><br>"; ?>

<p>1. Fill in the blanks: ___ invented the Rubiks Cube in ___ <BR>
	<?php echo "You answered: " .$Q1. "<br> The answer was: Erno Rubik, 1974<br>
(The options were): <br>
- Ernest Rubo, 1980<BR>
- Erno Rubik, 1974<BR>
- Elliot Ruben, 1969<BR>
- Ezekiel Roubek, 1972<BR>"; ?> 
</p>

<p>2. Which of the following is not a WCA event?<BR>
<?php echo "You answered: " .$Q2. "<br> The answer was: 8x8<br>
(The options were): <br>
- Clock<BR>
- 2x2<BR>
- 8x8<BR>
- 5x5 Blindfolded<BR>"; ?>
</p>

<p>3. Which of the following is not a PLL algoritm Category<BR>
<?php echo "You answered: " .$Q3. "<br> The answer was: L<br>
(The options were): <br>
- A<BR>
- E<BR>
- F<BR>
- L<BR>"; ?>
</p>

<p>4. As of November 9, 2022, how many world records does Max Park hold? (Avg and Single):<BR>
<?php echo "You answered: " .$Q4. "<br> The answer was: 10<br>
- 10<BR>
- 4<BR>
- 3<BR>
- 1<BR>"; ?>
</p>

<P>5. How many possible permutations of a Rubiks cube are there? Select the closest number <BR>
<?php echo "You answered: " .$Q5. "<br> The answer was: 43 Quintillion<br>
- 43 quintillion<BR>
- 40 trillion<BR>
- 50 billion<BR>
- 20 million<BR>"; ?>
</p>   
    
</body>