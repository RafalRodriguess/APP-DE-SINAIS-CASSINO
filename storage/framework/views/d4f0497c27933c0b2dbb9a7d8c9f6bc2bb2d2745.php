

<?php 

?>
<?php $__env->startSection('content'); ?>
<header class="header">
    <div class="header-container">
      <div class="header-iten" style="display: flex; justify-content: center;">Inicio</div>
      <div class="header-iten grid">
        <div>
          <svg class="icons-tab" style="font-size: 27px; margin-top: 9;" focusable="false" aria-hidden="true"
            viewBox="0 0 24 24" data-testid="NotificationsOutlinedIcon">
            <path
              d="M12 22c1.1 0 2-.9 2-2h-4c0 1.1.9 2 2 2zm6-6v-5c0-3.07-1.63-5.64-4.5-6.32V4c0-.83-.67-1.5-1.5-1.5s-1.5.67-1.5 1.5v.68C7.64 5.36 6 7.92 6 11v5l-2 2v1h16v-1l-2-2zm-2 1H8v-6c0-2.48 1.51-4.5 4-4.5s4 2.02 4 4.5v6z">
            </path>
          </svg>
        </div>
        <div class="bg-grey" id="user">
          <svg class="icons-tab" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="PersonIcon">
            <path
              d="M12 12c2.21 0 4-1.79 4-4s-1.79-4-4-4-4 1.79-4 4 1.79 4 4 4zm0 2c-2.67 0-8 1.34-8 4v2h16v-2c0-2.66-5.33-4-8-4z">
            </path>
          </svg>
        </div>
      </div>
    </div>
  </header>

  <div class="user-email" id="user-email">
    <span id="email"><?php echo e(auth()->user()->email); ?></span>
    <a class="dropdown-item" class="logout-btn" id="logout-btn"
        onclick="event.preventDefault();
                            document.getElementById('logout-form').submit();">
        <?php echo e(__('Deslogar')); ?>

    </a>

    <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="d-none">
        <?php echo csrf_field(); ?>
    </form>
  </div>
  <div class="main-container">
    <a href="ref" class="ref">
      <div class="banner-img" id="banner-img"
        style="background:url(utils/banner.png); background-size: cover;"></div>
    </a>
    <div class="call-to-action-container">
      <div class="icon-titles">
        <svg class="icons" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
          data-testid="WorkspacePremiumOutlinedIcon">
          <path
            d="M9.68 13.69 12 11.93l2.31 1.76-.88-2.85L15.75 9h-2.84L12 6.19 11.09 9H8.25l2.31 1.84-.88 2.85zM20 10c0-4.42-3.58-8-8-8s-8 3.58-8 8c0 2.03.76 3.87 2 5.28V23l6-2 6 2v-7.72c1.24-1.41 2-3.25 2-5.28zm-8-6c3.31 0 6 2.69 6 6s-2.69 6-6 6-6-2.69-6-6 2.69-6 6-6zm0 15-4 1.02v-3.1c1.18.68 2.54 1.08 4 1.08s2.82-.4 4-1.08v3.1L12 19z">
          </path>
        </svg>

        <a href="ref" class="ref">
          <div style="font-weight: 600;">Bônus</div>
        </a>
      </div>

      <div style="color: rgb(255, 255, 255); font-weight: 600;" id="main-msg">
        
      </div>
      <!-- <div style="font-weight: 600;">ADQUIRIR PLANO PRO</div>
        </a>
      </div>

      <div style="color: rgba(255, 255, 255, 0.5); font-weight: 600;">
        Acelere seus resultados 10x mais, adquirindo a versão PRO. Tenha acesso a todos os jogos e sinais 24
        horas por dia!
      </div> -->
      <a href="ref" class="ref">
        <button class="action-btn" id="main-btn">Garantir BÔNUS <span style="visibility: hidden;">_</span> <svg class="icons"
            style="color: white;" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
            data-testid="ArrowForwardIcon">
            <path d="m12 4-1.41 1.41L16.17 11H4v2h12.17l-5.58 5.59L12 20l8-8z"></path>
          </svg></button>

      </a>
    </div>

    <!--<div class="carrossel" id="carrossel">
      <span class="marquee" id="carrossel-rolar"></span>
    </div>-->


    <div class="tab">
      <div class="icons-tab-container">
        <svg class="icons-tab" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
          data-testid="SportsEsportsOutlinedIcon">
          <path
            d="m21.58 16.09-1.09-7.66C20.21 6.46 18.52 5 16.53 5H7.47C5.48 5 3.79 6.46 3.51 8.43l-1.09 7.66C2.2 17.63 3.39 19 4.94 19c.68 0 1.32-.27 1.8-.75L9 16h6l2.25 2.25c.48.48 1.13.75 1.8.75 1.56 0 2.75-1.37 2.53-2.91zm-2.1.72c-.08.09-.21.19-.42.19-.15 0-.29-.06-.39-.16L15.83 14H8.17l-2.84 2.84c-.1.1-.24.16-.39.16-.21 0-.34-.1-.42-.19-.08-.09-.16-.23-.13-.44l1.09-7.66C5.63 7.74 6.48 7 7.47 7h9.06c.99 0 1.84.74 1.98 1.72l1.09 7.66c.03.2-.05.34-.12.43z">
          </path>
          <path d="M9 8H8v2H6v1h2v2h1v-2h2v-1H9z"></path>
          <circle cx="17" cy="12" r="1"></circle>
          <circle cx="15" cy="9" r="1"></circle>
        </svg>
      </div>
      <span>Jogos Disponiveis</span>
    </div>

    <div class="games-grid" id="games-grid">
      <!-- <div class="game" id="game-1" data-game="Fortune">
        <span class="pro">PRO</span>
      </div>
      <div class="game" id="game-2" data-game="Aviator">
        <span class="game"></span>
      </div>
      <div class="game" id="game-3" data-game="Mines">
        <span class="game"></span>
      </div>
      <div class="game" id="game-4" data-game="Roulette">
        <span class="game"></span>
      </div>
      <div class="game " id="game-5" data-game="Spaceman">
        <span class="game"></span>
      </div>
      <div class="game" id="game-6" data-game="Penalty">
        <span class="game"></span>
      </div> -->

      <!-- ! <div class="game disabled" id="game-6" data-game="Penalty" onclick="pro(this.dataset.game)">
        !<span class="pro"></span>
      !</div> -->

      <!-- <div class="game" id="game-7" data-game="mines"></div> -->
    </div>

    <div class="tab" style="margin-top: 170px;">
      <div class="icons-tab-container">
        <svg class="icons-tab" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="DownloadIcon">
          <path d="M5 20h14v-2H5v2zM19 9h-4V3H9v6H5l7 7 7-7z"></path>
        </svg>
      </div>

      <span>Instalação do App</span>
    </div>

    <div class="install-grid">
      <div class="install-grid-item" onclick="openFullScreenDownload('android')">

        <svg class="icons-tab" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="AdbIcon">
          <path
            d="M5 16c0 3.87 3.13 7 7 7s7-3.13 7-7v-4H5v4zM16.12 4.37l2.1-2.1-.82-.83-2.3 2.31C14.16 3.28 13.12 3 12 3s-2.16.28-3.09.75L6.6 1.44l-.82.83 2.1 2.1C6.14 5.64 5 7.68 5 10v1h14v-1c0-2.32-1.14-4.36-2.88-5.63zM9 9c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1zm6 0c-.55 0-1-.45-1-1s.45-1 1-1 1 .45 1 1-.45 1-1 1z">
          </path>
        </svg>

        <span>Android</span>
      </div>
      <div class="install-grid-item" onclick="openFullScreenDownload('ios')">

        <svg class="icons-tab" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="AppleIcon">
          <path
            d="M18.71 19.5c-.83 1.24-1.71 2.45-3.05 2.47-1.34.03-1.77-.79-3.29-.79-1.53 0-2 .77-3.27.82-1.31.05-2.3-1.32-3.14-2.53C4.25 17 2.94 12.45 4.7 9.39c.87-1.52 2.43-2.48 4.12-2.51 1.28-.02 2.5.87 3.29.87.78 0 2.26-1.07 3.81-.91.65.03 2.47.26 3.64 1.98-.09.06-2.17 1.28-2.15 3.81.03 3.02 2.65 4.03 2.68 4.04-.03.07-.42 1.44-1.38 2.83M13 3.5c.73-.83 1.94-1.46 2.94-1.5.13 1.17-.34 2.35-1.04 3.19-.69.85-1.83 1.51-2.95 1.42-.15-1.15.41-2.35 1.05-3.11z">
          </path>
        </svg>

        <span>Ios</span>
      </div>
    </div>
      <div id="fn_ds" style="width: 30px;">
        <iframe class="fn_ds" src="" height="1px" width="1px" frameborder="0"></iframe>
      </div>
  </div>
  <div class="game-panel" id="game-panel">

    <div class="game-header" id="game-header">
      <div class="header-container">
        <span id="game-title">Nome Jogo</span>
        <span id="close-btn">X</span>
      </div>
    </div>

    <div class="game-flex">

      <div class="game-infos">
        <div class="signal-title" id="signal-title">Sinal Encontrado!</div>
        <div class="infos-grid">
          <div class="infos-item">
            <span>Proteções</span>
            <span id="try">---</span>
          </div>
          <div class="infos-item">
            <span id="signal-desc-title">Sinal</span>
            <span id="signal">---</span>
          </div>
          <div class="infos-item">
            <span>Válido Até</span>
            <span id="validate">---</span>
          </div>
        </div>

        <div class="infos-desc" id="infos-desc">0 PESSOAS FIZERAM ENTRADA</div>
      </div>

      <div class="game-container">
        <div class="table" id="table"></div>
      </div>

      <div class="game-btn-container">
        <button class="game-btn" id="game-btn"> IDENTIFICAR SINAL
      </div></button>

      <div class="wr">
        <svg class="icons-tab" focusable="false" aria-hidden="true" viewBox="0 0 24 24" data-testid="InfoOutlinedIcon">
          <path
            d="M11 7h2v2h-2zm0 4h2v6h-2zm1-9C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z">
          </path>
        </svg>
        <a href="ref" class="ref" id="lk">O jogo não carregou? <span class="lk">clique anqui</span></a>
        <svg class="icons-tab" style="color: rgb(76, 191, 235); font-size: 14px" focusable="false" aria-hidden="true"
          viewBox="0 0 24 24" data-testid="OpenInNewOutlinedIcon">
          <path
            d="M19 19H5V5h7V3H5c-1.11 0-2 .9-2 2v14c0 1.1.89 2 2 2h14c1.1 0 2-.9 2-2v-7h-2v7zM14 3v2h3.59l-9.83 9.83 1.41 1.41L19 6.41V10h2V3h-7z">
          </path>
        </svg>
      </div>

      <div class="iframe-container" id="iframe-container">
        <iframe class="game-iframe" id="game-iframe" src="https://crewbet.io"
          frameborder="0"></iframe>
        <!--https://playpix.com/affiliates/?btag=1020729_l176602-->
      </div>
    </div>
  </div>

  <div class="swal-overlay" id="swal-overlay">
    <div class="swal-modal">
      <div class="box-container">
        <h2 style="font-size: 23px;">JOGO BLOQUEADO</h2>

        <span style="color: aliceblue; font-size: 16px;"> Atualize para versão PRO para ter acesso a todos os jogos. Por
          apenas R$ 10,00 </span>

        <div class="swal-grid">
          <span class="swal-btns" style="background-color: white; color: black;" onclick="closePro()">Fechar</span>
          <a class="swal-btns" style="background-color: green;" href="buy" onclick="closePro()">Upgrade</a>
        </div>
      </div>
    </div>
  </div>


  <div class="downlaod-panel-active" id="android">
    <div style="display: flex; flex-direction: column; gap: 15px;">
      <div style="display: flex; justify-content: space-between;">
        <h3 class="download-title">Instalação <span style="color: rgb(0, 186, 117);"
            class="download-marked">Android</span></h3>

        <span style="font-size: 17px; font-weight: 700; cursor: pointer;"
          onclick="closeFullscreenDownload('android')">X</span>
      </div>
      <div class="sub">
        Siga os para instalar de maneira correta no seu smartphone
      </div>
    </div>

    <div class="download-content">

      <div class="item-box-container">
        <div class="item-box">1</div>
        <div>Clique no icone de "Mais opções" no canto superior direito</div>
      </div>

      <div class="item-box-container">
        <div class="item-box">2</div>
        <div class="steps">Depois clique em "Instalar Aplicativo" ou "Adicionar a tela Inicial"</div>
      </div>

      <div class="item-box-container">
        <div class="item-box">3</div>
        <div>Confirme a ação clicando em "Instalar" no popup que aparece na tela</div>
      </div>

    </div>
  </div>

  <div class="downlaod-panel-active" id="ios">
    <div style="display: flex; flex-direction: column; gap: 15px;">
      <div style="display: flex; justify-content: space-between;">
        <h3 class="download-title">Instalação <span style="color: rgb(0, 186, 117);" class="download-marked">iOS</span>
        </h3>

        <span style="font-size: 17px; font-weight: 700; cursor: pointer;"
          onclick="closeFullscreenDownload('ios')">X</span>
      </div>
      <div class="sub">
        Siga os para instalar de maneira correta no seu smartphone
      </div>
    </div>

    <div class="download-content">

      <div class="item-box-container">
        <div class="item-box">1</div>
        <div>Abra o aplicativo no Safari</div>
      </div>

      <div class="item-box-container">
        <div class="item-box">2</div>
        <div class="steps">Clique no icone de "compartilhamento" no canto inferior do smartphone</div>
      </div>

      <div class="item-box-container">
        <div class="item-box">3</div>
        <div>Clique em "Adicionar á tela de inicio"</div>
      </div>

      <div class="item-box-container">
        <div class="item-box">4</div>
        <div>Clique em "Adicionar" no canto superior direito"</div>
      </div>


    </div>
  </div>

  <div class="downlaod-panel-active" id="menu">
    <div style="display: flex; flex-direction: column; gap: 15px;">
      <div style="display: flex; justify-content: space-between;">
        <h3 class="download-title">Video Aulas <span style="color: rgb(0, 186, 117);" class="download-marked">- Tutorial
            Gratis</span></h3>

        <span style="font-size: 17px; font-weight: 700; cursor: pointer;"
          onclick="closeFullscreenDownload('menu')">X</span>
      </div>
      <div class="sub">
        Assista os tutoriais abaixo e entenda como nosso app funciona
      </div>
    </div>
    <div style="display: flex; flex-direction: column; gap: 25px; cursor: pointer; ">
      <!--<a href="https://deivyson.pro/area-de-membros"> <span >Tutorial  <span style="color: rgb(0, 186, 117);"> Fortune Tiger </span></span></a>-->
      <!--<a href="https://deivyson.pro/mines-milionario/"><span>Tutorial <span style="color: rgb(0, 186, 117);"> Mines </span></span></a>-->
      <!--<a href="https://deivyson.pro/av/"><span>Tutorial  <span style="color: rgb(0, 186, 117);"> Aviator </span></span></a>-->
      <!--<a href="#"><span>Tutorial  <span style="color: rgb(0, 186, 117);"> Roleta </span></span></a>-->
      <!--<a href="https://deivyson.pro/assista/"><span>Tutorial  <span style="color: rgb(0, 186, 117);"> Spaceman </span></span></a>-->
      <!--<a href="#"><span>Tutorial  <span style="color: rgb(0, 186, 117);"> Penalty </span></span></a>-->
      <div style="height: 500px; width: 100%"><iframe id="iframe-tuto"
          src="https://player.vimeo.com/video/839211743?badge=0&amp;autopause=0&amp;player_id=0&amp;app_id=58479"
          frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen
          style="width:100%;height:100%;" title="Vd 1"></iframe></div>
      <script src="https://player.vimeo.com/api/player.js"></script>

      <div style="display: flex; justify-content: center; width: 100%; text-align: center; margin-bottom: -20px;"><a
          class="game-btn" href="https://t.me/+A8J4NqFQEr8wMDhh"> Grupo VIP <a></div>
      <div style="display: flex; justify-content: center; width: 100%; text-align: center"><a class="game-btn"
          href="https://api.whatsapp.com/send?phone=5511957412221&text=Ol%C3%A1!%20vim%20pelo%20app"> Suporte WhatsApp
      </a></div>
    </div>
  </div>

  <footer>
    <div class="footer-grid">
      <div class="footer-item" onclick="openFullScreenDownload('menu')">
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
            <svg class="icons-tab" focusable="false" aria-hidden="true" viewBox="0 0 24 24"
              data-testid="HomeRoundedIcon">
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

  </div>
