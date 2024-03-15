<?php 
// class Myname{
//     public $height;
//     public $weight;
//     public function __construct($name,$age){
//         $this->height=$name;
//         $this->weight=$age;
//     }
//     public function __destruct(){
//         echo "$this->height and $this->weight object is distroyed";
//     }
// }
// $obj=new Myname("sachin",25);
// $values = 5;
// echo $alldata = $values ? 'values is here ':'values is not here';
// $age=18;
// echo $age>=20 ? "Adult":'child';

// Creating an associative array
// $person = array(
//     'name' => 'John',
//     'age' => 30,
//     'city' => 'New York'
// ); 

// Adding a new key-value pair to the associative array using array_push()
// array_push($person, "gender", "Male");

//  $person['gender']='Male'; // Output: Male (Index 3)
//  $person['address']='Mirpur';
//  echo $person['gender']; // Output: Male (Index 3)

// Output the updated array
// print_r($person);
// Define an array of numbers
// Define a callback function
function square($num) {
    return $num * $num;
}

// Define an array
$numbers = [1, 2, 3, 4, 5];

// Use array_map() to apply the 'square' function to each element of the array
$squared_numbers = array_map('square', $numbers);

// Output the original array and the squared array
echo "Original array: " . implode(', ', $numbers) . "\n";
echo "Squared array: " . implode(', ', $squared_numbers);












// Accessing elements of the associative array
// echo $person['name']."</br>"; // Output: John
// echo $person['age']."</br>"; // Output: 30
// echo $person['city']."</br>"; // Output: New York

// // Modifying elements of the associative array
// $person['age'] = 35;
// echo $person['age']."</br>"; // Output: 35

// Adding new elements to the associative array
// $person['gender'] = 'Male';
// echo $person['gender']."</br>"; // Output: Male

// // Removing elements from the associative array
// unset($person['city']);
// echo isset($person['city']) ? 'City is set' : 'City is not set'; // Output: City is not set
