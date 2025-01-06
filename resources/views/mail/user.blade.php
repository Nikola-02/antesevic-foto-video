<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rezervacija datuma</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }
        .email-container {
            max-width: 600px;
            margin: 20px auto;
            background: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }
        .email-header {
            background-color: #007bff;
            color: #fff;
            padding: 20px;
            text-align: center;
            border-radius: 8px 8px 0 0;
        }
        .email-header h1 {
            margin: 0;
            font-size: 24px;
        }
        .email-body {
            padding: 20px;
        }
        .email-body p {
            margin: 10px 0;
        }
        .email-footer {
            margin-top: 20px;
            padding-top: 20px;
            border-top: 1px solid #ddd;
            text-align: center;
            font-size: 12px;
            color: #777;
        }
        .highlight {
            font-weight: bold;
            color: #007bff;
        }
        .button {
            display: inline-block;
            padding: 10px 20px;
            color: #fff;
            background-color: #28a745;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 20px;
        }
        .button:hover {
            background-color: #218838;
        }
    </style>
</head>
<body>
<div class="email-container">
    <!-- Header -->
    <div class="email-header">
        <h1>Rezervacija datuma</h1>
    </div>

    <!-- Body -->
    <div class="email-body">
        <p>Poštovani <span class="highlight">{{ $name }}</span>,</p>
        <p>Hvala na interesovanju za moje usluge! Ovo je potvrda da sam primio Vaš zahtev za rezervaciju datuma.</p>
        <p><strong>Detalji rezervacije:</strong></p>
        <ul>
            <li><strong>Ime i prezime:</strong> {{ $name }}</li>
            <li><strong>Email:</strong> {{ $fromEmail }}</li>
            <li><strong>Datum:</strong> {{ $date }}</li>
            <li><strong>Vaš kontakt telefon:</strong> {{ $phone }}</li>
            <li><strong>Napomena:</strong> {{ $note }}</li>
        </ul>
        <p>Uskoro ću Vas kontaktirati kako bismo potvrdili vašu rezervaciju i dogovorili sve detalje.</p>
        <p>Za sva dodatna pitanja, slobodno me kontaktirajte putem e-pošte ili telefona.</p>

        <a href="mailto:antesevicfotovideo@gmail.com" class="button">Kontaktirajte me mejlom</a>
        <a href="tel:+381641364897" class="button">Kontaktirajte me telefonom</a>
    </div>

    <!-- Footer -->
    <div class="email-footer">
        <p>Hvala vam na poverenju!</p>
        <p>&copy; {{ date('Y') }} Vaša Kompanija</p>
    </div>
</div>
</body>
</html>
