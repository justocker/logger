<?php
namespace Justocker\Logger;

interface ILogger {
    public function logEntry(string $line): void;

}