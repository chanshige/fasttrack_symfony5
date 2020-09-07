<?php

namespace App\Controller\Admin;

use App\Entity\Conference;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;
use EasyCorp\Bundle\EasyAdminBundle\Field\CollectionField;

class ConferenceCrudController extends AbstractCrudController
{
    public static function getEntityFqcn(): string
    {
        return Conference::class;
    }
}
