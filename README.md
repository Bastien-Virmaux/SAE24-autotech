# Projet SAE24 - Autotech

> [!NOTE]
> Pour lancer le projet, il faut impérativement avoir un serveur apache et une base de donnée mySQL.
> Quelque piste : `WAMP` => Windows, `MAMP` => MacOS, `XAMP` => Linux.

# Récupération 

Tout d'abord, vous placez dans votre répertoire qui sera lu par votre serveur apache.

Ensuite, faites cette commande afin de cloner le projet sur votre machine dans le répertoire que vous aurez sélectionné.
```
git clone https://github.com/Bastien-Virmaux/SAE24-autotech
```

Enfin, démarrer le projet.

# Compte Rendu

L'ensemble de la présentation de notre infrastructure est disponible dans `./layout/section4.php`.
L'ensemble de la présentation de chaque service est disponible dans `./page/[element].php`.

Ecrire le compte rendu des services ou matériel que vous avez configuré.

> [!CAUTION]
> Ne pas écrire de compte rendu pour : Switch, Routeur, Tel IP, Mini PC.

## Fichier 

> [!CAUTION]
> Si vous souhaitez expliquer un nouveau service, reprendre le code d'un service déjà expliqué pour rester cohérent dans le design.
> N'oubliez pas de changer : `titre de la page`, `titre h1`, `description`, `bouton pour découvrir`, `imgaes`, `tout le contexte d'installation et de configuration`.<br>
> Relisez-vous afin que l'ensemble des textes, éléments soient cohérents.

Je mets à disposition un fichier que vous pouvez utiliser pour écrire les compte rendu, il est formaté pour qu'il soit rempli correctement.

Il se trouve : `./pages/element.php/`

## Style

### CLI

Si vous souhaitez montrer une configuration avec des lignes de commande, utilisez le style CLI, voici le code HTML :

```
<div class="cli">
     <div class="headerCli">
          <p class="titleCli">CLI du Switch</p>
     </div>

     <div class="bodyCli">
          <div class="formatCommande">
               <p class="invite">Switch></p>
               <p class="commande"></p>
          </div>
          <div class="formatCommande">
               <p class="invite">Switch></p>
               <p class="commande">enable</p>
               <p class="comment">% permet de passer en configuration privilégié.</p>
          </div>
          [...]
     </div>
</div>
```

> [!IMPORTANT]
> Modifier le `.titreCli` qui permet de savoir dans quel cli on se trouve.
> Pour ajouter une nouvelle ligne de commande, prendre tout le bloc `.formatCommande`.
> Modifier le `.invite` et `.commande` en fonction de la situation.
> Vous pouvez ajouter en option la `.comment` qui permet de faire un commentaire pour expliquer.
> Vous pouvez prendre exemple sur la page `switch`, `routeur`, `mini-PC`.

### Paragraphe

Toute explication doit utiliser la balise `<p class="para"></p>`.

### Liste

Il existe deux types de listes :

**Premier Niveau**
Format : `<ul><li></li></ul>`
À utiliser en priorité !

**Deuxième Niveau**
Format : `<ol><li></li></ol>`
À utiliser si vous devez faire une seconde liste dans le premier niveau.

### Images

Vous pouvez utiliser des images à condition de spécifier une taille qui ne soit pas trop grande ou trop petite.

### Titre

Vous devez titrer chaque partie de l'installation ou la configuration en rapport avec la section 2 voici le code qui permet ceci : 

```
<div class="infraTitle">
     <h2 class="infraTitleText" style="font-size: var(--size-18);">
          Branchement éléctrique
     </h2>
</div>
```

## Envoie
Si vous ne savez pas utiliser GIT, envoyez moi vos fichiers en MP, je les intégrais.
Date limite : **Jeudi 20 juin à 22h**

# Date limite du projet
Vendredi 21 juin, 8h00 !

# Projet

VIRMAUX Bastien
TOURNEBIZE Kélyan
RANDRIANASOLO Andy-Maël
CHAUDAGNE Jean

**🚗 vroum vroum 🚗**
