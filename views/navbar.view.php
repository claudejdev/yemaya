<h1>Hello Navbar World !</h1>
<h2>You are beautiful !</h2>

<?php foreach ($datas as $lines) : ?>
    <br />
    ---------------
    <br />
    Information 1 : <?= $lines["data1"];?>
    <br />
    Information 2 : <?= $lines["data2"];?>
    <br />
    ---------------
    <br />
<?php endforeach ?>