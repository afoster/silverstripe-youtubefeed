<?php

/**
 * Class YouTubeFeedBulkImportTask
 *
 * Provides a method of forcing a YouTubeFeed update via CLI (intended for bulk imports)
 *      framework/sake YouTubeFeedBulkImportTask flush=all
 */
class YouTubeFeedBulkImportTask extends CliController
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
