// 1. Basic Arithmetic Operations
var num1 = 10;
var num2 = 5;

console.log("Addition: " + (num1 + num2));
console.log("Subtraction: " + (num1 - num2));
console.log("Multiplication: " + (num1 * num2));
console.log("Division: " + (num1 / num2));


// 2. Find Largest Number
var a = 15;
var b = 22;
var c = 8;

var largest = a;

if (b > largest) {
    largest = b;
}
if (c > largest) {
    largest = c;
}

console.log("The largest number is: " + largest);


// 3. Loop through Numbers (1 to 10)
console.log("Numbers from 1 to 10:");
for (var i = 1; i <= 10; i++) {
    console.log(i);
}


// 4. Factorial of a Number
var num = 5;
var factorial = 1;

for (var i = num; i > 0; i--) {
    factorial *= i;
}

console.log("Factorial of " + num + " is: " + factorial);


// 5. Reverse a String
var str = "JavaScript";
var reversedStr = "";

for (var i = str.length - 1; i >= 0; i--) {
    reversedStr += str[i];
}

console.log("Reversed string is: " + reversedStr);


// 6. Sum of Array Elements
var arr1 = [1, 2, 3, 4, 5];
var sum = 0;

for (var i = 0; i < arr1.length; i++) {
    sum += arr1[i];
}

console.log("Sum of array elements: " + sum);


// 7. Prime Number Checker
var primeNum = 29;
var isPrime = true;

for (var i = 2; i < primeNum; i++) {
    if (primeNum % i === 0) {
        isPrime = false;
        break;
    }
}

if (isPrime) {
    console.log(primeNum + " is a prime number.");
} else {
    console.log(primeNum + " is not a prime number.");
}


// 8. Array Manipulation
var arr2 = [1, 2, 3, 4, 5];

// Add an element to the end
arr2.push(6);

// Remove the first element
arr2.shift();

console.log("Modified array: " + arr2);


// 9. Simple Object Example
var person = {
    name: "Alice",
    age: 30
};

console.log("Name: " + person.name);
console.log("Age: " + person.age);