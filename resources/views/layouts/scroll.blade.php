  <!-- button -->
  <button onclick="scrollToTop()" id="topButton"
  class="fixed z-10 hidden p-3 bg-gray-100 rounded-full shadow-md bottom-10 right-10 animate-bounce">
  <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"
      xmlns="http://www.w3.org/2000/svg">
      <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M5 10l7-7m0 0l7 7m-7-7v18">
      </path>
  </svg>
</button>

<script>

function scrollToTop() {
    window.scrollTo(0, 0);
}

  const topBtn = document.getElementById("topButton");
  window.onscroll = () => {
      (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) ?
      topBtn.classList.remove("hidden"): topBtn.classList.add("hidden");

  }
</script>