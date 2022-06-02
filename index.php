

<!DOCTYPE html>
<html lang="fr">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="UTF-8">
		<link rel="stylesheet" href="benne.css" type="text/css" media="screen" />
		<title>Green Ben</title>
	</head>
	
	<body>
		<h1 class="Titre1">Green Ben</h2>
		<br>
		<div class="container">
            <div class="row">
                <h2 class="Titre2">Informations sur les bennes</h2>
            </div>
            <div class="row">
                <table class="table table-striped table-bordered">
                  <thead>
                    <tr bgcolor="#019bbe" color="#FFFFFF" class="Tableau">
                    
                    	<th>Commune</th>
											<th>code postal</th>
											<th>Adresse</th>
                    	<th>Horaires</th>
											<th>Remplissage</th>
                    </tr>
                  </thead>
                  <tbody>


                  <?php
                   require_once('connection_MYSQL.php');

                   $sql = 'SELECT * FROM bennes';
                   foreach ($db->query($sql) as $row) {


                            echo '<tr class="InformationBennes">';
                            echo '<td>'. $row['Commune'] . "<a href= 'https://fr.wikipedia.org/wiki/'". $row['Commune'] .  '</a></td>';
                            echo '<td>'. $row['code postal'] . '</td>';
                            echo '<td>'. $row['Adresse'] . '</td>';
														echo '<td>'. $row['Horaires'] . '</td>';
														echo '<td>'. $row['Remplissage'] . '</td>';

														echo '<td>';
														echo ' ';
														echo '</td>';
                            echo '</tr>';
                   }
                  ?>
                  </tbody>
				</table>
			</div>
		</div>
	</body>
	</html>