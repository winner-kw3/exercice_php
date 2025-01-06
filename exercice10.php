<?php

/**
 * ÉNONCÉ:
 * Refactoriser le code ci-dessous en créant une classe Statistics
 */

$numbers = [10, 5, 8, 20, 3, 15];

/**
 * Calcule la somme d'un tableau de nombres
 */
function getSum(array $numbers): float
{
    $sum = 0;
    foreach ($numbers as $number) {
        $sum += $number;
    }
    return $sum;
}

/**
 * Calcule la moyenne d'un tableau de nombres
 */
function getAverage(array $numbers): float
{
    if (count($numbers) === 0) {
        return 0;
    }
    return getSum($numbers) / count($numbers);
}

/**
 * Trouve la valeur minimale d'un tableau de nombres
 */
function getMin(array $numbers): float
{
    if (count($numbers) === 0) {
        return 0;
    }
    $min = $numbers[0];
    foreach ($numbers as $number) {
        if ($number < $min) {
            $min = $number;
        }
    }
    return $min;
}

/**
 * Trouve la valeur maximale d'un tableau de nombres
 */
function getMax(array $numbers): float
{
    if (count($numbers) === 0) {
        return 0;
    }
    $max = $numbers[0];
    foreach ($numbers as $number) {
        if ($number > $max) {
            $max = $number;
        }
    }
    return $max;
}

// Exemple d’utilisation
echo "Tableau de nombres : " . implode(", ", $numbers) . "\n";
echo "Somme : " . getSum($numbers) . "\n";
echo "Moyenne : " . getAverage($numbers) . "\n";
echo "Valeur minimale : " . getMin($numbers) . "\n";
echo "Valeur maximale : " . getMax($numbers) . "\n";
