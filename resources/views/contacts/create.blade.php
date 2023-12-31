 
 <x-app-layout>
    <x-slot name="header">
        <!-- ページのタイトル -->
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            新規作成
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 bg-white border-b border-gray-200">
                    <!-- フォームのセクション -->
                    <section class="text-gray-600 body-font relative">
                        <div class="container px-5 mx-auto">

                            <div class="lg:w-1/2 md:w-2/3 mx-auto">
                                <div class="flex flex-col space-y-4">
                                    <!-- 名前の入力フィールド -->
                                    <div>
                                        <div class="relative">
                                            <label for="name" class="leading-7 text-sm text-gray-600">Name</label>
                                            <input type="text" id="name" name="name" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 text-base outline-none text-gray-700 py-1 px-3 leading-8 transition-colors duration-200 ease-in-out">
                                        </div>
                                    </div>

                                    <!-- メッセージの入力フィールド -->
                                    <div>
                                        <div class="relative">
                                            <label for="message" class="leading-7 text-sm text-gray-600">Message</label>
                                            <textarea id="message" name="message" class="w-full bg-gray-100 bg-opacity-50 rounded border border-gray-300 focus:border-indigo-500 focus:bg-white focus:ring-2 focus:ring-indigo-200 h-32 text-base outline-none text-gray-700 py-1 px-3 resize-none leading-6 transition-colors duration-200 ease-in-out"></textarea>
                                        </div>
                                    </div>

                                    <!-- 送信ボタン -->
                                    <div class="p-2 w-full">
                                        <button class="flex mx-auto text-white bg-indigo-500 border-0 py-2 px-8 focus:outline-none hover:bg-indigo-600 rounded text-lg">Button</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
