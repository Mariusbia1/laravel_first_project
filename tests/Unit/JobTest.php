<?php

// test('example', function () {
//     expect(true)->toBeFalse();
// });

use App\Models\Employer;
use App\Models\Job;

it('belongs to thr employer', function(){
    $employer= Employer::factory()->create();
    $job= Job::factory()->create([
        'employer_id' => $employer->id,
    ]);

  expect($job->employer->is($employer))->toBeTrue();


});
it('can have tags', function()
{
    $job = Job::factory()->create();
    $job->tag('Frontend');
    expect($job->tags)->toHaveCount(1);
});
