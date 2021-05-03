<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FizzbuzzController extends Controller
{
    public function index() {
        for ($i=1; $i<=100; $i++) {
            if ($i % 3 == 0) {
                echo("fizz <br />");
            } elseif ($i % 5 == 0) {
                echo("buzz <br />");
            } else {
                echo $i . "<br />";
            }
        }
    }
}
