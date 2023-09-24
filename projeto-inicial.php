<?php

use Alura\Pdo\Domain\Model\Student;

require_once 'vendor/autoload.php';

$student = new Student(
    null,
    'Péricles Pereira',
    new \DateTimeImmutable('2002-11-03')
);

echo $student->age();
