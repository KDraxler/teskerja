<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>Arief Maulana</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo base_url() ?>index.php/Welcome">Test Kerja</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" aria-current="page" href="#">Case 1</a>
                    <!-- <a class="nav-link" href="#">Case 2</a> -->
                </div>
            </div>
        </div>
    </nav>
    <div class="container">
        <div class="row mt-3 justify-content-center">
            <div class="col-md-8">
                <h1 class="text-center">Text Checker</h1>
                <!-- <?php echo base_url() ?>index.php/Hitung -->
                <form action="<?php echo base_url() ?>index.php/Hitung" method="POST" id="myForm">
                    <div class="mb-3">
                        <!-- value="<?= @$_POST['text'] ?>" -->
                        <input name="input" type="text" class="form-control" id="input" aria-describedby="emailHelp" placeholder="Input your text here ..." required>
                    </div>
                    <button type="submit" class="btn btn-dark" id="submit" value="send">Process</button>
                </form>
            </div>
            <p>Example: </p><br>
            <p>Since 1995, Java has changed our world . . . and our expectations.. Today, with technology
                such a part of our daily lives, we take it for granted that we can be connected and access
                applications and content anywhere, anytime. Because of Java, we expect digital devices to be
                smarter, more functional, and way more entertaining. In the early 90s, extending the power of
                network computing to the activities of everyday life was a radical vision. In 1991, a small group
                of Sun engineers called the "Green Team" believed that the next wave in computing was the
                union of digital consumer devices and computers. Led by James
                Gosling, the team worked around the clock and created the programming language that would
                revolutionize our world – Java. The Green Team demonstrated their new language with an
                interactive, handheld home-entertainment controller that was originally targeted at the digital
                cable television industry. Unfortunately, the concept was much too advanced for the them at the
                time. But it was just right for the Internet, which was just starting to take off. In 1995, the team
                announced that the Netscape Navigator Internet browser would incorporate Java technology.
                Today, Java not only permeates the Internet, but also is the invisible force behind many of the
                applications and devices that power our day-to-day lives. From mobile phones to handheld
                devices, games and navigation systems to e-business solutions, Java is everywhere! </p>
        </div>
    </div>
    <hr>
    <?php include 'hitung.php'; ?>
    <div class="container" id="jawaban">
        <form action="<?php echo base_url() ?>index.php/Welcome/tambah" method="post">

            <div class="row">
                <div class="col">
                    <h3>Text yang anda masukkan adalah sebagai berikut:</h3>
                    <p><?= $text; ?></p>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Jumlah kata dari teks di atas:</h3>
                    <p><?= $sum; ?></p>
                    <input type="text" name="satu" class="form-controll" value="<?= $sum; ?>" required style="display: none;">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Jumlah kemunculan tiap kata dari teks di atas:</h3>
                    <p><?= $jduplicate; ?></p>
                    <input type="text" name="dua" class="form-controll" value="<?= $jduplicate; ?>" required style="display: none;">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Jumlah kata yang hanya muncul satu kali:</h3>
                    <p><?= $sump; ?></p>
                    <input type="text" name="tiga" class="form-controll" value="<?= $sump; ?>" required style="display: none;">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Jumlah kata yang paling banyak muncul dan katanya:</h3>
                    <p n><?= $empat; ?></p>
                    <input type="text" name="empat" class="form-controll" value="<?= $empat; ?>" required style="display: none;">
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <h3>Jumlah kata yang paling sedikit muncul dan katanya:</h3>
                    <p><?= $lima; ?></p>
                    <input type="text" name="lima" class="form-controll" value="<?= $lima; ?>" required style="display: none;">
                </div>
            </div>
            <button class="btn btn-success" type="submit">Save</button>

        </form>
    </div>


    <script src="https://code.jquery.com/jquery-3.6.0.js" integrity="sha256-H+K7U5CnXl1h5ywQfKtSj8PCmoN9aaq30gDh27Xc0jk=" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>

</html>