
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>EDUPLATFORM</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            color: white;
            background-color: #001f3f; /* Dark Blue */
            transition: background-color 0.3s ease; /* Smooth background color transition */
        }
        header {
            background-color: #001f3f;
            padding: 1em 2em;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        nav {
            display: flex;
            align-items: center;
        }
        nav a {
            color: white;
            margin: 0 15px;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease; /* Smooth color transition */
        }
        nav a:hover {
            color: #ff5733; /* Orange color on hover */
        }
        .hero {
            background: url('https://images.inc.com/uploaded_files/image/1920x1080/getty_933383882_2000133420009280345_410292.jpg') no-repeat center center;
            background-size: cover;
            height: 500px;
            display: flex;
            justify-content: center;
            align-items: center;
            transition: background-color 0.3s ease; /* Smooth background color transition */
        }
        .hero:hover {
            background-color: rgba(0, 0, 0, 0.5); /* Dark overlay on hover */
        }
        .hero h1 {
            background-color: rgba(0, 0, 0, 0.7);
            padding: 20px;
            border-radius: 5px;
            transition: background-color 0.3s ease; /* Smooth background color transition */
        }
        .hero h1:hover {
            background-color: rgba(0, 0, 0, 0.9); /* Darker overlay on hover */
        }
        .categories {
            padding: 2em;
            text-align: center;
            background-color: white;
            color: #001f3f;
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }
        .category {
            margin: 1em;
            width: 200px;
            height: 150px;
            position: relative;
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            color: white;
            font-weight: bold;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.6);
            transition: transform 0.3s ease, box-shadow 0.3s ease; /* Smooth transform and box-shadow transition */
            cursor: pointer;
        }
        .category:hover {
            transform: scale(1.1); /* Scale up on hover */
            box-shadow: 0 0 15px rgba(255, 255, 255, 0.5); /* White shadow on hover */
        }
        .category .category-overlay {
            background-color: rgba(0, 0, 0, 0.5);
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            opacity: 0; /* Hidden by default */
            transition: opacity 0.3s ease; /* Smooth opacity transition */
        }
        .category:hover .category-overlay {
            opacity: 1; /* Fade in overlay on hover */
        }
        .about {
            padding: 2em;
            text-align: center;
        }
        footer {
            background-color: #001f3f;
            text-align: center;
            padding: 1em 0;
        }
        @media (max-width: 768px) {
            nav {
                display: none;
            }
            .mobile-nav {
                display: block;
                background-color: #001f3f;
                color: white;
                padding: 1em;
                text-align: right;
            }
            .mobile-nav select {
                background-color: #001f3f;
                color: white;
                border: none;
                font-weight: bold;
                padding: 0.5em;
            }
        }
        @media (min-width: 769px) {
            .mobile-nav {
                display: none;
            }
        }
    </style>
</head>
<body>

<header>
    <h1>EDUPLATFORM</h1>
    <nav>
        <a href="{{ route('student.courses.index') }}">Courses</a>
        
        <!-- Authentication Links -->
        @guest
            <a href="{{ route('login') }}">Login</a>
            @if (Route::has('register'))
                <a href="{{ route('register') }}">Register</a>
            @endif
        @else
            <!-- Show logout link when logged in -->
            <a href="{{ route('logout') }}"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                Logout
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
        @endguest
    </nav>
    <div class="mobile-nav">
        <select onchange="location = this.value;">
            <option value="#">Menu</option>
            <option value="{{ route('student.courses.index') }}">Courses</option>
            @guest
                <option value="{{ route('login') }}">Login</option>
                @if (Route::has('register'))
                    <option value="{{ route('register') }}">Register</option>
                @endif
            @else
                <option value="{{ route('logout') }}"
                        onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                    Logout
                </option>
                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endguest
        </select>
    </div>
</header>


    <section class="hero">
        <h1>Education is the key to success</h1>
    </section>

    <section class="categories">
        <div class="category" style="background-image: url('https://www.thoughtco.com/thmb/VZi-Q94NrK8M5XYMTCBocUPypGw=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/chemistry-58fa659a5f9b581d59127d3f.jpg');">
            <div class="category-overlay">Chemistry</div>
        </div>
        <div class="category" style="background-image: url('https://epe.brightspotcdn.com/dims4/default/bc8bcf9/2147483647/strip/true/crop/1690x1147+15+0/resize/840x570!/quality/90/?url=https%3A%2F%2Fepe-brightspot.s3.us-east-1.amazonaws.com%2F2c%2Ffd%2F56918f264baf8dc1d9477ba35935%2Ftechnology-laptops-06212022-1224309929.jpg');">
            <div class="category-overlay">Software Development</div>
        </div>
        <div class="category" style="background-image: url('https://www.arch2o.com/wp-content/uploads/2016/10/Arch2O-the-10-common-mistakes-architecture-students-make-2.jpg');">
            <div class="category-overlay">Architecture</div>
        </div>
        <div class="category" style="background-image: url('https://www.truro-penwith.ac.uk/app/uploads/2021/11/A-Level-Geography-TC.jpg');">
            <div class="category-overlay">Geography</div>
        </div>
    </section>

    <section class="about">
        <h2>About Us</h2>
        <p>We are dedicated to providing high-quality education for everyone. Our platform offers a wide range of courses in various fields, including science, technology, engineering, and the arts.</p>
    </section>

    <footer>
        <p>&copy; 2024 EDUPLATFORM. All rights reserved.</p>
    </footer>

</body>
</html>
