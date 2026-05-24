<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0, viewport-fit=cover">
  <title>Collage Library | Blue & White Theme</title>
  <!-- Tailwind CSS v3 + Font Awesome Icons + Google Fonts (Inter) -->
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          fontFamily: {
            'sans': ['Inter', 'system-ui', 'Segoe UI', 'Roboto', 'Helvetica Neue', 'sans-serif'],
          },
          animation: {
            'fade-in': 'fadeIn 0.6s ease-out',
            'slide-up': 'slideUp 0.5s ease-out',
          },
          keyframes: {
            fadeIn: { '0%': { opacity: '0' }, '100%': { opacity: '1' } },
            slideUp: { '0%': { opacity: '0', transform: 'translateY(20px)' }, '100%': { opacity: '1', transform: 'translateY(0)' } },
          }
        }
      }
    }
  </script>
  <link href="https://fonts.googleapis.com/css2?family=Inter:opsz,wght@14..32,300;14..32,400;14..32,500;14..32,600;14..32,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
  <style>
    html { scroll-behavior: smooth; }
    body { background-color: #f8fafc; }
    .book-card-hover {
      transition: all 0.25s ease-in-out;
    }
    .book-card-hover:hover {
      transform: translateY(-6px);
      box-shadow: 0 20px 25px -12px rgba(0, 0, 0, 0.15);
    }
    .notice-item {
      border-left: 4px solid #2563eb;
      transition: background 0.2s;
    }
    .notice-item:hover {
      background-color: #eff6ff;
    }
    .nav-link-active {
      border-bottom: 2px solid #2563eb;
      color: #1e3a8a;
    }
  </style>
</head>
<body class="font-sans antialiased bg-blue-50/30">

  <!-- ========== NAVBAR (Blue & White Theme) ========== -->
  <nav class="sticky top-0 z-50 bg-white shadow-md border-b border-blue-100">
    <div class="max-w-7xl mx-auto px-5 sm:px-8">
      <div class="flex justify-between items-center py-3 md:py-4">
        <!-- Logo + Brand -->
        <div class="flex items-center gap-2 cursor-pointer" onclick="window.location.href='/'">
          <div class="bg-blue-700 text-white p-2 rounded-lg shadow-md">
            <i class="fas fa-book-open text-lg"></i>
          </div>
          <span class="text-xl md:text-2xl font-bold bg-gradient-to-r from-blue-800 to-blue-600 bg-clip-text text-transparent">Collage Library</span>
        </div>
        
        <!-- Desktop Menu -->
        <div class="hidden md:flex items-center space-x-7">
          <a href="#" class="nav-link text-gray-700 hover:text-blue-700 font-medium transition">Home</a>
          <a href="#books-section" class="text-gray-700 hover:text-blue-700 font-medium transition">Books</a>
          <a href="#notice-hours" class="text-gray-700 hover:text-blue-700 font-medium transition">Info</a>
          <a href="#" class="text-gray-700 hover:text-blue-700 font-medium transition">Resources</a>
          <a href="{{ route('membership.register')}}" class="bg-blue-700 text-white px-5 py-2 rounded-full text-sm font-semibold shadow-md hover:bg-blue-800 transition flex items-center gap-2">
            <i class="fas fa-user-plus"></i> Register
          </a>
        </div>
        
        <!-- Mobile menu button -->
        <div class="md:hidden">
          <button id="mobileMenuBtn" class="text-blue-800 text-2xl focus:outline-none">
            <i class="fas fa-bars"></i>
          </button>
        </div>
      </div>
      
      <!-- Mobile dropdown menu -->
      <div id="mobileMenu" class="hidden md:hidden pb-4 flex flex-col space-y-3 border-t border-blue-100 mt-2 pt-3">
        <a href="#" class="text-gray-700 hover:text-blue-700 font-medium py-1">Home</a>
        <a href="#books-section" class="text-gray-700 hover:text-blue-700 font-medium py-1">Books</a>
        <a href="#notice-hours" class="text-gray-700 hover:text-blue-700 font-medium py-1">Info</a>
        <a href="#" class="text-gray-700 hover:text-blue-700 font-medium py-1">Resources</a>
        <a href="{{ route('membership.register')}}" class="bg-blue-700 text-white px-4 py-2 rounded-full text-center font-semibold inline-block">Register</a>
      </div>
    </div>
  </nav>
  <main class="mt-1">
    @yield('content')
  </main>
  <!-- ========== FOOTER SECTION ========== -->
  <footer class="bg-gray-900 text-gray-300 pt-14 pb-8">
    <div class="max-w-7xl mx-auto px-5 sm:px-8">
      <div class="grid grid-cols-1 md:grid-cols-4 gap-10">
        <div class="col-span-1 md:col-span-1">
          <div class="flex items-center gap-2 mb-4">
            <i class="fas fa-book text-blue-400 text-2xl"></i>
            <span class="text-white text-xl font-bold">Collage Library</span>
          </div>
          <p class="text-sm text-gray-400 leading-relaxed">Empowering minds with boundless resources. A modern academic library for tomorrow’s leaders.</p>
          <div class="flex space-x-4 mt-5">
            <a href="#" class="text-gray-400 hover:text-blue-400 transition"><i class="fab fa-facebook-f text-lg"></i></a>
            <a href="#" class="text-gray-400 hover:text-blue-400 transition"><i class="fab fa-twitter text-lg"></i></a>
            <a href="#" class="text-gray-400 hover:text-blue-400 transition"><i class="fab fa-instagram text-lg"></i></a>
            <a href="#" class="text-gray-400 hover:text-blue-400 transition"><i class="fab fa-linkedin-in text-lg"></i></a>
          </div>
        </div>
        
        <div>
          <h4 class="text-white font-semibold text-md mb-4">Quick Links</h4>
          <ul class="space-y-2 text-sm">
            <li><a href="#" class="hover:text-blue-400 transition"><i class="fas fa-chevron-right text-xs mr-2"></i>About Us</a></li>
            <li><a href="#" class="hover:text-blue-400 transition"><i class="fas fa-chevron-right text-xs mr-2"></i>Membership</a></li>
            <li><a href="#" class="hover:text-blue-400 transition"><i class="fas fa-chevron-right text-xs mr-2"></i>Digital Resources</a></li>
            <li><a href="#" class="hover:text-blue-400 transition"><i class="fas fa-chevron-right text-xs mr-2"></i>Ask a Librarian</a></li>
          </ul>
        </div>
        
        <div>
          <h4 class="text-white font-semibold text-md mb-4">Resources</h4>
          <ul class="space-y-2 text-sm">
            <li><a href="#" class="hover:text-blue-400 transition"><i class="fas fa-chevron-right text-xs mr-2"></i>E-books & Journals</a></li>
            <li><a href="#" class="hover:text-blue-400 transition"><i class="fas fa-chevron-right text-xs mr-2"></i>Study Rooms Booking</a></li>
            <li><a href="#" class="hover:text-blue-400 transition"><i class="fas fa-chevron-right text-xs mr-2"></i>Interlibrary Loan</a></li>
            <li><a href="#" class="hover:text-blue-400 transition"><i class="fas fa-chevron-right text-xs mr-2"></i>FAQs</a></li>
          </ul>
        </div>
        
        <div>
          <h4 class="text-white font-semibold text-md mb-4">Contact</h4>
          <ul class="space-y-2 text-sm">
            <li class="flex items-start gap-2"><i class="fas fa-map-marker-alt text-blue-400 mt-0.5"></i> 123 Library Avenue, Knowledge City, 560001</li>
            <li class="flex items-center gap-2"><i class="fas fa-phone-alt text-blue-400"></i> +1 (800) 234-5678</li>
            <li class="flex items-center gap-2"><i class="fas fa-envelope text-blue-400"></i> hello@collagelibrary.edu</li>
          </ul>
        </div>
      </div>
      <div class="border-t border-gray-800 mt-12 pt-6 text-center text-sm text-gray-500">
        <p>&copy; 2025 Collage Library. All rights reserved. | Designed with <i class="fas fa-heart text-blue-500"></i> for readers</p>
      </div>
    </div>
  </footer>
    <script>
    // ---------- BOOKS DATABASE ----------
    const booksDatabase = [
      { id: 1, title: "Quantum Physics for Beginners", author: "Alan Miller", department: "science", coverIcon: "fa-atom", rating: "4.8" },
      { id: 2, title: "The Hidden Life of Trees", author: "Peter Wohlleben", department: "science", coverIcon: "fa-seedling", rating: "4.7" },
      { id: 3, title: "Cosmos: A Spacetime Odyssey", author: "Carl Sagan", department: "science", coverIcon: "fa-globe", rating: "4.9" },
      { id: 4, title: "World History: Patterns", author: "Amrita Sen", department: "humanities", coverIcon: "fa-globe-asia", rating: "4.5" },
      { id: 5, title: "Philosophy of Mind", author: "David Chalmers", department: "humanities", coverIcon: "fa-brain", rating: "4.6" },
      { id: 6, title: "Classical Mythology", author: "Edith Hamilton", department: "humanities", coverIcon: "fa-feather-alt", rating: "4.4" },
      { id: 7, title: "Structural Engineering Basics", author: "R. C. Hibbeler", department: "engineering", coverIcon: "fa-drafting-compass", rating: "4.7" },
      { id: 8, title: "Introduction to Algorithms", author: "CLRS", department: "engineering", coverIcon: "fa-code", rating: "4.9" },
      { id: 9, title: "Embedded Systems", author: "Jonathan Valvano", department: "engineering", coverIcon: "fa-microchip", rating: "4.6" },
      { id: 10, title: "Marketing Management", author: "Philip Kotler", department: "business", coverIcon: "fa-chart-line", rating: "4.8" },
      { id: 11, title: "Financial Intelligence", author: "Karen Berman", department: "business", coverIcon: "fa-coins", rating: "4.5" },
      { id: 12, title: "Startup Strategies", author: "Eric Ries", department: "business", coverIcon: "fa-rocket", rating: "4.7" },
      { id: 13, title: "The Art of Color", author: "Johannes Itten", department: "arts", coverIcon: "fa-palette", rating: "4.6" },
      { id: 14, title: "Drawing on the Right Side", author: "Betty Edwards", department: "arts", coverIcon: "fa-pencil-ruler", rating: "4.8" },
      { id: 15, title: "Digital Photography", author: "Scott Kelby", department: "arts", coverIcon: "fa-camera", rating: "4.5" }
    ];

    function renderBooksGrid(booksArray) {
      const container = document.getElementById("booksGridContainer");
      const noMsg = document.getElementById("noBooksMessage");
      if (!container) return;
      if (booksArray.length === 0) {
        container.innerHTML = '';
        noMsg.classList.remove("hidden");
        return;
      }
      noMsg.classList.add("hidden");
      container.innerHTML = booksArray.map(book => `
        <div class="book-card-hover bg-white rounded-xl shadow-sm border border-gray-100 overflow-hidden transition-all duration-200 group">
          <div class="h-32 bg-gradient-to-br from-blue-100 to-indigo-50 flex items-center justify-center">
            <i class="fas ${book.coverIcon || 'fa-book'} text-5xl text-blue-600/70 group-hover:scale-110 transition-transform"></i>
          </div>
          <div class="p-4">
            <div class="flex items-center justify-between">
              <span class="text-xs font-medium px-2 py-0.5 rounded-full bg-blue-100 text-blue-700 capitalize">${book.department}</span>
              <span class="text-xs text-yellow-600"><i class="fas fa-star text-yellow-500"></i> ${book.rating}</span>
            </div>
            <h4 class="font-bold text-gray-800 mt-2 text-md line-clamp-1">${book.title}</h4>
            <p class="text-gray-500 text-xs mt-1">by ${book.author}</p>
            <button class="mt-3 w-full text-center text-blue-700 text-sm font-medium border border-blue-200 rounded-lg py-1.5 hover:bg-blue-50 transition">Reserve <i class="fas fa-arrow-right text-xs ml-1"></i></button>
          </div>
        </div>
      `).join('');
    }

    let currentFilter = "all";
    function filterBooksByDept(dept) {
      if (dept === "all") return [...booksDatabase];
      return booksDatabase.filter(book => book.department === dept);
    }

    function updateActiveTab(activeDept) {
      document.querySelectorAll(".dept-tab").forEach(btn => {
        if (btn.getAttribute("data-dept") === activeDept) {
          btn.classList.add("active-tab", "bg-blue-100", "text-blue-800");
          btn.classList.remove("bg-gray-100", "text-gray-700");
        } else {
          btn.classList.remove("active-tab", "bg-blue-100", "text-blue-800");
          btn.classList.add("bg-gray-100", "text-gray-700");
        }
      });
    }

    function applyFilterAndRender() {
      const filtered = filterBooksByDept(currentFilter);
      renderBooksGrid(filtered);
    }

    // Dept buttons
    document.querySelectorAll(".dept-tab").forEach(btn => {
      btn.addEventListener("click", (e) => {
        const dept = btn.getAttribute("data-dept");
        currentFilter = dept;
        updateActiveTab(dept);
        applyFilterAndRender();
        const searchInput = document.getElementById("bookSearchInput");
        if(searchInput) searchInput.value = "";
        const feedback = document.getElementById("searchFeedback");
        if(feedback) feedback.classList.add("hidden");
      });
    });
    
    // Search logic
    function searchBooks(query) {
      if (!query.trim()) {
        applyFilterAndRender();
        return;
      }
      const lowerQuery = query.toLowerCase();
      const deptFiltered = filterBooksByDept(currentFilter);
      const results = deptFiltered.filter(book => 
        book.title.toLowerCase().includes(lowerQuery) || 
        book.author.toLowerCase().includes(lowerQuery) ||
        book.department.toLowerCase().includes(lowerQuery)
      );
      renderBooksGrid(results);
      const feedback = document.getElementById("searchFeedback");
      if (feedback) {
        if(results.length === 0) {
          feedback.innerText = `🔎 No books match "${query}" in ${currentFilter === "all" ? "all departments" : currentFilter} section.`;
          feedback.classList.remove("hidden");
        } else {
          feedback.innerText = `✨ Found ${results.length} book(s) for "${query}".`;
          feedback.classList.remove("hidden");
        }
      }
      if(results.length === 0) document.getElementById("noBooksMessage")?.classList.remove("hidden");
      else document.getElementById("noBooksMessage")?.classList.add("hidden");
    }

    const searchInputField = document.getElementById("bookSearchInput");
    const searchBtn = document.getElementById("searchButton");
    if(searchBtn && searchInputField) {
      const performSearch = () => searchBooks(searchInputField.value);
      searchBtn.addEventListener("click", performSearch);
      searchInputField.addEventListener("keyup", (e) => {
        if(e.key === "Enter") performSearch();
        if(searchInputField.value === "") {
          document.getElementById("searchFeedback")?.classList.add("hidden");
          applyFilterAndRender();
        }
      });
    }
    
    // Notices
    const notices = [
      { date: "April 22, 2025", text: "📚 Summer Reading Challenge starts next week! Sign up at the front desk.", icon: "fa-sun" },
      { date: "April 20, 2025", text: "⏳ Library extended hours during exam season (April 28 - May 20).", icon: "fa-hourglass-half" },
      { date: "April 18, 2025", text: "🎓 New eBook collection: 'Artificial Intelligence & Society' launched.", icon: "fa-microchip" },
      { date: "April 15, 2025", text: "📢 Workshop: 'Research Methods & Citation' on April 30, 2 PM.", icon: "fa-chalkboard-user" },
    ];
    
    function renderNotices() {
      const container = document.getElementById("noticeList");
      if (!container) return;
      container.innerHTML = notices.map(notice => `
        <div class="notice-item bg-gray-50 rounded-lg p-3 flex gap-3 items-start transition-all">
          <i class="fas ${notice.icon} text-blue-600 text-md mt-0.5"></i>
          <div>
            <p class="text-xs text-blue-700 font-medium">${notice.date}</p>
            <p class="text-gray-700 text-sm">${notice.text}</p>
          </div>
        </div>
      `).join('');
    }
    
    // Initialize
    renderBooksGrid(booksDatabase);
    renderNotices();
    updateActiveTab("all");
    
    // Reserve alert simulation
    document.addEventListener("click", (e) => {
      if(e.target && e.target.innerText.includes("Reserve") && (e.target.tagName === "BUTTON" || (e.target.parentElement && e.target.parentElement.innerText.includes("Reserve")))) {
        e.preventDefault();
        alert("📖 Reservation feature: you can reserve this book from your member dashboard.");
      }
    });

    // Mobile menu toggle
    const mobileBtn = document.getElementById("mobileMenuBtn");
    const mobileMenu = document.getElementById("mobileMenu");
    if(mobileBtn && mobileMenu) {
      mobileBtn.addEventListener("click", () => {
        mobileMenu.classList.toggle("hidden");
      });
    }
  </script>
</body>
</html>