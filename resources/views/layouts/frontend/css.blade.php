    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@400;500;600;700&family=Rubik:wght@400;500&display=swap" rel="stylesheet">

    <!-- Flaticon -->
    <link rel="stylesheet" href="{{asset('FrontendAssets/css/flaticon.min.css')}}">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="{{asset('FrontendAssets/css/fontawesome-5.14.0.min.css')}}">
    <!-- Bootstrap -->
    <link rel="stylesheet" href="{{asset('FrontendAssets/css/bootstrap-4.5.3.min.css')}}">
    <!-- Magnific Popup -->
    <link rel="stylesheet" href="{{asset('FrontendAssets/css/magnific-popup.min.css')}}">
    <!-- Nice Select -->
    <link rel="stylesheet" href="{{asset('FrontendAssets/css/nice-select.min.css')}}">
    <!-- Animate -->
    <link rel="stylesheet" href="{{asset('FrontendAssets/css/animate.min.css')}}">
    <!-- Slick -->
    <link rel="stylesheet" href="{{asset('FrontendAssets/css/slick.min.css')}}">
    <!-- Main Style -->
    <link rel="stylesheet" href="{{asset('FrontendAssets/css/style.css')}}">


<style>
    /* Mobile Drawer Menu Styles */
    .drawer-menu-overlay {
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.7);
        z-index: 9998;
        opacity: 0;
        visibility: hidden;
        transition: opacity 0.3s ease, visibility 0.3s ease;
    }
    
    .drawer-menu-overlay.active {
        opacity: 1;
        visibility: visible;
    }
    
    .drawer-menu {
        position: fixed;
        top: 0;
        left: -100%;
        width: 340px;
        max-width: 85%;
        height: 100%;
        background: linear-gradient(180deg, #1a1a1a 0%, #0f0f0f 100%);
        z-index: 9999;
        overflow-y: auto;
        transition: left 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        box-shadow: 4px 0 30px rgba(0, 0, 0, 0.7), -2px 0 20px rgba(255, 215, 0, 0.1);
    }
    
    .drawer-menu::-webkit-scrollbar {
        width: 6px;
    }
    
    .drawer-menu::-webkit-scrollbar-track {
        background: rgba(0, 0, 0, 0.3);
    }
    
    .drawer-menu::-webkit-scrollbar-thumb {
        background: rgba(255, 215, 0, 0.3);
        border-radius: 3px;
    }
    
    .drawer-menu::-webkit-scrollbar-thumb:hover {
        background: rgba(255, 215, 0, 0.5);
    }
    
    .drawer-menu.active {
        left: 0;
    }
    
    .drawer-menu-header {
        padding: 30px 25px;
        border-bottom: 1px solid rgba(255, 255, 255, 0.15);
        display: flex;
        justify-content: space-between;
        align-items: center;
        background: rgba(0, 0, 0, 0.3);
        position: sticky;
        top: 0;
        z-index: 10;
        backdrop-filter: blur(10px);
    }
    
    .drawer-logo {
        display: flex;
        align-items: center;
        gap: 15px;
        flex: 1;
    }
    
    .drawer-logo img {
        width: 155px;
        height: 55px;
        object-fit: contain;
        filter: drop-shadow(0 2px 8px rgba(255, 215, 0, 0.3)) brightness(1.1);
        transition: transform 0.3s ease;
    }
    
    .drawer-logo:hover img {
        transform: scale(1.05);
    }
    
    .drawer-logo .logo-text {
        font-family: 'Oswald', sans-serif;
        font-size: 20px;
        font-weight: 700;
        letter-spacing: 2px;
        color: #ffffff;
        text-transform: uppercase;
        line-height: 1.2;
        text-shadow: 0 2px 10px rgba(0, 0, 0, 0.5);
        background: linear-gradient(135deg, #ffffff 0%, #ffd700 100%);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        background-clip: text;
    }
    
    .drawer-logo a {
        display: flex;
        align-items: center;
        gap: 12px;
        text-decoration: none;
        transition: opacity 0.3s ease;
    }
    
    .drawer-logo a:hover {
        opacity: 0.8;
    }
    
    .drawer-close {
        background: rgba(255, 255, 255, 0.1);
        border: 1px solid rgba(255, 255, 255, 0.2);
        color: #ffffff;
        font-size: 20px;
        cursor: pointer;
        padding: 8px;
        width: 40px;
        height: 40px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        transition: all 0.3s ease;
        margin-left: 15px;
    }
    
    .drawer-close:hover {
        background-color: rgba(255, 255, 255, 0.2);
        border-color: rgba(255, 215, 0, 0.5);
        transform: rotate(90deg) scale(1.1);
        box-shadow: 0 0 15px rgba(255, 215, 0, 0.3);
    }
    
    .drawer-menu-content {
        padding: 35px 25px;
    }
    
    
    
    .drawer-navigation {
        list-style: none;
        padding: 0;
        margin: 0;
    }
    
    .drawer-navigation li {
        margin: 0;
        padding: 0;
        border-bottom: 1px solid rgba(255, 255, 255, 0.08);
        position: relative;
    }
    
    .drawer-navigation li:last-child {
        border-bottom: none;
    }
    
    .drawer-navigation li::after {
        content: '';
        position: absolute;
        bottom: 0;
        left: 0;
        width: 0;
        height: 1px;
        background: linear-gradient(90deg, transparent, rgba(255, 215, 0, 0.3), transparent);
        transition: width 0.4s ease;
    }
    
    .drawer-navigation li:hover::after {
        width: 100%;
    }
    
    .drawer-navigation li a {
        display: flex;
        align-items: center;
        padding: 20px 0;
        font-family: 'Rubik', sans-serif;
        font-size: 17px;
        font-weight: 500;
        color: rgba(255, 255, 255, 0.9);
        text-decoration: none;
        text-transform: capitalize;
        transition: all 0.4s cubic-bezier(0.25, 0.46, 0.45, 0.94);
        letter-spacing: 0.5px;
        position: relative;
        padding-left: 0;
    }
    
    .drawer-navigation li a::before {
        content: '';
        position: absolute;
        left: 0;
        top: 0;
        bottom: 0;
        width: 4px;
        height: 100%;
        background: linear-gradient(180deg, #ffd700, #ff6b6b);
        transform: scaleY(0);
        transition: transform 0.3s ease;
        border-radius: 0 4px 4px 0;
    }
    
    .drawer-navigation li a::after {
        content: '→';
        position: absolute;
        right: 0;
        opacity: 0;
        transform: translateX(-10px);
        transition: all 0.3s ease;
        color: #ffd700;
        font-weight: bold;
    }
    
    .drawer-navigation li a:hover {
        color: #ffffff;
        padding-left: 20px;
        text-shadow: 0 2px 10px rgba(255, 215, 0, 0.3);
    }
    
    .drawer-navigation li a:hover::before {
        transform: scaleY(1);
    }
    
    .drawer-navigation li a:hover::after {
        opacity: 1;
        transform: translateX(0);
    }
    
    /* Hamburger Button Styles */
    .drawer-toggle {
        background: transparent;
        border: none;
        padding: 8px 10px;
        cursor: pointer;
        display: flex;
        flex-direction: column;
        gap: 5px;
        z-index: 10000;
        position: relative;
    }
    
    .drawer-toggle .icon-bar {
        display: block;
        width: 28px;
        height: 3px;
        background-color: #333;
        border-radius: 2px;
        transition: all 0.3s ease;
    }
    
    .drawer-toggle.active .icon-bar {
        background-color: #fff;
    }
    
    .drawer-toggle.active .icon-bar:nth-child(1) {
        transform: rotate(45deg) translate(8px, 8px);
    }
    
    .drawer-toggle.active .icon-bar:nth-child(2) {
        opacity: 0;
    }
    
    .drawer-toggle.active .icon-bar:nth-child(3) {
        transform: rotate(-45deg) translate(7px, -7px);
    }
    
    /* Mobile Header Logo Styles */
    .mobile-header-logo {
        width: 100%;
        padding: 15px 20px;
    }
    
    .mobile-logo-wrapper {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 100%;
    }
    
    .mobile-logo {
        display: flex;
        align-items: center;
        gap: 12px;
        flex: 1;
    }
    
    .mobile-logo img {
        width: 150px;
        height: 50px;
        object-fit: contain;
        filter: brightness(0) invert(1);
        transition: transform 0.3s ease;
    }
    
    .mobile-logo:hover img {
        transform: scale(1.05);
    }
    
    .mobile-logo-text {
        font-family: 'Oswald', sans-serif;
        font-size: 18px;
        font-weight: 600;
        letter-spacing: 1.5px;
        color: #ffffff;
        text-transform: uppercase;
        line-height: 1.2;
        text-shadow: 0 2px 8px rgba(0, 0, 0, 0.5);
    }
    
    .mobile-logo a {
        display: flex;
        align-items: center;
        gap: 12px;
        text-decoration: none;
        transition: opacity 0.3s ease;
    }
    
    .mobile-logo a:hover {
        opacity: 0.9;
    }
    
    /* Hide hamburger button when drawer is open */
    body.drawer-open .drawer-toggle {
        opacity: 0;
        visibility: hidden;
        pointer-events: none;
        transform: scale(0);
        transition: all 0.3s ease;
    }
    
    /* Hide default Bootstrap collapse on mobile */
    @media (max-width: 991px) {
        .navbar-collapse {
            display: none !important;
        }
        
        .drawer-toggle {
            display: flex !important;
            opacity: 1;
            visibility: visible;
            transform: scale(1);
            transition: all 0.3s ease;
            margin-left: auto;
        }
        
        .navbar-header {
            position: relative;
            z-index: 10001;
        }
        
        .header-upper {
            background: rgba(0, 0, 0, 0.95);
        }
        
        .header-inner {
            padding: 0 !important;
        }
    }
    
    @media (min-width: 992px) {
        .drawer-toggle {
            display: none;
        }
        
        .drawer-menu,
        .drawer-menu-overlay {
            display: none !important;
        }
    }
    
    /* Prevent body scroll when drawer is open */
    body.drawer-open {
        overflow: hidden;
    }
</style>
@yield('css')
