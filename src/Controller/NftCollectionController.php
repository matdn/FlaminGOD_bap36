<?php

namespace App\Controller;

use App\Repository\NFTRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class NftCollectionController extends AbstractController
{
    #[Route('/nft/collection', name: 'app_collection')]
    public function index(NFTRepository $NFTRepository): Response
    {
        return $this->render('nft_collection/index.html.twig', [
            'firstNft' => $NFTRepository->findBy([], [], 10),
            'threeNft' => $NFTRepository->findBy([], [], 3),
            'allNft' => $NFTRepository->findAll()
        ]);
    }
    #[Route('/nft/{id}', name: 'app_nftSingle')]
    public function show(NFTRepository $NFTRepository, $id): Response
    {
        return $this->render('nft_collection/single.html.twig', [
            'NFTsingle' => $NFTRepository->find($id),
            'threeNft' => $NFTRepository->findBy([], [], 3),
        ]);
    }
}
