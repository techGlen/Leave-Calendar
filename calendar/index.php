<!doctype ><html  lang="en"><head><title>LEAVE</title>
	   <meta charset="utf-8">
	   <meta http-equiv="">
	   <meta name="viewport" content="user-scalable=no,width=device-width"/>
	   <script type="text/javascript" src="manipulation.js"></script>

	</head>
	

	<style>
		.btnsign11{
		  background-color: #c2fbd7;
		  border-radius: 100px;
		  box-shadow: rgba(44, 187, 99, .2) 0 -25px 18px -14px inset,rgba(44, 187, 99, .15) 0 1px 2px,rgba(44, 187, 99, .15) 0 2px 4px,rgba(44, 187, 99, .15) 0 4px 8px,rgba(44, 187, 99, .15) 0 8px 16px,rgba(44, 187, 99, .15) 0 16px 32px;
		  color: green;
		  cursor: pointer;
		  display: inline-block;
		  font-family: CerebriSans-Regular,-apple-system,system-ui,Roboto,sans-serif;
		  padding: 7px 20px;
		  text-align: center;
		  text-decoration: none;
		  transition: all 250ms;
		  border: 0;
		  font-size: 16px;
		  user-select: none;
		  -webkit-user-select: none;
		  touch-action: manipulation;
		}

		.btnsign11:hover {
		  box-shadow: rgba(44,187,99,.35) 0 -25px 18px -14px inset,rgba(44,187,99,.25) 0 1px 2px,rgba(44,187,99,.25) 0 2px 4px,rgba(44,187,99,.25) 0 4px 8px,rgba(44,187,99,.25) 0 8px 16px,rgba(44,187,99,.25) 0 16px 32px;
		  transform: scale(1.05) rotate(-1deg);
		}
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
		 background-color:#F08080;
		

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
			background-color:#F08080;
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
		
		<h1>APPLICATION FOR LEAVE OF ABSENCE FORM</h1><br><br>
		    <form >

    			<fieldset class="form1">
    				<legend align="left" style="text-transform: uppercase;font-size:1.5em">Leave Application Form</legend><br>
    					<label >First and Last name:</label><br><br>
    					<input type="text" class="fields11" size="31" id="flName" name="flName" value="" class="form-control" placeholder=""><br><br><br>
    					<label >Select Start & End Date :</label><br><br>
    					<input type="date" class="fields11" size="50" id="sDate" name="sDate" value="" class="form-control" placeholder="0">
    					<input type="date" class="fields11" size="50" id="eDate" name="eDate" value="" class="form-control" placeholder="0"><br><br><br>
    					<label>Type of Leave :</label><br><br>
    					<select id="leaveType" class="fields11">
    						<option value="Select Type Of leave">Select Type Of leave...........................</option><br>
    						<option value="Annual">Annual</option>
    						<option value="Compassionate / Family">Compassionate / Family</option>
    						<option value="Maternity">Maternity</option>
    						<option value="Sick">Sick</option>
    						<option value="Study">Study</option>
    					</select><br><br><br>
    
    					
    					<label>Reason :</label><br><br>
    					<textarea type="text" class="fields" id="studQuery" name="studQuery" value="" placeholder="" rows="7"></textarea><br><br><br><br>
    					<input class="btnsign11" type="button"  value="SUBMIT LEAVE APPLICATION" onClick="submit_C()"><br><br>
    
    			</fieldset><br><br>
    		</form>

	</body
	
</html>

