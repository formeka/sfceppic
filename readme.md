Crée un nouveau projet symfony nommée sfceppic :

- Installer un symfony basique

```
composer require symfony/maker-bundle --dev
composer req twig symfony/asset
```

Lancer le server :

```
symfony server:start
```

Afficher le projet dans le navigateur :

```
symfony open:local
```

- Créer 3 pages(controller) home,formations,contact

```
symfony console make:controller
```

- Ajouter une navbar avec un menu de liens pointant vers les page home,formations,contact

- On doit appeler la page formations avec un paramètre appelé domaine

- Ajouter un footer avec l'année en cours