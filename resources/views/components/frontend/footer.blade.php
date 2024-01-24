
    <!-- START: ASIDE MENU -->
    <section class="">
      <div class="border-t border-b border-gray-200 py-12 mt-16 px-4">
        <div class="flex justify-center mb-8">
          <img
            src="{{url("/frontend/images/content/logo.png")}}"
            alt="Luxspace | Fulfill your house with beautiful furniture"
          />
        </div>
   
    </section>
    <!-- END: ASIDE MENU -->


<!-- START: FOOTER -->
<footer class="flex text-center px-4 py-8 justify-center">
    <p class="text-sm">
      Copyright 2024 • All Rights Reserved BlancInstinc by Figurupa
    </p>
  </footer>
  <!-- END: FOOTER -->

  <!-- START: LOAD SVG -->
  <!-- <svg width="23" height="26" class="hidden" id="icon-play">
    <path
      d="M21 9.536c2.667 1.54 2.667 5.39 0 6.928l-15 8.66c-2.667 1.54-6-.385-6-3.464V4.34C0 1.26 3.333-.664 6 .876l15 8.66z"
      fill="#fff"
    />
  </svg> -->
  <!-- END: LOAD SVG  -->

  <!-- Google Analytics: change UA-XXXXX-Y to be your site's ID. -->
  <script>
    window.ga = function () {
      ga.q.push(arguments);
    };
    ga.q = [];
    ga.l = +new Date();
    ga("create", "UA-XXXXX-Y", "auto");
    ga("set", "anonymizeIp", true);
    ga("set", "transport", "beacon");
    ga("send", "pageview");
  </script>
  <script src="https://www.google-analytics.com/analytics.js" async></script>
<script src="{{url("/frontend/js/app.js")}}"></script></body>
<script>
  document.getElementById('profile-dropdown').addEventListener('click', function() {
    var dropdownMenu = document.getElementById('profile-dropdown-menu');
    dropdownMenu.classList.toggle('hidden');
  });

  // Close the dropdown when clicking outside of it
  window.addEventListener('click', function(event) {
    var dropdownMenu = document.getElementById('profile-dropdown-menu');
    var profileDropdown = document.getElementById('profile-dropdown');
    if (event.target !== profileDropdown && event.target.closest('#profile-dropdown') !== profileDropdown) {
      dropdownMenu.classList.add('hidden');
    }
  });
</script>
</html>