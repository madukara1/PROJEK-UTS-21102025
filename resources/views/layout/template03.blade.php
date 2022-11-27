  <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('Trying')</title>
    <link rel= "stylesheet" href="css/new.css">
    

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

    <div class="container w">
        <h2> @yield('Konten')</h2>
   
        
    </div>
    <div class="container s">
         <h3>@yield('isi')</h3>
        <center><img src="img/code.jpg" alt="code1" width="1200px" height="auto"></center>
        <center><img src="img/code2.jpg" alt="code2" width="1200px" height="auto"></center>
        <center><img src="img/code3.jpg" alt="code2" width="1200px" height="auto"></center>

    <div class="container i">
         @yield('codingan')

        
    </div>
    
    </div>
    <div class="container footer">
    <small>Copyright &copy; 2022 - MADU. All Rights Reserved.</small>
    
    </div>


</body>
</html>