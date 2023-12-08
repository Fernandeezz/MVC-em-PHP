<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width" />
    <script src="https://cdn.tailwindcss.com"></script> 
    <title>Skeletor</title>
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
  style="background-position: center; background-image: url('https://th.bing.com/th/id/R.a950a9716be7f82f0b404aba005ca05f?rik=GP%2bTGIp67XDYkg&pid=ImgRaw&r=0'); height: 400px">
  <div
    class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed"
    style="background-color: rgba(0, 0, 0, 0.6)">
    <div class="flex h-full items-center justify-center">
      <div class="text-white">
        <h2 class="mb-4 text-4xl font-semibold"><b>Skeletor</b></h2>
        <h4 class="mb-6 text-xl font-semibold"> É o <b>supervilão</b> e o principal antagonista da franquia Masters of the Universe</h4>
      </div>
    </div>
  </div>
</div> <br></br>
<div class="mx-auto" style="text-align: -webkit-center;">
<div class="flex flex-col rounded-lg bg-white shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700 md:max-w-4xl md:flex-row">
  <img class=" w-full"
    src="https://th.bing.com/th/id/R.b3f03799ffad964c0ad46a8ee3812100?rik=LA7iY0dwqjmWHA&pid=ImgRaw&r=0" alt="" style="height: 33rem" />
  <div class="flex flex-col justify-start p-6">
    <ul class="w-80 inline-block">
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
   Nome: Esqueleto <br>
   Em Inglês: Skeletor
  </li>
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
   Primeira Aparição em: He-Man e a Espada do Poder (1981)
  </li>
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
    Criado por: Marcos Taylor 
  </li>
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
    Espécie: Gar/Demônio
  </li>
  <li class="w-full py-4">Conhecido como: Senhor da Destruição Soberano do Mal</li>
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
   Parentes:  	
        Príncipe Adam / He-Man (sobrinho)<br>
        Princesa Adora / She-Ra (sobrinha)<br>
        Rainha Marlena (cunhada)<br>
        Rei Miro (pai)<br>
        Saryn (mãe)<br>
  </li>
  <li class="w-full py-4">Esqueleto é um ex-aluno de Hordak, um comandante de alto escalão da Horda do Mal.</li>
  <li
    class="w-full border-b-2 border-neutral-100 border-opacity-100 py-4 dark:border-opacity-50">
    Skeletor apareceu em 71 dos 130 episódios do desenho animado He-Man
  </li>
  <li class="w-full py-4">Sua principal fala é: "Estou voltando para a Montanha da Cobra".</li>
</div></div></div>
<br></br>
<h2 class="text-5xl font-medium leading-tight text-white text-center" style="background-color: #0a4275">Galeria de fotos do Skeletor</h2>
  <footer
  class=" text-center text-white dark:bg-neutral-600 dark:text-neutral-200" style="background-color: #0a4275">
  <div class="container p-6">
    <div class="grid gap-4 md:grid-cols-3 lg:grid-cols-6">
      <div class="mb-6 lg:mb-0">
        <img
          src="https://upload.wikimedia.org/wikipedia/en/8/8a/Skeletor-spoo.jpg"
          class="w-full rounded-md shadow-lg" />
      </div>
      <div class="mb-6 lg:mb-0">
        <img
          src="https://upload.wikimedia.org/wikipedia/en/5/50/Newskeletor.jpg"
          class="w-full rounded-md shadow-lg" />
      </div>
      <div class="mb-6 lg:mb-0">
        <img
          src="https://upload.wikimedia.org/wikipedia/en/7/77/MYPcartoonSkeletorCape.jpg"
          class="w-full rounded-md shadow-lg" />
      </div>
      <div class="mb-6 lg:mb-0">
        <img
          src="https://th.bing.com/th/id/R.76195f0bdd240336e994624017223a3c?rik=e11d98zd%2btT0yg&riu=http%3a%2f%2ffc08.deviantart.net%2ffs70%2ff%2f2010%2f126%2fb%2f1%2fSkeletor_by_PowermasterJazz.jpg&ehk=BSJp9plKxbHVoNHgJpiOLMlLbOOX5wW8iGkg5GQxA%2fc%3d&risl=&pid=ImgRaw&r=0"
          class="w-full rounded-md shadow-lg" />
      </div>
      <div class="mb-6 lg:mb-0">
        <img
          src="https://images-wixmp-ed30a86b8c4ca887773594c2.wixmp.com/f/e6b22049-45b0-4f97-9ded-e098c4123431/dak4vzg-a04198f1-aa21-4e17-835e-839e773c88b0.jpg/v1/fill/w_719,h_1111,q_75,strp/october_skeletons___skeletor_by_melissathehedgehog-dak4vzg.jpg?token=eyJ0eXAiOiJKV1QiLCJhbGciOiJIUzI1NiJ9.eyJpc3MiOiJ1cm46YXBwOjdlMGQxODg5ODIyNjQzNzNhNWYwZDQxNWVhMGQyNmUwIiwic3ViIjoidXJuOmFwcDo3ZTBkMTg4OTgyMjY0MzczYTVmMGQ0MTVlYTBkMjZlMCIsImF1ZCI6WyJ1cm46c2VydmljZTppbWFnZS5vcGVyYXRpb25zIl0sIm9iaiI6W1t7InBhdGgiOiIvZi9lNmIyMjA0OS00NWIwLTRmOTctOWRlZC1lMDk4YzQxMjM0MzEvZGFrNHZ6Zy1hMDQxOThmMS1hYTIxLTRlMTctODM1ZS04MzllNzczYzg4YjAuanBnIiwid2lkdGgiOiI8PTcxOSIsImhlaWdodCI6Ijw9MTExMSJ9XV19.pU8y-W8xLYS_LfYPuvGhBXO51dlLtgEKJtjgIiYVpvE"
          class="w-full rounded-md shadow-lg" />
      </div>
      <div class="mb-6 lg:mb-0">
        <img
          src="https://th.bing.com/th/id/R.eb0a9fa8fce553dab2aa29e7bd3108a6?rik=MLVwS6Kv4%2fwNgQ&riu=http%3a%2f%2fmysteriousandmisplaced.com%2fwp-content%2fuploads%2f2009%2f02%2fskeletor.jpg&ehk=nG3Hv%2fKSTxQoNYBNgslJ%2f5GLVlZKn0Aun48uVAWD0UE%3d&risl=&pid=ImgRaw&r=0"
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
