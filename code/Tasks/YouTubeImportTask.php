<?php

/**
 * Class YouTubeImportTask
 *
 * Provides a method of forcing a YouTubeFeed update via CLI (intended for cronjobs)
 *      framework/sake YouTubeImportTask flush=all
 */
class YouTubeImportTask extends CliController
{

    /**
     * Force the auto update when called through CLI
     */
    public function process()
    {
        $service = new YouTubeFeed();
        $service->importAll();
    }
}
