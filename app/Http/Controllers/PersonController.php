<?php

namespace App\Http\Controllers;

use App\Http\Requests\Person\StoreRequest;
use App\Models\Person;
use Illuminate\Http\Request;


class PersonController extends Controller
{
    public function index(StoreRequest $request)
    {
        $data = $request->validated();
        $person = Person::create($data);
        return $person;
    }
}
