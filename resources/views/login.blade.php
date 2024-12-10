<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Login Page</title>
	<link href="{{ asset('custom/css/login.css') }}" rel="stylesheet" type="text/css">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
	<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body class="{{ $BodyBackgroundClass }}">
	<!-- Particles.js container -->
	<div id="particles-js" style="position: absolute; width: 100%; height: 100%; top: 0; left: 0;"></div>

	<div class="login-page">
		<div class="top-bar">
			<img src="{{ asset('images/Client-Logo.png') }}" alt="Client Logo" class="left-logo">
			<img src="{{ asset('images/Corsys-Logo.png') }}" alt="Corsys Logo" class="right-logo">
		</div>

		<div class="login-box {{ $LoginBoxBackgroundClass }}">
			<div class="logo">
				<img src="{{ asset('images/Corsys-Bank.png') }}" alt="Company Logo">
			</div>

<<<<<<< HEAD
            <!-- Login Form -->
            <form method="POST" action="{{ route('login') }}">
                @csrf
                <label for="database">Connect Database</label>
                <select id="database" name="database" required>
                    <option value="postgre">Postgre</option>
                    <option value="oracle">Oracle</option>
                    <option value="bulanan">Bulanan</option>
                </select>
=======
			<!-- Login Form -->
			<form method="POST" action="{{ route('login') }}">
				@csrf
				<label for="database">Connect Database</label>
				<select id="database" name="database" required>
					<option value="live_system">Live System</option>
					<option value="cetak">Cetak</option>
					<option value="bulanan">Bulanan</option>
				</select>
>>>>>>> 3069a3e2520b234b6248e60f46856f8f988c5fce

				<label for="userId">User ID</label>
				<input id="userId" name="userid" type="text" placeholder="Enter User ID" required>

				<label for="password">Password</label>
				<div class="password-container">
					<input id="password" name="password" type="password" placeholder="Enter Password" required>
					<span class="icon" onclick="togglePassword()">
						<i id="toggle-icon" class="fa fa-eye"></i> <!-- Ensure FontAwesome is included -->
					</span>
				</div>
				<x-button-basic>
					Login
				</x-button-basic>
				<button type="submit" class="{{ $ButtonBackgroundClass }}">Login</button>
			</form>
		</div>

		<footer>
			<p>&copy; 2024 <a href="#">CorSys-Bank</a>. All Rights Reserved.</p>
		</footer>
	</div>

	<!-- SweetAlert for error message -->
	@if (session('error_message'))
		<script>
			document.addEventListener('DOMContentLoaded', function() {
				Swal.fire({
					icon: 'error',
					title: 'Login Failed',
					text: "{{ session('error_message') }}",
					confirmButtonText: 'OK',
					backdrop: false,
					customClass: {
						popup: 'my-popup-class',
						title: 'my-title-class',
						content: 'my-content-class'
					},
					showClass: {
						popup: ''
					},
					hideClass: {
						popup: ''
					}
				});
			});
		</script>
	@endif

	<!-- Particles.js -->
	<script src="https://cdn.jsdelivr.net/npm/tsparticles@1.39.0/tsparticles.min.js"></script>
	<script>
		tsParticles.load("particles-js", {
			fullScreen: {
				enable: true,
				zIndex: 0
			},
			background: {
				color: {
					value: "transparent"
				}
			},
			particles: {
				number: {
					value: 50,
					density: {
						enable: true,
						area: 800
					}
				},
				color: {
					value: ["#E6C785", "#C0C0C0", "#D6CFB2", "#B8C5CB"]
				},
				shape: {
					type: "circle"
				},
				opacity: {
					value: 0.8
				},
				size: {
					value: {
						min: 3,
						max: 6
					}
				},
				links: {
					enable: true,
					distance: 130,
					color: "#808080",
					opacity: 0.8,
					width: 1
				},
				move: {
					enable: true,
					speed: 2.5,
					outModes: "out"
				}
			},
			interactivity: {
				events: {
					onHover: {
						enable: true,
						mode: "grab"
					},
					onClick: {
						enable: true,
						mode: "push"
					}
				},
				modes: {
					grab: {
						distance: 140,
						links: {
							opacity: 1
						}
					},
					push: {
						quantity: 4
					}
				}
			}
		});

		// Toggle password visibility
		function togglePassword() {
			const passwordField = document.getElementById('password');
			const toggleIcon = document.getElementById('toggle-icon');
			if (passwordField.type === 'password') {
				passwordField.type = 'text';
				toggleIcon.classList.replace('fa-eye', 'fa-eye-slash');
			} else {
				passwordField.type = 'password';
				toggleIcon.classList.replace('fa-eye-slash', 'fa-eye');
			}
		}
	</script>
</body>

</html>
