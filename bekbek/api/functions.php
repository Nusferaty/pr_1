<?php

function getFoods($connect)
{
	$foods = mysqli_query($connect, "SELECT * FROM menu");
	$FoodList = [];
	while($food = mysqli_fetch_assoc($foods)){
		$FoodList[] = $food;
	}
	echo json_encode($FoodList);
}

function getFood($connect, $id)
{
	$food = mysqli_query($connect,"SELECT * FROM menu WHERE id_menu = '$id'");
	if(mysqli_num_rows($food) === 0){
		http_response_code(404);
		$res = [
			"status" => false,
			"message" => "food not found"
		];
		echo json_encode($res);
	} else {
		$food = mysqli_fetch_assoc($food);
		echo json_encode($food);
	}
}
function addFood($connect, $data){
	$food = $data['name'];
	$price =  $data['price'];
	mysqli_query($connect, "INSERT INTO menu (name_food, price) VALUES ('$food','$price')");
	
	http_response_code(201);

	$res = [
		"status" => true,
		"id_menu" => mysqli_insert_id($connect)
	];
	echo json_encode($res);
}

function updateFood($connect, $data){
	$id = $data['id'];
	$food = $data['name'];
	$price =  $data['price'];
	mysqli_query($connect, "UPDATE menu SET name_food = '$food', price = '$price' WHERE menu.id_menu = $id");
	
	http_response_code(200);
	$res = [
		"status" => true,
		"message" => "food is edited",
		"name_food" => $food,
		"price" => $price
	];
	echo json_encode($res);
}

function deleteFood($connect, $id){
	mysqli_query($connect, "DELETE FROM menu WHERE menu.id_menu = $id");

	http_response_code(200);
	$res = [
		"status" => true,
		"id_menu" => $id,
		"message" => "food is deleted",
	];
	echo json_encode($res);
}