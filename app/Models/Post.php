<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Config;

class Post extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array<string>
     */
    protected $fillable = ['content'];

    // I removed the `updated_at` column. The following line tells Laravel to
    // not try to save values into that column.
    public const UPDATED_AT = null;

    /**
     * Get the creation time as a sensibly formatted string.
     */
    public function formattedCreationTimestamp(): string
    {
        $timezone = Config::get('app.timezone');
        $format = 'j M Y, H:i:s T';
        // If app's timezone is not UTC, then add the UTC offset to the string
        // for clarity. The three-letter timezone abbrevation (denoted by "T" in
        // the above format string) might be unfamiliar to some users.
        if ($timezone !== 'UTC') {
            $format .= ' (\U\T\CP)';
        }
        return $this->created_at->setTimezone($timezone)->format($format);
    }
}
