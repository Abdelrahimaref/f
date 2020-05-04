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
    td:nth-child(1) {
		  color: yellow;
      background-color:transparent !important;
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
                    <a class="nav-link text-center" style="border:1px solid #d5d5d5 ; background-color:#007bff" href="currency-basket.php"><i class="fas fa-chart-line"></i><br> Currency Basket </a>
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
            <div class="row">
                <div class="col-md-12" style="overflow-x:auto;">
                    <h3 class="text-center" style="border: 1px solid #FFF; padding:10px; margin-bottom:0px ; color:yellow">AUD</h3>
                    <table class="table  table-striped text-center" id="memo"></table>
                </div>

                <div class="col-md-12" style="margin-top:6rem ; overflow-x:auto;">
                    <h3 class="text-center" style="border: 1px solid #FFF; padding:10px; margin-bottom:0px ; color:yellow">CAD</h3>
                    <table class="table  table-striped text-center" id="memo2"></table>
                </div>

                <div class="col-md-12" style="margin-top:6rem ; overflow-x:auto;">
                    <h3 class="text-center" style="border: 1px solid #FFF; padding:10px; margin-bottom:0px ; color:yellow">CHF</h3>
                    <table class="table  table-striped text-center" id="memo3"></table>
                </div>

                <div class="col-md-12" style="margin-top:6rem ; overflow-x:auto;">
                    <h3 class="text-center" style="border: 1px solid #FFF; padding:10px; margin-bottom:0px ; color:yellow" >EUR</h3>
                    <table class="table  table-striped text-center" id="memo4"></table>
                </div>

                <div class="col-md-12"style="margin-top:6rem ; overflow-x:auto;">
                    <h3 class="text-center" style="border: 1px solid #FFF; padding:10px; margin-bottom:0px ; color:yellow" >GBP</h3>
                    <table class="table  table-striped text-center" id="memo5"></table>
                </div>

                <div class="col-md-12" style="margin-top:6rem ; overflow-x:auto;">
                    <h3 class="text-center" style="border: 1px solid #FFF; padding:10px; margin-bottom:0px ; color:yellow" >JPY</h3>
                    <table class="table  table-striped text-center" id="memo6"></table>
                </div>

                <div class="col-md-12" style="margin-top:6rem ; overflow-x:auto;">
                    <h3 class="text-center" style="border: 1px solid #FFF; padding:10px; margin-bottom:0px ; color:yellow" >NZD</h3>
                    <table class="table  table-striped text-center" id="memo7"></table>
                </div>

                <div class="col-md-12" style="margin-top:6rem ; overflow-x:auto;">
                    <h3 class="text-center" style="border: 1px solid #FFF; padding:10px; margin-bottom:0px ; color:yellow" >USD</h3>
                    <table class="table  table-striped text-center" id="memo8"></table>
                </div>

            </div>
        </div>
      </main>

      

    <script src="https://cdn.jsdelivr.net/npm/chart.js@2.9.3/dist/Chart.min.js"></script>
    <script src="js/jQuery3.3.1.min.js"></script>
  <!-- The core Firebase JS SDK is always required and must be listed first -->

    

  
  <script>

    var dataToTable = function (dataset) {
        var count = 56 ; 
        var html  ,
            html2 ,
            html3 ,
            html4 ,
            html5 ,
            html6 ,
            html7 ;

      console.log(dataset.length);

      html = '<tr>';    
      for(i=0 ; i<dataset.length/count ; i++) {
        if(i==0)
        {
          html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html += '</tr>';


      html += '<tr>';
      for( i=dataset.length/count ; i<dataset.length/count*2;i++) {
        if(i==dataset.length/count)
        {
          html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html += '</tr>';


      html += '<tr>';
      for( i= dataset.length/count*2; i<dataset.length/count*3;i++) {
        if(i==dataset.length/count*2)
        {
          html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
        html += '</tr>';




        html += '<tr>';
      for( i=dataset.length/count*3 ; i<dataset.length/count*4;i++) {
        if(i==dataset.length/count*3)
        {
          html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html += '</tr>';



      html += '<tr>';
      for( i=dataset.length/count*4 ; i<dataset.length/count*5;i++) {
        if(i==dataset.length/count*4)
        {
          html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html += '</tr>';



      html += '<tr>';
      for( i=dataset.length/count*5 ; i<dataset.length/count*6;i++) {
        if(i==dataset.length/count*5)
        {
          html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html += '</tr>';



      html += '<tr>';
      for( i=dataset.length/count*6; i<dataset.length/count*7;i++) {
        if(i==dataset.length/count*6)
        {
          html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html += '</tr>';


      html2 = '<tr>';    
      for(i=dataset.length/count*7;i<dataset.length/count*8;i++) {
        if(i==dataset.length/count*7)
        {
          html2 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html2 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html2 += '</tr>';


      html2 += '<tr>';
      for( i=dataset.length/count*8 ; i<dataset.length/count*9;i++) {
        if(i==dataset.length/count*8)
        {
          html2 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html2 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html2 += '</tr>';


      html2 += '<tr>';
      for( i=dataset.length/count*9 ; i<dataset.length/count*10;i++) {
        if(i==dataset.length/count*9)
        {
          html2 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html2 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
        html2 += '</tr>';




        html2 += '<tr>';
      for( i=dataset.length/count*10 ; i<dataset.length/count*11;i++) {
        if(i==dataset.length/count*10)
        {
          html2 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html2 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html2 += '</tr>';



      html2 += '<tr>';
      for( i=dataset.length/count*11 ; i<dataset.length/count*12;i++) {
        if(i==dataset.length/count*11)
        {
          html2 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html2 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html2 += '</tr>';



      html2 += '<tr>';
      for( i=dataset.length/count*12 ; i<dataset.length/count*13;i++) {
        if(i==dataset.length/count*12)
        {
          html2 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html2 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html2 += '</tr>';



      html2 += '<tr>';
      for( i=dataset.length/count*13; i<dataset.length/count*14;i++) {
        if(i==dataset.length/count*13)
        {
          html2 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html2 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html2 += '</tr>';



      html3 = '<tr>';    
      for(i=dataset.length/count*14;i<dataset.length/count*15;i++) {
        if(i==dataset.length/count*14)
        {
          html3 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html3 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html3 += '</tr>';


      html3 += '<tr>';
      for( i=dataset.length/count*15 ; i<dataset.length/count*16;i++) {
        if(i==dataset.length/count*15)
        {
          html3 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html3 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html3 += '</tr>';


      html3 += '<tr>';
      for( i=dataset.length/count*16 ; i<dataset.length/count*17;i++) {
        if(i==dataset.length/count*16)
        {
          html3 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html3 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
        html3 += '</tr>';




        html3 += '<tr>';
      for( i=dataset.length/count*17 ; i<dataset.length/count*18;i++) {
        if(i==dataset.length/count*17)
        {
          html3 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html3 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html3 += '</tr>';



      html3 += '<tr>';
      for( i=dataset.length/count*18 ; i<dataset.length/count*19;i++) {
        if(i==dataset.length/count*18)
        {
          html3 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html3 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html3 += '</tr>';



      html3 += '<tr>';
      for( i=dataset.length/count*19 ; i<dataset.length/count*20;i++) {
        if(i==dataset.length/count*19)
        {
          html3 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html3 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html3 += '</tr>';



      html3 += '<tr>';
      for( i=dataset.length/count*20; i<dataset.length/count*21;i++) {
        if(i==dataset.length/count*20)
        {
          html3 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html3 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html3 += '</tr>';





      html4 = '<tr>';    
      for(i=dataset.length/count*21;i<dataset.length/count*22;i++) {
        if(i==dataset.length/count*21)
        {
          html4 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html4 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html4 += '</tr>';


      html4 += '<tr>';
      for( i=dataset.length/count*22 ; i<dataset.length/count*23;i++) {
        if(i==dataset.length/count*22)
        {
          html4 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html4 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html4 += '</tr>';


      html4 += '<tr>';
      for( i=dataset.length/count*23 ; i<dataset.length/count*24;i++) {
        if(i==dataset.length/count*23)
        {
          html4 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html4 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
        html4 += '</tr>';




        html4 += '<tr>';
      for( i=dataset.length/count*24; i<dataset.length/count*25;i++) {
        if(i==dataset.length/count*24)
        {
          html4 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html4 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html4 += '</tr>';



      html4 += '<tr>';
      for( i=dataset.length/count*25 ; i<dataset.length/count*26;i++) {
        if(i==dataset.length/count*25)
        {
          html4 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html4 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html4 += '</tr>';



      html4 += '<tr>';
      for( i=dataset.length/count*26 ; i<dataset.length/count*27;i++) {
        if(i==dataset.length/count*26)
        {
          html4 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html4 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html4 += '</tr>';



      html4 += '<tr>';
      for( i=dataset.length/count*27; i<dataset.length/count*28;i++) {
        if(i==dataset.length/count*27)
        {
          html4 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html4 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html4 += '</tr>';





      html5 = '<tr>';    
      for(i=dataset.length/count*28;i<dataset.length/count*29;i++) {
        if(i==dataset.length/count*28)
        {
          html5 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html5 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html5 += '</tr>';


      html5 += '<tr>';
      for( i=dataset.length/count*29 ; i<dataset.length/count*30;i++) {
        if(i==dataset.length/count*29)
        {
          html5 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html5 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html5 += '</tr>';


      html5 += '<tr>';
      for( i=dataset.length/count*30 ; i<dataset.length/count*31;i++) {
        if(i==dataset.length/count*30)
        {
          html5 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html5 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
        html5 += '</tr>';




        html5 += '<tr>';
      for( i=dataset.length/count*31 ; i<dataset.length/count*32;i++) {
        if(i==dataset.length/count*31)
        {
          html5 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html5 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html5 += '</tr>';



      html5 += '<tr>';
      for( i=dataset.length/count*32 ; i<dataset.length/count*33;i++) {
        if(i==dataset.length/count*32)
        {
          html5 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html5 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html5 += '</tr>';



      html5 += '<tr>';
      for( i=dataset.length/count*33 ; i<dataset.length/count*34;i++) {
        if(i==dataset.length/count*33)
        {
          html5 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html5 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html5 += '</tr>';



      html5 += '<tr>';
      for( i=dataset.length/count*34; i<dataset.length/count*35;i++) {
        if(i==dataset.length/count*34)
        {
          html5 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html5 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html5 += '</tr>';





      html6 = '<tr>';    
      for(i=dataset.length/count*35;i<dataset.length/count*36;i++) {
        if(i==dataset.length/count*35)
        {
          html6 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html6 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html6 += '</tr>';


      html6 += '<tr>';
      for( i=dataset.length/count*36 ; i<dataset.length/count*37;i++) {
        if(i==dataset.length/count*36)
        {
          html6 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html6 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html6 += '</tr>';


      html6 += '<tr>';
      for( i=dataset.length/count*37 ; i<dataset.length/count*38;i++) {
        if(i==dataset.length/count*37)
        {
          html6 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html6 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
        html6 += '</tr>';




        html6 += '<tr>';
      for( i=dataset.length/count*38 ; i<dataset.length/count*39;i++) {
        if(i==dataset.length/count*38)
        {
          html6 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html6 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html6 += '</tr>';



      html6 += '<tr>';
      for( i=dataset.length/count*39 ; i<dataset.length/count*40;i++) {
        if(i==dataset.length/count*39)
        {
          html6 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html6 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html6 += '</tr>';



      html6 += '<tr>';
      for( i=dataset.length/count*40 ; i<dataset.length/count*41;i++) {
        if(i==dataset.length/count*40)
        {
          html6 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html6 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html6 += '</tr>';



      html6 += '<tr>';
      for( i=dataset.length/count*41; i<dataset.length/count*42;i++) {
        if(i==dataset.length/count*41)
        {
          html6 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html6 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html6 += '</tr>';





      html7 = '<tr>';    
      for(i=dataset.length/count*42;i<dataset.length/count*43;i++) {
        if(i==dataset.length/count*42)
        {
          html7 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html7 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html7 += '</tr>';


      html7 += '<tr>';
      for( i=dataset.length/count*43 ; i<dataset.length/count*44;i++) {
        if(i==dataset.length/count*43)
        {
          html7 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html7 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html7 += '</tr>';


      html7 += '<tr>';
      for( i=dataset.length/count*44 ; i<dataset.length/count*45;i++) {
        if(i==dataset.length/count*44)
        {
          html7 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html7 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
        html7 += '</tr>';




        html7 += '<tr>';
      for( i=dataset.length/count*45 ; i<dataset.length/count*46;i++) {
        if(i==dataset.length/count*45)
        {
          html7 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html7 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html7 += '</tr>';



      html7 += '<tr>';
      for( i=dataset.length/count*46 ; i<dataset.length/count*47;i++) {
        if(i==dataset.length/count*46)
        {
          html7 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html7 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html7 += '</tr>';



      html7 += '<tr>';
      for( i=dataset.length/count*47 ; i<dataset.length/count*48;i++) {
        if(i==dataset.length/count*47)
        {
          html7 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html7 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html7 += '</tr>';



      html7 += '<tr>';
      for( i=dataset.length/count*48; i<dataset.length/count*49;i++) {
        if(i==dataset.length/count*48)
        {
          html7 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html7 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html7 += '</tr>';


      html8 = '<tr>';    
      for(i=dataset.length/count*49;i<dataset.length/count*50;i++) {
        if(i==dataset.length/count*49)
        {
          html8 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html8 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html8 += '</tr>';


      html8 += '<tr>';
      for( i=dataset.length/count*50 ; i<dataset.length/count*51;i++) {
        if(i==dataset.length/count*50)
        {
          html8 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html8 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html8 += '</tr>';


      html8 += '<tr>';
      for( i= dataset.length/count*51; i<dataset.length/count*52;i++) {
        if(i==dataset.length/count*5)
        {
          html8 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html8 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
        html8 += '</tr>';




      html8 += '<tr>';
      for( i=dataset.length/count*52 ; i<dataset.length/count*53;i++) {
        if(i==dataset.length/count*52)
        {
          html8 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html8 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html8 += '</tr>';



      html8 += '<tr>';
      for( i=dataset.length/count*53 ; i<dataset.length/count*54;i++) {
        if(i==dataset.length/count*53)
        {
          html8 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html8 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html8 += '</tr>';



      html8 += '<tr>';
      for( i=dataset.length/count*54 ; i<dataset.length/count*55;i++) {
        if(i==dataset.length/count*54)
        {
          html8 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html8 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html8 += '</tr>';



      html8 += '<tr>';
      for( i=dataset.length/count*55; i<dataset.length/count*56;i++) {
        if(i==dataset.length/count*55)
        {
          html8 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ dataset[i] + '</td>';
          continue;
        }
        html8 += '<td  style="background-color:'+(dataset[i]<0?"red":"green")+'">'+ parseFloat(dataset[i]).toFixed(2) + '</td>';
      }
      html8 += '</tr>';



        document.getElementById('memo').innerHTML  =html;
        document.getElementById('memo2').innerHTML =html2;
        document.getElementById('memo3').innerHTML =html3;
        document.getElementById('memo4').innerHTML =html4;
        document.getElementById('memo5').innerHTML =html5;
        document.getElementById('memo6').innerHTML =html6;
        document.getElementById('memo7').innerHTML =html7;
        document.getElementById('memo8').innerHTML =html8;
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
        request.open('POST', 'currency-basket-json.php');
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

  
jQuery('#wrapper').html(dataToTable(data));

//   function updatechart(){
//     const request = new XMLHttpRequest();
//       request.open('POST', 'index2.php');

//         // Callback function for when request completes
//         request.onload = () => {
//             // Extract JSON data from request
//             console.log(request.responseText);
//             const data = JSON.parse(request.responseText);
//             v_arr = [];
//             l_arr = [];
//             color = [];
//             for(i in data ){
//                v_arr.push(data[i]*10);
//                l_arr.push(i);
//                color.push(color_code[i]);
//             }
//         }
//         request.send();
//         myChart.data.labels = l_arr;
//         myChart.data.datasets[0].data = v_arr;
//         myChart.data.datasets[0].backgroundColor = color;
//         myChart.update();
//   }
//     setInterval(()=>{updatechart();}, 1000);
       

    

        
        
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
		<script src="js/e.js"></script>
	</body>
    


</html>