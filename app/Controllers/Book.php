<?php

namespace App\Controllers;

class Book extends BaseController
{
    public function show()
    {
        $data['title'] = 'Book Now';

        echo view('templates/_header', $data);
        echo view('book');
        echo view('templates/_footer');
    }
}
