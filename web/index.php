<?php

require __DIR__.'/../vendor/autoload.php';

$factory = new \Zoo\ZooFactory();

$animals = [
    'cat', 'dog', 'sparrow', 'rat', 'dolphin',  'penguin'
];

$animals = array_map(function($animal) use ($factory) {
    try {
        $animal = $factory->get($animal);

        return $animal;
    } catch (\Exception $e) {
        return '';
    }
}, $animals);

$animals = array_filter($animals, function ($animal) {
    return is_object($animal);
});

//ToDo: add error handling for invalid actions exceptions
foreach ($animals as $animal) {
    $class = strtolower((new \ReflectionClass($animal))->getShortName());
    switch ($class) {
        case 'cat':
            echo '<br>'.$animal->getName().'<br>';
            echo $animal->walk().'<br>';
            echo $animal->meow().'<br>';
            break;
        case 'dog':
            echo '<br>'.$animal->getName().'<br>';
            echo $animal->walk().'<br>';
            echo $animal->run().'<br>';
            echo $animal->wuf().'<br>';
            echo $animal->byte('man').'<br>';
            break;
        case 'sparrow':
            echo '<br>'.$animal->getName().'<br>';
            echo $animal->walk().'<br>';
            echo $animal->tweet().'<br>';
            echo $animal->fly().'<br>';
            break;
        case 'rat':
            echo '<br>'.$animal->getName().'<br>';
            echo $animal->pi().'<br>';
            break;
        case 'dolphin':
            echo '<br>'.$animal->getName().'<br>';
            echo $animal->swim().'<br>';
            break;
        case 'penguin':
            echo '<br>'.$animal->getName().'<br>';
            echo $animal->walk().'<br>';
            break;
    }
    // this is a joke
    echo $animal->eat($animals[array_rand($animals)]);
}
