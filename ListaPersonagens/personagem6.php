<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <script src="https://cdn.tailwindcss.com"></script> 
    <title>Patolino</title>
  </head>
  <body>
  <header>
    <!-- Main navigation container -->
<nav
  class="relative flex w-full flex-nowrap items-center justify-between bg-blue py-2 text-neutral-500 shadow-lg hover:text-neutral-700 focus:text-neutral-700 dark:bg-neutral-600 lg:flex-wrap lg:justify-start lg:py-4"
  data-te-navbar-ref style="background-color: #0a4275">
  <div class="flex w-full flex-wrap items-center justify-between px-3">
    <!-- Hamburger button for mobile view -->
    <button
      class="block border-0 bg-transparent px-2 text-neutral-500 hover:no-underline hover:shadow-none focus:no-underline focus:shadow-none focus:outline-none focus:ring-0 dark:text-neutral-200 lg:hidden"
      type="button"
      data-te-collapse-init
      data-te-target="#navbarSupportedContent3"
      aria-controls="navbarSupportedContent3"
      aria-expanded="false"
      aria-label="Toggle navigation">
      <!-- Hamburger icon -->
      <span class="[&>svg]:w-7">
        <svg
          xmlns="http://www.w3.org/2000/svg"
          viewBox="0 0 24 24"
          fill="currentColor"
          class="h-7 w-7">
          <path
            fill-rule="evenodd"
            d="M3 6.75A.75.75 0 013.75 6h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 6.75zM3 12a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75A.75.75 0 013 12zm0 5.25a.75.75 0 01.75-.75h16.5a.75.75 0 010 1.5H3.75a.75.75 0 01-.75-.75z"
            clip-rule="evenodd" />
        </svg>
      </span>
    </button>
    <!-- Collapsible navbar container -->
    <div
      class="!visible mt-2 hidden flex-grow basis-[100%] items-center lg:mt-0 lg:!flex lg:basis-auto"
      id="navbarSupportedContent3"
      data-te-collapse-item>
      <!-- Navbar title -->
      <a class="pr-2 text-xl text-white dark:text-neutral-200" href="index.php"
        >Home</a>
      <!-- Left links -->
      <ul
        class="list-style-none mr-auto flex flex-col pl-0 lg:flex-row"
        data-te-navbar-nav-ref>
        <!-- Home link -->
        <li class="my-4 lg:my-0 lg:pr-2" data-te-nav-item-ref>
          <a
            class="active disabled:text-white lg:px-2 [&.active]:text-white dark:[&.active]:text-neutral-400"
            aria-current="page"
            href="forms.php"
            data-te-nav-link-ref
            >Formulário</a>
        </li>
        <!-- Features link -->
        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
          <a
            class="p-0 text-white hover:text-white focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
            href="select.php"
            data-te-nav-link-ref
            >Banco de Dados</a>
        </li>
        <!-- Pricing link -->
        <li class="mb-4 lg:mb-0 lg:pr-2" data-te-nav-item-ref>
          <a
            class="p-0 text-white hover:text-white focus:text-neutral-700 disabled:text-black/30 dark:text-neutral-200 dark:hover:text-neutral-400 dark:focus:text-neutral-400 lg:px-2 [&.active]:text-black/90 dark:[&.active]:text-neutral-400"
            href="select.php"
            data-te-nav-link-ref
            >Alterar Banco de Dados</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<!-- Jumbotron -->
<div class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center"
  style="background-image: url('https://i.ytimg.com/vi/DQOIrHV9Wx4/maxresdefault.jpg'); height: 400px">
  <div
    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
    style="background-color: rgba(0, 0, 0, 0.6)">
    <div class="flex h-full items-center justify-center">
      <div class="text-white">
        <h2 class="mb-4 text-4xl font-semibold">Patolino</b></h2>
        <h4 class="mb-6 text-xl font-semibold">melhor amigo e rival do Pernalonga</b></h4>
      </div>
    </div>
  </div>
