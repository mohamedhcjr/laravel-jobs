<?php

namespace App\Models;



class Job
{
    //
    public static function all()
    {

        return [
            ['id' => 1, 'title' => 'Softare Engineer', 'company' => 'Tech Corp'],
            ['id' => 2, 'title' => 'Data Analyst', 'company' => 'Data Solutions'],

        ];
    }
}
