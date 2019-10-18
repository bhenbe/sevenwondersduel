# 7Wonders Duel
7wonders duel app website

L'ensemble des contenus du site sont administrables dans le dossier **/contents**. 
Le dossier se compose de deux types de contenu:
* un fichier json par langue
* un dossier slider qui reprend l'ensemble des images du slider 

## Fichier json
Les fichiers json sont des tableaux structurés qui permettent de gérer l'ensemble du contenu de la page.

## Structure du fichier

```
{
    "header": {
        "title": "titre de la page",
        "description": "meta description de la page",
        "keywords": "meta keywords de la page"
    },
    "body": {
        "loud": {
            "heading" : "titre de l'entête",
            "google-play" : "lien vers Google Play",
            "app-store" : "lien vers l'App store"
            },
            "nav": { 
                "Nom du lien" : "Url du lien",
                "Nom du lien" : "Url du lien",
                "Nom du lien" : "Url du lien",
                "Nom du lien" : "Url du lien",
                "Nom du lien" : "Url du lien",
                "Nom du lien" : "Url du lien"
            },
            "requirements": {
                "heading": "titre de la zone pré-requis",
                "android": "texte à propos d'Android",
                "apple": "texte à propos d'ios"
            },
            "bottom": {
                "heading": "titre de la zone description",
                "paragraph": "texte de la zone description"
            }
    }
}
```

### Simples et doubles guillements
Chaque phrase des fichiers json étant placées entre doubles guillements, il convient soit d'utiliser des simples guillemets soit de précéder un double guillemet du caractère \ pour ne pas "briser" la ligne de texte.

**Exemple: "ceci est un commentaire reçu: \"J'adore votre jeu !\""**

### Ajout de version
Il est possible d'ajouter une nouvelle version du site en ajoutant un fichier *.json. 
Il suffit de spécifier comme intitulé le code de la langue (pour exemple: es.json pour l'espagnol).
La structure des fichiers initiaux doit être respectée afin de n'engendrer aucun bug.

## Dossier slider
Le dossier slider reprend l'ensemble des fichiers au format *.jpg.
Ceux-ci sont ensuite affichés sur le site par ordre alphabétique.