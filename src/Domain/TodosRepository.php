<?php
// src/Domain/TodosRepository.php

declare(strict_types=1);

namespace App\Domain;

interface TodosRepository
{
    public function getAll(): array;

    public function add(string $description): void;
}