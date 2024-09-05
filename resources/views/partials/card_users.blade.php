@foreach ($contents as $content )
<div class="article-content" style="background-image: url('{{ asset($content->img) }}')">
    <div></div>
    <h4 class="article-bottom-content">{{$content->name}}</h4>
</div>
@endforeach
