<?php
// PHP - Access Modifiers
// Properties and methods can have access modifiers which control where they can be accessed.

// There are three access modifiers:

// PUBLIC - the property or method can be accessed from everywhere. This is default
// PROTECTED - the property or method can be accessed within the class and by classes derived from that class
// PRIVATE - the property or method can ONLY be accessed within the class
// In the following example we have added three different access modifiers to three properties (name, color, and weight).
// Here, if you try to set the name property it will work fine (because the name property is public, and can be accessed
// from everywhere). However, if you try to set the color or weight property it will result in a fatal error (because the
// color and weight property are protected and private):


// Example
class Fruit
{
    public $name;
    protected $color;
    private $weight;
}

$mango = new Fruit();
$mango->name = 'Mango'; // OK
$mango->color = 'Yellow'; // ERROR
$mango->weight = '300'; // ERROR
?>