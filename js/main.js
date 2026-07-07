// CreativeCanvas - Main JavaScript Functionality

// Global Variables
let products = [];
let deals = [];
let cart = [];
let currentCategory = 'all';
let searchResults = [];
let productsDisplayed = 12;

// Sample Product Data
const sampleProducts = [
    {
        id: 1,
        name: "Acrylic Paint Set - Premium Colors",
        category: "paints",
        price: 1299,
        originalPrice: 1599,
        image: "🎨",
        description: "Professional grade acrylic paints with vibrant colors. Perfect for canvas, wood, and paper.",
        rating: 4.8,
        reviews: 156,
        inStock: true,
        badge: "Best Seller"
    },
    {
        id: 2,
        name: "Watercolor Brush Set - 12 Pieces",
        category: "brushes",
        price: 899,
        originalPrice: 1199,
        image: "🖌️",
        description: "High-quality watercolor brushes with natural bristles. Various sizes for different techniques.",
        rating: 4.7,
        reviews: 89,
        inStock: true,
        badge: "New"
    },
    {
        id: 3,
        name: "Scrapbooking Kit - Deluxe Edition",
        category: "crafts",
        price: 1899,
        originalPrice: 2399,
        image: "📚",
        description: "Complete scrapbooking kit with papers, stickers, ribbons, and tools.",
        rating: 4.9,
        reviews: 234,
        inStock: true,
        badge: "Popular"
    },
    {
        id: 4,
        name: "DIY Jewelry Making Kit",
        category: "diy",
        price: 1599,
        originalPrice: 1999,
        image: "💍",
        description: "Everything you need to create beautiful jewelry. Includes beads, wires, and tools.",
        rating: 4.6,
        reviews: 67,
        inStock: true,
        badge: ""
    },
    {
        id: 5,
        name: "Christmas Ornament Craft Kit",
        category: "seasonal",
        price: 1199,
        originalPrice: 1499,
        image: "🎄",
        description: "Create beautiful Christmas ornaments with this festive craft kit.",
        rating: 4.8,
        reviews: 145,
        inStock: true,
        badge: "Limited"
    },
    {
        id: 6,
        name: "Oil Paint Set - Artist Quality",
        category: "paints",
        price: 2299,
        originalPrice: 2899,
        image: "🎨",
        description: "Professional oil paints with rich pigments. Slow-drying formula for blending.",
        rating: 4.9,
        reviews: 178,
        inStock: true,
        badge: "Premium"
    },
    {
        id: 7,
        name: "Calligraphy Pen Set",
        category: "brushes",
        price: 799,
        originalPrice: 999,
        image: "✒️",
        description: "Perfect for calligraphy and hand lettering. Multiple nib sizes included.",
        rating: 4.5,
        reviews: 92,
        inStock: true,
        badge: ""
    },
    {
        id: 8,
        name: "Paper Quilling Starter Kit",
        category: "crafts",
        price: 699,
        originalPrice: 899,
        image: "🌀",
        description: "Learn the art of paper quilling with this comprehensive starter kit.",
        rating: 4.4,
        reviews: 56,
        inStock: true,
        badge: "Beginner"
    },
    {
        id: 9,
        name: "Candle Making DIY Kit",
        category: "diy",
        price: 1399,
        originalPrice: 1699,
        image: "🕯️",
        description: "Create your own scented candles with this complete DIY kit.",
        rating: 4.7,
        reviews: 103,
        inStock: true,
        badge: "New"
    },
    {
        id: 10,
        name: "Easter Egg Decorating Kit",
        category: "seasonal",
        price: 899,
        originalPrice: 1099,
        image: "🥚",
        description: "Decorate beautiful Easter eggs with paints, stickers, and tools.",
        rating: 4.6,
        reviews: 78,
        inStock: false,
        badge: "Sold Out"
    },
    {
        id: 11,
        name: "Watercolor Paper Pad - A4",
        category: "crafts",
        price: 399,
        originalPrice: 499,
        image: "📄",
        description: "High-quality watercolor paper with perfect texture for painting.",
        rating: 4.8,
        reviews: 267,
        inStock: true,
        badge: ""
    },
    {
        id: 12,
        name: "Pottery Clay - Natural",
        category: "crafts",
        price: 599,
        originalPrice: 699,
        image: "🏺",
        description: "Natural clay perfect for pottery and sculpting projects.",
        rating: 4.7,
        reviews: 134,
        inStock: true,
        badge: ""
    }
];

