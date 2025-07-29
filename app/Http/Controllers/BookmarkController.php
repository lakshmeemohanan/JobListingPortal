<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Support\Facades\Auth;
use App\Models\Job;

class BookmarkController extends Controller
{
    public function index(): View
    {
        //Get the logged in user
        $user = Auth::user();

        //Get the bookmarks by user
        $bookmarks = $user->bookMarkedJobs()->orderBy('job_user_bookmarks.created_at', 'desc')->paginate(10);
        return view('jobs.bookmarked')->with('bookmarks', $bookmarks);
    }
    public function store(Job $job): RedirectResponse
    {
        //Get the logged in user
        $user = Auth::user();

        //Check if job is already bookmarked
        if ($user->bookmarkedJobs()->where('job_id', $job->id)->exists()) {
            return back()->with('status', 'Job is already bookmarked');
        } else {

            //Create a new bookmarks
            $user->bookmarkedjobs()->attach($job->id);

            return back()->with('error', 'Job bookmarked successfully!');
        }
    }
    public function destroy(Job $job): RedirectResponse
    {
        //Get the logged in user
        $user = Auth::user();

        //Check if job is not bookmarked
        if (!$user->bookmarkedJobs()->where('job_id', $job->id)->exists()) {
            return back()->with('error', 'Job is not bookmarked');
        } else {

            //Remove bookmark
            $user->bookmarkedjobs()->detach($job->id);
            return back()->with('status', 'Bookmarked removed ssuccessfully!');
        }
    }
}
