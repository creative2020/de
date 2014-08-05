<head>
<link rel="stylesheet" type="text/css" href="style-cert.css">
<link type="text/css" media="print" rel="stylesheet" href="cert-print.css" />
</head>
<div class="cert-wrap">
    <div class="cert-frame">
        <div class="cert">
            <div class="cert-logo center">
                <img src="images/logo-cert.png" width="450px"/>
            </div>
            <div class="cert-logo center print">
                <img src="images/logo-cert.png" width="4in"/>
            </div>
            <div class="cert-name"><? echo $_REQUEST['cert-name'] ?></div>
            <div class="cert-company"><? echo $_REQUEST['cert-company'] ?></div>
            <div class="cert-desc">Backup and Recovery Score of: <? echo $_REQUEST['cert-score'] ?></div>
            <div class="cert-score"><? echo $_REQUEST['cert-rating'] ?></div>
            <div class="cert-date">
                <?php
                    $today = getdate();
                    echo ($today[month] . ", " . $today[mday] . " " . $today[year]);
                    ?>
                </div>
            <div class="cert-www">dataedge.com</div>
        </div>
    </div>
</div>