// Sample Deals Data
const sampleDeals = [
    {
        id: 1,
        title: "Buy 2 Get 1 Free",
        description: "On all paint sets",
        discount: "33% OFF",
        validUntil: "2024-12-31",
        image: "🎨"
    },
    {
        id: 2,
        title: "Craft Bundle Deal",
        description: "Complete craft kits at amazing prices",
        discount: "40% OFF",
        validUntil: "2024-12-25",
        image: "✂️"
    },
    {
        id: 3,
        title: "Seasonal Sale",
        description: "Holiday craft supplies",
        discount: "25% OFF",
        validUntil: "2024-12-20",
        image: "🎄"
    }
];

// Initialize the application
document.addEventListener('DOMContentLoaded', function() {
    initializeApp();
});

function initializeApp() {
    products = [...sampleProducts];
    deals = [...sampleDeals];
    
    // Load initial products
    displayProducts();
    displayDeals();
    
    // Set up event listeners
    setupEventListeners();
    
    // Initialize search functionality
    initializeSearch();
    
    // Add animations to elements as they come into view
    setupScrollAnimations();
}

function setupEventListeners() {
    // Mobile menu toggle
    document.getElementById('mobileMenuBtn')?.addEventListener('click', toggleMobileMenu);
    
    // Contact form submission
    document.getElementById('contactForm')?.addEventListener('submit', handleContactForm);
    
    // Newsletter form submission
    document.getElementById('newsletterForm')?.addEventListener('submit', handleNewsletterForm);
    
    // Cart functionality
    document.querySelector('.fa-shopping-cart')?.parentElement.addEventListener('click', openCart);
    
    // Smooth scrolling for navigation links
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
        anchor.addEventListener('click', function (e) {
            e.preventDefault();
            const target = document.querySelector(this.getAttribute('href'));
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        });
    });
}

function setupScrollAnimations() {
    const observerOptions = {
        threshold: 0.1,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('animate-fadeInUp');
            }
        });
    }, observerOptions);

    // Observe elements for animation
    document.querySelectorAll('.product-card, .deal-card').forEach(el => {
        observer.observe(el);
    });
}

// Product Display Functions
function displayProducts(productsToShow = products.slice(0, productsDisplayed)) {
    const grid = document.getElementById('productsGrid');
    if (!grid) return;

    grid.innerHTML = productsToShow.map(product => createProductCard(product)).join('');
}

function createProductCard(product) {
    const discountPercentage = product.originalPrice > product.price 
        ? Math.round(((product.originalPrice - product.price) / product.originalPrice) * 100)
        : 0;

    return `
        <div class="product-card" data-category="${product.category}">
            <div class="product-image">
                <span style="font-size: 4rem;">${product.image}</span>
                ${product.badge ? `<div class="product-badge">${product.badge}</div>` : ''}
            </div>
            <div class="p-6">
                <h3 class="text-lg font-semibold text-gray-800 mb-2">${product.name}</h3>
                <div class="flex items-center mb-2">
                    ${createStarRating(product.rating)}
                    <span class="text-sm text-gray-600 ml-2">(${product.reviews})</span>
                </div>
                <p class="text-sm text-gray-600 mb-4">${product.description}</p>
                <div class="flex items-center justify-between mb-4">
                    <div>
                        <span class="text-xl font-bold text-primary">₹${product.price}</span>
                        ${product.originalPrice > product.price ? 
                            `<span class="text-sm text-gray-500 line-through ml-2">₹${product.originalPrice}</span>
                             <span class="text-sm text-green-600 ml-1">${discountPercentage}% OFF</span>` 
                            : ''}
                    </div>
                </div>
                <div class="flex gap-2">
                    <button onclick="viewProduct(${product.id})" 
                            class="flex-1 bg-gray-100 text-gray-700 px-4 py-2 rounded-lg hover:bg-gray-200 transition-colors">
                        View Details
                    </button>
                    <button onclick="addToCart(${product.id})" 
                            class="flex-1 bg-primary text-white px-4 py-2 rounded-lg hover:bg-red-600 transition-colors ${!product.inStock ? 'opacity-50 cursor-not-allowed' : ''}"
                            ${!product.inStock ? 'disabled' : ''}>
                        ${product.inStock ? 'Add to Cart' : 'Out of Stock'}
                    </button>
                </div>
            </div>
        </div>
    `;
}

