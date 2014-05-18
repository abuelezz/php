<?php

interface Logger {
    const FOO = 1;
    public function log($msg);
}

echo Logger::FOO;  // 1
Logger::log($msg); // Fatal error: Cannot call abstract method Logger::log()
new Logger;        // Fatal error: Cannot instantiate interface Logger
