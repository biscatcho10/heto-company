<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\VisitorInformationController;
use App\Models\VisitorInformation;
use Carbon\Carbon;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardController extends Controller
{
    public function index()
    {
//        $this->visitors();
//        return view("admin.components.dashboard.index");


        $this->visitors();
        $visitors = [
            "all" => VisitorInformation::count(),
            "last30days" => VisitorInformation::whereDate("vis_lastvisit", '>', Carbon::now()->subDays(30))->count()
        ];

        $contact = [
            'allCount' => DB::table("contacts")->count(),
            'last30daysCount' => DB::table("contacts")->whereDate("created_at", '>', Carbon::now()->subDays(30))->count(),
        ];
        $career = [
            'allCount' => DB::table("careers")->count(),
            'last30daysCount' => DB::table("careers")->whereDate("created_at", '>', Carbon::now()->subDays(30))->count(),
        ];

        $project = [
            'allCount' => DB::table("projects")->count(),
            'last30daysCount' => DB::table("projects")->whereDate("created_at", '>', Carbon::now()->subDays(30))->count(),
        ];


        return view("admin.components.dashboard.index", compact('visitors', 'contact', 'career', 'project'));


    }

    /**
     * @return JsonResponse
     */
    public function mapData(): JsonResponse
    {
        return response()->json(VisitorInformation::visitorsMap());
    }

    /**
     * @return JsonResponse
     */
    public function browserUsage(): JsonResponse
    {
        return response()->json(VisitorInformation::visitorsBrowser());
    }

    public function visitors()
    {
        (new VisitorInformationController)->updateLastVisit();
    }
}
