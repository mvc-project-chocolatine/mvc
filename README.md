# mvc

Je te mets ça la, ça marche, dans le cas ou je le lance manuellement, j'arrive pas à rediriger vers la bonne url pour le moment au lancement du site

En sachant que j'ai créé un virtual host mvc, sur l'url "mvc/public/home/index" je suis bon. (controller home, methode index et la suite de l'url sont les parametres qui sont lus correctement)

L'URL est protégée : si l'url est modifiée sur un chemin qui n'existe pas dans nos fichiers ou qui n'est pas de la forme controller / model / param, ça renvoie automatiquement à "home/index"

Autre truc, je l'ai fait avant que tu mettes les conventions sur les variables et autres, du coup il y a pas grand chose qui est bon à ce niveau là.

Cela dit, pour séparer le mvc du reste, je pense que garder les noms en anglais pour ça me parait pas mal.

Bon le readmen est un copier coller de ce que j'avais mis en comment sur l'index, mais ça se verra plus facilement.

Dans la redirection de l'url il y a des trucs qui me gène je trouve, faut que je compare ça à d'autre.
Et j'ai rien mis encore concernant la base de données, mais ça ira vite, ce sera quasiment du copier coller de ce qu'on a déjà fait.
