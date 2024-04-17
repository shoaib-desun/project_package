<?php

function generateFibonacci($numTerms)
{
  $fibonacciSeries = [];
  $a = 0;
  $b = 1;

  for ($i = 0; $i < $numTerms; $i++) {
    $fibonacciSeries[] = $a;
    $next = $a + $b;
    $a = $b;
    $b = $next;
  }

  return $fibonacciSeries;
}

//  Generate the first 10 Fibonacci numbers
$terms = 10;
$fibSeries = generateFibonacci($terms);
echo "Fibonacci Series (first $terms terms): " . implode(", ", $fibSeries);
