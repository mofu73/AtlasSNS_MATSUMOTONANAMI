<x-login-layout>


  <h2>機能を実装していきましょう。</h2>
<!-- フォローしている人のアイコン一覧 -->
<div class="">
  <hi>フォローリスト</h1>
  <div class="follow_icon">
    @foreach($followings as $following)
    <a><img src="{{ asset('storage/' .$following->images) }}" alt="フォローアイコン"></a>
    @endforeach
  </div>
</div>

@foreach($posts as $post)
 <p>名前:{{ $post->user->username }}</p>
 <p>投稿内容:{{ $post->post }}</p>
@endforeach

</x-login-layout>
