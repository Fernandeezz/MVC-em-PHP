<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <script src="https://cdn.tailwindcss.com"></script> 
    <title>Batman</title>
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
  style="background-position: center; background-image: url('https://th.bing.com/th/id/OIP.UvqpzAYpgF3JR-k1uuwiswHaEK?pid=ImgDet&rs=1'); height: 400px">
  <div
    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
    style="background-color: rgba(0, 0, 0, 0.6)">
    <div class="flex h-full items-center justify-center">
      <div class="text-white">
        <h2 class="mb-4 text-4xl font-semibold">Batman</b></h2>
        <h4 class="mb-6 text-xl font-semibold">do seriado de televisão <b>Liga da Justiça</b></h4>
      </div>
    </div>
  </div>
</div> <br></br>
<div class="mx-auto" style="text-align: -webkit-center;">
<div class="flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 md:max-w-4xl md:flex-row">
  <img class=""
    src="https://th.bing.com/th/id/R.76d74941e22b032db924d97ff84bac99?rik=DvXn8gFeGCFauA&pid=ImgRaw&r=0" alt="" style="height: 33rem" />
  <div class="flex flex-col justify-start p-6">
    <ul class="inline-block" style="width: 32rem;">
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
   Nome Completo: Bruce Alan Wayne 
  </li>
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
   Inimigos: Coringa<br>
            Pinguim<br>
            Mulher-Gato<br>
            Charada<br>
  </li>
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
    Criadores: Bill Finger e Bob Kane
  </li>
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
    Características: 1,88m 95 kg
  </li>
  <li class="w-full py-4">Primeira aparição em: Detective Comics #27 em maio de 1939.</li>
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
    O Batman não possui poderes 
  </li>
  <li class="w-full py-4">Batman possui 26 Jogos de Video-Game</li>
  
</div></div></div>
<br></br>
<h2 class="text-5xl font-medium leading-tight text-white text-center" style="background-color: #0a4275">Galeria de fotos do Batman</h2>
  <footer
  class=" text-center text-white dark:bg-neutral-600 dark:text-neutral-200" style="background-color: #0a4275">
  <div class="container p-6">
    <div class="grid gap-4 md:grid-cols-3 lg:grid-cols-6">
      <div class="mb-6 lg:mb-0">
        <img
          src="https://th.bing.com/th/id/R.e4b910c71317fe88153681df892de5b4?rik=JR1nlvtzrJnA3g&pid=ImgRaw&r=0"
          class="w-full rounded-md shadow-lg" />
      </div>
      <div class="mb-6 lg:mb-0">
        <img
          src="https://th.bing.com/th/id/OIP.uvO_qaxAKYqvS3sqdvLW6wHaEK?w=289&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
          class="w-full rounded-md shadow-lg" />
      </div>
      <div class="mb-6 lg:mb-0">
        <img
          src="https://th.bing.com/th/id/OIP.B5G5vWNNY0Q3OHeP8LH94gHaDt?w=335&h=175&c=7&r=0&o=5&dpr=1.3&pid=1.7"
          class="w-full rounded-md shadow-lg" />
      </div>
      <div class="mb-6 lg:mb-0">
        <img
          src="https://th.bing.com/th/id/OIP.usecS_xLfoOoLSnRhPXJrQHaEK?w=290&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
          class="w-full rounded-md shadow-lg" />
      </div>
      <div class="mb-6 lg:mb-0">
        <img
          src="https://th.bing.com/th/id/OIP.K-N896SwzEqIdyliescLcQHaEK?w=333&h=187&c=7&r=0&o=5&dpr=1.3&pid=1.7"
          class="w-full rounded-md shadow-lg" />
      </div>
      <div class="mb-6 lg:mb-0">
        <img
          src="https://th.bing.com/th/id/OIP.QCY4Uf_E8ppcRj7nsS8HUwHaET?w=271&h=180&c=7&r=0&o=5&dpr=1.3&pid=1.7"
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
