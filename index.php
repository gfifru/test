<?php
/*
Есть php-класс A, напишите его функцию f($a), которая вызывает другую его функцию,
название которой передано в виде строкового аргумента $a,
а если такой функции в классе нет – выводит слово «error».

*/
class A {

    public function f($a)
    {
        if (method_exists(A::class, 'foo')) {
            $this->$a();
        } else {
            echo 'Error';
        }
    }

//    public function foo()
//    {
//        echo 'FOO';
//    }
}

(new A)->f('foo');

