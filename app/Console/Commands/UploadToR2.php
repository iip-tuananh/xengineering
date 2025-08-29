<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Storage;
use RecursiveIteratorIterator;
use RecursiveDirectoryIterator;

class UploadToR2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'upload:r2';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Upload all files from storage/app/public to Cloudflare R2';


    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $localPath = public_path('site'); // Đường dẫn thư mục cần upload
        $disk = Storage::disk('r2');

        if (!is_dir($localPath)) {
            $this->error("Thư mục frontend không tồn tại!");
            return;
        }

        $this->info("Bắt đầu upload các file từ: $localPath");

        // Duyệt qua tất cả file trong thư mục frontend
        $iterator = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($localPath));
        foreach ($iterator as $file) {
            if ($file->isDir()) continue; // Bỏ qua thư mục

            $filePath = $file->getRealPath();
            $relativePath = str_replace($localPath . DIRECTORY_SEPARATOR, '', $filePath);
            $cloudPath = "site/" . str_replace('\\', '/', $relativePath); // Định dạng path cho Cloudflare

            // Upload file lên Cloudflare
            $disk->put($cloudPath, file_get_contents($filePath),[
                'visibility' => 'public',
                'Content-Type' => 'image/svg+xml',
                'Content-Disposition' => 'inline'
            ]);
            $this->info("Đã upload: $cloudPath");
        }

        $this->info("Upload hoàn tất!");
    }
}
