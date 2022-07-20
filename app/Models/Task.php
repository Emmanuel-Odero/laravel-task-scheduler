<?php

namespace App\Models;

use Cron\CronExpression;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Task extends Model
{
    use HasFactory;
    protected $fillable = [
        'description',
        'command',
        'expression',
        'dont_overlap',
        'run_in_maintainace',
        'notification_email'
    ];
    public function getlastRunAttribute()
    {
        return 'N/A';
    }
    public function getNextRunAttribute()
    {
        CronExpression::factory($this->getCronExpression())->getNextRunDate('now',0,false,'Africa/Nairobi')->format('Y-m-d h:i A');
    }
    public function getCronExpression()
    {
        return $this->expression ?: '* * * * *';
    }
}
