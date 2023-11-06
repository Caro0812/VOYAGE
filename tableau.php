<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les tableaux en html</title>
    <style>
        table{width:100%;}
        td{background-color:aqua;}
    </style>
</head>
<body>

    <table>
        <!-- de lignes et de colonnes
        1 ligne contien des colonnes
        les lignes sont divisées en colonnes =<tr></tr>
        tr=table row
        colonnes = cellules qui contiennent les données = <td></td>
        td=table data
        th=table heading=>tirte
        -->
        <tr>
        <!--col span, row span :le titre se positionne ne fonction de la largeur -->
            <th rowspan="3"> titre 1</th>  
            <th colspan="4"> titre 2</th>  
        </tr>

        <tr>
            <td>un</td>
            <td>deux</td>
            <td>trois</td>
            <td>quatre</td>
        </tr>

        <tr>
            <td><img src="images/img6.jpg" width="100"></td>
            <td>2</td>
            <td>3</td>
            <td>4</td>
        </tr>

    </table>

    <form action="">
        <fieldset>
            <legend>Information perso</legend>
            <input type="text" placeholder="Nom Prénom">
            <input type="email" placeholder="email">
        </fieldset>

        <fieldset>
            <legend>Divers</legend>
            <input type="text" placeholder="Nom Prénom">
            <input type="email" placeholder="email">
        </fieldset>
    </form>

    
</body>
</html>