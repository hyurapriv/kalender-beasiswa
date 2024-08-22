import './bootstrap';

window.addEventListener('scroll', function() {
    var navbar = document.querySelector('.sticky-navbar');
    var placeholder = document.querySelector('.navbar-placeholder');
    if (window.pageYOffset > navbar.offsetTop) {
      navbar.classList.add('fixed');
      placeholder.style.height = navbar.offsetHeight + 'px';
    } else {
      navbar.classList.remove('fixed');
      placeholder.style.height = '0';
    }
  });

  document.addEventListener("DOMContentLoaded", function () {
    const dropdownButton1 = document.getElementById("dropdownButton1");
    const dropdownMenu1 = document.getElementById("dropdownMenu1");
    const dropdownButton2 = document.getElementById("dropdownButton2");
    const dropdownMenu2 = document.getElementById("dropdownMenu2");
    const dropdownContainer2 = document.getElementById("dropdownContainer2");

    function handleDropdown(button, menu, otherMenu, container, otherButton) {
        button.addEventListener("click", function () {
            const isVisible = !menu.classList.contains("hidden");

            // Reset semua dropdown
            dropdownMenu1.classList.add("hidden");
            dropdownMenu2.classList.add("hidden");
            dropdownContainer2.style.marginTop = "0px";

            if (!isVisible) {
                menu.classList.remove("hidden");

                // Jika dropdown pertama dibuka, turunkan dropdown kedua
                if (container) {
                    const height = menu.offsetHeight;
                    container.style.marginTop = height + 20 + "px";
                }
            }
        });

        // Tutup dropdown saat klik di luar
        document.addEventListener("click", function (event) {
            if (!event.target.closest(`#${button.id}`) && !event.target.closest(`#${menu.id}`)) {
                menu.classList.add("hidden");
                if (container) container.style.marginTop = "0px";
            }
        });
    }

    handleDropdown(dropdownButton1, dropdownMenu1, dropdownMenu2, dropdownContainer2);
    handleDropdown(dropdownButton2, dropdownMenu2, dropdownMenu1);
});
