<?php
if (isset($_SERVER["HTTP_CF_CONNECTING_IP"])) {
    $_SERVER['REMOTE_ADDR'] = $_SERVER["HTTP_CF_CONNECTING_IP"];
}
$ip = $_SERVER["REMOTE_ADDR"];
?>
<!DOCTYPE html>
<html lang="it">

<head>
    <meta charset="UTF-8">
    <title>xDefcon - Luigi Martinelli</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="keywords" content="xdefcon, luigi martinelli, minecraft, parkercraft" />
    <meta name="description" content="Il sito web personale di Luigi Martinelli, più conosciuto come xDefcon." />
    <link href="https://fonts.googleapis.com/css?family=Josefin+Sans" rel="stylesheet">
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
    <link href="assets/css/style.css" rel="stylesheet">
    <link rel="apple-touch-icon" sizes="180x180" href="/assets/img/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="/assets/img/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="/assets/img/favicon-16x16.png">
    <link rel="manifest" href="/manifest.json">
    <meta name="theme-color" content="#008280">
</head>

<body>
<div class="flex">
    <div class="content">
        <div id="avatar"></div>
        <br>
        <span id="title">
            Luigi Martinelli
        </span>
        <br>
        <span id="sub-title">Benvenuto.</span>
        <hr/>

        <div class="links">
            <a href="https://github.com/xDefcon" target="_blank"><i class="fa fa-github" aria-hidden="true"></i> GitHub</a>
            <a href="https://telegram.me/xDefcon" target="_blank"><i class="fa fa-telegram" aria-hidden="true"></i> Telegram</a>
            <a href="mailto:luigi@xdefcon.com"><i class="fa fa-envelope" aria-hidden="true"></i> Email</a>
            <a href="https://twitter.com/xDefcon" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i> Twitter</a>
            <a href="https://keybase.io/xDefcon" target="_blank"><i class="fa fa-key" aria-hidden="true"></i> Keybase</a>
        </div>
        <hr style="border-style: dashed; color: #c7c7c7"/>
        <div class="links">
            <a href="https://mcapi.xdefcon.com" target="_blank"><i class="fa fa-gear" aria-hidden="true"></i> Minecraft API</a>
            <a href="https://www.spigotmc.org/resources/authors/xdefcon.49193/" target="_blank">
                <i class="fa fa-heart" aria-hidden="true"></i> Spigot Plugins</a>
            <a href="https://www.parkercraft.it" target="_blank"><i class="fa fa-globe" aria-hidden="true"></i> ParkerCraft</a>
        </div>
    </div>
</div>
<script src="assets/js/typed.min.js" type="text/javascript"></script>
<script src="assets/js/text-scramble.js" type="text/javascript"></script>
<script type="text/javascript">
    let phrases;
    let counter = 0;

    const userLang = navigator.language || navigator.userLanguage;

    if (userLang.indexOf("it") === 0) {
        phrases = ['Benvenuto <?php echo $ip; ?>,', 'il tuo IP non verrà salvato.', 'xdefcon.com', 'xdefcon.com - minecraft & web developer'];
    } else {
        phrases = ['Welcome <?php echo $ip; ?>,', 'your IP will not be stored.', 'xdefcon.com', 'xdefcon.com - minecraft & web developer'];
    }

    const el = document.querySelector('#sub-title');
    const fx = new TextScramble(el);

    const next = () => {
        fx.setText(phrases[counter]).then(() => {
            switch (counter) {
                case 0:
                    setTimeout(next, 2000);
                    break;
                case 1:
                    setTimeout(next, 1500);
                    break;
                case 2:
                    setTimeout(next, 900);
                    break;
                case 3:
                    setTimeout(next, 800);
                    break;
                default:
                    return;
            }
        });
        counter++;
    };
    next();
</script>
</body>

</html>