
## Head First Design Patterns

Este código son los ejemplos del libro pasados a PHP.

Es mi primera vez leyendo el libro así que no se fien XD

Para probar el código que salía por pantalla en el libro lo he hecho por tests en PHPUnit.

### Índice de Patrones de Diseño

Patrón | Tipo| Ejemplo
------------ | ------------- | -------------
Adapter Pattern| Estructural | Un Pavo Real que es un Pato
Decorator Pattern| Estructural | Cafetería: Café con 2 de azucar y con leche de soja.
Facade Pattern| Estructural | HomeTheatre
Bridge |Esctructural|
Proxy | Estructural |
Factory Pattern| Creacional | Tienda de Pizzas. Abstract Factory: Tienda de Pizzas según zona NY o California
Singleton Pattern| Creacional | Chocolate Boiler
Builder | Creacional |
Object Pool | Creacional |
Prototype| Creacional |
Strategy Pattern| Comportamiento | Los Patos y sus comportamiento (hacer cuak, vuelan, etc.)
Template Pattern| Comportamiento | Haciendo café o té
Iterator Pattern| Comportamiento | Menú de Pancakes y Menú de Cenas
Command Pattern| Comportamiento | Dispositivo que enciende y apaga otros dispositivos
Chain of responsability | Comportamiento |
Observer Pattern| Otros | Estación metereológica
State Pattern | | Máquina de chicles

url: https://diego.com.es/patrones-de-diseno-en-php

### Consola

Además de probarlo mediante PhpUnit también utilizo la librería [symphony/console](http://symfony.com/doc/current/components/console.html) para probar algunos patrones.

Listado de comandos
```
php hfdp.php hfdp:strategy-pattern
```

Nota: La clase Command está basada en el la Clase Command de Laravel.

