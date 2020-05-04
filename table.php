<html>
   <head>
	   <!--TO Support Many Language Include Arabic Language-->
        <meta charset="utf-8"/>
	   
	   <!--For Internet Explorer-->
	    <meta http-equiv="X-UA-	Compatible"content="IE=edge">
	   
	   <!--First mobilw meta-->
	    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	   
        <meta name="description"content="mt company">
        <title>Forex</title>
        <link   
             rel = "icon" 
            href ="img/logo.png" 
            type = "image/x-icon">
        <!--call bootstrap-->
	    <link rel="stylesheet"href="css/bootstrap.css"/>
		<!--Page Style-->	   
		<link rel="stylesheet"href="css/main.css"/>
       <!--Animate.css-->
       <link rel="stylesheet"href="css/animate.min.css"/>
       <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/sweetalert2@7.12.15/dist/sweetalert2.min.css'>  
       <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">      
       <script src="https://kit.fontawesome.com/ef503aa28e.js" crossorigin="anonymous"></script>
       <link href="https://fonts.googleapis.com/css?family=Pacifico"rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet"><!---AOS LAIBIRARY-->
       <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
	   <!--Internet Explorer-->
	    <script src="js/html5shiv.min.js"></script>
       <script src="js/respond.min.js"></script>
       <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

       <style>
