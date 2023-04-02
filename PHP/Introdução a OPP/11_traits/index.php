<?php
/*
- Traits allow code reuse without class hierarchy, that is, without inheritance;
- We can thus use the methods of the class that was made the trait;
- We use the reserved word use;
- ex: class Teste { use ClasseTrait }
 */

trait Objeto {
    
    public function test() {
        echo 'testing object traits:';
    }
}

trait Testing {
    
    public function traitTesting() {
        echo ' this methods is from the trait testing:';
    }
}

class central {

    use Objeto;
    use Testing;
}

$central = new Central();
$central->test();
$central->traitTesting();
?>