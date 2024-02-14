<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body>
    <h2>Calculator</h2>
    <form method="post">
        <input type="number" name="num1" placeholder="Enter number 1" required>
        <select name="operator" required>
            <option value="add">+</option>
            <option value="subtract">-</option>
            <option value="multiply">*</option>
            <option value="divide">/</option>
        </select>
        <input type="number" name="num2" placeholder="Enter number 2" required>
        <button type="submit" name="calculate">Calculate</button>
    </form>

    <?php
    if (isset($_POST['calculate'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operator = $_POST['operator'];

        // Include the Calculator class
        require_once 'Calculator.php';

       // Perform calculation based on selected operator
    if ($operator === 'add') {
        $result = Calculator::add($num1, $num2);
    } elseif ($operator === 'subtract') {
        $result = Calculator::subtract($num1, $num2);
    } elseif ($operator === 'multiply') {
        $result = Calculator::multiply($num1, $num2);
    } elseif ($operator === 'divide') {
        $result = Calculator::divide($num1, $num2);
    } else {
        $result = 'Invalid operator';
    }

        // Display the result
        echo "<p>Result: $result</p>";
    }
    ?>
</body>
</html>
