<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width" />
  <script src="https://cdn.tailwindcss.com"></script>
  <title>Personagem Favorito</title>
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
    <div class="relative overflow-hidden bg-cover bg-no-repeat p-12 text-center" style="background-image: url('https://www.vivaocinema.com.br/site/wp-content/uploads/2019/03/He-man-e-os-Mestres-do-Universo-Ganha-Novos-Diretores-768x439.png'); height: 400px">
      <div class="absolute bottom-0 left-0 right-0 top-0 h-full w-full overflow-hidden bg-fixed" style="background-color: rgba(0, 0, 0, 0.6)">
        <div class="flex h-full items-center justify-center">
          <div class="text-white">
            <h2 class="mb-4 text-4xl font-semibold">Por favor, responda o formulário abaixo</b></h2>
            <h4 class="mb-6 text-xl font-semibold">e descubra sobre o seu personagem favorito!</h4>
          </div>
        </div>
      </div>
    </div>
  </header>
  <hr class="my-12 h-0.5 border-t-0 bg-neutral-100 opacity-100 dark:opacity-50" />
  <div class="container mx-auto">

    <div class="rounded-lg bg-blue p-6 shadow-[0_2px_15px_-3px_rgba(0,0,0,0.07),0_10px_20px_-2px_rgba(0,0,0,0.04)] dark:bg-neutral-700">
      <form method="post" action="create.php">
        <label for="nome">Nome Completo: </label>
        <input type="text" class="formbutton" name="nome" id="nome">
        <br></br>
        <label for="user-ema">E-mail: </label>
        <input type="email" name="email" id="email">
        <br></br>
        <tr>
          <td width="100">
            <font size="2" face="Arial">Data de Acesso: </font>
          </td>
          <td width="460">
            <input name="data" type="date" class="formbutton" id="data" size="52" maxlength="150">
          </td>
        </tr>
        </td>
        </tr>
        <br></br>

        <label>Personagens:</label>
        <select name="personagem">
          <option value="Homer Simpson">Homer Simpson</option>
          <option value="Skeletor">Skeletor </option>
          <option value="Pica-pau">Pica-Pau</option>
          <option value="Charada">Charada</option>
          <option value="Dick Vigarista">Dick Vigarista </option>
          <option value="Patolino">Patolino</option>
          <option value="Coragem, o Cão Covarde">Coragem, o Cão Covarde</option>
          <option value="Batman">Batman </option>
          <option value="Coringa">Coringa </option>
          <option value="Zé Carioca">Zé Carioca </option>
        </select>
        <br></br>
        <div class="field">
          <label for="mensagem">Digite sua mensagem:</label>
          <textarea name="mensagem" id="mensagem" placeholder="Mensagem"></textarea>
        </div>
        <br></br>
        <!--Submit button-->
        <button type="submit">Enviar Formulário</button>
        <br></br>
        <button type="reset">Limpar Formulário </button>
        <br></br>
        <a href="select.php" button type='select'>Ir para o banco de dados</a>
        <br></br>
      </form>
    </div>
  </div>
  <br></br>
  <footer>
  <div class="p-4 text-center text-white" style="background-color: #0a4275">
    © 2023 Autora:
    <p>Fernanda Fernandes</p>
  </div>
  </footer>
  <script src="style.js"></script>
</body>

</html>