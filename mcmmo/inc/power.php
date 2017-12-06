<?php
echo '<link rel="stylesheet" href="../../css/downunder.css" />';
echo "<div class=\"ui cards\">";
$i = 0;

while ($i <= 0) {
	switch ($i) {
	case 0:
		$name = $_name['power'];
		$category = "power_total";
		break;
	case 1:
		$name = $_name['taming'];
		$category = "taming";
		break;

	case 2:
		$name = $_name['mining'];
		$category = "mining";
		break;

	case 3:
		$name = $_name['woodcutting'];
		$category = "woodcutting";
		break;

	case 4:
		$name = $_name['repair'];
		$category = "repair";
		break;

	case 5:
		$name = $_name['unarmed'];
		$category = "unarmed";
		break;

	case 6:
		$name = $_name['herbalism'];
		$category = "herbalism";
		break;

	case 7:
		$name = $_name['excavation'];
		$category = "excavation";
		break;

	case 8:
		$name = $_name['archery'];
		$category = "archery";
		break;

	case 9:
		$name = $_name['swords'];
		$category = "swords";
		break;

	case 10:
		$name = $_name['axes'];
		$category = "axes";
		break;

	case 11:
		$name = $_name['acrobatics'];
		$category = "acrobatics";
		break;

	case 12:
		$name = $_name['fishing'];
		$category = "fishing";
		break;

	case 13:
		$name = $_name['alchemy'];
		$category = "alchemy";
		break;
	}

	$query = mysqli_query($con, "SELECT mcmmo_users.user, 
       mcmmo_skills.taming, 
       mcmmo_skills.mining, 
       mcmmo_skills.woodcutting, 
       mcmmo_skills.repair, 
       mcmmo_skills.unarmed, 
       mcmmo_skills.alchemy, 
       mcmmo_skills.herbalism, 
       mcmmo_skills.excavation, 
       mcmmo_skills.archery, 
       mcmmo_skills.swords, 
       mcmmo_skills.axes, 
       mcmmo_skills.acrobatics, 
       mcmmo_skills.fishing, 
       ( mcmmo_skills.taming + mcmmo_skills.mining 
         + mcmmo_skills.woodcutting 
         + mcmmo_skills.repair + mcmmo_skills.unarmed 
         + mcmmo_skills.alchemy 
         + mcmmo_skills.herbalism 
         + mcmmo_skills.excavation 
         + mcmmo_skills.archery + mcmmo_skills.swords 
         + mcmmo_skills.axes + mcmmo_skills.acrobatics 
         + mcmmo_skills.fishing ) AS power_total 
FROM   mcmmo_users 
       INNER JOIN mcmmo_skills 
               ON mcmmo_users.id = mcmmo_skills.user_id 
ORDER  BY $category DESC 
LIMIT  5");

	$num_url = mysqli_num_rows($query);
	echo "  <div class=\"card\">";
	echo "    <div class=\"content\">";
	echo '<div ><b>Top 5 Players </b></div>';
	echo "      <div class=\"description\">";
	echo "<table class='ui table'>";
	echo "  <thead>";
	echo "    <tr>";
	echo "      <th class=\"greyBox\">" . $_name['name'] . "</th>";
	echo "      <th class=\"greyBox\">" . $_name['level'] . "</th>";
	echo "    </tr>";
	echo "  </thead>";
	echo "  <tbody>";
	echo "    <tr>";
	while ($obj = mysqli_fetch_object($query)) {
		$user = $obj->user;
		switch ($i) {
		case 0:
			$level = $obj->power_total;
			break;
		case 1:
			$level = $obj->taming;
			$name = $name['taming'];
			break;

		case 2:
			$level = $obj->mining;
			$name = $name['mining'];
			break;

		case 3:
			$level = $obj->woodcutting;
			$name = $name['woodcutting'];
			break;

		case 4:
			$level = $obj->repair;
			$name = $name['repair'];
			break;

		case 5:
			$level = $obj->unarmed;
			$name = $name['unarmed'];
			break;

		case 6:
			$level = $obj->herbalism;
			$name = $name['herbalism'];
			break;

		case 7:
			$level = $obj->excavation;
			$name = $name['excavation'];
			break;

		case 8:
			$level = $obj->archery;
			$name = $name['archery'];
			break;

		case 9:
			$level = $obj->swords;
			$name = $name['swords'];
			break;

		case 10:
			$level = $obj->axes;
			$name = $name['axes'];
			break;

		case 11:
			$level = $obj->acrobatics;
			$name = $name['acrobatics'];
			break;

		case 12:
			$level = $obj->fishing;
			$name = $name['fishing'];
			break;

		case 13:
			$level = $obj->alchemy;
			$name = $name['alchemy'];
			break;
		}
                echo '<tr><td colspan=2></td></tr>';
		if($show_head == 'true') {
            echo "      <td><img class=\"headCase\" src='http://cravatar.eu/head/". $user ."/128.png' width=30> <a href='?player=" . $user . "'>" . $user . "</a> </td>";
		} else {
            echo "      <td><a href='?player=" . $user . "'>" . $user . "</a> </td>";
		}
		echo "      <td><center>$level</center></td>";
		echo "    </tr>";
	}

	echo "  </tbody>";
	echo "</table>";
	echo "      </div>";
	echo "    </div>";
	echo "  </div>";
        echo "  </div>";
       
	$i++;
}

?>
