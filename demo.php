<?php
require_once "Collection.php";

class Salut
{
    private $name;
    private $number;

    public function __construct($name, $number) {
        $this->name = $name;
        $this->number = $number;
    }

    public function __toString() {
        return $this->name . " is number " . $this->number;
    }
}

$c = new Collection();
$c->addItem(new Salut("Steve", 14), "steve");
$c->addItem(new Salut("Ed", 37), "ed");
$c->addItem(new Salut("Bob", 49), "bob");


try {
    $c->getItem("steve");
}
catch (KeyInvalidException $e) {
    print "The collection doesn't contain Steve.";
}
print_r($c);

$c->deleteItem("steve");

?>
