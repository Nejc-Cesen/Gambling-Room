<?php
        session_start();

        $_SESSION["p1Score"];
        $_SESSION["p2Score"];
        $_SESSION["p3Score"];
        $_SESSION["p1"];
        $_SESSION["p2"];
        $_SESSION["p3"];
        $_SESSION["stevKoc"];
        $_SESSION["stevMet"];
        $_SESSION["stevVrz"];
        $max=$_SESSION["p1Score"];

        for($x=0;$x<3;$x++){
            if($max<$_SESSION["p2Score"])
                $max=$_SESSION["p2Score"];
            else if($max<$_SESSION["p3Score"]){
                $max=$_SESSION["p3Score"];
            }
        }
?>
<!DOCTYPE html>
<html lang="sl">
	<head>
        <title>Gambling Room</title>
		<meta charset="utf-8" >
        <link rel="stylesheet" href="css/style.css">
        <link rel="icon" type="image/x-icon" href="slike/vijola.png">
        <script src="js/konec.js"></script>
        
	</head>
	<body>
    <div id="fireworks"></div>
    <div class="main">
    <div id="title"></div>
        <div id="center">
            <form name="Obrazec" id="obrazec" method="post" autocomplete="off" action="igra.php">
                <div id="zmagovalec">
                    <?php
                        
                        if($max==$_SESSION["p1Score"] && $max==$_SESSION["p2Score"]){echo 'Izenačeno med igralcema '.$_SESSION["p1"].' in '.$_SESSION["p2"];}
                        elseif($max==$_SESSION["p1Score"] && $max==$_SESSION["p3Score"]){echo 'Izenačeno med igralcema '.$_SESSION["p1"].' in '.$_SESSION["p3"];}
                        elseif($max==$_SESSION["p3Score"] && $max==$_SESSION["p2Score"]){echo 'Izenačeno med igralcema '.$_SESSION["p3"].' in '.$_SESSION["p2"];}
                        elseif($max==$_SESSION["p1Score"]){echo 'Čestitke '.$_SESSION["p1"].', zmagali ste!';}
                        elseif($max==$_SESSION["p2Score"]){echo 'Čestitke '.$_SESSION["p2"].', zmagali ste!';}
                        elseif($max==$_SESSION["p3Score"]){echo 'Čestitke '.$_SESSION["p3"].', zmagali ste!';}
                        else{
                            echo 'VSI STE IZENAČENI. NI ZMAGOVALCEV';
                        }
                    ?>
                    <br>
                </div>
                <div class="igralci" id="igralci">
                    <?php echo $_SESSION["p1"];  ?></br>
                    <?php echo $_SESSION["p1Score"];  ?></br>
                </div>
                <div class="igralci" id="igralci">
                    <?php echo $_SESSION["p2"];  ?></br>
                    <?php echo $_SESSION["p2Score"];  ?></br>
                </div>
                <div class="igralci" id="igralci">
                    <?php echo $_SESSION["p3"];  ?></br>
                    <?php echo $_SESSION["p3Score"];  ?></br>
                </div>
                <div  class="dol" id="dol">
                    <button id="nazaj" type="button" onclick="window.location.href='index.php'">Nazaj na začetno stran</button>
                </div>
            </form>
        </div>
        </div>
	</body>
</html>