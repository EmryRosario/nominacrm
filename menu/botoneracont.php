<div id="tablist">

<?php
echo("<table><tr>");
printf ("<td><button type='submit' name='actualizar'>  <img src='./imagenes/actualizar.png'> </button></td>");
if ($_SESSION['BTNNEWCONT'] == '1'){
	printf ("<td> <button type='submit' name='altacontrato'  onClick='return validar_estadoemp();'> <img src='imagenes/creacion.png'> </button></td>");
}
    printf ("<input type='hidden' name='submitted' value='0'></td>"); 
    printf ("</form>");

	echo('<form action="exportar/export_listcont.php" name="fexportar" method="POST">');
	//FALTA ENVIAR POR POST EL PARAMETRO USANDO UN INPUT HIDDEN QUE ALMACENE EL VALOR DEL IDEMPLEADO
	printf ("<input type='hidden' name='idempleatu' value='%s'>", $idemplega);
	printf ("<td><button type='submit' name='exportarxls'>  <img src='./imagenes/exportarxls.png'> </button></td></tr>");
	echo("</form>");
echo("</table>");
?>
</div>