<?php

function http_send_json($data, $code = 200)
{
	http_response_code($code);
	header("Content-Type: application/json");
	echo json_encode($data);
}
	