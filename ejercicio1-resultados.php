<HTML LANG="es">

<HEAD>
   <TITLE>Formulario simple. Resultados del formulario</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<H1>Formulario simple. Resultados del formulario</H1>

<P>Estos son los datos introducidos:</P>

<?PHP
   $texto = $_REQUEST['texto'];
   $donde = $_REQUEST['donde'];
   $genero = $_REQUEST['genero'];

   print ("<UL>\n");
   print ("   <LI>Texto de b�squeda: $texto\n");
   print ("   <LI>Buscar en: $donde\n");
   print ("   <LI>G�nero: $genero\n");
   print ("</UL>\n");
?>

[ <A HREF='ejercicio1.php'>Nueva b�squeda</A> ]

</BODY>
</HTML>
