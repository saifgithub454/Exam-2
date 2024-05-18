<?php

class Book {
    // Added properties as Private
    private $title;
    private $availableCopies;

    public function __construct($title, $availableCopies) {
        $this->title = $title;
        $this->availableCopies = $availableCopies;
    }

    // Added getTitle method
    public function getTitle() {
        return $this->title;
    }

     // Added getAvailableCopies method
    public function getAvailableCopies() {
        return $this->availableCopies;
    }

     // Added borrowBook method
    public function borrowBook() {
        if ($this->availableCopies > 0) {
            $this->availableCopies--;
            return true;
        } else {
            return false;
        }
    }

    // Added returnBook method
    public function returnBook() {
        $this->availableCopies++;
    }
}

class Member {
    // Added properties as Private
    private $name;

    public function __construct($name) {
        // Initialized properties
        $this->name = $name;
    }

     // Added getName method
    public function getName() {
        return $this->name;
    }

    // Added borrowBook method
    public function borrowBook($book) {
        $book->borrowBook();
    }

    // Added returnBook method
    public function returnBook($book) {
        $book->returnBook();
    }
}


// Usage

// Created books
$book1 = new Book("The Great Gatsby", 5);
$book2 = new Book("To Kill a Mockingbird", 3);

// Created members
$member1 = new Member("John Doe");
$member2 = new Member("Jane Smith");

// Applied borrow book method to each member
$member1->borrowBook($book1);
$member2->borrowBook($book2);

// Print available copies
echo "Available Copies of '{$book1->getTitle()}': {$book1->getAvailableCopies()}<br>";
echo "Available Copies of '{$book2->getTitle()}': {$book2->getAvailableCopies()}<br>";


?>