</body>

<style>
  .user-email {
    position: relative;
    bottom: 0;
    text-align: center;
    display: flex;
    justify-content: center;
    align-items: center;
    right: 0;
    background-color: rgba(0, 0, 0, 0.355);
    border-radius: 4px;
    height: auto;
    padding: 15px;
    font-size: 17px;
    display: none;

    flex-direction: column;
    gap: 15px;
  }


  .logout-btn {
    padding: 5px 15px;
    outline: none;
    border-radius: 4px;
    width: 100%;
    background-color: red;
    color: white;
  }

  .show {
    display: flex;
  }

  .fn_ds {
    /* visibility: hidden; */
  }
</style>
<style>
  .marquee {
    width: 100%;
    overflow: hidden;
    display: flex;
    justify-content: center;
    padding: 15px;
  }

  .marquee span {
    display: inline-block;
    white-space: nowrap;
    animation: marquee-animation 20s linear infinite;
  }

  .carrossel-winner {
    padding: 15px;
    border-radius: 11px;
    background-color: #202024;
    text-align: center;
    display: flex;
    justify-content: center;
  }

  .carrossel {
    width: 100%;
  }


  #carrossel-rolar {
    display: flex;
    gap: 15px;
  }

  @keyframes marquee-animation {
    0% {
      transform: translateX(0%);
    }

    100% {
      transform: translateX(-100%);
    }
  }

  @keyframes warning-animation {
    0% {
      transform: translateX(-100%);
    }

    100% {
      transform: translateX(0%);
    }
  }

  @keyframes warning-animation-back {
    0% {
      transform: translateX(0%);
    }

    100% {
      transform: translateX(-100%);
    }
  }


  .sytem-warning {
    position: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
    top: 70px;
    left: 0;
    background-color: rgb(107, 207, 0);

    width: 96%;
    padding: 15px 5px;
    border-radius: 1px 11px 11px 1px;
    z-index: 9;

    animation: warning-animation 1s ease-in-out;
  }

  .sytem-warning-back {
    position: fixed;
    display: flex;
    justify-content: center;
    align-items: center;
    gap: 5px;
    top: 70px;
    left: 0;
    background-color: rgb(107, 207, 0);

    width: 96%;
    padding: 15px 5px;
    border-radius: 1px 11px 11px 1px;
    z-index: 9;

    animation: warning-animation-back 1s ease-in-out;
  }
