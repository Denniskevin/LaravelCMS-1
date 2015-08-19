@if(isset($previousArticle))
<div class="post-nav">
	Previous post: <a href="{{url('articles',$previousArticle->id)}}">{{$previousArticle->title}}</a>
</div>
@endif

@if(isset($nextArticle))
<div class="post-nav">
	Next post: <a href="{{url('articles',$nextArticle->id)}}">{{$nextArticle->title}}</a>
</div>
@endif
