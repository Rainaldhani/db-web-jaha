@foreach ($contents as $content )
<div class="article-content" style="background-image: url('{{ asset($content->img) }}')">
    
    <div>
        <form method="post" action="{{route('content.destroy', $content->id)}}" name="button-delete" >
            @csrf
            <button>DELETE</button>
        </form>
        <a href="{{route('content.edit', $content->id)}}"><button style="margin-top:20px">EDIT</button></a>
    </div>
    
    <h4 class="article-bottom-content">{{$content->name}}</h4>
</div>
@endforeach
