#EJ3 ¿Cúal es el mayor entero positivo reprensentable en PHP?

Depende del sistema, en sistemas de 32 bits, el máximo es 2147483647, en cambio
en sistemas de 64 bits el máximo es 9223372036854775807.

Eso es debido a que cada bit, puede tener dos estados, y si elevamos esos dos estados al número de bits,
por ejemplo 2^32 daría el total de números negativos y positivos posibles.
 Si este resultado lo dividimos entre 2, para restar los negativos, y finalemente
le restamos 1 más(que sería el 0) nos daría ese resultado.

# EJ4 Si instanciamos una clase y posteriormente leemos o escribimos una propiedad 
no existente previamente, esta propiedad se añade ¿a la clase, al objeto o a todos los objetos
de esta misma clase? Justifica la respuesta.

Al ser un objeto que ya está creado y tiene su propio espacio en memoria, lo añadiría solo en el mismo objeto.

# EJ5  En _get() y _set(). Si una subclase no tiene definidas estas funciones 'mágicas' pero la clase padre sí. ¿se activan las funciones del padre?¿cómo afecta a la subclase que una propiedad sea privada o protegida? Probar con las funciones definidas en la clase o la subclase.

 Tanto la clase hija como la padre, pueden usar los funciones mágicos sin problemas
 Una propiedad “protected” es heredada y puede ser redefinida en la clase derivada, pero si se intenta acceder a una propiedad “private” en la clase hija se obtiene el valor “undefined”.