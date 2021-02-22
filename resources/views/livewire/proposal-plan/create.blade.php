<div>
    <section class="text-gray-600 body-font relative md:grid md:grid-cols-3">
        <div></div>
        <div class="container px-5 py-24 mx-auto flex">
            <div class="bg-white rounded-lg p-8 flex flex-col md:ml-auto w-full mt-10 md:mt-0 relative z-10 shadow-md">
                <h2 class="text-gray-900 text-lg mb-1 font-medium title-font">提案プラン作成</h2>
                
                <form wire:submit.prevent="store">

                    <div class="relative mb-4">
                        <label for="title" class="leading-7 text-sm text-gray-600">タイトル</label>
                        <input wire:model="title" type="text" id="title" name="title" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out" />
                        <x-jet-input-error for="title"/>
                    </div>
                    
                    <div class="relative mb-4">
                        <label for="content" class="leading-7 text-sm text-gray-600">内容</label>
                        <textarea wire:model="content" id="content" name="content" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                        <x-jet-input-error for="content"/>
                    </div>

                    <div class="relative mb-4">
                        <label for="price" class="leading-7 text-sm text-gray-600">価格</label>
                        <input wire:model="price" type="text" id="price" name="price" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                        <x-jet-input-error for="title"/>
                    </div>
                    
                    <div class="relative mb-4">
                        <label for="city_id" class="leading-7 text-sm text-gray-600">地域</label>
                        <select id="city_id" name="city_id" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @foreach ($prefectures as $prefecture)
                                <option value="">{{ $prefecture->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    <div class="relative mb-4">
                        <label for="category_id" class="leading-7 text-sm text-gray-600">カテゴリー</label>
                        <select id="category_id" name="category_id" class="w-full bg-white rounded border border-gray-300 focus:border-pink-500 focus:ring-2 focus:ring-pink-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                            @foreach ($categories as $category)
                                <option value="">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>

　                    <x-jet-button>投稿</x-jet-button>
                </form>
            </div>
        </div>
    </section>
</div>