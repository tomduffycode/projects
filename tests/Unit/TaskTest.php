<?php

namespace Tests\Unit;

use App\Models\Project;
use App\Models\Task;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;

use Tests\TestCase;

class TaskTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    public function it_has_a_path()
    {
        $project = Project::factory()->create();
        $task = Task::factory()->create(['project_id' => $project->id]);

        $this->assertEquals('/tasks/' . $task->id, $task->path());
    }

    /** @test */
    public function it_belongs_to_a_project()
    {
        $this->withoutExceptionHandling();

        $task = Task::factory()->create();
        
        $this->assertInstanceOf('App\Models\Project', $task->project);
    }
}
