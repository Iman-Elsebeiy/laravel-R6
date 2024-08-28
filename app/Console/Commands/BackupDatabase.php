<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class BackupDatabase extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'app:backup-database';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Backup the database to a file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $databaseName = config('database.connections.mysql.database');
        $username = config('database.connections.mysql.username');
        $password = config('database.connections.mysql.password');
        $host = config('database.connections.mysql.host');
        $port = config('database.connections.mysql.port', '3306');
    
        $date = now()->format('Y-m-d_H-i-s');
        $backupDir = storage_path('backup');
        $backupFile = "{$backupDir}/{$databaseName}_{$date}.sql";
    
        // Ensure the backup directory exists
        if (!File::exists($backupDir)) {
            File::makeDirectory($backupDir, 0755, true);
        }
    
        // Full path to mysqldump
        $mysqldump = 'C:\\xampp\\mysql\\bin\\mysqldump.exe'; // Ensure this path is correct
    
        // Build the command string
        $command = "{$mysqldump} --user={$username} --password={$password} --host={$host} --port={$port} {$databaseName} > " . escapeshellarg($backupFile);
    
        // Execute the command
        exec($command . ' 2>&1', $output, $return);
    
        if ($return === 0) {
            $this->info('Backup successfully created: ' . $backupFile);
        } else {
            $this->error('Backup failed.');
            $this->error(implode("\n", $output)); // Display detailed error output
        }
    }}