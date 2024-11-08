
<?php
namespace App\Http\Controllers;



use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function createAdmin()
    {
        User::create([
            'name' => 'Admin',
            'email' => 'levela330@email.com',
            'password' => bcrypt('your-password'),
            'role_id' => 1,  // Указываем роль
        ]);
    }
}
