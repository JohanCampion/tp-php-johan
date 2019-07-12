<?php

namespace App\DataFixtures;

use App\Entity\Category;
use App\Entity\Product;
use App\Entity\Tag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Common\Persistence\ObjectManager;

class ProductFixture extends Fixture
{
    public function load(ObjectManager $manager)
    {
        $product = new Product();
        $product->setTitle('Geforce RTX 2080 Ti');
        $category = new Category();
        $category->setTitle('GPU');
        $product->setCategory($category);
        $tag = new Tag();
        $tag->setTitle('hardware');
        $product->addTag($tag);
        $product->setContent('La toute nouvelle carte graphique NVIDIA est une révolution tant dans le réalisme que dans les performances de vos jeux. Sa puissante architecture NVIDIA Turing™ , ses technologies à couper le souffle et sa mémoire GDDR6 de 11 Go nouvelle génération en font le système GPU ultime en matière de jeux.');
        $manager->persist($category);
        $manager->persist($tag);
        $manager->persist($product);


        $product = new Product();
        $product->setTitle('AMD Ryzen™ Threadripper™');
        $category = new Category();
        $category->setTitle('CPU');
        $product->setCategory($category);
        $tag = new Tag();
        $tag->setTitle('hardware');
        $product->addTag($tag);
        $product->setContent('Déchaînez la force des processeurs AMD Ryzen™ Threadripper™ de 2e génération offrant 32 cœurs et 64 threads de puissance de traitement brute');
        $manager->persist($category);
        $manager->persist($tag);
        $manager->persist($product);


        $manager->flush();
    }
}
