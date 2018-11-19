<?php
declare(strict_types=1);

namespace App\Tests\Entity;
use PHPUnit\Framework\TestCase;
use App\Entity\User;

final class UserTest extends TestCase
{
    public function checkInstanceOf(): void
    {
        $this->assertInstanceOf(
            User::class,
            "test"
        );
    }

    public function checkGetAndSet(): void
    {
	$user = new User();
	$user->setName("test");
	$this->assertEquals(
	   'test',
	 user->getName()
	);
    }

}
