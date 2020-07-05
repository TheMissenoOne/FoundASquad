<?php 

function getProfile($nick,$tipo)
{
	$con = curl_init();
	if ($tipo==1) {
		curl_setopt($con, CURLOPT_URL, "http://ow-api.herokuapp.com/stats/pc/us/".$nick);
	}else if ($tipo==2){
		curl_setopt($con, CURLOPT_URL, "http://ow-api.herokuapp.com/profile/pc/us/".$nick);
	}
	curl_setopt($con, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($con);
	$profile = json_decode($result);
	return $profile;
}

// echo getProfile("Starkiller-1642",1)->username;
function getStats($nick)
{
	$con = curl_init();
	curl_setopt($con, CURLOPT_URL, "https://owapi.net/api/v3/u/".$nick."/stats");
	curl_setopt($con, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($con);
	$profile = json_decode($result);
	include 'conexao.php';
	return $profile;

}

function updateStuff($cod,$nick){
	$con = curl_init();
	curl_setopt($con, CURLOPT_URL, "https://owapi.net/api/v3/u/Starkiller-1642/blob");
	curl_setopt($con, CURLOPT_RETURNTRANSFER, true);
	$result = curl_exec($con);
	$profile = json_decode($result);
	echo $result;
	include 'conexao.php';
	// $mysqli->query("UPDATE item_usuario_jogo SET qt_pontuacao=".($profile->JSON->us->competitive->overall_stats->games*$profile->JSON->us->competitive->overall_stats->win_rate)."WHERE cd_usuario =".$cod);
}/*
echo $profile->username." <img src= '".$profile->portrait."' ><br>";
 for ($i=0; $i < count($profile->stats->top_heroes->quickplay) ; $i++) { 
  	
echo $profile->stats->top_heroes->quickplay[$i]->hero." <img src= '".$profile->stats->top_heroes->quickplay[$i]->img."' >".$profile->stats->top_heroes->quickplay[$i]->played."<br>";
  }
for ($i=0; $i < count($profile->stats->best->quickplay); $i++) {
		echo $profile->stats->best->quickplay[$i]->title.": ".$profile->stats->best->quickplay[$i]->value. "<br>";
	}
	for ($i=0; $i < count($profile->stats->miscellaneous->quickplay); $i++) {
		echo $profile->stats->miscellaneous->quickplay[$i]->title.": ".$profile->stats->miscellaneous->quickplay[$i]->value. "<br>";
	}
	for ($i=0; $i < count($profile->stats->combat->quickplay); $i++) {
		echo $profile->stats->combat->quickplay[$i]->title.": ".$profile->stats->combat->quickplay[$i]->value. "<br>";
	}
	for ($i=0; $i < count($profile->stats->game->quickplay); $i++) {
		echo $profile->stats->game->quickplay[$i]->title.": ".$profile->stats->game->quickplay[$i]->value. "<br>";
	}
	for ($i=0; $i < count($profile->stats->game->quickplay); $i++) {
		echo $profile->stats->game->quickplay[$i]->title.": ".$profile->stats->game->quickplay[$i]->value. "<br>";
	}*/

?>