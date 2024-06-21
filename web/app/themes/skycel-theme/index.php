<?php
wp_head();

$tracks = json_decode(file_get_contents("data/circuits.json"));
$races = json_decode(file_get_contents("data/races.json"));
$teams = json_decode(file_get_contents("data/teams.json"));
$drivers = json_decode(file_get_contents("data/drivers.json"));

$args = array(
	"post_status"=> "publish",
	"post_type"=> "circuit",
	"post_title"=> $tracks[0]->name,
);


//$id = wp_insert_post($args);
$id = 102;

$place = array(
	"city"=>$tracks[0]->place->city,
	"country"=>$tracks[0]->place->country
);

$usage = array("years"=> array(
	"range_start"=>$tracks[0]->usage->start,
	"range_end"=>$tracks[0]->usage->end
), "year"=> null);

$lapDistance = $tracks[0]->lapDistance->kilometers;

update_field("place", $place, $id);
update_field("usage", $usage, $id);
update_field("distance", $lapDistance, $id);