<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login</title>
	
	<style type="text/css">
		body{
			margin:0;
		}

		.judul{
			text-align: center;
		}

		.contain{
			width: 100%;
        	height: 100%;
        	position: fixed;
        	background: rgb(246, 245, 243);
		}

		.head{
			position: relative;
        	border-radius: 20px;
        	margin: 85px auto ;
			margin-top: 15%;
        	width: 400px;
        	padding: 50px;
        	height: auto;
        	background: white;
			box-shadow: 2px 2px 10px grey;
		}

		.head h2{
			margin-bottom: 30px;
		}
		.btn:hover{
        		background-color: grey;
        	}
	</style>
</head>
<body>
    <div class="contain">
        <div class="head">
            <form action="<?= base_url('index.php/content/loginProses');?>" method="POST">
            <h2 class="judul">Login</h2>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="Enter Username" name="username" required>
			    </div>

			    <div class="form-group">
					<input type="Password" class="form-control" placeholder="Enter Password" name="password" required>
			    </div>

				<div class="checkbox">
				  	<label><input type="checkbox"> Remember Me </label>
				 </div>

				 <button type="submit" class="btn btn-primary form-control">Login</button>
            </form>
        </div>
    </div>
</body>
</html>