<?php

namespace App\DataFixtures;

use App\Entity\NFT;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class AppFixtures extends Fixture
{
    public function load(ObjectManager $manager): void
    {
        $image_list = ['nft1.png'];
        for ($i = 1; $i <= 50; $i++) {
            $NewNft = new NFT();
            $NewNft->setName('NFT#'.$i);
            $NewNft->setPrice((rand(100,200)));
            $NewNft->setImage($image_list[0]);
            $NewNft->setDescription('oui');
            $NewNft->setLikeNumber(rand(100,10000));
            $manager->persist($NewNft);
        }
        $manager->flush();
    }
}
