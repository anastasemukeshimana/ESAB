<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
	<style type="text/css">
//<?php 
    //session_start();
	//include_once'session.php'; 
	//?>
	form{
			width: 40%;
			height: auto;
			background-color: #fff;
			margin-left: 30%;			
			border-radius: 10px;
			margin-top: 270px;
			margin-bottom: 150px;
			border-collapse: collapse;

		}
	.headmenu{
		width: 100%;
		height: 270px;
		top: 0;
		position: fixed;

	}
	.head{
		width: 100%;
		height: 200px;
		background-color: lightgoldenrodyellow;
		border-radius: 10px;
	}
     .logo{
     	width: 20%;
     	height: 70px;
       }
     img{
     	width: 80%;
     	height: 70px;
     }
      
      .title{
      	color: #123456;
      	width: 60%;
      	height: 60px;
      	
      	margin-top: -103px;
      	margin-left: 20%;
      }

      .search{
      	margin-left: 20%;
      	width: 20%;
      	text-align: center;
      	margin-top: -55px;
      	margin-left: 80%;

      	

      }

		.menu{
			width: 100%;
			height: 70px;
			border-radius: 10px;
			background-color: #123456;
		}
		a{
			font-size: 30px;
			text-transform: capitalize;
			text-decoration: none;
			color: ivory;
			margin-top: 17px;
			padding: 25px;
		}
		table{
			margin-left: 7%;
			border: none;
			align-content: center;
		}
		.left{
			width: 25%;
			height: 620px;
			background-color: #eee;
			margin-top: 250px;
			position: fixed;
			background-image: url('images/img26.png');
             background-repeat: no-repeat;
             background: cover;
             
		}
		.right{
             margin-left: 75%;
             background-color: #eee;
             width: 25%;
             height: 620px;
             position: fixed;
             background-image: url('images/img3.jpg');
             background-repeat: no-repeat;
             background: cover;
             margin-top: 250px;
		}
         .content{
         	margin-left: 25%;
         	width: 50%;
         	height: 620;
         	scroll-behavior: ;
         	position: absolute;
         	

         }
         body{
         	background-color: #bbb;
         }
         .footer{
         	margin-left: 0%;
         	position: fixed;
         	bottom: 0;
         	width: 100%;
         	height: 90px;
         	background-color: #D0DAEE;
         	text-align: center;
         }
         @keyframes example{
			from{
				background-image: url(logo.jpg);
			}
			to{
				background-image: url(img26.png);
			}
		}
          .anima{
          	animation-name: example;
             animation-iteration-count: infinite;
             animation-delay: 5s;
             height: 30vh;
             width: 30vw;
             position: absolute;
         }
         p,a{
         	
         	color: steelblue;
         }
         tr,td,a{
         	margin-top: -10px;
         	margin-left: 35%;      	
         }
#a{
	font-size: 18px;
}
		
	</style>
</head>
<body>
	<div class="headmenu">
	<div class="head">
		<div class="logo">
			<img src="images/img27.png">
		     </div>
		      <div class="title">
		      	<h1 style="color: #123456; font-family: fantasy; font-size: 50PX; text-align: center; margin-top: 30px;">KAINE FC</h1>			
		      	<tr><td><a href="login.php" id="a">President:Jeff MUHINYUZA</a></td></tr>
			<tr><td><a href="login.php" id="a">Manager:Dreck GATO</a></td></tr>
			<tr><td><a href="login.php" id="a">Secretary:Jeanne KAYITARE</a></td></tr>
			<tr><td><a href="login.php" id="a">Captain:Rico Pie</a></td></tr>
			<tr><td><a href="login.php" id="a">Accountant:Monday Chrito</a></td>
			
		</div>
		<div class="search">
			<input type="text" name="search" style="width: 60%"><input type="submit" name="send" value="search" style="width: 20%; margin-left:72%; margin-top: -40px; font-size: 20px; background: #ccc; height: 40px;">
		</div>
	</div>
	<div class="menu">
	<table>
	<th><a href="users.php">Manager</a></th>
	<th><a href="matches.php">Matches</a></th>
	<th><a href="adversaries.php">Adversaries</a></th>
	<th><a href="referees.php">Referees</a></th>
	<th><a href="week1.php">Report</a></th>
	<th><a href="logout.php">logout</a></th>
	</table>
	</div>
	</div>
	<div class="left">
		<p style="margin-top: 40px;text-align: center; color: ;">Our external links<br><br>
<a href="https://www.ferwafa.rw"> for FERWAFA </a><BR><a href="https://www.fifa.com"> for FIFA</a><BR><a href="https://www.moh.gov.rw"> for MINISANTE</a>
		</p>
	</div>
	<div class="content"></div>
	<div class="right">
		<h2 style="margin-top: 40px;"><u>ANOUNCEMENT</u></h2>
		<marquee><p></p>On 1<sup>st</sup> september 2022,the The Captain of KAINE FC has announced that there is a much between KAINE FC and Gasabo Veterans at Nyamiramo play ground.</marquee>
	</div>
	<div class="footer">
		<h4>&copy;Copyright By IDUHA IRAKOZE Reponse </h4>
		<h4>E-mail:&nbsp;&nbsp;&nbsp;iduhairakoze@gmail.com</h4>
		<h4>Facebook:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Reponse Reponse</h4>
		<h4>Instagram:&nbsp;&nbsp;&nbsp;Reponse Reponse</h4>
		<h4>Tel:&nbsp;&nbsp;&nbsp;0785508162</h4>
	</div>
	
	
	</div>
</body>
</html>