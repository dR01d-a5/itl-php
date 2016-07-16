<?php


// $x= 5;
// $y= 4;

// echo $x+$y;
//http://pastebin.com/p4gcqPvk
$arr =  [  array(
       		 "name" => "MacBook Pro",
            "desc" => "awesome Laptop",
            "price" => NULL,
            "img" => "fake_macbook.jpg"
            ),
			array(
       		 "name" => "MacBook Pro1",
            "desc" => "awesome Laptop1",
            "price" => NULL,
            "img" => "fake_macbook1.jpg"
            );
            ]
// $arr_len =count($arr);
            ksort($arr);

            foreach ($arr as $key => $value) {
            	echo "$key => $value ".strlen($value);
            	echo "<br>";
            }

            // var_dump($arr);

            $sortArray = array(
            					"MacBook",
            					"awesome Laptop"
            					NULL,
            					"fake_macbook"
            						);

            foreach ($sortArray as $sort) {
            	echo "$sort";
            	echo "<br>";


            }

            var_dump($arr['name']);
?>