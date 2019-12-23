<nav class="flex flex-row w-full p-6">
    <a href="/">
        <div class="flex items-center mr-6">
            <img class="h-12 md:h-16 pr-4" src="/m/logo.0.svg" alt="">
        </div>
    </a>
    <div class="hidden flex flex-row md:block w-full">
        <div class="flex md:flex-wrap items-center w-full h-full">
            <a class="px-6 font-bold text-xs" href="/über">Über uns</a>
            <a class="px-6 font-bold text-xs" href="/geschichte">Geschichte</a>
            <a class="px-6 font-bold text-xs" href="/training">Training</a>
            <!-- <a class="px-6 font-bold text-xs" href="/blog">Blog</a> -->
            <a class="ml-auto bg-gray-900 text-yellow-500 p-2 rounded-lg text-right px-6 font-bold text-xs" href="/kontakt">Kontakt</a>
        </div>
    </div>
        <div class="flex ml-auto justify-between flex-wrap items-center block md:hidden relative inline-block float-right">
            <div class="relative text-sm">
                <button id="userButton" class="flex justify-right items-center focus:outline-none mr-3">
                    <svg width="30" height="24" viewBox="0 0 84 63" fill="none" xmlns="http://www.w3.org/2000/svg"><rect width="84" height="15" rx="5" fill="#FECA57"/><rect y="24" width="84" height="15" rx="5" fill="#FECA57"/><rect y="48" width="84" height="15" rx="5" fill="#FECA57"/></svg>
                </button>
                <div id="userMenu" class="border bg-white rounded shadow-md mt-2 absolute mt-12 top-0 right-0 w-64 overflow-auto z-30 invisible">
                    <ul class="list-reset">
                        <li><a class="px-6 block py-2" href="/über">Über uns</a></li>
                        <li><hr class="border-t mx-2 border-gray-400"></li>
                        <li><a class="px-6 block py-2" href="/geschichte">Geschichte</a></li>
                        <li><a class="px-8 block py-2" href="/training">Training</a></li>
                        <li><a href="/kontakt" class="font-bold px-8 py-2 block text-white bg-yellow-500 hover:bg-yellow-300 no-underline hover:no-underline">Kontakt</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</nav>
<script>
	var userMenuDiv = document.getElementById("userMenu");
	var userMenu = document.getElementById("userButton");

	var navMenuDiv = document.getElementById("nav-content");
	var navMenu = document.getElementById("nav-toggle");

	document.onclick = check;
	function check(e){
	  var target = (e && e.target) || (event && event.srcElement);
	  //User Menu
	  if (!checkParent(target, userMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, userMenu)) {
		  // click on the link
		  if (userMenuDiv.classList.contains("invisible")) {
			userMenuDiv.classList.remove("invisible");
		  } else {userMenuDiv.classList.add("invisible");}
		} else {
		  // click both outside link and outside menu, hide menu
		  userMenuDiv.classList.add("invisible");
		}
	  }

	  //Nav Menu
	  if (!checkParent(target, navMenuDiv)) {
		// click NOT on the menu
		if (checkParent(target, navMenu)) {
		  // click on the link
		  if (navMenuDiv.classList.contains("hidden")) {
			navMenuDiv.classList.remove("hidden");
		  } else {navMenuDiv.classList.add("hidden");}
		} else {
		  // click both outside link and outside menu, hide menu
		  navMenuDiv.classList.add("hidden");
		}
	  }

	}
	function checkParent(t, elm) {
	  while(t.parentNode) {
		if( t == elm ) {return true;}
		t = t.parentNode;
	  }
	  return false;
	}
</script>
