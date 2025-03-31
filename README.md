# Ohce Kata

Ohce es una aplicación de consola que devuelve la inversión de lo que ingresas en la terminal.

Aunque parece una aplicación sencilla, ohce tiene algunas características especiales:

## Reglas de Ohce

- Cuando inicias `ohce`, te saluda dependiendo de la hora actual, pero solo en español:
    - Entre las **20:00 y las 06:00**, dice: `¡Buenas noches <tu nombre>!`
    - Entre las **06:00 y las 12:00**, dice: `¡Buenos días <tu nombre>!`
    - Entre las **12:00 y las 20:00**, dice: `¡Buenas tardes <tu nombre>!`
- Si introduces un **palíndromo**, ohce lo reconoce y responde con `¡Bonita palabra!` después de invertirlo.
- Ohce sabe cuándo detenerse. Si escribes `Stop!`, responderá `Adios <tu nombre>` y finalizará la ejecución.

## Ejemplo de Uso

```sh
$ ohce Pedro
> ¡Buenos días Pedro!
$ hola
> aloh
$ oto
> oto
> ¡Bonita palabra!
$ stop
> pots
$ Stop!
> Adios Pedro
```

## Objetivo

El propósito de esta kata es practicar **TDD (Test-Driven Development)** asegurando que el código sea limpio y mantenible mientras se construye la funcionalidad paso a paso.


