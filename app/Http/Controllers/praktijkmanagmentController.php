<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\support\Facades\Auth;

class praktijkmanagmentController extends Controller
{
    private $userModel;

    public function __construct(User $userModel)
    {
        $this->userModel = $userModel;
    }

    public function manageUserroles()
    {
        $users = $this->userModel->sp_GetAllUsers(Auth::id());
        // $users = $this->userModel->sp_GetAllUsers(auth()->user()->id);

        return view('praktijkmanagment.userroles', [
            'title' => 'gebruikersrollen',
            'users' => $users,
        ]);
    }

    public function index()
    {
        return view('praktijkmanagment.index', [
            'title' => 'praktijkmanagment Home'
        ]);
    }
}