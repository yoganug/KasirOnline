<html>
<head>
<meta charset="utf-8">
<title>POS - Point Of Sale</title>
<link href="<?php echo base_url().'assets/' ?>login_style.css" rel='stylesheet' type='text/css' />
<meta name="viewport" content="width=device-width, initial-scale=1">
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!--webfonts-->
<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700|Open+Sans:400,300,600,700' rel='stylesheet' type='text/css'>
<!--//webfonts-->
<script>
	function myFunction()
		{
			alert("Thanks for Register");
		}
</script>
</head>
 
<body>
	<div class="main">
		<div class="user">
			<img src="<?php echo base_url().'assets/img/' ?>user.png" alt="">
		</div>
		<div class="login">
			<div class="inset">				
					<?php echo form_open('Register/signup'); ?>
			         <div>
                                     <span class="register"><label>Membuat akun</label></span>
						<span><label>nama</label></span>
						<span><input type="text" name="nama" class="textbox"></span>
					 </div>
                                          <div>
						<span><label>Username</label></span>
					    <span><input type="text" name="username" class="textbox"></span>
					 </div>
					 <div>
						<span><label>Password</label></span>
					    <span><input type="password" name="password" class="password"></span>
					 </div>
                                                <span><label>Nama Ibu Anda?</label></span>
					    <span><input type="text" name="jawaban" class="textboxt"></span>
					 </div>
                            
                                        
                            
					<div class="sign">
						<div class="submit">
						  <input type="submit" name="submit" onclick="myFunction()" value="SIGN UP" >
						</div>
							<div class="clear"> </div>
					</div>
					</form>
                                        
				</div>
			</div>
		
		</div>
                                        
				
	 
</body>
</html>