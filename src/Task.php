<?php

namespace RAlves\Sandbox;

/**
 * A representation of a To-Do Task.
 */
class Task
{
    public function __construct(string $name, bool $completed = false) {
        $this->name = $name;
        $this->completed = $completed;
    }

    /**
     * name of the task.
     */
    public string $name;

    /**
     * whether the task is completed or not.
     */
    public bool $completed = false;

    /**
     * Returns a friendly print of the task.
     */
    public function toFriendlyPrint() {
        return $this->name . ' - [' . ($this->completed ? 'x' : ' ') . ']';
    }
}
