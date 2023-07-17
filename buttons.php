<!DOCTYPE html>
<html>
<head>
  <title>Formular mit Validierungen</title>
  <style>
    .error {
      color: red;
    }
  </style>
</head>
<body>
  <h1>Formular mit Validierungen</h1>
  
  <form id="myForm" onsubmit="validateForm(event)">
    <h2>Range:</h2>
    <input type="range" id="rangeInput" min="1" max="100">
    <span id="rangeError" class="error"></span>
    
    <h2>Radio:</h2>
    <input type="radio" id="radioInput1" name="radioGroup" value="option1"> Option 1
    <input type="radio" id="radioInput2" name="radioGroup" value="option2"> Option 2
    <span id="radioError" class="error"></span>
    
    <h2>Checkbox:</h2>
    <input type="checkbox" id="checkboxInput">
    <span id="checkboxError" class="error"></span>
    
    <h2>Number:</h2>
    <input type="number" id="numberInput" min="1" max="10">
    <span id="numberError" class="error"></span>
    
    <br><br>
    <input type="submit" value="Submit">
  </form>
  
  <script>
    function validateForm(event) {
      event.preventDefault(); // kein automatisches Absenden des Formulars
      
      //rangeslider vali
      var rangeInput = document.getElementById("rangeInput");
      var rangeError = document.getElementById("rangeError");
      if (rangeInput.value < 50) {
        rangeError.textContent = "Bitte wähle einen Wert größer als 50.";
        return false;
      } else {
        rangeError.textContent = "";
      }
      
      // radio vali
      var radioInput1 = document.getElementById("radioInput1");
      var radioInput2 = document.getElementById("radioInput2");
      var radioError = document.getElementById("radioError");
      if (!radioInput1.checked && !radioInput2.checked) {
        radioError.textContent = "Bitte wähle eine Option aus.";
        return false;
      } else {
        radioError.textContent = "";
      }
      
      // checkbox vali
      var checkboxInput = document.getElementById("checkboxInput");
      var checkboxError = document.getElementById("checkboxError");
      if (!checkboxInput.checked) {
        checkboxError.textContent = "Bitte akzeptiere die Bedingungen.";
        return false;
      } else {
        checkboxError.textContent = "";
      }
      
      // number eingabe vali
      var numberInput = document.getElementById("numberInput");
      var numberError = document.getElementById("numberError");
      if (numberInput.value < 5 || numberInput.value > 8) {
        numberError.textContent = "Bitte gib eine Zahl zwischen 5 und 8 ein.";
        return false;
      } else {
        numberError.textContent = "";
      }
      
      document.getElementById("myForm").submit();
      alert("Formular erfolgreich abgeschickt!");
    }
  </script>
</body>
</html>
