<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Trying')</title>
    <link rel= "stylesheet" href="css/new1.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    
</head>
<body>
	</div>		
    <div class="container m">
        <ul>
        <li><a href="/uts-webmadu/public/"><h3>Beranda</h3></a></li>
        <li><a href="/uts-webmadu/public/home"><h3>Project</h3></a></li>
            <li><a href="/uts-webmadu/public/alat"><h3>Komponent</h3></a></li>
            <li><a href="/uts-webmadu/public/syntax"><h3>Code</h3></a></li>
               
        </ul>

		
		</div>
	</header>

	<!-- banner -->
	<section class="banner">
		<h2>WELCOME TO MY WEBSITE</h2>
	</section>
    
    <div class="container w">
        <h2> @yield('Konten')</h2>
   
        
    </div>
    <div class="container s">
        <large> @yield('isi')</large>
       
        
    </div>
    
    </div>
    <div class="container footer">
    <small>Copyright &copy; 2022 - MADU. All Rights Reserved.</small>
    
    </div>


</body>

</html>