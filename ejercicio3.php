<HTML LANG="es">

<HEAD>
   <TITLE>El formulario de PHP</TITLE>
   <LINK REL="stylesheet" TYPE="text/css" HREF="estilo.css">
</HEAD>

<BODY>

<?PHP
   if (isset($_REQUEST['buscar']))
   {
      print ("<H1>El formulario de PHP. Resultados del formulario</H1>\n");

      $texto = $_REQUEST['texto'];
      $donde = $_REQUEST['donde'];
      $genero = $_REQUEST['genero'];

      print ("<P>Estos son los datos introducidos:</P>\n");
      print ("<UL>\n");
      print ("   <LI>Texto de b�squeda: $texto\n");
      print ("   <LI>Buscar en: $donde\n");
      print ("   <LI>G�nero: $genero\n");
      print ("</UL>\n");
      print ("<P>[ <A HREF='ejercicio3.php'>Nueva b�squeda</A> ]</P>\n");
   }
   else
   {
?>

<H1>El formulario de PHP</H1>

<H2>B�squeda de canciones</H2>

<FORM CLASS="borde" ACTION="ejercicio3.php" METHOD="POST">

<P><LABEL>Texto a buscar:</LABEL>
<INPUT TYPE="TEXT" SIZE="40" NAME="texto"></P>

<P><LABEL>Buscar en:</LABEL>
<INPUT TYPE="RADIO" NAME="donde" VALUE="titulo">T�tulos de canci�n
<INPUT TYPE="RADIO" NAME="donde" VALUE="album">Nombres de �lbum
<INPUT TYPE="RADIO" NAME="donde" VALUE="ambos" CHECKED>Ambos campos</P>

<P><LABEL>G�nero musical:</LABEL>
<SELECT NAME="genero">
   <OPTION SELECTED>Todos
   <OPTION>Ac�stica
   <OPTION>Banda Sonora
   <OPTION>Blues
   <OPTION>Electr�nica
   <OPTION>Folk
   <OPTION>Jazz
   <OPTION>New Age
   <OPTION>Pop
   <OPTION>Rock
</SELECT></P>

<P><INPUT TYPE="SUBMIT" NAME="buscar" VALUE="Buscar"></P>

</FORM>

<?PHP
   }
?>

</BODY>
</HTML>
