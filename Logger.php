<?php
/**
 * Created by PhpStorm.
 * User: alex.ep
 * Date: 9/13/2016
 * Time: 1:43 PM
 */

class Logger
{
    private $filePath = '/path/to/log/log.log';

    /**
     * @param mixed $data
     * @param null|string $line
     */
    public function log($data, $line = null)
    {
        ob_start();
        if ($line) {
            print_r('Line ' . $line . PHP_EOL);
        }
        print_r($data);
        print_r(PHP_EOL);
        $textualRepresentation = ob_get_contents();
        ob_end_clean();

        file_put_contents(
            $this->getFilePath(),
            $textualRepresentation,
            FILE_APPEND
        );
    }

    /**
     * @return string
     */
    private function getFilePath()
    {
        return $this->filePath;
    }
}
