<?php
namespace App\Models;


class Job {
    public static function all(): array
    {
        return [
            [
                'id' => '1',
                'title' => 'Directory',
                'salary' => '$50,000'
            ],
            [
                'id' => '2',
                'title' => 'Programmer',
                'salary' => '$100,000'
            ],
            [
                'id' => '3',
                'title' => 'Teacher',
                'salary' => '$75,000'
            ]
        ];
    }

    public static function find(int $id): array
    {
        return Arr::first(static::all(), function ($job) use ($id) {
            return $job['id'] == $id;
        });
    }
}