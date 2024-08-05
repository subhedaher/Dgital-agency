<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Counter;
use App\Models\Member;
use App\Models\Message;
use App\Models\Project;
use App\Models\Service;
use App\Models\Skill;
use App\Models\Subscriber;
use App\Models\Testimonial;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index()
    {
        $countSkills = Skill::count();
        $countCounters = Counter::count();
        $countServices = Service::count();
        $countCategories = Category::count();
        $countProjects = Project::count();
        $countSubscribers = Subscriber::count();
        $countMembers = Member::count();
        $countTestimonials = Testimonial::count();
        $countMessages = Message::count();
        return view('dashboard.index', [
            'countSkills' => $countSkills,
            'countCounters' => $countCounters,
            'countServices' => $countServices,
            'countCategories' => $countCategories,
            'countProjects' => $countProjects,
            'countSubscribers' => $countSubscribers,
            'countMembers' => $countMembers,
            'countTestimonials' => $countTestimonials,
            'countMessages' => $countMessages,
        ]);
    }
}
