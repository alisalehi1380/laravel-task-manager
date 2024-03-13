<?php

namespace AliSalehi\Task\Tests\Traits;

use AliSalehi\Task\Jobs\SendTaskDueJob;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Queue;

trait TaskTest
{
    private static string $VENDOR_PUBLISH = 'vendor:publish';
    private static string $SCHEDULE_TASKS = 'schedule:tasks';
    private static string $__TAG = '--tag';
    
    public function test_check_to_create_config_file_with_command(): void
    {
        $this->artisan(self::$VENDOR_PUBLISH, [self::$__TAG => 'task-config']);
        $configFilePath = config_path('task.php');
        
        $this->assertFileExists($configFilePath);
    }
    
    public function test_check_to_create_migration_file_with_command(): void
    {
        $this->artisan(self::$VENDOR_PUBLISH, [self::$__TAG => 'task-migration']);
        $migrationFilePath = database_path('migrations/create_task_table.php');
        
        $this->assertFileExists($migrationFilePath);
    }
    
    public function test_check_to_create_lang_file_with_command(): void
    {
        $this->artisan(self::$VENDOR_PUBLISH, [self::$__TAG => 'task-lang']);
        $langFilePath = lang_path('en/task.php');
        
        $this->assertFileExists($langFilePath);
    }
    
    public function test_schedule_tasks_command_dispatches_job(): void
    {
        Queue::fake();
        Artisan::call(self::$SCHEDULE_TASKS);
        
        Queue::assertPushed(SendTaskDueJob::class);
    }
}