function createStarRating(rating) {
    const stars = [];
    const fullStars = Math.floor(rating);
    const hasHalfStar = rating % 1 !== 0;
    
    for (let i = 0; i < 5; i++) {
        if (i < fullStars) {
            stars.push('<i class="fas fa-star text-yellow-400"></i>');
        } else if (i === fullStars && hasHalfStar) {
            stars.push('<i class="fas fa-star-half-alt text-yellow-400"></i>');
        } else {
            stars.push('<i class="far fa-star text-gray-300"></i>');
        }
    }
    
    return `<div class="flex">${stars.join('')}</div>`;
}

// Category Filter Functions
function filterProducts(category) {
    currentCategory = category;
    
    // Update active category button
    document.querySelectorAll('.category-btn').forEach(btn => {
        btn.classList.remove('active');
        btn.classList.add('bg-white', 'text-gray-700', 'border', 'border-gray-300');
        btn.classList.remove('bg-primary', 'text-white');
    });
    
    event.target.classList.add('active', 'bg-primary', 'text-white');
    event.target.classList.remove('bg-white', 'text-gray-700', 'border', 'border-gray-300');
    
    // Filter and display products
    const filteredProducts = category === 'all' 
        ? products 
        : products.filter(product => product.category === category);
    
    displayProducts(filteredProducts.slice(0, productsDisplayed));
}

function loadMoreProducts() {
    productsDisplayed += 8;
    const filteredProducts = currentCategory === 'all' 
        ? products 
        : products.filter(product => product.category === currentCategory);
    
    displayProducts(filteredProducts.slice(0, productsDisplayed));
    
    // Hide button if all products are shown
    if (productsDisplayed >= filteredProducts.length) {
        event.target.style.display = 'none';
    }
}

// Search Functions
function initializeSearch() {
    const searchInput = document.getElementById('searchInput');
    if (!searchInput) return;
    
    let searchTimeout;
    
    searchInput.addEventListener('input', function() {
        clearTimeout(searchTimeout);
        const query = this.value.toLowerCase().trim();
        
        if (query.length < 2) {
            hideSearchResults();
            return;
        }
        
        searchTimeout = setTimeout(() => {
            performSearch(query);
        }, 300);
    });
    
    // Hide results when clicking outside
    document.addEventListener('click', function(e) {
        if (!searchInput.contains(e.target)) {
            hideSearchResults();
        }
    });
}

function performSearch(query) {
    const results = products.filter(product => 
        product.name.toLowerCase().includes(query) ||
        product.description.toLowerCase().includes(query) ||
        product.category.toLowerCase().includes(query)
    );
    
    showSearchResults(results);
    
    // Also filter the main products grid
    displayProducts(results.slice(0, 12));
}

