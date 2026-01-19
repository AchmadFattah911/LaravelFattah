<?php
namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index()
    {
        // data string yang dikirim ke view
        /** @var string $project */
        $project = "Ini adalah daftar project fattah";

        $view = resource_path('views/project.php'); // path lengkap
        return include $view;
    }

}
