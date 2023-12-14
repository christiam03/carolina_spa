#!/bin/php
<?php
/* En este ejercicio vamos a aprender:
 * 
 * 1. �Qu� es un array?
 * 2. Vamos a crear arrays o matrices unidimensionales.
 * 
 * 1. �Qu� es un array?
 * --------------------
 * Un array PHP es un tipo de dato muy vers�til que sirve para coleccionar valores
 * en grupos 'clave' => 'valor'. Las claves pueden ser de tipo entero o string, 
 * y el valor puede ser de cualquier tipo.
 *
 * 2. Vamos a crear arrays o matrices unidimensionales
 * ---------------------------------------------------
 * Los arrays o matrices unidimensionales son aquellos que solo tienen una dimensi�n 
 * o �ndice.
 */

/* Are you ready? Ahora vamos a crear 2 arrays de strings.
 * Definimos $clients con la sintaxis antigua
 */
$clients = array('Guillermo', 'Gabriela', 'Jos�', 'Arturo');

// Y definimos $students con la nueva sintaxis PHP 5.4.
$students = ['Pepe', 'Marta', 'Juan', 'Mar�a'];

/* �Sabes que en 1 array PHP puedes meter valores de cualquier tipo?:
 * 
 *      array
 *      object
 *      null
 *      boolean
 *      string
 *      integer
 *      float
 */

// Ve�moslo ahora. Para demostr�rtelo d�jame antes por favor crear 1 objeto
// y 1 array. 
$subject = new stdClass();
$subject->asignatura = 'PHP';
$subject->nivel = 'B�sico';
$subject->aforo = 100;

// Ahora creamos 1 array de pa�ses
$countries = ['M�xico', 'Colombia', 'Venezuela', 'Espa�a', 'Argentina'];

// Y metemos todo en el array PHP $mixtures, con sintaxis 5.4:
$mixture = [8, 7.5, true, 'Per�', $subject, null, $countries];

// Imprimimos los 3 arrays que hemos creado antes
print_r($clients);
print_r($students);
print_r($mixture);

// Para acceder a un elemento concreto lo hacemos as� por medio de la clave:
echo $clients[0] . PHP_EOL;
echo $students[1] . PHP_EOL;
echo $mixture[2] . PHP_EOL;

// Sin darnos cuenta hemos creado ya nuestro primer array bidimensional!
// Un array bidiemensional es un array de arrays de una dimensi�n. Para acceder 
// a un elemento concreto lo hacemos as�, con 2 �ndices o claves.
echo $mixture[6][0] . PHP_EOL;
