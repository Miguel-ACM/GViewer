<?php
	require_once("includes/DBConnection.php");	
	
	function getSelections($selected){
		$db = DBConnection::conexionBD();
		if ($db)
		{
				echo "<div class='col-4'>";
					echo "Country: ";
					echo "<select class='form-control' onchange='updateOptions(this.id)' id='country'>";
					
					$query = $db->query("SELECT DISTINCT country FROM suicides_table ORDER BY country ASC;");
					echo "<option>Any</option>";
					while ($row = $query->fetch_assoc())
					{
						$country = $row["country"];
						echo "<option value='$country'>$country</option>";
					}
					echo "</select>";
				echo "</div>";

				echo "<div class='col-4'>";
					echo "Age: ";
					echo "<select class='form-control' onchange='updateOptions(this.id)' id='age'>";
	
					$query = $db->query("SELECT DISTINCT age FROM suicides_table ORDER BY age ASC;");
					echo "<option>Any</option>";
					while ($row = $query->fetch_assoc())
					{
						$age = $row["age"];
						echo "<option value='$age'>$age</option>";
					}
					echo "</select>";
				echo "</div>";

				echo "<div class='col-4'>";
					echo "Year: ";
					echo "<select class='form-control' onchange='updateOptions(this.id)' id='year'>";
	
					$query = $db->query("SELECT DISTINCT year FROM suicides_table ORDER BY year ASC;");
					echo "<option>Any</option>";
					while ($row = $query->fetch_assoc())
					{
						$year = $row["year"];
						echo "<option value='$year'>$year</option>";
					}
					echo "</select>";
				echo "</div>";
		
		}
		mysqli_close($db);
	}

	


