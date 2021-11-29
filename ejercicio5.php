<!-- En _get() y _set(). Si una subclase no tiene definidas estas funciones 'mágicas' pero la clase padre sí. ¿se activan las funciones del padre?
¿cómo afecta a la subclase que una propiedad sea privada o protegida? Probar con las funciones definidas en la clase o la subclase. -->

 <!-- tanto la clase hija como la padre, pueden usar los metodos mágicos sin problemas-->
 

<?php
class foo {

    public $bar;
    public function __get($name) {

        echo "Get:$name";
        return $this->$name;
    }

}

class bar extends foo{

}

$clasePadre = new foo();
echo($clase->__get("foo"));
$clasehija = new bar();
echo($clase1->__get("bar"));
?>