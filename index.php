<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Les Tortues</title>
    <link rel="stylesheet" href="styles.css">
</head>
<body>
    <header>
        <h1>Bienvenue sur la Page des Tortues</h1>
    </header>
    
    <main>
        <section>
            <h2>Introduction aux Tortues</h2>
            <p>Les tortues sont des reptiles appartenant à l'ordre des Testudines. Elles se distinguent par leur carapace dure qui les protège des prédateurs.</p>
        </section>

        <section>
            <h2>Faits Intéressants</h2>
            <ul>
                <?php
                $faits = [
                    "Les tortues marines peuvent vivre plus de 50 ans.",
                    "Les tortues terrestres sont souvent plus lentes que les tortues marines.",
                    "Certaines tortues peuvent retenir leur respiration pendant plusieurs heures.",
                    "Les tortues utilisent leur carapace pour se protéger des dangers."
                ];

                foreach ($faits as $fait) {
                    echo "<li>$fait</li>";
                }
                ?>
            </ul>
        </section>

        <section>
            <h2>Galerie de Photos</h2>
            <p>Voici quelques images de tortues :</p>
            <img src="tortue1.jpg" alt="Tortue 1" width="300">
            <img src="tortue2.jpg" alt="Tortue 2" width="300">
        </section>
    </main>

    <footer>
        <p>&copy; 2024 Tous droits réservés. Site créé par [Votre Nom].</p>
    </footer>
</body>
</html>
