<?php

// Define a Logging interface
interface Logger {
    public function log($message);
}

// Class to log messages to a file
class FileLogger implements Logger {
    private $filePath;

    public function __construct($filePath) {
        $this->filePath = $filePath;
    }

    // Implementation of the log method for file logging
    public function log($message) {
        // Append message to the log file
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}

// Class to log messages to the console
class ConsoleLogger implements Logger {
    // Implementation of the log method for console logging
    public function log($message) {
        echo "Log to console: " . $message . PHP_EOL;
    }
}

// Class to log messages to a database (example)
class DatabaseLogger implements Logger {
    // Implementation of the log method for database logging
    public function log($message) {
        // Simulate logging to a database
        echo "Log to database: " . $message . PHP_EOL;
        // In a real application, you would write code to insert the message into a database.
    }
}

// Example usage of the logging system

// File logger example
$fileLogger = new FileLogger('app.log');
$fileLogger->log("This is a log message to the file");

// Console logger example
$consoleLogger = new ConsoleLogger();
$consoleLogger->log("This is a log message to the console");

// Database logger example
$databaseLogger = new DatabaseLogger();
$databaseLogger->log("This is a log message to the database");

?>
