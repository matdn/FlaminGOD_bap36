<?php

namespace App\Controller\Admin;

use App\Entity\NFT;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ImageField;
use EasyCorp\Bundle\EasyAdminBundle\Field\NumberField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextEditorField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;

class NFTCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return NFT::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->setDisabled(),
            TextField::new('name'),
            NumberField::new('price')->setNumDecimals(2),
            ImageField::new('image')
                ->setBasePath('img/')
                ->setUploadDir('public/img/')
                ->setUploadedFileNamePattern('[randomhash],[extension]')
                ->setFormTypeOptions([
                    'attr' => [
                        'accept' => 'image/jpeg, image/png'
                    ]
                ])
        ];
    }

}
