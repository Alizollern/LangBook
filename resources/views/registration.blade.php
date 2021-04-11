<!DOCTYPE html>
<html>
<head>
	<title>Registration||Enter</title>
</head>
<body>
<div class="main">
<form>
	<input type="text" class="form_input" name="email" placeholder="Email">
	<input type="password" class="form_input" name="password" placeholder="Password">
	<button type="submit" id="form_button">Enter</button>
	
</form>
</div>
</body>

<style type="text/css">
	body{
		display: flex;
		justify-content: center;
		align-items: center;
		height: 100vh;
	}
	form {
         width: 500px;
         height: 300px;
         padding: 32px;  
         border-radius: 10px;  
         box-shadow: 0 4px 16px #ccc;
         font-family: sans-serif; 
         letter-spacing: 1px; 
		}
	#form_button {
		 width: 200px;
         padding: 10px 20px;
         margin: 150px 0 0 150px;
         border: none; 
         border-radius: 5px; 
         font-family: sans-serif;
         letter-spacing: 1px;
         font-size: 16px;
         color :#fff ;
         background-color: #0071f0;
         outline: none;  
         cursor: pointer; 
         transition: 0.3s; 
     }
     .form_input {
     	 font-size:16px; 
         width: 100%;
         height: 50px;
         padding: 0 0 10px 0;
         border: none; 
         border-bottom: 1px solid #e0e0e0;  
     	 background-color: transparent;  
         outline: none;
         transition: 0.3s;
 }
</style>
</script>
</html>