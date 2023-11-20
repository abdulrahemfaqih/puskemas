<?php

if (!isset($_SESSION["login"])) {
    header("Location: login.php");
    exit();
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="front/css/reservasi.css">
    <title>Puskesmas Reservation</title>
</head>

<body>

    <header>
        <h1>Puskesmas Reservation System</h1>
    </header>

    <main>
        <section id="reservation-form">
            <h2>Make a Reservation</h2>
            <form action="process_reservation.php" method="post">
                <label for="name">Your Name:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="appointment-date">Appointment Date:</label>
                <input type="date" id="appointment-date" name="appointment_date" required>

                <label for="message">Additional Information:</label>
                <textarea id="message" name="message" rows="4"></textarea>

                <button type="submit">Submit Reservation</button>
            </form>
        </section>

        <!-- Additional sections for displaying reservations, etc. -->
    </main>

    <footer>
        <p>&copy; 2023 Puskesmas Reservation System</p>
    </footer>

</body>

</html>