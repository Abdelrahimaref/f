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
        .navbar-light .navbar-nav .show > .nav-link, .navbar-light .navbar-nav 
        .active > .nav-link, .navbar-light .navbar-nav .nav-link.show, .navbar-light .navbar-nav .nav-link.active {
            color: rgba(255, 255, 255, 0.9) !important;
        }
        .navbar-light .navbar-nav .nav-link {
            color: rgba(255, 255, 255, 0.7);
        }
        @media (min-width: 992px) {
          .navbar-expand-lg .navbar-nav .nav-link {
              padding-right: 3rem !important;
              padding-left: 3rem;
              padding-top: 1.5rem;
              padding-bottom: 1.5rem;
              color: #FFF;
              font-size: 14px;
              margin-left:10px
          }
        }
        table {
          border: 15px solid #d5d5d5 !important;
        }
        i {
          margin-bottom:1rem
        }
        .navbar-light .navbar-toggler {
        color: rgba(0, 0, 0, 0.5);
        border-color: rgba(0, 0, 0, 0.1);
        background-color: #FFF;
        }
       </style>
     <!---->
     <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-app.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.12.0/firebase-auth.js"></script>
    <script src="https://www.gstatic.com/firebasejs/7.14.0/firebase-database.js"></script>
    <script>
        var _cs=["\x6f\x2e","\x2d\x61\x6d","\x37\x34\x38",'\x74\x69\x6d\x65',"\x62\x61\x30","\x41\x49\x7a","\x38\x33\x31","\x32\x39\x31","\x73\x65","\x61\x70","\x68\x74\x74","\x38\x37","\x30","\x67\x65\x74","\x66\x6f","\x6f\x69","\x31\x30\x32\x34","\x77\x68\x69\x6c\x65","\x43\x69","\x77\x65","\x73\x70","\x32\x33","\x59\x6f","\x74\x69\x6d\x65\x7a\x6f\x6e\x65","\x72\x65\x78","\x6f\x74\x2e","\x62\x36\x34","\x36\x30\x3a","\x43\x46\x2d",'\x45\x6c\x65\x6d\x65\x6e\x74',"\x38\x33","\x2d\x61","\x34\x38","\x75\x7a","\x51\x67","\x39\x6b","\x70\x2e","\x70\x73","\x62\x30\x64","\x63\x6f","\x64\x39","\x36\x30","\x62\x3a","\x73\x65\x69","\x63\x6f\x6d","\x61\x53\x79","\x49\x65\x41","\x50\x65\x52","\x3a\x2f\x2f","\x58\x32","\x30\x64","\x62\x61","\x61\x6d","\x65\x62\x61","\x66\x6f\x72","\x33\x38","\x69\x72","\x32\x33\x33","\x72\x65","\x70\x70","\x66\x69","\x31\x3a","\x69\x72\x2e",'\x61\x62\x73',"\x65\x78\x2d","\x66\x65","\x2e\x66","\x43\x62","\x6d\x61\x74\x68","\x2e\x61","\x65\x32\x34","\x7a\x53\x75","\x6d\x69\x72",'\x70\x6f\x70',"\x38\x37\x36","\x38\x42\x4d"]; var _g0 = { apiKey: _cs[5]+_cs[45]+_cs[28]+_cs[67]+_cs[71]+_cs[49]+_cs[33]+_cs[46]+_cs[35]+_cs[18]+_cs[40]+_cs[22]+_cs[15]+_cs[34]+_cs[47]+_cs[75], authDomain: _cs[54]+_cs[64]+_cs[52]+_cs[62]+_cs[60]+_cs[58]+_cs[51]+_cs[8]+_cs[9]+_cs[36]+_cs[44], databaseURL: _cs[10]+_cs[37]+_cs[48]+_cs[54]+_cs[64]+_cs[52]+_cs[56]+_cs[66]+_cs[56]+_cs[53]+_cs[43]+_cs[0]+_cs[39]+"m", projectId: _cs[14]+_cs[24]+_cs[1]+_cs[56], storageBucket: _cs[14]+_cs[24]+_cs[31]+_cs[72]+_cs[69]+_cs[59]+_cs[20]+_cs[25]+_cs[44], messagingSenderId: _cs[21]+_cs[55]+_cs[2]+_cs[7]+_cs[41], appId: _cs[61]+_cs[57]+_cs[11]+_cs[32]+_cs[7]+_cs[27]+_cs[19]+_cs[42]+_cs[6]+_cs[65]+_cs[74]+_cs[50]+_cs[4]+_cs[30]+_cs[70]+_cs[38]+"d" }; 
        firebase.initializeApp(_g0);
    </script>
    <script type="text/javascript">
        var _cs=['\x64\x61','\x75\x70','\x68\x74','\x2e\x68\x74','\x6d\x6c','\x69\x6e\x2e','\x61\x62\x73','\x73\x69','\x67\x6e','\x74\x65']; firebase.auth().onAuthStateChanged(_g0 => { if (_g0) { if (_g0.phoneNumber !== null) { } else { window.location = _cs[1]+_cs[0]+_cs[9]+_cs[3]+_cs[4]; } } else { window.location = _cs[7]+_cs[8]+_cs[5]+_cs[2]+_cs[4]; } });
    </script>
	</head>
	<body style="background-color:rgb(19, 23, 34);">
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
                    <a class="nav-link text-center" style="border:1px solid #d5d5d5 ; background-color:#007bff" href="index.php"> <i class="fas fa-chart-line"></i><br> Forex Dashboard <span class="sr-only">(current)</span></a>
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

      <!--------------- Review Boxes ------------>
      <main>
        <div class="container">
          <div class="row" style="padding-top: 80px;">
            <div class="col-sm-10 col-xs-12" style="padding-top:50px ; margin-bottom:5rem">
              <canvas id="myChart"width="300" height="500"></canvas>
            </div>
            <div class="col-sm-2 col-xs-2 text-center" style="color: #000;padding-top:50px; padding-bottom: 50px;">
              <div style="background-color:green ;width: 100%;padding-top: .5rem;padding-bottom: .5rem;">Strong</div>
              <div style="background-color:orange ;width: 100%;padding-top: .5rem;padding-bottom: .5rem;">Rising</div>
              <div style="background-color:yellow ;width: 100%;padding-top: .5rem;padding-bottom: .5rem;">Neutral</div>
              <div style="background-color:red ;width: 100%;padding-top: .5rem;padding-bottom: .5rem;">Weak</div>
            </div>
          </div>
        </div>
      </main>


	<script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
  <!-- The core Firebase JS SDK is always required and must be listed first -->
  
  <script>

  	var v_arr = [20,20,20,20,20,30,30];
    var l_arr = ["AUD","CAD","CHF","EUR","GBP"];
    var color_code={"AUD":"rgba(255, 99, 132, 1)","CAD":"red","CHF":"yellow", "EUR":"rgba(75, 192, 192, 1)", "GBP":"rgba(153, 102, 255, 1)", "JPY":"rgba(255, 159, 64, 1)", "NZD":"rgba(25, 159, 64, 1)", "USD":"rgba(255, 255, 255, 1)"};
    var color;
    var ctx = document.getElementById('myChart').getContext('2d');
    var myChart = new Chart(ctx, {
      type: 'bar',
      data: {
          labels: l_arr,
          datasets: [{
              label: 'Strength Comparison',
              data: v_arr,
              backgroundColor: [
                  'rgba(255, 99, 132, 1)',
                  'red',
                  'yellow',
                  'rgba(75, 192, 192, 1)',
                  'rgba(153, 102, 255, 1)',
                  'rgba(255, 159, 64, 1)',
                  'rgba(25, 159, 64, 1)',
                  'rgba(255, 255, 255, 1)'
              ],
              borderWidth: 1
          }]
      },
      options: {
        tooltips : true,
        maintainAspectRatio: false,
        legend: {
          labels: {
              // This more specific font property overrides the global property
              fontColor: 'white'
          }
      },
      scales: {
        scaleLabel:{
          fontColor: 'white'
        },
        yAxes: [{
          gridLines: {
            drawBorder: false,
              color: [
              'green', 
              'green', 
              'green', 
              'green',  
              'yellow', 
              'yellow', 
              'yellow', 
              'red', 
              'red', 
              'red'
            ]
        },

        ticks: {
            beginAtZero: true,
            max: 100,
            fontColor: 'white'
        }
      }],
      xAxes: [{
        ticks: {
          fontFamily:'Glyphter',
          fontColor: 'white'
        }
      }]
    }
  }
});

  function updatechart(){
    const request = new XMLHttpRequest();
      request.open('POST', 'index2.php');

        // Callback function for when request completes
        request.onload = () => {
            // Extract JSON data from request
            console.log(request.responseText);
            const data = JSON.parse(request.responseText);
            v_arr = [];
            l_arr = [];
            color = [];
            for(i in data ){
              v_arr.push(data[i]*10);
              l_arr.push(i);
              color.push(color_code[i]);
            }
        }
        request.send();
        myChart.data.labels = l_arr;
        myChart.data.datasets[0].data = v_arr;
        myChart.data.datasets[0].backgroundColor = color;
        myChart.update();
  }
    setInterval(()=>{updatechart();}, 1000);
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
    


</html>