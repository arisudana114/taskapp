<h4>Detail pembayaran</h4>

<?php
$price = $movies['price'];
// $amount = count($ticket['name']);
$amountt = count($amount);
?>

<div style="border-style: solid; border-color:red; padding: 20px; width: 200px;">
    <p>Booking ID : <b><?= $ticket['id']; ?></b></p>
    <p>Pass Key. : 955240</p>
    <p>Amount : <b><?= $price * $amountt ?></b></p>
    <p>Cinema : Grand Indonesia</p>
    <p>Movie : <b><?= $movies['title']; ?></b></p>
    <p>Showtime : 23 April 2021 11:45</p>
    <p>Auditorium : Audi #4</p>
    <p>Seats(Total) : <b><?= $ticket['name'] ?></b></p>
</div>