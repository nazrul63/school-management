<html>
    <head>
       <title> Index page </title>
               <meta charset="utf-8" />
               <meta http-equiv="Content-type" content="text/html; charset=utf-8" />
               <meta name="viewport" content="width=device-width, initial-scale=1" />
               <link rel="stylesheet" type="text/css" href="admission_page_stylesheet.css">        
    </head>
    
   <body>
        <div id="div1">
        <div class="background-01">
            <div class="naming">
                <p>Cuet School and College </p>

                <input type="text" placeholder="Search..." />
<!--                <b id="logout"><a href="logout.php">Log Out</a></b>-->

            </div>
        </div>
    </div>
    
     <div class="sidebar">
            <ul>
               <li><a href="about.php">About</a>
                </li>
                <li><a href="admission_page.php">Admission</a>
                </li>
                <li><a href="faculty.php">Faculty</a>
                </li>
                <li><a href="class.php">Class</a>
                </li>
                <li class="ending-one"><a href="notice.php">Notice</a>
                </li>
            </ul>
        </div>
        
        <div id="middle_part">
            <?php
                $connection = mysql_connect("localhost", "root", "");        
                $db = mysql_select_db("school_try_out_01", $connection);
                 
                $search_sql=mysql_query("SELECT COUNT(*) as p_total FROM `student_class_info` WHERE class_no='1'",$connection) or die(mysql_error());
                $data=mysql_fetch_assoc($search_sql);
//                echo $data['p_total'];
                
                $vacant_search_sql=mysql_query("SELECT total_student - (int)'$data['p_total']' as r_total FROM `class_info` WHERE class_no='1' ",$connection) or die(mysql_error());
//                echo " the vacant number is ".mysql_num_rows($vacant_search_sql);
                $r_data=mysql_fetch_assoc($vacant_search_sql);
                echo " the vacant number is ".$r_data['r_total'];
            
            ?>
        </div>
      
              <FORM METHOD="LINK" ACTION="sign_in_index.php" style="float:right;
              position:relative;
              top:-22px;
              ">
              <INPUT TYPE="submit" VALUE="Sign-In">
              <p>or</p>
        </FORM>
                <FORM METHOD="LINK" ACTION="sign_up_index.php" style="float:right;
                position:relative;
                bottom:-30px;
                right:-88px;">
              <INPUT TYPE="submit" VALUE="Sign-up">
        </FORM>
       
   </body>
</html>