<?php
//..
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Validation installation form</title>
    <link rel='stylesheet' type='text/css' href='style.css'/>
  </head>
  <body>
    <form name="installForm" class='installForm'>
    <ul>
        <li>
           <label>Database:*</label> 
           <input type="text" name="database" placeholder='Database name'> <br/>
        </li>
        <li>
            <label>Username:*</label>
            <input type='text' name='username'placeholder='Enter your name'> <br/>
        </li>
        <li>
            <label>Password:* </label>
            <input type='password' name='pwd1' placeholder='Enter your password'> <br/>
        </li>
        <li>
            <label>Confirm password:*</label>
            <input type='password' name='pwd2' placeholder='Re-type your password'> <br/>
        </li>
        <li>
            <label>Email:*</label>
            <input type='text' name='email' placeholder='Enter a valid email'> <br/>
        </li>
        <li>
           <label>Database Host:*</label> 
           <input type="text" name="database" placeholder='Database host'> <br/>
        </li>
        <li>
           <label>Table Prefix:*</label> 
           <input type="text" name="database" placeholder='Table prefix'> <br/>
        </li>            
        <li>
           <button class="submit" type="submit">Submit</button>
        </li>
    </ul>
    </form>
  </body>
</html>
