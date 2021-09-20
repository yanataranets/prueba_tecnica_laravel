<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\API\BaseController as BaseController;
use App\Repository\User\UserInterface;
use App\User;
use Illuminate\Http\Request;

class UserController extends BaseController{

    protected $user;

    public function __construct(UserInterface $user){
        $this->user = $user;
    }
    public function index()
    {
        return view('user.index', [
            'users' => $this->user->getAllUsers()
        ]);
    }
    public function store(Request $request){
        $data = $request->only(['name', 'email', 'password']);
        $this->user->store($data);
        return redirect()->route('index');
    }
    public function update(Request $request, $id){
        $data = $request->only([ 'email']);
        $this->user->update($id, $data);
        return redirect()->route('index');
    }

}
