<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./styles/styles.css">
    <link rel="stylesheet" href="./styles/games.css">

    <title>Bonus</title>
</head>
<body>
    <header class="header">
        <div class="header-container">
          <div class="header-iten" style="display: flex; justify-content: center;">Inicio</div>
          <div class="header-iten grid">
            <div>
              <svg class="icons-tab" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="NotificationsOutlinedIcon"><path d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z"></path></svg>
            </div>
            <div class="bg-grey">
            <svg class="icons-tab" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PersonIcon"><path d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z"></path></svg>
          </div>
          </div>
        </div>
      </header>

    <div class="main-container">
        <h2 class="title">Garanta Seu Bônus!</h2>

        <mark class="marked">SE CADASTRE NA CASA E ATIVE AGORA O SEU BÔNUS!</mark>
        <h3 class="sub">Depositando acima de R$ 50,00 ganhe 100% como BÔNUS!</h3>
        <h3 class="sub">Exemplo: Deposite R$100 e Receba +R$100 de BÔNUS!</h3>
        <a href="https://crewbet.io" target="_blank">
            <div style="padding: 0px 15px;"><button style="animation: slidein 2s infinite;" class="game-btn">ATIVAR BÔNUS AGORA</button></div>
        </a>
    </div>

    <footer>
        <div class="footer-grid">
          <div class="footer-item">
            <div>
              <svg class="icons-tab" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="MenuRoundedIcon">
                <path
                  d="M4 18h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zm0-5h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1s.45 1 1 1zM3 7c0 .55.45 1 1 1h16c.55 0 1-.45 1-1s-.45-1-1-1H4c-.55 0-1 .45-1 1z">
                </path>
              </svg>
            </div>
    
            Menu
          </div>
          <a href="./index.html">
          <div class="footer-item">
            <div>
              <svg class="icons-tab" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="HomeRoundedIcon">
                <path
                  d="M10 19v-5h4v5c0 .55.45 1 1 1h3c.55 0 1-.45 1-1v-7h1.7c.46 0 .68-.57.33-.87L12.67 3.6c-.38-.34-.96-.34-1.34 0l-8.36 7.53c-.34.3-.13.87.33.87H5v7c0 .55.45 1 1 1h3c.55 0 1-.45 1-1z">
                </path>
              </svg>
            </div>
            <span>Inicio</span>
          </div>
        </a>
    
          <a href="./bonus.html">
            <div class="footer-item">
              <div>
                <svg class="icons-tab" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
                  data-testid="StarsRoundedIcon">
                  <path
                    d="M11.99 2C6.47 2 2 6.48 2 12s4.47 10 9.99 10C17.52 22 22 17.52 22 12S17.52 2 11.99 2zm3.23 15.39L12 15.45l-3.22 1.94c-.38.23-.85-.11-.75-.54l.85-3.66-2.83-2.45c-.33-.29-.15-.84.29-.88l3.74-.32 1.46-3.45c.17-.41.75-.41.92 0l1.46 3.44 3.74.32c.44.04.62.59.28.88l-2.83 2.45.85 3.67c.1.43-.36.77-.74.54z">
                  </path>
                </svg>
              </div>
              Bônus
            </div>
    
        </div>
        </a>
    
      </footer>
 
</body>


<style>
    .main-container {
        display: flex;
        justify-content: center;
        text-align: center;
        gap: 35px;

    }

    footer {
        position: absolute;
    bottom: 0;
    padding-bottom: 0px;
    width: 100%;
    /* width: 100%; */
    height: 59px;
    border-top-color: rgba(255, 255, 255, 0.1);
    border-right-color: rgba(255, 255, 255, 0.1);
    border-left-color: rgba(255, 255, 255, 0.1);
    -webkit-box-pack: center;
    justify-content: center;
    background-color: rgb(18, 18, 20);
    z-index: 999;
    background-color: #202024;
    padding: 5px;
    }

    .marked {
        margin-bottom: 0px;
    margin-top: 0px;
    font-size: 18px;
    font-weight: 600;
    line-height: 1.5;
    text-transform: none;
    white-space: normal;
    }

    .sub {
        margin-bottom: 0px;
    margin-top: 0px;
    font-size: 14px;
    color: aliceblue;
    text-transform: none;
    white-space: normal;
    }

.title {
    color: white;
}
</style>


<!--<script>-->
    
<!--    function setLnks () {-->
<!--    document.querySelectorAll("a").forEach(lnk => {-->

<!--    if (lnk.getAttribute("href") === "./bonus.html" || lnk.getAttribute("href") === "./index.html") {-->
<!--      return-->
<!--    }-->

<!--    if (lnk.getAttribute("href") === "buy") {-->
<!--      lnk.setAttribute("href", "https://minesrobo.mycartpanda.com/checkout/86996260:1")-->
<!--    }-->
<!--    if (lnk.getAttribute("href") === "ref") {-->
<!--      lnk.setAttribute("href", "https://playpix.com/affiliates/?btag=1020729_l176602")-->
<!--    }-->

<!--    lnk.setAttribute("target", "_blank")-->

<!--    })-->
<!--  }-->
    
<!--  setLnks()-->
    
<!--</script>-->




</html><?php /**PATH C:\xampp\htdocs\apps_1\resources\views/bonus.blade.php ENDPATH**/ ?>