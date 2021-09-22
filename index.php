<!DOCTYPE html>
<html lang="cz">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-/bQdsTh/da6pkI1MST/rWKFNjaCP5gBSY4sEBT38Q/9RBh9AH40zEOg7Hlq2THRZ" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">
    <link href="https://getbootstrap.com/docs/4.1/assets/css/docs.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/sidebar.css">
    <link rel="stylesheet" href="./css/custom.css">
    <title>Bc. Jan Kleprlík</title>
</head>

<body>
    <div class="container-fluid ">
        <div class="d-flex flex-row">
            <div class="p-2">
                <div class="flex-shrink-0 p-3 bg-black bg-opacity-25 rounded-3" style="width: 280px;">
                    <a href="./index.html" class="d-flex align-items-center pb-3 mb-3 link-dark text-decoration-none border-bottom">
                        <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi me-3 bi-code-slash" viewBox="0 0 16 16">
                            <path d="M10.478 1.647a.5.5 0 1 0-.956-.294l-4 13a.5.5 0 0 0 .956.294l4-13zM4.854 4.146a.5.5 0 0 1 0 .708L1.707 8l3.147 3.146a.5.5 0 0 1-.708.708l-3.5-3.5a.5.5 0 0 1 0-.708l3.5-3.5a.5.5 0 0 1 .708 0zm6.292 0a.5.5 0 0 0 0 .708L14.293 8l-3.147 3.146a.5.5 0 0 0 .708.708l3.5-3.5a.5.5 0 0 0 0-.708l-3.5-3.5a.5.5 0 0 0-.708 0z"/>
                        </svg>
                        <span class="fs-2 fw-semibold">Jan Kleprlík</span>
                    </a>
                    <ul class="list-unstyled ps-0">
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#NPRG030-collapse" aria-expanded="false">
                            Programování - NPRG030
                        </button>
                            <div class="collapse" id="NPRG030-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#NPRG030_00" class="link-dark rounded" role="button" aria-expanded="false" data-bs-toggle="collapse">Obecné informace</a></li>
                                    <?php
                                        $file=__DIR__."/NPRG030/data.csv";
                                        $handle = fopen($file, "r");
                                        $counter = 0;
                                        while(!feof($handle)){
                                            $data = explode(";",fgets($handle));
                                            if ($counter > 0){
                                            ?>                                        
                                    <li><a href=<?php echo "#NPRG030_".$counter?> class="link-dark rounded" role="button" aria-expanded="false" data-bs-toggle="collapse"><?php echo htmlspecialchars($data[0]);?></a></li>
                                        <?php
                                            }
                                            $counter++;
                                        }
                                        fclose($handle);
                                        ?>
                                        
                                        

     
                                </ul>
                            </div>
                        </li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#NPRG062-collapse" aria-expanded="false">
                            Algoritmizace - NPRG062
                        </button>
                            <div class="collapse" id="NPRG062-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a href="#NPRG062_00" class="link-dark rounded" role="button" aria-expanded="false" data-bs-toggle="collapse">Obecné informace</a></li>
                                    <?php
                                        $file=__DIR__."/NPRG062/data.csv";
                                        $handle = fopen($file, "r");
                                        $counter = 0;
                                        while(!feof($handle)){
                                            $data = explode(";",fgets($handle));
                                            if ($counter > 0){
                                            ?>                                        
                                    <li><a href=<?php echo "#NPRG062_".$counter?> class="link-dark rounded" role="button" aria-expanded="false" data-bs-toggle="collapse"><?php echo htmlspecialchars($data[0]);?></a></li>
                                        <?php
                                            }
                                            $counter++;
                                        }
                                        fclose($handle);
                                        ?>
                                </ul>
                            </div>
                        </li>
                        <li class="border-top my-3"></li>
                        <li class="mb-1">
                            <button class="btn btn-toggle align-items-center rounded collapsed" data-bs-toggle="collapse" data-bs-target="#aboutme-collapse" aria-expanded="true">
                            About Me
                        </button>
                            <div class="collapse show" id="aboutme-collapse">
                                <ul class="btn-toggle-nav list-unstyled fw-normal pb-1 small">
                                    <li><a id="aboutme-btn" href="#aboutme" class="link-dark rounded" role="button" data-bs-toggle="collapse">Obecné informace</a></li>
                                    <li><a id="github-btn" href="https://github.com/JanKleprlik" class="link-dark rounded" target="_blank">GitHub</a></li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="p-2">
                <!-- NPRG030 -->
                <div>
                    <!-- NPRG030 - obecné informace -->
                    <div class="collapse bd-callout bd-callout-info bg-light-info" id="NPRG030_00">
                        <h1>Programování 1 - NPRG030</h1>
                        <hr>
                        <h3>Podmínky pro získání zápočtu</h3>
                        <p>
                            <ul>
                                <li>Aktivní účast na cvičení.</li>
                                <li>Alespoň 70 % bodů z domácích úkolů.</li>
                                <li>Zápočtový test (na konci semestru).</li>
                                <li>Zápočtový program (včetně dokumentace) (nejpozději do 28.2.2022).</li>
                            </ul>
                        </p>
                        <h3>Přednáška</h3>
                        <p>
                            <ul>
                                <li>
                                    Tomáš Holan - Čtvrtek 12:20
                                </li>
                                <li>
                                    <a href="https://ksvi.mff.cuni.cz/~holan/" target="_blank">Link</a>
                                </li>
                            </ul>
                        </p>
                    </div>

                    <?php
                        if(($open = fopen(__DIR__."/NPRG030/data.csv", "r")) !== FALSE){
                            while(($data = fgetcsv($open, 1000, ",")) !== FALSE){
                                $array[] = $data;
                            }

                            fclose($open);
                        }
                        
                        foreach ($array as $key => $value){
                            #skip the header of csv file
                            if ($key < 1) continue;

                            $data = explode(";", $value[0]);

                            $title = $data[0];
                            $description = $data[1];
                            $presentation = $data[2];
                            $homework = $data[3];?>

                            <!-- NPRG030 - hodina -->
                            <div class="collapse bd-callout bd-callout-info bg-light-info" id=<?php echo "NPRG030_".$key?>>
                                <h1><?php echo htmlspecialchars($title)?></h1>
                                <hr>
                                <p><?php echo htmlspecialchars($description)?></p>
                                <h3>Prezentace:</h3>
                                <p><a href=<?php echo "./NPRG030/".htmlspecialchars($presentation)?>>Prezentace</a></p>
                                <?php if ($homework !== "none"){?>
                                    <h3>Úkol:</h3>
                                    <p><?php echo htmlspecialchars($homework)?></p>
                                <?php } ?>
                            </div>


                    <?php
                        }
                    ?>
                </div>


                <!-- NPRG062 -->
                <div>
                    <!-- NPRG030 - obecné informace -->
                    <div class="collapse bd-callout bd-callout-success bg-light-success" id="NPRG062_00">
                        <h1>Algoritmizace - NPRG062</h1>
                        <hr>
                        <h3>Podmínky pro získání zápočtu</h3>
                        <p>
                            <ul>
                                <li>Aktivní účast na cvičení.</li>
                                <li>Alespoň 70 % bodů z domácích úkolů.</li>
                            </ul>
                        </p>
                        <h3>Přednáška</h3>
                        <p>
                            <ul>
                                <li>
                                    Tomáš Dvořák - Út 14:00
                                </li>
                                <li><a href="https://ksvi.mff.cuni.cz/~dvorak/vyuka/NPRG062/" target="_blank">Link</a></li>
                            </ul>
                        </p>
                    </div>

                    <?php
                        $array = [];
                        if(($open = fopen(__DIR__."/NPRG062/data.csv", "r")) !== FALSE){
                            while(($data = fgetcsv($open, 1000, ",")) !== FALSE){
                                $array[] = $data;
                            }

                            fclose($open);
                        }
                        
                        foreach ($array as $key => $value){
                            #skip the header of csv file
                            if ($key < 1) continue;

                            $data = explode(";", $value[0]);

                            $title = $data[0];
                            $description = $data[1];
                            $presentation = $data[2];
                            $homework = $data[3];?>

                            <!-- NPRG062 - hodina -->
                            <div class="collapse bd-callout bd-callout-success bg-light-success" id=<?php echo "NPRG062_".$key?>>
                                <h1><?php echo htmlspecialchars($title)?></h1>
                                <hr>
                                <p><?php echo htmlspecialchars($description)?></p>
                                <h3>Prezentace:</h3>
                                <p><a href=<?php echo "./NPRG062/".htmlspecialchars($presentation)?>>Prezentace</a></p>
                                <?php if ($homework !== "none"){?>
                                    <h3>Úkol:</h3>
                                    <p><?php echo htmlspecialchars($homework)?></p>
                                <?php } ?>
                            </div>


                    <?php
                        }
                    ?>

                </div>

                <!-- ABOUT ME -->
                <div>
                    <div class="collapse show bd-callout bd-callout-danger bg-light-danger" id="aboutme">
                        <h1>About me</h1>
                        <hr>
                        <h3>Kontakt</h3>
                        <p>
                            <ul>
                                <li>e-mail: kleprlik@ksvi.mff.cuni.cz</li>
                            </ul>
                        </p>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <script src="js/main.js" type="text/javascript"></script>
</body>

</html>