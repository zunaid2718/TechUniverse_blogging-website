<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>about</title>
    <link href="https://unpkg.com/tailwindcss@^1.0/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="static/css/public_styling.css">

</head>
<body>


<!-- navbar -->

<header class="text-gray-700 body-font">
  <div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    <a class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
		<img src="static/images/logo.svg" alt="logo">
      <span class="ml-3 text-xl">TechUniverse</span>
    </a>
    <nav class="md:ml-auto flex flex-wrap items-center text-base justify-center">
      <a href = "index.php" class="mr-5 hover:text-gray-900">Home</a>
      <a href = "contact.php" class="mr-5 hover:text-gray-900">Contact </a>
      <a href = "about.php" class="mr-5 hover:text-gray-900">About </a>
    </nav>
    <a href="register.php"><button class="inline-flex items-center bg-gray-200 border-0 py-1 px-3 focus:outline-none hover:bg-gray-300 rounded text-base mt-4 md:mt-0">Sign In
      <svg fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-4 h-4 ml-1" viewBox="0 0 24 24">
        <path d="M5 12h14M12 5l7 7-7 7"></path>
      </svg>
    </button></a>
  </div>
</header>

<section class="text-gray-700 body-font">
  <div class="container px-5 py-24 mx-auto">
    <div class="xl:w-1/2 lg:w-3/4 w-full mx-auto text-center">
      <svg xmlns="http://www.w3.org/2000/svg" fill="currentColor" class="inline-block w-8 h-8 text-gray-400 mb-8" viewBox="0 0 975.036 975.036">
        <path d="M925.036 57.197h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.399 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l36 76c11.6 24.399 40.3 35.1 65.1 24.399 66.2-28.6 122.101-64.8 167.7-108.8 55.601-53.7 93.7-114.3 114.3-181.9 20.601-67.6 30.9-159.8 30.9-276.8v-239c0-27.599-22.401-50-50-50zM106.036 913.497c65.4-28.5 121-64.699 166.9-108.6 56.1-53.7 94.4-114.1 115-181.2 20.6-67.1 30.899-159.6 30.899-277.5v-239c0-27.6-22.399-50-50-50h-304c-27.6 0-50 22.4-50 50v304c0 27.601 22.4 50 50 50h145.5c-1.9 79.601-20.4 143.3-55.4 191.2-27.6 37.8-69.4 69.1-125.3 93.8-25.7 11.3-36.8 41.7-24.8 67.101l35.9 75.8c11.601 24.399 40.501 35.2 65.301 24.399z"></path>
      </svg>
      <p class="leading-relaxed text-lg">Mohd. Zunaid is a devloper who started programming in the high school. In 2017, he started studying B. Tech. in Computer Science stream. He is an active competitive programmer and have worked with Data Structures, C, C++ HTML, CSS etc. He belongs to U.P. He has a dream of becoming a good programmer. Currently he is persuing B. Tech CSE in GNA University</p>
      <span class="inline-block h-1 w-10 rounded bg-indigo-500 mt-8 mb-6"></span>
      <h2 class="text-gray-900 font-medium title-font tracking-wider text-sm">Mohd Zunaid</h2>
      <p class="text-gray-500">Big Data Engineer </p>
    </div>
  </div>
</section>


<!-- Footer -->
<div class="footer">
			<p> TechUniverse &copy; <?php echo date('Y'); ?></p>
		</div>
		<!-- // footer -->

	</div>
    
</body>
</html>