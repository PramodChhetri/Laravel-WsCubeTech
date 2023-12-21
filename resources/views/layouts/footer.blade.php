</div>


    <!-- Footer -->
    <footer class="bg-gray-800 text-white p-8">
        <div class="container mx-auto flex flex-col md:flex-row justify-between items-center">
            <!-- Left Section -->
            <div class="mb-4 md:mb-0 md:mr-4">
                <h2 class="text-2xl font-bold mb-2">WsCube</h2>
                <p class="text-gray-400">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>

            <!-- Middle Section -->
            <div class="mb-4 md:mb-0">
                <h3 class="text-lg font-semibold mb-2">Quick Links</h3>
                <ul>
                    <li><a href="#" class="hover:text-gray-300 transition">Home</a></li>
                    <li><a href="#" class="hover:text-gray-300 transition">About</a></li>
                    <li><a href="#" class="hover:text-gray-300 transition">Services</a></li>
                    <li><a href="#" class="hover:text-gray-300 transition">Contact</a></li>
                </ul>
            </div>

            <!-- Right Section -->
            <div>
                <h3 class="text-lg font-semibold mb-2">Contact Us</h3>
                <p class="text-gray-400">123 Street, City</p>
                <p class="text-gray-400">Email: info@example.com</p>
                <p class="text-gray-400">Phone: +1 234 567 890</p>
            </div>
        </div>
    </footer>

    <!-- JavaScript for Burger Menu and Sidebar Toggle -->
    <script>
        var burgerMenu = document.getElementById('burger-menu');
        var sidebar = document.getElementById('sidebar');
        var closeSidebar = document.getElementById('close-sidebar');
        var navbar = document.getElementById('navbar');

        burgerMenu.addEventListener('click', function () {
            sidebar.classList.remove('hidden');
        });

        closeSidebar.addEventListener('click', function () {
            sidebar.classList.add('hidden');
        });
    </script>

</body>

</html>
