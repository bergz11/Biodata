<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<form method="POST" action="biodata.php">
		<h1 style="font-size: 60px"><center>BIODATA</h1>
		
		<pre style="font-size: 20px">



		Name            :  <input type="text" name="name"> 
		Present Address :  <input type="text" name="present"> 
		Date of Birth   :  <select name="month">                     
    	        <option value="">Month</option>
                <option value="Jan">Jan</option>
		        <option value="Feb">Feb</option>
		        <option value="Mar">Mar</option>
		        <option value="Apr">Apr</option>
		        <option value="May">May</option>
		        <option value="Jun">Jun</option>
		        <option value="Jul">Jul</option>
		        <option value="Aug">Aug</option>
		        <option value="Sept">Sept</option>
		        <option value="Oct">Oct</option>
		        <option value="Nov">Nov</option>
		        <option value="Dec">Dec</option>                     
		        </select><select name="day">
    	        <option value="">Day</option>
                <option value="1">1</option>
		        <option value="2">2</option>
		        <option value="3">3</option>
		        <option value="4">4</option>
		        <option value="5">5</option>
		        <option value="6">6</option>
		        <option value="7">7</option>
		        <option value="8">8</option>
		        <option value="9">9</option>
		        <option value="10">10</option>
		        <option value="11">11</option>
		        <option value="12">12</option>
		        <option value="13">13</option>
		        <option value="14">14</option>
		        <option value="15">15</option>
		        <option value="16">16</option>
		        <option value="17">17</option>
		        <option value="18">18</option>
		        <option value="21">19</option>
		        <option value="20">20</option>
		        <option value="21">21</option>
		        <option value="22">22</option>
		        <option value="23">23</option>
		        <option value="24">24</option>
		        <option value="25">25</option>
		        <option value="26">26</option>
		        <option value="27">27</option>
		        <option value="28">28</option>
		        <option value="29">29</option>
		        <option value="30">30</option>
		        <option value="31">31</option>
		        </select><select name="year">
    	<option value="">Year</option>
    	<option value="1970">1970</option>
    	<option value="1971">1971</option>
    	<option value="1972">1972</option>
    	<option value="1973">1973</option>
    	<option value="1974">1974</option>
    	<option value="1975">1975</option>
    	<option value="1976">1976</option>
    	<option value="1977">1977</option>
    	<option value="1978">1978</option>
    	<option value="1979">1979</option>
    	<option value="1980">1980</option>
    	<option value="1981">1981</option>
    	<option value="1982">1982</option>
    	<option value="1983">1983</option>
    	<option value="1984">1984</option>
    	<option value="1985">1985</option>
    	<option value="1986">1986</option>
    	<option value="1987">1987</option>
    	<option value="1988">1988</option>
    	<option value="1989">1989</option>
    	<option value="1990">1990</option>
    	  <option value="1991">1991</option>
    	  <option value="1992">1992</option>
    	  <option value="1993">1993</option>
    	  <option value="1994">1994</option>
    	  <option value="1995">1995</option>
    	  <option value="1996">1996</option>
    	  <option value="1997">1997</option>
    	  <option value="1998">1998</option>
    	  <option value="1999">1999</option>
		  <option value="2000">2000</option>
	  	  <option value="2001">2001</option>
	  	  <option value="2002">2002</option>
		  <option value="2003">2003</option>
		  <option value="2004">2004</option>
		  <option value="2005">2005</option>
		  <option value="2006">2006</option>
		  <option value="2007">2007</option>
		  <option value="2008">2008</option>
		  <option value="2009">2009</option>
		  <option value="2010">2010</option>
		  <option value="2011">2011</option>
		  <option value="2012">2012</option>
		  <option value="2013">2013</option>
		  <option value="2014">2014</option>
		  <option value="2015">2015</option>
	  	  <option value="2016">2016</option>
	   	  <option value="2017">2017</option>
		  <option value="2018">2018</option>
		  <option value="2019">2019</option>
		  <option value="2020">2020</option>
		  </select>          Religion :   <input type="text" name="religion">                             
		Civil Status    :  <input type="text" name="status">          Age      :   <input type="text" name="age">
		Citizenship     :  <input type="text" name="citizenship">          Weight   :   <input type="text" name="weight">
		Place of Birth  :  <input type="text" name="place">          Height   :   <input type="text" name="height">
		Name of Father  :  <input type="text" name="father">
		Name of Mother  :  <input type="text" name="mother">
		Address         :  <input type="text" name="address">
		Language or Dialect Spoken: <input type="text" name="spoke">
		Parent to be notified in case of Emergency: <input type="text" name="emergency">
        



		<b style="font-size: 30px">EDUCATIONAL BACKGROUND</b>
		Elementary       :  <input type="text" name="elementary">      Year Graduated :  <input type="text" name="elem">
		High School      :  <input type="text" name="highschool">      Year Graduated :  <input type="text" name="high">
		College          :  <input type="text" name="college">      Year Graduated :  <input type="text" name="col">
		Course           :  <input type="text" name="course">
		Special Skills   :  <input type="text" name="special">
		<input type="submit" name="submit">
       </pre>
	</form>


	<pre style="font-size: 20px">
		<?php  
		if (isset($_POST['submit'])) {
		





			echo "Name :" . $_POST['name'] . "<br>";
			echo "                Present Address :" . $_POST['present'] ."<br>";
			echo "                Date of Birth :" . $_POST['month'] . " ".$_POST['day']. " ".$_POST['year'];    		
			echo "                Religion :" . $_POST['religion'] . "<br>";
			echo "                Civil Status :" . $_POST['status'];
			echo "                   Age :" . $_POST['age'] . "<br>";
			echo "                Citizenship :" . $_POST['citizenship'];
			echo "                    Weight :" . $_POST['weight'] . "<br>";
			echo "                Place :" . $_POST['place'];
			echo "                          Height :" . $_POST['height'] . "<br>";
			echo "                Name of Father :" . $_POST['father'] . "<br>";
			echo "                Mother :" . $_POST['mother'] . "<br>";
			echo "                Address :" . $_POST['address'] . "<br>";
			echo "                Language and Dialect Spoken :" . $_POST['spoke'] . "<br>";
			echo "                Parent to be notified in case of Emergency :" . $_POST['emergency'] . "<br><br><br>";
			echo "<b>             EDUCATIONAL BACKGROUND</b>". "<br>";
			echo "                Elementary :" . $_POST['elementary'];
			echo "                Year Graduated :" . $_POST['elem'] . "<br>";
			echo "                High School :" . $_POST['highschool'];
			echo "               Year Graduated :" . $_POST['high'] . "<br>";
			echo "                College :" . $_POST['college'];
			echo "                   Year Graduated :" . $_POST['col'] . "<br>";
			echo "                Course :" . $_POST['course'] . "<br>";
			echo "                Special Skills :" . $_POST['special'] . "<br>";
	
		}

		?>
		
	</pre>

</body>
</html>