<!DOCTYPE html>
<html>
  
<body>
    <center>
  
        <h3>
            Program to print multiplication<br>
            table of any number in PHP
        </h3>
  
        <form method="POST" onsubmit="return val()" action="multi_table_proc.php" >
            Enter a number: 
            <input type="text" name="number" id="num">
              
            <input type="Submit" value="Get Multiplication Table">
        </form>
        <p id="errormsg1"></p>
    </center>
<script type="text/javascript">
	function val() 
		{
			var num = document.getElementById('num').value;
			var ret = true;

			if(num.length==0){
				document.getElementById("errormsg1").innerHTML="Please enter a number.";
				ret= false;
			}
			if(isNaN(num)){
                document.getElementById('errormsg1').innerHTML ="  Please enter a number not any other character.";
                ret= false;
            }

			return ret;
		}
</script>
</body>
  
</html>
  
