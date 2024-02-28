import os

def lister_fichiers_dossier(BMW):
    try:
        # Vérifie si le chemin est un dossier
        if os.path.isdir(chemin_dossier):
            # Parcours les fichiers dans le dossier
            for fichier in os.listdir(chemin_dossier):
                # Récupère le nom et l'extension du fichier
                nom_fichier, extension = os.path.splitext(fichier)
                print("import " + nom_fichier + " from " + "\"" + "../../assets/img/" + chemin_dossier + "/" + nom_fichier + extension + "\"")
        else:
            print("Le chemin spécifié ne correspond pas à un dossier.")
    except OSError as e:
        print(f"Erreur lors de la lecture du dossier: {e}")

# Chemin vers le dossier à lister (à remplacer par le chemin désiré)
chemin_dossier = input("Entrez le chemin d'accès vers le dossier : ")
lister_fichiers_dossier(chemin_dossier)
