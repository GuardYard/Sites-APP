<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="General data.css" />
	<link rel="stylesheet" href="../Settings/Menu.css"/>
<link rel="stylesheet" href="../Settings/footer.css"/>
    <title>General data</title>
</head>
<body>

<?php INCLUDE('../Settings/Menu.php') ?>
    <div id="bloc_principal">
        <div id="titre">
            <h1>GENERAL DATA</h1>
        </div>
        <div id="bouton_graphique">
            <form method="post" >
            <p>
                <label for="graph type">Choose your type of graph</label>
                <select name="graph type" id="graph type">
                    <option value="Bar graph">Bar graph</option>
                    <option value="Pie chart">Pie chart</option>
                    <option value="Spider chart">Spider chart</option>
                    <option value="Scatter plot">Scatter plot</option>
                </select>
            </p>
            </form>
        </div>
        <div id="image_graphique">
            <img src="exemple_graphique_baton.PNG" alt="graphique en batons" />
        </div>
    </div>
	
	<?php INCLUDE('../Settings/footer.php') ?>
</body>
</html>