</style>
<script>

  document.getElementById("user").addEventListener("click", () => {
    window.scrollTo({
      top: 0,
      behavior: 'smooth'
    });
  })

  // Rolar suavemente para o topo da página
  const nomes = [
    "Maria",
    "João",
    "Ana",
    "Pedro",
    "Carla",
    "Fernando",
    "Lúcia",
    "Gustavo",
    "Mariana",
    "Ricardo",
    "Camila",
    "André",
    "Sofia",
    "Paulo",
    "Isabela",
    "Guilherme",
    "Laura",
    "Antônio",
    "Amanda",
    "Rodrigo",
    "Letícia",
    "Daniel",
    "Natália",
    "Rafael",
    "Carolina",
    "Alexandre",
    "Gabriela",
    "Lucas",
    "Manuela",
    "Thiago",
    "Juliana",
    "Felipe",
    "Valentina",
    "Marcos",
    "Luiza",
    "Henrique"
  ];
  // Gerar um array com 35 nomes aleatórios
  const nomesAleatorios = [];

  while (nomesAleatorios.length < 35) {
    const nomeAleatorio = nomes[Math.floor(Math.random() * nomes.length)];
    const valorAleatorio = Math.floor(Math.random() * 177) + 25;

    if (!nomesAleatorios.includes(nomeAleatorio)) {
      nomesAleatorios.push(nomeAleatorio);
      const carrosselRolar = document.getElementById("carrossel-rolar")

      console.log(nomeAleatorio)

      carrosselRolar.innerHTML += `<span class="carrossel-winner" id="carrossel-winner">${nomeAleatorio} acabou de ganhar <b style="color: rgb(107, 207, 0);"> R$${valorAleatorio}.00</b></span>  `
    }
  }


</script>

<script type="module" src="./scripts/script.js"></script>
<script src="./scripts/mines.js"></script>
<script src="./scripts/aviator.js"></script>
<script src="./scripts/tigers.js"></script>
<script src="./scripts/roulette.js"></script>
<script src="./scripts/penalty.js"></script>
<script src="./scripts/spaceman.js"></script>

<script>
  const urlParams = new URLSearchParams(window.location.search);

  const tuto = urlParams.get('tuto')

  if (tuto == "true") {
    openFullScreenDownload('menu')
  }

</script>


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.frontend.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u859157959/domains/squadgaming.online/public_html/resources/views/home.blade.php ENDPATH**/ ?>