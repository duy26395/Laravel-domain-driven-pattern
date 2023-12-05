<?php

namespace App\Domains\Train\UseCase\Command;

class UpdateCommand
{
    private ?string $name;
    private ?string $time_start;


    public function __construct(
        ?string $name,
        ?string $time_start
    ) {
        $this->name = $name;
        $this->time_start = $time_start;
    }

    /**
     * @return string|null
     */
    public function getName(): ?string
    {
        return $this->name;
    }
    /**
     * @return string|null
     */
    public function gettimeStart(): ?string
    {
        return $this->time_start;
    }
}
