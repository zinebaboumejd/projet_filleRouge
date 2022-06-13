window.addEventListener('DOMContentLoaded', function () {
    const btn = document.getElementById('navbar-burger');

    btn.addEventListener('click', function () {
        var $target = document.getElementById('main-nav');
        $target.classList.toggle('hidden');     
      });
  });
  document.addEventListener("alpine:init", () => {
    Alpine.data("select", () => ({
        open: false,
        language: "",

        toggle() {
            this.open = !this.open;
        },

        setLanguage(val) {
            this.language = val;
            this.open = false;
        },
    }));
});