function showSearchResults(results) {
    const searchInput = document.getElementById('searchInput');
    if (!searchInput) return;
    
    // Remove existing results
    hideSearchResults();
    
    if (results.length === 0) {
        const noResults = document.createElement('div');
        noResults.className = 'search-results';
        noResults.innerHTML = '<div class="search-result-item text-gray-500">No products found</div>';
        searchInput.parentNode.appendChild(noResults);
        return;
    }
    
    const resultsDiv = document.createElement('div');
    resultsDiv.className = 'search-results';
    
    resultsDiv.innerHTML = results.slice(0, 5).map(product => `
        <div class="search-result-item" onclick="selectSearchResult(${product.id})">
            <div class="flex items-center">
                <span class="text-2xl mr-3">${product.image}</span>
                <div>
                    <div class="font-semibold">${product.name}</div>
                    <div class="text-sm text-gray-600">₹${product.price}</div>
                </div>
            </div>
        </div>
    `).join('');
    
    searchInput.parentNode.appendChild(resultsDiv);
}

function hideSearchResults() {
    const existingResults = document.querySelector('.search-results');
    if (existingResults) {
        existingResults.remove();
    }
}

function selectSearchResult(productId) {
    hideSearchResults();
    viewProduct(productId);
}

// Product Modal Functions
function viewProduct(productId) {
    const product = products.find(p => p.id === productId);
    if (!product) return;
    
    const modal = document.getElementById('productModal');
    const modalContent = document.getElementById('productModalContent');
    
    modalContent.innerHTML = `
        <div class="p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-2xl font-bold text-gray-800">${product.name}</h2>
                <button onclick="closeProductModal()" class="text-gray-400 hover:text-gray-600">
                    <i class="fas fa-times text-xl"></i>
                </button>
            </div>
            
            <div class="grid md:grid-cols-2 gap-6">
                <div class="bg-gray-100 rounded-lg p-8 flex items-center justify-center">
                    <span style="font-size: 8rem;">${product.image}</span>
                </div>
                
                <div>
                    <div class="flex items-center mb-4">
                        ${createStarRating(product.rating)}
                        <span class="text-sm text-gray-600 ml-2">(${product.reviews} reviews)</span>
                    </div>
                    
                    <p class="text-gray-600 mb-6">${product.description}</p>
                    
                    <div class="mb-6">
                        <span class="text-3xl font-bold text-primary">₹${product.price}</span>
                        ${product.originalPrice > product.price ? 
                            `<span class="text-lg text-gray-500 line-through ml-2">₹${product.originalPrice}</span>` 
                            : ''}
                    </div>
                    
                    <div class="mb-6">
                        <label class="block text-sm font-semibold text-gray-700 mb-2">Quantity</label>
                        <div class="flex items-center">
                            <button onclick="decrementQuantity()" class="bg-gray-200 px-3 py-1 rounded-l">-</button>
                            <input type="number" id="quantity" value="1" min="1" class="border-t border-b border-gray-200 px-4 py-1 w-16 text-center">
                            <button onclick="incrementQuantity()" class="bg-gray-200 px-3 py-1 rounded-r">+</button>
                        </div>
                    </div>
                    
                    <button onclick="addToCart(${product.id}, getQuantity())" 
                            class="w-full bg-primary text-white py-3 rounded-lg font-semibold hover:bg-red-600 transition-colors mb-4 ${!product.inStock ? 'opacity-50 cursor-not-allowed' : ''}"
                            ${!product.inStock ? 'disabled' : ''}>
                        ${product.inStock ? 'Add to Cart' : 'Out of Stock'}
                    </button>
                    
                    <div class="border-t pt-4">
                        <h3 class="font-semibold mb-2">Product Details</h3>
                        <ul class="text-sm text-gray-600 space-y-1">
                            <li>• Category: ${product.category}</li>
                            <li>• ${product.inStock ? 'In Stock' : 'Out of Stock'}</li>
                            <li>• Free shipping on orders above ₹999</li>
                            <li>• 30-day return policy</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    `;
    
    modal.classList.remove('hidden');
    document.body.style.overflow = 'hidden';
}

