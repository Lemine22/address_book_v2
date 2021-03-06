<?php

namespace App\Tests\Repository;

use App\DataFixtures\ContactFixtures;
use App\Repository\ContactRepository;
use Liip\TestFixturesBundle\Test\FixturesTrait;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class ContactRepositoryTest extends KernelTestCase 
{
    use FixturesTrait;

    public function testCount() {
        self::bootKernel();
        $contact = $this->loadFixtureFiles([
            __DIR__ . '/ContactRepositoryTestFixtures.yaml'
        ]);
        
        $contacts = self::$container->get(ContactRepository::class)->count([]);
        $this->assertEquals(20, $contacts);
    }
}



