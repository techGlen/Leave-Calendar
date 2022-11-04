<!doctype ><html  lang="en"><head><title>LEAVE</title>
	   <meta charset="utf-8">
	   <meta http-equiv="">
	   <meta name="viewport" content="user-scalable=no,width=device-width"/>
	   <script type="text/javascript" src="manipulation.js"></script>
	   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.css" />
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-alpha.6/css/bootstrap.css" />
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/fullcalendar/3.4.0/fullcalendar.min.js"></script>

	</head>
	

	<style>
		
		
		@media screen and (max-width: 1680px) {

			body, input, select, textarea {
				font-size: 13pt;
			}

		}

		@media screen and (max-width: 1280px) {

			body, input, select, textarea {
				font-size: 12pt;
			}

		}

		@media screen and (max-width: 736px) {

			body, input, select, textarea {
				font-size: 11pt;
				letter-spacing: 0.0375em;
			}

		}
	.body{
		font-family: Lucida Console", "Courier New", monospace;
		font-weight: 300;
		font-size: 15pt;
		line-height: 0.75em;
		color: #0000FF;
		background-color:#000000;
		
	  }

    .form1{
 	
 	color:#000080;
 	border: 2px solid red;
    border-radius: 35px


    }
    .fields11{
    	

         border-radius: 17px;
		 border: 2px solid red;
		 padding: 12px;
		
		

    }
    .fields {
			display: -moz-flex;
			display: -webkit-flex;
			display: -ms-flex;
			display: flex;
			-moz-flex-wrap: wrap;
			-webkit-flex-wrap: wrap;
			-ms-flex-wrap: wrap;
			flex-wrap: wrap;
			width: calc(100% + -0.7em);
			margin: -0.1em 0 2em -0.2em;
			
			border: 2px solid red;
            border-radius: 17px
		}
		
	.bvid{
		position: absolute;
		right: 0;
		bottom: 0;
		z-index: -1;

	}
	@media (min-aspect-ratio: 16/9){
		.bvid{
			width: 100%;
			height: auto;
		}


	}
	@media (max-aspect-ratio: 16/9){
		.bvid{
			width: auto;
			height: 100%;
		}


	}
	

	</style>


	<body class="body"><br>
		<video autoplay loop muted plays-inline class="bvid"><source src="backgroud.mp4" type="video/mp4"></video>
		
		<h1>YOUR APPLICATION</h1><br><br>

			<fieldset class="form1">
				<legend align="left" style="text-transform: uppercase;font-size:1.5em">Application Results</legend><br>
					<label >First and Last name:</label><br><br>
					<input type="answer" class="fields11" size="31" id="flNameR" name="flNameR" value="" class="form-control" placeholder=""><br><br><br>
					<label > Start Date :</label><br><br>
					<input type="answer" class="fields11" size="31" id="sDateR" name="sDateR" value="" class="form-control" placeholder="0"><br><br>
					<label > End Date :</label><br><br>
					<input type="answer" class="fields11" size="31" id="eDateR" name="eDateR" value="" class="form-control" placeholder="0"><br><br><br>
					<label >Leave Type:</label><br><br>
					<input type="answer" class="fields11" size="31" id="Ltype" name="Ltype" value="" class="form-control" placeholder=""><br><br><br>
					
					<label>Reason :</label><br><br>
					<textarea type="answer" class="fields" id="studQueryR" name="studQueryR" placeholder="" value="" rows="7"></textarea><br><br><br><br>
					

			</fieldset><br><br>
			<h2 align="center"><a href="#">Days For Leave</a></h2>
            <br />
            <div class="container">
                <div id="calendar"></div>
            </div>





		<script >
			const text1=localStorage.getItem('date11');
			const text2=localStorage.getItem('date12');
			const text3=localStorage.getItem('date13');
			const text4=localStorage.getItem('date14');
			const text5=localStorage.getItem('date15');
			document.getElementById("flNameR").value=text3;
			document.getElementById("sDateR").value=text1;
			document.getElementById("eDateR").value=text2;
			document.getElementById("Ltype").value=text4;
			document.getElementById("studQueryR").value=text5;
			
		
			
			$(document).ready(function() {
               var calendar = $('#calendar').fullCalendar({
                editable:true,
                header:{
                 left:'prev,next today',
                 center:'title',
                 right:'month,agendaWeek,agendaDay'
                },
                
                selectable:true,
                selectHelper:true,
                events:[{
                     title:text4,
                    start:text1,
                    end:text2
                    
                }
                    ]

               

            
              
            
                
            
               });
              });


		</script>

	</body
	
</html>

