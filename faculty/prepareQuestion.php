
<html>
	<head>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		
		<link rel="stylesheet" type="text/css" href="style.css">
		<style>
		.colorgraph {
  height: 7px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}
		input[type=text] {
    width: 95%;
    padding: 6px 5px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 3px solid #ccc;
    -webkit-transition: 0.5s;
    transition: 0.5s;
    outline: none;
}
input[type=submit] {
    width: 25%;
    background-color: #4CAF50;
    color: white;
    padding: 3px 10px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=text]:focus {
    border: 3px solid #555;
}
.clear{
	clear: both;
}
table {
    border-collapse: collapse;
    /*width: 100%;*/
}

th, td {
    text-align: left;
    padding: 8px;
}

tr:nth-child(even){background-color: #f2f2f2}

th {
    background-color: #4CAF50;
    color: white;
}
#notice {
        /*float: right;*/
    padding: 10px;
    border: 5px solid gray;
    border-radius: 5px;
    background-color: #f2f2f2;
}

		</style>
		<?php
		include 'connect.php';

		$sqlsub = "SELECT subid FROM subject";
		$resultsub = mysql_query($sqlsub);
		
		?>
	</head>
		<title>IUB</title>
		
		<body>
			<div class="container" id="container">
			  
			<div class="container" id="leftText"><font color="white" size="6" face="Comic Sans MS" >Online Examination System</font></div>
	 	
	 </div>

	 <div id="main">
	 <div class="container" id="topShed"><p align="right"><?php if(!empty($msg)) echo $msg?>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;</p></div>

	
	<div>
	<ul id="topMenuHover">
  <li><a class="active" href="home.php">Home</a></li>
  <li><a href="faculty.php">Faculty Homepage</a></li>
  <li><a href="facultyNotice.php">Faculty Notice</a></li>
  <li><a href="facultyExam.php">Exam Settings</a></li>
  <li style="float:right; border-left: 1px solid #bbb;"><a href="logout.php">LOG OUT</a></li>
	</ul>
	</div>
		<body>
		<br><br><br><br><br>
		<div class = "container" id="notice">
	<div class="wrapper">
		       <form action="prepareQuestion.php" method="post">
		    <h3 class="form-signin-heading">Prepare Question</h3>
		    <!-- <input type="submit" name="prpQuestion" value="Add Question"> -->
			  <hr class="colorgraph">
			  	<!-- <input type="text" class="form-control" name="qid" placeholder="Question ID" required="" autofocus="" /> -->
			  	<input type="text" class="form-control" name="question" placeholder="Question" required="" autofocus="" />
			  	<br>if question type is not mcq leave the option value blank<br>
			  		<input type="text" class="form-control" name="op_a" placeholder="Option A" required="" autofocus="" />
			  		<input type="text" class="form-control" name="op_b" placeholder="Option B" required="" autofocus="" />
			  		<input type="text" class="form-control" name="op_c" placeholder="Option C" required="" autofocus="" />
			  		<input type="text" class="form-control" name="op_d" placeholder="Option D" required="" autofocus="" />
			  		<select name="correctAns" class="form-control">
						  <option value=""> Correct Answer </option>
						  <option value="a"> A </option>
						  <option value="b"> B </option>
						  <option value="c"> C </option>
						  <option value="d"> D </option>
			  		</select>
			  		<input type="text" class="form-control" name="marks" placeholder="Marks" required="" autofocus="" />
			  		<select name="subject" class="form-control">
			  		<option value=""> Select Subject </option>

			  		<?php while($list = mysql_fetch_assoc($resultsub)){ ?>

			  			<option value="<?php echo $list['subid'] ?>">
			  			<?php echo $list['subid'];
			  			 ?>
			  			</option>
			  			<?php
			  				$subb = $list['subid'];
			  			} ?>
			  		</select>

			  		<input type="submit" name="add" value="ADD">

			  <?php
			  if($_SERVER['REQUEST_METHOD'] == 'POST'){
			  $question = $_POST['question'];
			  $op_a = $_POST['op_a'];
			  $op_b = $_POST['op_b'];
			  $op_c = $_POST['op_c'];
			  $op_d = $_POST['op_d'];
			  $correctAns = $_POST['correctAns'];
			  $marks = $_POST['marks'];
			  $subjct_id = $_POST['subject'];
			  //$qid = $_POST['qid'];

			  $sqlqu = "insert into question(qid,question,op1,op2,op3,op4,correct_ans,marks,subid) values(null,'$question','$op_a','$op_b','$op_c','$op_d','$correctAns','$marks','$subjct_id')";

			  if(mysql_query($sqlqu)){
			  	echo "Question Added Successully ";
			  }
			  else echo "error";

			  	}
			  ?>
			  </form>
	</div>
</div>
<br><br><br><br><br>
		</body>

		<div class="container" id="footer">
	 		<div class="container" id="bottomShed">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;</div>
	 		<div id="footerText"><br>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	&nbsp;&copy; IUB, Online Examination System</div>
	 	</div>
</html>