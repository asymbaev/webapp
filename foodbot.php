<?php
$input = $_REQUEST["input"];
$keywords = array("pizza", "pasta", "burger", "sushi", "salad");
$responses = array(
	"We have delicious pizza. Would you like to order one?",
	"Our pasta is really good. Would you like to try it?",
	"We have a great selection of burgers. What type of burger would you like?",
	"Our sushi is always fresh. Would you like to order some?",
	"Our salads are very healthy. Would you like to try one?",
);
foreach ($keywords as $key => $value) {
	if (stripos($input, $value) !== false) {
		echo $responses[$key];
		exit();
	}
}
echo "I'm sorry, I didn't understand your request. Could you please try again?";
