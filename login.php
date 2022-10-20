<!DOCTYPE html>
<html>
<head>

  <link rel="shortcut icon" type="x-icon" href="../images/asa3.png">

  <title>L O G I N</title>

  <link rel="stylesheet" type="text/css" href="login.css">

  <script type="text/javascript">
    
    function myFunction(){

      alert("This page has loaded!");

   }
  function myfunction1() {
               alert("You are officially registered!");
    }
    
    function myfunction2(){
      alert("The ontoggle event occured");
    }

    function myFunction3(){
      alert("Onclick");

    }

    function myFunction4(){

      alert("Your browser is working offline.");

    } 


    function myFunction5(){

      alert("Your browser is working online.");

    }

    function myFunction6(){

      document.getElementById('fname').style.background = "yellow";

    }


    function myFunction7(){

      document.getElementById('name').style.background = "yellow";

    }

    function myfunction8(){
      alert("you have changed the size of the browser");
    }

    function myfunction9(){
      alert("you pressed a key inside the input field");
    }
   function myfunction10(){
      alert("are you sure?");
    }
    function myFunction11() {
      var x = document.getElementById("fname");
      x.value = x.value.toUpperCase();
    }
    function myfunction11(){
      alert("the form was reset");
    }

  </script>



</head>
<body onload="myFunction()" onoffline="myFunction4()" ononline="myFunction5()" onresize="myfunction8()">

  <nav id="navbar">
    <div class="container">
      <ul>
        <li><a href="index.php" onclick="myFunction3()">HOME</a></li>
        </li>
      </ul>
    </div>
  </nav>

  <section class="login">
    <div class="container">
      <h1>LOGIN</h1>
      <p>Please enter your username and password!</p>
      <form onreset="myFunction11()">
      <input type="text"  placeholder="Username" name="Username" style="height: 40px;" size="50" onfocus="myFunction6(this.id)" id="fname" onkeydown="myfunction9()">
      <br>
      <br>
      <input type="text"  placeholder="Password" name="Password" style="height: 40px;"  size="50" onfocus="myFunction7(this.id)" id="name">
       <br>
       <br>
       <input type ="button" ondblclick ="myfunction10()" value="Forgot password">
       <br>
       <input type ="button" onclick ="myfunction1()" value="Submit"> 
      <br>
      <br>
      <input type="reset">
      </form>
      <p><b>Don't have an account?</b>&nbsp;<button><a href="signup.php" style="text-decoration: none;">SIGNUP</a></button></p>

      <br>
      <br>

      <details ontoggle="myFunction2">
      <summary>ALL RIGHTS RESERVED</summary>
      <p>-COPYRIGHT 2022-2023 EVENT DRIVEN PROGRAMMING</p>
     </details>

    </div>

  </section>

    <footer id="footer">
    <p>EVENT DRIVEN PROGRAMMING</p>
  </footer>

</body>
</html>