:root {
	--color-primary: #eb2f64;
	--color-primary-light: #FF3366;
	--color-primary-dark: #BA265D;

	--grey-light-1: #faf9f9;
	--grey-light-2: #f4f2f2;
	--grey-light-3: #f0eeee;
	--grey-light-4: #ccc;

	--grey-dark-1: #333;
	--grey-dark-2: #777;
	--grey-dark-3: #999;

	--shadow-dark: 0 2rem 6rem rgba(0, 0, 0, 0.3);
	--shadow-light:0 2rem 5rem rgba(0,0,0,.06);
	
	--line: 1px solid var(--grey-light-2);
}

		table {
  			font-family: arial, sans-serif;
  			border-collapse: collapse;
  			width: 100%;
  			font-size: 2rem;
  			
		}

		td, th {
		  
		  text-align: left;
		  padding: 8px;
		}
		th{
			border: 1px solid rgba(221,221,221,0.5);
		}
		tr:not(:last-child){
			border-bottom: 1px solid rgba(221,221,221,0.5);
		}
		td:not(:last-child){
			border-right: 1px solid rgba(221,221,221,0.5);
		}
		th {
			color: yellow;
		}

		td:nth-child(1) {
		  color: #5a9cce;
		}
		.buy{
			color: #24a69a;
		}
		.sell{
			color: #de5859;
		}

		  .search_input {
		  	display: block;
		    font-family: inherit;
		    font-size: 1.3rem;
		    color: black;
		    background-color:  var(--grey-light-2);
		    border: none;
		    padding: .7rem 2rem;
		    border-radius: 10rem;
		    width: 10%;
		    margin-left: auto;
		    margin-bottom: 0.3rem;
		    transition: all 0.2s; }
		    .search_input:focus {
		      background-color: var(--grey-light-3);
		      outline: none;
		      width: 15%; }
		    .search_input::placeholder {
		      font-weight: 100;
		      color: var(--grey-dark-3); }

          .navbar-light .navbar-nav .show > .nav-link, .navbar-light .navbar-nav 
        .active > .nav-link, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active {
            color: rgba(255, 255, 255, 0.9) !important;
        }
        .navbar-light .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.7);
        }
		.navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, 0.5);
        border-color: rgba(0, 0, 0, 0.1);
        background-color: #FFF;
        }
        @media (min-width: 992px) {
          .navbar-expand-lg .navbar-nav .nav-link {
              padding-right: 1rem !important;
              padding-left: 2rem;
              padding-top: 1.5rem;
              padding-bottom: 1.5rem;
              color: #FFF;
              font-size: 14px;
              margin-left:10px
          }
        }
       </style>
	   <!---->
	</head>
	<body style="background-color:#000">
      <!---- NavBar Section ---->
      <header class="header">
        <div class="container">
          <nav class="header__nav">
            <div class="d-flex justify-content-between">
              <div class="header__nav--tools-notifications">
                <a href="index.html"><img src="LOGO.png" style="width:170px ; height:100px"></a>
              </div>
  
              <div class="header__nav--tools-edit" style="padding-top:3.3rem">
  
                <div class="dropdown">
                  <a href="#"class="dropdown__dropbtn"><img src="img/user.jpg" alt="" style="width: 40px;border-radius: 50%;"></a>
                  <div class="dropdown__content">
                    <a href="#">Logout</a>
                  </div>
                </div>
  
              </div>
  
            </div>
          </nav>
        </div>
      </header>
      
      <nav class="navbar navbar-expand-lg navbar-light" style="padding:2rem">
        <div class="container">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="nav navbar-nav navbar-auto ml-auto">
                <li class="nav-item  active">
                    <a class="nav-link text-center" style="border:1px solid #d5d5d5" href="index.php"> <i class="fas fa-chart-line"></i><br> Forex Dashboard <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" style="border:1px solid #d5d5d5" href="index-liquidity.php"><i class="fas fa-chart-line"></i><br> Index Liquidity </a> 
                </li>
                <li class="nav-item">
                  <a class="nav-link text-center" style="border:1px solid #d5d5d5" href="currence_liquidity.php"><i class="fas fa-chart-line"></i><br> Currency Pairs Liquidity</a> 
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" style="border:1px solid #d5d5d5" href="index-frames.php"><i class="fas fa-chart-line"></i><br> Index Frames</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link text-center" style="border:1px solid #d5d5d5" href="currency-basket.php"><i class="fas fa-chart-line"></i><br> Currency Basket </a>
                </li>
                <li class="nav-item">
				<a class="nav-link text-center" style="border:1px solid #d5d5d5" href="daily.html"><i class="fas fa-chart-line"></i><br> Daily Market Liquidity </a>
                </li>

            </ul>
        </div>
      </div>
 

    </nav>

  	<div class="container" style="overflow-x:scroll">
        <input type="text" id="search" class="search_input" placeholder="Search Date">
     
		<table>
		  <tr>
		    <th>Cuerrency</th>
		    <th>Signal</th>
		    <th>Power</th>
		    <th>Time</th>
		    <th>Date</th>
		  </tr>
		</table>
	</div>
	<script type="text/javascript">
		<?php date_default_timezone_set("Africa/Cairo");?>
		function getData () {
			var search = document.querySelector('#search').value;
			if (search == "") {
				search = "<?php echo (date("Y-m-d")) ?>";
				console.log(search);
			}
			firebase.database().ref('alerts').child(search).once('value').then(function(snapshot) {
  				if(snapshot.exists()){
  					console.log(snapshot);
  					var td = document.createElement("tr");
  					td.innerHTML = 	"<th>Cuerrency</th>"+
					    				"<th>Signal</th>"+
									    "<th>Power</th>"+
									    "<th>Time</th>"+
									    "<th>Date</th>";
					document.querySelector("table").innerHTML = '';
					document.querySelector("table").appendChild(td);
  					snapshot.forEach(function(childSnapshot) {
  						var data = childSnapshot.val();
  						var num = (data.power == "buy") ? 70:20;
  						var td = document.createElement("tr");
            			td.innerHTML = 	"<td>"+data.currency+"</td>"+
									    "<td class='"+ data.power+"'>"+data.power+"</td>"+
									    "<td class='"+ data.power+"'>"+num+"</td>"+
									    "<td>"+data.time+"</td>"+
									    "<td>"+search+"</td>";
						document.querySelector("table").appendChild(td);
    					
  					});
  				}
  			});
		}
		document.addEventListener('DOMContentLoaded', () => {
			getData();

   			document.querySelector('#search').onchange = ()=>{getData()};

		});

		</script>
	    <script src="js/particles.js"></script>
		<script src="js/app.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
		<script src="https://cdn.jsdelivr.net/npm/promise-polyfill"></script>
		<script src="../js/wow.min.js"></script>
		<script>
		new WOW().init();
		</script>
		<script src="js/jQuery3.3.1.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
    	<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
		<script src="js/form.js"></script>
	</body>
  </body>
</html>