</div> <br></br>
<div class="mx-auto" style="text-align: -webkit-center;">
<div class="flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 md:max-w-4xl md:flex-row">
  <img class=" w-full"
    src="https://http2.mlstatic.com/patolino-kit-1-totem-de-50cm-10-mini-display-D_NQ_NP_614960-MLB26720319042_012018-F.jpg" alt="" style="height: 33rem" />
  <div class="flex flex-col justify-start p-6">
    <ul class="w-96 inline-block">
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
   Nome Completo: Daffy Duck <br>
   Em português: Patolino
  </li>
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
    Criado(a) por: Tex Avery e Bob Clampett
  </li>
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
    Nascimento: 17 de abril de 1937
  </li>
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
    Primeira aparição em Porky's Duck Hunt em 1937
  </li>
  <li class="w-full py-4">Patolino ficou no 1° lugar na lista dos 50 melhores personagens animados de todos os tempos da revista TV Guide.</li>
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
    Em Space Jam e Looney Tunes de Volta à Ação, sua personalidade foi dosada entre maluca e invejosa, quando tentava competir com Pernalonga. 
  </li>
  
</div></div></div>
<br></br>
<h2 class="text-5xl font-medium leading-tight text-white text-center" style="background-color: #0a4275">Galeria de fotos do Patolino</h2>
  <footer
  class=" text-center text-white dark:bg-neutral-600 dark:text-neutral-200" style="background-color: #0a4275">
  <div class="container p-6">
    <div class="grid gap-4 md:grid-cols-3 lg:grid-cols-6">
      <div class="mb-6 lg:mb-0">
        <img
          src="https://th.bing.com/th/id/R.050f7f22051482e340a9748b4c9fb7a0?rik=JGfDQMgLiopBkQ&riu=http%3a%2f%2f3.bp.blogspot.com%2f-MBekG74OEso%2fUZKOWM9PNOI%2fAAAAAAACgKY%2fk5hQqIG04r0%2fs1600%2fpatolino-imagens-patolino%2b(1).jpg&ehk=0GUeVDsxhcXB8TvP%2f5e9%2bgJt6cPUF%2bTfmu1jXe38Szs%3d&risl=&pid=ImgRaw&r=0"
          class="w-full rounded-md shadow-lg" />
      </div>
      <div class="mb-6 lg:mb-0">
        <img
          src="https://www.clopotel.ro/_files/datafiles/teste/imgs/1070_q_8868_images.jpg"
          class="w-full rounded-md shadow-lg" />
      </div>
      <div class="mb-6 lg:mb-0">
        <img
          src="https://yt3.ggpht.com/a/AATXAJzewV5Z9CZAx_Pg2gDaN0cGtOqmdm7c9q1bDw=s900-c-k-c0xffffffff-no-rj-mo"
          class="w-full rounded-md shadow-lg" />
      </div>
      <div class="mb-6 lg:mb-0">
        <img
          src="https://th.bing.com/th/id/R.839fcebf7598788628de086b3b4d52c8?rik=O%2bBUmez7DGKpjQ&pid=ImgRaw&r=0"
          class="w-full rounded-md shadow-lg" />
      </div>
      <div class="mb-6 lg:mb-0">
        <img
          src="https://th.bing.com/th/id/OIP.DAQgCjbZUvJ9hZBFF9EgXQHaEK?pid=ImgDet&w=800&h=450&rs=1"
          class="w-full rounded-md shadow-lg" />
      </div>
      <div class="mb-6 lg:mb-0">
        <img
          src="https://th.bing.com/th/id/OIP.R_bz-Wmt4e87JqDQHttsTwHaEK?pid=ImgDet&rs=1"
          class="w-full rounded-md shadow-lg" />
      </div>
    </div>
  </div>

<br></br>
<div class="p-4 text-center text-white" style="background-color: #0a4275">
© 2023 Autora:
<p>Fernanda Fernandes</p> </div>
</footer>
<script src="style.js"></script>
  </body>
</html>
