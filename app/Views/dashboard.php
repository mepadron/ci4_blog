
<!-- <link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/styles/tailwind.css"> -->
<link rel="stylesheet" href="https://demos.creative-tim.com/notus-js/assets/vendor/@fortawesome/fontawesome-free/css/all.min.css">


<nav class="top-0 absolute z-50 w-full flex flex-wrap items-center justify-between px-2 py-3 navbar-expand-lg bg-blueGray-800">
  <div class="container px-4 mx-auto flex flex-wrap items-center justify-between">
    <div class="w-full relative flex justify-between lg:w-auto lg:static lg:block lg:justify-start ">
      <a class="text-sm font-bold leading-relaxed inline-block mr-4 py-2 whitespace-nowrap uppercase text-white" href="../../index.html">Notus JS</a><button class="cursor-pointer text-xl leading-none px-3 py-1 border border-solid border-transparent rounded bg-transparent block lg:hidden outline-none focus:outline-none" type="button" onclick="toggleNavbar('example-collapse-navbar')">
        <i class="text-white fas fa-bars"></i>
      </button>
    </div>
    <div class="lg:flex flex-grow items-center bg-white lg:bg-opacity-0 lg:shadow-none hidden bg-blueGray-800" id="example-collapse-navbar">
      <ul class="flex flex-col lg:flex-row list-none mr-auto">
        <li class="flex items-center">
          <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="https://www.creative-tim.com/learning-lab/tailwind/js/overview/notus?ref=njs-register"><i class="lg:text-blueGray-200 text-blueGray-400 far fa-file-alt text-lg leading-lg mr-2"></i>
            Docs</a>
        </li>
      </ul>
      <ul class="flex flex-col lg:flex-row list-none lg:ml-auto items-center">
        <li class="inline-block relative">
          <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="#pablo" onclick="openDropdown(event,'demo-pages-dropdown')">
            Demo Pages
          </a>
          <div class="hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded shadow-lg min-w-48" id="demo-pages-dropdown">
            <span class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
              Admin Layout
            </span>
            <a href="../admin/dashboard.html" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
              Dashboard
            </a>
            <a href="../admin/settings.html" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
              Settings
            </a>
            <a href="../admin/tables.html" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
              Tables
            </a>
            <a href="../admin/maps.html" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
              Maps
            </a>
            <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100"></div>
            <span class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
              Auth Layout
            </span>
            <a href="./login.html" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
              Login
            </a>
            <a href="./register.html" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
              Register
            </a>
            <div class="h-0 mx-4 my-2 border border-solid border-blueGray-100"></div>
            <span class="text-sm pt-2 pb-0 px-4 font-bold block w-full whitespace-nowrap bg-transparent text-blueGray-400">
              No Layout
            </span>
            <a href="../landing.html" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
              Landing
            </a>
            <a href="../profile.html" class="text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-blueGray-700">
              Profile
            </a>
          </div>
        </li>
        <li class="flex items-center">
          <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-js%2F" target="_blank"><i class="lg:text-blueGray-200 text-blueGray-400 fab fa-facebook text-lg leading-lg"></i><span class="lg:hidden inline-block ml-2">Share</span></a>
        </li>
        <li class="flex items-center">
          <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fdemos.creative-tim.com%2Fnotus-js%2F&amp;text=Start%20your%20development%20with%20a%20Free%20Tailwind%20CSS%20and%20JavaScript%20UI%20Kit%20and%20Admin.%20Let%20Notus%20JS%20amaze%20you%20with%20its%20cool%20features%20and%20build%20tools%20and%20get%20your%20project%20to%20a%20whole%20new%20level." target="_blank"><i class="lg:text-blueGray-200 text-blueGray-400 fab fa-twitter text-lg leading-lg"></i><span class="lg:hidden inline-block ml-2">Tweet</span></a>
        </li>
        <li class="flex items-center">
          <a class="lg:text-white lg:hover:text-blueGray-200 text-blueGray-700 px-3 py-4 lg:py-2 flex items-center text-xs uppercase font-bold" href="https://github.com/creativetimofficial/notus-js?ref=njs-register" target="_blank"><i class="lg:text-blueGray-200 text-blueGray-400 fab fa-github text-lg leading-lg"></i><span class="lg:hidden inline-block ml-2">Star</span></a>
        </li>
        <li class="flex items-center">
          <a class="bg-white text-blueGray-700 active:bg-blueGray-50 text-xs font-bold uppercase px-4 py-2 rounded shadow hover:shadow-md outline-none focus:outline-none lg:mr-1 lg:mb-0 ml-3 mb-3 ease-linear transition-all duration-150" href="https://www.creative-tim.com/product/notus-js?ref=njs-index" target="_blank">
            <i class="fas fa-arrow-alt-circle-down"></i> Download
          </a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<section class="mx-auto max-w-6xl py-12">
    <div class="flex flex-col">
        <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center">
                <div slot="middle-left" class="max-w-2xl">
                    <div class="flex flex-row">
                        <div class="w-2/3 bg-orange-600 p-5 text-teal-100 flex justify-center items-center h-48 text-3xl font-black uppercase">Awesome products delivered</div>
                        <div class="w-1/3 bg-teal-600 text-orange-100 p-5 flex justify-center items-center">More details about the study can be found in the book , click to learn more ...</div>
                    </div>
                </div>
            </div>
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center"></div>
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center">
                <div slot="middle-right" class="max-w-xs">
                    <div class="flex flex-col justify-center h-48 p-3">
                        <div class="text-xl font-black text-teal-700">Awesome discovery we did</div>
                        <div class="text-sm my-3">The results are spectacular, you can checkout the source for more informations</div>
                        <div class="text-sm text-teal-700 cursor-pointer">Read more</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex flex-col md:flex-row justify-center items-center">
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center mr-0 md:mr-2">
                <div slot="bottom-left" class="max-w-xs">
                    <div class="p-5 shadow-md m-2 mt-4"><img class="object-scale-down h-30" src="img/spielwarenmesse.svg" alt="step3">
                        <div class="text-xs font-bold uppercase text-teal-700 mt-1 mb-2">Blog post</div>
                        <div class="text-xl font-bold mb-2">Big case study</div>
                        <div class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ut vel facilis iste, dicta est minus alias, aliquam, velit nisi quo assumenda porro dignissimos doloremque temporibus eum saepe aspernatur ab.</div>
                        <p><?= $cedulaPersona. " ".$nombrePersona." ".$apellidoPersona ?></p>
                    </div>
                </div>
            </div>
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center mx-0 md:mx-4">
                <div slot="bottom-center" class="max-w-xs">
                    <div class="p-5 shadow-md m-2 mt-4">
                        <div class="text-xs font-bold uppercase text-teal-700 mt-1 mb-2">Formulario registro empleado</div>
                        <div class="text-xl font-bold mb-2">

                          <?= form_fieldset('Llenar con datos'); ?>
                          <?= form_open('Home/datosFormulario',['class' => 'fo', 'id' => 'myform'],['username' => 'Joe', 'member_id' => '234']); ?>
                          <?= form_input(['name'=>'lolo', 'type'=>'text']); ?><br>
                          <?= form_submit('mysubmit', 'Enviar!',['class'=>'text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center m-2']); ?>
                          
                          <?= form_close(); ?>
                          <?= form_fieldset_close(); ?>
                          <?php 
                          $session = \Config\Services::session();
                          // echo $_SESSION['nombreCliente'];
                          echo $session->get('apellidoCliente');
                          ?>
                          <?php echo $_SESSION['apellidoCliente'];?>


                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="transition-all ease-in-out duration-1000 flex flex-col justify-center ml-0 md:ml-2">
                <div slot="bottom-right" class="max-w-xs">
                    <div class="p-5 shadow-md m-2 mt-4"><img class="object-scale-down h-30" src="https://s.spielwarenmesse.de/fileadmin/data_archive/Relaunch_Spielwarenmesse/magazine/header/20190618_Header_Memes.jpg" alt="step3">
                        <div class="text-xs font-bold uppercase text-teal-700 mt-1 mb-2">Blog post</div>
                        <div class="text-xl font-bold mb-2">Big case study</div>
                        <div class="truncate">Lorem ipsum dolor sit amet consectetur adipisicing elit. Id ut vel facilis iste, dicta est minus alias, aliquam, velit nisi quo assumenda porro dignissimos doloremque temporibus eum saepe aspernatur ab.</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
