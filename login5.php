<?php
$d=$_GET['d'];
?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            body {
    align-items: center;
    background-color: #000;
    display: flex;
    justify-content: center;
    height: 100vh;
  }
  
  .form {
    background-color: #15172b;
    border-radius: 20px;
    box-sizing: border-box;
    height: 500px;
    padding: 20px;
    width: 320px;
  }
  
  .title {
    color: #eee;
    font-family: sans-serif;
    font-size: 36px;
    font-weight: 600;
    margin-top: 30px;
  }
  
  .subtitle {
    color: #eee;
    font-family: sans-serif;
    font-size: 16px;
    font-weight: 600;
    margin-top: 10px;
  }
  
  .input-container {
    height: 50px;
    position: relative;
    width: 100%;
  }
  
  .ic1 {
    margin-top: 40px;
  }
  
  .ic2 {
    margin-top: 30px;
  }
  
  .input {
    background-color: #303245;
    border-radius: 12px;
    border: 0;
    box-sizing: border-box;
    color: #eee;
    font-size: 18px;
    height: 100%;
    outline: 0;
    padding: 4px 20px 0;
    width: 100%;
  }
  
  .cut {
    background-color: #15172b;
    border-radius: 10px;
    height: 20px;
    left: 20px;
    position: absolute;
    top: -20px;
    transform: translateY(0);
    transition: transform 200ms;
    width: 76px;
  }
  
  .cut-short {
    width: 50px;
  }
  
  .input:focus ~ .cut,
  .input:not(:placeholder-shown) ~ .cut {
    transform: translateY(8px);
  }
  
  .placeholder {
    color: #65657b;
    font-family: sans-serif;
    left: 20px;
    line-height: 14px;
    pointer-events: none;
    position: absolute;
    transform-origin: 0 50%;
    transition: transform 200ms, color 200ms;
    top: 20px;
  }
  
  .input:focus ~ .placeholder,
  .input:not(:placeholder-shown) ~ .placeholder {
    transform: translateY(-30px) translateX(10px) scale(0.75);
  }
  
  .input:not(:placeholder-shown) ~ .placeholder {
    color: #808097;
  }
  
  .input:focus ~ .placeholder {
    color: #dc2f55;
  }
  
  .submit {
    background-color: #08d;
    border-radius: 12px;
    border: 0;
    box-sizing: border-box;
    color: #eee;
    cursor: pointer;
    font-size: 18px;
    height: 50px;
    margin-top: 38px;
     outline: 0;
    text-align: center;
    width: 100%;
  }
  
  .submit:active {
    background-color: #06b;
  }
  
        </style>
    </head>
<body>

<h2>Text input fields</h2>
<div class="container"></div>


    <form method = "get" action = "check.php">
    <div class="form">
        <div class="title">Welcome</div>
        <div class="subtitle">Let's create your account!</div>
        <div class="input-container ic1">
          <input id="username"  name = "user" class="input" type="text" placeholder=" " required />
          <div class="cut"></div>
          <label for="username" class="placeholder">User name</label>
        </div>
        <div class="input-container ic2">
          <input id="password" class="input" type="password"  name = "pass" placeholder=" " />
          <div class="cut"></div>
          <label for="password" class="placeholder">password</label>
        </div>
        <div class="input-container ic2">
          <input id="email" class="input" name = "email" type="text" placeholder=" " />
          <div class="cut cut-short"></div>
          <label for="email" class="placeholder">Email</>
        </div>     
        <button type="text"  input type="submit" name = "sub" class="submit">submit</button>
      </a>
      </div>
      <h2 style = "color:red;"> <?php echo $d; ?>  </h2></center>
      </form>
</body>
</html>
