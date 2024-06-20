<!DOCTYPE html>
<html lang="en">

<head>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <!-- === Modifier le titre de la page : Autotech - Infrastructure - Element === -->
     <title>Autotech - Infrastructure - Active Directory</title>
     <!-- === FIN Modifier le titre de la page : Autotech - Infrastructure - Element === -->
     <link rel="stylesheet" href="./pages.css">
</head>

<body>
     <!-- === SECTION 1 === -->
     <section class="section sec1">
          <div class="informations">
               <!-- == Modifier le titre avec l'élement == -->
               <h1 class="title">Active Directory</h1>
               <!-- == FIN Modifier le titre avec l'élement == -->

               <!-- == Modifier la description avec celle de l'élément -->
               <p class="description">Active Directory est une technologie de gestion des identités et des accès qui permet aux administrateurs de gérer et sécuriser les ressources réseau d'une entreprise.</p>
               <!-- == FIN Modifier la description avec celle de l'élément -->

               <!-- == Modifier la texte : Découvrir l'installation du [element] == -->
               <a href="#sec2" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M16 10L12 14L8 10" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Découvrir l'installation de l'Active Directory !
               </a>
               <!-- == FIN Modifier la texte : Découvrir l'installation du [element] == -->

               <a href="../index.php#infrastructure" class="btn">
                    <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                         <path d="M20 17.0002V11.4522C20 10.9179 19.9995 10.6506 19.9346 10.4019C19.877 10.1816 19.7825 9.97307 19.6546 9.78464C19.5102 9.57201 19.3096 9.39569 18.9074 9.04383L14.1074 4.84383C13.3608 4.19054 12.9875 3.86406 12.5674 3.73982C12.1972 3.63035 11.8026 3.63035 11.4324 3.73982C11.0126 3.86397 10.6398 4.19014 9.89436 4.84244L5.09277 9.04383C4.69064 9.39569 4.49004 9.57201 4.3457 9.78464C4.21779 9.97307 4.12255 10.1816 4.06497 10.4019C4 10.6506 4 10.9179 4 11.4522V17.0002C4 17.932 4 18.3978 4.15224 18.7654C4.35523 19.2554 4.74432 19.6452 5.23438 19.8482C5.60192 20.0005 6.06786 20.0005 6.99974 20.0005C7.93163 20.0005 8.39808 20.0005 8.76562 19.8482C9.25568 19.6452 9.64467 19.2555 9.84766 18.7654C9.9999 18.3979 10 17.932 10 17.0001V16.0001C10 14.8955 10.8954 14.0001 12 14.0001C13.1046 14.0001 14 14.8955 14 16.0001V17.0001C14 17.932 14 18.3979 14.1522 18.7654C14.3552 19.2555 14.7443 19.6452 15.2344 19.8482C15.6019 20.0005 16.0679 20.0005 16.9997 20.0005C17.9316 20.0005 18.3981 20.0005 18.7656 19.8482C19.2557 19.6452 19.6447 19.2554 19.8477 18.7654C19.9999 18.3978 20 17.932 20 17.0002Z" stroke="#F2F9F9" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                    Revenir à la page d'accueil
               </a>
          </div>

          <!-- == Modifier l'image associé à l'élément et le ALT == -->
          <img src="../assets/img/img_[element].png" alt="illustation d'un [element]">
          <!-- == FIN Modifier l'image associé à l'élément et le ALT == -->

     </section>
     <!-- === FIN SECTION 1 === -->

     <!-- === SECTION 2 === -->
     <section class="section sec2">
          <img class="left" src="../assets/img/img_org.svg" alt="illustration">
          <div class="right">
               <h1 class="titleSection" style="text-align: start;">Organisation de l'installation/Configuration</h1>

               <!-- == Modifier le contexte d'organisation, voir exemple switch, routeur, mini-pc == -->
               <p class="descOrg">Nous allons configurer un certain nombre d'éléments afin que le fonctionnement du réseau et la sécurité de celui-ci soient assurés.</p>
               <!-- == FIN Modifier le contexte d'organisation, voir exemple switch, routeur, mini-pc == -->

               <div class="organisation">
                    <ul class="org">
                         <h2 class="titleOrg">Installation</h2>
                         <!-- == Modifier/Ajouter les chose à installer en rapport avec l'élément == -->
                         <li>Installation d'active directory</li>
                         <!-- == FIN Modifier/Ajouter les chose à installer en rapport avec l'élément == -->
                    </ul>
                    <ul class="org">
                         <h2 class="titleOrg">Configuration</h2>
                         <!-- == Modifier/Ajouter les chose à configurer en rapport avec l'élément == -->
                         <li>Configuration du domaine</li>
                         <li>Configuration des Unité Organisationnelle</li>
                         <li>Configuration des utilisateurs</li>
                         <li>Configuration d'une GPO pour les comptes itératifs</li>
                         <li>Configuration d'une GPO fond d'écran</li>
                         <li>Configuration d'une GPO pour le proxy</li>
                         <li>Configuration d'une GPO pour les raccourcie bureau</li>
                         <!-- == FIN Modifier/Ajouter les chose à configurer en rapport avec l'élément == -->
                    </ul>
               </div>
          </div>
     </section>
     <!-- === FIN SECTION 2 === -->

     <!-- === SECTION 3 === -->
     <section class="section sec3">
          <!-- == Modifier le titre avec l'élément == -->
          <h1 class="titleSection">Installation d'Active Directory</h1>
          <!-- == FIN Modifier le titre avec l'élément == -->

          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Installation</h2>
               <!-- == Copier/Coller les élement décrit dans la section 2  -->
               <li>Installation d'active directory</li>
               <!-- == FIN Copier/Coller les élement décrit dans la section 2  -->
          </ul>

          <!-- == Ajouter/Modifier le text pour qu'il corresponde à la première tâche décrite dans la section 2 partie installation ==  -->
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Installation d'active directory
               </h2>
          </div>
          <!-- == FIN Ajouter/Modifier le text pour qu'il corresponde à la première tâche décrite dans la section 2 partie installation == -->

          <!-- == Description avec ce bloc == -->
          <p class="para">Pour installer Active Directory, on fait : </p>
          <p class="para">Pour cela, sur le Gestionnaire de Serveur de Windows, on fait :</p>
          <ul>
               <ul>
                    <li>On va dans "Ajouter des rôles et des fonctionnalités"</li>
                    <li>On clique sur "suivant"</li>
                    <li>On clique sur "suivant"*3</li>
                    <li>On coche "AD DS"</li>
                    <li>On clique sur "suivant" jusqu'arriver sur "Confirmation"</li>
                    <li>On clique sur "installer"</li>
                    <li>Le service s'installe</li>
               </ul>
          </ul>
          <!-- == FIN Description avec ce bloc ==  -->
     </section>
     <!-- === FIN SECTION 3 === -->

     <!-- === SECTION 4 === -->
     <section class="section sec3">
          <!-- == Modifier le titre avec l'élément == -->
          <h1 class="titleSection">Configuration de l'Active Directory</h1>
          <!-- == Modifier le titre avec l'élément == -->

          <ul class="orgRappel">
               <h2 class="titleOrg">Rappel : Configuration</h2>
               <!-- == Copier/Coller les élement décrit dans la section 2  -->
               <li>Configuration du domaine</li>
               <li>Configuration des Unité Organisationnelle</li>
               <li>Configuration des utilisateurs</li>
               <li>Configuration d'une GPO pour les comptes itératifs</li>
               <li>Configuration d'une GPO fond d'écran</li>
               <li>Configuration d'une GPO pour le proxy</li>
               <li>Configuration d'une GPO pour les raccourcie bureau</li>
               <!-- == FIN Copier/Coller les élement décrit dans la section 2  -->
          </ul>

          <!-- == Ajouter/Modifier le text pour qu'il corresponde à la première tâche décrite dans la section 2 partie installation ==  -->
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration du domaine
               </h2>
          </div>
          <!-- == FIN Ajouter/Modifier le text pour qu'il corresponde à la première tâche décrite dans la section 2 partie installation ==  -->

          <!-- == Description avec ce bloc == -->
          <p class="para">Pour configurer un domaine on se clique sur l'icon "drapeau" et "Promouvoir".</p>
          <p class="para">On clique sur le bouton : "créer une nouvelle forêt" et on saisie notre nom de domaine qui est : <span class="cmd-spec">autotech.fr</span> </p>
          <p class="para">On clique sur suivant et on indique un mot de passe</p>
          <p class="para">On clique sur « suivant » jusqu’à arrive « Vérification de la configuration requise », on attend jusqu’à ce que le bouton installer soient cliquable.</p>
          <p class="para">Le serveur redémarra à l’issue de l’installation.</p>
          <!-- == FIN Description avec ce bloc == -->

          <!-- Vous pouvez utiliser d'autre élément voir le README -->

          <!-- == Ajouter/Modifier le text pour qu'il corresponde à la seconde tâche décrite dans la section 2 partie installation ==  -->
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration des Unité Organisationnelle
               </h2>
          </div>
          <!-- == FIN Ajouter/Modifier le text pour qu'il corresponde à la seconde tâche décrite dans la section 2 partie installation ==  -->

          <!-- == Description avec ce bloc == -->
          <p class="para">Nous allons crée des unité Organisationnelle qui vont nous permettre de mettre plusieurs utilisateurs pour les géré ensemble.</p>
          <p class="para">Pour faire cela on se rend dans "option" puis dans "utilisateurs et ordinateurs Active Directory"</p>
          <p class="para">On va dans le domaine <span class="cmd-spec">autotech.fr</span> puis on clique sur l'icon : "Créez une nouvelle unité d’organisation" puis on ajoute le nom des unité.</p>
          <!-- == FIN Description avec ce bloc == -->

          <!-- Vous pouvez utiliser d'autre élément voir le README -->

          <!-- == Ajouter/Modifier le text pour qu'il corresponde à la troisième tâche décrite dans la section 2 partie installation ==  -->
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration des utilisateurs
               </h2>
          </div>
          <!-- == FIN Ajouter/Modifier le text pour qu'il corresponde à la troisième tâche décrite dans la section 2 partie installation ==  -->

          <!-- == Description avec ce bloc == -->
          <p class="para">Pour configurer des utilisateurs dans les unités organisationnelle, on fait : </p>
          <ul>
               <li>Sous chaque OU, on fait clique droit puis "Créez un nouvel utilisateur "</li>
               <li>On ajoute les informations : NOM, PRENOM, NOM COMPLET, NOM OUVERTURE</li>
               <li>Concernant le mot de passe on suit la politique de windows.</li>
          </ul>
          <!-- == FIN Description avec ce bloc == -->

          <!-- Vous pouvez utiliser d'autre élément voir le README -->

          <!-- == Ajouter/Modifier le text pour qu'il corresponde à la troisième tâche décrite dans la section 2 partie installation ==  -->
          <div class="infraTitle">
               <h2 class="infraTitleText" style="font-size: var(--size-18);">
                    Configuration d'une GPO pour les comptes itératifs
               </h2>
          </div>
          <!-- == FIN Ajouter/Modifier le text pour qu'il corresponde à la troisième tâche décrite dans la section 2 partie installation ==  -->

          <p class="para">On configure le mode itératif des comptes afin que chaque session est sont propre répertoire non accessible aux autres comptes.</p>
          <ul>
               <li>Sur le </li>
          </ul>
     </section>
     <!-- === FIN SECTION 4 === -->
</body>

</html>