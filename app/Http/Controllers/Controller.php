<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Http\Request;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;
    public function generateSecretSantas(Request $request)
    {
        $peeps = array();
        $done = false;
        $index = 1;
        $input = $request->input();

        while (!$done) {
            if (isset($input['name-' . $index]) && isset($input['email-' .$index])) {
                $peeps[] = array(
                    "name" => $input['name-' . $index],
                    "email" => $input['email-' . $index],
                    "phone" => $input['phone-' . $index]
                );
            } else {
                $done = true;
            }
            $index++;
        }

        foreach($peeps as $key=>$person) {
            // generate a random number
            $temp = rand(0, count($peeps) - 1);
            $santas = array_column($peeps, "secret_santa");
            // check if random number is equal to array index or has been used already
            while ($temp == $key || in_array($temp, $santas)) { 
                $temp = rand(0, count($peeps) - 1);
            }

            $peeps[$key]["secret_santa"] = $temp;

        }
        // do logic
        // send emails
        // return success
        return $peeps;
    }
}
