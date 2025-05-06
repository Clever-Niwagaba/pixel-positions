<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use App\Models\Employer;
use App\Models\Job;

class JobTest extends TestCase
{
    /**
     * A basic unit test example.
     */
    public function belongsToAnEmployer(): void
    {
        // $this->assertTrue(true);

        //Arrange
        $employer = Employer::factory()->create();
        $job = Job::factory()->create([
            'employer_id' => $employer->id,
        ]);

        //Act and Assert
        // expect($job->employer->is($employer))->toBeTrue();
    }
}

// it('can have tags', function () {
//     // AAA
//     $job = Job::factory()->create();

//     $job->tag('Frontend');

//     expect($job->tags)->toHaveCount(1);
// });
