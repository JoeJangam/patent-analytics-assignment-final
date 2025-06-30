<?php

namespace App\Http\Controllers;

use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class CorrelationController extends Controller
{
    public function analyze()
    {
        $script = base_path('python/correlation_analysis.py');
        \Log::info('Python script path: ' . $script);
    
        
        $process = new Process(['python3', $script]);
        $process->setWorkingDirectory(base_path()); 
        $process->run();
    
        \Log::info('Process success? ' . ($process->isSuccessful() ? 'yes' : 'no'));
        \Log::info('Process output: ' . $process->getOutput());
        \Log::info('Process error: ' . $process->getErrorOutput());
    
        if (!$process->isSuccessful()) {
            return response()->json([
                'error' => 'Python analysis failed',
                'details' => $process->getErrorOutput()
            ], 500);
        }
    
        return response()->json([
            'correlation' => json_decode($process->getOutput(), true)
        ]);
    }
}
