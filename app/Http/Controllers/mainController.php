<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\about;
use App\Models\Service;
use App\Models\tool;
use App\Models\Resume;

class mainController extends Controller
{
    public function index()
    {
        $about = about::find(1);
        $service = Service::all();
        $tools = tool::all();

        // dd($resume['resume']);
        return view('index', compact('about', 'service', 'tools'));
    }

    public static function downloadResume()
    {
        $resume = Resume::find(1);
        // Check if the record exists
        if (!$resume) {
            return response()->json(['error' => 'Resume not found'], 404);
        }

        // Check if the file path is valid
        $filePath = 'public/' . $resume['resume'];
        // dd($filePath);
        if (!Storage::exists($filePath)) {
            return response()->json(['error' => 'File not found'], 404);
        }

        // Download the file
        return Storage::download($filePath);
    }
}
