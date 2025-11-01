
    <!-- Jquery -->
    <script src="{{asset('FrontendAssets/js/jquery-3.6.0.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('FrontendAssets/js/bootstrap.min.js')}}"></script>
    <!-- Appear Js -->
    <script src="{{asset('FrontendAssets/js/appear.min.js')}}"></script>
    <!-- Slick -->
    <script src="{{asset('FrontendAssets/js/slick.min.js')}}"></script>
    <!-- Magnific Popup -->
    <script src="{{asset('FrontendAssets/js/jquery.magnific-popup.min.js')}}"></script>
    <!-- Nice Select -->
    <script src="{{asset('FrontendAssets/js/jquery.nice-select.min.js')}}"></script>
    <!-- jQuery UI -->
    <script src="{{asset('FrontendAssets/js/jquery-ui.min.js')}}"></script>
    <!--  WOW Animation -->
    <script src="{{asset('FrontendAssets/js/wow.min.js')}}"></script>
    <!-- Custom script -->
    <script src="{{asset('FrontendAssets/js/script.js')}}"></script>

    <!-- Drawer Menu Script -->
    <script>
        jQuery(document).ready(function($) {
            'use strict';
            
            function initDrawerMenu() {
                const drawerToggle = document.getElementById('drawerToggle');
                const drawerClose = document.getElementById('drawerClose');
                const drawerMenu = document.getElementById('drawerMenu');
                const drawerOverlay = document.getElementById('drawerOverlay');
                const body = document.body;
                
                if (!drawerToggle || !drawerClose || !drawerMenu || !drawerOverlay) {
                    console.log('Drawer menu elements not found');
                    return;
                }
                
                function openDrawer() {
                    drawerMenu.classList.add('active');
                    drawerOverlay.classList.add('active');
                    if (drawerToggle) drawerToggle.classList.add('active');
                    body.classList.add('drawer-open');
                }
                
                function closeDrawer() {
                    drawerMenu.classList.remove('active');
                    drawerOverlay.classList.remove('active');
                    if (drawerToggle) drawerToggle.classList.remove('active');
                    body.classList.remove('drawer-open');
                }
                
                // Open drawer
                drawerToggle.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    openDrawer();
                });
                
                // Close drawer
                drawerClose.addEventListener('click', function(e) {
                    e.preventDefault();
                    e.stopPropagation();
                    closeDrawer();
                });
                
                // Close drawer on overlay click
                drawerOverlay.addEventListener('click', function(e) {
                    if (e.target === drawerOverlay) {
                        e.preventDefault();
                        closeDrawer();
                    }
                });
                
                // Close drawer on navigation link click (mobile)
                const drawerLinks = document.querySelectorAll('.drawer-navigation a');
                drawerLinks.forEach(function(link) {
                    link.addEventListener('click', function() {
                        setTimeout(closeDrawer, 100);
                    });
                });
                
                // Close drawer on ESC key
                document.addEventListener('keydown', function(e) {
                    if (e.key === 'Escape' && drawerMenu.classList.contains('active')) {
                        closeDrawer();
                    }
                });
                
                // Prevent drawer from opening on desktop resize
                window.addEventListener('resize', function() {
                    if (window.innerWidth >= 992) {
                        closeDrawer();
                    }
                });
            }
            
            // Initialize drawer menu
            initDrawerMenu();
        });
    </script>

@yield('script')
@yield('js')

