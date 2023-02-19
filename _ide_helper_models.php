<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * App\Models\Bookmark
 *
 * @property int $id
 * @property int $job_post_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\JobPost $jobPost
 * @method static \Illuminate\Database\Eloquent\Builder|Bookmark newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bookmark newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Bookmark query()
 * @method static \Illuminate\Database\Eloquent\Builder|Bookmark whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookmark whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookmark whereJobPostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookmark whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Bookmark whereUserId($value)
 */
	class Bookmark extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Company
 *
 * @property int $id
 * @property int $user_id
 * @property string $name
 * @property string $about
 * @property string $email
 * @property string $address
 * @property string $phone
 * @property string $type
 * @property string $size
 * @property string $website
 * @property string $avatar_path
 * @property string $approved_at
 * @property int $approved_by
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\JobPost[] $jobPosts
 * @property-read int|null $job_posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Company query()
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAbout($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereApprovedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereApprovedBy($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereAvatarPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Company whereWebsite($value)
 */
	class Company extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JobCategory
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\JobPost[] $jobPosts
 * @property-read int|null $job_posts_count
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobCategory whereUpdatedAt($value)
 */
	class JobCategory extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\JobPost
 *
 * @property int $id
 * @property int $job_category_id
 * @property string $title
 * @property string $description
 * @property string $salary
 * @property string $location
 * @property string $type
 * @property string $career_level
 * @property string $experience_level
 * @property string $soft_skills
 * @property string $technical_skills
 * @property int $view_count
 * @property string $attachment_path
 * @property int $company_id
 * @property int $user_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Bookmark[] $bookmarks
 * @property-read int|null $bookmarks_count
 * @property-read \App\Models\JobCategory|null $category
 * @property-read \App\Models\Company $company
 * @property-read \Illuminate\Database\Eloquent\Collection|JobPost[] $recomendations
 * @property-read int|null $recomendations_count
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost query()
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereAttachmentPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereCareerLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereCompanyId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereExperienceLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereJobCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereSalary($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereSoftSkills($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereTechnicalSkills($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereUserId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|JobPost whereViewCount($value)
 */
	class JobPost extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Recommendation
 *
 * @property int $id
 * @property int $job_post_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\JobPost $jobPost
 * @method static \Illuminate\Database\Eloquent\Builder|Recommendation newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recommendation newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Recommendation query()
 * @method static \Illuminate\Database\Eloquent\Builder|Recommendation whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recommendation whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recommendation whereJobPostId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Recommendation whereUpdatedAt($value)
 */
	class Recommendation extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\StudentInfo
 *
 * @property int $id
 * @property int $user_id
 * @property string $nim
 * @property string $prodi
 * @property string $faculty
 * @property string $class_year
 * @property string $graduate_year
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInfo newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInfo newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInfo query()
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInfo whereClassYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInfo whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInfo whereFaculty($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInfo whereGraduateYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInfo whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInfo whereNim($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInfo wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInfo whereProdi($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInfo whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|StudentInfo whereUserId($value)
 */
	class StudentInfo extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property string $role
 * @property string|null $avatar_path
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deactivated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\JobPost[] $jobPosts
 * @property-read int|null $job_posts_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \App\Models\StudentInfo|null $studentInfo
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereAvatarPath($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereDeactivatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent implements \Illuminate\Contracts\Auth\MustVerifyEmail {}
}

