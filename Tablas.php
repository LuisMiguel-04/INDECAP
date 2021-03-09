<!DOCTYPE html>
<html lang="en">
<head>
    <title>Tablas</title>
</head>
<body>
    <!-- Tblas -->
    <table Border="3">
    <tr>    <!-- fila -->                       
    <td>columna 1</td>      <!-- CELDA -->
    <td>columna 2</td>
    </tr>
    <tr>
    <td>Fila 2 columna 1</td>
    <td>Fila 2 Columna 2</td>
    </tr>
    </table>
<br>
<table Border="3">
<tr>
<th>columna 1 con th</th>
<th>columna 2 con th</th>
</tr>
<tr>
<th>valor 1 fila 1</th>
<th>valor 2 fila 2</th>
</tr>
</table>

<!-- tablas con estructura -->
<table Border="2">
<head>
<tr>
<th>titulo 1</th>
<th>titulo 2</th>
<th>titulo 3</th>
</tr>

</head>
<tbody>
    <tr>
    <td>f2 c1<</td>
    <td>f2 c2<</td>
    <td>f2 c3<</td>
    </tr>
    <tr>
    <td>f3 c1<</td>
    <td>f3 c2<</td>
    <td>f3 c3</td>
    </tr>
</tbody>
<tfoot> <!-- pie de pagina -->
<tr>
<th>titulo 1</th>
<th>titulo 2</th>
<th>titulo 3</th>
</tr>
</tfoot>
<caption>descripcion de la tabla</caption>
</table>
<table Border="3">
<tr>
<th>Nombre:</th>
<td>Luis Miguel</td>
</tr>
<tr>
<th>Apellidos:</th>
<td>Rodriguez Bedoya</td>
</tr>
<caption>Informacion personal</caption>
</table>
<br>
<table Border="2">
<tr>
<td>a</td>
<td>b</td>
<td>c</td>
</tr>
<tr>
<td>d</td>
<!-- unir  columnas -->
<td colspan="2">ef</td>
</tr>
<caption>unir columnas</caption>
</table>
<br>
<table Border="2">
<tr>
<!-- unir filas -->
<td rowspan="2">a</td>
<td>b</td>
<td>c</td>
</tr>
<tr>
<td>d</td>
<td>e</td>
</tr>
<caption>unir filas</caption>
</table>
</body>
</html>