<!DOCTYPE HTML>
<html>
	<head>
		<title>Task Manager</title>
		<meta charset="utf-8" />
		 <meta name="viewport" content="width=device-width, initial-scale=1.0">
  @vite('resources/css/app.css')
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>	
		<link href="https://fonts.googleapis.com/css2?family=Caveat&family=Caveat+Brush&display=swap" rel="stylesheet">
	</head>
	<body>

		<!-- Header -->
			<header id="header">
				<div class="h-24 w-full bg-violet">
					<div class="flex flex-col sm:flex-row px-8 text-center justify-between">
						<div>
							<h1 class="font-caveatbrush text-mint text-6xl">Task Manager</h1>
						</div>
						<div>
							<nav id="nav" class="flex flex-col sm:flex-row gap-4 font-caveat text-mint font-semibold text-3xl">
								<a href="/">Home</a>
								<a href="about">About</a>
								<a href="tasks/create">Create</a>
							</nav>
						</div>
</div>
				</div>
			</header>
		
		@yield ('content')

		</body>
</html>