function closeProductModal() {
    document.getElementById('productModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function incrementQuantity() {
    const quantityInput = document.getElementById('quantity');
    quantityInput.value = parseInt(quantityInput.value) + 1;
}

function decrementQuantity() {
    const quantityInput = document.getElementById('quantity');
    const currentValue = parseInt(quantityInput.value);
    if (currentValue > 1) {
        quantityInput.value = currentValue - 1;
    }
}

function getQuantity() {
    return parseInt(document.getElementById('quantity')?.value || 1);
}

// Cart Functions
function addToCart(productId, quantity = 1) {
    const product = products.find(p => p.id === productId);
    if (!product || !product.inStock) return;
    
    const existingItem = cart.find(item => item.id === productId);
    
    if (existingItem) {
        existingItem.quantity += quantity;
    } else {
        cart.push({ ...product, quantity });
    }
    
    updateCartUI();
    showCartNotification();
}

function removeFromCart(productId) {
    cart = cart.filter(item => item.id !== productId);
    updateCartUI();
}

function updateCartQuantity(productId, newQuantity) {
    const item = cart.find(item => item.id === productId);
    if (item) {
        if (newQuantity <= 0) {
            removeFromCart(productId);
        } else {
            item.quantity = newQuantity;
        }
        updateCartUI();
    }
}

function updateCartUI() {
    const cartCount = document.getElementById('cartCount');
    const totalItems = cart.reduce((sum, item) => sum + item.quantity, 0);
    cartCount.textContent = totalItems;
    
    // Update cart modal if open
    const cartModal = document.getElementById('cartModal');
    if (!cartModal.classList.contains('hidden')) {
        displayCartItems();
    }
}

function openCart() {
    const cartModal = document.getElementById('cartModal');
    cartModal.classList.remove('hidden');
    displayCartItems();
    document.body.style.overflow = 'hidden';
}

function closeCart() {
    document.getElementById('cartModal').classList.add('hidden');
    document.body.style.overflow = 'auto';
}

function displayCartItems() {
    const cartItems = document.getElementById('cartItems');
    const cartTotal = document.getElementById('cartTotal');
    
    if (cart.length === 0) {
        cartItems.innerHTML = '<p class="text-gray-500 text-center py-4">Your cart is empty</p>';
        cartTotal.textContent = '0';
        return;
    }
    
    cartItems.innerHTML = cart.map(item => `
        <div class="flex items-center justify-between py-2 border-b">
            <div class="flex items-center">
                <span class="text-2xl mr-3">${item.image}</span>
                <div>
                    <h4 class="font-semibold text-sm">${item.name}</h4>
                    <p class="text-gray-600 text-xs">₹${item.price} x ${item.quantity}</p>
                </div>
            </div>
            <div class="flex items-center">
                <button onclick="updateCartQuantity(${item.id}, ${item.quantity - 1})" 
                        class="bg-gray-200 px-2 py-1 rounded-l text-sm">-</button>
                <span class="bg-gray-100 px-3 py-1 text-sm">${item.quantity}</span>
                <button onclick="updateCartQuantity(${item.id}, ${item.quantity + 1})" 
                        class="bg-gray-200 px-2 py-1 rounded-r text-sm">+</button>
                <button onclick="removeFromCart(${item.id})" 
                        class="text-red-500 ml-2 text-sm">×</button>
            </div>
        </div>
    `).join('');
    
    const total = cart.reduce((sum, item) => sum + (item.price * item.quantity), 0);
    cartTotal.textContent = total;
}

function showCartNotification() {
    // Create a temporary notification
    const notification = document.createElement('div');
    notification.className = 'fixed top-20 right-4 bg-green-500 text-white px-4 py-2 rounded-lg shadow-lg z-50 animate-slideIn';
    notification.textContent = 'Item added to cart!';
    
    document.body.appendChild(notification);
    
    setTimeout(() => {
        notification.remove();
    }, 3000);
}

// Deals Display Functions
function displayDeals() {
    const dealsGrid = document.getElementById('dealsGrid');
    if (!dealsGrid) return;
    
    dealsGrid.innerHTML = deals.map(deal => `
        <div class="deal-card">
            <div class="text-6xl mb-4">${deal.image}</div>
            <h3 class="text-2xl font-bold mb-2">${deal.title}</h3>
            <p class="mb-4">${deal.description}</p>
            <div class="text-3xl font-bold text-accent mb-4">${deal.discount}</div>
            <p class="text-sm opacity-90 mb-4">Valid until: ${new Date(deal.validUntil).toLocaleDateString()}</p>
            <button class="bg-white text-gray-800 px-6 py-2 rounded-full font-semibold hover:bg-gray-100 transition-colors">
                Shop Now
            </button>
        </div>
    `).join('');
}

// Form Handlers
function handleContactForm(e) {
    e.preventDefault();
    
    // Show loading state
    const submitBtn = e.target.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    submitBtn.innerHTML = '<span class="loading-spinner"></span>Sending...';
    submitBtn.disabled = true;
    
    // Simulate form submission
    setTimeout(() => {
        submitBtn.textContent = '✓ Message Sent!';
        submitBtn.classList.add('bg-green-600');
        
        // Reset form after delay
        setTimeout(() => {
            e.target.reset();
            submitBtn.textContent = originalText;
            submitBtn.classList.remove('bg-green-600');
            submitBtn.disabled = false;
        }, 2000);
    }, 1500);
}

function handleNewsletterForm(e) {
    e.preventDefault();
    
    const email = document.getElementById('newsletterEmail').value;
    const submitBtn = e.target.querySelector('button[type="submit"]');
    const originalText = submitBtn.textContent;
    
    submitBtn.innerHTML = '<span class="loading-spinner"></span>Subscribing...';
    submitBtn.disabled = true;
    
    // Simulate subscription
    setTimeout(() => {
        submitBtn.textContent = '✓ Subscribed!';
        submitBtn.classList.add('bg-green-600');
        
        // Reset after delay
        setTimeout(() => {
            e.target.reset();
            submitBtn.textContent = originalText;
            submitBtn.classList.remove('bg-green-600');
            submitBtn.disabled = false;
        }, 2000);
    }, 1500);
}

// Mobile Menu Functions
function toggleMobileMenu() {
    const mobileMenu = document.getElementById('mobileMenu');
    mobileMenu.classList.toggle('hidden');
}

// Utility Functions
function scrollToSection(sectionId) {
    const section = document.getElementById(sectionId);
    if (section) {
        section.scrollIntoView({
            behavior: 'smooth',
            block: 'start'
        });
    }
}

// Initialize theme and preferences
function initializeTheme() {
    // Check for saved theme preference or default to light
    const theme = localStorage.getItem('theme') || 'light';
    document.documentElement.setAttribute('data-theme', theme);
}

// Save user preferences
function saveUserPreferences() {
    const preferences = {
        cart: cart,
        favoriteCategory: currentCategory,
        theme: document.documentElement.getAttribute('data-theme')
    };
    localStorage.setItem('userPreferences', JSON.stringify(preferences));
}

// Load user preferences
function loadUserPreferences() {
    const saved = localStorage.getItem('userPreferences');
    if (saved) {
        const preferences = JSON.parse(saved);
        cart = preferences.cart || [];
        currentCategory = preferences.favoriteCategory || 'all';
        updateCartUI();
    }
}

// Performance optimization: Lazy loading for images
function setupLazyLoading() {
    const imageObserver = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const img = entry.target;
                img.src = img.dataset.src;
                img.classList.remove('lazy');
                observer.unobserve(img);
            }
        });
    });
    
    document.querySelectorAll('img[data-src]').forEach(img => {
        imageObserver.observe(img);
    });
}

// Initialize everything when the page loads
window.addEventListener('load', function() {
    loadUserPreferences();
    setupLazyLoading();
});

// Save preferences before page unload
window.addEventListener('beforeunload', function() {
    saveUserPreferences();
});

// Handle keyboard navigation
document.addEventListener('keydown', function(e) {
    // Escape key closes modals
    if (e.key === 'Escape') {
        closeProductModal();
        closeCart();
        hideSearchResults();
    }
    
    // Enter key on product cards opens product modal
    if (e.key === 'Enter' && e.target.classList.contains('product-card')) {
        const productId = e.target.dataset.productId;
        if (productId) viewProduct(productId);
    }
});