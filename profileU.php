<?php include 'conction.php'; ?>


<?php


$Id = $_GET["id"];
$query = "SELECT * FROM tbl_users_224 where id=".$Id." and type ="."'U'";

$result = mysqli_query($connection, $query);
if ($result) {
    $row = mysqli_fetch_assoc($result); //there is only 1 item
    if($row['type']!='U'){
        die("DB query failed.");
    }
} else die("DB query failed.");



?>


<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <script src="js/profileU.js"></script>
    <link rel="stylesheet" href="css/styleProfileU.css">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <meta name="viewport" content="width=device-width,initial-scale=1,shrink-to-fit=no">
    <link rel="icon" href="images/Red1.png">
    <link href="https://fonts.googleapis.com/css2?family=Arvo&family=Bellota+Text:wght@300&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Bellota+Text:wght@300&display=swap" rel="stylesheet">
    
    <title>REDHOOD</title>
</head>

<body class="h3">

    <header>
        <a href="homepage.html" class="logo"><img src="images/logo.png"></a>

        <section class="header1">
            <button href="#" class="shira2"> <?php  echo '<img src="' .$row["photo"] .'">' . $row["name"] ?> </button>
            <button href="#" class="bell"><img src="images/messege.png"></button>
            <button href="#" class="bell"><img src="images/bell.png"></button>
            <button href="#" class="bell"><img src="images/down.png"></button>
        </section>

    </header>


    <ul class="breadcrumbs">
        <li class="breadcrumbs_item">
            <a href="homepage.html" class="breadcrumbs_link">Home</a>
        </li>
        <li class="breadcrumbs_item">
            <a href="" class="breadcrumbs_link--active">Profile</a>
        </li>
    </ul>
    <section  class="edit-delete">
        <a href="form2.php?id=<?php echo($row['id'])?>" class="edit" id="edit"><img src="images/edit.png"></a > <a href="#" class="edit" id="delete" ><img src="images/delete.png"></a>
          </section>  


    <main>
        <a class="menu" href="#"></a>

        <nav class="navh3">
            <section class="select-box">
                <div class="shira-top">
                    <a href="#" class="shira-pic">
                        <?php  echo '<img src=' . $row["photo"] .'>'. $row["name"] ?>  
                    </a>

                </div>
            </section>
            <section class="select-pro-box">
                <ul class="list-group" list-group-flush>
                    <li class="group-employee"><a href="#" class="profile"><img src="images/face.png">Walk and talk</a></li>
                    

                    <li class="group-employee"><a href="#" class="profile"><img src="images/swap.png">Connect social media</a></li>
                   


                    <li class="group-employee"><a href="form1.php" class="profile"><img src="images/men.png">Here for you</a></li>
                   

                    <li class="group-employee"><a href="#" class="profile"><img src="images/eye.png">Protect yourself</a></li>
                    

                    <li class="group-employee"><a href="#" class="profile"><img src="images/mes.png">Contact & info</a></li>
                    

                    <li class="group-employee"><a href="#" class="profile"><img src="images/man.png">Support team </a></li>
                    <li class="group-employee"><a href="#" class="profile"><img src="images/gavel.png">Stand by me</a></li>
                    <li class="group-employee"><a href="#" class="profile"><img src="images/question.png">Sharing is caring</a></li>
                    
                </ul>

                <section>
        </nav>

        <div class="wrapper">
            <section class="headline">
                REDHOOD Call Center
            </section>
            <section class="summery-box">
                <div class="summery-headline">
                    Reports Summery
                </div>


                <ul class="list-summery">

                    <li class="Bulling">Bulling</li>
                    <section class="progress">
                        <div class="progress-done" data-done="88">87.2%</div>
                    </section>


                    <li class="Cyberbulling">Cyberbulling</li>
                    <section class="progress2">
                        <div class="progress-done2" data-done="44">44.7%</div>
                    </section>


                    <li class="Child abuse"> Child abuse</li>
                    <section class="progress3">
                        <div class="progress-done3" data-done="10">10%</div>
                    </section>

                    <li class="Women attack">Women attack</li>
                    <section class="progress44">
                        <div class="progress-done44" data-done="55">15%</div>
                    </section>

                </ul>
            </section>
         

            <!--קופסא 2-->

            <section class="report-box">
                <div class="report-headline">
                    <span class="report-headline">
						Recent Reports<!--סליידר-->
					</span></div>
                <section class="r-b">
                    <div class="report-box2">
                        <span class="report-headline2">
						22 November
					</span>
                        <p>
                            -Women abuse, Tel Aviv.<br> -Child abuse, Ramat Gan.<br> -Street bulling, Nahariya.<br>
                        </p>
                        <a href="#" class="cal3"><img src="images/cal3.png"></a>
                        <a href="#" class="cal4"><img src="images/cal4.png"></a>
                    </div>



                    <div class="report-box3">
                        <span class="report-headline2">
						24 November
					</span>
                        <p>
                            -Women attack, Dimona.<br> -Street Bulling, Tel Aviv.<br> -Store Attack, Eilat.<br> -Teenager Abuse, Rishpon.<br>
                        </p>

                        <div>
                            <a href="#" class="cal1"><img src="images/cal1.png"></a>
                            <a href="#" class="cal2"><img src="images/cal2.png"></a>
                        </div>
                    </div>
                </section>

            </section>

            <section class="choose-buttons">
                <div>
                    <span>Choose service</span>
                </div>
                <button class="btn3">New Call<br>
				<img src="images/phone.png">
			</button>
                <button class="btn3">Chat<br>
				<img src="images/chat.png">
			</button>

                <button class="btn3">SOS<br>
				<img src="images/sos.png">
			</button>   </section>
                <section class="btn3-sec">
                    <div>
                        <span>Apps You used before</span>
                    </div>
                    <button class="btn3">Support team<br>
				<img src="images/pieps.png">
			</button>
                    <button class="btn3">Protect yourself<br>
				<img src="images/eye.png">
			</button>

                    <button class="btn3">Here for you<br>
				<img src="images/man.png">
			</button>
                </section>



            </section>


        </div>
  <section class="menuA">
            <a class="exitMenu " href="# "></a>
            <ul class="menuC">
                    <li ><a href="#"><img src="images/face.png">Walk and talk</a></li>
                    

                    <li><a href="#" ><img src="images/swap.png">Connect social media</a></li>
                   


                    <li><a href="#" ><img src="images/men.png">Here for you</a></li>
                   

                    <li><a href="#" ><img src="images/eye.png">Protect yourself</a></li>
                    

                    <li><a href="#" ><img src="images/mes.png">Contact & info</a></li>
                    

                    <li><a href="#" ><img src="images/man.png">Support team </a></li>
                    <li><a href="#" ><img src="images/gavel.png">Stand by me</a></li>
                    <li><a href="#" ><img src="images/question.png">Sharing is caring</a></li>
                 
               
            </ul>
        </section>
    </main>
    <footer>
    <section class="footer ">
        <section class="footer-right ">
            <button class="chat ">chat  <img src="images/sms.png " ></button>
            <section>FOLLOW US</section>
            <img src="images/facebook.png ">
        </section>
        <section>©2021 Redhood US LLC. All Rights Reserved</section>
    </section>
    <div class="mobile ">
        <section>
            <a href="# "><img src="images/Home.png "></a>
        </section>
        <section>
            <a href="# "><img src="images/Account.png "></a>
        </section>
        <section>
            <a href="# "><img src="images/Call.png "></a>
        </section>
        <section>
            <a href="# "><img src="images/Search.png "></a>
        </section>
    </div>
</footer><script>
    window.onload=function(){
        openMenu();
        closeMenu();
         dele();
    };
</script>
</body>

</html>

<?php
    //close DB connection
    mysqli_close($connection);
    ?>