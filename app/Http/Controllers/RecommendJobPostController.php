<?php

namespace App\Http\Controllers;

use App\Models\JobPost;
use App\Models\Recommendation;
use App\Models\User;
use App\Notifications\JobRecommended;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Notification;

class RecommendJobPostController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request, JobPost $jobPost)
    {
        Recommendation::create(['job_post_id' => $jobPost->id]);

        $alumni = User::where('role', 'student')
            ->whereNotNull('email_verified_at')
            ->get();

        Notification::send($alumni, new JobRecommended($jobPost));

        return redirect()->route('job-posts.show', $jobPost->id);
    }
}
