const validateInputs = () => {
  let errors = 0;

	var re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if ((document.getElementById("User").value.length) == 0) {
    document.getElementById("usernameerror").style.display = 'block';
    errors++;
  } else if (!re.test(document.getElementById("User").value)) {
document.getElementById("usernameerror").style.display = 'block';
    errors++;

}
	else {
    // hide error if it was up before but resolved afterward
    document.getElementById("usernameerror").style.display = 'none';
  }

   if (document.getElementById("Password").value.length == 0) {
    document.getElementById("passworderror").style.display = 'block';
    errors++
  } else {
    document.getElementById("passworderror").style.display = 'none';
  }

  if (document.getElementById("Longsword").value.length == 0 ||
      document.getElementById("Sturdy Armor").value.length == 0 ||
      document.getElementById("Ominous Potion").value.length == 0 ) {
    document.getElementById("itemquantityerror").style.display = 'block';
    errors++;
  } else if (!Number.isInteger(parseFloat(document.getElementById("Longsword").value)) || 
             !Number.isInteger(parseFloat(document.getElementById("Sturdy Armor").value)) || 
             !Number.isInteger(parseFloat(document.getElementById("Ominous Potion").value))) {
    document.getElementById("itemquantityerror").style.display = 'block';
    errors++;
  } else {
    document.getElementById("itemquantityerror").style.display = 'none';
  }

  const radioButtons = document.querySelectorAll('input[name="shipping"]');
  let selectedShipping = false;
  for (const radioButton of radioButtons) {
    if (radioButton.checked) {
      selectedShipping = true;
      break;
    }
  }

  if (!selectedShipping) {
    document.getElementById("shippingerror").style.display = 'block';
    errors++
  } else {
    document.getElementById("shippingerror").style.display = 'none';
  }

  return errors == 0;
  
}