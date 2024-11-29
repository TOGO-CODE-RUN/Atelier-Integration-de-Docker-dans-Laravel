<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page d'Accueil</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
            color: #333;
        }

        header {
            background-color: #007BFF;
            color: white;
            padding: 1rem 0;
            text-align: center;
        }

        nav {
            display: flex;
            justify-content: center;
            background-color: #0056b3;
            padding: 0.5rem 0;
        }

        nav a {
            color: white;
            text-decoration: none;
            margin: 0 1rem;
            font-size: 1rem;
        }

        nav a:hover {
            text-decoration: underline;
        }

        .container {
            padding: 2rem;
            text-align: center;
        }

        .hero {
            background-color: #007BFF;
            color: white;
            padding: 3rem 1rem;
            margin-bottom: 2rem;
        }

        .hero h1 {
            font-size: 2.5rem;
        }

        .hero p {
            font-size: 1.2rem;
        }

        .features {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 1.5rem;
        }

        .feature {
            background: white;
            border: 1px solid #ddd;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            padding: 1.5rem;
            width: 250px;
            text-align: left;
        }

        .feature h3 {
            color: #007BFF;
        }

        footer {
            text-align: center;
            padding: 1rem 0;
            background-color: #0056b3;
            color: white;
            margin-top: 2rem;
        }

        footer p {
            margin: 0;
            font-size: 0.9rem;
        }
    </style>
</head>
<body>
    <header>
        <h1>Bienvenue sur notre site !</h1>
    </header>
    <nav>
        <a href="#">Accueil</a>
        <a href="#">À propos</a>
        <a href="#">Services</a>
        <a href="#">Contact</a>
    </nav>
    <div class="container">
        <section class="hero">
            <h1>Découvrez nos solutions innovantes</h1>
            <p>Notre équipe est dédiée à fournir des services de qualité pour répondre à vos besoins.</p>
        </section>
        <section class="features">
            <div class="feature">
                <h3>Rapidité</h3>
                <p>Des services rapides et fiables pour vous satisfaire.</p>
            </div>
            <div class="feature">
                <h3>Innovation</h3>
                <p>Des solutions technologiques avancées à votre portée.</p>
            </div>
            <div class="feature">
                <h3>Soutien</h3>
                <p>Un support client disponible et efficace pour vous accompagner.</p>
            </div>
        </section>
    </div>
    <footer>
        <p>&copy; 2024 Votre Site. Tous droits réservés.</p>
    </footer>
</body>
</html>
