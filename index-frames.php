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
       <link href="https://fonts.googleapis.com/css2?family=Lora:ital@1&display=swap" rel="stylesheet">
       <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">      
       <script src="https://kit.fontawesome.com/ef503aa28e.js" crossorigin="anonymous"></script>
       <link href="https://fonts.googleapis.com/css?family=Pacifico"rel="stylesheet">
       <link href="https://fonts.googleapis.com/css?family=Exo+2&display=swap" rel="stylesheet"><!---AOS LAIBIRARY-->
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
  			
		}

		td, th {
		  
      border: 1px solid #FFF;
      color:#FFF;
      font-size:22px;
		}
		th{
			border: 1px solid #FFF;
		}
		th {
			color: yellow;
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
              padding-right: 3rem !important;
              padding-left: 3rem;
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
                    <a style="font-size:18px" href="#">Logout</a>
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
                    <a class="nav-link text-center" style="border:1px solid #d5d5d5 ; background-color:#007bff" href="index-frames.php"><i class="fas fa-chart-line"></i><br> Index Frames</a>
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
      <main style="margin-top:7rem">
        <div class="container">
            <div id="wrapper" style="overflow-x:auto;">
              <table  class="table table-striped"id="memo">

              </table>
            </div>
        </div>
      </main>

      

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jQuery3.3.1.min.js"></script>
    

    <script>
      var dataToTable = function (dataset) {
        var count = 6 ; 
        var html;

        html = '<tr>';
        for(i=0;i<dataset.length/count;i++) {
          html += '<th>' + dataset[i] + '</th>';
        }
        html += '</tr>';


        html += '<tr>';
        html+='<td  style="color:yellow">D1</td>'
        for( i=dataset.length/count+1 ; i<dataset.length/count*2;i++) {
          html += '<td style="background-color:'+(dataset[i]>3&&dataset[i]<=6?("yellow;color:blue"):(dataset[i]<=3?"red":"green"))+'">' + dataset[i] + '</td>';
        }
        html += '</tr>';

        html += '<tr>';
        html+='<td style="color:yellow">H4</td>'
        for( i=dataset.length/count*2 + 1 ; i<dataset.length/count*3;i++) {
          html += '<td style="background-color:'+(dataset[i]>3&&dataset[i]<=6?("yellow;color:blue"):(dataset[i]<=3?"red":"green"))+'">' + dataset[i] + '</td>';

          // if(dataset[i] <= 5) {
          //   console.log($('#table-cel').text());
          //   $('#table-cel').css({
          //     "background-color": "red",
          //   });
          // }
        }
        html += '</tr>';

        html += '<tr>';
        html+='<td style="color:yellow">H1</td>'
        for( i=dataset.length/count*3 + 1 ; i<dataset.length/count*4;i++) {
          html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">' +(dataset[i]<0 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:16px"  class="fas fa-arrow-down"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:16px"  class="fas fa-arrow-up"></i>')+ dataset[i] + '</td>';
        }
        html += '</tr>';

        html += '<tr>';
        html+='<td style="color:yellow">M30</td>'
        for( i=dataset.length/count*4 + 1 ; i<dataset.length/count*5;i++) {
          html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">' +(dataset[i]<0 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:16px"  class="fas fa-arrow-down"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:16px"  class="fas fa-arrow-up"></i>')+ dataset[i] + '</td>';

        }
        html += '</tr>';

        html += '<tr>';
        html+='<td style="color:yellow">M15</td>'
        for( i=dataset.length/count*5 + 1 ; i<dataset.length/count*6;i++) {
          html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">' +(dataset[i]<0 ? '<i style="margin-left:-5px; margin-right:5px ; font-size:16px"  class="fas fa-arrow-down"></i>':'<i style="margin-left:-5px; margin-right:5px ; font-size:16px"  class="fas fa-arrow-up"></i>')+ dataset[i] + '</td>';
        }
        html += '</tr>';
      
        document.getElementById('memo').innerHTML=html;
    };
    var usd_arr = [1,4,0],
      jpy_arr = [0,0,0],
      gbp_arr = [0,0,0],
      eur_arr = [0,0,0],
      aud_arr = [0,0,0],
      nzd_arr = [0,0,0],
      cad_arr = [0,0,0],
      chf_arr = [0,0,0];
    var data = {
      labels: ["January", "February", "March"],
      datasets: [
          {
              label: "USD",
              fillColor: "rgba(220,220,220,0.2)",
              strokeColor: "rgba(220,220,220,1)",
              pointColor: "rgba(220,220,220,1)",
              pointStrokeColor: "#fff",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(220,220,220,1)",
              data: usd_arr
          },
          {
              label: "JPY",
              fillColor: "rgba(151,187,205,0.2)",
              strokeColor: "rgba(151,187,205,1)",
              pointColor: "rgba(151,187,205,1)",
              pointStrokeColor: "#fff",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(151,187,205,1)",
              data: jpy_arr
          },
          {
              label: "GBP",
              fillColor: "rgba(55,187,205,0.2)",
              strokeColor: "rgba(55,187,205,1)",
              pointColor: "rgba(55,187,205,1)",
              pointStrokeColor: "#fff",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(151,187,205,1)",
              data: gbp_arr
          },
          {
              label: "EUR",
              fillColor: "rgba(55,187,205,0.2)",
              strokeColor: "rgba(55,187,205,1)",
              pointColor: "rgba(55,187,205,1)",
              pointStrokeColor: "#fff",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(151,187,205,1)",
              data: eur_arr
          },
          {
              label: "AUD",
              fillColor: "rgba(55,187,205,0.2)",
              strokeColor: "rgba(55,187,205,1)",
              pointColor: "rgba(55,187,205,1)",
              pointStrokeColor: "#fff",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(151,187,205,1)",
              data: aud_arr
          },
          {
              label: "NZD",
              fillColor: "rgba(55,187,205,0.2)",
              strokeColor: "rgba(55,187,205,1)",
              pointColor: "rgba(55,187,205,1)",
              pointStrokeColor: "#fff",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(151,187,205,1)",
              data: nzd_arr
          },
          {
              label: "CAD",
              fillColor: "rgba(55,187,205,0.2)",
              strokeColor: "rgba(55,187,205,1)",
              pointColor: "rgba(55,187,205,1)",
              pointStrokeColor: "#fff",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(151,187,205,1)",
              data: cad_arr
          },
          {
              label: "CHF",
              fillColor: "rgba(55,187,205,0.2)",
              strokeColor: "rgba(55,187,205,1)",
              pointColor: "rgba(55,187,205,1)",
              pointStrokeColor: "#fff",
              pointHighlightFill: "#fff",
              pointHighlightStroke: "rgba(151,187,205,1)",
              data: chf_arr
          },
      ]
    };

      function updatechart(){
          const request = new XMLHttpRequest();
          request.open('POST','index-frames-json.php');
          // Callback function for when request completes
          request.onload = () => {
              // Extract JSON data from request
              
              const data = JSON.parse(request.responseText);
              usd_arr = [];
              jpy_arr = [];
              gbp_arr = [];
              eur_arr = [];
              aud_arr = [];
              nzd_arr = [];
              cad_arr = [];
              chf_arr = [];
              for(i in data ){
                  usd_arr.push(data[i]);
              }
              // console.log(usd_arr)
              
          // alert(data.datasets[0].data[0])
          // data.update();
              dataToTable(usd_arr);
          }
          request.send();
          // alert(usd_arr)
          
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