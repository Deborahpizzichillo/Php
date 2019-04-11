<!-- Set language with cookie, expiration at end of session -->
<?php 
  setcookie("language", "en"); 
?> 


<!-- Set language with cookie, expiration when counter runs out. (an hour in this case.) -->
<?php 
  setcookie("language", "nl", time()+3600); 
?> 

<!-- Cookie will valid in all folders in your current domain.) -->
<?php 
  setcookie("language", "nl", time()+3600, "/"); 
?> 

<!-- Check if there is a cookie available -->
<?php 
  if(isset($_COOKIE['cooked'])) { 
    // cookie exists 
    
  } else { 
    // cookie does not exist 
    
  } 
?> 

<?php 
  // check first if the cookie exists 
  if(isset($_COOKIE['language'])) { 
    // cookie exists, read the value from 
    $cookie_var = $_COOKIE['language']; 
    // Print the value if necessary (this can also be done directly of course) 
    echo "cookie value: ".$cookie_var;
     // delete the cookie 
    setcookie("language", "", time()-10);  
  } else { 
    // cookie does not exist 
    echo "cookie does not exist."; 
  } 
?> 



<?php 
  // cookies aanmaken 
  setcookie("myarray[1]", "Monkey",time()+10); 
  setcookie("myarray[2]", "Nut",time()+10); 
  setcookie("myarray[3]", "Banana",time()+10); 
?> 

<br>

<?php 
  // Does the cookie array exist ? 
  if(isset($_COOKIE['myarray'])) { 
    // run all cookies  put keys in var $k and values in $v.
    foreach($_COOKIE['myarray'] as $k => $v) { 
      echo $k.": ".$v."<br />"; 
    } 
  } 
?> 

<br>

<?php 
  // cookie setten 
  setcookie("multicook", "cookie;pepper;salt"); 
  // check if the cookie exists 
  if(isset($_COOKIE['multicook'])) { 
    // stop the different values in an array 
    $cookie_vars = explode(";", $_COOKIE['multicook']); 
    echo "<pre><br>".print_r ($cookie_vars,true)."<br></pre>";
  } 
 
  // check if the cookie exists 
  if(isset($_COOKIE['multicook'])) { 
    // Assign values to the variables in list() 
    list($one, $two, $three) = explode(";", $_COOKIE['multicook']); 
  } 
echo "<br>$two<br>";
echo "<br>$one<br>";
echo "<br>$three<br>";
?> 