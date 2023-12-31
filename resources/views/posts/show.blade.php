<x-app-layout>
    <div class="container lg:w-3/4 md:w-4/5 w-11/12 mx-auto my-8 px-8 py-4 bg-white shadow-md">

        <x-flash-message :message="session('notice')" />
        <x-validation-errors :errors="$errors" />

        <article class="mb-2">
            <h2 class="font-bold font-sans break-normal text-gray-900 pt-6 pb-1 text-3xl md:text-4xl break-words">
                {{ $post->title }}</h2>
            <h3>{{ $post->user->name }}</h3>
            <p class="text-sm mb-2 md:text-base font-normal text-gray-600">
                <span
                    class="text-red-400 font-bold">{{ date('Y-m-d H:i:s', strtotime('-1 day')) < $post->created_at ? 'NEW' : '' }}</span>
                {{ $post->created_at }}
            </p>
            <img src="{{ $post->image_url }}" alt="" class="mb-4">
            <p class="text-gray-700 text-base">【 サービス内容 】<br>{!! nl2br(e($post->body)) !!}</p>
            <br>
            <!-- 追加：サービス価格 -->
            <p class="text-gray-700 text-base">【 価 格 】<br>{{ $post->price }}円</p>
            <br>
            <!-- 追加：予定作業人数 -->
            <p class="text-gray-700 text-base">【 予定作業人数】<br>{{ $post->number }}人</p>
            <br>
            <!-- 追加：購入にあたってのお願い -->
            <p class="text-gray-700 text-base">【 購入にあたってのお願い 】
                <br> {!! nl2br(e($post->request)) !!}
        </article>
        <div class="flex flex-row text-center my-4">
            @can('update', $post)
                <a href="{{ route('posts.edit', $post) }}"
                    class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20 mr-2">編集</a>
            @endcan
            @can('delete', $post)
                <form action="{{ route('posts.destroy', $post) }}" method="post">
                    @csrf
                    @method('DELETE')
                    <input type="submit" value="削除" onclick="if(!confirm('削除しますか？')){return false};"
                        class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20">
                </form>
            @endcan
        </div>
            @can('buyer')
                <a href="{{ route('posts.edit', $post) }}"
                    class="bg-orange-500 hover:bg-orange-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline w-20 mr-2">購入する</a>
            @endcan
    </div>
</x-app-layout>
