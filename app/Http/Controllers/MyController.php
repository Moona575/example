<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyController extends Controller
{

    public function demoFunction()
    {
        return 'Hello World';
    }
    public function Home()
    {
        return view('Home');
    }
// Method for the About page
public function EHR()
{
    return view('EHR');
}
    // Method for the About page
    public function Patient()
    {
        return view('Patient');
    }

    // Method for the Blog page
    public function Schedule()
    {
        return view('Schedule');
    }

    // Method for the Contact Us page
    public function Billing()
    {
        return view('Billing');
    }
    // Method for the About page
    public function Realtime()
    {
        return view('Realtime');
    }
    // Method for the About page
    public function Report()
    {
        return view('Report');
    }
    // Method for the About page
    public function TaskandMessages()
    {
        return view('TaskandMessages');
    }
    // Method for the About page
    public function Admin()
    {
        return view('Admin');
    }
    public function KnowledgeBase()
{
    return view('KnowledgeBase');
}
    
public function LiveWebinars()
{
    return view('LiveWebinars');
}
public function eLearning()
    {
        return view('eLearning');
}
public function Help()
    {
        return view('Help');
}
public function ClientSupport()
    {
        return view('ClientSupport');
}
public function DisclaimerPrivacyStatement()
    {
        return view('DisclaimerPrivacyStatement');
}
}



