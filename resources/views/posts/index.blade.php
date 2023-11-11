<x-app-layout>

    <div class="container max-w-7xl mx-auto px-4 md:px-12 pb-3 mt-3">

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap w-full mb-20">
                    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">事例紹介</h1>
                        <div class="h-1 w-20 bg-yellow-500 rounded"></div>
                    </div>
                    {{-- <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">実際に事業所と企業が連携した例を紹介</p> --}}
                </div>
                <div class="flex flex-wrap -m-4">
                    <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="bg-amber-50 p-6 rounded-lg">
                            <img class="h-40 rounded w-full object-cover object-center mb-6"
                                src={{ asset('img/箱折.png') }} alt="content">
                            <h3 class="tracking-widest text-yellow-500 text-xs font-medium title-font">就労継続支援Ｂ型事業所□□
                            </h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4"></h2>
                            <p class="leading-relaxed text-base">
                                {{ Str::limit('就労継続支援B型事業所〇〇が、企業からの箱折り作業委託で新たな一歩を踏み出しました。企業は、その精密で手の込んだ仕事に感銘し、箱の組み立てや梱包などを事業所のメンバーに依頼。障がい者たちは慎重かつ丁寧に作業し、企業の品質基準を満たす高品質な製品が完成しています。', 70, '...続きを読む') }}
                            </p>
                        </div>
                    </div>
                    <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="bg-amber-50 p-6 rounded-lg">
                            <img class="h-40 rounded w-full object-cover object-center mb-6"
                                src={{ asset('img/農作業.png') }} alt="content">
                            <h3 class="tracking-widest text-yellow-500 text-xs font-medium title-font">就労継続支援Ｂ型事業所△△
                            </h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">農作業</h2>
                            <p class="leading-relaxed text-base">
                                {{ Str::limit('就労継続支援B型事業所〇〇は、地域の農家の仕事に携わっています。農家との協力により、事業所のメンバーは農業の美しさや農産物の大切さを学び、自然と触れ合いながら成長しています。畑仕事や収穫の手伝いを通じ、彼らは丹精込められた農産物に込められた農家の思いに触れ、仕事へのやりがいを感じています。', 70, '...続きを読む') }}
                            </p>
                        </div>
                    </div>
                    <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="bg-amber-50 p-6 rounded-lg">
                            <img class="h-40 rounded w-full object-cover object-center mb-6"
                                src="{{ asset('img/掃除.png') }}" alt="content">
                            <h3 class="tracking-widest text-yellow-500 text-xs font-medium title-font">就労継続支援Ｂ型事業所〇〇
                            </h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">清掃作業</h2>
                            <p class="leading-relaxed text-base">
                                {{ Str::limit('就労継続支援B型事業所〇〇では、清掃業務に携わっています。この取り組みは、障がい者たちに雇用の機会を提供し、同時に地域の清潔さを支えています。笑顔で働く彼らは、公共の場や事業所内での清掃作業に心を込め、地域社会に貢献しています。事業所メンバーは、清掃のプロフェッショナルとして自己成長し、仕事への誇りを感じています。', 70, '...続きを読む') }}
                            </p>
                        </div>
                    </div>
                    <div class="xl:w-1/4 md:w-1/2 p-4">
                        <div class="bg-amber-50 p-6 rounded-lg">
                            <img class="h-40 rounded w-full object-cover object-center mb-6"
                                src={{ asset('img/クッキー.png') }} alt="content">
                            <h3 class="tracking-widest text-yellow-500 text-xs font-medium title-font">就労継続支援Ｂ型事業所〇〇
                            </h3>
                            <h2 class="text-lg text-gray-900 font-medium title-font mb-4">菓子製造</h2>
                            <p class="leading-relaxed text-base">
                                {{ Str::limit('就労継続支援B型事業所〇〇ではクッキーづくりをしています。株式会社〇〇はクッキー作りを委託しました。障がい者たちが手作りで製造するクッキーは、企業の商品として人気を博しています。この取り組みは、企業の社会的責任感と事業所の仕事の提供を結びつけ、地域社会に幸せを届けています。', 70, '...続きを読む') }}
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="text-gray-600 body-font">
            <div class="container px-5 py-24 mx-auto">
                <div class="flex flex-wrap w-full mb-20">
                    <div class="lg:w-1/2 w-full mb-6 lg:mb-0">
                        <h1 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900">出品サービス一覧</h1>
                        <div class="h-1 w-20 bg-yellow-500 rounded"></div>
                    </div>
                    {{-- <p class="lg:w-1/2 w-full leading-relaxed text-gray-500">現在、出品されているサービス</p> --}}
                </div>

                <x-flash-message :message="session('notice')" />
                <div class="flex flex-wrap -mx-1 lg:-mx-4 mb-4">
                    @foreach ($posts as $post)
                        <article class="w-full px-4 md:w-1/2 text-xl text-gray-800 leading-normal">
                            <a href="{{ route('posts.show', $post) }}">
                                <h2 class="sm:text-3xl text-2xl font-medium title-font mb-2 text-gray-900"">
                                    {{ $post->title }}</h2>
                                <h3>{{ $post->user->name }}</h3>
                                <p class="text-sm mb-2 md:text-base font-normal text-gray-600">
                                    <span
                                        class="text-red-400 font-bold">{{ date('Y-m-d H:i:s', strtotime('-1 day')) < $post->created_at ? 'NEW' : '' }}</span>
                                    {{ $post->created_at }}
                                </p>
                                <img class="w-full mb-2" src="{{ $post->image_url }}" alt="">
                                <p class="text-gray-700 text-base">{{ Str::limit($post->body, 50) }}</p>
                            </a>
                        </article>
                    @endforeach
                </div>
                {{ $posts->links() }}
            </div>
</x-app-layout>
