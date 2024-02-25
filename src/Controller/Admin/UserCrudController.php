<?php

namespace App\Controller\Admin;

use App\Entity\User;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Mailer\MailerInterface;
use EasyCorp\Bundle\EasyAdminBundle\Field\IdField;
use EasyCorp\Bundle\EasyAdminBundle\Field\DateField;
use EasyCorp\Bundle\EasyAdminBundle\Field\TextField;
use EasyCorp\Bundle\EasyAdminBundle\Field\ChoiceField;
use Symfony\Component\Mime\Email;
use EasyCorp\Bundle\EasyAdminBundle\Controller\AbstractCrudController;

class UserCrudController extends AbstractCrudController
{
    public function __construct(
        private MailerInterface $mailer
    ){}

    public static function getEntityFqcn(): string
    {
        return User::class;
    }


    public function configureFields(string $pageName): iterable
    {
        return [
            IdField::new('id')->onlyOnIndex(),
            TextField::new('nom'),
            TextField::new('prenom'),
            TextField::new('email'),
            TextField::new('password'),
            ChoiceField::new('roles')->setChoices([
                'ROLE_DWWM' => 'ROLE_DWWM', 
            ])->allowMultipleChoices(),
            DateField::new('createdAt', 'Date de création')->onlyOnIndex(),
            DateField::new('updatedAt', 'Date de modification')->onlyOnIndex(),
    
        ];
    }

    public function persistEntity(EntityManagerInterface $entityManager, $entityInstance): void
    {
        //dd($entityInstance->getEmail());
        $email = (new Email())
            ->from('guillaume@centre-formation.eu')
            ->to($entityInstance->getEmail())
            ->subject('Votre compte a été créé')
            ->html('<p>Bonjour</p>, <p>votre compte a été créé avec succès.</p>
                    <p>Pour des raisons de sécurité, créer un mot de passe sécurisé en faisant un Reset password, </p>
                    <p>en cliquant sur le lien suivant : <a href="https://centre-formation.eu/reset-password">Cliquez ici</a></p>'
                  );

        $this->mailer->send($email);

        parent::persistEntity($entityManager, $entityInstance);

    }
}
