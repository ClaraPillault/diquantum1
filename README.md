 # diquantum1

# Pour éditer le fichier mis sur github :

git pull <remote> <branch> (en général : git pull origin master)// récupérer les commits des autres (mis sur github)

git branch nomdelabranche // créer une nouvelle branche (une seule fois)

git branch // afficher toutes les branches

git checkout nomdelabrancheàouvrir // se mettre sur une branche précise.

git diff master..nomdelabranche // affiche les différences entre les deux branches.

# Pour le push : 

 git stash // Met ses modifications locales de côté

git pull // Récupère les éventuelles mises à jour sur le repo

git stash apply // Récupère ses modifications locales
<< Corriger les éventuels conflits >>

git add . // Ajoute les modifications

git commit -m "Votre commentaire de commit"

git push


# Si vous voulez (après avoir demander à tous les DEVS si ils ne travaillent pas sur la branche master, de toute façon personne ne doit bosser sur la master sauf à la fin et il doit être seul à y travailler) regrouper votre branche avec celle d'origine :
 
git merge nomdelabranche // réunir les deux branches et ainsi créer un nouveau commit (FONCTIONNE SI LES DEVELOPPEURS NE CHANGENT PAS LES MÊMES ÉLÉMENTS (sinon message d’erreur))

# Une fois que votre branche a été merge (s'en assurer), vous pouvez la supprimer :

git branch -d nomdelabranche // supprime la branche déjà merge (qui ne sert donc plus).
