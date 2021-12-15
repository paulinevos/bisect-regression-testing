## Trogdor: a git bisect exercise

This repository was made to help you understand auto-bisect and 
the immense value it can have for you if you combine it with regression
tests. Use to follow along with [this article](https://www.pauline-vos.nl/fix-bugs-%e2%9a%a1-fast-with-regression-tests-and-auto-bisect/).

Trogdor is a man. Or maybe he was a... dragon man. Or maybe he's just a 
dragon. He likes to burninate villages. Can you debug him using bisect 
and regression tests?

[![A still from a video on YouTube showing a cartoon hand drawing a lackluster dragon on a sheet of paper](https://img.youtube.com/vi/90X5NJleYJQ/1.jpg)](https://www.youtube.com/watch?v=90X5NJleYJQ)

## Prerequisites

- [Docker](https://docs.docker.com/get-docker/)
- [docker-compose](https://docs.docker.com/compose/install/)

## Usage

1. Spin up the container:

   `make up`


2. Run the Trogdor command:
   
    `make run`


3. Run unit tests:
   
    `make test`

## Exercise
Run the Trogdor command on `main`. See what happens. Now do the same 
on `some-time-in-the-future` and see what happens there. Try to debug 
using auto-bisect and the article linked above.