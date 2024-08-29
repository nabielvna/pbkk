<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Number extends Model
{
    use HasFactory;

    public static function getEvenOdd($n)
    {
        $details = [];

        for ($i = 1; $i <= $n; $i++) {
            $details[] = [
                'number' => $i,
                'type' => $i % 2 === 0 ? 'Genap' : 'Ganjil',
            ];
        }

        return $details;
    }

    public static function getFibonaci($n)
    {
        $details = [];

        for ($i = 1; $i <= $n; $i++) {
            $details[] = [
                'number' => $i,
                'result' => recursiveFibonacci($i)
            ];
        }
        return $details;
    }    

    public static function getPrime($n)
    {
        $details = [];

        for ($i = 1; $i <= $n; $i++) {
            $details[] = [
                'number' => $i,
                'type' => isPrime($i)
            ];
        }
        return $details;
    }    

}

function recursiveFibonacci($n) {
    if ($n <= 0) {
        return 0;
    } elseif ($n == 1) {
        return 1;
    } else {
        return recursiveFibonacci($n - 1) + recursiveFibonacci($n - 2);
    }
}

function isPrime($n) {
    // Cek jika $n kurang dari 2, maka bukan prima
    if ($n <= 1) {
        return 'Bukan Prima';
    }

    // Cek pembagi dari 2 sampai akar kuadrat dari $n
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return 'Bukan Prima'; // Jika ada yang membagi habis, maka bukan prima
        }
    }

    return 'Prima'; // Jika tidak ada yang membagi habis, maka prima
}
