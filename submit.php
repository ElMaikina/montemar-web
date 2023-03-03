<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Home</title>
	<link rel="stylesheet" href="css/style.css">
</head>
<body>

<div class="menu-tiny">
	<a href='https://www.facebook.com/ClinicaMontemar' class='button-tiny'>
		<img src="gfx\fb.png" width="24px">
	</a>
	<a href='https://www.instagram.com/clinicamontemar/' class='button-tiny'>
		<img src="gfx\ig.png" width="24px">
	</a>
</div>		

<center>
<img src="gfx/bar.jpg" alt="Bar">

<div class="title">
	
	<div class="item">
		<img src="gfx/logo.png" alt="Logo">
	</div>
	
	<div class="item">
		(55) 224 4610 <br>
		(+56) 962384196 <br>
	</div>

	<div class="item">
		recepcion@clinicamontemar.cl <br>
	</div>
	
	<div class="item">
		Bernardo O'higgins #1338, Oficina 1101 <br>
		Antofagasta - Chile <br>
	</div>

</div>
</center>
</body>
<center>

<div class="menu">
<a href='index.html' class='button'>Home</a>
<a href='us.html' class='button'>Nosotros</a>
<a href='special.html' class='button'>Especialidades</a>
<a href='bonus.html' class='button'>Beneficiarios</a>
<a href='comerce.html' class='button'>Area Comercial</a>
<a href='agenda.html' class='button'>Agendar Hora</a>
<a href='contact.html' class='button'>Contacto</a>
</div>


<div class="tile-container">
    
    <div class="tile">
        <p>
        Usted enviará el siguiente correo a nuestro equipo de gestión:
        </p>
    </div>

    <?html

    echo $_POST["name"];
    echo $_POST["mail"];

    $name = $_POST['name'];
    $mail = $_POST['mail'];
    $phone = $_POST['phone'];
    $special = $_POST['special'];
    $date = $_POST['date'];
    $time = $_POST['time'];
    $msg = $_POST['msg'];

    $out .= $name;
    $out .= $mail;
    $out .= $phone;
    $out .= $special;
    $out .= $date;
    $out .= $time;
    $out .= $msg;
    ?>

    <div class="button">
        Desea enviarlo?
    </div>
    
    <div class="tile">
    </div>
</div>


<footer>
<div class="footnote">
<img src="gfx/logo-dark.png" alt="Bar">
<br>
<br>
Siempre a la vanguardia, en Montemar nuestro compromiso es entregar a nuestros pacientes una atención y 
servicio de excelencia, fundamentada en la alta capacitación de nuestros profesionales y elevados estándares 
en nuestros procesos.

<br>
<br>
<br>
<br>

<h4>
Contacto
</h4>

<div class="contact">
(55) 224 4610<br>
(+569) 6238 4196<br>
recepcion@clinicamontemar.cl<br>
Bernardo O'higgins #1338, Oficina 1101<br>
Antofagasta - Chile.<br>
</div>

<h4>
Menú
</h4>

<div class="foot-menu">
<a href='index.html' class='button'>Home</a>
<a href='us.html' class='button'>Nosotros</a>
<a href='special.html' class='button'>Especialidades</a>
<a href='comerce.html' class='button'>Area Comercial</a>
<a href='agenda.html' class='button'>Agendar Hora</a>
<a href='contact.html' class='button'>Contacto</a>
</div>

</div>
</footer>
</html>
