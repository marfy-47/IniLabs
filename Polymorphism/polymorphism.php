<?php
// Base class
class Animal {
    public function makeSound() {
        // A default implementation can also be given here, or it can be abstract
        return "Unknown sound";
    }
}

// Dog class
class Dog extends Animal {
    public function makeSound() {
        return "Woof!";
    }
}

// Cat class
class Cat extends Animal {
    public function makeSound() {
        return "Meow!";
    }
}

// Cow class
class Cow extends Animal {
    public function makeSound() {
        return "Moo!";
    }
}

// Duck class
class Duck extends Animal {
    public function makeSound() {
        return "Quack!";
    }
}

// Function to demonstrate polymorphism
function animalSounds($animals) {
    foreach ($animals as $animal) {
        echo get_class($animal) . ": " . $animal->makeSound() . "<br>";
    }
}

// Create a list of animal objects
$animals = [new Dog(), new Cat(), new Cow(), new Duck()];

// Call the function to output each animal's sound
animalSounds($animals);
?>
