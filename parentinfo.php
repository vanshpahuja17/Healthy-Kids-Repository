<! DOCTYPE html>
  <html>

  <head>
    <style>
      body {
  background-image: linear-gradient(120deg, #f6d365 0%, #fda085 100%);
  color: purple;
  font-family: "Poppins", sans-serif;
  min-height: 100vh;
  padding: 30vh;
}
.right{
  height:60vh;
    width: 40vw;
    float: right;
}
.left{
  height: 60vh;
    width: 25vw;
    float: left;
}
      button {
        display: flex;
        flex-direction: column;
        align-content: center;
        border: 0;
        line-height: 2.5;
        padding: 0 20px;
        font-size: 1rem;
        text-align: center;
        color: #fff;
        text-shadow: 1px 1px 1px #000;
        border-radius: 1vw;
        background-color: rgb(89, 73, 180);
        background-image: linear-gradient(to top left,
            rgba(0, 0, 0, .2),
            rgba(0, 0, 0, .2) 30%,
            rgba(0, 0, 0, 0));
        box-shadow: inset 2px 2px 3px rgba(255, 255, 255, .6),
          inset -2px -2px 3px rgba(0, 0, 0, .6);
          
      }

      button:hover {
        background-color: rgba(59, 0, 220, 0.698);
      }

      button:active {
        box-shadow: inset -2px -2px 3px rgba(255, 255, 255, .6),
          inset 2px 2px 3px rgb(52, 9, 207);
      }
    </style><u>
      <bold><em>
          <!-- <h1 >Parent Form Page </h1> -->
        </em></bold>
    </u>
    <script>
      function validateForm() {
  var x = document.forms["vansh1"]["fname"].value;
  if (x == "") {
    alert("Name must be filled out");
    return false;
  }
} 
    </script>
  </head>
  </br>
  </br>

  <body >
    <u>
  <div class="left">
  <h2><t>Child's Information:</h2>
      </u>
    </br> 

    <form method="post" action="childdbms.php">
      Enter Aadhar Card Number: <br>
      <input type="text" name="aadhar" placeholder="XXXX-XXXX-XXXX" required>
<br>
      Enter the Child's Full name:<br>
      <input type="text" name="name" placeholder="First-Name Middle-Name Last-Name" required>
      <br>
      Enter the Child's Date of Birth:<br>
      <input type ="date" name="dob" required>
      </br>
      Enter the Child's current weight (in Kgs):<br>
      <input type="number" name="weight" required>
      </br>
      Enter the Child's current height (in cms):<br>
      <input type="number" name="height" required>
      </br>
      Enter the Child's Birth Place:<br>
      <input type="location" name="place" placeholder="District, State" required>
      </br>
      Child's Gender:<br>
      <!-- <input type="radio" name=gender" value="Male">Male -->
      <!-- <input type="radio" name="gender" value="Female">Female -->
      <!-- <input type="radio" name="gender" value="Trans-gender">Trans-gender -->
      <input type="location" name="gender" required>
      </br>
  </div>
       <div class="right">
       <u><h2>Maternal Details:</h2>
      </u>
    </br>
    
      Date of Hospitalization(D.O.H):<br>
      <input type="date" name="doh">
      </br>
      Date of Release :<br>
      <input type="date" name="dor">
      </br>
      Any Complications:<br>
      <input type="text" name="complication" required>
      </br>
      Time of Birth (HH:MM:SS):<br>
      <input type="time" name="tob" required>
      </br>
      Child's weight of 1 hr (in kgs): <br>
      <input type="number" name="birthweight" required>
      </br>
      Date of onset of breastfeeding:<br>
      <input type="date" name="breastfeeding" required>
      </br>
      Hospital Registration Number:<br>
      <input type="text" name="hrn" required>
      </br>
      </br>
       </div> 
    
    <button type="submit" class="btn" name="reg_child" align="center">Submit</button>
    </div>
      
      
    </form>
    
  </body>
  <body>
  <a href="main.php"><button align=center>Back To Home Page</button></a>
</body>
  </html>