<header class="text-gray-600 body-font">
  	<div class="container mx-auto flex flex-wrap p-5 flex-col md:flex-row items-center">
    	<a href="{{ route('top') }}" class="flex title-font font-medium items-center text-gray-900 mb-4 md:mb-0">
			<svg xmlns="http://www.w3.org/2000/svg" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="w-10 h-10 text-white p-2 bg-pink-500 rounded-full" viewBox="0 0 24 24">
				<path d="M12 2L2 7l10 5 10-5-10-5zM2 17l10 5 10-5M2 12l10 5 10-5"></path>
			</svg>
			<span class="ml-3 text-xl">DatePlanet</span>
    	</a>
		<nav class="md:mr-auto md:ml-4 md:py-1 md:pl-4 md:border-l md:border-gray-400	flex flex-wrap items-center text-base justify-center">
			<a class="mr-5 hover:text-gray-900">デートプラン募集を探す</a>
			<a class="mr-5 hover:text-gray-900">提案者を探す</a>
			<a href="{{ route('proposal_plan.index') }}" class="mr-5 hover:text-gray-900">提案プランを探す</a>
			<a href="{{ route('proposal_plan.create') }}" class="mr-5 hover:text-gray-900">提案プランを投稿する</a>
			<!-- <a class="mr-5 hover:text-gray-900">Fourth Link</a> -->
		</nav>

		<a href="{{ route('mypage') }}" class="mr-5 hover:text-gray-900">マイページ</a>
		<!-- マイページ -->
		@auth
		<div class="ml-3 relative">
			<x-jet-dropdown align="right" width="48">
				<x-slot name="trigger">
					<button class="flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition duration-150 ease-in-out">
						<img class="h-8 w-8 rounded-full object-cover" src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
					</button>
				</x-slot>

				<x-slot name="content">
					<!-- Account Management -->
					<div class="block px-4 py-2 text-xs text-gray-400">
						マイページ
					</div>

					<x-jet-dropdown-link href="{{ route('profile.show') }}">
						プロフィール編集
					</x-jet-dropdown-link>

					<div class="border-t border-gray-100"></div>

					<!-- Authentication -->
					<form method="POST" action="{{ route('logout') }}">
						@csrf

						<x-jet-dropdown-link href="{{ route('logout') }}"
									onclick="event.preventDefault();
										this.closest('form').submit();">
							{{ __('Logout') }}
						</x-jet-dropdown-link>
					</form>
				</x-slot>
			</x-jet-dropdown>
		</div>
		@else
			<a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Login</a>
			@if (Route::has('register'))
				<a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
			@endif
		@endauth
  	</div>
</header>