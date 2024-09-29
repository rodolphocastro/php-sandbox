<?php

namespace RAlves\Sandbox;

use PHPUnit\Framework\TestCase;

class TaskTests extends TestCase 
{
    public function testTaskShouldHaveANameAndACompletionFlag() {
        // Arrange
        
        // Act
        $task = new Task('do the dishes', false);

        // Assert
        $this::assertNotEmpty($task->name);
        $this::assertFalse($task->completed);
    }

    public function testFriendlyPrintShouldContainTheNameAndCompletionFlag() {
        // Arrange
        $task = new Task('do the dishes', false);

        // Act
        $friendlyPrint = $task->toFriendlyPrint();

        // Assert
        $this::assertEquals('do the dishes - [ ]', $friendlyPrint);
    }
}